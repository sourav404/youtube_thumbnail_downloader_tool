$(document).ready(function() {

    $("#btn").on('click', function() {
        var vid = $("#url").val();


        var p = /^(?:https?:\/\/)?(?:m\.|www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
        if (vid.match(p)) {
            $('#loder').show();
            $("#error").html("")

        } else {
            $("#error").html("Enter A Valid Url...")
            return false;
        }


        $.ajax({
            url: "ytget.php",
            type: "POST",
            data: {
                url: vid,
            },
            success: function(data) {
                $('.datashow').html(data);
                $('.datashow').show();

                $('#loder').hide();
            }

        })



    });


});