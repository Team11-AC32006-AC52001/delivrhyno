<?php include 'header.php'; ?>

    <div class="container-fluid">
	<h2 style="text-align:center;">Employee Login</h2>
	<br>
        <form method="POST" action="employeeLogin.php" class="form-horizontal">
            <fieldset>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="username">username</label>
                    <div class="col-md-4">
                        <input id="username" name="username" type="text" placeholder="username"
                               class="form-control input-md" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="password">password</label>
                    <div class="col-md-4">
                        <input id="password" name="password" type="password" placeholder="password"
                               class="form-control input-md" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="login"></label>
                    <div class="col-md-1">
                        <button type="submit" value="Login" id="login" name="login" class="btn btn-success">Login
                        </button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

<?php include 'footer.php'; ?>