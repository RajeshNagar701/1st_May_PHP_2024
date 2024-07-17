<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ; // current page url
  $url = end($url_array);  
  if($currect_page == $url){
	  echo 'active'; //class name in css 
  } 
}
?>
 
 
 <div class="position-absolute tm-site-header">
                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="col-7 col-md-4">
                            <a href="index.php" class="tm-bg-black text-center tm-logo-container">
                                <i class="fas fa-video tm-site-logo mb-3"></i>
                                <h1 class="tm-site-name">Video Catalog</h1>
                            </a>
                        </div>
                        <div class="col-5 col-md-8 ml-auto mr-0">
                            <div class="tm-site-nav">
                                <nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed" type="button"
                                        data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item <?php active('home')?>">
                                                <a class="nav-link tm-nav-link" href="home">Videos <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item <?php active('about')?>">
                                                <a class="nav-link tm-nav-link" href="about">About</a>
                                            </li>
                                            <li class="nav-item <?php active('contact')?>">
                                                <a class="nav-link tm-nav-link" href="contact">Contact</a>
                                            </li>
											<?php
											if(isset($_SESSION['uid']))
											{
											?>
											<li class="nav-item <?php active('profile')?>">
                                                <a class="nav-link tm-nav-link" href="profile">Hi.. <?php echo $_SESSION['uname'];?></a>
                                            </li>
											<li class="nav-item <?php active('user_logout')?>">
                                                <a class="nav-link tm-nav-link" href="user_logout">Logout</a>
                                            </li>
											<?php
											}
											else	
											{
											?>
											<li class="nav-item <?php active('signup')?>">
                                                <a class="nav-link tm-nav-link" href="signup">Signup</a>
                                            </li>
											<?php
											}
											?>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>