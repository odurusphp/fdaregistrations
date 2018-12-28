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


  <div id="picmodal" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width: 900px" role="document">

                <div class="modal-content"  style="width: 900px" >
                    <div class="modal-body" id="picontainer">

                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button> -->

                    </div>

                </div>
            </div>
  </div>


  <div id="mapmodal" class="modal fade" role="dialog">
            <div class="modal-dialog" style="width: 600px" role="document">

                <div class="modal-content"  style="width: 600px" >
                    <div class="modal-body" id="mcontainer">

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
          <h1 style='color:#800080; font-weight:700' class="page-title">PROPERTY LISTING</h1>
        </div>
   </div>

      <hr/>

      <div id='placeholder'>
    
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
       <td>Telephone</td>
       <td>Email Address</td>
       <td>Property Title</td>
       <td>Type</td>
       <td>No. of rooms</td>
       <td>Price</td>
       <td>Featured</td>
       <td>Status</td>
       <td>Manage</td>

      </tr>
      </thead>

       <?php
        
        foreach($data['propertydata'] as $get){
       ?>
       <tr>
       <td><?php  echo $get->firstname.' '.$get->lastname  ?></td>
       <td><?php  echo $get->phone  ?></td>
       <td><?php  echo $get->email  ?></td>
       <td><?php  echo $get->propertytitle  ?></td>
       <td><?php  echo $get->type  ?></td>
       <td><?php  echo $get->rooms  ?></td>
       <td><?php  echo $get->price  ?></td>
       <td><input type='checkbox' name='featured' class='featured'  propertyid='<?php echo $get->propertyid  ?>'
        <?php echo  checkfeatured($get->listingstatus);    ?>
        /></td>
       <td><?php echo  getStatus($get->listingstatus);    ?></td>
       <td><a href='<?php echo URLROOT.'/pages/editproperty/'.$get->propertyid   ?>' class='' 
          propertyid='<?php echo $get->propertyid  ?>'>Manage</td>
      </tr>
       <?php
        }
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
