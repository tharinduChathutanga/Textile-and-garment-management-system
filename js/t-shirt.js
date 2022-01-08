const colors = document.querySelectorAll('.colors-tshirt span') ;
const image = document.querySelector('.left-column img') ;
const input = document.querySelector('.right-column .colors-tshirt .quantity input');
const price = document.querySelector('.right-column .price') ;

    input.addEventListener('change',()=> {
        price.textContent = `USD ${input.value * 50}` ;
    }) ;
    colors[0].addEventListener('click' , ()=> {
        image.src = '../images/t-shirt.png' ;
    }) ;
    colors[1].addEventListener('click' , ()=> {
        image.src = '../images/t-shirt-white.png' ;
    }) ;
    colors[2].addEventListener('click' , ()=> {
        image.src = '../images/t-shirt-orange.png' ;
    }) ;
    colors[3].addEventListener('click' , ()=> {
        image.src = '../images/t-shirt-black.png' ;
    }) ;






