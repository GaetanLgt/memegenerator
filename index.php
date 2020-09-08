<?php
require './assets/partials/header.php';
require './model.php';

// Check if image file is a actual image or fake image
if (isset($_POST['submit'])) {
    $target_dir = 'uploads/';
    $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if (false !== $check) {
        echo 'File is an image - '.$check['mime'].'.';
        $uploadOk = 1;
    } else {
        echo 'File is not an image.';
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo 'Sorry, file already exists.';
    $uploadOk = 0;
}

// Check file size
if ($_FILES['fileToUpload']['size'] > 500000) {
    echo 'Sorry, your file is too large.';
    $uploadOk = 0;
}

// Allow certain file formats
if ('jpg' != $imageFileType && 'png' != $imageFileType && 'jpeg' != $imageFileType
&& 'gif' != $imageFileType) {
    echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if (0 == $uploadOk) {
    echo 'Sorry, your file was not uploaded.';
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        echo 'The file '.basename($_FILES['fileToUpload']['name']).' has been uploaded.';
    } else {
        var_dump($target_file);
        echo 'Sorry, there was an error uploading your file.';
    }
}

?>


<main>
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img class="img-responsive" src="" alt="" rel="">
                </div>
                <div class="col-md-4">
                    <form>
                        <div class="form-group">
                            <label for="toptext">Top Text</label>
                            <input type="text" name="toptext" id="toptext" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="bottomtext">Bottom Text</label>
                            <input type="text" name="bottomtext" id="bottomtext" class="form-control">
                        </div>


                        <div class="form-group">
                            <input type="submit" value="Meme It!" class="btn btn-success form-control meme">
                        </div>
                        <input type="hidden" name="" value="">
                    </form>
                    <form method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="button" value="Upload Your Image" class="btn btn-primary form-control">
                        <br><br>
                        <img class="upload-button" id="featured-img" src="">


                </div>
</main>

<?php
require './assets/partials/footer.php';