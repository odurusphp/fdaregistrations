<!-- Header and CSS Directives-->
<style>
tr, td{
  padding:2px
}

</style>


<?php require APPROOT .'/views/inc/header.php';  ?>
<?php require APPROOT .'/views/inc/side_nav.php' ; ?>


  <!-- Commhr content goes here -->
  <div class="content-wrapper" style="background:#fff">


  <div class="container-fluid main_container" style='margin-top:-10px'>

      <div class="row">
        <div class="col-12">
          <h1 style='color:#F98903; font-weight:700' class="page-title">ADMINISTRATOR DASHBOARD</h1>
        </div>
   </div>

      <hr/>

      <div id='placeholder'>

      <?php require APPROOT .'/views/inc/dash.php' ; ?>

      </div>



      <div class="row" style="margin-bottom:20px">



      </div>
    </div>   <!-- End of Placeholder -->

    </div>
    </div>


  <!--Footer and JS directies -->

  <?php require APPROOT .'/views/inc/footer.php'  ?>
