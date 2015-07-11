<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

</head>
<body>
	<?php echo anchor('address','Display')?>
<!-- 	<?php var_dump($errors);?>
	<?php echo validation_errors(); ?> -->
	<?php echo form_open('address/insert')?>
	<p><label>Country</label>
	<input type="text" name="country">
	<?php echo form_error('country'); ?></p>

	<p><label>City</label>
	<input type="text" name="city">
	<?php echo form_error('city'); ?></p>

	<p><label>Thana</label>
	<input type="text" name="thana">
	<?php echo form_error('thana'); ?></p>

	<p><input type="submit"></p>
<?php echo form_close()?>
</body>
</html>