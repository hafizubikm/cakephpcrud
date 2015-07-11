<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

</head>
<body>
	<?php extract($list)?>
	<?php echo anchor('address','Display')?>
<!-- 	<?php var_dump($errors);?>
	<?php echo validation_errors(); ?> -->
	<?php echo form_open('address/update_address')?>
	<input type="hidden" name="hid" value="<?php echo $addid?>">
	<p><label>Country</label>
	<input type="text" name="country" value="<?php echo $country?>">
	<?php echo form_error('country'); ?></p>

	<p><label>City</label>
	<input type="text" name="city" value="<?php echo $city?>">
	<?php echo form_error('city'); ?></p>

	<p><label>Thana</label>
	<input type="text" name="thana" value="<?php echo $thana?>">
	<?php echo form_error('thana'); ?></p>

	<p><input type="submit"></p>
<?php echo form_close()?>
</body>
</html>