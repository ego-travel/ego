$(document).ready(function() {
    setInterval(function() {
        var counter = Math.floor($('#count_down').html());

        if (counter > 0) {
            $('#count_down').html(counter - 1);
        }

        if (counter == 0) {
            window.location.href = url.language;
        }
    }, 1000);
});