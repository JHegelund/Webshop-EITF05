$(document).ready(function() {
        $('#register').on('submit', function(e) {

            e.preventDefault();
            var email = $("#inputEmail").val();
            var password = $("#inputPassword").val();
            var email = $("#inputEmail").val();
            var password = $("#inputPassword").val();
            var firstname = $("#inputFirstname").val();
            var lastname = $("#inputLastname").val();
            var street = $("#inputStreet").val();
            var zipcode = $("#inputZipcode").val();
            var city = $("#inputCity").val();

            var dataString = 'inputEmail=' + email + '&inputPassword=' + password + '&inputFirstname=' + firstname + '&inputLastname=' + lastname + '&inputStreet=' + street + '&inputZipcode=' + zipcode + '&inputCity=' + city;
           
            $.ajax({
                url: "registerservice.php",
                type: "POST",
                data: dataString,
                cache: false,
                success: function(data) {
                    $("#message").html(data);

                },
                error: function(jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        });
    });