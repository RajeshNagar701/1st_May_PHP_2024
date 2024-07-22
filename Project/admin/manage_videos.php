
<?php
include_once('header.php');
?>	
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Videos</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Categories
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Launguages</th>
                                            <th>Duration</th>
                                            <th>Quality</th>
                                            <th>Size</th>
                                            <th>Main Cate Id</th>
                                            <th>Sub Cate Id</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									if(!empty($vedios))
										{
											foreach($vedios as $w)
											{
											?>
											<tr>
												<td><?php echo $w->id;?></td>
												<td><?php echo $w->img;?></td>
												<td><?php echo $w->title;?></td>
												<td><?php echo $w->lang;?></td>
												<td><?php echo $w->duration;?></td>
												<td><?php echo $w->Quality_format;?></td>
												<td><?php echo $w->size;?></td>
												<td><?php echo $w->main_cate_id;?></td>
												<td><?php echo $w->sub_cate_id;?></td>
												<td>
													<a href="#" class="btn btn-primary">Edit</a>
													<a href="delete?dvideo=<?php echo $w->id;?>" class="btn btn-danger">Delete</a>
												</td>
											</tr>
											<?php
											}
										}
                                        else
										{	
                                        ?>
										<tr>
											<td align="center" colspan="10"> Data Not Found </td>
										</tr>
										<?php
										}
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
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