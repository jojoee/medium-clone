(function($) {
  // Site title
  wp.customize('blogname', function(value) {
    value.bind(function(to) {
      $('.site-title').text(to);
    });
  });
})(jQuery);
