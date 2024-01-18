let cards = document.querySelectorAll('.card__top');

cards.forEach(card => {
    card.addEventListener('click', function() {
        if (!card.classList.contains("selected")) {
            cards.forEach((card) => card.classList.remove("selected"));
            document.querySelector('.quiz__button').removeAttribute("disabled");
            card.classList.toggle("selected");
        } else {
            card.classList.toggle("selected");
            document.querySelector('.quiz__button').setAttribute("disabled", "disabled");
        }
    });
});
