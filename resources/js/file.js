let file_input = document.querySelector('.form__file input[type=file]');

if (file_input) {
    file_input.addEventListener('change', function(e) {
        if (e.target.files[0]) {
            document.querySelector('.form__file span').textContent = 'Прикреплено';
        }
    });
}
