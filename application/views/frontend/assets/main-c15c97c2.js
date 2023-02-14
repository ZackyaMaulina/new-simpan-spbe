let body = document.body;
let showModal = document.querySelector('.add-article');
let closeModal = document.querySelector('.btn-close');
let modal = document.querySelector('.modal');

showModal.addEventListener("click", function (e) {
    e.preventDefault();
    modal.classList.toggle('show');
    body.style.overflow = "hidden";
});

closeModal.addEventListener("click", function (e) {
    e.preventDefault();
    modal.classList.toggle('show');
    body.style.overflow = "auto";
});