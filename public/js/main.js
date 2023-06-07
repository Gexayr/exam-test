$(document).ready(function () {

    var tableBody = $('#table-content');

    // Show loading spinner
    function showLoadingSpinner() {
        $('#loading').show();
    }

    // Hide loading spinner
    function hideLoadingSpinner() {
        $('#loading').hide();
    }

    // Load data
    const frm = $('#myForm');
    frm.submit(function (e) {
        e.preventDefault(e);

        showLoadingSpinner();
        const formData = $(this).serialize();

        $.ajax({
            async: true,
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {

                // Clear existing table rows
                tableBody.empty();

                // Add data rows to the table
                response.forEach(function(item) {
                    var row = `
            <tr>
              <td>${item.id}</td>
              <td>${item.name}</td>
              <td>${item.price}</td>
              <td>${item.bedrooms}</td>
              <td>${item.bathrooms}</td>
              <td>${item.storeys}</td>
              <td>${item.garages}</td>
            </tr>
          `;
                    tableBody.append(row);
                });
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            },
            complete: function() {
                hideLoadingSpinner();
            }
        });
    })
});
