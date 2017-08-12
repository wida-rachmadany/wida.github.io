(function() {
  var $doc;

  $doc = $(document);

  $doc.on('click', '.envelope', function() {
    return $(this).toggleClass('open');
  });


  /*$doc.on 'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', '.open .flap-outside', ->
    $(this).css
      'z-index': 0
   */

}).call(this);