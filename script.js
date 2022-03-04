let main = document.createElement('main');
document.body.appendChild(main);

function imgClickHandler(){
    this.classList.toggle('active');
}

var xhr = new XMLHttpRequest();
xhr.open("GET", "/img", true);
xhr.responseType = 'document';
xhr.onload = () => {
    if (xhr.status === 200) {
        var elements = xhr.response.getElementsByTagName("a");
        for (x of elements) {
        if ( x.href.match(/\.(jpe?g|png|gif|svg)$/) ) { 
            let img = document.createElement("img");
            img.src = x.href;
            img.addEventListener('click', imgClickHandler);
            main.appendChild(img);
        } 
        };
    } 
    else {
        alert('Request failed. Returned status of ' + xhr.status);
    }
}
xhr.send()