<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Admin Portal</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
  <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
  <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body> 

<section class="menu cid-sftlajt1QI" once="menu" id="menu1-1o">    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-7" href="https://mobiri.se">Mail DELIVERY</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black text-primary display-4" href="userportal.php">
                            User portal
                        </a>
                    </li>
                </ul>
                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-warning display-4" href="logout.php">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

</section>

<section class="info3 cid-sftla2RUso" id="info3-1h">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(230, 198, 59);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <h4 class="card-title mbr-fonts-style align-center mb-4 display-1">
                            <strong>Admin Portal</strong></h4>
                        
                        <div class="mbr-section-btn mt-3"><a class="btn btn-white display-4" href="adminportal.html#form5-1p">Add mail to be sent</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php 

require_once 'connect.php'; 

echo "<div class='container'>"; 

if( isset($_POST['delete'])){
    $sql = "DELETE FROM client WHERE client_id=" . $_POST['client_id']; 
    if($con->query($sql) === TRUE){ 
        echo "<div class='alert alert-success'>Successfully delete user</div>";
    }
} 

$sql = "SELECT * FROM client";

$result = $con->query($sql); 

if( $result->num_rows > 0){
?> 
<h2>List of all Users</h2> 
<table class="table table-bordered table-striped"> 
    <tr> 
        <td>Firstname</td> 
        <td>Lastname</td> 
        <td>Address</td> 
        <td width="70px">Delete</td> 
        <td width="70px">EDIT</td> 
    </tr> 

    <?php 
    while( $row = $result->fetch_assoc()){ 
        echo "<form action='' method='POST'>"; //added 
        echo "<tr>"; 
        echo "<td>".$row['client_fname'] . "</td>"; 
        echo "<td>".$row['client_lname'] . "</td>"; 
        echo "<td>".$row['client_address'] . "</td>";  
        echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>"; 
        echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>Edit</a></td>"; 
        echo "</tr>"; 
        echo "</form>"; //added
    } 
    ?> 
</table> 

<?php} else{ echo "<br><br>No Record Found";} ?> 
</div>




<section class="pricing2 cid-sftla4hMGE" id="pricing2-1i">
    

    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 align-center col-lg-3">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-7">
                            <strong>All mail</strong></h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-1"><strong>19</strong></p>
                            <p class="price-term mbr-fonts-style mb-3 display-7"></p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7"></ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-center col-lg-3">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-7"><strong>Sent mail</strong></h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-1"><strong>19</strong></p>
                            <p class="price-term mbr-fonts-style mb-3 display-7"></p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                <li class="list-group-item"><br></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-center col-lg-3">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-7">
                            <strong>Mail on the way</strong></h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-1"><strong>399</strong></p>
                            <p class="price-term mbr-fonts-style mb-3 display-7"></p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                <li class="list-group-item"><br></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-center col-lg-3">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-7">
                            <strong>Undelivered mail</strong></h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-1"><strong>0</strong></p>
                            <p class="price-term mbr-fonts-style mb-3 display-7"></p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                <li class="list-group-item"><br></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="header12 cid-sftla6Cx4B" id="header12-1j">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-12 col-lg-9">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <h1 class="card-title mbr-fonts-style mb-3 display-1">
                            <strong>Create Site Now</strong></h1>
                        <p class="mbr-text mbr-fonts-style display-7">Click any text to edit or style it. Select
                            text to insert a link. Click blue "Gear" icon in the top right corner to hide/show buttons,
                            text, title and change the block background. Click red "+" in the bottom right corner to add
                            a new block. Use the top left menu to create new pages, sites and add themes.</p>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="header12 cid-sftla8qKTN" id="header12-1k">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-12 col-lg-9">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <h1 class="card-title mbr-fonts-style mb-3 display-1">
                            <strong>Create Site Now</strong></h1>
                        <p class="mbr-text mbr-fonts-style display-7">Click any text to edit or style it. Select
                            text to insert a link. Click blue "Gear" icon in the top right corner to hide/show buttons,
                            text, title and change the block background. Click red "+" in the bottom right corner to add
                            a new block. Use the top left menu to create new pages, sites and add themes.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="header12 cid-sftlaauN2O" id="header12-1l">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-12 col-lg-9">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <h1 class="card-title mbr-fonts-style mb-3 display-1">
                            <strong>Create Site Now</strong></h1>
                        <p class="mbr-text mbr-fonts-style display-7">Click any text to edit or style it. Select
                            text to insert a link. Click blue "Gear" icon in the top right corner to hide/show buttons,
                            text, title and change the block background. Click red "+" in the bottom right corner to add
                            a new block. Use the top left menu to create new pages, sites and add themes.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="header12 cid-sftlacYdPA" id="header12-1m">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-12 col-lg-9">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <h1 class="card-title mbr-fonts-style mb-3 display-1">
                            <strong>Create Site Now</strong></h1>
                        <p class="mbr-text mbr-fonts-style display-7">Click any text to edit or style it. Select
                            text to insert a link. Click blue "Gear" icon in the top right corner to hide/show buttons,
                            text, title and change the block background. Click red "+" in the bottom right corner to add
                            a new block. Use the top left menu to create new pages, sites and add themes.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form5 cid-sftm8cbl5U" id="form5-1p">
    
    
    <div class="container-fluid">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Add mail to be sent</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="MT4TzPfQClbfrFrVXki6lk3+mzV3joF2g5KlDyfCVRPLAzbBNzHdAGFmyy0reAFGpH2acZ9S9onLWfyv/xdy7SdJ719yvLersNY72jN9U6iPuuo1Ncfi4e6TrhX9kXw4">
                    <div class="">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out
                            the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-1p">
                        </div>
                        <div class="col-md col-sm-12 form-group" data-for="email">
                            <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-1p">
                        </div>
                        <div class="col-12 form-group" data-for="url">
                            <input type="url" name="url" placeholder="Your Site" data-form-field="url" class="form-control" value="" id="url-form5-1p">
                        </div>
                        <div class="col-12 form-group" data-for="textarea">
                            <textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-form5-1p"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <button type="submit" class="btn btn-primary display-4">Send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="footer3 cid-sftlafwAed" once="footers" id="footer3-1n">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7"><a href="https://mobirise.com/help/" class="text-primary">Help Center</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="http://forums.mobirise.com/" class="text-primary">Mobirise Forums</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="https://mobirise.com/" class="text-primary">Mobirise.com</a></li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" style="color: rgb(68, 121, 217); fill: rgb(68, 121, 217);"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(34, 165, 229); fill: rgb(34, 165, 229);"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon" style="color: rgb(228, 63, 63); fill: rgb(228, 63, 63);"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" style="color: rgb(255, 153, 102); fill: rgb(255, 153, 102);"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2020 Group 7 BIST Evening Yr 2 Sem2. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/m" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Develop your own site with <a href="https://mobirise.site/z" style="color:#aaa;">Mobirise</a></p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/formstyler/jquery.formstyler.js"></script>  <script src="assets/formstyler/jquery.formstyler.min.js"></script>  <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
</body>
</html>