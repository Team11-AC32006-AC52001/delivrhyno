<?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form name="Search" method="GET" action="DBMSAdvancedQuery1.php" class="form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="city">City</label>
                            <div class="col-md-4">
                                <input id="city" name="city" type="text" placeholder="e.g. Dundee"
                                       class="form-control input-md"
                                       required>
                            </div>
                        </div>
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

<?php include 'footer.php'; ?>