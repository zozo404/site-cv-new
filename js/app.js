document.addEventListener("DOMContentLoaded",function(){
  $(function (){

    $(".navbar a, footer a, .div-up a, #navbar-tel a, .presentation-div-btn-all a").on("click", function(event){

        event.preventDefault();
        var hash = this.hash;

        $('body,html').animate({scrollTop: $(hash).offset().top} , 900, function (){window.location.hash = hash;})

    });
    
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
  

     
     

// MOUSE SOURIS




  //code pour formulaire
  // let form = document.getElementById('form1');

  // form.addEventListener('submit', (event) => {

  //   event.preventDefault();
  //   let name = document.querySelector('#name').value
  //   let email = document.querySelector('#email').value
  //   let objet = document.querySelector('#objet').value
  //   let formText = document.querySelector('#formText').value

  //   if(name == ''){
  //     viewPopup(false, 'Nom non conforme !')
  //     return false;
  //   }
  //   if( isEmail(email) === false || email == ''){
  //     viewPopup(false, 'Email non conforme !')
  //     return false;
  //   }
  //   if(objet == ''){
  //     viewPopup(false, 'objet non conforme !')
  //     return false;
  //   }
  //   if(formText == ''){
  //     viewPopup(false, 'texte non conforme !')
  //     return false;
  //   }

  //   viewPopup(true, 'Formulaire validé');

  //   let namePHP = document.querySelector('#name').value;
  //   let emailPHP = document.querySelector('#email').value;
  //   let objetPHP = document.querySelector('#objet').value;
  //   let formTextPHP = document.querySelector('#formText').value;
  //   let xhr = new XMLHttpRequest();
  //   xhr.open('POST', 'http://localhost/site-cv-new-php/mail.php');
  //   xhr.responseType = 'text';
  //   xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  //   xhr.send(`namePHP=${namePHP}&emailPHP=${emailPHP}&objetPHP=${objetPHP}&formTextPHP=${formTextPHP}`);
    

  // })
  // function isEmail(str){
  //   return /[a-zA-Z0-9\.]+@{1}[a-zA-Z0-9]+\.{1}[a-zA-Z]{1,3}/.test(str);
  // }


  // function viewPopup(success, message){

  //   if(success){
  //     document.getElementById('btn').style.backgroundColor = '#198754';
  //   }else{
  //     document.getElementById('btn').style.backgroundColor = 'red';
  //   }
  //   document.getElementById('popup').style.display = 'block';
  //   document.getElementById('message').innerText = message;

  // }

  // document.getElementById('btn').addEventListener('click', function(){
  //   document.getElementById('popup').style.display = 'none';
  //   console.log("ez");
  // })

})

