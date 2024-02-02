(function ($) {
    "use strict";
    //Ajax Modal Submit
    $(document).ready(function () {
        // Form binding

        $("form.ajax-submit").bind("submit", function (e) {
            if ($(this).attr('check_validate') === 'false') {
                return false;
            }
            e.preventDefault();
            console.log("submitting");
            //******Form Action URL*******
            var link = $(this).attr("action");
            //****** Getting Form ID *******
            var id = $(this).attr("id");
            //****** If Form Has No ID *******
            if (!id) {
                console.log("Form Id is required");
                return false;
            }
            var checkIds = document.querySelectorAll("#" + id);
            //****** If Form Has Duplicate IDS *******
            if (checkIds.length > 1) {
                console.log("Duplicate Ids not allowed");
                return false;
            }
            var reset = $(this).attr('form-reset');
            var elem = $(this);
            //****** Disabling form submitt button *******
            $(elem).find("button[type=submit]").prop("disabled", true);
            $(elem).find("input[type=submit]").prop("disabled", true);
            $(elem).find("button[type=submit]").addClass('loading disabled');
            $(elem).find("input[type=submit]").addClass('loading');

            //****** Ajax call to controller function *******
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                method: "POST",
                url: link,
                data: new FormData(this),
                mimeType: "multipart/form-data",
                contentType: false,
                cache: false,
                processData: false,
                //****** Ajax call beforeSend function *******
                beforeSend: function () {

                },
                //****** Ajax call success function *******
                success: function (data) {
                    data = JSON.parse(data);
                    elem.removeClass('loading disabled');
                    console.log("success");
                    $('.alert-danger').remove();
                    $(".error-text").remove();
                    $(elem).find("input,textarea,select").removeClass("valid error");
                    $(elem).find("button[type=submit]").attr("disabled", false);
                    $(elem).find("input[type=submit]").attr("disabled", false);
                    $(elem).find("button[type=submit]").removeClass('loading disabled');
                    $(elem).find("input[type=submit]").removeClass('loading disabled');
                    if (reset === 'true') {
                        $(elem)[0].reset();
                    }

                    //Yields extra functionalities of success function
                    var successFnc121 = elem.data("success-fn");
                    // console.log('successFnc121',successFnc121);
                    if (successFnc121 != undefined && window[successFnc121]) {
                        new Function(
                            successFnc121 + "(" + JSON.stringify(data) + ")"
                        )();
                    }
                },
                //****** Ajax call error function *******
                error: function (request, status, error) {
                    console.log('status-status', request.status);
                    if (request.status == 302) {
                        window.location.reload();
                    };

                    $(".error-text").remove();
                    $(".alert-danger").remove();
                    $(elem).find("button[type=submit]").attr("disabled", false);
                    $(elem).find("input[type=submit]").attr("disabled", false);
                    $(elem).find("button[type=submit]").removeClass('loading disabled');
                    $(elem).find("input[type=submit]").removeClass('loading disabled');
                    if (request.status == 419) {
                        toastr.error("Session has been expired you will redirect to home page shortly");
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    };


                    console.log("error");
                    let errorResponse = JSON.parse(request.responseText);
                    console.log('errorResponse', errorResponse.errors);

                    //Yields extra functionalities of error function
                    var errorFnc = elem.data("error-fn");
                    if (errorFnc != undefined && window[errorFnc]) {
                        new Function(
                            errorFnc + "(" + JSON.stringify(errorResponse) + ")"
                        )();
                    }

                    //****** Showing General error *******
                    if (JSON.parse(request.responseText).status == false) {
                        console.log(JSON.parse(request.responseText).message);
                        $(elem).prepend(
                            '<div class="alert alert-danger custom_validate_error alert-dismissible fade show" role="alert" style="font-size:10px">' +
                            "<strong>Error! </strong>" +
                            JSON.parse(request.responseText).message +
                            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                            "</div>"
                        );
                        return false;
                    }

                    //******Showing dynamic errors at the bottom of the requested input field *******
                    $.each(errorResponse.errors, function (field_name, error) {
                        $(document)
                            .find("#" + id + " [name=" + field_name + "]")
                            .after(
                                '<span class="text-strong text-danger error-text span2-3">' +
                                error +
                                "</span>"
                            );
                    });
                },
            });
            return false;
        });
    });
})(jQuery);
