
 $(function() {
    $(document).on('click','#region_update', function() {
            //  alert("hi")
            var data = JSON.parse($(this).attr('data-data'));
                $('#region_id_edit').val(data.id);
                $('#region_name_edit').val(data.name);
                $('#region_status_edit').val(data.status);
    });

    $("#region_create_form").submit(function(event) {
                event.preventDefault();
                // Hide all error messages
                $('#region_name_error').text('')
                
                $('#region_create_form').preloader();
                $("#sendbtn").prop("disabled", true);
                var formData = $('#region_create_form').serialize();
                console.log(formData);

                //send ajax request to server
                axios.post($('#region_create_form').attr('action'), formData)
                    .then(function(response) {
                        swal(
                                "Success!",
                                "" + response.data.message + "",
                                "success"
                            );
                        $('#table').DataTable().ajax.reload();
                        //remove preloader and enable submit button
                        $('#region_create_form').preloader('remove');
                        $("#sendbtn").prop("disabled", false);
                        // window.region.href = '/dashboard';
                    })
                    .catch(function(error) {
                        console.log(error.response);

                        //Display form validation Error Messages from server
                        if (error.response.data.errors.name) {
                            $('#region_name_error').text(error.response.data.errors.name[0]);
                        }                       
                        else {

                            $("#region_create_form").modal('hide');

                            swal(
                                "Error!",
                                "" + error.message + "",
                                "error"
                            );
                        }
                        $('#region_create_form').preloader('remove');
                        $("#sendbtn").prop("disabled", false);
                    });

    });

    $("#region_update_form").submit(function(event) {

                event.preventDefault();

                // Hide all error messages
                $('#region_name_edit_error').text('')
               
                $('#region_update_form').preloader();
                $("#updatebtn").prop("disabled", true);
                var formData = $('#region_update_form').serialize();
                console.log(formData);

                //send ajax request to server
                axios.post($('#region_update_form').attr('action'), formData)
                    .then(function(response) {

                        swal(
                                "Success!",
                                "" + response.data.message + "",
                                "success"
                            );
                        $('#table').DataTable().ajax.reload();

                        //remove preloader and enable submit button
                        $('#region_update_form').preloader('remove');
                        $("#updatebtn").prop("disabled", false);
                        // window.region.href = '/dashboard';
                    })
                    .catch(function(error) {
                        console.log(error.response);

                        //Display form validation Error Messages from server
                        if (error.response.data.errors.name) {
                            $('#region_name_edit_error').text(error.response.data.errors.name[0]);
                        }                        
                        else {

                            $("#region_update_form").modal('hide');

                            swal(
                                "Error!",
                                "" + error.message + "",
                                "error"
                            );

                        }
                        $('#region_update_form').preloader('remove');
                        $("#updatebtn").prop("disabled", false);
                    });
    });        
 });