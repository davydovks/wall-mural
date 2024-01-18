let images = document.querySelectorAll('.card__image');

images.forEach(image => {
    image.addEventListener('click', function() {
        if (!image.parentElement.classList.contains("selected")) {
            images.forEach((img) => img.parentElement.classList.remove("selected"));
            document.querySelector('.quiz__button').classList.add("active");
            image.parentElement.classList.toggle("selected");
        } else {
            document.querySelector('.quiz__button').classList.remove("active");
            image.parentElement.classList.toggle("selected");
        }
    });
});
