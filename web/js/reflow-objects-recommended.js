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
    $('#objects').toggleClass('col-md-12 col-md-10');
    $('#recommendation-block').toggleClass('col-md-0 col-md-2');
    //$('#recommendation-block').toggleClass('hidden');
    $('#recommendation-block').toggleClass('fade');
    $('#trig').toggleText('Show me less', 'Show me more');
});