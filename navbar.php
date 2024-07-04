<div class="top-bar theme-bg-primary-darken">
            
            <div class="container-fluid">
            
				<nav class="navbar navbar-expand-lg navbar-dark position-relative">
					
					
					<ul class="social-list list-inline mb-0">
			            <!-- <li class="list-inline-item"><a class="text-white" href="#"><i class="fab fa-twitter fa-fw"></i></a></li> -->
		                <li class="list-inline-item"><a class="text-white" href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
		                <li class="list-inline-item"><a class="text-white" href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
		                <!-- <li class="list-inline-item"><a class="text-white" href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li> -->
		                <!-- <li class="list-inline-item"><a class="text-white" href="#"><i class="fab fa-codepen fa-fw"></i></a></li> -->
		            </ul><!--//social-list-->
					
	
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse text-uppercase" id="navigation">
						<ul class="navbar-nav ms-lg-auto">
							<li class="nav-item me-lg-3">
								<?php
									$inicio="";
									$projects="";
									$contact="";
									$resume="";
									if(isset($_GET['page'])){
							          	if ($_GET['page']=='projects'){
							            	$projects="active";
							          	}else if ($_GET['page']=='resume'){
							            	$resume="active";
							          	}else if ($_GET['page']=='contact'){
							            	$contact="active";
							          	}else if($_GET['page']=='inicio'){
							            	$inicio="active";
							          	}

							        }else{
							          	$inicio="active";
							        } 
								?>
							    <a class="nav-link <?php echo $inicio; ?>" href="index.php">Acerca de <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item me-lg-3">
							   <a class="nav-link <?php echo $projects; ?>" href="?page=projects">Proyectos</a>
							</li>
							<li class="nav-item me-lg-3">
							    <a class="nav-link <?php echo $resume; ?>" href="?page=resume">Resume</a>
							</li>
							<li class="nav-item me-lg-3">
							    <a class="nav-link <?php echo $contact; ?>" href="?page=contact">Contacto</a>
							</li>
							
							
						</ul>
						<span id="slide-line"></span>
					</div>

					
				</nav>
            
            </div><!--//container-->
            
        </div><!--//top-bar-->