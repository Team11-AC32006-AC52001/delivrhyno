<?php include 'header.php'; ?>

<?php
/**
 * Creates a new branch using DBMS.
 */ 
function createBranch() {

    include 'dbConnect.php';

    $street = $_POST["street"];
    $county = $_POST["county"];
    $city = $_POST["city"];
    $post_code = $_POST["post_code"];
    $contact_phone_region = $_POST["contact_phone_region"];
    $contact_phone = $_POST["contact_phone"];
    $contact_email = $_POST["contact_email"];


    $query = "INSERT INTO branch(street, county, city, post_code, contact_phone_region, contact_phone, contact_email) VALUES ('$street','$county','$city','$post_code','$contact_phone_region','$contact_phone','$contact_email')";

    $result = mysqli_query($db, $query) or die(mysqli_error($db));

    echo '<h1>Branch Created</h1>';
}

if (isset($_POST["create_branch"])) {
    createBranch();
}
?>


<?php include 'footer.php'; ?>
