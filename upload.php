<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Image</title>
</head>
<body>
    <?php
        $image = __DIR__. '/'. md5(date('Y-m-d H:i:s')) . '.jpg';

        class Upload
        {
            public function uploadImg($image)
            {
                move_uploaded_file($_FILES['avatar']['tmp_name'], $image);
            }
        }
        $img = new Upload($image);
        $img->uploadImg($image);
    ?>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="avatar">
        <button type="submit">Upload</button>
    </form>
</body>
</html>