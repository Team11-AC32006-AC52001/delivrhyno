<?php include 'header.php'; ?>

    <div class="container-fluid">
	<?php if ( isset($_SESSION["admLoggedIn"]) == "admLoggedIn") { ?>
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align:center;">Search for employees that earn more than the average salary</h2>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Search" method="GET" action="DBMSAdvancedQuery5.php" class="form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="performquery"></label>
                            <div class="col-md-1">
                                <button type="submit" value="advanced" id="performquery" name="performquery"
                                        class="btn btn-success">Search
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
		<?php } else {
			?> <div class="row">
            <div class="col-md-12">
                    <?php echo '<h2 style="text-align:center";>You do not appear to be an admin! Access Denied!</h2>'; ?>
			</div>
			</div> <?php
                } ?>
		</div>

<?php include 'footer.php'; ?>