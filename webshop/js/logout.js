 $(document).ready(function() {
        $("#logout").click(function(){

            event.preventDefault();
            document.getElementById("my_form").submit();
            
        });
    });