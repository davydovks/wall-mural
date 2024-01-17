let cards = document.querySelectorAll('.quiz1__card-image');

cards.forEach(card => {
    card.addEventListener('click', function() {
        if (!card.classList.contains("selected")) {
            cards.forEach((card) => card.classList.remove("selected"));
            document.querySelector('.quiz1__button').style.background == "red";
        }
        card.classList.toggle("selected");
    });
});
