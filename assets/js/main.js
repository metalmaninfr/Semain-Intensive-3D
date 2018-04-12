var h1 = document.querySelector('h1');
var navItems = document.querySelectorAll(".navItem");
var dots = document.querySelectorAll('.navDotsItem');

var ticking = false;
var last_known_scroll_position = 0;


var section1 = document.querySelector('#section-1');
var section2 = document.querySelector('#section-2');
var section3 = document.querySelector('#section-3');
var section4 = document.querySelector('#section-4');

// ---------- FUNCTIONS

function hidden(tag) {
  tag.classList.add('hidden');
}

function m_visible(tag) {
  tag.classList.remove('hidden');
}

function doSomething(scroll_pos) {
    if (last_known_scroll_position < 40) {
      m_visible(h1);
    }
    else{
      hidden(h1);
    }
    for (var i = 0; i < dots.length; i++) {
    if (last_known_scroll_position < 935) {
      dots[i].classList.remove('dot-isActive');
      dots[0].classList.add('dot-isActive');
    }
    else if (last_known_scroll_position < 1905) {
        dots[i].classList.remove('dot-isActive');
        dots[1].classList.add('dot-isActive');
    }
    else if (last_known_scroll_position < 2850) {
        dots[i].classList.remove('dot-isActive');
        dots[2].classList.add('dot-isActive');
    }
    else if (last_known_scroll_position > 2850) {
        dots[i].classList.remove('dot-isActive');
        dots[3].classList.add('dot-isActive');
    }
    console.log(window.scrollY);
  }
}

// --------- SCROLLING

document.querySelector('.scrollBtn').addEventListener('click', function(){
  section2.scrollIntoView({
    behavior: 'smooth'
  });
});

for (var i = 0; i < navItems.length; i++) {
  navItems[0].addEventListener('click', function(){
    section1.scrollIntoView({
      behavior: 'smooth'
    });
  });
  navItems[1].addEventListener('click', function(){
    section2.scrollIntoView({
      behavior: 'smooth'
    });
  });
  navItems[2].addEventListener('click', function(){
    section3.scrollIntoView({
      behavior: 'smooth'
    });
  });
  navItems[3].addEventListener('click', function(){
    section4.scrollIntoView({
      behavior: 'smooth'
    });
  });
}


window.addEventListener('scroll', function(e) {
last_known_scroll_position = window.scrollY;
  if (!ticking) {
    window.requestAnimationFrame(function() {
      doSomething(last_known_scroll_position);
      ticking = false;
    });
    ticking = true;
  }
});
