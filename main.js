let base1 = document.getElementById('base1');
let base2 = document.getElementById('base2');
let base3 = document.getElementById('base3');
let base4 = document.getElementById('base4');
let base5 = document.getElementById('base5');
let base6 = document.getElementById('base6');
/* let base2 = document.getElementById('base2');
let base3 = document.getElementById('base3');
let base4 = document.getElementById('base4'); */
let text = document.getElementById('text');
let text1 = document.getElementById('text1');
let text2 = document.getElementById('text2');
let ptf = document.getElementById('PTF');
let surmon = document.getElementById('surmon');

window.addEventListener('scroll', function(){
    var value = window.scrollY;
    base1.style.top = value*0.5+'px';
    base1.style.top = value*0.6+'px';
    base1.style.top = value*0.7+'px';
    base1.style.top = value*0.8+'px';
    base1.style.top = value*0.9+'px';
    base1.style.top = value*1+'px';

    text.style.top = value*0.5+'px';
    text1.style.bottom = value*0.5+'px';
    text2.style.bottom = value*0.5+'px';
});

window.addEventListener('scroll', function(){
    let value = window.scrollY;
    ptf.style.right = value*2+"px";
    surmon.style.left = value*2+"px";






}
);

