<section class="container-fluid">
    <div class="row bg-header height">
        <div class="col-12">
            <div class="row mt-5">
                <div class="col-4 text-white text-center title">CONSULTÓRIO</div>
                <div class="col-2 text-center links-menu"><a class="text-white" href="pageCadastro.php">Cadastro</a></div>
                <div class="col-2 text-center links-menu"><a class="text-white" href="#">Login</a></div>
                <div class="col-2 text-center links-menu"><a class="text-white" href="#">Sobre</a></div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid menu">
    <div class="row">
        <div class="col-4 shadow p-3 mb-5 bg-white box-shadow text-center"> 
            <div class="text-center cadastro">CADASTRA-SE</div>
            <form class="mr-4 mt-2 " method="POST" action="../add/addCliente.php">
                <input class="input" type="text" name="tarefa" value="" placeholder="nome completo"/>
                <input class="input" type="text" name="tarefa" value="" placeholder="CPF"/>
                <input class="input" type="text" name="tarefa" value="" placeholder="data de nascimento"/>
                <input class="input" type="text" name="tarefa" value="" placeholder="telefone"/>
                <input class="input" type="text" name="tarefa" value="" placeholder="email"/>
                <input class="input" type="text" name="tarefa" value="" placeholder="senha"/> <br>
                <button class="btn button"> Criar</button>
            </form>
        </div>
    </div>
</section>