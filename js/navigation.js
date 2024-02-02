'use strict';

// Navigation

var myNav = document.querySelector('.nav1');

window.onscroll = function () {
    if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100) {
        myNav.classList.add("scroll");
    } else {
        myNav.classList.remove("scroll");
    }
};

// Dialog

document.querySelector('#tirol').addEventListener('click', () => {
    document.querySelector('#dialog_tirol').showModal();    
})

document.querySelector('.close_tirol').addEventListener('click', () => {
    document.querySelector('#dialog_tirol').close();    
})