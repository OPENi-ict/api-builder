/**
 * Created by Romanos-Dimokritos on 18/5/2015.
 */

jQuery.fn.toggleText = function (value1, value2) {
    return this.each(function () {
        var $this = $(this),
            text = $this.text();

        if (text.indexOf(value1) > -1)
            $this.text(text.replace(value1, value2));
        else
            $this.text(text.replace(value2, value1));
    });
};

$('#trig').on('click', function () {
    if ($(".col-md-2.object-column").length) {
        $('#objects').toggleClass('col-md-12 col-md-7');
        $('.col-md-2.object-column').toggleClass('col-md-0 col-md-2');
        $(".glyphicon-chevron-left").toggleClass("glyphicon-chevron-right glyphicon-chevron-left");
    }
    else {
        $('#objects').toggleClass('col-md-12 col-md-9');
    }
    $('#recommendation-api-block').toggleClass('col-md-0 col-md-3');
    $('#recommendation-api-block').toggleClass('fade');
    $('#trig>span').toggleClass('glyphicon-option-vertical glyphicon-option-horizontal');
});