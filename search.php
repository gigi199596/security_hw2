<?php
	if($_GET['text']!= null){
        echo '<br>';
		exec("search".$_GET['text']);
		echo "This is your text: ".$_GET['text'];
	}else{
		echo "Search anything u want here : ";
	}
?>
	<form class="form-horizontal" method="GET">
		<input type="text" class="form-control" name="text" value="your search here" placeholder="Search" >
		<input id="user" type="hidden" name="login" placeholder="User" value=<?=$_GET['login']?>>
		<input id="password" type="hidden" name="psw" placeholder="Password" value=<?=$_GET['psw']?>>
		<button type="submit" href="" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-search"></i> Search</button>
	</form>
<?php 
	echo "last searchs : <br>";
	$historic = file_get_contents("historic.txt");
	echo $historic;
?>