/* let base1 = document.getElementById('base1');
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
); */

(function() {
    // Add event listener
    document.addEventListener("mousemove", parallax);
    const elem = document.querySelector("#parallax");
    // Magic happens here
    function parallax(e) {
        let _w = window.innerWidth/2;
        let _h = window.innerHeight/2;
        let _mouseX = e.clientX;
        let _mouseY = e.clientY;
        let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
        let _depth2 = `${50 - (_mouseX - _w) * 0.02}% ${50 - (_mouseY - _h) * 0.02}%`;
        let _depth3 = `${50 - (_mouseX - _w) * 0.06}% ${50 - (_mouseY - _h) * 0.06}%`;
        let x = `${_depth3}, ${_depth2}, ${_depth1}`;
        console.log(x);
        elem.style.backgroundPosition = x;
    }

})();




  