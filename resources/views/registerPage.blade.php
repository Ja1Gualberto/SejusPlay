<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="{{ asset('assets/css/styleRegister.css') }}?v={{ file_exists(public_path('assets/css/styleRegister.css')) ? filemtime(public_path('assets/css/styleRegister.css')) : time() }}">
    <title>Register</title>
</head>

<body>
    <section class="register-box">
        <div class="content">
            <a class="link-logo" href="{{Route('homePage')}}"><img src="{{asset('assets/images/logoNova.png')}}" alt="" width="50px"
                    height="50px"></a>
            <h2 class="title">Registrar-se</h2>
            <div class="form-box">
                <form action="">
                    <div class="side">
                        <div class="name-box">
                            <label for="name">
                                <input type="text" name="name" id="name" placeholder="&nbsp;">
                                <span class="label">Nome</span>
                                <span class="focus-bg"></span>
                            </label>
                        </div>
                        <div for="inp" class="email-box">
                            <label for="email">
                                <input type="email" name="email" id="email" placeholder="&nbsp;">
                                <span class="label">Email</span>
                                <span class="focus-bg"></span>
                            </label>
                        </div>
                    </div>

                    <div class="side">
                        <div class="cpf-box">
                            <label for="cpf">
                                <input type="text" name="cpf" id="cpf" placeholder="&nbsp;">
                                <span class="label">CPF</span>
                                <span class="focus-bg"></span>
                            </label>
                        </div>
                        <div class="idade-box">
                            <label for="idade">
                                <input type="number" name="idade" id="idade" placeholder="&nbsp;">
                                <span class="label">Idade</span>
                                <span class="focus-bg"></span>
                            </label>
                        </div>
                    </div>

                    <div class="side">
                        <div class="endereco-box">
                            <label for="endereco">
                                <input type="text" name="endereco" id="endereco" placeholder="&nbsp;">
                                <span class="label">Endereço</span>
                                <span class="focus-bg"></span>
                            </label>
                        </div>
                        <div class="password-box">

                            <label for="password">
                                <input type="password" name="password" id="password" placeholder="&nbsp;">
                                <span class="label">Senha</span>
                                <span class="focus-bg"></span>
                            </label>
                        </div>
                    </div>
                    <button class="submit-btn">Registrar</button>
                    <p>Já tem uma conta? <a href="{{Route('loginPage')}}">Login</a></p>
                </form>
            </div>
    </section>
    </div>
</body>

</html>
