<!-- Header and CSS Directives-->



<?php require APPROOT .'/views/inc/header.php';  ?>
<?php require APPROOT .'/views/inc/side_nav.php' ; ?>

<style>
tr, td{
  padding:2px
}
.form-control{
  border: 1px solid #7BC113;
  padding:1px;
}

</style>


  <!-- Commhr content goes here -->
  <div class="content-wrapper" style="background: #fff">


  <div class="container-fluid main_container" style='margin-top:-10px'>

      <div class="row">
        <div class="col-12">
          <h1 style='color:#F98903; font-weight:700' class="page-title">USER MANAGEMENT</h1>
        </div>
   </div>

      <hr/>

      <div id='placeholder'>


      <?php //require APPROOT .'/views/inc/dash.php' ; ?>


      </div>



<div class="row" style="margin-bottom:20px">


     <div class="col-lg-4 col-md-4 col-sm-12">
     <form method='post'>

      <table  class='table table-bordered table-condensed' style='font-size:12px'>

       <tr>
       <td>Firstname</td>
       <td><input type='text' class='form-control' required name='firstname'></td>
      </tr>

      <tr>
       <td>Lastname</td>
       <td><input type='text' class='form-control' required  name='lastname'></td>
      </tr>

      <tr>
       <td>Role</td>
       <td>
        <select class='form-control' name = 'role' required>
          <option>Administrator</option>
          <option>Agent</option>
        </select>
       </td>
      </tr>

      <tr>
       <td>Email</td>
       <td><input type='email' class='form-control' name='email'></td>
      </tr>



      <tr>
       <td>Password</td>
       <td><input type='password' class='form-control' name='password' required></td>
      </tr>


      <tr>
       <td>Confirm Password</td>
       <td><input type='password' class='form-control' name='confirmpassword' required></td>
      </tr>

      <tr>
       <td></td>
       <td><button style='background:#7BC113; border:#F98903; font-size:12px; font-weight:700' class='btn btn-danger' type='submit' name='adduser' > Add User</button></td>
      </tr>

      </table>
      </form>

      </div>

      <div class="col-lg-8 col-md-8 col-sm-8">

      <div>
      <div class="container">

      <div align='center'>
       <?php
       if(isset($data['response'])) :
       ?>
      <div class='<?php echo $data['class']  ?>'><?php echo $data['response']  ?></div>
       <?php endif;  ?>


      <table  class='table table-bordered apptables' style='font-size:12px'>
       <thead>
       <tr>
       <td>Name</td>
       <td>Email</td>
       <td>Role</td>
       <td>Date Enrolled</td>
      </tr>
      </thead>

       <?php
        foreach($data['customerdata'] as $get):
       ?>
       <tr>
       <td><?php  echo $get->firstname.' '.$get->lastname  ?></td>
       <td><?php  echo $get->email  ?></td>
       <td><?php  echo $get->role  ?></td>
       <td><?php  echo $get->datecreated  ?></td>
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
