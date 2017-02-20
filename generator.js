    document.getElementById("input-file").onchange = function (e) {
        EXIF.getData(e.target.files[0], function () {

            if (!this.type.match('image.*')) {
                alert("Image only please....");
            }

            document.getElementById("model").value = EXIF.getTag(this, "Model");
            document.getElementById("lens").value = EXIF.getTag(this, "undefined").toString();
            document.getElementById("exposure").value = EXIF.getTag(this, "ExposureTime");
            document.getElementById("exposure-mode").value = EXIF.getTag(this, "ExposureProgram");
            document.getElementById("focalLength").value = EXIF.getTag(this, "FocalLengthIn35mmFilm");
            document.getElementById("aperture").value = EXIF.getTag(this, "FNumber");
            document.getElementById("iso").value = EXIF.getTag(this, "ISOSpeedRatings");
            //           
            //var allMetaData = EXIF.getAllTags(this);
            //document.getElementById("iso").innerHTML = JSON.stringify(allMetaData, null, "\t");
            //
            var reader = new FileReader();
            reader.onload = (function (theFile) {
                return function (e) {
                    var span = document.getElementById('output');
                    span.innerHTML = ['<img class="thumb" id="thumb" title="', escape(theFile.name), '" src="', e.target.result, '" />'].join('');
                };
            })(this);
            reader.readAsDataURL(this);
        });
        document.getElementById("file-manager").removeChild(document.getElementById("input-file"));
    }
    document.getElementById("output").onclick = function () {
        if (document.getElementById("thumb").getAttribute("src") === "loadimg.jpg") {
            document.getElementById("input-file").click();
        } else {
            document.getElementById("file-manager").removeChild(document.getElementById("output"));
            document.forms[0].submit();
        }
    }
    document.getElementById("settings").onclick = function () {
        document.forms[0].action = "settings.php";
        document.forms[0].submit();
    }

