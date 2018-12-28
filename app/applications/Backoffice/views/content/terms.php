<?php require APPROOT .'/views/inc/header.php';  ?>
<?php require APPROOT .'/views/inc/content.php' ; ?>

<style>
tr, td{
  padding:2px
}
.form-control{
  border: 1px solid #800080;
  padding:2px;
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

<script type="text/javascript">


</script>

<body>
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

                <div class="modal-content"  style="width: 850px" >
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
          <h1 style='color:#800080; font-weight:700' class="page-title">CONTENT MANAGEMENT
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
    <div class='row'>
    
    <div class="col-lg-12 col-md-12 col-sm-12">
       <h3> TERMS & CONDITIONS</h3>
    <form method='post'>
    <table class='table table-bordered'>
    <tr>
    <td><textarea class='summernote form-form-control' id='summernote' name=content></textarea></td>
    </tr>

    <tr>
    <td><input type='file' name='image' /> </td>
    </tr>

    <tr>
    <td><button style='font-size:12px' name='saveupload' class='btn btn-warning'> Submit</button></td>
    </tr>

    </table>
    </form>
    </div>
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

</body>
<!--Footer and JS directies -->

<?php require APPROOT .'/views/inc/footer.php'  ?>
