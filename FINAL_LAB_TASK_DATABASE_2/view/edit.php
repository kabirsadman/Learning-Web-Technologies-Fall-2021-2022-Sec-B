<?php
	$title= "Edit Page";
	include('header.php');
	require_once('../model/userModel.php');
	//echo $_GET['id'];
	//echo $_GET['email'];
?>




	

	<div id="main_content">
		<form method="post" action="">
			<fieldset>
				<legend>Edit Product</legend>
				<table>
					<tr>
						<td>Name</td>
					</tr><tr>
						<td><input type="text" name="username" value=""> </td>
					</tr>
					<tr>
						<td>Buying Price</td>
					</tr><tr>
						<td><input type="password" name="password" value=""> </td>
					</tr>

					<tr>
						<td>Selling Price</td>
					</tr><tr>
						<td><input type="email" name="email" value=""> </td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" name="">Display
					<tr>
						<td></td>
						<tr>
						<td>
							<input type="submit" name="signup" value="SAVE">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<?php include('footer.php'); ?>