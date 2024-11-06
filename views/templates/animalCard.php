<div class="card-animal">
    <div class="front-card">
        
        <img src="../images/destaque-gata-tricolor.webp" alt="">
        
        <h1 class="nome"><?= $animal['nome']?></h1class>
    </div>
    <div class="back-card">
        <header class="header-card">
            <p><?= $animal['tipo']?></p>
            <p><?= $animal['sexo']?></p>
            <p><?= $animal['idade']?> anos</p>
            <p>Porte <?= $animal['porte']?></p>
            <p><?= $animal['raca']?></p>
        </header>
        <button class="button-card">
            <a href="#">Adotar!</a>
        </button>
    </div>
</div>
