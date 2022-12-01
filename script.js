const imgs = document.querySelectorAll('img');

function imgClickHandler(){
    this.classList.toggle('active');
}

imgs.forEach((img) => {
    img.addEventListener('click', imgClickHandler);
});