$(function () {
    $(document).on("click", "#car_feature_update", function () {
        //  alert("hi")
        var data = JSON.parse($(this).attr("data-data"));
        // console.log(data);
        $("#car_feature_id_edit").val(data.id);
        $("#car_feature_name_edit").val(data.name);
        $("#car_feature_status_edit").val(data.status);
    });

    $("#car_feature_create_form").submit(function (event) {
        event.preventDefault();
        // Hide all error messages
        $("#car_feature_name_error").text("");

        $("#car_feature_create_form").preloader();
        $("#sendbtn").prop("disabled", true);
        var formData = $("#car_feature_create_form").serialize();
        console.log(formData);

        //send ajax request to server
        axios
            .post($("#car_feature_create_form").attr("action"), formData)
            .then(function (response) {
                swal("Success!", "" + response.data.message + "", "success");
                $("#table").DataTable().ajax.reload();
                //remove preloader and enable submit button
                $("#car_feature_create_form").preloader("remove");
                $("#sendbtn").prop("disabled", false);
                // window.location.href = '/dashboard';
            })
            .catch(function (error) {
                console.log(error.response);

                //Display form validation Error Messages from server
                if (error.response.data.errors.name) {
                    $("#car_feature_name_error").text(
                        error.response.data.errors.name[0]
                    );
                } else {
                    $("#car_feature_create_form").modal("hide");

                    swal("Error!", "" + error.message + "", "error");
                }
                $("#car_feature_create_form").preloader("remove");
                $("#sendbtn").prop("disabled", false);
            });
    });

    $("#car_feature_update_form").submit(function (event) {
        event.preventDefault();
        // Hide all error messages
        $("#car_feature_name_error_edit").text("");

        $("#car_feature_update_form").preloader();
        $("#updatebtn").prop("disabled", true);
        var formData = $("#car_feature_update_form").serialize();
        //console.log(formData);
        //alert('same');

        //send ajax request to server
        axios
            .post($("#car_feature_update_form").attr("action"), formData)
            .then(function (response) {
                swal("Success!", "" + response.data.message + "", "success");
                $("#table").DataTable().ajax.reload();

                //remove preloader and enable submit button
                $("#car_feature_update_form").preloader("remove");
                $("#updatebtn").prop("disabled", false);
                // window.location.href = '/dashboard';
            })
            .catch(function (error) {
                console.log("err", error);

                //Display form validation Error Messages from server
                if (error.response.data.errors.name) {
                    $("#car_feature_name_edit_error").text(
                        error.response.data.errors.name[0]
                    );
                } else {
                    $("#car_feature_update_form").modal("hide");

                    swal("Error!", "" + error.message + "", "error");
                }
                $("#car_feature_update_form").preloader("remove");
                $("#updatebtn").prop("disabled", false);
            });
    });
});
