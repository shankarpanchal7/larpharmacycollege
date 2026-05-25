$(document).ready(function(){
    const enquiryBtn = $('.js--enquiry-btn');
    const enquiryBlock = $('#js--enquiry-block');
    const humburger = document.querySelector('.humburger'); 
    $('#status').empty();
	$('#en-status').empty();
	$(".contactUs").click(function(){
	  var data = $("#contactUs").serialize();
      enqForm(data);
	  });
    $(".enqFormBtn").click(function(){
      var data = $("#enqForm").serialize();
      console.log("data -----------------", data);
      enqForm(data);
    })
    $(".btn-submit").click(function(){
      alert("clicked");
      var form_data = $("#contact-form").serialize(); 
      console.log("form_data ",form_data);
      
      validateForm(form_data);
    });
    function enqForm(data){

      document.getElementById('en-status').innerHTML = "Sending...";   
    
     $.ajax({
      url : "/mail.php",
      type: "POST",
      dataType:'json',
      data : data,
      success: function(data, textStatus, jqXHR)
      {
          console.log("success ----------------", data);
          $('#en-status').text(data.message);
          
          
          
          if (data.code>0) //If mail was sent successfully, reset the form.
          {
              $('#contact-form').closest('form').find("input[type=text], textarea").val("");
              document.getElementById('en-status').innerHTML = "Email sent successfully";  
              
          }
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          $('#en-status').text(jqXHR);
      }
    });
    }
    function validateForm(formData) {
        
      document.getElementById('status').innerHTML = "Sending...";   
    
     $.ajax({
      url : "/redressal-mail.php",
      type: "POST",
      dataType:'json',
      data : formData,
      success: function(data, textStatus, jqXHR)
      {
    
          $('#status').text(data.message);
          
          
          
          if (data.code>0) //If mail was sent successfully, reset the form.
          {
              $('#contact-form').closest('form').find("input[type=text], textarea").val("");
              document.getElementById('status').innerHTML = "mail sent successfully";  
              
          }
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          $('#status').text(jqXHR);
      }
    });
    
    
    
    }
    humburger.addEventListener('click',()=>{
    humburger.classList.toggle('hmclose');

    });

    /* For Sticky navigation  */       
    $('#js--active-sticky').waypoint(function(direction){
        if(direction == "down" && $(window).width()>767) {
            $('.header_').addClass('sticky');
    
        }else{
            $('.header_').removeClass('sticky');
        }
    },{offset:'60px;'}); 
     
    /* Quick Enquiry Form */
    $('html').click(function(event) {     
      
        if($('.open')){
          enquiryBlock.removeClass('open');
      }
        
      
   });
    enquiryBlock.click(function(){
      event.stopPropagation();
    })
    enquiryBtn.click(function(event){
      enquiryBlock.toggleClass('open');
      event.stopPropagation();
    });

  $('.newsticker').newsTicker({
    row_height: 150,
    max_rows: 2,
    speed: 600,
    direction: 'up',
    duration: 4000,
    autostart: 1,
    pauseOnHover: 1,
    prevButton:  $('#news-btn-down'),
    nextButton:  $('#news-btn-up'),
});
// window.onscroll = function() {myFunction()};

var navbar = document.getElementById("my_navbar");
var sticky = navbar.offsetTop;

/* function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} */

$("#exampleModal").modal('show')

  
});




