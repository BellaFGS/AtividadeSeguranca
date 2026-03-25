<?php
    session_start();

?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="https://cdn.belezanaweb.com.br/image/upload/q_auto:eco,f_png,fl_progressive,dpr_1,w_32,h_32/blz/assets-store/0.0.568/images/store/47/icon" type="image/x-icon">
        <title>Login - O Boticário</title>
        <style>
            *{ margin:0; padding:0; box-sizing:border-box; font-family: DM Sans, Helvetica, Arial, sans-serif }
            body{ background:#fff; display:flex; justify-content:center; align-items:center; height:100vh; }
            
            .container{display: flex; flex-direction: column; align-items: center; justify-content: center;}
            .logo img{ margin-bottom:30px; width: 180px; }
            .card{ background:#fff; padding:2.5rem; width:440px; height:535px; border-radius:10px; border-color: #ededed; margin-bottom: 20px; }
            .card h1{ font-size:34px; margin-bottom:5px; color: #000; font-weight: 100;}
            .subtitle{ color:#000; margin-bottom:20px;}
            .forgot{ display:block; font-size:16px; color:#6d6d6d; margin-bottom:20px; text-decoration:none; border-bottom: #00a470 solid 3px; width: 150px; }
            
            .div-esqueci-senha{display: flex; align-items: center; justify-content: center;}

            input{ width:100%; padding:12px; border:1px solid #ccc; border-radius:4px; margin-bottom:10px; }
            button{ width:100%; padding:12px; border:none; border-radius:4px; font-size: 20px; cursor:pointer; transition: all 0.4s;}
            button:hover{ opacity: 0.7; transition: all 0.3s; }
            button[type="submit"]{ background:#00a470; color:white; margin-bottom:20px; font-weight: bold ;}
            button[type="submit"]:active{ opacity: 0.6; }
            
            .div-input label { color: #333333; }
            .form-control, .form-select { padding: 2px 8px; font-size: 14px; }
            .div-input input:focus {border: 2px solid #00a470; filter: drop-shadow(0px 0px 5px rgba(0, 0, 0, 0.22)); box-shadow: none;}
            .red-span { color: red; }
            .divider{ display:flex; align-items:center; margin: 25px 0; color:#888; font-size:16px; }
            .divider::before, .divider::after{ content:""; flex:1; height:2px; background:#ddd; margin:0 10px; }
            .google-btn{ background-color:#eee; color:#888888; display:flex; align-items:center; justify-content:center; gap:10px; }
            .google-btn img{ width:18px; }
            .captcha{ font-size:0.875rem; color:#777; margin-top:15px; }
            .footer{ margin-top:20px; font-size:0.875rem; color:#777; }
            .footer a { margin:0 10px; text-decoration:none; color:#999999; margin-top: 5px; }
            .footer a:hover { text-decoration:underline !important; }
        </style>
    </head>
    <body>

        <div class="container">
            <!-- <h1 class="logo">oBOTICÁRIO</h1> -->
             <div class="logo"><img src="https://cdn.belezanaweb.com.br/image/upload/f_svg,fl_progressive,q_auto:eco/blz/assets-store/0.0.568/images/store/47/logo.svg" alt=""></div>

            <div class="card">

                <h1>Olá!</h1>
                <p class="subtitle">Para continuar, digite seu e-mail</p>

                <form action="cadastro.php" method="post">
                    <div class="form-floating mb-3 div-input">
                        <input type="email" class="form-control" id="floatingInput" name="email">
                        <label for="floatingInput input">Email:<span class="red-span">*</span></label>
                    </div>
                    <div class="div-esqueci-senha">
                        <a href="#" class="forgot">Esqueci meu e-mail</a>
                    </div>

                    <button type="submit">Continuar</button>
                </form>

                <div class="divider">
                    <span>ou utilize sua conta</span>
                </div>

                <button class="google-btn">
                    <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png">
                    Google
                </button>

                <p class="captcha">
                    Protegido por reCAPTCHA – Privacidade | Condições
                </p>

            </div>

            <div class="footer">
                <a href="https://grupoboticario.com.br/privacidade">Política de privacidade</a>
                <a href="https://www.boticario.com.br/atendimento">Relacionamento com o cliente</a>
            </div>
        </div>
    </body>
</html>