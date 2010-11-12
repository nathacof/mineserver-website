$(document).ready(function() {
  $('#splash-inner').loopedSlider({
    'container': '#splash-container',
    'slides': '#splash-slides',
    'previous': '#splash-nav-previous',
    'next': '#splash-nav-next',
    'autoStart': 5000,
    'hoverPause': true,
    'containerClick': false
  });
});
