//var h1Visible = h1.innerHTML = 'Modul<span class="gold">or</span>'
var h1 = document.querySelector('h1');

function hidden(tag) {
  tag.classList.add('hidden');
}

function m_visible(tag) {
  tag.classList.remove('hidden');
}

document.querySelector('.scrollBtn').addEventListener('click', function(){
  document.querySelector('#section-stand-choice').scrollIntoView({
    behavior: 'smooth'
  });
  hidden(h1);
});

var ticking = false;
var last_known_scroll_position = 0;
function doSomething(scroll_pos) {
  if (last_known_scroll_position < 40) {
    m_visible(h1);
  }
  else{
    hidden(h1);
  }
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
