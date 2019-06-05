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
	<style>
		/*Textbox*/
		.ck-editor__editable {
			height: 500px;
			max-width: 100%;
		}
		/*Toolbar*/
		.ck-editor__top {
			max-width: 100%;
		}
		#assignTo{
			max-width: 100%;
		}
	</style>
</head>

<body style="color: #d4af37;background-color: #000000;">
	<?php include 'includes/nav.inc.php'; ?>
    <div class="text-center"></div>
	<div style="margin-left: auto; margin-right: auto; width: 75%;">
		<div class="contact-clean" style="background-color: rgb(0,0,0); max-width: 75% !important;">
			<form method="post" style="background-color: rgb(0,0,0);  max-width: 75% !important;">
				<h2 class="text-center" style="color: #d4af37;">Create Ticket</h2>
				<br>
				<div class="form-group"><select class="form-control" style="background-color: #d4af37;color: #000000;"><optgroup label="Assign To:"><option value="12" selected="">Assign To: User or Group</option></optgroup></select></div>
				<div class="form-group"><select class="form-control" style="background-color: #d4af37;color: #000000;"><optgroup label="Repeat Every:"><option value="12" selected="">Repeat: Monthly</option></optgroup></select></div>
				<div class="form-group"><select class="form-control" style="background-color: #d4af37;color: #000000;"><optgroup label="Priority:"><option value="12" selected="">Priority: Normal</option></optgroup></select></div>
				<div class="form-group"><textarea class="form-control" id="editor" name="message" placeholder="Message" rows="14" style="background-color: rgb(0,0,0);"></textarea></div>
				<script src="ckeditor/ckeditor.js"></script>
				<script>
						ClassicEditor
							.create( document.querySelector( '#editor' ), {
								// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
							} )
							.then( editor => {
								window.editor = editor;
							} )
							.catch( err => {
								console.error( err.stack );
							} );
				</script>
			</form>
		</div>
	</div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <script src="../assets/js/script.min.js"></script>
</body>

</html>