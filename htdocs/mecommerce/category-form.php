

    <?php include('head.php');?>
    <?php include('nav.php');?>
                
				
				
				
				<?php //include('main-content.php');?>
				
			
                        
                       
					   
					   
					   
											<h1> Add New Category </h1>
                                            <form action="category-save.php"  method="get" role="form">
											
                                               
												<div style="display: inline-block; text-align: left;">
													<fieldset>
													<legend>Personalia:</legend>
                                                    <label class="control-label" for="inputSuccess">Enter Category Name</label>
                                                    <input type="text" name="cname" class="form-control" id="inputSuccess">
                                               
                                                    <label class="control-label" for="inputWarning">description 
                                                    <input type="text" name="description" class="form-control" id="inputWarning">
                                                
                                                    <label class="control-label" for="inputWarning">active
                                                    <input type="number" name="active" class="form-control" id="inputWarning">
                                                
                                                
                                                    <label class="control-label" for="inputError">Upload Category Picture</label>
                                                    <input type="file" name="iamge" class="form-control" id="inputError">
                                             
									
                                                   <button type="submit"> Save </button>
												</fieldset>
                                                </div>
                                            </form>
					   
					   
                        
                        
                
				
				
				
				<?php include('footer.php');?>
				
				
				
				