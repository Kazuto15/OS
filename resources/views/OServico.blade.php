@extends("templates.template")
@section('contente')
    <div id="area-registro">
        <div id="imgRegistro">
            <form action="./" class="voltar">
                <h1>Voltar</h1>
                <p>Seu problema já foi resolvido?</p>
                <p>Deseja retornar a tela de login?</p>
                <div id="botao">
                    <button type="submit" class="btn_voltar">Voltar</button>
                </div>
            </form>
        </div>
        <div class="registro">
            <h1>Registre Seu Problema:</h1>
            <form class="formulario" action="./Os1" method="POST">
                @csrf
                <div class="area-input">
                    <input type="text" name="nome" placeholder="Nome">
                </div>
                <div class="area-input">
                    <input type="text" name="cpf" placeholder="CPF">
                </div>
                <div class="area-input">
                    <input type="text" name="numero" placeholder="telefone">
                </div>
                <div class="data">
                    <label for="">Data da compra</label>    
                    <input type="date" name="data" id="date">
                </div>
                <div class="area-input" id="select">
                    <div>
                        <label for="">Modelo</label>
                        <select name="modelo" id="md">
                            <option value="----">----</option>
                            <option value="celular">Celular</option>
                            <option value="notebook">Notebook</option>
                            <option value="smartwatch">SmartWatch</option>    
                            <option value="tablets">Tablet</option>
                        </Select>
                    </div>
                    <div>
                        <label for="">Marca</label>
                        <select name="marca" id="mc">
                            <option value="----">----</option>
                            <option value="iphone">Iphone</option>
                            <option value="lg">LG</option>
                            <option value="motorola">Motorola</option>
                            <option value="samsung">Samsung</option>
                            <option value="xiomi">Xiomi</option>
                        </select> 
                    </div>
                    
                </div>
                <div class="area-input" id="defeito">
                    <input class="area-input" type="text" name="defeito" placeholder="Defeito">
                </div>
                <button class="btn_enviar" type="submit">Registrar-se</button>
            </form>
        </div>
    </div>
@endsection