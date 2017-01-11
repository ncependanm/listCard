$('input[name=decNum]').bind('keyup blur', function () {
    var myValue = $(this).val();
    $(this).val(toRp(myValue.replace(/[^0-9]/g, '')));
});

function toRp(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
}