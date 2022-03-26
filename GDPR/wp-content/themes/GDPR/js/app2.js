jQuery(document).ready(function ($) {
  $('.input-field').each(function () {
    $(this).focus(function () {
      $('label[for="' + $(this).attr('id') + '"]').addClass('top_placeholer');
    });
    $(this).blur(function () {
      if (!$(this).val()) {
        $('label[for="' + $(this).attr('id') + '"]').removeClass('top_placeholer');
      }
    });
  });


    // $('.popup-with-zoom-anim').magnificPopup({
    //   type: 'inline',
  
    //   fixedContentPos: true,
    //   fixedBgPos: true,
  
    //   overflowY: 'auto',
  
    //   closeBtnInside: true,
    //   preloader: false,
      
    //   midClick: true,
    //   removalDelay: 300,
    //   mainClass: 'my-mfp-zoom-in',
    //   closeMarkup: '<img class="mfp-close" src="/wp-content/themes/GDPR/img/cancel.svg" alt="close">'

    // });


    document.addEventListener( 'wpcf7mailsent', function( event ) {
     
      setTimeout(function(){
        $.magnificPopup.open({
          items: {src: '#small-dialog'},
          type: 'inline',
      
          fixedContentPos: true,
          fixedBgPos: true,
      
          overflowY: 'auto',
      
          closeBtnInside: true,
          preloader: false,
          
          midClick: true,
          removalDelay: 300,
          mainClass: 'my-mfp-zoom-in',
          closeMarkup: '<img class="mfp-close" src="/wp-content/themes/GDPR/img/cancel.svg" alt="close">'
        });
        }, 200);

    }, false );
 

    function setEqualHeight(columns)
    {
      var tallestcolumn = 0;
      columns.each(
          function()
          {
            currentHeight = jQuery(this).height();
            if(currentHeight > tallestcolumn)
            {
              tallestcolumn = currentHeight;
            }
          }
      );
      columns.height(tallestcolumn);
    }

    $('.program').each(function(){
      // setEqualHeight($(this).find($('.row>div')));
       setEqualHeight($(this).children().children());
    })
    setEqualHeight($('.mpc-flipbox__back .wpb_text_column'));
 
  document.addEventListener( 'wpcf7mailsent', function( event ) {
      if(event.detail.contactFormId == '1249') {
        dataLayer.push({'event': 'Form_Send'});
      }
  }, false );

  document.addEventListener( 'wpcf7mailsent', function( event ) {
      if(event.detail.contactFormId == '279') {
        dataLayer.push({'event': 'Question_Send'});
      }
  }, false );   


});