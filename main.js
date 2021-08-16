let base1 = document.getElementById('base1');
let base2 = document.getElementById('base2');
let base3 = document.getElementById('base3');
let base4 = document.getElementById('base4');
let text = document.getElementById('text');

window.addEventListener('scroll', function(){
    var value = window.scrollY;
    base1.style.top = -value*0.5+'px';
    base2.style.top = value*0.8+'px';
    base3.style.top = value*1+'px';
    base4.style.top = value*1+'px';
    text.style.top = value*0.5+'px';
});

window.addEventListener('scroll', function(){
    var value = window.pageYOffset;
    text.classList.add('smooth');
    text.style.marginRight = value * (-1);
    console.log(value); 
    
});
