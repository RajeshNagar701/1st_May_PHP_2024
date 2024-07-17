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
            Talk to Us<br>about any question you have
          </p>
        </div>
      </div>

      <div id="tm-fixed-header-bg"></div> <!-- Header image -->
    </div>

    <!-- Page content -->
    <main>
      <div class="container-fluid px-0">
        <div class="mx-auto tm-content-container">
        <div class="mx-auto tm-content-container mt-4 px-3 mb-3">
          <div class="row">
            <div class="col-12">
              <h2 class="tm-page-title mb-5 tm-text-primary text-center">My Profile</h2>
            </div>
          </div>
          <div class="row">
            <div class="offset-lg-3 col-lg-6 mb-5 pt-3">
				<div class="row">
					<div class="col-lg-6">
						<img class="mr-4 rounded-circle" height="250px" width="100%" src="../admin/upload/users/<?php echo $fetch->img;?>" alt="Generic placeholder image">
					</div>
					<div class="col-lg-6">
						<h1>Name : <?php echo $fetch->name; ?></h1><br>
						<p>Email : <?php echo $fetch->email; ?></p>
						<p>Gender : <?php echo $fetch->gender; ?></p>
						<p>Launguges : <?php echo $fetch->lag; ?></p>
						<a href="edit_user" class="btn btn-primary">Edit</a>
					</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php
    include_once('footer.php');
    ?>