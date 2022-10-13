<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../nicepage.css" media="screen">
    <link rel="stylesheet" href="../Página-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script class="u-script" type="text/javascript" src="../nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <section class="u-clearfix u-section-1" src="" id="carousel_af0e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <img class="u-image u-image-default u-preserve-proportions u-image-1" src="../images/logo-Upd8.png" alt="" data-image-width="120" data-image-height="43">
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-30 u-white u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                    <center><span>Para ver informações de cadastros <a href="/dashboard">clique aqui</a></span></center><br>
                  <div class="u-form u-form-1">
                    <form action="{{route('edit.update', $cadastros->id)}}" method="POST" style="padding: 10px;">
                      <div class="u-form-email u-form-group u-form-partition-factor-2">
                        <label for="email-bb9b" class="u-label">CPF</label>
                        @csrf
                        <input type="text" id="email-bb9b" name="cpf" class="u-grey-5 u-input u-input-rectangle u-radius-50" required="" value="{{$cadastros->cpf}}" placeholder="123.456.789-00">
                      </div>
                      <div class="u-form-group u-form-name u-form-partition-factor-2">
                        <label for="name-bb9b" class="u-label">Nome completo</label>
                        <input type="text" placeholder="Digite seu nome" id="name-bb9b" name="name" value="{{$cadastros->nome}}" class="u-grey-5 u-input u-input-rectangle u-radius-50" required="">
                      </div>
                      <div class="u-form-date u-form-group u-form-group-3">
                        <label for="date-8ad3" class="u-label">Data nascimento</label>
                        <input type="date" placeholder="MM/DD/YYYY" value="{{$cadastros->data}}" id="date-8ad3" name="date" class="u-grey-5 u-input u-input-rectangle u-radius-50" required="">
                      </div>
                      <div class="u-form-group u-form-select u-form-group-4">
                        <label for="select-5ba4" class="u-label">Sexo</label>
                        <div class="u-form-select-wrapper">
                          <select id="select-5ba4" name="sexo" class="u-grey-5 u-input u-input-rectangle u-radius-50">
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                          </select>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                      </div>
                      <div class="u-form-address u-form-group u-form-group-5">
                        <label for="address-907e" class="u-label">Endereço</label>
                        <input type="text" placeholder="Insira seu endereço" id="address-907e" value="{{$cadastros->endereco}}" name="address" class="u-grey-5 u-input u-input-rectangle u-radius-50" required="">
                      </div>
                      <div class="u-form-group u-form-select u-form-group-6">
                        <label for="select-774b" class="u-label">Cidade</label>
                        <div class="u-form-select-wrapper">
                          <select id="select-774b" name="city" class="u-grey-5 u-input u-input-rectangle u-radius-50">
                            <option value="São Paulo">São Paulo</option>
                          </select>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                      </div>
                      <div class="u-form-group u-form-select u-form-group-7">
                        <label for="select-1d32" class="u-label">Estado</label>
                        <div class="u-form-select-wrapper">
                          <select id="select-1d32" name="uf" class="u-grey-5 u-input u-input-rectangle u-radius-50">
                            <option value="SP">SP</option>
                          </select>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                      </div>
                        <input type="submit" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-3-base u-radius-50 u-btn-1" value="Atualizar">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    if(isset($_SESSION['success'])){
    ?>
    <script>
        Swal.fire(
        'Parabéns!',
        'Seu cadastro foi concluído com sucesso',
        'success'
        )
    </script>
    <?php
    unset($_SESSION['success']);
    }
    ?>
    <footer class="u-align-center u-clearfix u-footer u-white u-footer" id="sec-5e8e"><div class="u-align-left u-clearfix u-sheet u-sheet-1"></div></footer>
  </body>
</html>
