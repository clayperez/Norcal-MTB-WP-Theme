
// ANGELS CRIPT
    $(function () {
        $('#_NorCal-Logo-Grey').hover( 
          function () {
              $(this).attr('src', $(this).attr('src').replace('http://uploads.webflow.com/56a564faf7361fff543a3df2/56aa766a6e2e71590575513f_NorCal-Logo_grey.png', 'http://uploads.webflow.com/56a564faf7361fff543a3df2/56b0e7133b8957cb2c3b5a74_NorCal-Logo_color.png') );
              console.log( $(this).attr('src'),"first");
          },
          function () {
              $(this).attr('src', $(this).attr('src').replace('http://uploads.webflow.com/56a564faf7361fff543a3df2/56b0e7133b8957cb2c3b5a74_NorCal-Logo_color.png', 'http://uploads.webflow.com/56a564faf7361fff543a3df2/56aa766a6e2e71590575513f_NorCal-Logo_grey.png') );
              console.log( $(this).attr('src'),"second");
          }
      );
    });

    $(window).scroll(function(){
      if($(window).scrollTop() >35){
        $(".slide-container-container, .w-slider-arrow-left, .w-slider-arrow-right").fadeOut(700);
        return;
      }
      $(".slide-container-container, .w-slider-arrow-left, .w-slider-arrow-right").fadeIn(700);
    });
