$(function() {
    $(document).on('click', '#company_update', function() {
        //  alert("hi")
        var data = JSON.parse($(this).attr('data-data'));
        console.log(data);
        $("#company_logo").attr("src", '/'+data.logo);
        $("#company_header").attr("src", '/'+data.header_image);
        $('#slug').val(data.slug);
        $('#company_name_edit').val(data.name);
        $('#company_phone_edit').val(data.phone);
        $('#company_description_edit').val(data.description);
        $('#company_location_edit').val(data.location.id);
        /*$('#company_car_dealer_type_edit').val(data.car_dealer_type);*/
        $('#company_vip_status_edit').val(data.vip_status);
        $('#company_type_edit').val(data.company_type_id);
        $('#company_longitude_edit').val(data.longitude);
        $('#company_latitude_edit').val(data.latitude);
    });

    $("#company_create_form").submit(function(event) {
        event.preventDefault();
        // Hide all error messages
        $('#company_name_error').text('')

        $('#company_create_form').preloader();
        $("#sendbtn").prop("disabled", true);
        // var formData = $('#company_create_form').serialize();
        // console.log(formData);

        var form = $("#company_create_form");

        const formData = new FormData(form[0]);

        //send ajax request to server
        axios.post($('#company_create_form').attr('action'), formData)
            .then(function(response) {
                swal(
                    "Success!",
                    "" + response.data.message + "",
                    "success"
                );
                $('#table').DataTable().ajax.reload();
                //remove preloader and enable submit button
                $('#company_create_form').preloader('remove');
                $("#sendbtn").prop("disabled", false);
                // window.location.href = '/dashboard';
            })
            .catch(function(error) {
                console.log(error.response.data.errors);
                //Display form validation Error Messages from server
                if (error.response.data.errors) {

                    if (error.response.data.errors.company_name) {
                        console.log(error.response.data.errors.company_name);
                        $('#company_name_error').text(error.response.data.errors.company_name[0]);
                    }

                    if (error.response.data.errors.company_phone) {
                        $('#company_phone_error').text(error.response.data.errors.company_phone[0]);
                    }
                } else {

                    $("#company_create_form").modal('hide');

                    swal(
                        "Error!",
                        "" + error.message + "",
                        "error"
                    );
                }
                $('#company_create_form').preloader('remove');
                $("#sendbtn").prop("disabled", false);
            });

    });

    $("#company_update_form").submit(function(event) {

        event.preventDefault();

        // Hide all error messages
        $('#company_name_error_edit').text('')
        $('#company_logo_error_edit').text('')
        $('#company_phone_error_edit').text('')
        $('#description_error_edit').text('')


        $('#company_update_form').preloader();
        $("#updatebtn").prop("disabled", true);

        var form = $("#company_update_form");

        const formData = new FormData(form[0]);

        axios.post($('#company_update_form').attr('action'), formData)
            .then(function(response) {
                swal(
                    "Success!",
                    "" + response.data.message + "",
                    "success"
                );
                $('#table').DataTable().ajax.reload();

                //remove preloader and enable submit button
                $('#company_update_form').preloader('remove');
                $("#updatebtn").prop("disabled", false);
                window.location.href = '/admin/dashboard';
            })
            .catch(function(error) {
                console.log(error.response.data.errors);

                //Display form validation Error Messages from server
                if (error.response.data.errors) {

                    if (error.response.data.errors.company_name) {
                        console.log(error.response.data.errors.company_name);
                        $('#company_name_error_edit').text(error.response.data.errors.company_name[0]);
                    }

                    if (error.response.data.errors.company_phone) {
                        $('#company_phone_error_edit').text(error.response.data.errors.company_phone[0]);
                    }
                    if (error.response.data.errors.company_logo) {
                        $('#company_logo_error_edit').text(error.response.data.errors.company_logo[0]);
                    }
                    if (error.response.data.errors.description) {
                        $('#description_error_edit').text(error.response.data.errors.description[0]);
                    }
                } else {

                    console.log(error.response.data.errors.company_name);
                    $("#company_update_form").modal('hide');

                    swal(
                        "Error!",
                        "" + error.message + "",
                        "error"
                    );

                }
                $('#company_update_form').preloader('remove');
                $("#updatebtn").prop("disabled", false);
            });

    });

    //Custom data
    // data.append('key', 'value');

    //send ajax request to server
    /*var formData = new FormData($('form')[1]);
    console.log(formData);
    alert(formData);*/

    // axios.post($('#company_update_form').attr('action'), data)
    //     .then(function(response) {

    //         swal(
    //             "Success!",
    //             "" + response.data.message + "",
    //             "success"
    //         );
    //         $('#table').DataTable().ajax.reload();

    //         //remove preloader and enable submit button
    //         $('#company_update_form').preloader('remove');
    //         $("#updatebtn").prop("disabled", false);
    //         window.location.href = '/admin/dashboard/dealer';
    //     })
    //     .catch(function(error) {
    //         console.log(error.response.data.errors);

    //         //Display form validation Error Messages from server
    //         if (error.response.data.errors) {

    //             if (error.response.data.errors.company_name) {
    //                 console.log(error.response.data.errors.company_name);
    //                 $('#company_name_error_edit').text(error.response.data.errors.company_name[0]);
    //             }

    //             if (error.response.data.errors.company_phone) {
    //                 $('#company_phone_error_edit').text(error.response.data.errors.company_phone[0]);
    //             }
    //         } else {

    //             console.log(error.response.data.errors.company_name);
    //             $("#company_update_form").modal('hide');

    //             swal(
    //                 "Error!",
    //                 "" + error.message + "",
    //                 "error"
    //             );

    //         }
    //         $('#company_update_form').preloader('remove');
    //         $("#updatebtn").prop("disabled", false);
    //     });

});
