<?php
session_start();
$email = $_POST['email'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Criar Conta | C</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon"
    href="https://cdn.belezanaweb.com.br/image/upload/q_auto:eco,f_png,fl_progressive,dpr_1,w_32,h_32/blz/assets-store/0.0.568/images/store/47/icon"
    type="image/x-icon">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'DM Sans', sans-serif;
    }

    body {
      margin: 0;
      background: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .logo img {
      margin-bottom: 35px;
      width: 220px;
      padding-top: 2rem;
    }

    .container {
      background: #fff;
      width: 440px;
      padding: 25px;
      border-radius: 8px;
      border: 1px solid #e8e8e8;
    }

    h2 {
      text-align: left;
      font-weight: 500;
      margin-bottom: 20px;
      font-size: 1.4rem;
    }

    .password-box {
      border: 1px dashed #ccc;
      padding: 15px;
      border-radius: 6px;
      font-size: 13px;
      margin-top: 10px;
    }

    .password-box label {
      display: block;
      margin-bottom: 8px;
    }

    .gender {
      margin-top: 15px;
      font-size: 14px;
    }

    .gender-options {
      display: flex;
      gap: 20px;
      margin-top: 10px;
    }

    .gender-options label {
      display: flex;
      align-items: center;
      gap: 5px;
      cursor: pointer;
    }

    .footer {
      margin-top: 20px;
      text-align: center;
    }

    .checkbox {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 13px;
      justify-content: flex-start;
      margin-top: 10px;
    }

    .info {
      font-size: 12px;
      color: #555;
      margin-top: 15px;
      line-height: 1.5;
    }

    .info a {
      color: #000;
      text-decoration: underline;
    }

    input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 4px;
      font-size: 20px;
      cursor: pointer;
      transition: all 0.4s;
    }

    button:hover {
      opacity: 0.7;
      transition: all 0.3s;
    }

    button[type="submit"] {
      background: #00a470;
      color: white;
      margin-bottom: 20px;
      font-weight: bold;
    }

    button[type="submit"]:active {
      opacity: 0.6;
    }

    div-input input:focus {
      border: 2px solid #00a470;
      filter: drop-shadow(0px 0px 5px rgba(0, 0, 0, 0.22));
      box-shadow: none;
    }

    .red-span {
      color: red;
    }

    .div-input label {
      color: #333333;
    }

    .div-input input:focus {
      border: 2px solid #00a470;
      filter: drop-shadow(0px 0px 5px rgba(0, 0, 0, 0.22));
      box-shadow: none;
    }

    .bottom-links {
      margin: 20px 0;
      font-size: 12px;
      color: #777;
      display: flex;
      gap: 20px;
      justify-content: center;
    }

    .postEmail {
      background-color: #c2c2c2;
      border-radius: 5px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
      color: #656565;
      border: 1px solid #000
    }

    .postEmail div {
      display: flex;
      align-items: left;
      justify-content: left;
      margin-left: 5px;
    }

    .postEmail div div {
      display: flex;
      flex-direction: column;
    }

    .postEmail button {
      background-color: transparent;
      transition: all 0.3s;
    }

    .postEmail button:hover {
      background-color: #a3b7b1;
      opacity: 0.5;
    }

    .postEmail div div svg {
      width: 25px;
      margin-top: 10px;
      opacity: 0.5;
    }

    .postEmail div div p {
      margin: 0px;
      font-size: 14px;
    }

    .postEmail div div p span {
      color: red;
    }

    /* Box de Requisitos da Senha */
    .password-requirements {
      border: 1px dashed #ccc;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 25px;
      background-color: #fff;
    }

    .gender-title {
      font-size: 14px;
      margin-bottom: 12px;
      color: #333;
    }

    .gender-options {
      display: flex;
      gap: 30px;
      margin-bottom: 30px;
    }

    .gender-options label {
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
      font-size: 14px;
    }

    .gender-options input[type="radio"] {
      appearance: none;
      width: 20px;
      height: 20px;
      border: 2px solid #00a470;
      border-radius: 50%;
      outline: none;
      cursor: pointer;
    }

    .gender-options input[type="radio"]:checked {
      background-color: #fff;
      border-width: 6px;
    }

    /* Estilo dos Checkboxes Verdes */
    .beautybox-frame input[type="checkbox"],
    .opt-in-whatsapp input[type="checkbox"] {
      width: 20px;
      height: 20px;
      border: 2px solid #00a470;
      appearance: none;
      border-radius: 4px;
      flex-shrink: 0;
      cursor: pointer;
      background-color: #fff;
    }

    .beautybox-frame input:checked,
    .opt-in-whatsapp input:checked {
      background-color: #00a470;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
    }

    .opt-in-whatsapp {
      display: flex;
      gap: 12px;
      font-size: 13px;
      margin-bottom: 25px;
      padding: 0 5px;
    }

    .disclaimer {
      font-size: 12px;
      color: #333;
      line-height: 1.6;
      margin-bottom: 30px;
      padding: 0 5px;
    }

    .disclaimer a {
      color: #333;
      text-decoration: underline;
      font-weight: 500;
    }

    .bottom-links {
      display: flex;
      justify-content: center;
      gap: 20px;
      font-size: 14px;
      color: #999999;
      margin-top: 70px;
    }

    .btn {
      background-color: #00A470;
      color: #fff;
      font-size: 18px;
      font-weight: bold;
      transition: all 0.3s;
    }
    .btn:hover {background-color: #00A470 !important; opacity: 0.6; color: #fff !important;}

    .beautybox-frame {
      border: 1px solid #e8e8e8;
      border-radius: 8px;
      padding: 25px 15px 18px;
      position: relative;
      margin: 40px 0 20px;
    }

    .brand-divider-label {
      position: absolute;
      top: -19px;
      left: 50%;
      transform: translateX(-50%);
      background: #fff;
      padding: 0 15px;
      font-size: 26px;
      font-weight: bold;
      letter-spacing: -1px;
      color: #000;
      display: flex;
      align-items: flex-start;
    }

    .password-toggle-icon {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      z-index: 10;
    }

    .requirement-item {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 13px;
      color: #333;
      margin-bottom: 8px;
      transition: all 0.3s ease;
    }

    .requirement-item input[type="checkbox"] {
      width: 18px;
      height: 18px;
      border: 1px solid #ccc;
      appearance: none;
      -webkit-appearance: none;
      border-radius: 3px;
      background-color: #fff;
      position: relative;
      cursor: default;
    }

    .requirement-item.met {
      color: #00a470 !important;
      font-weight: 500;
    }

    .requirement-item.met input[type="checkbox"] {
      background-color: #00a470 !important;
      border-color: #00a470 !important;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
      background-size: 100% 100%;
    }

    .closeButtton{padding: 10px; transition: all 0.3s;}
    .closeButtton:hover{background-color: #a3b7b1;}
  </style>
</head>

<body>

  <div class="logo"><img
      src="https://cdn.belezanaweb.com.br/image/upload/f_svg,fl_progressive,q_auto:eco/blz/assets-store/0.0.568/images/store/47/logo.svg"
      alt=""></div>

  <div class="container">
    <h2>Complete seu cadastro</h2>

    <div class="postEmail">
      <div>
        <div><svg xmlns="http://www.w3.org/2000/svg" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
            class="flora--c-PJLV flora--c-PJLV-ibvFOCl-css">
            <path
              d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM6.945 18.5156C7.48757 17.6671 8.23501 16.9688 9.11843 16.4851C10.0019 16.0013 10.9928 15.7478 12 15.7478C13.0072 15.7478 13.9982 16.0013 14.8816 16.4851C15.765 16.9688 16.5124 17.6671 17.055 18.5156C15.6097 19.6397 13.831 20.2499 12 20.2499C10.169 20.2499 8.39032 19.6397 6.945 18.5156ZM9 11.25C9 10.6567 9.17595 10.0766 9.5056 9.58329C9.83524 9.08994 10.3038 8.70542 10.852 8.47836C11.4001 8.2513 12.0033 8.19189 12.5853 8.30764C13.1672 8.4234 13.7018 8.70912 14.1213 9.12868C14.5409 9.54824 14.8266 10.0828 14.9424 10.6647C15.0581 11.2467 14.9987 11.8499 14.7716 12.3981C14.5446 12.9462 14.1601 13.4148 13.6667 13.7444C13.1734 14.0741 12.5933 14.25 12 14.25C11.2044 14.25 10.4413 13.9339 9.87868 13.3713C9.31607 12.8087 9 12.0456 9 11.25ZM18.165 17.4759C17.3285 16.2638 16.1524 15.3261 14.7844 14.7806C15.5192 14.2019 16.0554 13.4085 16.3184 12.5108C16.5815 11.6132 16.5582 10.6559 16.252 9.77207C15.9457 8.88825 15.3716 8.12183 14.6096 7.5794C13.8475 7.03696 12.9354 6.74548 12 6.74548C11.0646 6.74548 10.1525 7.03696 9.39044 7.5794C8.62839 8.12183 8.05432 8.88825 7.74805 9.77207C7.44179 10.6559 7.41855 11.6132 7.68157 12.5108C7.94459 13.4085 8.4808 14.2019 9.21563 14.7806C7.84765 15.3261 6.67147 16.2638 5.835 17.4759C4.77804 16.2873 4.0872 14.8185 3.84567 13.2464C3.60415 11.6743 3.82224 10.0658 4.47368 8.61478C5.12512 7.16372 6.18213 5.93192 7.51745 5.06769C8.85276 4.20346 10.4094 3.74367 12 3.74367C13.5906 3.74367 15.1473 4.20346 16.4826 5.06769C17.8179 5.93192 18.8749 7.16372 19.5263 8.61478C20.1778 10.0658 20.3959 11.6743 20.1543 13.2464C19.9128 14.8185 19.222 16.2873 18.165 17.4759Z">
            </path>
          </svg></div>
        <div>
          <p>Email:<span>*</span></p>
          <p><?php echo $email; ?></p>
        </div>
      </div>
      <div class="closeButtton">
        <a href="index.php">
          <svg style="width: 25px;" xmlns="http://www.w3.org/2000/svg" focusable="false" viewBox="0 0 24 24"
            aria-hidden="true" class="flora--c-PJLV flora--c-PJLV-ibvFOCl-css">
            <path
              d="M19.2806 18.2198C19.3502 18.2895 19.4055 18.3722 19.4432 18.4632C19.4809 18.5543 19.5003 18.6519 19.5003 18.7504C19.5003 18.849 19.4809 18.9465 19.4432 19.0376C19.4055 19.1286 19.3502 19.2114 19.2806 19.281C19.2109 19.3507 19.1281 19.406 19.0371 19.4437C18.9461 19.4814 18.8485 19.5008 18.7499 19.5008C18.6514 19.5008 18.5538 19.4814 18.4628 19.4437C18.3717 19.406 18.289 19.3507 18.2193 19.281L11.9999 13.0607L5.78055 19.281C5.63982 19.4218 5.44895 19.5008 5.24993 19.5008C5.05091 19.5008 4.86003 19.4218 4.7193 19.281C4.57857 19.1403 4.49951 18.9494 4.49951 18.7504C4.49951 18.5514 4.57857 18.3605 4.7193 18.2198L10.9396 12.0004L4.7193 5.78104C4.57857 5.64031 4.49951 5.44944 4.49951 5.25042C4.49951 5.05139 4.57857 4.86052 4.7193 4.71979C4.86003 4.57906 5.05091 4.5 5.24993 4.5C5.44895 4.5 5.63982 4.57906 5.78055 4.71979L11.9999 10.9401L18.2193 4.71979C18.36 4.57906 18.5509 4.5 18.7499 4.5C18.949 4.5 19.1398 4.57906 19.2806 4.71979C19.4213 4.86052 19.5003 5.05139 19.5003 5.25042C19.5003 5.44944 19.4213 5.64031 19.2806 5.78104L13.0602 12.0004L19.2806 18.2198Z">
            </path>
          </svg>
        </a>
      </div>
    </div>

    <form action="back.php" method="post">
      <div class="form-floating mb-3 div-input">
        <input type="text" class="form-control" id="nome" name="nome" placeholder="a">
        <label for="nome">Nome:<span class="red-span">*</span></label>
      </div>
      <div class="form-floating mb-3 div-input">
        <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="a">
        <label for="sobrenome">Sobrenome:<span class="red-span">*</span></label>
      </div>
      <div class="form-floating mb-3 div-input">
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="a">
        <label for="cpf">CPF:<span class="red-span">*</span></label>
      </div>
      <div class="form-floating mb-3 div-input">
        <input type="text" class="form-control" id="nascimento" name="data_nascimento" placeholder="a" maxlength="10">
        <label for="nascimento">Data de Nascimento:<span class="red-span">*</span></label>
      </div>
      <div class="form-floating mb-3 div-input">
        <input type="text" class="form-control" name="celular" id="celular" placeholder="a">
        <label for="celular">Celular:<span class="red-span">*</span></label>
      </div>

      <div class="form-floating mb-3 div-input position-relative">
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha"
          style="padding-right: 45px;">
        <label for="senha">Senha:<span class="red-span">*</span></label>
        <span id="togglePassword" class="password-toggle-icon">
          <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#00a470"
            viewBox="0 0 16 16">
            <path
              d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
          </svg>
        </span>
      </div>

      <div class="password-requirements">
        <div class="requirement-item"><input type="checkbox" id="req-special" disabled> Mínimo um caractere especial
          (Ex.: "@" "#" "!")</div>
        <div class="requirement-item"><input type="checkbox" id="req-number" disabled> Mínimo um número</div>
        <div class="requirement-item"><input type="checkbox" id="req-upper" disabled> Mínimo uma letra maiúscula</div>
        <div class="requirement-item"><input type="checkbox" id="req-lower" disabled> Mínimo uma letra minúscula</div>
        <div class="requirement-item"><input type="checkbox" id="req-length" disabled> Mínimo 6 caracteres</div>
      </div>

      <div class="gender-title">Com qual gênero você se identifica?</div>
      <div class="gender-options">
        <label><input type="radio" name="genero" value="feminino"> Feminino</label>
        <label><input type="radio" name="genero" value="masculino"> Masculino</label>
      </div>

      <div class="beautybox-frame">
        <div class="brand-divider-label">beautybox<span
            style="font-size: 14px; vertical-align: top; margin-left: 2px;">®</span></div>
        <div style="display: flex; align-items: center; gap: 10px; font-weight: 500; font-size: 13px;">
          <input type="checkbox" name="fidelidade">
          <span>Quero participar do programa de fidelidade.</span>
        </div>
      </div>

      <div class="opt-in-whatsapp">
        <input type="checkbox" name="whatsapp">
        <span>Quero receber comunicação, novidades, promoções, ofertas via whatsapp.</span>
      </div>

      <div class="disclaimer">
        Ao se cadastrar, você receberá comunicações por e-mail com ofertas especiais e vantagens.<br><br>
        Participando do programa de fidelidade, você irá receber ofertas especiais e vantagens pelo email do programa
        (@fidelidade.beautybox.com.br), aplicativo, WhatsApp e/ou SMS.<br><br>
        Veja mais em <a href="#">Política de Privacidade</a>.
      </div>

      <input type="hidden" name="email" value="<?php echo $email; ?>">

      <button type="submit" class="btn">Criar Conta</button>
    </form>
  </div>

  <div class="bottom-links">
    <span>Política de privacidade</span>
    <span>Relacionamento com o cliente</span>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>

<script>
  const passwordInput = document.getElementById('senha');
  const togglePassword = document.getElementById('togglePassword');

  const reqs = {
    special: document.getElementById('req-special'),
    number: document.getElementById('req-number'),
    upper: document.getElementById('req-upper'),
    lower: document.getElementById('req-lower'),
    length: document.getElementById('req-length')
  };

  togglePassword.addEventListener('click', function () {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.style.opacity = type === 'password' ? '1' : '0.5';
  });

  passwordInput.addEventListener('input', function () {
    const val = this.value;

    const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(val);
    const hasNumber = /\d/.test(val);
    const hasUpper = /[A-Z]/.test(val);
    const hasLower = /[a-z]/.test(val);
    const isLongEnough = val.length >= 6;

    reqs.special.checked = hasSpecial;
    reqs.number.checked = hasNumber;
    reqs.upper.checked = hasUpper;
    reqs.lower.checked = hasLower;
    reqs.length.checked = isLongEnough;

    Object.keys(reqs).forEach(key => {
      if (reqs[key].checked) {
        reqs[key].parentElement.classList.add('met');
      } else {
        reqs[key].parentElement.classList.remove('met');
      }
    });
  });

  const inputData = document.getElementById('nascimento');
  const inputCPF = document.getElementById('cpf');
  const inputCelular = document.getElementById('celular');

  inputData.addEventListener('input', function (e) {
    let v = e.target.value.replace(/\D/g, "");
    if (v.length > 8) v = v.slice(0, 8);

    if (v.length >= 5) {
      v = v.replace(/^(\d{2})(\d{2})(\d{0,4})/, "$1/$2/$3");
    } else if (v.length >= 3) {
      v = v.replace(/^(\d{2})(\d{0,2})/, "$1/$2");
    }

    e.target.value = v;
  });

  inputCPF.addEventListener('input', function (e) {
    let v = e.target.value.replace(/\D/g, "");
    if (v.length > 11) v = v.slice(0, 11);

    v = v.replace(/(\d{3})(\d)/, "$1.$2");
    v = v.replace(/(\d{3})(\d)/, "$1.$2");
    v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

    e.target.value = v;
  });

  inputCelular.addEventListener('input', function (e) {
    let v = e.target.value.replace(/\D/g, "");
    if (v.length > 11) v = v.slice(0, 11);

    v = v.replace(/^(\d{2})(\d)/g, "($1) $2");
    v = v.replace(/(\d{5})(\d)/, "$1-$2");

    e.target.value = v;
  });
</script>