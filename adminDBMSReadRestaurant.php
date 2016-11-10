<?php include 'header.php'?>
<?php

if (isset($_SESSION["admLoggedIn"]) == "admLoggedIn") { ?>

    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">Restaurant Table</div>
        <div class="panel-body"><p>A Complete List of Restaurants.</p></div>
        <table class="table table-condensed table-striped">
            <?php include 'DBMSReadRestaurant.php';?>
        </table>

    </div></div></div></div>
<?php } else {
    echo '<h2>You do not appear to be an admin!  Access Denied!</h2>';
} ?>
<?php include 'footer.php'?><?php
