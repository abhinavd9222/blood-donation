<?php
include "../model/db.php";

if (isset($_POST["addform"])) {
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $email = mysqli_real_escape_string($con, $_POST["Email"]);
    $address = mysqli_real_escape_string($con, $_POST["Address"]);
    $mobile_number = mysqli_real_escape_string($con, $_POST["Mobile_number"]);
    $blood_grp = mysqli_real_escape_string($con, $_POST["Blood_Grp"]);

    $sql = "INSERT INTO blood (name, email, address, mobile_number, blood_grp) VALUES ('$name', '$email', '$address', '$mobile_number', '$blood_grp')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data added successfully";
        header("Location: ../register.php");
        exit(); // Ensure no further code is executed
    } else {
        echo "Data not added: " . mysqli_error($con);
    }
}

if (isset($_GET['blood_grp']) && isset($_GET['city'])) {
    $blood_grp = mysqli_real_escape_string($con, $_GET['blood_grp']);
    $city = mysqli_real_escape_string($con, $_GET['city']);

    $sql = "SELECT * FROM blood WHERE blood_grp = '$blood_grp' AND address LIKE '%$city%'";
    $result = mysqli_query($con, $sql);

    $data = [];

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        } else {
            $data['message'] = "No data found";
        }
    } else {
        $data['error'] = "Query failed: " . mysqli_error($con);
    }

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($data);
}
?>