<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post" enctype="multipart/form-data">
        <input type="file" name="image[]" multiple>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";
$connection = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['submit'])) {
    $img = $_FILES['image'];
    $count_img = count($img['name']);

    for ($i = 0; $i < $count_img; $i++) {
        $img_name = $img['name'][$i];
        $tmp_name = $img['tmp_name'][$i];
        $error = $img['error'][$i];

        if ($error == 0) {
            $image_extension = pathinfo($img_name, PATHINFO_EXTENSION);
            $image_extension_lower_case = strtolower($image_extension);
            $allowed_extensions = array("png", "jpg", "jpeg");

            if (in_array($image_extension_lower_case, $allowed_extensions)) {
                $name = strtolower($_SESSION['name']);
                $val_name = str_replace(" ", "_", $name);
                $image_val_name = uniqid($val_name, true) . '.' . $image_extension_lower_case;
                $img_upload = "uploads/" . $image_val_name;
                if (move_uploaded_file($tmp_name, $img_upload)) {
                    $id=1;
                    $query = "INSERT INTO testing (images,id) VALUES ('$img_upload','$id')";
                    $result = $connection->query($query);

                    if ($result) {
                        echo "Image uploaded successfully!";
                    } else {
                        echo "Error inserting into the database: " . $connection->error;
                    }
                } else {
                    echo "Error moving file to destination directory.";
                }
            } else {
                echo "Invalid file extension. Allowed extensions are: " . implode(", ", $allowed_extensions);
            }
        } else {
            echo "Error uploading file. Error code: " . $error;
        }
    }
}

$connection->close();
?>

</body>
</html>