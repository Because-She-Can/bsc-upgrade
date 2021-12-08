$(function() {
    $(document).on('click', '#homepage_slider_update', function() {
        var data = JSON.parse($(this).attr('data-data'));
        console.log(data);
        $('#homepage_slider_id_edit').val(data.id);
        /*$('#text_1_edit').text(data.text_1);
        $('#text_2_edit').text(data.text_2);*/
        $("#text_1_edit").summernote("code", data.text_1)
        $("#text_2_edit").summernote("code", data.text_2);
        $('#status_edit').val(data.status);
        $('#index_edit').val(data.index);
    });

    $("#homepage_slider_create_form").submit(function(event) {
        event.preventDefault();
        // Hide all error messages
        $('#text_1_error').text('')
        $('#text_2_error').text('')
        
        $('#homepage_slider_create_form').preloader();
        $("#sendbtn").prop("disabled", true);
        
        var form = $("#homepage_slider_create_form");

        const formData = new FormData(form[0]);

        //send ajax request to server
        axios.post($('#homepage_slider_create_form').attr('action'), formData)
            .then(function(response) {
                swal(
                    "Success!",
                    "" + response.data.message + "",
                    "success"
                );
                $('#table').DataTable().ajax.reload();
                //remove preloader and enable submit button
                $('#homepage_slider_create_form').preloader('remove');
                $("#sendbtn").prop("disabled", false);
                // window.location.href = '/dashboard';
            })
            .catch(function(error) {
                console.log(error.response.data.errors);

                //Display form validation Error Messages from server
                if (error.response.data.errors) {

                    if (error.response.data.errors.text_1) {
                        console.log(error.response.data.errors.text_1);
                        $('#text_1_error').text(error.response.data.errors.text_1[0]);
                    }

                    if (error.response.data.errors.text_1) {
                        $('#text_2_error').text(error.response.data.errors.text_1[0]);
                    }
                } else {

                    $("#homepage_slider_create_form").modal('hide');

                    swal(
                        "Error!",
                        "" + error.message + "",
                        "error"
                    );
                }
                $('#homepage_slider_create_form').preloader('remove');
                $("#sendbtn").prop("disabled", false);
            });

    });

    $("#homepage_slider_update_form").submit(function(event) {

        event.preventDefault();

        // Hide all error messages
        $('#company_name_error_edit').text('')
        $('#company_logo_error_edit').text('')
        $('#company_phone_error_edit').text('')
        $('#description_error_edit').text('')


        $('#homepage_slider_update_form').preloader();
        $("#updatebtn").prop("disabled", true);

        var form = $("#homepage_slider_update_form");

        const formData = new FormData(form[0]);

        console.log(formData);

        axios.post($('#homepage_slider_update_form').attr('action'), formData)
            .then(function(response) {

                swal(
                    "Success!",
                    "" + response.data.message + "",
                    "success"
                );
                $('#table').DataTable().ajax.reload();

                //remove preloader and enable submit button
                $('#homepage_slider_update_form').preloader('remove');
                $("#updatebtn").prop("disabled", false);
                // window.location.href = '/admin/dashboard';
            })
            .catch(function(error) {
                console.log(error.response.data.errors);

                //Display form validation Error Messages from server
                
                    $("#homepage_slider_update_form").modal('hide');

                    swal(
                        "Error!",
                        "" + error.message + "",
                        "error"
                    );

                
                $('#homepage_slider_update_form').preloader('remove');
                $("#updatebtn").prop("disabled", false);
            });

    });

});