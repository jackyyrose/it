<?php
require("db/category.php");
$currentCategory = new Category;
$currentCategory->setId($_GET["cid"]);
$childrenIds = $currentCategory->getChildrenIds();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">CATEGORY: APPLIANCES</a>
					</div>
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">VIEW PARENT
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Page 1-1</a></li>
								<li><a href="#">Page 1-2</a></li>
								<li><a href="#">Page 1-3</a></li> 
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">VIEW SIBLINGS
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Page 1-1</a></li>
								<li><a href="#">Page 1-2</a></li>
								<li><a href="#">Page 1-3</a></li> 
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">VIEW CHILDREN
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo "http://dev.tradedepot.co.nz/it/view.php?cid=" . $childrenIds[0]; ?>"><?php echo $currentCategory->getNameById($childrenIds[0]); ?></a></li>
								<li><a href="#">Page 1-2</a></li>
								<li><a href="#">Page 1-3</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<tr class="danger">
						<td>John</td>
						<td>Doe</td>
						<td>john@example.com</td>
						<td>John</td>
						<td>Doe</td>
						<td>john@example.com</td>
						<td>John</td>
						<td>Doe</td>
						<td>john@example.com</td>
					</tr>
					<tr class="info">
						<td>Mary</td>
						<td>Moe</td>
						<td>mary@example.com</td>
						<td>Mary</td>
						<td>Moe</td>
						<td>mary@example.com</td>
						<td>Mary</td>
						<td>Moe</td>
						<td>mary@example.com</td>
					</tr>
					<tr class="danger">
						<td>July</td>
						<td>Dooley</td>
						<td>july@example.com</td>
						<td>July</td>
						<td>Dooley</td>
						<td>july@example.com</td>
						<td>July</td>
						<td>Dooley</td>
						<td>july@example.com</td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>