
<?php require APPROOT .'/views/inc/header.php';  ?>
<?php require APPROOT .'/views/inc/side_nav.php' ; ?>

<style>
tr, td{
  padding:2px
}
.form-control{
  border: 1px solid #800080;
  padding:2px;
}

</style>


  <!-- Commhr content goes here -->
  <div class="content-wrapper" style="background: #fafafa">
  

  <div class="container-fluid main_container" style='margin-top:-10px'>

      <div class="row">
        <div class="col-12">
          <h1 style='color:#800080; font-weight:700' class="page-title"> BOOKING DETAILS</h1>
        </div>
   </div>
      
      <hr/>
     
      <div id='placeholder'>


      <?php // require APPROOT .'/views/inc/dash.php' ; ?>


      </div>



<div class="row" style="margin-bottom:20px">  


     <div class="col-lg-6 col-md-6 col-sm-12">
     
      <table  class='table table-bordered table-condensed table-striped' style='font-size:12px'>

      <tr>
       <td colspan="2" style='font-size: 20px; font-weight: 700'>Booking Details</td>
      
      </tr>

       <tr>
       <td width=30%>Arrival Date</td>
       <td> <?php  echo $data['bookingdata']['arrivaldate'] ?></td>
      </tr>

       
      <tr>
       <td>Departure Date</td>
       <td><?php  echo $data['bookingdata']['departuredate'] ?></td>
      </tr>

      <tr>
       <td>Rooms</td>
       <td><?php  echo $data['bookingdata']['roomsbooked'] ?></td>
      </tr>


      <tr>
       <td>Children</td>
       <td></td>
      </tr>
      </table>

      <table  class='table table-bordered table-condensed table-striped' style='font-size:12px'>

        <?php  //print_r($data['customerdata'])  ?>

      <tr>
       <td colspan="2" style='font-size: 20px; font-weight: 700'>Guest Details</td>
      
      </tr>

       <tr>
       <td width=30%>Name</td>
       <td> <?php  echo $data['customerdata']['name'] ?></td>
      </tr>

       
      <tr>
       <td>Email</td>
       <td> <?php  echo $data['customerdata']['email'] ?></td>
      </tr>

      <tr>
       <td>Telephone</td>
       <td><?php  echo $data['customerdata']['telephone'] ?></td>
      </tr>
      </table>


      <table  class='table table-bordered table-condensed table-striped' style='font-size:12px'>

        <?php  //print_r($data['ownerdata'])  ?>

      <tr>
       <td colspan="2" style='font-size: 20px; font-weight: 700'>Home Owner Details</td>
      
      </tr>

       <tr>
       <td width=30%>Name</td>
       <td> <?php  echo $data['ownerdata']['name'] ?></td>
      </tr>

       
      <tr>
       <td>Email</td>
       <td> <?php  echo $data['ownerdata']['email'] ?></td>
      </tr>

      <tr>
       <td>Telephone</td>
       <td><?php  echo $data['ownerdata']['telephone'] ?></td>
      </tr>
      </table>

     
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6">
      
      <div>
      <div class="container">
      <div align='center'>
  <table class='table table-bordered'>
    <tr>
       <td colspan="2" style='font-size: 20px; font-weight: 700'>Property Details</td>
      
  </tr>
  <tr>
   <td>Property Code</td>
     <td><?php echo $data['propertydata']->propertycode ?></td>
   </tr>
   <tr>
   <td>Rating</td>
     <td><?php echo $data['propertydata']->rating ?></td>
   </tr>
     <tr>
   <td>Type of Occcupancy</td>
     <td><?php echo $data['propertydata']->occupancy ?></td>
   </tr>
   <tr>
   <td>Area</td>
     <td><?php echo $data['propertydata']->area ?> sq ft</td>
   </tr>
   <tr>
   <td>Rooms</td>
     <td><?php echo $data['propertydata']->rooms ?></td>
   </tr>
   <tr>
   <td>Bedrooms</td>
     <td><?php echo $data['propertydata']->bedrooms ?></td>
   </tr>

   <tr>
   <td>Building Age</td>
     <td><?php echo $data['propertydata']->buildingage ?></td>
   </tr>

   <tr>
   <td>Description</td>
     <td><?php echo $data['propertydata']->description ?></td>
   </tr>

   <tr>
   <td>Furnished</td>
     <td><?php echo $data['propertydata']->furnished ?></td>
   </tr>

   <tr>
   <td colspan="2"></td>
     
   </tr>

     <tr>
     <td></td>
     <td><button class='btn btn-danger'> Confirm </button></td>
   </tr>
  </table>
      </div>
     </div>
     </div>
    
      </div>


      </div>


      

      <!-- End of first upper row -->


      <div class="row" style="margin-bottom:20px">

      

    
      </div>
    </div>   <!-- End of Placeholder -->

    </div>
    </div>
   

  <!--Footer and JS directies -->
  
  <?php require APPROOT .'/views/inc/footer.php'  ?>




