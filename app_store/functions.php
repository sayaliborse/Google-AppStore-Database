<? php

$con = mysqli_connect("localhost","root","","app_store");

function getCategories(){

	global $con;
	$get_category = "select * from category";
	$run_category = mysqli_query($con, $get_category);
	echo "hello"
	while ($row_category = mysqli_fetch_array($run_category)){
		$category_id = $row_category['category_id'];
		$category_title = $row_category['category_title'];
	echo "$category_title";
	}
}
?>