$(document).ready(function() {
    "use strict";
    playVideo();
    $(this).find('.modal-body').css({
        width: 'auto',
        height: 'auto',
        'max-height': '100%'
    });

    $('#showVideo button').click(function() {
        $('#showVideo iframe').removeAttr('src')
    });

    $("#showVideo").on('hidden.bs.modal', function(e) {
        $('#showVideo iframe').removeAttr('src')
    });

});

function playVideo() {
    var trigger = $("body").find('[data-toggle="modal"]');
    trigger.click(function() {
        var theModal = $(this).data("target"),
            videoSRC = $(this).attr("data-video"),
            videoSRC = videoSRC.replace("watch?v=", "v/");
        videoSRCauto = videoSRC + "?autoplay=1";
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $("#title").html($(this).attr("data-title"));
    });
}