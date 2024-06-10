<?php
include('db.php');
$selected_country = $_POST['country'];
$query = "SELECT * FROM country WHERE country = '$selected_country'";
$result = $con->query($query);
if ($result == true) {
    echo "
        <select name='' id=''>
      
        
           ";
    while ($row = $result->fetch_assoc()) {
        $country = $row['country'];
        $city = $row['city'];
        $language = $row['language'];
        echo "<option value=" . $city . ">";
        echo $city;
        echo "</option>";
    }
    echo "</select>";
}
$conn->close();
