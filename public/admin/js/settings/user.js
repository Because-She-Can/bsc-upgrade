 "use strict"
 
 $(function() {

            // hide($('.company'));


            $("#user_type").change(function(even) {
        
                var user_type_value = $("#user_type").val()
            
                if (user_type_value == 'new_car_dealer' || user_type_value == 'used_car_dealer' || user_type_value == 'rental') {
                    //Show company details           
                show($('#company')); 
                }

                if (user_type_value  == 'individual' || user_type_value  == 'mechanic' || user_type_value  == 'buyer' ) {
                    //hide company details    
                    hide($('#company'));
                }
            });

            $("#user_type_edit").change(function(even) {
        
                var user_type_value = $("#user_type_edit").val()
            
                if (user_type_value == 'new_car_dealer' || user_type_value == 'used_car_dealer' || user_type_value == 'rental') {
                    //Show company details           
                show($('#company_edit')); 
                }

                if (user_type_value  == 'individual' || user_type_value  == 'mechanic' || user_type_value  == 'buyer' ) {
                    //hide company details    
                    hide($('#company_edit'));
                }
            });

            $("#user_create_form").submit(function(event) {

                event.preventDefault();

                // Hide all error messages
                // $('#name_error').text('')
                $('#phone_error').text('')
                $('#email_error').text('')
                // $('#status_error').text('')
                // $('#user_type_error').text('')
                // $('#company_error').text('')

                $('#user_create_form').preloader();
                $("#sendbtn").prop("disabled", true);
                var formData = $('#user_create_form').serialize();
                console.log(formData);

                //send ajax request to server
                axios.post($('#user_create_form').attr('action'), formData)
                    .then(function(response) {
                         swal(
                                "Success!",
                                "" + response.data.message + "",
                                "success"
                            );
                        $('#table').DataTable().ajax.reload();

                        // setTimeout(function() {
                        //     $("#user_create_modal").modal('hide');
                        //     swal(
                        //         "Success!",
                        //         "" + response.data.message + "",
                        //         "success"
                        //     );
                        // }, 3000);

                        //remove preloader and enable submit button
                        $('#user_create_form').preloader('remove');
                        $("#sendbtn").prop("disabled", false);
                        // window.location.href = '/dashboard';
                    })
                    .catch(function(error) {
                        console.log(error.response);

                        //Display form validation Error Messages from server
                        if (error.response.data.errors.phone) {
                            $('#phone_error').text(error.response.data.errors.phone[0]);
                        } else if (error.response.data.errors.email) {
                            $('#email_error').text(error.response.data.errors.email[0]);
                        }                        
                        else {

                            $("#user_create_modal").modal('hide');

                            swal(
                                "Error!",
                                "" + error.message + "",
                                "error"
                            );

                        }
                        $('#user_create_form').preloader('remove');
                        $("#sendbtn").prop("disabled", false);
                    });

            });

             $("#user_update_form").submit(function(event) {

                event.preventDefault();

                // Hide all error messages
                // $('#name_error').text('')
                $('#phone_error_edit').text('')
                $('#email_error_edit').text('')
                // $('#status_error').text('')
                // $('#user_type_error').text('')
                // $('#company_error').text('')

                $('#user_update_form').preloader();
                $("#updatebtn").prop("disabled", true);
                var formData = $('#user_update_form').serialize();
                console.log(formData);

                //send ajax request to server
                axios.post($('#user_update_form').attr('action'), formData)
                    .then(function(response) {
                        swal(
                                "Success!",
                                "" + response.data.message + "",
                                "success"
                            );
                        $('#table').DataTable().ajax.reload();
                        

                        // setTimeout(function() {
                        //     $("#user_create_modal").modal('hide');
                        //     swal(
                        //         "Success!",
                        //         "" + response.data.message + "",
                        //         "success"
                        //     );
                        // }, 3000);

                        //remove preloader and enable submit button
                        $('#user_update_form').preloader('remove');
                        $("#updatebtn").prop("disabled", false);
                        // window.location.href = '/dashboard';
                    })
                    .catch(function(error) {
                        console.log(error.response);

                        //Display form validation Error Messages from server
                        if (error.response.data.errors.phone) {
                            $('#phone_error_edit').text(error.response.data.errors.phone[0]);
                        } else if (error.response.data.errors.email) {
                            $('#email_error_edit').text(error.response.data.errors.email[0]);
                        }                        
                        else {

                            $("#user_update_form").modal('hide');

                            swal(
                                "Error!",
                                "" + error.message + "",
                                "error"
                            );

                        }
                        $('#user_update_form').preloader('remove');
                        $("#updatebtn").prop("disabled", false);
                    });

            });
            
            $(document).on('click','#user_update', function() {
            //  alert("hi")
            var data = JSON.parse($(this).attr('data-data'));
            // console.log(data);

                $('#name_edit').val(data.name);
                $('#email_edit').val(data.email);
                $('#phone_edit').val(data.phone);
                $('#status_edit').val(data.status);
                $('#user_type_edit').val(data.user_type_id);
                $('#company_id_edit').val(data.company_id);
                $('#slug').val(data.slug);

            });

            $(document).on("click","#deactivate_user", function () {
                // alert($(this).attr('data-slug'));
                // alert($('#deactivate_user').attr('data-route'));
                var slug = $(this).attr('data-slug');
                // alert(slug)

                swal({
                    title             : "Are you sure?",
                    text              : "User will not have access!",
                    type              : "warning",
                    showCancelButton  : true,
                    confirmButtonClass: "btn btn-info btn-fill",
                    confirmButtonText : "Yes, Deactivate!",
                    cancelButtonClass : "btn btn-danger btn-fill",
                    closeOnConfirm    : false,
                }, function () {
                    //send ajax request to server
                axios.get('/admin/users/deactivate/'+slug)
                    .then(function(response) {
                        swal(
                                "Success!",
                                "" + response.data.message + "",
                                "success"
                            );
                        $('#table').DataTable().ajax.reload();

                        // setTimeout(function() {
                        //     swal(
                        //         "Success!",
                        //         "" + response.data.message + "",
                        //         "success"
                        //     );
                        // }, 3000);
                    })
                    .catch(function(error) {
                        console.log(error.response);
                         swal(
                                "Error!",
                                "" + error.message + "",
                                "error"
                            );                       
                    });
                });
            });

            $(document).on("click","#activate_user", function () {
                var slug = $(this).attr('data-slug');
                swal({
                    title             : "Are you sure?",
                    text              : "User will have access!",
                    type              : "warning",
                    showCancelButton  : true,
                    confirmButtonClass: "btn btn-info btn-fill",
                    confirmButtonText : "Yes, Activate!",
                    cancelButtonClass : "btn btn-danger btn-fill",
                    closeOnConfirm    : false,
                }, function () {
                    //send ajax request to server
                axios.get('/admin/users/activate/'+slug)
                    .then(function(response) {
                        swal(
                                "Success!",
                                "" + response.data.message + "",
                                "success"
                            );
                        $('#table').DataTable().ajax.reload();
                        
                        // setTimeout(function() {
                        //     swal(
                        //         "Success!",
                        //         "" + response.data.message + "",
                        //         "success"
                        //     );
                        // }, 3000);
                    })
                    .catch(function(error) {
                        console.log(error.response);
                         swal(
                                "Error!",
                                "" + error.message + "",
                                "error"
                            );                       
                    });
                });
            });
          
        });

function show(div) {
    div.find(':input').attr('required', true);
    div.show();
}

function hide(div) {
    div.find(':input').attr('required', false);
    div.hide();
}