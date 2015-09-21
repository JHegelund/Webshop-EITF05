    $(document).ready(function() {
        $('#register').on('submit', function(e) {

            e.preventDefault();
            var email = $("#inputEmail").val();
            var password = $("#inputPassword").val();
            var address = $("#inputAddress").val();

            var dataString = 'inputEmail=' + email + '&inputPassword=' + password + '&inputAddress=' + address;

            $.ajax({
                url: "register.php",
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
