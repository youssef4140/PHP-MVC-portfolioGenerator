let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

menu.onclick = ()=>{
    menu.classList.toggle('fa-times');
    header.classList.toggle('h-active');
    document.body.classList.toggle('b-active');
}
window.onscroll=()=>{
    if(window.innerWidth < 991){
        menu.classList.remove('fa-times');
        header.classList.remove('h-active');
        document.body.classList.remove('b-active');

    }
}
console.log('smth')