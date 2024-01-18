let file_input = document.querySelector('.form__file input[type=file]');

file_input.addEventListener('change', function(){
    document.querySelector('.form__file span').innerHTML = 'Прикреплено';
});
