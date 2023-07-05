// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
    // We execute the same script as before
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
});


$(window).bind('hashchange', function() {
    setTimeout(function() {
        changeColor();
    }, 250);
});

$(window).load(function() {
    changeColor();
});

const cursor = document.querySelector('.cursor');

$("a").mouseover(function() {
    cursor.classList.add("hover");
});

$("a").mouseout(function() {
    cursor.classList.remove("hover");
});

VANTA.NET({
    el: "#hero",
    mouseControls: true,
    touchControls: true,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0xd4d4d4,
    backgroundColor: 0xffffff,
    backgroundColor2: 0xff0000,
    points: 43,
    maxDistance: 40,
    spacing: 15,
    showDots: true,
    dotColor: 0xff5c5c5c
})