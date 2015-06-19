$(document).ready(function() {
    "use strict";
    autoPlayYouTubeModal();
});

function autoPlayYouTubeModal() {
    var trigger = $("body").find('[data-toggle="modal"]');
    trigger.click(function() {
        var theModal = $(this).data("target"),
            videoSRC = $(this).attr("data-video"),
            videoSRC = videoSRC.replace("watch?v=", "v/");
        videoSRCauto = videoSRC + "?autoplay=1";
        $(theModal + ' iframe').attr('src', videoSRCauto);

        $("#showVideo").on('hidden.bs.modal', function(e) {
            $("#showVideo iframe").attr("src", $("#showVideo iframe").attr("src"));
        });
    });
}