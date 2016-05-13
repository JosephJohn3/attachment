<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trial</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sign.css" rel="stylesheet">
</head>
<body>
<div class="container">
<?php
include_once 'header.php';
?>
    <div class="container">
        <div class="row">
            <form role="form">
                <div class="col-lg-6">
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required details on education</strong></div>
                    <div class="form-group">
                        <label for="InputName">Enter College</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="college"  placeholder="Enter College" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Enter Degree</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="degree" placeholder="Enter degree course" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-info pull-right">
                </div>
            </form>
            <div class="col-lg-5 col-md-push-1">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <strong><span class="glyphicon glyphicon-ok"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong>
                    </div>
                    <div class="alert alert-success">
                        <strong><span class="glyphicon glyphicon-remove"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut laboit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- attach footer -->
    <footer class="footer">
        <p>&copy; 2016 Attachment stuff, Inclusion media.</p>
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

