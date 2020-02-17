$(function () {
    console.log("Jquery está funcionando");

    $('#search').keyup(function () {
        var search = $('#search').val();
        console.log(search);
        // Peticion al servidor con ajax

        $.ajax({
            url: 'servidor.php',
            type: 'post',
            data: {
                search
            },
            success: function (response) {
                console.log(response);
            }
        });

    });
});
