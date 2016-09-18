<?php

// RETRIEVE FORM DATA (consider using $POST array to avoid url show and character limit)
$city = $_GET["City"];
$state = $_GET["State"];
$part = $_GET["Part"];
$new_used = $_GET["New_Used"];
$year = $_GET["Year"];
$make_model = $_GET["Make_Model"];

// DATABASE CONNECTION 
// (consider saving credentials below in external .php file and required in this script)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autoparts_bank";

$conn = new mysqli($servername, $username, $password, $dbname);

// QUERY PREPARATION AND EXECUTION
$query = "SELECT * FROM auto_parts 
          WHERE City = ? AND Part = ? AND Year = ? AND Make_Model = ?";
$stmt = $conn->prepare($query);

if ($stmt) { 

    $stmt->bind_param("ssss", $city, $part, $year, $make_model);
    $stmt->execute();
    $stmt->store_result();
    $result = $stmt->get_result();

    echo "<table>";

    // LOOP THROUGH RESULTS
    while ($row = mysqli_fetch_assoc($result)) {  
        echo "<tr>
               <td>" . $row['Distributor'] . "</td>
               <td>" . $row['Address'] . "</td>
               <td>" . $row['City'] . "</td>
               <td>" . $row['State'] . "</td>
               <td>" . $row['Zip'] . "</td>
               <td>" . $row['Phone'] . "</td>
               <td>" . $row['Part'] . "</td>
               <td>" . $row['New_Used'] . "</td>
               <td>" . $row['Price'] . "</td>
             </tr>";  
    }

    echo "</table>"; 

    $stmt->free_result();
    $stmt->close();

} else {
    echo "query failed: ".$conn->error; 
}

// CLOSE CONNECTION
$conn->close();

?>