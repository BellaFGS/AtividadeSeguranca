<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="https://cdn.belezanaweb.com.br/image/upload/q_auto:eco,f_png,fl_progressive,dpr_1,w_32,h_32/blz/assets-store/0.0.568/images/store/47/icon" type="image/x-icon">
  <style>
    * { box-sizing: border-box; font-family: 'DM Sans', sans-serif; }
    body { margin: 0; background: #f5f5f5; display: flex; flex-direction: column; align-items: center; }

    .logo { margin: 30px 0 10px; font-size: 26px; letter-spacing: 2px; font-weight: 500;}
    .container { background: #fff; width: 380px; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
    h2 { text-align: center; font-weight: 500; margin-bottom: 20px; }
    .field { margin-bottom: 15px; }
    .field input { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 6px; outline: none; font-size: 14px; }
    .field input:focus { border-color: #00a884; }
    .password-box { border: 1px dashed #ccc; padding: 15px; border-radius: 6px; font-size: 13px; margin-top: 10px; }
    .password-box label { display: block; margin-bottom: 8px;}
    .gender { margin-top: 15px; font-size: 14px; }
    .gender-options { display: flex; gap: 20px; margin-top: 10px; }
    .gender-options label {display: flex; align-items: center; gap: 5px; cursor: pointer;}
    .footer { margin-top: 20px; text-align: center; }
    .beautybox { font-size: 22px; margin: 15px 0; }
    .checkbox { display: flex; align-items: center; gap: 8px; font-size: 13px; justify-content: flex-start; margin-top: 10px;    }
    .info { font-size: 12px; color: #555; margin-top: 15px; line-height: 1.5; }
    .info a { color: #000; text-decoration: underline; }
    .btn { margin-top: 20px; width: 100%; padding: 14px; background: #00a884; border: none; border-radius: 6px; color: #fff; font-size: 16px; cursor: pointer; }
    .btn:hover { background: #00916f; }
    .bottom-links { margin: 20px 0; font-size: 12px; color: #777; display: flex; gap: 20px; justify-content: center; }

  </style>
</head>
<body>

  <div class="logo"><img src="https://cdn.belezanaweb.com.br/image/upload/f_svg,fl_progressive,q_auto:eco/blz/assets-store/0.0.568/images/store/47/logo.svg" alt=""></div>

  <div class="container">
    <h2>Complete seu cadastro</h2>

    <div class="field">
      <input type="email" placeholder="Email*">
    </div>

    <div class="field">
      <input type="text" placeholder="Nome*">
    </div>

    <div class="field">
      <input type="text" placeholder="Sobrenome*">
    </div>

    <div class="field">
      <input type="text" placeholder="CPF*">
    </div>

    <div class="field">
      <input type="text" placeholder="Data de Nascimento*">
    </div>

    <div class="field">
      <input type="text" placeholder="Celular*">
    </div>

    <div class="field">
      <input type="password" placeholder="Senha*">
    </div>

    <div class="password-box">
      <label><input type="checkbox"> Mínimo um caractere especial</label>
      <label><input type="checkbox"> Mínimo um número</label>
      <label><input type="checkbox"> Mínimo uma letra maiúscula</label>
      <label><input type="checkbox"> Mínimo uma letra minúscula</label>
      <label><input type="checkbox"> Mínimo 6 caracteres</label>
    </div>

    <div class="gender">
      Com qual gênero você se identifica?
      <div class="gender-options">
        <label><input type="radio" name="gender"> Feminino</label>
        <label><input type="radio" name="gender"> Masculino</label>
      </div>
    </div>

    <div class="footer">
      <div class="beautybox">beautybox</div>

      <div class="checkbox">
        <input type="checkbox">
        <span>Quero participar do programa de fidelidade.</span>
      </div>

      <div class="checkbox">
        <input type="checkbox">
        <span>Quero receber comunicação, novidades, promoções, ofertas via whatsapp.</span>
      </div>

      <div class="info">
        Ao se cadastrar, você receberá comunicações por e-mail com ofertas especiais e vantagens.<br><br>
        Participando do programa de fidelidade, você irá receber ofertas especiais e vantagens pelo email do programa, aplicativo, WhatsApp e/ou SMS.<br><br>
        Veja mais em <a href="#">Política de Privacidade</a>.
      </div>

      <button class="btn">Criar Conta</button>
    </div>

  </div>

  <div class="bottom-links">
    <span>Política de privacidade</span>
    <span>Relacionamento com o cliente</span>
  </div>
<a href="index.php">Voltar</a>
</body>
</html>
