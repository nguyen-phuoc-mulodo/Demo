<!DOCTYPE html>
<html lang="en">

<head>

<!-- title and meta -->
<title><?php echo $title ?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="description" content="" />
<title>Header Resize On Scroll with Animations</title>
    
<!-- css -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css" />
<?php echo Asset::css('style.css'); ?>
    
<!-- js -->
<script src="js/classie.js"></script>
<?php echo Asset::js('classie.js'); ?>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>
</head>

<body>

<div id="wrapper">

<?php if (!empty($header))echo $header; ?>
    
<?php if (!empty($content))echo $content; ?>
    
<?php if (!empty($footer))echo $footer; ?>

</div><!-- /#wrapper -->


</body>
</html>