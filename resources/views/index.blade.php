@extends("templates.template")
@section('contente')
    <div id="area-login">
        <div id="imgLogin">
            <img src="{{URL('assets/img/img-fundo.png')}}" alt="fundo" width="350">
        </div>
        <div id="login">
            <img src="{{URL('assets/img/logo.png')}}" alt="logo" width="130">
            <form class="formulario-login" action="./Os">
                <h1>Login</h1>
                <div class="area-input">
                    <input type="email" placeholder="Email@email.com">
                </div>
                <div class="area-input">
                    <input type="password" placeholder="Senha">
                </div>
                <button class="btn_enviar" type="submit">Enviar</button>
            </form>
        </div>
    </div>
@endsection