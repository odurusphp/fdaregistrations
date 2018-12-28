<?php  require ("includes/sidenav.php"); ?>
<?php  require ("includes/header.php"); ?>

<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Registration Forms</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Rocker</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Cards</a></li>
            <li class="breadcrumb-item active" aria-current="page">Image Cards</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
   

       <h6 class="text-uppercase">Pick a Registration Form</h6>
       <hr>

      <div class="row">
        <div class="col-lg-6">
         <div class="card">
          <img src="<?php echo URLROOT.'/backoffice/'?>/images/gallery/6.jpg" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-dark">Drug Division</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
           <ul class="list-group list-group-flush list shadow-none">
            <li class="list-group-item d-flex justify-content-between align-items-center">Cras justo odio <span class="badge badge-dark badge-pill">14</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac facilisis in <span class="badge badge-success badge-pill">2</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Vestibulum at eros <span class="badge badge-danger badge-pill">1</span></li>
          </ul>
          <div class="card-body">
            <a href="javascript:void();" class="card-link">Card link</a>
            <a href="javascript:void();" class="card-link">Another link</a>
          </div>
        </div>
        </div>
        <div class="col-lg-6">
         <div class="card">
          <img src="<?php echo URLROOT.'/backoffice/'?>/images/gallery/7.jpg" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-dark">Food Division</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
            <ul class="list-group list-group-flush list shadow-none">
            <li class="list-group-item d-flex justify-content-between align-items-center">Cras justo odio <span class="badge badge-dark badge-pill">14</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus ac facilisis in <span class="badge badge-success badge-pill">2</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Vestibulum at eros <span class="badge badge-danger badge-pill">1</span></li>
          </ul>
          <div class="card-body">
            <a href="javascript:void();" class="card-link">Card link</a>
            <a href="javascript:void();" class="card-link">Another link</a>
          </div>
        </div>
        </div>
        
      </div><!--End Row-->
    
  
    
    

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->



<?php  require ("includes/footer.php"); ?>
