<?php
if(isset($_SESSION['uid']))
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
                        Login Here<br> Page
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
								<h2 class="tm-page-title text-center mb-4 tm-text-primary">Login Here</h2>
               				</div>							
						</div>						
					</div>
                    <div class="mx-auto pb-3 tm-about-text-container px-3">
                        <div class="row">
                            <div class="col-lg-12  mb-5">
                                <form id="contact-form" action="" method="POST" enctype="multipart/form-data" class="tm-contact-form">
                                 
                                  <div class="form-group">
                                    <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required="" />
                                  </div>
								  <div class="form-group">
                                    <input type="password" name="password" class="form-control rounded-0" placeholder="Password" required="" />
                                  </div>
								  <div class="form-group mb-0">
                                    <button name="submit" type="submit" class="btn btn-primary rounded-0 d-block ml-auto mr-0 tm-btn-animate tm-btn-submit tm-icon-submit"><span>Login</span></button>
                                  </div>
								  <div class="form-group mb-0">
                                    <a href="signup">If you not registered then Signup Here</a>
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
