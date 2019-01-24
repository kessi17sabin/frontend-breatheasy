<section id="breadcrumb" style="background: #02AEF0;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 breadcrumb-base no-padding">
        <div class="col-sm-8 col-xs-4 page-heading">
          <h2 style="text-align: center;color: #fff;">
            Request A Quote
          </h2>
        </div>
        <div class="col-sm-4 col-xs-8 breadcrumb-block text-right"><br>
         <ol class="breadcrumb">
            <li>You are here:<a href="index.php">Home</a></li>
            <li class="active">Request A Quote</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="quote" style="margin-top: 20px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <form action="quote_send.php" method="post">
      <div class="col-md-6">
        <div class="form-group">
          <label for=" name" style="color: #333333;"> Name  </label>
          <input type="text" class="form-control" required="required" name=" name" placeholder="Enter Your  Name">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="phone" style="color: #333333;">Phone  </label>
          <input type="tel" class="form-control" required="required" name="phone" placeholder="Enter Your Phone No.">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="email" style="color: #333333;">Email  </label>
          <input type="email" class="form-control" required="required" name="email" placeholder="Enter Your E-mail">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="date" style="color: #333333;"> Date  </label>
          <input type="date" class="form-control" required="required" name="date">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="time" style="color: #333333;">Time  </label>
          <input type="time" class="form-control" required="required" name="time">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="quote" style="color: #333333;">Quote For </label>
          <select class="form-control" name="quote">
            <option value="AC Repair and Services">AC Repair and Services</option>
            <option value="HVAC Repair Surfac">HVAC Repair Surface</option>
            <option value="Heater and Furnace Repair">Heater and Furnace Repair</option>
          </select>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="location" style="color: #333333;"> Location  </label>
          <input type="location" class="form-control" required="required" name="location" id="locationTextField1" placeholder="Enter a location" autocomplete="off">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea name="message" class="form-control" rows="2" placeholder="Your Message Here">Message</textarea>
        </div>
      </div>
      <center><button type="submit" class="btn" style="background: #4169e1;color: #fff;">Get Quote</button></center>
      <br>
    </form>
    </div>
      </div>
    </div>
</section>
