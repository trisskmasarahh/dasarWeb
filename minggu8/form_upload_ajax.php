<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="upload.css">
        <title>Unggah File Dokumen</title>
    </head>
    <body>
    <div class="upload-form-container">
            <h2>Unggah FileDokumen</h2>
            <form id="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
                <div class="file-input-container">
                    <input type="file" name="file[]" id="file" class="file-input" multiple>
                    <label for="file" class="file-label">Pilih File</label>
                </div>
                
                <button type="submit" name="submmit" class="upload-button" id="upload-button" disabled>Unggah</button>
            </form>
            <div id="status" class="upload-status"></div>
        </div>
        <!-- <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <!<input type="file" name="file" id="file"> -->
            <!-- <input type="file" name="file[]" id="file" multiple>
            <input type="submit" name="submit" value="Unggah"> -->
        <!-- </form>
        <div id="status"></div> --> 
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script>
    </body>
</html>
