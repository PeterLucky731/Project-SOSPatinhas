<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/navbarUserStyle.css">
    <style>
        nav{
            background-color: white;
            position: sticky;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .navbar-logo{
            padding: 10px 10px;
        }
        .nav-links a{
            text-decoration: none;
            color: black;
            padding: 8px 16px;
            margin-left: 5rem;
            font-family: 'Inter', sans-serif;
            font-weight: 550;
        }
        .nav-links a:hover, .nav-links a:active{
            border-bottom: solid #C6E1C4;
        }
    </style>
</head>
<body>
<nav class="navbar">
        <a class="navbar-logo" href="./paginaInicio.php">
            <img src="../images/Logo_Navbar.png" width="50" height="50" class="d-inline-block align-top" alt="">
        </a>

        <ul class="nav-links">.
            <a class="link-navbar" href="./blog.php">Blog</a>
            <a class="link-navbar" href="./quemSomos.php">Quem Somos</a>
            <a class="link-navbar" href="./comoAjudar.php">Como Ajudar</a>
            <a class="link-navbar" href="./eventos.php">Eventos</a>
            <a class="link-navbar" href="./adocao.php">Adoção</a>
        </ul>
        
        <a class="navbar-logo" href="#">
            <img src="../images/Icon_Login.png" width="48" height="48" alt="">
        </a>
    </nav>
</body>
</html>