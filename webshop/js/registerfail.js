$(document).ready(function(){
  
  $("#submit").click(function(){

    var username = $("#inputEmail").val();
    var password = $("#inputPassword").val();
    var address = $("#inputAddress").val();

    $("#message").html("<p>hej</p>");
    
    if((username == "") || (password == "") || (address == "")) {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Fyll i alla fält.</div>");
    }
    else {
      $.ajax({
        type: "POST",
        url: "register.php",
        data: "inputEmail="+username+"&inputPassword="+password+"&inputAddress="+address,
        success: function(html){    
          if(html=='true') {
            $("#message").html("<div class="alert alert-success">You have been <strong>successfully logged in</strong>.</div>");
          }
          else {
            $("#message").html(html);
          }
        },
        beforeSend:function()
        {
          $("#message").html("<p class='text-center'><img src='images/ajax-loader.gif'></p>")
        }
      });
    }
    return false;
  });
});

