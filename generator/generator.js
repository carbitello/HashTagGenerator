document.getElementById("db_categories").onchange = function () {
    pasteCategory();
}
document.getElementById("categories_span").onclick = function () {
    pasteCategory();
}
document.getElementById("copytobuf").onclick = function () {
    var element = document.getElementById("outputtext");
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
function pasteCategory() {
    var select = document.getElementById("db_categories");

    if (select.selectedIndex === 0)
        return;

    var text = select.options[select.selectedIndex].text;

    document.getElementById("categories").append(text + String.fromCharCode(13, 10).toString());

    select.removeChild(select[select.selectedIndex]);
    select.selectedIndex = 0;
}