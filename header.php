<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Assets/CSS/style.css" />
    <title>WPWorld</title>
</head>

<body>   
   <!-----------------------------------Header------------------------------------------------->
   <div class="header_container">
        <nav>
            <div class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/Assets/Images/logo.png" alt="Logo">
                <span>WPWorld</span>
            </div>
            <div class="navbar">
                <a href="#">Home</a>
                <a href="#">SEO</a>
                <div class="dropdown">
                    <a href="#" class="dropdown_link">Technology
                        <i class="fa-solid fa-chevron-down fa-sm"></i>
                    </a>
                    <div class=" dropdown-content">
                            <a href="#">Features</a>
                            <a href="#">How It Works</a>
                            <a href="#">WP Pannel</a>
                            <a href="#">Free Cdn</a>
                </div>
            </div>
            <a href="#">Pricing</a>
            <a href="#">Support</a>
    </div>
    <div class="btn">
        <a href="#" class="login">Login</a>
        <a href="#" class="join">Join <i class="fa-solid fa-arrow-right"
                style="color: #ffffff; margin-left: 5px;"></i></a>

    </nav>
    </div>
    <header></header>