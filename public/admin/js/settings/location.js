
 $(function() {
    $(document).on('click','#location_update', function() {
            //  alert("hi")
            var data = JSON.parse($(this).attr('data-data'));
                $('#location_id_edit').val(data.id);
                $('#location_name_edit').val(data.name);
                $('#location_status_edit').val(data.status);
    });

    $("#location_create_form").submit(function(event) {
                event.preventDefault();
                // Hide all error messages
                $('#location_name_error').text('')
                
                $('#location_create_form').preloader();
                $("#sendbtn").prop("disabled", true);
                var formData = $('#location_create_form').serialize();
                console.log(formData);

                //send ajax request to server
                axios.post($('#location_create_form').attr('action'), formData)
                    .then(function(response) {
                        swal(
                                "Success!",
                                "" + response.data.message + "",
                                "success"
                            );
                        $('#table').DataTable().ajax.reload();
                        //remove preloader and enable submit button
                        $('#location_create_form').preloader('remove');
                        $("#sendbtn").prop("disabled", false);
                        // window.location.href = '/dashboard';
                    })
                    .catch(function(error) {
                        console.log(error.response);

                        //Display form validation Error Messages from server
                        if (error.response.data.errors.name) {
                            $('#location_name_error').text(error.response.data.errors.name[0]);
                        }                       
                        else {

                            $("#location_create_form").modal('hide');

                            swal(
                                "Error!",
                                "" + error.message + "",
                                "error"
                            );
                        }
                        $('#location_create_form').preloader('remove');
                        $("#sendbtn").prop("disabled", false);
                    });

    });

    $("#location_update_form").submit(function(event) {

                event.preventDefault();

                // Hide all error messages
                $('#location_name_edit_error').text('')
               
                $('#location_update_form').preloader();
                $("#updatebtn").prop("disabled", true);
                var formData = $('#location_update_form').serialize();
                console.log(formData);

                //send ajax request to server
                axios.post($('#location_update_form').attr('action'), formData)
                    .then(function(response) {

                        swal(
                                "Success!",
                                "" + response.data.message + "",
                                "success"
                            );
                        $('#table').DataTable().ajax.reload();

                        //remove preloader and enable submit button
                        $('#location_update_form').preloader('remove');
                        $("#updatebtn").prop("disabled", false);
                        // window.location.href = '/dashboard';
                    })
                    .catch(function(error) {
                        console.log(error.response);

                        //Display form validation Error Messages from server
                        if (error.response.data.errors.name) {
                            $('#location_name_edit_error').text(error.response.data.errors.name[0]);
                        }                        
                        else {

                            $("#location_update_form").modal('hide');

                            swal(
                                "Error!",
                                "" + error.message + "",
                                "error"
                            );

                        }
                        $('#location_update_form').preloader('remove');
                        $("#updatebtn").prop("disabled", false);
                    });

    });        



 });