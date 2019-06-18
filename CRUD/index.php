<?php  include('server.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM london WHERE id=$id");

		if (count([$record]) == 1 ) {
			$n = mysqli_fetch_array($record);
			$service = $n['service'];
			$cost = $n['cost'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator workspace</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<header>
	<h1 style="text-align: center;">London information</h1>
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>
</header>


<section>
  <nav>
    
  
  
  <form method="post" action="server.php" >
       
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
     
        
        <div class="input-group">
			<label>Service</label>
			<input type="text" name="service" value="<?php echo $service; ?>">
		</div>
		<div class="input-group">
			<label>Cost</label>
			<input type="number" name="cost" value="<?php echo $cost; ?>">
		</div>
		<div>
			 <label class="checkbox-inline">
			 <input type="checkbox" name="verified" value="myval" checked />
			 <p>verified</p>
		</div>
		<div class="input-group">
        <?php if ($update == true): ?>
            <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
                <?php else: ?>
            <button class="btn" type="submit" name="save" >Save</button>
				<?php endif ?>
		</div>

		  




		</form>
	</nav>
	<article>


    

	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>



	<?php $results = mysqli_query($db, "SELECT * FROM london"); ?>
	<table>
		<thead>
			<tr>
				<th>Service</th>
				<th>Costs</th>
				<th>verified</th>
				<th>LastUpdate</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		
		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				<td><?php echo $row['service']; ?></td>
				<td><?php echo $row['cost']; ?></td>
				<td><?php echo $row['verified']; ?></td>
				<td><?php echo $row['updatetime']; ?></td>
				<td>
					<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Correct</a>
				</td>
				<td>
					<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Remove</a>
				</td>
			</tr>
	<?php } ?>
	</table>

 


	


</section>






<footer>
  <p>Footer</p>
      <li><a href="#">London</a></li>
      <li><a href="#">Paris</a></li>
      <li><a href="#">Tokyo</a></li>
</footer>

</body>
</html>
