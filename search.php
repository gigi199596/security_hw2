<?php
	if($_GET['text']!=null)){
		echo "U searched for : "+ $_GET['text'];	
	}else{
		echo "Search anything u want here : ";	
	}
?>

<body>
	<form class="form-horizontal" method="GET">
		<input type="text" class="form-control" name="text" value="your search here" placeholder="Search" >
		<button type="submit" href="" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-search"></i> Log in</button>
	</form>
</body>