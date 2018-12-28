
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

  <div id="viewmodal" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width: 800px" role="document">

                <div class="modal-content"  style="width: 600px" >
                    <div class="modal-body" id="ajaxcontainer">

                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button> -->

                    </div>

                </div>
            </div>
  </div>


  <div class="container-fluid main_container" style='margin-top:-10px'>

      <div class="row">
        <div class="col-12">
          <h1 style='color:#800080; font-weight:700' class="page-title">CUSTOMER BOOKINGS</h1>
        </div>
   </div>

      <hr/>

      <div id='placeholder'>


      <?php //require APPROOT .'/views/inc/dash.php' ; ?>




      </div>



<div class="row" style="margin-bottom:20px">


      <div class="col-lg-12 col-md-12 col-sm-12">

      <div class='card'>
      <div class="container">
      <br/>
      <div align='center'>


      <table  class='table table-bordered table-condensed table-striped apptables' style='font-size:12px'>
       <thead>
       <tr>
       <td>Customer Name</td>
       <td>Email</td>
       <td>Number of rooms</td>
       <td>Telephone</td>
       <td>Arrival Date</td>
        <td>Departure Date</td>
      </tr>
      </thead>

       <?php
   
        foreach($data['bookingdata'] as $key=>$value):

       ?>
       <tr>
       <td><a href='<?php echo URLROOT  ?>/bookings/bookingdetails/<?php echo $value['bookingid'] ?>' ><?php  echo $value['name'];  ?></a></td>
       <td><?php  echo $value['email'];  ?></td>
       <td><?php  echo $value['rooms'];  ?></td>
       <td><?php  echo $value['phone'];   ?></td>
       <td><?php  echo $value['arrival'];   ?></td>
       <td><?php  echo $value['departure']  ?></td>

      </tr>
       <?php
       endforeach;
       ?>


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
