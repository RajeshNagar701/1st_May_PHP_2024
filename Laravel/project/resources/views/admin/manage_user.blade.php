﻿@extends('admin.layout.main_structure') 

@section('main_code')


    
   
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Manage User</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="mytable" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Laungauges</th>
                                            <th>Country</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									if(!empty($users))
										{
											foreach($users as $w)
											{
											?>
											<tr>
												<td><?php echo $w->id;?></td>
												<td><img src="website/images/users/<?php echo $w->img;?>" width="50px" /></td>
												<td><?php echo $w->name;?></td>
												<td><?php echo $w->email;?></td>
												<td><?php echo $w->gender;?></td>
												<td><?php echo $w->lag;?></td>
												<td><?php echo $w->cid;?></td>
												<td>
													<a href="status?status_user=<?php echo $w->id;?>" class="btn btn-success"><?php echo $w->status;?></a>
													<a href="#" class="btn btn-primary">Edit</a>
													<a href="delete_user/<?php echo $w->id;?>"  class="btn btn-danger">Delete</a>
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
    <script>
        $(document).ready(function() {
            $('#mytable').DataTable();
        });
    </script>