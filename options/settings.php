<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width" />        
    </head>
    <body>
        <form id="options-manager" enctype="multipart/form-data" action="" method="POST">
            <button class="settings-button" id="camera-settings"><img src="../images/camera.png" alt="" style="vertical-align:middle"></button>
            <button class="settings-button" id="lens-settings"><img src="../images/lens.png" alt="" style="vertical-align:middle"></button>
            <button class="settings-button" id="tags-settings"><img src="../images/htag.png" alt="" style="vertical-align:middle"></button>
            <input type="hidden" name="model" value="<?= $_POST['model']; ?>" />
            <input type="hidden" name="lens" value="<?= $_POST['lens']; ?>" />
        </form>
        <script type="text/javascript" src="settings.js"></script>
    </body>
</html>