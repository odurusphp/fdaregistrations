$(document).ready(function() {

  const urlroot = marketplacecfg.urlroot;

  function AjaxPostTest(ajaxurl, postdata){

        $.ajax({
            type: "POST",
            url: ajaxurl,
            data : postdata,
            beforeSend: function () {
                $.blockUI();
            },
            success: function (text) {
                $("#test").html(text);
            },
            complete: function () {
                $.unblockUI();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            }
        });
    }

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
                $("#admincontent").html(text);
            },
            complete: function () {
                $.unblockUI();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            }
        });
    }

    // This Function will handle all ajax post request
      function AjaxPostRedirection(ajaxurl, postdata){

            $.ajax({
                type: "POST",
                url: ajaxurl,
                data : postdata,
                beforeSend: function () {
                    $.blockUI();
                },
                success: function (text) {
                  window.location =  urlroot + '/userenroll/customeraccounts';
                },
                complete: function () {
                    $.unblockUI();
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + " " + thrownError);
                }
            });
        }



        function AjaxPostRedirectUsers(ajaxurl, postdata){

              $.ajax({
                  type: "POST",
                  url: ajaxurl,
                  data : postdata,
                  beforeSend: function () {
                      $.blockUI();
                  },
                  success: function (text) {
                    window.location =  urlroot + '/pages/settings';
                  },
                  complete: function () {
                      $.unblockUI();
                  },
                  error: function (xhr, ajaxOptions, thrownError) {
                      alert(xhr.status + " " + thrownError);
                  }
              });
          }




//edit customer apptables
    $(document).on('click', '.editcustomer', function(){

        $('#adminmodal').modal('show');
        var userid =  $(this).attr('userid');
        var postdata = {userid:userid};
        var ajaxurl =  urlroot + '/userenroll/editcustomeruseraccount';

        AjaxPostRequest(ajaxurl, postdata);

    })


    $(document).on('click', '.resetcustomer', function(){

        $('#adminmodal').modal('show');
        var userid =  $(this).attr('userid');
        var postdata = {userid:userid};
        var ajaxurl =  urlroot + '/userenroll/resetcustomer';

        AjaxPostRequest(ajaxurl, postdata);

    })

    $(document).on('click', '.addcustomer', function(){

        $('#adminmodal').modal('show');
        var userid =  $(this).attr('userid');
        var postdata = {userid:userid};
        var ajaxurl =  urlroot + '/userenroll/useraccounts';

        AjaxPostRequest(ajaxurl, postdata);

    })

    $(document).on('click', '.lockcustomer', function(){

        var userid =  $(this).attr('userid');
        var postdata = {userid:userid};
        var ajaxurl =  urlroot + '/userenroll/lockcustomer';
        var question = confirm('Do you want to lock account ?');
        if(question == true){
        AjaxPostRedirection(ajaxurl, postdata);
        }

    })


    $(document).on('click', '.unlockcustomer', function(){
            var userid =  $(this).attr('userid');
            var postdata = {userid:userid};
            var ajaxurl =  urlroot + '/userenroll/unlockcustomer';
            var question = confirm('Do you want to unlock account ?');
            if(question == true){
            AjaxPostRedirection(ajaxurl, postdata);
            }

  })

  $(document).on('click', '#addmoreaccounts', function(){

    var userid = $('#userid').val();
    var customerids = $('#customerids').val();

    var postdata = {userid:userid, customerids:customerids};
    var ajaxurl =  urlroot + '/userenroll/addSecondaryUsers';
    $('#adminmodal').modal('hide');
    AjaxPostRedirection(ajaxurl, postdata);

  })


  $(document).on('click', '#resetpassword', function(){

    var userid = $('#userid').val();
    var resetpass = $('#resetpass').val();
    var confirmpass =  $('#confirmpass').val();

    if(resetpass == ''){alert ('Please enter password'); return false; }
    if(resetpass != confirmpass){alert ('Both passwords must match'); return false; }

    var postdata = {userid:userid, resetpass:resetpass};
    var ajaxurl =  urlroot + '/userenroll/resetpassword';
     $('#adminmodal').modal('hide');
    AjaxPostRedirection(ajaxurl, postdata);

  })

  $(document).on('click', '.deleteaccount', function(){

    var cid = $(this).attr('cid');
    var userid = $('#userid').val();
    var postdata = {cid:cid, userid:userid};
    var question = confirm('Do you want to delete account ?');

    if(question == true){
    $('#adminmodal').modal('hide');
    var ajaxurl =  urlroot + '/userenroll/deleteCustomerAccount';
     AjaxPostRedirection(ajaxurl, postdata);

    }

  })

  $(document).on('click', '.deleteadmin', function(){

    var userid = $(this).attr('userid');
    var postdata = {userid:userid};
    var question = confirm('Do you want to delete account ?');
    if(question == true){
    var ajaxurl =  urlroot + '/userenroll/deleteadminaccount';
     AjaxPostRedirectUsers(ajaxurl, postdata);
    }

  })

  $(document).on('click', '.billingchk', function(){
    var userid = $(this).attr('userid');
    var postdata = {userid:userid};

    if($(this).is(':checked')){
    var ajaxurl =  urlroot + '/userenroll/superadminstatus';
    AjaxPostRedirectUsers(ajaxurl, postdata);
    }
    else{
      var ajaxurl =  urlroot + '/userenroll/adminstatus';
      AjaxPostRedirectUsers(ajaxurl, postdata);
    }


  })


  $(document).on('click', '.ltstatus', function(){

    var userid =  $(this).attr('userid');
    var postdata = {userid:userid};
    var ajaxurl =  urlroot + '/userenroll/lockcustomer';
    var question = confirm('Do you want to lock this account ?');
    if(question == true){
    AjaxPostRedirectUsers(ajaxurl, postdata);
    }

  })


  $(document).on('click', '.atstatus', function(){

    var userid =  $(this).attr('userid');
    var postdata = {userid:userid};
    var ajaxurl =  urlroot + '/userenroll/unlockcustomer';
    var question = confirm('Do you want to unlock this account ?');
    if(question == true){
    AjaxPostRedirectUsers(ajaxurl, postdata);
    }
  })













})
