<?php



?>
<form action="addproductcode.php"  method="post"  enctype="multipart/form-data">
 <input class="form-control" type="radio" name="a" value="mobile">mobile
 <input type="radio" name="a" value="accessories">Accessories
  
  <br>
  Product name<input type="text" name="name"><br>
  Product series<input type="text" name="series"><br> 
  Product Price<input type="number" name="price"><br>
  Upload Image<input type="file" name="file">
  <br>
  
  
  <input type="submit" class="btn" value="ADD">
  
  
  
  
</form>