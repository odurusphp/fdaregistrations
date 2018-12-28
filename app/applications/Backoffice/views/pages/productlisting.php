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
          <h1 style='color:#7BC113; font-weight:700' class="page-title"> PRODUCT LISTING </h1>
        </div>
   </div>

      <hr/>

      <div id='placeholder'>


      <?php // require APPROOT .'/views/inc/dash.php' ; ?>


      </div>



<div class="row" style="margin-bottom:20px">


     <div class="col-lg-4 col-md-4 col-sm-12">
     <form method='post'>


      <table  class='table table-bordered table-condensed' style='font-size:12px'>

      <tr>
       <td>Category</td>
       <td>
         <select class='form-control' name ='category' id='category'>
           <option value=''>Select Category</option>
           <?php foreach($data['catdata'] as $get):   ?>
               <option value='<?php echo $get->catid  ?>'> <?php echo $get->categoryname ?> </option>
           <?php endforeach;   ?>
         </select>
       </td>
      </tr>

      <tr>
      <td>Sub-Category</td>
      <td><select class='form-control' name ='subcategory' id='subcategory' >
        <option></option>
      </select>
      </td>
     </tr>


      <tr>
       <td>Product name</td>
       <td><input type='text' class='form-control' name='productname' ></td>
      </tr>

      <tr>
       <td>Quantity</td>
       <td><input type='text' class='form-control' name='quantity'></td>
      </tr>

      <tr>
       <td>No: of Dimensions</td>
       <td><input type='text' class='form-control' name='dimension'></td>
      </tr>

      <tr>
       <td>Price</td>
       <td><input type='text' class='form-control' name='price'></td>
      </tr>

      <tr>
       <td></td>
       <td><button style='background:#7BC113; border:#F98903; font-size:12px; font-weight:700' class='btn btn-danger'
          type='submit' name='addproduct'> Add Product</button></td>
      </tr>

      </table>

      </form>

      </div>

      <div class="col-lg-8 col-md-8 col-sm-8">

      <div>
      <div class="container">
      <div align='center'>

      <table  class='table table-bordered table-condensed table-striped apptables' style='font-size:12px'>
       <thead>
       <tr>
       <td>Product name</td>
       <td>Category</td>
       <td>Sub category</td>
       <td>Edit </td>
       <td>Delete</td>
      </tr>
      </thead>

       <?php
        foreach($data['productdata'] as $get):
       ?>
       <tr>
       <td><?php  echo $get->productname  ?></td>
       <td><?php  echo $get->categoryname  ?></td>
       <td><?php  echo $get->subcategory  ?></td>
       <td><a href='<?php echo URLROOT.'/backoffice/pages/productdetails/'.$get->productid ?>'><i class='fa fa-pencil'></i></a></td>
       <td><a href='#' class='deleteproduct' homeid='<?php echo $get->productid ?>'><i class='fa fa-trash'></i></a></td>

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
