$(function() {
    $(document).on('click', '#category_update', function() {
        //alert("hi")
        var data = JSON.parse($(this).attr('data-data'));
        console.log(data);
        $('#slug').val(data.slug);
        $('#category_name_edit').val(data.category_name);
        $('#category_status_edit').val(data.category_status);

    });

    $("#create_form").submit(function(event) {
        event.preventDefault();
        // Hide all error messages
        $('#category_name_error').text('')

        $('#create_form').preloader();
        $("#sendbtn").prop("disabled", true);
        var formData = $('#create_form').serialize();
        console.log(formData);

        //send ajax request to server
        axios.post($('#create_form').attr('action'), formData)
            .then(function(response) {
                swal(
                    "Success!",
                    "" + response.data.message + "",
                    "success"
                );
                $('#table').DataTable().ajax.reload();
                //remove preloader and enable submit button
                $('#create_form').preloader('remove');
                $("#sendbtn").prop("disabled", false);
                // window.car_dealer_type.href = '/dashboard';
            })
            .catch(function(error) {
                console.log(error.response);

                //Display form validation Error Messages from server
                if (error.response.data.errors.category_name) {
                    $('#category_name_error').text(error.response.data.errors.category_name[0]);
                } else {

                    $("#create_form").modal('hide');

                    swal(
                        "Error!",
                        "" + error.message + "",
                        "error"
                    );
                }
                $('#create_form').preloader('remove');
                $("#sendbtn").prop("disabled", false);
            });

    });

    $("#update_form").submit(function(event) {

        event.preventDefault();

        // Hide all error messages
        $('#category_name_error_edit').text('')

        $('#update_form').preloader();
        $("#updatebtn").prop("disabled", true);
        var formData = $('#update_form').serialize();
        console.log(formData);

        //send ajax request to server
        axios.post($('#update_form').attr('action'), formData)
            .then(function(response) {

                swal(
                    "Success!",
                    "" + response.data.message + "",
                    "success"
                );
                $('#table').DataTable().ajax.reload();

                //remove preloader and enable submit button
                $('#update_form').preloader('remove');
                $("#updatebtn").prop("disabled", false);
                // window.car_dealer_type.href = '/dashboard';
            })
            .catch(function(error) {
                console.log(error.response);

                //Display form validation Error Messages from server
                if (error.response.data.errors.name) {
                    $('#category_name_error_edit').text(error.response.data.errors.name[0]);
                } else {

                    $("#update_form").modal('hide');

                    swal(
                        "Error!",
                        "" + error.message + "",
                        "error"
                    );

                }
                $('#update_form').preloader('remove');
                $("#updatebtn").prop("disabled", false);
            });

    });



});