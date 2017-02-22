document.getElementById("copytobuf").onclick = function () {
    element = document.getElementById("outputtext");
    try {
        element.select();

        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        if (msg === 'successful') {
            document.getSelection().removeAllRanges();
            window.getSelection().removeAllRanges();
        }
    } catch (err) {
        alert(err);
    }
    var count = (element.value.split('#').length - 1);
    if (count > 30)
        alert('You have ' + count + '#');
}