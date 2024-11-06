<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/adocao.css">
</head>
<body>
    <?php include ('../templates/navbarUser.php') ?>
    

    <section class="corpo container" >

        <section class="top-texts">
            <h1>Adote um melhor amigo!</h1>
            <p>Adotar um animal salva vidas e traz alegria. Muitos cães e gatos esperam por um lar. Ao adotar, você ganha um amigo fiel e combate o abandono. Adote e transforme vidas!</p>
        </section>
        
    
        <section class="filter">
            <form method="get" class="form-filter">
                <select name="tipo-filter" id="tipo-filter">
                    <option value="Selecionar">-- Selecionar --</option>
                    <option value="Cachorro">Cachorro</option>
                    <option value="Gato">Gato</option>
                    <option value="Passaro">Pássaro</option>
                    <option value="Roedor">Roedor</option>
                </select>
                <input type="submit" value="Filtrar" class="filter-button">
            </form>
        </section>
        

        <div class="card-container">
            <?php
                $servidor = 'localhost';
                $usuario = 'root';
                $senha = '';
                $banco_de_dados = 'SOS_Patinhas';
                $conexao = mysqli_connect($servidor,$usuario,$senha,$banco_de_dados);
                
                if(isset($_GET['tipo-filter']) && $_GET['tipo-filter'] != "Selecionar" ){
                    $tipoFilter = $_GET['tipo-filter'];
                    $selectAnimal = $conexao->query("select * from animal where tipo = '$tipoFilter'");
                    $rowAnimal = $selectAnimal->fetch_all(MYSQLI_ASSOC);
                    foreach ($rowAnimal as $animal){
                        include ('../templates/animalCard.php');
                    };
                }else if(!isset($_GET['tipo-filter']) || ($_GET['tipo-filter'] == "Selecionar")){
                    $selectAnimal = $conexao->query('select * from animal');
                    $rowAnimal = $selectAnimal->fetch_all(MYSQLI_ASSOC);
                    foreach ($rowAnimal as $animal){
                        include ('../templates/animalCard.php');
                    };
                }

                $conexao->close();
            ?>
        </div>

    </section>
    <?php include ('../templates/footerUser.php') ?>
</body>
</html>