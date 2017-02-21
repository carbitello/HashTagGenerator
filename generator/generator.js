function copyToBuffer(element) {
    try {
        var $temp = $('<input>');
        $('body').append($temp);
        $temp.val($(element).val()).select();

        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';

        if (msg === 'successful') {
            $('#copyButtonToolip').stop().stop().fadeTo(300, 1).fadeTo(1200, 0);
        }

        $temp.remove();
    } catch (err) { }

    window.getSelection().removeAllRanges();
}
