

    <?php include('head.php');?>
    <?php include('nav.php');?>
	<?php

$id =  $_GET['id'];


$link = mysqli_connect("localhost","root","","mamurjor_ecommerce");


if($link==true){
	
	
	
	$query="UPDATE FROM products WHERE id=$id,sku=$sku,idsku=$idsku,pname=$pname,pdescription=$pdescription,pqpu=$pqpu,uprice=$uprice,msrp=$msrp,asize=$asize,size=$size,color=$color,discount=$discount,uweight=$uweight,uinstock=$uinstock,rlevel=$rlevel,pavailable=$pavailable,davailable=$davailable,corder=$corder,picture=$picture,ranking=$ranking,note=$note,acolors=$acolors,uorder=$uorderuorder";
	$sql=mysqli_query($link,$query);
	
	if($sql==true){
		
		header("Location: product-list.php?msg=Data UPDATE Done");
	}
	else{
		header("Location: product-list.php?msg=Data UPDATE Not Done");
	}
}
else{
	
}






?>
                
				
				
				
				
				
			
                        
                       
					   
					   
					   
											<h1> Update Product  </h1>
                                            <form action="product-save.php"  method="post" role="form" enctype="multipart/form-data">
                                                <div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">sku</label>
                                                    <input type="number" name="sku" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">idsku</label>
                                                    <input type="number" name="idsku" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">product_name</label>
                                                    <input type="text" name="pname" class="form-control" id="inputSuccess">
												</div>	
                                                <div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">product_description </label>
                                                    <input type="text" name="pdescription" class="form-control" id="inputSuccess">
                                                </div>
                                                <div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">quantity_per_unit</label>
                                                    <input type="number" name="pqpu" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">unit_price</label>
                                                    <input type="number" name="uprice" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">msrp</label>
                                                    <input type="number" name="msrp" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">available_size</label>
                                                    <input type="text" name="asize" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">size</label>
                                                    <input type="text" name="size" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">color</label>
                                                    <input type="text" name="color" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">discount </label>
                                                    <input type="number" name="discount" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">unit_weight</label>
                                                    <input type="number" name="uweight" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">unit_in_stock</label>
                                                    <input type="number" name="uinstock" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">reorder_level</label>
                                                    <input type="number" name="rlevel" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">product_available</label>
                                                    <input type="number" name="pavailable" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">discount_available</label>
                                                    <input type="number" name="davailable" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">current_order</label>
                                                    <input type="text" name="corder" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">picture upload</label>
                                                    <input type="file" name="picture" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">ranking</label>
                                                    <input type="number" name="ranking" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">note</label>
                                                    <input type="text" name="note" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">available_colors</label>
                                                    <input type="number" name="acolors" class="form-control" id="inputSuccess">
                                                </div>
												<div class="form-group has-success">
                                                    <label class="control-label" for="inputSuccess">units_on_order</label>
                                                    <input type="number" name="uorder" class="form-control" id="inputSuccess">
                                                </div>
												
												
												
												
												
												  <div class="form-group has-error">
                                                    
                                                   <button type="submit"> Save </button>
                                                </div>
                                            </form>
					   
					   
                        
                        
                
				
				
				
				<?php include('footer.php');?>
				
				
				
				