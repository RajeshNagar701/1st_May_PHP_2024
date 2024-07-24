
<?php
include_once('header.php');
?>	
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Edit Main Categories</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Edit Categories
                        </div>
                        <div class="panel-body">
								<form role="form" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label>Enter Categories Name</label>
										<input class="form-control" value="<?php echo $fetch->name;?>" name="name" type="text">
									</div>
									<div class="form-group">
										<label>Upload Categories Image</label>
										<input class="form-control" value="<?php echo $fetch->img;?>"  name="img" type="file">
										<img src="upload/main_cate/<?php echo $fetch->img?>" width="50px">
									</div>
							 
									<button type="submit" name="save" class="btn btn-info">Save </button>

								</form>
                            </div>
                        </div>
                            </div>

        </div>
 
                        </div>
                            </div>

        </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
  <?php
   include_once('footer.php');
   ?>