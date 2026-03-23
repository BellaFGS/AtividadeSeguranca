<?
  session_start();
  $email = $_POST['email'];
?>
<!DOCTYPE html>
  <html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="shortcut icon" href="https://cdn.belezanaweb.com.br/image/upload/q_auto:eco,f_png,fl_progressive,dpr_1,w_32,h_32/blz/assets-store/0.0.568/images/store/47/icon" type="image/x-icon">
    <style>
      * { box-sizing: border-box; font-family: 'DM Sans', sans-serif; }
      body { margin: 0; background: #f5f5f5; display: flex; flex-direction: column; align-items: center; }

      .logo img{ margin-bottom:30px; width: 180px; }
      .container { background: #fff; width: 380px; padding: 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
      h2 { text-align: center; font-weight: 500; margin-bottom: 20px; }
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
      input{ width:100%; padding:12px; border:1px solid #ccc; border-radius:4px; margin-bottom:10px; }
      button{ width:100%; padding:12px; border:none; border-radius:4px; font-size: 20px; cursor:pointer; transition: all 0.4s;}
      button:hover{ opacity: 0.7; transition: all 0.3s; }
      button[type="submit"]{ background:#00a470; color:white; margin-bottom:20px; font-weight: bold;}
      button[type="submit"]:active{ opacity: 0.6; }
      div-input input:focus {border: 2px solid #00a470; filter: drop-shadow(0px 0px 5px rgba(0, 0, 0, 0.22)); box-shadow: none;}
      .red-span { color: red; }
      .div-input label { color: #333333; }
      .bottom-links { margin: 20px 0; font-size: 12px; color: #777; display: flex; gap: 20px; justify-content: center; }

    </style>
  </head>
  <body>

    <div class="logo"><img src="https://cdn.belezanaweb.com.br/image/upload/f_svg,fl_progressive,q_auto:eco/blz/assets-store/0.0.568/images/store/47/logo.svg" alt=""></div>

    <div class="container">
      <h2>Complete seu cadastro</h2>

      <div class="postEmail">
        <div><svg xmlns="http://www.w3.org/2000/svg" focusable="false" viewBox="0 0 24 24" aria-hidden="true" class="flora--c-PJLV flora--c-PJLV-ibvFOCl-css"><path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM6.945 18.5156C7.48757 17.6671 8.23501 16.9688 9.11843 16.4851C10.0019 16.0013 10.9928 15.7478 12 15.7478C13.0072 15.7478 13.9982 16.0013 14.8816 16.4851C15.765 16.9688 16.5124 17.6671 17.055 18.5156C15.6097 19.6397 13.831 20.2499 12 20.2499C10.169 20.2499 8.39032 19.6397 6.945 18.5156ZM9 11.25C9 10.6567 9.17595 10.0766 9.5056 9.58329C9.83524 9.08994 10.3038 8.70542 10.852 8.47836C11.4001 8.2513 12.0033 8.19189 12.5853 8.30764C13.1672 8.4234 13.7018 8.70912 14.1213 9.12868C14.5409 9.54824 14.8266 10.0828 14.9424 10.6647C15.0581 11.2467 14.9987 11.8499 14.7716 12.3981C14.5446 12.9462 14.1601 13.4148 13.6667 13.7444C13.1734 14.0741 12.5933 14.25 12 14.25C11.2044 14.25 10.4413 13.9339 9.87868 13.3713C9.31607 12.8087 9 12.0456 9 11.25ZM18.165 17.4759C17.3285 16.2638 16.1524 15.3261 14.7844 14.7806C15.5192 14.2019 16.0554 13.4085 16.3184 12.5108C16.5815 11.6132 16.5582 10.6559 16.252 9.77207C15.9457 8.88825 15.3716 8.12183 14.6096 7.5794C13.8475 7.03696 12.9354 6.74548 12 6.74548C11.0646 6.74548 10.1525 7.03696 9.39044 7.5794C8.62839 8.12183 8.05432 8.88825 7.74805 9.77207C7.44179 10.6559 7.41855 11.6132 7.68157 12.5108C7.94459 13.4085 8.4808 14.2019 9.21563 14.7806C7.84765 15.3261 6.67147 16.2638 5.835 17.4759C4.77804 16.2873 4.0872 14.8185 3.84567 13.2464C3.60415 11.6743 3.82224 10.0658 4.47368 8.61478C5.12512 7.16372 6.18213 5.93192 7.51745 5.06769C8.85276 4.20346 10.4094 3.74367 12 3.74367C13.5906 3.74367 15.1473 4.20346 16.4826 5.06769C17.8179 5.93192 18.8749 7.16372 19.5263 8.61478C20.1778 10.0658 20.3959 11.6743 20.1543 13.2464C19.9128 14.8185 19.222 16.2873 18.165 17.4759Z"></path></svg></div><!--Icone-->
        <div>
          <p>Email:<span>*</span></p>
          <label><?echo($email);?></label>
        </div>
        <div class="closeButtton">X</div>
      </div>

      <div class="form-floating mb-3 div-input">
        <input type="text" class="form-control" id="floatingInput" placeholder="a">
        <label for="floatingInput">Nome:<span class="red-span">*</span></label>
      </div>
      <div class="form-floating mb-3 div-input">
        <input type="text" class="form-control" id="floatingInput" placeholder="a">
        <label for="floatingInput">Sobrenome:<span class="red-span">*</span></label>
      </div>
      <div class="form-floating mb-3 div-input">
        <input type="text" class="form-control" id="floatingInput" placeholder="a">
        <label for="floatingInput">CPF:<span class="red-span">*</span></label>
      </div>
      <div class="form-floating mb-3 div-input">
        <input type="text" class="form-control" id="floatingInput" placeholder="a">
        <label for="floatingInput">Data de Nascimento:<span class="red-span">*</span></label>
      </div>
      <div class="form-floating mb-3 div-input">
        <input type="text" class="form-control" id="floatingInput" placeholder="a">
        <label for="floatingInput">Celular:<span class="red-span">*</span></label>
      </div>
      <div class="form-floating mb-3 div-input">
        <input type="password" class="form-control" id="floatingInput" placeholder="a">
        <label for="floatingInput">Senha:<span class="red-span">*</span></label>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>
