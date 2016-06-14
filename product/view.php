<?php
$sku = "";
if (isset($_GET["sku"])) {
    $sku = $_GET["sku"];
}

require("../class/product.php");
$product  = new Product;
$products = $product->getProductsBySearch($sku);
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
			<div class="form-group">
				<label for="usr">Search by sku:</label>
				<a id="link" class="btn btn-default" href="view.php?sku=">Submit</a>
				<input type="text" class="form-control" id="usr" value="<?php echo $sku; ?>" onkeyup='$("#link").attr("href", "view.php?sku=" + this.value)'>
			</div>
			
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Sku</th>
						<th>Height</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($products as $product) {
						echo "<tr><td>" . $product->sku . "</td>";
						echo "<td>" . $product->height . "</td>";
						echo "<td>" . "Edit" . "</td></tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>