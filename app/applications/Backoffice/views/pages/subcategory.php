<?php require APPROOT .'/views/inc/header.php';  ?>
<?php require APPROOT .'/views/inc/side_nav.php' ; ?>

<style>
tr, td{
  padding:2px
}
.form-control{
  border: 1px solid #800080;
  padding:5px;
}

</style>


  <!-- Commhr content goes here -->
  <div class="content-wrapper" style="background: #fff">


  <div class="container-fluid main_container" style='margin-top:-10px'>

      <div class="row">
        <div class="col-12">
          <h1 style='color:#F98903; font-weight:700' class="page-title"> SUB-CATEGORY MANAGER</h1>
        </div>
   </div>

      <hr/>

      <div id='placeholder'>


      <?php // require APPROOT .'/views/inc/dash.php' ; ?>


      </div>



<div class="row" style="margin-bottom:20px">


     <div class="col-lg-12 col-md-12 col-sm-12">
     <form method='post'>
      <table  class='table table-bordered table-condensed' style='font-size:12px'>

       <tr>
       <td width='30%'>
        <select class='form-control' name=catid >
          <option value=''>Select Category</option>
          <?php foreach($data['catdata'] as $get):   ?>
              <option value='<?php echo $get->catid  ?>'> <?php echo $get->categoryname ?> </option>
          <?php endforeach;   ?>
        </select>
       </td>
       <td><input type='text' class='form-control' name='subcategoryname' /></td>
       </td>
        <td><button style='background:#7BC113; border:#F98903; font-size:12px; font-weight:700' class='btn btn-danger' type='submit'
           name='addsubcategory' > Add subcategory</button></td>
      </tr>

      </tr>
      </table>
      </form>

      <table  class='table table-bordered table-condensed table-striped apptables' style='font-size:12px'>
       <thead>
       <tr>
       <td>Sub category</td>
       <td>Category</td>
       <td>Entered By</td>
       <td>Edit</td>
       <td>Delete</td>
      </tr>
      </thead>

       <?php
        foreach($data['subdata'] as $get):
       ?>
       <tr>
       <td><?php  echo $get->subcategoryname  ?></td>
       <td><?php  echo $get->categoryname  ?></td>
       <td><?php   $n  = new User($get->uid);  echo $n->recordObject->firstname.' '.$n->recordObject->lastname ?></td>
       <td><a href='#'<i class='fa fa-pencil'></i></a></td>
       <td><a href='#' class='deletesubscription' subid='<?php echo $get->catid  ?>'><i class='fa fa-trash'></i></a></td>

      </tr>
       <?php
       endforeach;
       ?>


      </table>

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
