/* شناوری هدر*/
const header = document.querySelector("header");

window.addEventListener("scroll", function() {
header.classList.toggle("sticky", window.scrollY > 80);
});

const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', ()=> {
   wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
 });
 
 