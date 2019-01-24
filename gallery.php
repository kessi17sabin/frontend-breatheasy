<style>
  .content-box{
  padding: 60px 0 60px 0;
}

.content-title h3{
  font-size: 30px;
  font-weight: 700;
  text-align: center;
  margin-bottom: 30px;
}

.content-title-underline{
  width: 30px;
  height: 3px;
  background-color: #02AEF0;
  margin: 0 auto 30px auto;
}

.row.no-gutters [class*=col-]{
  padding-left: 0px;
  padding-right: 0px;
  margin-bottom: 15px;
}

.img-wrapper{
  overflow: hidden;

}

.img-wrapper img{
  transition: transform .5s ease;
  cursor: zoom-in;
}

.img-wrapper img:hover {
  transform: scale(1.5);
}

</style>


<section id="breadcrumb" style="background: #02AEF0;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 breadcrumb-base no-padding">
        <div class="col-sm-8 col-xs-4 page-heading">
          <h2 style="text-align: center;color: #fff;">
            Work Gallery
          </h2>
        </div>
        <div class="col-sm-4 col-xs-8 breadcrumb-block text-right"><br>
         <ol class="breadcrumb">
            <li>You are here:<a href="index.php">Home</a></li>
            <li class="active">Work Gallery</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="work">
      <div class="content-box">
      
      <div class="content-title wow animated fadeInDown " data-wow-duration="1s" data-wow-delay=".2s">
        <h3>Our Work</h3>

        <div class="content-title-underline"></div>

      </div>

      <div class="container-fluid" >
        <div class="row no-gutters wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
        
<div class="col-md-3 col-sm-4 col-xs-6">
          
          <div class="img-wrapper">
            
            <a href="images/g1.jpg" title="image description here">
              
              <img src="images/g1.jpg" class="img-responsive" alt="work">
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
          
          <div class="img-wrapper">
            
            <a href="images/g2.jpg" title="image description here">
              
              <img src="images/g2.jpg" class="img-responsive" alt="work">
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
          
          <div class="img-wrapper">
            
            <a href="images/g3.jpg" title="image description here">
              
              <img src="images/g3.jpg" class="img-responsive" alt="work">
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
          
          <div class="img-wrapper">
            
            <a href="images/g4.jpg" title="image description here">
              
              <img src="images/g4.jpg" class="img-responsive" alt="work">
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
          
          <div class="img-wrapper">
            
            <a href="images/thermostat.jpeg" title="image description here">
              
              <img src="images/thermostat.jpeg" class="img-responsive" alt="work">
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
          
          <div class="img-wrapper">
            
            <a href="images/service-img-1.jpg" title="image description here">
              
              <img src="images/service-img-1.jpg" class="img-responsive" alt="work">
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
          
          <div class="img-wrapper">
            
            <a href="images/heater-install.jpg" title="image description here">
              
              <img src="images/heater-install.jpg" class="img-responsive" alt="work">
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
          
          <div class="img-wrapper">
            
            <a href="images/furnace-install.jpg" title="image description here">
              
              <img src="images/furnace-install.jpg" class="img-responsive" alt="work">
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
          
          <div class="img-wrapper">
            
            <a href="images/flame-sensor.jpg" title="image description here">
              
              <img src="images/flame-sensor.jpg" class="img-responsive" alt="work">
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
          
          <div class="img-wrapper">
            
            <a href="images/emergency.jpg" title="image description here">
              
              <img src="images/emergency.jpg" class="img-responsive" alt="work">
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
          
          <div class="img-wrapper">
            
            <a href="images/ductless.jpg" title="image description here">
              
              <img src="images/ductless.jpg" class="img-responsive" alt="work">
            </a>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-6">
          
          <div class="img-wrapper">
            
            <a href="images/air-duct.jpg" title="image description here">
              
              <img src="images/air-duct.jpg" class="img-responsive" alt="work">
            </a>
          </div>
        </div>

        </div>

       </div>     
  </div>
</section>

<script>
  $(function(){
  new WOW().init(); 
});

  $(function(){
  $("#work").magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
      type: 'image',
      gallery:{
            enabled:true
          }
  });
});
</script>