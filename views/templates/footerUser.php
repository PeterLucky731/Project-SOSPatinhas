<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        footer{
            text-align: center;
            padding: 3px;
            background-color: rgb(68, 128, 63);
            color: white;
        }
        .footer-links{
            display: flex;
            flex-direction: column; 
            margin-bottom: 10px;
            align-items: center;    
        }
        .footer-links a{
            text-decoration: none;
            color: white;
            width: max-content;
            padding-bottom: 5px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .footer-links-img a, .footer-logo img{
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        .footer-links-img a{
            display: inline-block;
            margin-right: 10px;
            text-decoration: none;
        }
        .footer-links-img a:last-child{
            margin-right: 0;
        }
        .footer-links-bottom a{
            text-decoration: none;
            color: white;
            display: inline-block;
            margin-right: 40px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }
        .footer-links-bottom a:last-child{
            margin-right: 0;
        }
    </style>
</head>
<body>
    <footer>
        <a class="footer-logo" href="./paginaInicio.php">
            <img src="../images/Logo_Footer.png" width="201" height="111" alt="">
        </a>
        <ul class="footer-links">
            <a href="./blog.php">Blog</a>
            <a href="./quemSomos.php">Quem Somos</a>
            <a href="./comoAjudar.php">Como Ajudar</a>
            <a href="./eventos.php">Eventos</a>
            <a href="./adocao.php">Adoção</a>
        </ul>  

        <ul class="footer-links-img">
            <a href="#">
            <img src="../images/facebook_branco.png" alt="" width="25">
            </a>
            <a href="#">
                <img src="../images/instagram_branco.png" alt="" width="25">
            </a>
        </ul>
        
        <ul class="footer-links-bottom">
            <a href="#">Acessibilidade</a>
            <a href="#">Política de Privacidade</a>
            <a href="#">Termos e Condições</a>
        </ul>
            
    </footer>
</body>
</html>