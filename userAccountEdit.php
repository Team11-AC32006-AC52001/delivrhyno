<?php include 'header.php'; ?>
<?php ?>
<?php if (isset($_SESSION["loggedIn"]) == "loggedIn") {

$query = "SELECT * FROM `customer` WHERE '$_SESSION[username]' = username";
$result = mysqli_query($db, $query) or die(mysqli_error($db));

$row = mysqli_fetch_array($result);

$count = mysqli_num_rows($result);
if ($count == 1) {
    $_SESSION['id'] = $row[0];
    $_SESSION['title'] = $row[1];
    $_SESSION['forename'] = $row[2];
    $_SESSION['surname'] = $row[3];
    $_SESSION['street'] = $row[4];
    $_SESSION['county'] = $row[5];
    $_SESSION['city'] = $row[6];
    $_SESSION['post_code'] = $row[7];
    $_SESSION['contact_phone_region'] = $row[8];
    $_SESSION['contact_phone'] = $row[9];
    $_SESSION['contact_email'] = $row[10];
}
?>



<div class="container">
    <div class="col-md-4">
        <h2>Please enter the details you wish to update</h2>
        <br>
    </div>

    <form method="POST" action="userAccountUpdate.php" class="form-horizontal">
        <fieldset>
            <div class="form-group">
                <label class="col-md-3 control-label" for="contact_email">Contact Email</label>
                <div class="col-md-6">
                    <input id="contact_email" name="contact_email" type="email"
                           placeholder="contact email" class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="title">Title</label>
                <div class="col-md-6">
                    <input id="title" name="title" type="text" placeholder="title"
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="forename">Forename</label>
                <div class="col-md-6">
                    <input id="forename" name="forename" type="text" placeholder="forename"
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="surname">Surname</label>
                <div class="col-md-6">
                    <input id="surname" name="surname" type="text" placeholder="surname"
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="street">Street</label>
                <div class="col-md-6">
                    <input id="street" name="street" type="text" placeholder="street"
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="county">County</label>
                <div class="col-md-6">
                    <input id="county" name="county" type="text" placeholder="county"
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="city">City</label>
                <div class="col-md-6">
                    <input id="city" name="city" type="text" placeholder="city"
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="post_code">Post Code</label>
                <div class="col-md-6">
                    <input id="post_code" name="post_code" type="text" placeholder="post code"
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="contact_phone_region">Contact Phone
                    Region</label>
                <div class="col-md-6">
                    <input id="contact_phone_region" name="contact_phone_region" type="text"
                           placeholder="contact phone region"
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="contact_phone">Contact Phone</label>
                <div class="col-md-6">
                    <input id="contact_phone" name="contact_phone" type="text" placeholder="contact phone"
                           class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="Update Account"></label>
                <div class="col-md-1">
                    <button type="submit" value="UpdateAccount" id="UpdateAccount" name="UpdateAccount"
                            class="btn btn-success">Update Account
                    </button>
                </div>
            </div>
        </fieldset>
    </form>

    <?php } else {
        echo '<h2>No User Found</h2>';
    } ?>

    <?php include 'footer.php'; ?>
