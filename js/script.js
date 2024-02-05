'use strict';

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
  
  // Dialog

document.querySelector('#tirol').addEventListener('click', () => {
    document.querySelector('#dialog_tirol').showModal();    
})

document.querySelector('.close_tirol').addEventListener('click', () => {
    document.querySelector('#dialog_tirol').close();    
})

document.querySelector('#salzburg').addEventListener('click', () => {
  document.querySelector('#dialog_salzburg').showModal();    
})

document.querySelector('.close_salzburg').addEventListener('click', () => {
  document.querySelector('#dialog_salzburg').close();    
})

document.querySelector('#kärnten').addEventListener('click', () => {
  document.querySelector('#dialog_kaernten').showModal();    
})

document.querySelector('.close_kaernten').addEventListener('click', () => {
  document.querySelector('#dialog_kaernten').close();    
})

document.querySelector('#niederösterreich').addEventListener('click', () => {
document.querySelector('#dialog_niederoesterreich').showModal();    
})

document.querySelector('.close_niederoesterreich').addEventListener('click', () => {
document.querySelector('#dialog_niederoesterreich').close();    
})

document.querySelector('#oberösterreich').addEventListener('click', () => {
  document.querySelector('#dialog_oberoesterreich').showModal();    
})

document.querySelector('.close_oberoesterreich').addEventListener('click', () => {
  document.querySelector('#dialog_oberoesterreich').close();    
})

document.querySelector('#wien').addEventListener('click', () => {
document.querySelector('#dialog_wien').showModal();    
})

document.querySelector('.close_wien').addEventListener('click', () => {
document.querySelector('#dialog_wien').close();    
})

document.querySelector('#steiermark').addEventListener('click', () => {
  document.querySelector('#dialog_steiermark').showModal();    
})

document.querySelector('.close_steiermark').addEventListener('click', () => {
  document.querySelector('#dialog_steiermark').close();    
})

document.querySelector('#südtirol').addEventListener('click', () => {
  document.querySelector('#dialog_suedtirol').showModal();    
  })
  
  document.querySelector('.close_suedtirol').addEventListener('click', () => {
  document.querySelector('#dialog_suedtirol').close();    
  })

document.querySelector('#deutschland').addEventListener('click', () => {
  document.querySelector('#dialog_deutschland').showModal();    
  })
  
  document.querySelector('.close_deutschland').addEventListener('click', () => {
  document.querySelector('#dialog_deutschland').close();    
  })