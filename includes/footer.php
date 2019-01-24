<div class="zigjag" style="background: url(images/zigzag-bg.png) repeat-x; height: 32px;"></div>
<div class="container-fluid" style="padding: 20px;background: #2C2C2C;">
  <br>
  <div class="col-md-6">
    <div class="col-md-12">
     <h4 style="color: #02AEF0;font-family: 'Fugaz One', cursive"><b>ABOUT US</b></h4>
     <hr width="20%" align="left"  style="border-top: 2px solid #f5f5f5;">
   </div>
   <div class="col-md-4 col-xs-4">
     <a href="#">
      <br>
      <img src="images/logo.jpg" class="img-responsive" style="background: #f5f5f5;">
    </a>
  </div>
  <div class="col-md-8 col-xs-8">
    <p style="color: #fff !important; padding-top:10px; text-align: justify; font-size: 15px !important;">Breathe Easy HVAC Co. is experienced in service repair and installation of furnaces and AC units as well as design of, installation and retrofitting of heating, ventilation and AC systems. We are committed to quality service that is honest, prompt, effective and affordable. We are bonded, licensed and insured.
    </p>
  </div>
  <div class="clearfix"></div>
  <br>
  <div class="col-md-6">
    <center><img src="images/cards.png" class="img-responsive"></center>
  </div>
  <div class="col-md-6" style="padding:5px;">
   <center> <a href="#"><button class="btn"><h5><b>View Map&nbsp <i class="fa fa-arrow-right"></i></b></h5></button></a></center>
 </div>
</div>
<div class="col-md-3">
  <h4 style="color: #02AEF0;font-family: 'Fugaz One', cursive;"><b>CONTACT INFO</b></h4>
  <hr width="20%" align="left"  style="border-top: 2px solid #f5f5f5;">
  <p style="color: #fff !important;">
    <b>Phone :<br></b>
    <a href="tel:(872) 484-2033" style="text-decoration-line: none; color: #fff !important"> (872) 484-2033</a>
  </p>
  <p style="color: #fff !important;">
    <b>Email :<br></b>
    <a href="mailto: breathehvac@gmail.com" style="text-decoration-line: none; color: #fff !important">  Breathehvac@gmail.com</a>
  </p>
  <p style="color: #fff !important;">
    <b>Location :<br></b>
    304 E Marion AveProspect Heights, IL 60070, USA
  </p>
</div>
<div class="col-md-3" style="">
 <h4 style="color: #02AEF0;font-family: 'Fugaz One', cursive;"><b>SERVICES</b></h4>
 <hr width="20%" align="left"  style="border-top: 2px solid #f5f5f5;">
 <div style="color: #fff !important; font-size: 18px;">
   <p style="color: #fff !important;">✿  A/C Installation</p>
   <p style="color: #fff !important;">✿  Heater Installation</p>
   <p style="color: #fff !important;">✿  Air Duct Installation</p>
   <p style="color: #fff !important;">✿  Emergency Services</p>
   <p style="color: #fff !important;">✿  Ductless A/C Services</p>
   <p style="color: #fff !important;">✿  Flame Sensor Repair</p>
   <p style="color: #fff !important;">✿  Boiler Services</p>
   <p style="color: #fff !important;">✿  Furnace & Heater Repair</p>
   <p style="color: #fff !important;">✿  Thermostat Repair</p>
   <p style="color: #fff !important;">✿  Air Duct Repair</p>
   <p style="color: #fff !important;">✿  A/C Repair</p>
   <p style="color: #fff !important;">✿  Furnace Installation</p>
 </div>
</div>
</div>

<div class="container-fluid" style="background:url(images/slider2.jpg);background-size: cover;background-attachment: fixed;  background-repeat: no-repeat;padding: 20px;">
  <div class="col-md-12">
    <center>
      <ul class="social-network social-circle">
        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" class="icoTwitter" title="instagram"><i class="fa fa-yelp"></i></a></li>
        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
      </ul> 
    </center>
  </div>
  <div class="clearfix"></div> <br>
  <div class="col-md-12" style="color: #fff;">
    <center > 
      &copy Copyright 2019 Breathe Easy HVAC Co.<span class="hidden-xs">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span><br class="visible-xs">  Powered by <a href="http://ez-websolution.com/" style="color: #02AEF0;"> EZ Web Solution </a>
    </center>
  </div>
  <div class="clearfix"></div>
  <br>
</div>



<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
  $("#owl-demo").owlCarousel({
    navigation : true,
    slideSpeed : 600,
    paginationSpeed : 500,
    singleItem : true,
    autoPlay:false,
    stopOnHover : true,
    navigationText : ["<",">"],
    transitionStyle : "fade",
  });

});
</script>
<script type="text/javascript">
  $(function(){
    $('a.read_more').click(function(event){
      event.preventDefault();
      $(this).parents('.itemn').find('.more_text').show(); 
    }); }); 
  </script>

  <div class="scroll-top-wrapper ">
    <span class="scroll-top-inner">
      <i class="fa fa-2x fa-arrow-circle-up"></i>
    </span>
  </div>
</div>

<script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
</script>
<script>
  $(document).ready(function(){
    $(function(){
      $(document).on( 'scroll', function(){
        if ($(window).scrollTop() > 100) {
          $('.scroll-top-wrapper').addClass('show');
        } else {
          $('.scroll-top-wrapper').removeClass('show');
        }
      });
      $('.scroll-top-wrapper').on('click', scrollToTop);
    });
    function scrollToTop() {
      verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
      element = $('body');
      offset = element.offset();
      offsetTop = offset.top;
      $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
    }
  });
</script>

<script type="text/javascript">    function init() {
  var input = document.getElementById('locationTextField1');
  var autocomplete = new google.maps.places.Autocomplete(input);
}
google.maps.event.addDomListener(window, 'load', init);
</script>

<script type="text/javascript">
  function init() {
    var input = document.getElementById('locationTextField2');
    var autocomplete = new google.maps.places.Autocomplete(input);
  }
  google.maps.event.addDomListener(window, 'load', init);
</script>

<script>
  $(document).ready(function(){
    $(".filter-button").click(function(){
      var value = $(this).attr('data-filter');
      if(value == "all")
      {
        $('.filter').show('1000');
      }
      else
      {
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');

      }

      if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
      }
      $(this).addClass("active");
    });
  });
  $(document).ready(function(){
    $(".fancybox").fancybox({
      openEffect: "none",
      closeEffect: "none"
    });
  });
</script>
<script>
  baguetteBox.run('.tz-gallery .gallery_product .filter');
</script>
<script type="text/javascript">
  if ($(".ts-testimonial-slide").length > 0) {

    $(".ts-testimonial-slide").owlCarousel({
      autoPlay: 4000,
      slideSpeed: 1000,
      navigation: false,
      pagination: true,
      singleItem: false,
      items:2,
    });
  };
</script>
</body>
</html>



