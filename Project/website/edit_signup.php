<?php
if(isset($_SESSION['uid']))
{
}
else
{
	echo "<script>
		window.location='home'
		</script>";
}	

include_once('header.php');
?>

<body>
  <div class="tm-page-wrap mx-auto">
    <div class="position-relative">
      <?php
      include_once('navbar.php');
      ?>
      <div class="tm-welcome-container tm-fixed-header tm-fixed-header-3">
        <div class="text-center">
          <p class="pt-5 px-3 tm-welcome-text tm-welcome-text-2 mb-1 mt-lg-0 mt-5 text-white mx-auto">
            Edit User Here<br> Page
          </p>
        </div>
      </div>

      <div id="tm-fixed-header-bg"></div> <!-- Header image -->
    </div>

    <!-- Page content -->
    <main>
      <div class="container-fluid px-0">
        <div class="mx-auto tm-content-container">
          <div class="row mt-3 mb-5 pb-3">
            <div class="col-12">
              <div class="mx-auto tm-about-text-container px-3">
                <h2 class="tm-page-title text-center mb-4 tm-text-primary">Edit Here</h2>
              </div>
            </div>
          </div>
          <div class="mx-auto pb-3 tm-about-text-container px-3">
            <div class="row">
              <div class="col-lg-12  mb-5">
                <form id="contact-form" action="" method="post" enctype="multipart/form-data" class="tm-contact-form">
                  <div class="form-group">
                    <input type="text" value="<?php echo $fetch->name;?>" name="name" class="form-control rounded-0" placeholder="Name" required="" />
                  </div>
                  <div class="form-group">
                    <input type="email" value="<?php echo $fetch->email;?>" name="email" class="form-control rounded-0" placeholder="Email" required="" />
                  </div>
                  <div class="form-group">
                    Gender :
                    Male :<input type="radio" name="gender" value="Male"  <?php if($fetch->gender=="Male"){ echo "checked"; }?>/>
                    Female :<input type="radio" name="gender" value="Female" <?php if($fetch->gender=="Female"){ echo "checked"; }?> />
                  </div>
                  <div class="form-group">
                    Laungages :
                    Hindi :<input type="checkbox" name="lag[]" value="Hindi" 
					<?php
					$lag=$fetch->lag;
					$lag_arr=explode(",",$lag);
					if(in_array("Hindi",$lag_arr)) { echo "Checked"; }
					?>/>
                    Gujrati :<input type="checkbox" name="lag[]" value="Gujrati" <?php
					$lag=$fetch->lag;
					$lag_arr=explode(",",$lag);
					if(in_array("Gujrati",$lag_arr)) { echo "Checked"; }
					?>/>
                    English :<input type="checkbox" name="lag[]" value="English" <?php
					$lag=$fetch->lag;
					$lag_arr=explode(",",$lag);
					if(in_array("English",$lag_arr)) { echo "Checked"; }
					?>/>
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="contact-select" name="cid">
                      <option value="-">Select Country</option>
                      <?php
                      foreach($countries as $w)
                      {
						  if($fetch->id=$w->id)
						  {
                      ?>
							<option value="<?php echo $w->id?>" selected>
								<?php echo $w->name?>
							</option>
                      <?php
						  }
                      }
                      ?>  
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="file" name="img" value="<?php echo $fetch->img;?>"  class="form-control" />
					<img src="../admin/upload/users/<?php echo $fetch->img?>" width="50px">
                  </div>
                  <div class="form-group mb-0">
                    <button type="submit" name="submit" class="btn btn-primary rounded-0 d-block ml-auto mr-0 tm-btn-animate tm-btn-submit tm-icon-submit"><span>Save</span></button>
                  </div>
                  <div class="form-group mb-0">
                    <a href="profile">Back</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


      </div>
    </main>
    <?php
    include_once('footer.php');
    ?>