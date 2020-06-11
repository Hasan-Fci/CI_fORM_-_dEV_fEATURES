<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Data</title>
</head>
<body>
	<div class="container">
		<br><br><br>
		<h3>Insert data using Codigniter</h3>
		<form method="post" action="<?php echo base_url()?>main/form_validation">
			<?php if($this->uri->segment(2) == "inserted"){ echo "<p class='test-success'>Data Inserted</p>";}?>
			<div class="form-group">
				<label for="">Enter First Name:</label>
				<input type="text" name="first_name" class="form-control">
				<span class="text-danger"><?php echo form_error('first_name'); ?></span>
			</div>
			<div class="form-group">
				<label for="">Enter Last Name:</label>
				<input type="text" name="last_name" class="form-control">
				<span class="text-danger"><?php echo form_error('last_name'); ?></span>
			</div>
			<div class="form-group">
				<input type="submit" name="insert" value="Insert" class="btn btn-info">
			</div>
		</form>
	</div>
</body>
</html>