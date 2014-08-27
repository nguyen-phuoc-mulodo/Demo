<html>
<head>
    <title>Facebook Login</title>
    <meta charset="utf-8" />
    <style>
        .container {
            margin-top: 40px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="post_image.php" method="post">
                <div class="form-group clearfix">
                    <label class="control-label">Message</label>
                    <div class="">
                        <textarea class ="form-control col-md-10" name="message" type="text"> </textarea>
                    </div>
                </div>
                <div class="form-group clearfix">
                    <label class="control-label">Time</label>
                    <div class="">
                        <input class ="form-control col-md-10 datetime-picker" name="time" type="text"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Image</label>
                    <input type="file" class="form-control" name="image" />
                    
                </div>
                <div class="form-group">
                    <input class ="btn btn-primary" type="submit" name="submit" value="submit" />
                </div>
            </form>
        </div><!--/.col-->
    </div> <!--/.row-->
</div>
</body>
    <!-- this should go after your </body> -->
    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
    <script src="js/jquery.js"></script>
    <script src="js/jquery.datetimepicker.js"></script>
    <script>
        $(".datetime-picker").datetimepicker();
    </script>
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
</html>