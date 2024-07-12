﻿
<?php
include_once('header.php');
?>	
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
                            Categories
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
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
                                        foreach($users as $w)
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $w->id;?></td>
                                            <td><?php echo $w->img;?></td>
                                            <td><?php echo $w->name;?></td>
                                            <td><?php echo $w->email;?></td>
                                            <td><?php echo $w->gender;?></td>
                                            <td><?php echo $w->lag;?></td>
                                            <td><?php echo $w->cid;?></td>
											<td>
                                                <a href="#" class="btn btn-success"><?php echo $w->status;?></a>
												<a href="#" class="btn btn-primary">Edit</a>
												<a href="#" class="btn btn-danger">Delete</a>
											</td>
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