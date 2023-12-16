<!-- File ini berfungsi sebagai akses awal dari website -->
<?php
include 'dbconn.php';
if (isset($_SESSION['admin'])) {
  header('location:admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/apple-touch-icon.png" type="image/png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <title>
        Web - 
        <?php 
        if (!isset($_GET['page']))
        {
            echo "Beranda";
        }elseif($_GET['page'] == 'home')
        {
            echo "Beranda";
        }elseif($_GET['page'] == 'formulir')
        {
            echo "Formulir";
        }elseif($_GET['page'] == 'tabel')
        {
            echo "Tabel";
        }
        ?>
    </title>
</head>
<body>
    <header>
        <div class="container header">
            <div class="logo">
                <img src="img/header.png" alt="logo">
            </div>
            <nav>
                <ul>
                    <li>
                        <a
                        href="?page=home"
                        class="
                        <?php 
                        if (!isset($_GET['page'])) 
                        { 
                            echo "nav_active"; 
                        }elseif($_GET['page'] == 'home')
                        {
                            echo "nav_active";
                        } 
                        ?>
                        "
                        >
                        Beranda
                        </a>
                        <hr
                        class="nav 
                        <?php 
                        if (!isset($_GET['page'])) 
                        { 
                            echo "nav_active"; 
                        }elseif($_GET['page'] == 'home')
                        {
                            echo "nav_active";
                        }
                        ?>"
                        id="home"
                        >
                    </li>
                    <?php
                    if(isset($_SESSION['admin'])){
                    ?>
                    <li>
                    <a 
                    href="?page=formulir"
                    class="
                    <?php
                    if(isset($_GET['page'])){
                        if ($_GET['page'] == 'formulir')
                        { 
                            echo "active";
                        } 
                    }
                    ?>
                    "
                    >
                    Formulir
                    </a>
                    <hr
                    class="nav 
                    <?php 
                    if(isset($_GET['page'])){
                        if($_GET['page'] == 'formulir')
                        {
                            echo "nav_active";
                        }
                    }
                    ?>"
                    id="form"
                    >
                </li>
                <li>
                    <a
                    href="?page=tabel"
                    <?php 
                    if(isset($_GET['page'])){
                        if ($_GET['page'] == 'tabel') 
                        {
                            echo "class='active'";
                        }
                    }
                    ?>
                    >
                    Tabel
                    </a>
                    <hr
                    class="nav 
                    <?php 
                    if(isset($_GET['page'])){
                        if($_GET['page'] == 'tabel')
                        {
                            echo "nav_active";
                        }
                    }
                    ?>"
                    id="table"
                    >
                    </li>
                    <?php
                    }
                    
                    if (isset($_SESSION['admin'])) {
                    ?>
                    <li>
                        <a
                        href="logout.php"
                        >
                        Logout
                        </a>
                        <hr
                        class="nav"
                        id="login"
                        >
                    </li>
                    <?php
                    }else{
                    ?>
                    <li>
                        <a
                        href="login.php"
                        >
                        Login
                        </a>
                        <hr
                        class="nav"
                        id="login"
                        >
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <section class="container">
        
        <?php
          $page = @$_GET['page'];
          if (file_exists($page.'.php')) {
            include $page.'.php';
          }else {
            include 'home.php';
          }
          ?>
    </section>
    <footer class="container">
        <div class="footer">
            <div class="logo_fot">
                <img src="img/header.png" alt="Logo_fot">
            </div>
            <div class="copy_right">
                <p>&copy; UAS-Rivaldi Yonathan Nainggolan-2023 </p>
            </div>
        </div>
    </footer>
    <script src="script/script.js"></script>
</body>
</html>