@extends('admin.layout.main_structure') 

@section('main_code')
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Main Categories</h1>
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
                                            <th>Name</th>
                                            <th>Image</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									if(!empty($category_arr))
										{
											foreach($category_arr as $w)
											{
											?>
											<tr>
												<td><?php echo $w->id;?></td>
												<td><?php echo $w->cate_name;?></td>
												<td><img src="{{url('admin/assets/img/categories/<?php echo $w->cate_img;?>')}}" width="50px"></td>
												<td>
													<a href="edit?editcat=<?php echo $w->id;?>" class="btn btn-primary">Edit</a>
													<a href="delete?dcat=<?php echo $w->id;?>" class="btn btn-danger">Delete</a>
												</td>
											</tr>
											<?php
											}
										}
										else
										{	
                                        ?>
										<tr>
											<td align="center" colspan="4"> Data Not Found </td>
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
   
  @endsection