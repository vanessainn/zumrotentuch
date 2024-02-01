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

// Accordion

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}