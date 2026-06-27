$(document).ready(function () {
    $("form").submit(function (event) {
        event.preventDefault();
        
        if ($("input[name='formSubscribeEmail']").length > 0 && $("input[name='formSubscribeEmail']").val() != "") {
            return false;
        }

        var $form = $(this);
        var formData = $form.serialize();
        var $postmsg;

        if ($("#formDestination").length > 0) {
            var selectedText = $("#formDestination option:selected").text();
            formData += "&formDestinationText=" + encodeURIComponent(selectedText);
        }

        if ($("input:text[name='summaryLevel']").length > 0 && $("input:text[name='summaryLevel']").val() != "") {
            $postmsg = $(".poppostmsg");
            $('#summaryBranch').prop("disabled", true);
            console.log('popup');
        }
        else {
            $postmsg = $(".postmsg");
            console.log('page');
        }

        $.ajax({
            url: '/process/ProcessForm.aspx',
            type: 'POST',
            data: formData,
            success: function (response) {
                if (response.success) {
                    $("form")[0].reset();
                    $postmsg.text("Form submitted successfully!");

                    if ($("input:text[name='summaryLevel']").length > 0) {
                        $("input:text[name='summaryLevel']").val("");
                    }

                } else {
                    $postmsg.text("Form submission failed. Please try again.");
                }
            },
            error: function () {
                $postmsg.text("An error occurred. Please try again.");
            }
        });
    });
});
