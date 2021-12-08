$(document).ready(function() {

    $('#password1').blur(function(e) {
        if ($('#password1').val() == $('#password').val()) {

            $.ajax({
                method: 'POST',
                url: 'Registration.php',
                success: function(e) {
                    $("#confirm").append("The password matches");

                    setTimeout(function() {
                        $('#confirm').empty();
                    }, 3000);
                    document.getElementById("confirm").innerHTML = " ";
                    $("#confirm").append("The password matches");
                }


            })
        } else {

            $("#confirm2").append("The password doesnt matches");

            setTimeout(function() {
                $('#confirm2').empty();
            }, 3000);
            return false;
            document.getElementById("confirm2").innerHTML = " ";
            $("#confirm2").append("The password doesnt matches");
            return false;
        }

    })

    $('#phonenumber').blur(function() {
        var x = document.getElementById("phonenumber").value;
        if ($('#phonenumber').val().length == 11 && !isNaN(x)) {


            $.ajax({
                method: 'POST',
                url: 'Registration.php',
                success: function() {
                    $("#ehyaba").append("The Phone number is correct ");

                    setTimeout(function() {
                        $('#ehyaba').empty();
                    }, 3000);
                    document.getElementById("ehyaba").innerHTML = " ";
                    $("#ehyaba").append("The Phone number is correct ");
                }


            })
        } else {


            $("#ehyaba2").append("The Phone number should be 11 numbers");

            setTimeout(function() {
                $('#ehyaba2').empty();
            }, 3000);
            document.getElementById("ehyaba2").innerHTML = " ";
            $("#ehyaba2").append("The Phone number should be 11 numbers");
            return false;
        }

    })

})