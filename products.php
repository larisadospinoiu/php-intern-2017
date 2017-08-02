<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'C:\xampp\htdocs\lib\header.php'; ?>
<?php include 'C:\xampp\htdocs\conexiune.php'; ?>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
    <div id="slider">
		<ul class="bxslider">
		  <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>
		  <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>
		  <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>
		  <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>
		  <li><img src="https://wallpaperscraft.com/image/abstraction_geometry_shapes_colors_93400_1920x1080.jpg" /></li>		  
		</ul>
	</div>    
  </div>

	<div class="container">
		<ul class="tabs">
			<li class="tab-link current" data-tab="tab-1">Tab One</li>
			<li class="tab-link" data-tab="tab-2">Tab Two</li>
			<li class="tab-link" data-tab="tab-3">Tab Three</li>
		</ul>
		
		<?php
		
		$sqlstring = "SELECT id, name,imagine FROM products";
		$result = $conexiune->query($sqlstring);
		$index_array=0;
		
		if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
				
                $produs_crt = "<br> ID: ".$row["id"] . "  "." Name:". $row["name"] ."<br>";
				$imagine = "assets/images/products/".$row["imagine"];
				
				if($index_array!=0){
					$a1 = array($index_array => "$produs_crt");
					$a2 = array($index_array => "$imagine");
				$array = array_merge($array,$a1);
				$array2 = array_merge($array2,$a2);
				}
				else {
				$array = array($index_array => "$produs_crt");
				$array2 = array($index_array => "$imagine");
				}
			$index_array ++;
			//print_r ($array2);
			} ?>
			
		<div id="tab-1" class="tab-content current">
		<?php 
		for ($i=0;$i<5;$i++){?>
			<div class="product">
				<img src="<?php echo $array2[$i];?>" alt="">
				<div style="clear:both;"></div>
				<span><?php echo $array[$i]; ?></span>
		</div><?php }?>
			
			
			<div style="clear:both;"></div>
		<?php 
		for ($i=5;$i<10;$i++){?>
			<div class="product">
				<img src="<?php echo $array2[$i];?>" alt = "">
				<div style="clear:both;"></div>
				<span><?php echo $array[$i]; ?></span>
		</div><?php }?>	
			
			<div style="clear:both;"></div>
		</div>
		<div id="tab-2" class="tab-content">
			<?php 
			for ($i=10;$i<15;$i++){?>
			<div class="product">
				<img src="<?php echo $array2[$i];?>" alt="">
				<div style="clear:both;"></div>
				<span><?php echo $array[$i]; ?></span>
				</div><?php }?>	
			<div style="clear:both;"></div>
			<?php 
			for ($i=15;$i<20;$i++){?>
			<div class="product">
				<img src="<?php echo $array2[$i];?>" alt="">
				<div style="clear:both;"></div>
				<span><?php echo $array[$i]; ?></span>
				</div><?php }?>	
				<div style="clear:both;"></div>

			</div>
			<div style="clear:both;"></div>
		</div>
		<div id="tab-3" class="tab-content">
			
			<?php 
			for ($i=20;$i<25;$i++){?>
			<div class="product">
				<img src="<?php echo $array2[$i];?>" alt="">
				<div style="clear:both;"></div>
				<span><?php echo $array[$i]; ?></span>
				</div><?php }?>	
			
			<div style="clear:both;"></div>
			
			<?php 
			for ($i=25;$i<30;$i++){?>
			<div class="product">
				<img src="<?php echo $array2[$i];?>" alt="">
				<div style="clear:both;"></div>
				<span><?php echo $array[$i]; ?></span>
				</div><?php }?>	
				<div style="clear:both;"></div>
			
			</div>
			<div style="clear:both;"></div>
		</div>

</div>
	<?php	
		}
		$conexiune->close();
		?>
<!-- footer -->
<?php include 'C:\xampp\htdocs\lib\footer.php'; ?>

</body>
</html>
