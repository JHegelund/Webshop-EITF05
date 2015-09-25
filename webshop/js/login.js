    $(document).ready(function() {
        $('#login').on('submit', function(e) {

            e.preventDefault();
            var email = $("#inputEmail").val();
            var password = $("#inputPassword").val();

            var dataString = 'inputEmail=' + email + '&inputPassword=' + password;

            $.ajax({
                url: "loginservice.php",
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
