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

		<br><br>
		<h3>Fetch Data in Database</h3>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<td>ID</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Delete</td>
				</tr>
				<?php
					if ($fetch_data->num_rows() > 0) {
						foreach ($fetch_data->result() as $key => $row) {
				?>		
						<tr>
							<td><?php echo $row->id; ?></td>
							<td><?php echo $row->first_name; ?></td>
							<td><?php echo $row->last_name; ?></td>
							<td><a href="#" class="delete_data" id="<?php echo $row->id; ?>">Delete</a></td>
						</tr>
				<?php
					}

					}else{
				?>		
						?>
							<tr>
								<td colspan="3">No data found</td>
							</tr>
						<?php
					}
				?>
			</table>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.delete_data').click(function(){
				var id = $(this).attr("id");
				console.log(id);
				if (confirm("Are you sure you want to delete this?")) {
					window.location="<?php echo base_url(); ?>main/delete_data/"+id;
				}else{
					return false;
				}
			});
		});
	</script>
</body>
</html>