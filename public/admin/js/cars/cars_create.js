"use strict";

$(function () {
    // hide($("#image_upload"));
    // Hide all error messages

    // $('.dropify').dropify();

    /*const settings_make = {
        "async": true,
        "crossDomain": true,
        "url": "https://car-data.p.rapidapi.com/cars/makes",
        "method": "GET",
        "headers": {
            "x-rapidapi-host": "car-data.p.rapidapi.com",
            "x-rapidapi-key": "4443aafa51msh3ca89b50ee7021cp1010b9jsn8301e518a965"
        },*/
    /*data: function (params) {
            var query = {
                model: params.term
            };
            return query;
        },*/
    /*processResults: function (data) {
            return {
                results: $.map(data, function (item) {
                    return {
                            text: item,
                            slug: item,
                            id: item
                    }
                })
            };
        },
    };*/

    /*    
        const settings_model = {
        "async": true,
        "crossDomain": true,
        "url": "https://car-data.p.rapidapi.com/cars",
        "method": "GET",
        "headers": {
            "x-rapidapi-host": "car-data.p.rapidapi.com",
            "x-rapidapi-key": "4443aafa51msh3ca89b50ee7021cp1010b9jsn8301e518a965"
        },
        data: function (params) {
            var query = {
                model: params.term
            };
            return query;
        },
        processResults: function (data) {
            return {
                results: $.map(data, function (item) {
                    return {
                            text: item,
                            slug: item,
                            id: item
                        }
                })
            };
        },
    };*/

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

    /*$(document).on("change", ".car_make_select", function(even) {
        let car_make_select = $(".car_make_select").val();*/
    /*alert(car_make_select);*/

    /*let result_model=[];
        $.ajax({
            "async": true,
            "crossDomain": true,
            "url": "https://car-data.p.rapidapi.com/cars?make",
            "method": "GET",
            "data":{"make":car_make_select},
            "headers": {
                "x-rapidapi-host": "car-data.p.rapidapi.com",
                "x-rapidapi-key": "4443aafa51msh3ca89b50ee7021cp1010b9jsn8301e518a965"
            },
        }).done(function(data){
            result_model = $.map(data, function (x) {
                return {
                    id: x.year+'='+x.model,
                    text: x.year+' '+x.model
                };
            });
            console.log(result_model);
            $(".car_model_select").select2({});

            $(".car_model_select").select2("destroy");

            $(".car_model_select").select2({
                placeholder: "Select here",
                data: result_model,
            });*/

    /*$('.car_model_select').val(null).trigger('change');*/

    /*});

    });*/

    $(document).on("change", "#car_type", function (even) {
        var car_type_value = $("#car_type").val();

        if (car_type_value == "new" || car_type_value == "foreign_used") {
            hide($("#registered_date"));
        }

        if (car_type_value == "registered_used") {
            show($("#registered_date"));
        }
    });

    $(".summernote").summernote({
        placeholder:
            "Hi, this is summernote. Please, write text here! Super simple WYSIWYG editor on Bootstrap",
        height: 250,
    });

    $("#wizard").submit(function (event) {
        event.preventDefault();
        $("#detailed_description_error").text("");

        $("#wizard").preloader();
        $("#carsSendBtn").prop("disabled", true);

        var form = $("#wizard");

        const formData = new FormData(form[0]);

        console.log(formData);

        // send ajax request to server
        axios
            .post($("#wizard").attr("action"), formData)
            .then(function (response) {
                swal("Success!", "" + response.data.message + "", "success");

                //remove preloader and enable submit button
                $("#wizard").preloader("remove");
                // $("#carsSendBtn").prop("disabled", false);

                //assign slug from response request to slug in image upload form
                $("#car_slug").val(response.data.slug);
                $("#carsSendBtn").prop("disabled", false);
                window.location.href = "/admin/cars";
            })
            .catch(function (error) {
                //console.log(error.response);
                //Display form validation Error Messages from server
                if (error.response.data.errors.detailed_description) {
                    $("#detailed_description_error").text(
                        error.response.data.errors.detailed_description[0]
                    );
                }

                swal("Error!", "" + error.message + "", "error");
                $("#wizard").preloader("remove");
                $("#carsSendBtn").prop("disabled", false);
            });
    });

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
    //         console.log($('#descript').html());

    //         //hide all server side validation messages
    //         $("#detailed_description_error").text("");

    //         axios
    //             .post($("#wizard").attr("action"), formData)
    //             .then(function(response) {
    //                 swal("Success!", "" + response.data.message + "", "success");

    //                 //remove preloader and enable submit button
    //                 $("#wizard").preloader("remove");
    //                 // $("#carsSendBtn").prop("disabled", false);

    //                 //assign slug from response request to slug in image upload form
    //                 $("#car_slug").val(response.data.slug);
    //                 show($("#image_upload"));
    //             })
    //             .catch(function(error) {
    //                 console.log(error.response);

    //                 //Display form validation Error Messages from server
    //                 if (error.response.data.errors.detailed_description) {
    //                     $("#detailed_description_error").text(
    //                         error.response.data.errors.detailed_description[0]
    //                     );
    //                 }

    //                 swal("Error!", "" + error.message + "", "error");
    //                 $("#wizard").preloader("remove");
    //                 $("#carsSendBtn").prop("disabled", false);
    //             });
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
