// Google Font Load
WebFontConfig = {
  google: { families: [ 'Titillium+Web:400,700:latin' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();

// menu
var cat = $('#menu-cat'),
    search = $('#menu-search');

cat.on('click', function(e){
  var id = $(this).attr('href');
  $(id).slideToggle();

  if($('#search').is(':visible')) {
    $('#search').slideUp();
  }
  e.preventDefault();
});

search.on('click', function(e){
  var id = $(this).attr('href');
  $(id).slideToggle();

  if($('#categories').is(':visible')) {
    $('#categories').slideUp();
  }
  e.preventDefault();
});

