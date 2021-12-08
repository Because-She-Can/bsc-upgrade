
 $(function() {
    $(document).on('click','#company_type_update', function() {
            //  alert("hi")
            var data = JSON.parse($(this).attr('data-data'));
            console.log(data);
                $('#company_type_id_edit').val(data.id);
                $('#company_type_name_edit').val(data.name);
                $('#company_type_status_edit').val(data.status);
               
    });

    $("#company_type_create_form").submit(function(event) {
                event.preventDefault();
                // Hide all error messages
                $('#company_type_name_error').text('')
                
                $('#company_type_create_form').preloader();
                $("#sendbtn").prop("disabled", true);
                var formData = $('#company_type_create_form').serialize();
                console.log(formData);

                //send ajax request to server
                axios.post($('#company_type_create_form').attr('action'), formData)
                    .then(function(response) {
                        swal(
                                "Success!",
                                "" + response.data.message + "",
                                "success"
                            );
                        $('#table').DataTable().ajax.reload();
                        //remove preloader and enable submit button
                        $('#company_type_create_form').preloader('remove');
                        $("#sendbtn").prop("disabled", false);
                        // window.location.href = '/dashboard';
                    })
                    .catch(function(error) {
                        console.log(error.response);

                        //Display form validation Error Messages from server
                        if (error.response.data.errors.name) {
                            $('#company_type_name_error').text(error.response.data.errors.name[0]);
                        }                       
                        else {

                            $("#company_type_create_form").modal('hide');

                            swal(
                                "Error!",
                                "" + error.message + "",
                                "error"
                            );
                        }
                        $('#company_type_create_form').preloader('remove');
                        $("#sendbtn").prop("disabled", false);
                    });

    });

    $("#company_type_update_form").submit(function(event) {

                event.preventDefault();

                // Hide all error messages
                $('#company_type_name_error_edit').text('')
               
                $('#company_type_update_form').preloader();
                $("#updatebtn").prop("disabled", true);
                var formData = $('#company_type_update_form').serialize();
                console.log(formData);

                //send ajax request to server
                axios.post($('#company_type_update_form').attr('action'), formData)
                    .then(function(response) {

                        swal(
                                "Success!",
                                "" + response.data.message + "",
                                "success"
                            );
                        $('#table').DataTable().ajax.reload();

                        //remove preloader and enable submit button
                        $('#company_type_update_form').preloader('remove');
                        $("#updatebtn").prop("disabled", false);
                        // window.location.href = '/dashboard';
                    })
                    .catch(function(error) {
                        console.log(error.response);

                        //Display form validation Error Messages from server
                        if (error.response.data.errors.name) {
                            $('#company_type_name_error_edit').text(error.response.data.errors.name[0]);
                        }                        
                        else {

                            $("#company_type_update_form").modal('hide');

                            swal(
                                "Error!",
                                "" + error.message + "",
                                "error"
                            );

                        }
                        $('#company_type_update_form').preloader('remove');
                        $("#updatebtn").prop("disabled", false);
                    });

    });        

 });