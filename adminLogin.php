<?php include 'header.php'; ?>

<?php
include('dbConnect.php');


//still requires role filtering
if (isset($_POST['username']) and isset($_POST['password'])) {

    $username = $_POST['username'];
    $passwordInsecure = $_POST["password"];
    $password = sha1($passwordInsecure);

    $query = "SELECT * FROM `employee` WHERE username = '$username' and password = '$password' and role = 'ADM'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['admLoggedIn'] = "admLoggedIn";
        $_SESSION['username'] = $username;
        echo "Valid Login Credentials.";
    }
} else {
    echo "Invalid Login Credentials.";
}
?>

<?php include 'footer.php'; ?>