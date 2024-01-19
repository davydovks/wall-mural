let cards = document.querySelectorAll('.card__top');
let button = document.querySelector('.quiz__button');

cards.forEach(card => {
    card.addEventListener('click', function () {
        if (!card.classList.contains("checked")) {
            cards.forEach((card) => card.classList.remove("checked"));
            button.removeAttribute("disabled");
            card.classList.toggle("checked");
        } else {
            card.classList.toggle("checked");
            button.setAttribute("disabled", "disabled");
        }
    });
});

if (button) {
    button.addEventListener('click', function () {
        if (!button.hasAttribute("disabled")) {
            let url = new URL(window.location.href);
            let checked = '';
            cards.forEach(function (card, key) {
                if (card.classList.contains("checked")) {
                    checked = key;
                }
            });
            let cookie = url.pathname + '=' + checked;
            document.cookie = cookie;
        }
    });
}
