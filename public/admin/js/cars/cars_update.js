"use strict";
$(function () {
    var slug = $("#car_slug");
    slug.val($("#slug").val());
    console.log($("#slug").val());

    // console.log(slug.val($("#slug").val()));

    $(".summernote").summernote({
        placeholder:
            "Hi, this is summernote. Please, write text here! Super simple WYSIWYG editor on Bootstrap",
        height: 250,
    });

    $(document).on("change", "#car_type", function (even) {
        var car_type_value = $("#car_type").val();

        if (car_type_value == "new" || car_type_value == "foreign_used") {
            hide($("#registered_date"));
        }

        if (car_type_value == "registered_used") {
            show($("#registered_date"));
        }
    });

    $("#car_form_update").submit(function (event) {
        event.preventDefault();
        $("#detailed_description_error").text("");

        $("#car_form_update").preloader();
        $("#carsSendBtn").prop("disabled", true);

        var form = $("#car_form_update");
        const formData = new FormData(form[0]);
        // var formData = $("#car_form_update").serialize();
        console.log(formData);

        //send ajax request to server
        axios
            .post($("#car_form_update").attr("action"), formData)
            .then(function (response) {
                // alert("hi");
                swal("Success!", "" + response.data.message + "", "success");
                // swal("success", "Update successful", 'success')

                //remove preloader and enable submit button
                $("#car_form_update").preloader("remove");
                $("#carsSendBtn").prop("disabled", false);
                // window.location.href = '/admin/dashboard';
                location.reload();
            })
            .catch(function (error) {
                console.log(error.response);

                //Display form validation Error Messages from server
                if (error.response.data.errors.detailed_description) {
                    $("#detailed_description_error").text(
                        error.response.data.errors.detailed_description[0]
                    );
                }

                swal("Error!", "" + error.message + "", "error");
                $("#car_form_update").preloader("remove");
                $("#carsSendBtn").prop("disabled", false);
            });
    });

    let result = [];
    $.ajax({
        async: true,
        crossDomain: true,
        url: "https://car-data.p.rapidapi.com/cars/makes",
        method: "GET",
        headers: {
            "x-rapidapi-host": "car-data.p.rapidapi.com",
            "x-rapidapi-key":
                "4443aafa51msh3ca89b50ee7021cp1010b9jsn8301e518a965",
        },
    }).done(function (data) {
        result = $.map(data, function (x) {
            return {
                id: x,
                text: x,
            };
        });
        console.log(result);
        $(".car_make_select").select2({
            placeholder: "Select here",
            data: result,
        });
    });

    $(".car_feature_select").select2();

    // form.steps({
    //     // headerTag: "h3",
    //     // bodyTag: "fieldset",
    //     transitionEffect: "slideLeft",
    //     onStepChanging: function(event, currentIndex, newIndex) {
    //         // Allways allow previous action even if the current form is not valid!
    //         if (currentIndex > newIndex) {
    //             return true;
    //         }

    //         // Needed in some cases if the user went back (clean up)
    //         if (currentIndex < newIndex) {
    //             // To remove error styles
    //             form.find(".body:eq(" + newIndex + ") label.error").remove();
    //             form.find(".body:eq(" + newIndex + ") .error").removeClass(
    //                 "error"
    //             );
    //         }
    //         // console.log(form);
    //         form.validate().settings.ignore = ":disabled,:hidden";
    //         return form.valid();
    //     },

    //     onFinishing: function(event, currentIndex) {
    //         form.validate().settings.ignore = ":disabled";
    //         return form.valid();
    //     },
    //     onFinished: function(event, currentIndex) {
    //         //ajax
    //         event.preventDefault();
    //         form.preloader();
    //         const formData = new FormData(form[0]);
    //         console.log(formData);
    //         const data = editor.getData();
    //         console.log(data);
    //         // console.log($('#summernote').html())
    //         // form.submit();
    //         // formData = formData.append('details', $('.summernote').summernote('code'))

    //         // formData = Object.assign(formData, { 'detailssss': "'" + $('.summernote').summernote('code') + "'" })

    //         //hide all server side validation messages
    //         // $("#detailed_description_error").text("");

    //         // $("#car_form_update").preloader();
    //         // $("#carsSendBtn").prop("disabled", true);
    //         // var formData = $("#car_form_update").serialize();

    //         // axios
    //         //     .post($("#car_form_update").attr("action"), formData)
    //         //     .then(function(response) {
    //         //         swal("Success!", "" + response.data.message + "", "success");

    //         //         //remove preloader and enable submit button
    //         //         $("#car_form_update").preloader("remove");
    //         //         $("#carsSendBtn").prop("disabled", false);

    //         //         //assign slug from response request to slug in image upload form
    //         //     })
    //         //     .catch(function(error) {
    //         //         console.log(error.response);

    //         //         //Display form validation Error Messages from server
    //         //         if (error.response.data.errors.detailed_description) {
    //         //             $("#detailed_description_error").text(
    //         //                 error.response.data.errors.detailed_description[0]
    //         //             );
    //         //         }

    //         //         swal("Error!", "" + error.message + "", "error");
    //         //         $("#car_form_update").preloader("remove");
    //         //         $("#carsSendBtn").prop("disabled", false);
    //         //     });
    //     },
    // });
});

function show(div) {
    div.find(":input").attr("required", true);
    div.show();
}

function hide(div) {
    div.find(":input").attr("required", false);
    div.hide();
}
