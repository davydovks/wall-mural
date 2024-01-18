let cards = document.querySelectorAll('.card__top');
let button = document.querySelector('.quiz__button');

cards.forEach(card => {
    card.addEventListener('click', function() {
        if (!card.classList.contains("selected")) {
            cards.forEach((card) => card.classList.remove("selected"));
            button.removeAttribute("disabled");
            card.classList.toggle("selected");
        } else {
            card.classList.toggle("selected");
            button.setAttribute("disabled", "disabled");
        }
    });
});

if (button) {
    button.addEventListener('click', function() {
        if (!button.hasAttribute("disabled")) {
            let url = new URL(window.location.href);
            let selected = '';
            cards.forEach(function(card, key) {
                if (card.classList.contains("selected")) {
                    selected = key;
                }
            });
            let cookie = url.pathname + '=' + selected;
            document.cookie = cookie;
        }
    });
}
