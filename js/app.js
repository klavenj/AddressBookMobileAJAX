$(document).ready(function(){

   
    var id = 2;


    
    ///Search Function
    jQuery.expr[':'].Contains = function(a,i,m){
      return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
  };


   function listFilter(header, list) {
   

   //This will append input into the nav bar
    
    var  input = $(".form-control.custom-search");
    var value = $(".name");
    console.log(value);

    $(input)
      .change( function () {
        
        //Will grab value for the form.
        var filter = $(this).val();
        
        if(filter) {

          //This will slide up any element that does not contain the filter value
          $(list).find(".name:not(:Contains(" + filter + "))").slideUp();

          //This will slide down any element that contains the filter value
          $(list).find(".name:Contains(" + filter + ")").slideDown();


        } else {
        
          $(list).find(".name").slideDown();
        
        }
        return false;
      })
    .keyup( function () {
        $(this).change();
    });
  }
 
   $(function () {
    listFilter($("input-group input-group-custom"), $(".names"));
  });
    
    
    $("#upTop").hide();

    //On Scroll function
    $(window).scroll(function(){
    
        if ($(this).scrollTop() > 30) {
          $("#upTop").fadeIn();

        } 
        else if ($(this).scrollTop() < 30){
            $("#upTop").fadeOut();
        }
    });

  //Click event to scroll to top
  $('#upTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });



  


}); //END OF DOCUMENT.READY