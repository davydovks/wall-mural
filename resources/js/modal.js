const modal = document.querySelector('.modal__overlay');
const modal_button = document.querySelector('.modal__button');

modal_button.addEventListener('click', function () {
    modal.remove();
});
