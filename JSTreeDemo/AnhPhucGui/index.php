<?php include "include.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Title</title>
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="dist/themes/default/style.min.css" />
		<link rel="stylesheet" href="css/style.css" />
    <script src="dist/libs/jquery.js"></script>
		<script src="dist/jstree.min.js"></script>
    <script src="js/load_tree.js"></script>
	</head>
	<body>
		<div id="container" role="main">
			<div id="tree"></div>
			<div id="data">
				<div class="content code" style="display:none;"><textarea id="code" readonly="readonly"></textarea></div>
				<div class="content folder" style="display:none;"></div>
				<div class="content image" style="display:none; position:relative;"><img src="" alt="" style="display:block; position:absolute; left:50%; top:50%; padding:0; max-height:90%; max-width:90%;" /></div>
				<div class="content default" style="text-align:center;">Select a file from the tree.</div>
			</div>
		</div>
	</body>
</html>