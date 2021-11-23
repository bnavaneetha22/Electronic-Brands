
// secondary-navbar

const secondaryNavbar = document.querySelector('.sec-container');
window.addEventListener('scroll', function(event) {
    const scrollHeight = event.target.scrollingElement.scrollTop;
    console.log(scrollHeight);
    if(scrollHeight >= 400){
        secondaryNavbar.classList.remove('hide');
    }else{
        secondaryNavbar.classList.add('hide');
    }
});

// navbar toggle for small devices

const toggleBtn = document.querySelector(".nav-toggle");
const navbarToggleModal = document.querySelector(".nav-toggle-modal");

toggleBtn.addEventListener('click', function(){
    if(navbarToggleModal.classList.contains('hide')){
        navbarToggleModal.classList.remove('hide')
        toggleBtn.classList.add('rotate')
    }else{
        navbarToggleModal.classList.add('hide')
        toggleBtn.classList.remove('rotate')
    }
});


