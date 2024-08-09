<?php
if (empty($_POST['name']) || empty($_POST['email'])) {
    header('Location: register.php');
    exit();
}

$name = $_POST['name'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$address = $_POST['address'];
$department = $_POST['department'];
$program = $_POST['program'];
$mobile = $_POST['mobile'];

$nameStyle = "";
if ($sex == "Male") {
    $nameStyle = "style='background-color: blue; color: white;'";
} elseif ($sex == "Female") {
    $nameStyle = "style='background-color: red; color: white;'";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Summary of Registration</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Summary of Registration</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Sex</th>
                <th>Email</th>
                <th>Address</th>
                <th>College Department</th>
                <th>Program</th>
                <th>Mobile Number</th>
            </tr>
            <tr>
                <td <?php echo $nameStyle; ?>><?php echo htmlspecialchars($name); ?></td>
                <td><?php echo htmlspecialchars($dob); ?></td>
                <td><?php echo htmlspecialchars($sex); ?></td>
                <td><?php echo htmlspecialchars($email); ?></td>
                <td><?php echo htmlspecialchars($address); ?></td>
                <td><?php echo htmlspecialchars($department); ?></td>
                <td><?php echo htmlspecialchars($program); ?></td>
                <td><?php echo htmlspecialchars($mobile); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
