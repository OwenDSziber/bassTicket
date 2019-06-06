<?php

	session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BassTicket</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
</head>

<body style="color: #d4af37;background-color: #000000;">
	<?php include 'includes/nav.inc.php'; ?>
    <div class="text-center"></div>
	<div style="margin-left: 20%; margin-right: 10%; width: 80%;">
		<div class="contact-clean" style="background-color: rgb(0,0,0); max-width: 75% !important;">
			<form method="post" action="includes/grabData.inc.php" style="background-color: rgb(0,0,0);  max-width: 75% !important;">
				<h2 class="text-center" style="color: #d4af37;">Create Ticket</h2>
				<br>
				<div class="form-group"><select class="form-control" style="background-color: #d4af37;color: #000000;"><optgroup label="Assign To:"><option value="12" selected="">Assign To: User or Group</option></optgroup></select></div>
				<div class="form-group"><select class="form-control" style="background-color: #d4af37;color: #000000;"><optgroup label="Repeat Every:"><option value="12" selected="">Repeat: Monthly</option></optgroup></select></div>
				<div class="form-group"><select class="form-control" style="background-color: #d4af37;color: #000000;"><optgroup label="Priority:"><option value="12" selected="">Priority: Normal</option></optgroup></select></div>
				<div class="form-group"><textarea class="form-control" id="editor" name="message" placeholder="Message" rows="14" style="background-color: rgb(0,0,0);"></textarea></div>
				<link rel="stylesheet" href="jodit/build/jodit.min.css">
				<script src="jodit/build/jodit.min.js"></script>
				<script>
				var editor = new Jodit("#editor", {
					  "uploader": {
						"insertImageAsBase64URI": true
					  },
					  "theme": "dark"
				});
				</script
				<div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: #d4af37;color: #000000;">Submit</button></div>
			</form>
		</div>
	</div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <script src="../assets/js/script.min.js"></script>
</body>

</html>