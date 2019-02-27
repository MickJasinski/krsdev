AOS.init();

$(document).ready(function() {
  $('.acc-btn').on('click', function() {
    if ($('#btn1[aria-expanded="true"]')) {
      $('.topic-img').attr('src', 'images/stethoscope.jpg');
    } else if ($('#btn2[aria-expanded="true"]')) {
      $('.topic-img').attr('src', 'images/compFix.jpg');
    } else if ($('#btn3[aria-expanded="true"]')) {
      $('.topic-img').attr('src', 'images/compFix.jpg');
    }
  })
})