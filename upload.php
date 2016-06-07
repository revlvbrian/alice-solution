<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Image</title>
</head>
<body>
    <?php
        $filename = __DIR__. '/'. md5(date('Y-m-d H:i:s')) . '.jpg';

        move_uploaded_file($_FILES['avatar']['tmp_name'], $filename);
    ?>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="avatar">
        <button type="submit">Upload</button>
    </form>
</body>
</html>