

window.onload = function () {
    setTimeout(() => {
        document.querySelector('.popup-message').classList.add('show');
    }, 500);
};


window.addEventListener('scroll', () => {
    const popup = document.querySelector('.popup-message');
    const popupPosition = popup.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.5;

     if (popupPosition < screenPosition) {
        popup.classList.add('visible');
    } else {
        popup.classList.remove('visible');
    }
});


document.querySelector('.popup-message').addEventListener('click', () => {
    document.querySelector('.popup-message').classList.toggle('hide');
});
function redirectToNewPage() {
    window.location.href = "signup.html"; 
}
function redirectToNewPage1() {
    window.location.href = "login.html"; 
}
function redirectToNewPage2() {
    window.location.href = "manage_users.php"; 
}




