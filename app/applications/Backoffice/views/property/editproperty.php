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

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1nEal4lqDWdBz9mf79KUd0zGZdgArVfY&callback=initMap&v=3.exp&libraries=places"></script>
<script type="text/javascript">

      var map, infoWindow;

      function initMap() {
           map = new google.maps.Map(document.getElementById('map'), {
          center: {lat:<?php echo $data['propertydata']['latitude']   ?> , lng: <?php  echo  $data['propertydata']['longitude']  ?> },
          zoom: 17,
          mapTypeId: 'roadmap'
        });


        var marker = new google.maps.Marker({
          position: {lat:<?php echo $data['propertydata']['latitude']  ?> , lng: <?php  echo $data['propertydata']['longitude'] ?>},
          map: map
        });

          map.addListener('click', function(e) {
          placeMarker(e.latLng, map);
        });

          function placeMarker(location) {
              if (marker) {
                  //if marker already was created change positon
                  marker.setPosition(location);
              } else {
                  //create a marker
                    marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    draggable: true
                  });

              }
          }
    }



</script>

<body onload=initMap()>
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
          <h1 style='color:#800080; font-weight:700' class="page-title">PROPERTY LISTING bY:
             <?php  echo $data['userdata']->firstname . ' '. $data['userdata']->lastname ?></h1>
        </div>
   </div>

      <hr/>

      <div id='placeholder'>

        <table>
        <?php

         foreach($data['pictures'] as $get):
        ?>
        <td><input class='checkpicture' type='checkbox' docid='<?php echo $get->docid ?>'
          value='<?php echo DOCROOT. $get->docid ?>' <?php  checkfeatured($get->status)  ?> ></td>
        <td><a class='pictures' picid='<?php echo $get->docid ?>'><img height=120 width=150  src='<?php echo DOCROOT. $get->filename    ?>'   /></a></td>
        <?php
        endforeach;
        ?>

        </tr>

        </table>




      </div>



<div class="row" style="margin-bottom:20px">



      <div class="col-lg-7 col-md-7 col-sm-7">

      <div class='card'>
      <div class="container">
      <br/>
      <div align='center'>

<table  class='table table-bordered table-condensed' style='font-size:12px'>
      <tr>
      <td>Status</td>
      <td><?php echo  $data['propertydata']['listingstatus'] == 1 ? 'Blocked' : 'Active'   ?></td>
     </tr>
       <tr>
       <td>Property Title</td>
       <td><input type='text' class='form-control' name='title' value='<?php echo $data['propertydata']['propertytitle']   ?>'></td>
      </tr>

      <tr>
       <td>Type</td>
       <td><input type='text' class='form-control' name='type' value='<?php echo $data['propertydata']['type']   ?>'></td>
      </tr>

      <tr>
       <td>Number of Rooms</td>
       <td><input type='text' class='form-control' name='rooms' value='<?php echo $data['propertydata']['rooms']   ?>'></td>
      </tr>

      <tr>
       <td>Bedrooms</td>
       <td><input type='text' class='form-control' name='bedrooms' value='<?php echo $data['propertydata']['bedrooms']   ?>'></td>
      </tr>

      <tr>
       <td>Bathrooms</td>
       <td><input type='text' class='form-control' name='numberofdays' value='<?php echo $data['propertydata']['bathrooms']   ?>'></td>
      </tr>

      <tr>
       <td>Area</td>
       <td><input type='text' class='form-control' name='area' value='<?php echo $data['propertydata']['area']   ?>'></td>
      </tr>

      <tr>
       <td>Age of Building</td>
       <td><input type='text' class='form-control' name='buildingage' value='<?php echo $data['propertydata']['buildingage']   ?>'></td>
      </tr>

      <tr>
       <td>Description</td>
       <td><textarea type='text' class='form-control' name='description'><?php  echo $data['propertydata']['description']  ?></textarea></td>
      </tr>

      <tr>
       <td>Price</td>
       <td><input type='text' class='form-control' name='amount' value='<?php echo $data['propertydata']['price'] ?>'></td>
      </tr>

      <tr>
       <td></td>
       <td><button class='btn btn-danger' type='submit' name='addsubscription' > Update Property</button>
         <button class='btn btn-danger blockproperty' type='button' propertyid='<?php echo $data['propertydata']['propertyid'] ?>'>
          Block Property </button>
          <button class='btn btn-danger unblockproperty' type='button' propertyid='<?php echo $data['propertydata']['propertyid'] ?>'>
           Unblock Property </button>
       </td>
      </tr>

      </table>
    </div>
   </div>
   </div>

    </div>

    <div class="col-lg-5 col-md-5 col-sm-5">

    <div class='card'>
     <table  class='table table-bordered table-striped' style='font-size:12px'>
      <tr>
      <td colspan="2"><h3>Other Property Information</h3></td>
     </tr>
      <tr>
       <td>Property Status</td>
       <td></td>
      </tr>

      <tr>
       <td>Renting Type</td>
       <td></td>
      </tr>

      <tr>
       <td>Furnishing</td>
       <td></td>
      </tr>



       <tr>
       <td>Rating</td>
       <td></td>
      </tr>

      <tr>
       <td>Type of Occupancy</td>
       <td></td>
      </tr>

      <tr>
       <td>Request for photography</td>
       <td></td>
      </tr>

      <tr>
       <td>Amenities</td>
       <td></td>
      </tr>

      <tr>
       <td>Home Services</td>
       <td></td>
      </tr>

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

</body>
<!--Footer and JS directies -->

<?php require APPROOT .'/views/inc/footer.php'  ?>
