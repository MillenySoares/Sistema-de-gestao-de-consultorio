<?php
    include("../includes/cabecalho.php");
    session_start();
?>
<section class="container-fluid">
    <div class="row bg-header height">
        <div class="col-12">
            <div class="row mt-5">
                <div class="col-4 text-white text-center title">CONSULTÓRIO</div>
                <div class="col-2 text-center links-menu"><a class="text-white" href="cadastro.php">Cadastro</a></div>
                <div class="col-2 text-center links-menu"><a class="text-white" href="login.php">Login</a></div>
                <div class="col-2 text-center links-menu"><a class="text-white" href="#">Sobre</a></div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid menu">
    <div class="row">
        <div class="col-4 shadow p-3 mb-5 bg-white box-shadow-login text-center"> 
            <div class="text-center cadastro">Bem-Vindo!</div>
            <form class="mr-4 mt-2 " method="POST" action="verificar_login.php">
                <input class="input" type="text" name="email" value="" placeholder="email"/>
                <input class="input" type="text" name="senha" value="" placeholder="senha"/> <br>
                <input type="submit" class="btn button" value="logar"/> 
            </form>
        </div>
    </div>
</section>
<?php
    include("../includes/rodape.php");
?>
