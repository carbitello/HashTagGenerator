<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width" />        
    </head>
    <body>
        <form id="options-manager" enctype="multipart/form-data" action="" method="POST">
            <input type="button"  class="settings-button" id="camera-settings" name="camera-settings" value="Camera" /> 
            <input type="button"  class="settings-button" id="lens-settings" name="lens-settings" value="Lens" />
            <input type="button"  class="settings-button" id="tags-settings" name="tags-settings" value="Tags" />
            <input type="hidden" name="model" value="<?= $_POST['model']; ?>" />
            <input type="hidden" name="lens" value="<?= $_POST['lens']; ?>" />
        </form>
        <script type="text/javascript" src="settings.js"></script>
    </body>
</html>