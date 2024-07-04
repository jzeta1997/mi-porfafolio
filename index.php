<!DOCTYPE html>
<html lang="en"> 

<!-- Mirrored from themes.3rdwavemedia.com/instance/bs5/2.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2024 16:56:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Mi portafolio</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Portfolio Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
    <!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.js"></script>
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/flickity/flickity.min.css">
    
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">

</head> 

<body>
    
    
        
    
    
   
    	<?php
        if(isset($_GET['page'])){
          if ($_GET['page']=='projects'){
            include("projects.php");
          }else if ($_GET['page']=='resume'){
            include("resume.php");
          }else if ($_GET['page']=='contact'){
            include("contact.php");
          }else if($_GET['page']=='inicio'){
            include("inicio.php");
          }
          // else if($_GET['page']=='login'){
          //   include("sistema/inversion/login.php");
          // }
        }else{
          include("inicio.php");
        }
        // include("footer.php");
      ?> 
    
    
    
    
    <footer class="footer text-light text-center py-2">
	    <small class="copyright">Copyright &copy; <a class="text-light text-link" href="https://themes.3rdwavemedia.com/" target="_blank">Junior Zeta</a></small>
    </footer>
    
    
    
    

    
       
    <!-- Javascript -->
    <script type="text/javascript" src="assets/plugins/popper.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="assets/plugins/vanilla-back-to-top.min.js"></script>    
    
    <!-- Page Specific JS -->
    <script type="text/javascript" src="assets/plugins/flickity/flickity.pkgd.min.js"></script> 

    <!-- Custom JS -->
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/flickity-custom.js"></script>
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script type="text/javascript" src="assets/js/demo/style-switcher.js"></script>     
    

</body>

<!-- Mirrored from themes.3rdwavemedia.com/instance/bs5/2.2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2024 16:56:14 GMT -->
</html> 

