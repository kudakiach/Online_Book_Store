<div class="sidebar">
	<ul class="sidebar">
	<li>
		<h2>Search</h2>
		<form method="GET" action="search_result.php">
			<fieldset>
			<input type="text" id="s" name="s" value="" />
			<input type="submit" id="x" value="Search" />
			</fieldset>
		</form>
	</li>
	<li>
		<h2>Categories</h2>
		<ul>
		
		<?php
		
		require_once "./functions/database_functions.php";
        $conn = db_connect();
		$query="select * from category limit 10";

		$res=mysqli_query($conn,$query);
			
		while($row=mysqli_fetch_assoc($res))
			{
				echo '<li><a href="subcat.php?">'.$row["category_name"].'</a></li>';
				?>
				<div class="divider"></div>

				<?php
				
			}

			mysqli_close($conn);
		?>
		</ul>
	</li>
	</ul>
</div>
