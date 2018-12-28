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
    <div align='center'>

    <table class='table table-bordered'>
    <tr>
    <td>Menu Name</td>
    <td>Edit</td>
    <td>Delete</td>
    <td></td>
    </tr>
    
    <?php
    foreach($data['content'] as $get):
    ?>
    <tr>
    <td><?php  echo $get->menu   ?></td>
    <td><i class='fa fa-pencil'></i></td>
    <td><i class='fa fa-trash-o'></i></td>
    <td></td>
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

</body>
<!--Footer and JS directies -->

<?php require APPROOT .'/views/inc/footer.php'  ?>
