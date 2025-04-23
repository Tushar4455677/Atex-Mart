<?php
session_start();
include 'db_config.php'; // Database connection

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user email
$user_stmt = $conn->prepare("SELECT email FROM users WHERE id = ?");
$user_stmt->bind_param("i", $user_id);
$user_stmt->execute();
$user_result = $user_stmt->get_result();
$user = $user_result->fetch_assoc();
$user_email = $user['email'];

// Fetch transactions
$txn_stmt = $conn->prepare("SELECT * FROM transactions WHERE user_id = ?");
$txn_stmt->bind_param("i", $user_id);
$txn_stmt->execute();
$txns = $txn_stmt->get_result();
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Transactions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .table-hover tbody tr:hover { background-color: #f1f1f1; }
        .modal-content { animation: fadeIn 0.4s ease-in-out; }
        @keyframes fadeIn {
            from {opacity: 0; transform: scale(0.9);}
            to {opacity: 1; transform: scale(1);}
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">My Transaction History</h2>
    <table class="table table-bordered table-hover shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
        <?php while($txn = $txns->fetch_assoc()) { ?>
            <tr>
                <td><?= htmlspecialchars($txn['id']) ?></td>
                <td><?= htmlspecialchars($user_email) ?></td>
                <td>
                    <button class="btn btn-info btn-sm viewDetailsBtn" data-txn='<?= json_encode($txn) ?>'>
                        View Details
                    </button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="txnModal" tabindex="-1" aria-labelledby="txnModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-info shadow">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="txnModalLabel">Transaction Details</h5>
        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="txnDetailsBody">
        <!-- Transaction details will be filled by JS -->
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.querySelectorAll('.viewDetailsBtn').forEach(btn => {
        btn.addEventListener('click', function() {
            let txn = JSON.parse(this.getAttribute('data-txn'));
            let html = `
                <p><strong>Transaction ID:</strong> ${txn.transaction_id}</p>
                <p><strong>Payer Name:</strong> ${txn.payer_name}</p>
                <p><strong>Payer Email:</strong> ${txn.payer_email}</p>
                <p><strong>Amount:</strong> ${txn.amount} ${txn.currency}</p>
                <p><strong>Status:</strong> ${txn.payment_status}</p>
                <p><strong>Payment Time:</strong> ${txn.payment_time}</p>
            `;
            document.getElementById('txnDetailsBody').innerHTML = html;
            let modal = new bootstrap.Modal(document.getElementById('txnModal'));
            modal.show();
        });
    });
</script>
</body>
</html>
