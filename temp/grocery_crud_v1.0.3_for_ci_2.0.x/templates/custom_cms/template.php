<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8" />
<?php foreach($css as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<script>var base_url = '<?=base_url()?>';</script>
<?php foreach($js as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>
	<div>
		<a href='<?=site_url('examples/offices_management')?>'>Offices</a> | 
		<a href='<?=site_url('examples/employees_management')?>'>Employees</a> |
		<a href='<?=site_url('examples/customers_management')?>'>Customers</a> |
		<a href='<?=site_url('examples/orders_management')?>'>Orders</a> |
		<a href='<?=site_url('examples/products_management')?>'>Products</a> | 
		<a href='<?=site_url('examples/film_management')?>'>Films</a>
	</div>
    <div><?php 
					if(isset($modules->report)) 
						foreach($modules->report as $module) 
							echo $module;
	?></div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>