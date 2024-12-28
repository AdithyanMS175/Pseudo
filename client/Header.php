<?php
include('SessionValidator.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="../Asset/Templates/Main/css/bootstrap.min.css" rel="stylesheet">

        <link href="../Asset/Templates/Main/css/bootstrap-icons.css" rel="stylesheet">

        <link href="../Asset/Templates/Main/css/templatemo-topic-listing.css" rel="stylesheet">      
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg"style="background-color: var(--secondary-color);">
                <div class="container">
                    <a class="navbar-brand" href="HomepageC.php">
                        <!-- <i class="bi-back"></i> -->
                        <span style="color:white">PSEUDO</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="HomepageC.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="WorkAdd.php">Add Works</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link " href="Accepted_list.php">My Works</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="Requests.php">Requests</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link" href="Rejected_list.php">Rejected List</a>
                            </li> 

                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="topics-listing.html">Topics Listing</a></li>

                                    <li><a class="dropdown-item" href="contact.html">Contact Form</a></li>
                                </ul>
                            </li> -->
                        </ul>

                        <div class="d-none d-lg-block">
                        
                            <a href="CMyprofile.php"  > <img src="../Asset/Files/Client/Photo/<?php echo $_SESSION['cph'] ?>" height="50"; width="50"; style="border-radius:50%; object-fit:cover;"/>&nbsp;<?php  echo $_SESSION['cName'] ?></a>
                         &nbsp;&nbsp;&nbsp;
                        </div>
                        <div>
                        <a href="Logout.php"><i class="bi bi-box-arrow-in-left" ></i></a>


                         </div>
                    </div>
                </div>
            </nav>

            <br><br><br><br><br><br><br><br>
            
