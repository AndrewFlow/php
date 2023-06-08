let button = document.querySelector('.butt');
let answer = document.querySelector('.answer');


button.addEventListener('click', function () {
    button.classList.toggle('status');
    if (button.classList.contains('status')) {
        console.log('красный')
    }
});