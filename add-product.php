<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'C:\xampp\htdocs\lib\header.php'; ?>

<div class="wrapper row2">
  <div id="container" class="clear">    
    
	<div class="container">

	<form action="add-product.php" method="post" enctype="multipart/form-data" onsubmit="return valideaza();">
      
        <h1>Add a product</h1>
        
        <fieldset>
          <legend>Product Details</legend>
          <label for="name"> Product Name:</label>
          <input type="text" id="name" name="name" >
		  
		  <label for="decription"> Description:</label>
		  <textarea id="details" name="details" ></textarea>
   
		  <label for="price"> Price:</label>
          <input type="number" id="price" name="price" >
		  
		  <label>Favorite:</label>
          <input type="radio" id="favorite-yes" value="yes" name="favorite_product" <?php if (isset($favorite_product) && $favorite_product=="yes") echo "yes";?>><label for="favorite-yes" class="light">Yes</label><br>
          <input type="radio" id="favorite-no" value="no" name="favorite_product" <?php if (isset($favorite_product) && $favorite_product=="no") echo "no";?>><label for="favorite-no" class="light">No</label>
   
        </fieldset>
       
        <fieldset>
			<label for="job" >Category:</label>
			<select id="job" name="job">
			  <optgroup label="First">
				<option value="">tech</option>
				<option value="funny">funny</option>
				<option value="gadget">gadget</option>
			  </optgroup>
			  <optgroup label="Second">
				<option value="">somthing</option>
				<option value="funny">funny</option>
				<option value="gadget">gadget</option>
			  </optgroup>
			  <optgroup label="Third">
				<option value="">else</option>
				<option value="funny">funny</option>
				<option value="gadget">gadget</option>
			  </optgroup>
			</select>
			<?php
   if(isset($_FILES['imagine'])){
      $errors= array();
      $file_name = $_FILES['imagine']['name'];
      $file_size =$_FILES['imagine']['size'];
      $file_tmp =$_FILES['imagine']['tmp_name'];
      $file_type=$_FILES['imagine']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['imagine']['name'])));
      
      $expensions= array("jpg");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"assets/images/products/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
				<input type="file" name="imagine" />
			<button type="submit" name='submit'>Add Product</button>
        </fieldset>
		
      </form>
	</div><!-- container -->
<?php include 'C:\xampp\htdocs\insert.php'; ?>
</div>
<!-- footer -->

<?php include 'C:\xampp\htdocs\lib\footer.php'; ?>
</body>
</html>
