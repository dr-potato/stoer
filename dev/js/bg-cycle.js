$(document).ready(function(){
  // Generate random number between 1 - 6 (there are 6 images)
  var nr = Math.floor(Math.random() * 6) + 1;
  $(".Header").addClass('Header--bg' + nr);
});
