<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- swiper scc link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/> 
    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/faf8feb667.js" crossorigin="anonymous"></script>
    <!-- css style link -->
    <link rel="stylesheet" href="style.css"> 
    
</head>
<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo">Writers and Books</a>
        <div class="container">
                <form class="search-form" action="search.php" method="get">
                    <input type="text" name="query" placeholder="search ">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            <nav class="navbar">
                <a href="genres.php">Genres</a>
                <a href="about.php">About</a>
                <a href="for_authors.php">For Authors</a>
                <div id="profile-btn">
                    <a href="profile.php"><i class="fa-regular fa-circle-user"></i></a>
                </div>
            </nav>
        </div>

        <div id="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div> 
    </section>

    <!-- header section ends -->





    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 
    <!-- js script link -->
    <script src="js/script.js"></script>
</body>
</html>