<div class="personalinfo-container">
  <div class="container">
    <div class="col-md-12 booking-step-container">
      <div class="col-md-6">
        <h3 class="container-title search-result-title">Booking Review</h3>
      </div>
      <div class="col-md-6 pull-right booking-step">
        <ol class="breadcrumb pull-right">
          <li class="breadcrumb-item"><span class="badge">1</span> Personal Information</li>
          <li class="breadcrumb-item"><span class="badge">2</span> Vehicle</li>
          <li class="breadcrumb-item active"><span class="badge">3</span> Review</li>
        </ol>
      </div>
    </div>

    <div class="col-md-12">
      <div class="alert alert-info" style="font-size:13px;">
        <strong>Info!</strong> Confirmation of your booking will be sent to your E-Mail as soon as we received your booking. Thank you for booking.
      </div>
    </div>

    <div class="col-md-12 personal-info-form" style="padding:0px 15px;">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">Personal Information</div>
          <div class="panel-body">
            <table class="table">
                <tbody>
                  <tr>
                    <td>Name</td>
                    <td><?php echo $personinfo['bname'];?></td>
                  </tr>
                  <tr>
                    <td>Phone Number</td>
                    <td><?php echo $personinfo['bphone'];?></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><?php echo $personinfo['bemail'];?></td>
                  </tr>
                  <tr>
                    <td>Permanent Residence</td>
                    <td><?php echo $personinfo['bresidence'];?></td>
                  </tr>
                  <tr>
                    <td>License Number</td>
                    <td><?php echo $personinfo['blicense'];?></td>
                  </tr>
                  <tr>
                    <td>City</td>
                    <td><?php echo $personinfo['bcity'];?></td>
                  </tr>
                  <tr>
                    <td>Country</td>
                    <td><?php echo $personinfo['bcountry'];?></td>
                  </tr>
                  <tr>
                    <td>Company Name</td>
                    <td><?php echo $personinfo['bcompany'];?></td>
                  </tr>
                  <tr>
                    <td>Adress</td>
                    <td><?php echo $personinfo['baddress'];?></td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">Vehicle Information</div>
          <div class="panel-body">
            <table class="table">
                <tbody>
                  <tr>
                    <td>Vehicle Type</td>
                    <td>Jeep - Daihatsu Feroza G2</td>
                  </tr>
                  <tr>
                    <td>Quantity</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>With Driver</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>With insurance</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>Date of Rental</td>
                    <td>May 28th 2017</td>
                  </tr>
                  <tr>
                    <td>Date of Return</td>
                    <td>May 29th 2017</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>Address of Delivery</td>
                    <td>Jalan Wulung UH III, Tahunan Residence Block O</td>
                  </tr>
                  <tr>
                    <td>Adress</td>
                    <td>Jalan Wulung UH III, Tahunan Residence Block O</td>
                  </tr>
                  <tr>
                    <td>Special Request</td>
                    <td>Stella parfume</td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>
      <div class="col-md-4" style="padding-right:0px;">
        <div class="panel panel-default">
          <div class="panel-body">
            <p>By clicking continue, you agree with our <a href="#">Terms &amp; Condition</a> and our <a href="#">Privacy Policy</a></p>
            <center><button type="submit" class="btn btn-success">Continue</button></center>
          </div>
          <div class="panel-footer">Booking ID <strong>7978676779</strong></div>
        </div>
      </div>
    </div>
  </div>
</div>
