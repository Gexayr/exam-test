$(document).ready(function () {

    const frm = $('#my_form');
    frm.submit(function (e) {
        e.preventDefault(e);

        let formData = new FormData(this);

        $.ajax({
            async: true,
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log("success")
            },
            error: function(request, status, error) {
                console.log("error")
            }
        });
    });

});
