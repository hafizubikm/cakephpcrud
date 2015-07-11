<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php echo anchor('address/add','Add')?>
<table style="width:50%; text-align:center">
<thead >
  <tr>
    <th>Country</th>
    <th>City</th>		
    <th>Thana</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>
</thead>


<?php foreach($addresses as $address):?>
<tbody>
  <tr>
    <td><?php echo $address->country?></td>
    <td><?php echo $address->city?></td>
    <td><?php echo $address->thana?></td>
    <td><a href="<?php echo site_url('address/delete/'.$address->addid) ?>">Del</a></td>
    <td><a href="<?php echo site_url('address/edit/'.$address->addid) ?>">Edit</a></td>
  </tr>
</tbody>
<?php endforeach;?>



<tfoot>
  <tr>
    <th>Country</th>
    <th>City</th>		
    <th>Thana</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>
</tfoot>
</table>
</body>
</html>