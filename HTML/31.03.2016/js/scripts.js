$(document).ready(function() {

  $( "#quizzes" ).submit(function( event ) {
    event.preventDefault();
    $("#home").addClass("hidden");
    $("#home_thanks").removeClass("hidden");
});

  /* dialog */
$(function() {
  $('.dialog').each(function(i, item){
    $( ".dialog" + i).dialog({
    autoOpen: false,
    draggable:false,
    modal:true,
    width: 'auto',
    height: 'auto',
    dialogClass: "loadingDialog",
    autoReposition: true,
    maxWidth: 480,
      position: {
      my: "center",
      at: "center",
      of: window
    },

     open: function(){
      jQuery('.ui-widget-overlay').bind('click',function(){
        jQuery('#dialog,#login').dialog('close');
      })
    }
  })

  });

  $( ".photo1" ).click(function() {
    var calldialog = $(this).data().calldialog;
    $('.' + calldialog).dialog( "open" );
    console.log(calldialog)
  });

  $(window).resize(function() {
    $("#login").dialog("option", "position", {my: "center", at: "center", of: window});
  });
});

  if($(".container_top_slideshow").length > 0) {
      $(".container_top_slideshow").owlCarousel({
         navigation : true,
         pagination: true,
         slideSpeed : 300,
         paginationSpeed : 400,
         navigationText: false,
         singleItem: true
      });
   }


   if($('.leftbar_images_slider').length > 0) {
      $(".leftbar_images_slider").owlCarousel({
         navigation : false,
         pagination: true,
         slideSpeed : 300,
         paginationSpeed : 400,
         navigationText: false,
         singleItem: true
      });
   }

   if($('.news_slider').length > 0) {
      $(".news_slider").owlCarousel({
         navigation : false,
         pagination: true,
         slideSpeed : 300,
         paginationSpeed : 400,
         navigationText: false,
         singleItem: true
      });
   }

   if($('.tournament_slider').length > 0) {
      $(".tournament_slider").owlCarousel({
         navigation : true,
         pagination: true,
         slideSpeed : 300,
         paginationSpeed : 400,
         navigationText: false,
         singleItem: true,
         afterInit : attachEvent
      });
   }

  if($('.shooter_slider').length > 0) {
      $(".shooter_slider").owlCarousel({
         navigation : true,
         pagination: true,
         slideSpeed : 300,
         paginationSpeed : 400,
         navigationText: false,
         singleItem: true,
         afterInit : attachEvent
      });
   }

   function attachEvent(elem){
      elem.parent().find('.tournament_slider_next').on('click',function(){
         elem.trigger('owl.next')
      })

      elem.parent().find('.tournament_slider_prev').on('click',function(){
         elem.trigger('owl.prev')
      })
   }

   if($('.carousel_slider').length) {
      $('.carousel_slider').owlCarousel({
         //autoPlay: 3000,
         items : 3,
         navigation : false,
         pagination: true,
         navigationText: false,
         responsive: false
      });
   }

   if($('.dialog_slider').length) {
        $('.dialog_slider').owlCarousel({
            //autoPlay: 3000,
            items : 6,
            navigation : false,
            pagination: true,
            navigationText: false,
            responsive: false
        });
    }


  if($( "#accordion" ).length) {
      $(function() {
         $( "#accordion" ).accordion({
            autoHeight:false,
            heightStyle: "content",
            collapsible: true,
            alwaysOpen: false,
            header: 'span',
            active:2,
            header: '.accordion_title'
            //active: false
         });
      });
   }

   if($( "#item_tabs" ).length) {
      $(document).ready(function() {
           $(function() {
            $( "#item_tabs" ).tabs();
         });
      });
   }

   /*if($('.leftbar_images_slider_item').length && $('.content_middle_slider_item').length) {
      var $container = ['.leftbar_images_slider_item', '.content_middle_slider_item'];
      var itemSelector = ['.leftbar_slider_images', '.content_slider_images'];

      $container.forEach(function(item, key) {
         $(item).imagesLoaded(function(){
             $(item).masonry({
                 itemSelector: itemSelector[key],
                 columnWidth: 1
             });
          });
      });
   }     */


   if($(".content_middle_slider").length > 0) {
      $(".content_middle_slider").owlCarousel({
         navigation : false,
         pagination: true,
         slideSpeed : 300,
         paginationSpeed : 400,
         navigationText: false,
         singleItem: true
      });
   }

   if($('.fancybox').length) {
      $('.fancybox').fancybox({
            helpers: {
                overlay: {
                    locked: false
                }
            }
        });
   }

   /* navigation on hover dropdown show */
   $('.navigation li').hover(function() {
      $(this).find('.submenu').stop(false, true).fadeIn(100);
      $(this).addClass('navigation_active_item');
   }, function() {
      $(this).find('.submenu').stop(false, true).fadeOut(100);
      if($(this).find('.submenu:visible')) {
         $(this).removeClass('navigation_active_item');
      }
   })

});

/*Video*/
$(document).ready(function() {
    if($(".various").length > 0) {
        $(".various").fancybox({
            maxWidth   : 800,
            maxHeight  : 600,
            fitToView  : false,
            width     : '70%',
            height    : '70%',
            autoSize   : false,
            closeClick : false,
            openEffect : 'none',
            closeEffect    : 'none',
            helpers: {
                overlay: {
                    locked: false
                }
            },
            beforeShow  : function() {
                    // Find the iframe ID
                    var id = $.fancybox.inner.find('iframe').attr('id');
                   console.log('id', id);
                }
        });
    }

     $('.photo1 a').click(function(e){
      e.preventDefault();
    })
})
/*  Video  */

//"http://img.youtube.com/vi/"+vid+"/0.jpg";

 /*--------------------------------------------- Form Validation ---------------------------------*/

 function validateForm() {
    var x = document.forms["clearfix"]["username"].value;
    if (x == null || x == "") {
        alert("Fill out the form");
        return ("Registration is done successfully");
    }
}


