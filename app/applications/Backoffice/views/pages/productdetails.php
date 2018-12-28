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

.popover {
   position: absolute;
   top: 0;
   left: 0;
   z-index: 1060;
   display: none;
   max-width: 276px;
   font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
   font-style: normal;
   font-weight: 400;
   line-height: 1.5;
   text-align: left;
   text-align: start;
   text-decoration: none;
   text-shadow: none;
   text-transform: none;
   letter-spacing: normal;
   word-break: normal;
   word-spacing: normal;
   white-space: normal;
   line-break: auto;
   font-size: 0.875rem;
   word-wrap: break-word;
   background-color: #fff;
   background-clip: padding-box;
   border: 1px solid rgba(0, 0, 0, 0.2);
   border-radius: 0.3rem;
   }

</style>



<div class="content-wrapper">

    <div class="container-fluid main_container">

      <div id='placeholder' style='margin-top:-30px'>
      <form method="post">
      <div class="row" style="margin-bottom:20px">

      <div class="col-lg-12 col-md-12 col-sm-12">
        <a href="#">
        <div class="card">
        <div class="container">
          <br/>
        <h3 style='color:#7BC113'>Product: <?php  echo strtoupper($data['productdata']->productname)  ?></h3>
        ( <span style="font-size:11px">Category / Subcategory: <?php echo  $data['productdata']->categoryname.' / '.$data['productdata']->subcategory ?></h3> )
          <br/>
          <br/>

          <div>

          </div>

        </div>
        </div>
        </a>
      </div>
    </form>

    </div>



      <div class="row" style="margin-bottom:20px">

        <!-- <?php  //echo '<pre>'; print_r($data)   ?> -->

      <div class="col-lg-6 col-md-6 col-sm-6">
        <h5 style='color:#F98903'>Product Details</h5>


        <table class='table table-bordered'>
          <tr>
           <td width='20%'>Product Name:</td>
           <td><?php  echo $data['productdata']->productname ?></td>
          </tr>

          <tr>
           <td width='20%'>Quantity</td>
           <td><?php  echo $data['productdata']->quantity ?></td>
          </tr>

          <tr>
           <td width='20%'>Unit Price</td>
           <td><?php  echo $data['productdata']->price ?></td>
          </tr>


          <tr>
           <td>Stock Date</td>
           <td><?php  echo $data['productdata']->productdate ?></td>
          </tr>

          <tr>
           <td>Dimensions / Sizes </td>
           <td><?php  echo $data['productdata']->dimensions ?>
               <button class='btn btn-sucesss adddimension'
                dimension = '<?php  echo $data['productdata']->dimensions ?>'
                productid = '<?php  echo $data['productdata']->productid ?>'
               style='background:#7BC113; border:#F98903; font-size:10px; font-weight:700'>Add Dimensions</button>
           </td>
          </tr>
        </table>
        <table class='table'>

          <tr>
           <td colspan="2">  <h5 style='color:#F98903'>Product Description</h5></td>

          </tr>
          <tr>
           <td colspan="2"><textarea class='summernote' name='description'><?php  echo $data['productdata']->description ?></textarea></td>
          </tr>

          <tr>
           <td colspan="2"> <button type='buttom' class='btn btn-sucesss savedescription'
             style='background:#7BC113; border:#F98903; font-size:10px; font-weight:700'
             productid = <?php echo  $data['productdata']->productid; ?>
             >Save Description</button></td>
          </tr>

        </table>




      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">

        <h5 style='color:#F98903'>Uploaded Product Pictures</h5>
       <table class=''>
         <tr>
           <?php foreach($data['docdata'] as $doc):   ?>
           <td><img src='<?php echo URLROOT.'/uploads/'.$doc->filename; ?>' height=110 weight=100  /></td>
         <?php endforeach;   ?>
         </tr>

         <tr>
          <td colspan="3"><input type='file' name='propictures[]' class='propictures' /></td>
         </tr>
       </table>


    <table>
      <tr>
       <td width='80%'><h5 style='color:#F98903'>Purchase History</h5></td>
      </tr>
    </table>

      </div>

      </div>

      <div id="viewmodal" class="modal fade" role="dialog" style="z-index:9999999999999999999999999">
                <div class="modal-dialog" style="width:400px" role="document">

                    <div class="modal-content">
                        <div class="modal-body" id="ajaxcontainer" >

                        </div>
                    </div>
                </div>
     </div>



    </div>   <!-- End of Placeholder -->

    </div>
    </div>


  <!--Footer and JS directies -->

  <?php require APPROOT .'/views/inc/footer.php'  ?>

  <script type="text/javascript">
  var uroot = '<?php echo URLROOT.'/backoffice/pages/saveproductpictures/'.$data['productdata']->productid ?>';

  $('.propictures').uploadifive({
      'buttonText'  : 'Upload pictures',
      'buttonClass' : 'uploadifive-button',
      'uploadLimit'  : 3,
      'auto'        : true,
      'method'      : 'post',
      'multi'       : true,
      'width'       : 150,
      'uploadScript': uroot,
        'onQueueComplete' : function(uploads) {
              window.location.href = '<?php echo URLROOT.'/backoffice/pages/productdetails/'.$data['productdata']->productid ?>'
        }
   });


  </script>
