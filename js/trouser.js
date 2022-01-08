const colors = document.querySelectorAll('.colors-trouser span') ;
const image = document.querySelector('.left-column img') ;
const input = document.querySelector('.right-column .colors-trouser .quantity input');
const price = document.querySelector('.right-column .price') ;

    input.addEventListener('change',()=> {
        price.textContent = `USD ${input.value * 50}` ;
    }) ;
    colors[0].addEventListener('click' , ()=> {
        image.src = '../images/trouser.png' ;
    }) ;
    






