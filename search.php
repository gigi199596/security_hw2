<?php
	if($_GET['text']!= null){
        $output = shell_exec('./search '.$_GET['text'].' 2>&1');
        echo $output;
		echo '<br>';
		echo "U looked for : ".$_GET['text'];
	}else{
		echo "Search anything u want here : ";
	}
include 'homepage.php';
?>
	<form class="form-horizontal" method="GET">
		<input type="text" class="form-control" name="text" value="your search here" placeholder="Search" >
		<input id="user" type="hidden" name="login" placeholder="User" value=<?=$_GET['login']?>>
		<input id="password" type="hidden" name="psw" placeholder="Password" value=<?=$_GET['psw']?>>
		<button type="submit" href="" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-search"></i> Search</button>
	</form>
<br>
<br>
<i class="glyphicon glyphicon-tag"> Last searchs u made : <br>
<div>
<table class="table table-hover">
	<thead>
		<tr>
			<th> <i class="glyphicon glyphicon-bookmark"> </th>
			<th> Search </th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach (file('historic.txt') as $line){
			echo "<tr>";
			echo "<td> <i class=\"glyphicon glyphicon-pencil\"> </td>";
			echo "<td>";
				echo $line;
			echo "</td>";
			echo "</tr>";
		}
		?>
	</tbody>
</table>
	</div>
