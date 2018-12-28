$(document).ready(function() {


    const urlroot = marketplacecfg.urlroot;

//This handles the datatables
// TODO  : will be moved from here to separate js file
    $('.apptables').DataTable({
        responsive: true
    });

// Handles the tabs on pagesCount
// TODO : will be moved from here to separate js file
    $('#tabs').tabs();

  // datepicker

  $("#from, #to").datepicker({inline: true,
  changeMonth: true, changeYear: true, yearRange: "2016:2020", dateFormat: 'yy-mm-dd',
   maxDate: 0 });


// This Function will handle all ajax post request
    function AjaxPostRequest(ajaxurl, postdata){

        $.ajax({
            type: "POST",
            url: ajaxurl,
            data : postdata,
            beforeSend: function () {
                $.blockUI();
            },
            success: function (text) {
                //alert(text)
                $("#ajaxcontainer").html(text);
            },
            complete: function () {
                $.unblockUI();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            }
        });
    }


    function AjaxPostRedirection(ajaxurl, postdata, redirectionurl){

                $.ajax({
                    type: "POST",
                    url: ajaxurl,
                    data : postdata,
                    beforeSend: function () {
                        $.blockUI();
                    },
                    success: function (text) {
                       window.location.href = redirectionurl;
                    },
                    complete: function () {
                        $.unblockUI();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + " " + thrownError);
                    }
                });
    }

    $(document).on('click', '.deleteuser', function(){

        //$('#viewmodal').modal('show');
        var userid =  $(this).attr('userid');
        var postdata = {userid:userid};
        var ajaxurl =  urlroot + '/ajax/deleteuser';
        var  redirectionurl =  urlroot + '/pages/manageusers';

        if(confirm('Do you want to delete user ?')){
        AjaxPostRedirection(ajaxurl, postdata,redirectionurl);
        }

    })


    $(document).on('click', '.deletesubscription', function(){

        //$('#viewmodal').modal('show');
        var subscriptionid =  $(this).attr('subid');


        var postdata = {subscriptionid:subscriptionid};
        var ajaxurl =  urlroot + '/ajax/deletesubscription';
        var  redirectionurl =  urlroot + '/pages/subscriptions';

        if(confirm('Do you want to delete subscription ?')){
        AjaxPostRedirection(ajaxurl, postdata,redirectionurl);
        }

    })



    $(document).on('click', '.deletehomeitem', function(){

                //$('#viewmodal').modal('show');
                var homeid =  $(this).attr('homeid');


                var postdata = {homeid:homeid};
                var ajaxurl =  urlroot + '/ajax/deletehomeservice';
                var  redirectionurl =  urlroot + '/pages/homeservices';

                if(confirm('Do you want to delete item ?')){
                AjaxPostRedirection(ajaxurl, postdata,redirectionurl);
                }

    })

    $(document).on('click', '.deletefurnish', function(){

        //$('#viewmodal').modal('show');
        var serviceid =  $(this).attr('serviceid');


        var postdata = { serviceid: serviceid};
        var ajaxurl =  urlroot + '/ajax/deletefurnishing';
        var  redirectionurl =  urlroot + '/pages/furnishing';

        if(confirm('Do you want to delete item ?')){
        AjaxPostRedirection(ajaxurl, postdata,redirectionurl);
        }

    })

    $(document).on('click', '.deletecharge', function(){
        var serviceid =  $(this).attr('serviceid');
        var postdata = {serviceid: serviceid};
        var ajaxurl =  urlroot + '/ajax/deletecharge';
        var  redirectionurl =  urlroot + '/pages/charges';

        if(confirm('Do you want to delete item ?')){
        AjaxPostRedirection(ajaxurl, postdata,redirectionurl);
        }

    })

    $(document).on('click', '.editproperty', function(){
      $('#viewmodal').modal('show');
      var propertyid = $(this).attr('propertyid');

      var postdata = {propertyid:propertyid};
      var ajaxurl =  urlroot + '/pages/editproperty';
      AjaxPostRequest(ajaxurl, postdata)
    })



    $(document).on('click', '.deleteservice', function(){

      var serviceid = $(this).attr('serviceid');

      var postdata = {serviceid:serviceid};
      var ajaxurl =  urlroot + '/ajax/deleteservice';
      var  redirectionurl =  urlroot + '/pages/services';
      if(confirm('Do you want to delete service ?')){
        AjaxPostRedirection(ajaxurl, postdata,redirectionurl);
        }

    })

    $(document).on('click', '.deletebooking', function(){

      var serviceid = $(this).attr('serviceid');
      var postdata = {serviceid:serviceid};
      var ajaxurl =  urlroot + '/ajax/deletebooking';
      var  redirectionurl =  urlroot + '/pages/bookconfig';
      if(confirm('Do you want to delete item ?')){
        AjaxPostRedirection(ajaxurl, postdata,redirectionurl);
        }
    })

    $(document).on('click', '.blockproperty', function(){
      var propertyid = $(this).attr('propertyid');
      var fvalue = 1;
      var postdata = {fvalue:fvalue, propertyid:propertyid};
      var ajaxurl =  urlroot + '/ajax/blockproperty';
      var redirectionurl =  urlroot + '/pages/editproperty/'+propertyid;
      if(confirm('Do you want to block listing ?')){
        AjaxPostRedirection(ajaxurl, postdata,redirectionurl);
        }
    })

    $(document).on('click', '.unblockproperty', function(){
      var propertyid = $(this).attr('propertyid');
      var fvalue = 0;
      var postdata = {fvalue:fvalue, propertyid:propertyid};
      var ajaxurl =  urlroot + '/ajax/blockproperty';
      var redirectionurl =  urlroot + '/pages/editproperty/'+propertyid;
      if(confirm('Do you want to unblock listing ?')){
        AjaxPostRedirection(ajaxurl, postdata,redirectionurl);
        }
    })


    $(document).on('click', '.featured', function(){

        var propertyid = $(this).attr('propertyid');



        if($(this).is(':checked') == true){

            var  fvalue = 'Yes';

            var postdata = {fvalue:fvalue, propertyid:propertyid};
            var ajaxurl =  urlroot + '/ajax/featured';
            alert('Featured Successfully');
            var  redirectionurl =  urlroot + '/pages/property';
            AjaxPostRedirection(ajaxurl, postdata,redirectionurl);


        }else{
            var  fvalue = 'No';
            var postdata = {fvalue:fvalue, propertyid:propertyid};
            var ajaxurl =  urlroot + '/ajax/featured';
            var  redirectionurl =  urlroot + '/pages/property';
             AjaxPostRedirection(ajaxurl, postdata,redirectionurl);
        }

    })

    $(document).on('click', '.checkpicture', function(){

        var docid = $(this).attr('docid');

        if($(this).is(':checked') == true){

            var  fvalue = 1;
            var postdata = {fvalue:fvalue, docid:docid};
            var ajaxurl =  urlroot + '/ajax/checkpicture';
            AjaxPostRequest(ajaxurl, postdata);


        }else{
            var  fvalue = 0;
            var postdata = {fvalue:fvalue,docid:docid};
            var ajaxurl =  urlroot + '/ajax/checkpicture';
            AjaxPostRequest(ajaxurl, postdata);


        }

    })



    $(document).on('click', '.pictures', function(){


        $('#picmodal').modal('show');
        var picid  = $(this).attr('picid');

        var postdata = {picid:picid};
        var ajaxurl =  urlroot + '/pages/pictures';
        $.ajax({
            type: "POST",
            url: ajaxurl,
            data : postdata,
            beforeSend: function () {
                $.blockUI();
            },
            success: function (text) {
                $("#picontainer").html(text);
            },
            complete: function () {
                $.unblockUI();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            }
        });


    })


    $(document).on('click', '#location', function(){


        $('#mapmodal').modal('show');
        var lat  = $(this).attr('latitude');
        var lon  = $(this).attr('longitude');


        var url =  urlroot + '/pages/map/'+lat+'/'+lon;

        $.ajax({
            type: "POST",
            url: '',
            data :{},
            beforeSend: function () {
                $.blockUI();
            },
            success: function (text) {
                $("#mcontainer").html("<iframe width='100%' style='height:600px; border:none' src='"+url+"'></iframe>");
            },
            complete: function () {
                $.unblockUI();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            }
        });


    })


// build mart JS started here. FYI


$('.summernote').summernote({
        placeholder: 'Paste your content',
        tabsize: 2,
        height: 200,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
       ],

 });


 $('.bsummernote').summernote({
         placeholder: 'Paste your content',
         tabsize: 2,
         height: 500,
         toolbar: [
             // [groupName, [list of button]]
             ['style', ['bold', 'italic', 'underline', 'clear']],
             ['para', ['ul', 'ol', 'paragraph']],
             ['height', ['height']]
        ],

  });



  $('#category').change(function(){

       var catid  =  $(this).val();
       var postdata = {catid:catid};
       var ajaxurl =  urlroot + '/backoffice/pages/subcategorydata';

       $('#subcategory').html('');

       $.ajax({
           type: "POST",
           url: ajaxurl,
           data : postdata,
           beforeSend: function () {
               $.blockUI();
           },
           success: function (json) {

               var data = JSON.parse(json);
               for (var key in data) {
                   if (data.hasOwnProperty(key)) {
                     $('#subcategory').append('<option>' + data[key].subcategoryname + '</option>');
                   }
               }

           },
           complete: function () {
               $.unblockUI();
           },
           error: function (xhr, ajaxOptions, thrownError) {
               alert(xhr.status + " " + thrownError);
           }
       });
   })

   $(document).on('click', '.adddimension', function(){

     $('#viewmodal').modal('show');
     var dimension = $(this).attr('dimension');
     var productid = $(this).attr('productid');

     var postdata = {dimension:dimension, productid:productid};
     var ajaxurl =  urlroot + '/backoffice/pages/dimension';
     AjaxPostRequest(ajaxurl, postdata);

   })

   $(document).on('click', '.savedescription', function(){

     var productid = $(this).attr('productid');
     var description = $('.summernote').val();
     alert(description);
     var postdata = {description:description, productid:productid};
     var ajaxurl =  urlroot + '/backoffice/pages/savedescription';
     var redirectionurl =  urlroot + '/backoffice/pages/productdetails/'+productid;

     AjaxPostRedirection(ajaxurl, postdata, redirectionurl);

   })


})
