document.addEventListener("DOMContentLoaded",function(){
  $(function (){

    // $(".navbar a, footer a, .div-up a, #navbar-tel a, .presentation-div-btn-all a").on("click", function(event){
    //     event.preventDefault();
    //     var hash = this.hash;
    //     $('body,html').animate({scrollTop: $(hash).offset().top} , 900, function (){window.location.hash = hash;})
    // });
    $(document).ready(function() {
      var hashId = window.location.hash;
      var sectionid = $(hashId);
      if(sectionid.length != 0) {
        {
          $('html,body').animate({scrollTop: $(hashId).offset().top - 180}, 500);
        }
      }});
  })


 
  $(document).ready(function(){
    //animation pour hamburger
    $(".hamburger").click(function() {
      $(".hamburger").toggleClass("is-active");
    });
    //btn bouton faire apparaitre navbar
    $("#btn-navbar").click(function(){
      $("#navbar-tel").slideToggle("slow");
      $("#btn-navbar").css("display","flex");
      $("#navbar-tel").css("display","flex");
    })
  })
  

     

})

