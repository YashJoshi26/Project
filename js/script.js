let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    profile.classList.remove('active');
}

let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () => {
    profile.classList.toggle('active');
    navbar.classList.remove('active');
}

window.onscroll = () => {
    profile.classList.remove('active');
    navbar.classList.remove('active');
}

function loader() {
    document.querySelector('.loader').style.display = 'none';
}

function fadeOut() {
    setInterval(loader, 1600);
}

window.onload = fadeOut;


let searchBtn = document.querySelector('#search-btn');
let searchForm = document.querySelector('.header .flex .search-form');

searchBtn.onclick = () =>{
    searchBtn.classList.toggle('fa-xmark');
    searchForm.classList.toggle('active');
}

