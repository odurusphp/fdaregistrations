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
          <h1 style='color:#800080; font-weight:700' class="page-title"> EDIT HOME SERVICES </h1>
        </div>
   </div>

      <hr/>

      <div id='placeholder'>


      <?php require APPROOT .'/views/inc/dash.php' ; ?>


      </div>



<div class="row" style="margin-bottom:20px">


     <div class="col-lg-4 col-md-4 col-sm-12">
     <form method='post'>

     <fieldset style='border:1px solid #000;'>
     <legend style='border:1px solid #000; font-size:15px; font-weight:700;
     padding:5px; width:200px; margin-left:10px; color:#800080'>Add Home Service</legend>
      <table  class='table table-bordered table-condensed' style='font-size:12px'>

       <tr>
       <td>Service Name</td>
       <td><input type='text' class='form-control' name='homeitem' value='<?php echo $data['homedata']->homeitem ?>'></td>
      </tr>

      <tr>
      <td>Service Type</td>
      <td><select class='form-control' name = 'cat'>
        <option><?php echo $data['homedata']->category ?></option>
        <option value=''>Select Category</option>
        <option>Home Owners</option>
        <option>Guest</option>
      </select>
      </td>
     </tr>

      <tr>
       <td>Frequency</td>
       <td>
        <select class='form-control' name = 'frequency'>
        <option><?php echo $data['homedata']->frequency ?></option>
        <option value=''>Select Frequency</option>
        <option>Fixed</option>
        <option>Variable</option>
        </select>

       </td>
      </tr>

       <tr>
       <td>Hourly Charge</td>
       <td><input type='text' class='form-control' name='hourlycharge' value='<?php echo $data['homedata']->hourlycharge ?>'></td>
      </tr>


      <tr>
       <td>Daily Charge</td>
       <td><input type='text' class='form-control' name='dailycharge' value='<?php echo $data['homedata']->dailycharge ?>'></td>
      </tr>



      <tr>
       <td>Monthly Charge</td>
      <td><input type='text' class='form-control' name='monthlycharge'  value='<?php echo $data['homedata']->monthlycharge ?>'></td>
      </tr>


      <tr>
       <td>Cost of Service</td>
       <td><input type='text' class='form-control' name='costofservice' value='<?php echo $data['homedata']->costofservice ?>' ></td>
      </tr>

      <tr>
       <td>Service Charge (%)</td>
      <td><input type='text' class='form-control' name='servicecharge' value='<?php echo $data['homedata']->servicecharge ?>'></td>
      </tr>

      <tr>
       <td></td>
       <td><button class='btn btn-danger' type='submit' name='updatehomeservice' > Update </button></td>
      </tr>

      </table>

      </fieldset>
      </form>

      </div>

      <div class="col-lg-8 col-md-8 col-sm-8">

      <div>
      <div class="container">
      <br/>
      <div align='center'>
       <?php
       if(isset($data['response'])) :
       ?>
      <div class='<?php echo $data['class']  ?>'><?php echo $data['response']  ?></div>
       <?php endif;  ?>


      <table  class='table table-bordered table-condensed table-striped apptables' style='font-size:12px'>
       <thead>
       <tr>
       <td>Service Name</td>
       <td>Category</td>
       <td>Frequency</td>
       <td>Service Cost</td>
       <td>Service Charge</td>
       <td>Edit </td>
       <td>Delete</td>
      </tr>
      </thead>

       <?php
        foreach($data['allhomedata'] as $get):
       ?>
       <tr>
       <td><?php  echo $get->homeitem  ?></td>
       <td><?php  echo $get->category  ?></td>
       <td><?php  echo $get->frequency  ?></td>
       <td><?php  echo $get->costofservice  ?></td>
       <td><?php  echo $get->servicecharge  ?></td>
       <td><a href='<?php echo URLROOT.'/pages/edithomeservices/'.$get->homeid ?>'><i class='fa fa-pencil'></i></a></td>
       <td><a href='#' class='deletehomeitem' homeid='<?php echo $get->homeid  ?>'><i class='fa fa-trash'></i></a></td>

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
