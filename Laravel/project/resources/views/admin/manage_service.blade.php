@extends('admin.layout.main_structure') 

@section('main_code')
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage Services</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Manage Services
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Categories </th>
                                            <th>Price</th>
                                            <th>Desctiption</th>
                                            <th>Status</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									if(!empty($service_arr))
										{
											foreach($service_arr as $w)
											{
											?>
											<tr>
												<td><?php echo $w->id;?></td>
												<td><img src="{{url(admin/img/service/<?php echo $w->img;?>" width="50px" /></td>
												<td><?php echo $w->name;?></td>
												<td><?php echo $w->cate_id;?></td>
												<td><?php echo $w->price;?></td>
												<td><?php echo $w->description;?></td>
												<td><?php echo $w->status;?></td>
												<td>
													<a href="status?status_user=<?php echo $w->id;?>" class="btn btn-success"><?php echo $w->status;?></a>
													<a href="#" class="btn btn-primary">Edit</a>
													<a href="delete?duser=<?php echo $w->id;?>" class="btn btn-danger">Delete</a>
												</td>
											</tr>
											<?php
											}
										}
                                        else
										{	
                                        ?>
										<tr>
											<td align="center" colspan="8"> Data Not Found </td>
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

    @endsection