/* شناوری هدر*/
const header = document.querySelector("header");

window.addEventListener("scroll", function() {
header.classList.toggle("sticky", window.scrollY > 50);

});

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () =>{
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
}

window.onscroll = () =>{
    menu.classList.remove('bx-x');
    navlist.classList.remove('open');
}

/*slider*/
let nextDom = document.getElementById('next');
let prevDom = document.getElementById('prev');
let carouselDom = document.querySelector('.carousel');
let listItemDom = document.querySelector('.carousel .list');
let thumbnailDom = document.querySelector('.carousel .thumbnail');

nextDom.onclick = function(){
    showSlider('next');
}
prevDom.onclick = function(){
    showSlider('prev');
}
let timeRunning = 3000;
let timeAutoNext=7000;
let runTimeout;
let runAuto = setTimeout(()=>{
    nextDom.click();
}, timeAutoNext);

function showSlider(type){
    let itemSlider = document.querySelectorAll('.carousel .list .item');
    let itemThumbnail = document.querySelectorAll('.carousel .thumbnail .item');

    if(type === 'next'){
        listItemDom.appendChild(itemSlider[0]);
        thumbnailDom.appendChild(itemThumbnail[0]);
        carouselDom.classList.add('next');
    }else{
        let positionLastItem = itemSlider.length - 1;
        listItemDom.prepend(itemSlider[positionLastItem]);
        thumbnailDom.prepend(itemThumbnail[positionLastItem]);
        carouselDom.classList.add('prev');
    }
    clearTimeout(runTimeout);
    runTimeout = setTimeout(() =>{
        carouselDom.classList.remove('next');
        carouselDom.classList.remove('prev');
    }, timeRunning);

    clearTimeout(runAuto);
    runAuto = setTimeout(()=>{
        nextDom.click();
    }, timeAutoNext);
}


/*search*/
const searchbtn = document.querySelector("[data-search-btn]");
const searchcontainer = document.querySelector("[data-search-container]");
const searchsubmit = document.querySelector("[data-search-submit-btn]");
const searchclosebtn = document.querySelector("[data-search-close-btn]");

const searchboxelements = [searchbtn, searchsubmit, searchclosebtn];

for(let i=0; i<searchboxelements.length; i++){
    searchboxelements[i].addEventListener("click", function() {
        searchcontainer.classList.toggle("active");
        document.body.classList.toggle("active");
    });
}



/*tab*/

let listt = document.querySelectorAll(".list-tab li");
let boxes = document.querySelectorAll(".box-tab");

listt.forEach((el)=>{
    el.addEventListener("click", (e)=>{

        listt.forEach((li)=>{
            li.classList.remove("active");
        });
        e.target.classList.add("active");

        boxes.forEach((el2)=>{
            el2.style.display = "none";
        });
        document.querySelectorAll(e.target.dataset.filter).forEach((li)=>{
            li.style.display="flex";
        });
    });
});

