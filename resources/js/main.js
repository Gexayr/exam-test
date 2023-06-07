$(document).ready(function () {

    const frm = $('#myForm');
    frm.submit(function (e) {
        e.preventDefault(e);
        alert(222)
        const formData = $(this).serialize();

        $.ajax({
            async: true,
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json', // Expect JSON response
            success: function(response) {
                // Handle the successful response here
                console.log(response);
            },

            error: function(request, status, error) {
                console.log("error")
            }
        });
    });

});
