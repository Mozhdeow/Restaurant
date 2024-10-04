/* about us */


let left = document.getElementsByClassName('bx bxs-left-arrow')[0];
let right = document.getElementsByClassName('bx bxs-right-arrow')[0];
let cards = document.getElementsByClassName('cards-about')[0];

left.addEventListener('click', () => {
    cards.scrollLeft += 160;
});
right.addEventListener('click', () => {
    cards.scrollLeft -= 160;
});


let poster = document.getElementById('poster');
let title = document.getElementById('title-about');


Array.from(document.getElementsByClassName('card-single-about')).forEach((ele, i)=> {
    ele.addEventListener('click', ()=> {
        poster.src = ele.getElementsByTagName('img')[0].src;
        title.innerText = ele.getElementsByTagName('h5')[0].innerText;
    });
});

