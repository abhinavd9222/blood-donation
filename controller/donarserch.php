<?php
include '../model/db.php';

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
    header('Content-Type: application/json');
         echo json_encode($data);

    // Return JSON response
   
}
?>