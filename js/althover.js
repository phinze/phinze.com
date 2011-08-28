$(function() {
  $('*:data("althover")').each(function() {
    var elem = $(this);
    var span = $('<span class="althover-span">')
    span.hide();
    elem.after(span);
    span.html(elem.data('althover'));

    elem.hoverIntent({
      timeout: 500,
      over: function() {
        console.log('over');
        span.stop().animate({'width': 'show'});
      },
      out: function() {
        console.log('out');
        span.stop().animate({'width': 'hide'});
      }
    });
  });
});
