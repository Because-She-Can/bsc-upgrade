
 $(function() {
    $(document).on('click','#specialty_update', function() {
            //  alert("hi")
            var data = JSON.parse($(this).attr('data-data'));
            // console.log(data);

                $('#specialty_id_edit').val(data.id);
                $('#specialty_name_edit').val(data.name);
                $('#specialty_status_edit').val(data.status);
               
    });

    $("#specialty_create_form").submit(function(event) {
                event.preventDefault();
                // Hide all error messages
                $('#specialty_name_error').text('')
                
                $('#specialty_create_form').preloader();
                $("#sendbtn").prop("disabled", true);
                var formData = $('#specialty_create_form').serialize();
                console.log(formData);

                //send ajax request to server
                axios.post($('#specialty_create_form').attr('action'), formData)
                    .then(function(response) {
                        swal(
                                "Success!",
                                "" + response.data.message + "",
                                "success"
                            );
                        $('#table').DataTable().ajax.reload();
                        //remove preloader and enable submit button
                        $('#specialty_create_form').preloader('remove');
                        $("#sendbtn").prop("disabled", false);
                        // window.specialty.href = '/dashboard';
                    })
                    .catch(function(error) {
                        console.log(error.response);

                        //Display form validation Error Messages from server
                        if (error.response.data.errors.name) {
                            $('#specialty_name_error').text(error.response.data.errors.name[0]);
                        }                       
                        else {

                            $("#specialty_create_form").modal('hide');

                            swal(
                                "Error!",
                                "" + error.message + "",
                                "error"
                            );
                        }
                        $('#specialty_create_form').preloader('remove');
                        $("#sendbtn").prop("disabled", false);
                    });

    });

    $("#specialty_update_form").submit(function(event) {

                event.preventDefault();

                // Hide all error messages
                $('#specialty_name_error_edit').text('')
               
                $('#specialty_update_form').preloader();
                $("#updatebtn").prop("disabled", true);
                var formData = $('#specialty_update_form').serialize();
                console.log(formData);

                //send ajax request to server
                axios.post($('#specialty_update_form').attr('action'), formData)
                    .then(function(response) {

                        swal(
                                "Success!",
                                "" + response.data.message + "",
                                "success"
                            );
                        $('#table').DataTable().ajax.reload();

                        //remove preloader and enable submit button
                        $('#specialty_update_form').preloader('remove');
                        $("#updatebtn").prop("disabled", false);
                        // window.specialty.href = '/dashboard';
                    })
                    .catch(function(error) {
                        console.log(error.response);

                        //Display form validation Error Messages from server
                        if (error.response.data.errors.name) {
                            $('#specialty_name_error_edit').text(error.response.data.errors.name[0]);
                        }                        
                        else {

                            $("#specialty_update_form").modal('hide');

                            swal(
                                "Error!",
                                "" + error.message + "",
                                "error"
                            );

                        }
                        $('#specialty_update_form').preloader('remove');
                        $("#updatebtn").prop("disabled", false);
                    });

    });        



 });