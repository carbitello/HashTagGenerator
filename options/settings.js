    document.getElementById("camera-settings").onclick = function () { submitAction("camerasettings.php"); }
    document.getElementById("lens-settings").onclick = function () { submitAction("lenssettings.php"); }
    document.getElementById("tags-settings").onclick = function () { submitAction("tagssettings.php"); }

    function submitAction(actionfile) {
        document.forms[0].action = actionfile;
        document.forms[0].submit();
    }