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
    <title>Página 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Página-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <section class="u-align-center u-clearfix u-section-1" id="sec-0809">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/logo-Upd8.png" alt="" data-image-width="120" data-image-height="43">
        <h3 class="u-text u-text-default u-text-1">Consulta de cliente</h3>
        <br>
        <form action="{{route('search')}}" method="post">
            <label>CPF: </label>
            <input class="u-grey-5 u-radius-50" type="text" name="cpf" placeholder="000.000.000-00">
            <label>Nome: </label>
            <input class="u-grey-5 u-radius-50" type="text" name="nome" placeholder="Maria Silva">
            <br>
            <br>
            <label>Data Nascimento: </label>
            @csrf
            <input class="u-grey-5 u-radius-50" type="date" name="data">

            <label for="select-5ba4" class="u-label">Sexo</label>
              <select id="select-5ba4" name="sexo" class="u-grey-5 u-radius-50">
                <option value="">Selecione...</option>
                <option value="Feminino">Feminino</option>
                <option value="Masculino">Masculino</option>
              </select>

            <br>
            <br>
            <label for="select-5ba4" class="u-label">Estado</label>
                <select id="select-5ba4" name="uf" class="u-grey-5 u-radius-50">
                <option value="">Selecione...</option>
                <option value="SP">SP</option>
                <option value="MG">MG</option>
                </select>

            <label for="select-5ba4" class="u-label">Cidade</label>
              <select id="select-5ba4" name="city" class="u-grey-5 u-radius-50">
                <option value="">Selecione...</option>
                <option value="Guarulhos">Guarulhos</option>
                <option value="Minas Gerais">Minas Gerais</option>
              </select>
              <br>
              <input type="submit" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-3-base u-radius-50 u-btn-1" value="Pesquisar">
        </form>
              <center><span>Para cadastrar <a href="/">clique aqui</a></span></center><br>
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="9.4%">
              <col width="8.1%">
              <col width="15.1%">
              <col width="10.8%">
              <col width="15.1%">
              <col width="14.2%">
              <col width="14.299999999999992%">
              <col width="12.899999999999991%">
            </colgroup>
            <thead class="u-grey-50 u-table-header u-table-header-1">
              <tr style="height: 29px;">
                <th class="u-border-1 u-border-grey-50 u-table-cell">Editar</th>
                <th class="u-border-1 u-border-grey-50 u-table-cell">Excluir</th>
                <th class="u-border-1 u-border-grey-50 u-table-cell">Cliente</th>
                <th class="u-border-1 u-border-grey-50 u-table-cell">CPF</th>
                <th class="u-border-1 u-border-grey-50 u-table-cell">Data Nasc.</th>
                <th class="u-border-1 u-border-grey-50 u-table-cell">Estado</th>
                <th class="u-border-1 u-border-grey-50 u-table-cell">Cidade</th>
                <th class="u-border-1 u-border-grey-50 u-table-cell">Sexo</th>
              </tr>
            </thead>
            <tbody class="u-table-body">
                @foreach ($usuarios as $users)
                        <tr style="height: 59px;">
                            <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"><a href="{{route('edit', $users->id)}}" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-3-base u-radius-50 u-btn-1">Editar</a></td>
                            <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"><form action="{{route('delete', $users->id)}}" method="POST">@csrf @method('DELETE')<input type="submit" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-3-base u-radius-50 u-btn-1" value="Excluir"></form></td>
                            <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">{{$users->nome}}</td>
                            <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">{{$users->cpf}}</td>
                            <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">{{$users->data}}</td>
                            <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">{{$users->estado}}</td>
                            <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">{{$users->cidade}}</td>
                            <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">{{$users->sexo}}</td>
                        </tr>
                @endforeach
            </tbody>
          </table>
      </div>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-white u-footer" id="sec-5e8e"><div class="u-align-left u-clearfix u-sheet u-sheet-1"></div></footer>
    <?php
    if(isset($_SESSION['success'])){
    ?>
    <script>
        Swal.fire(
        'Parabéns!',
        'O cadastro foi editado com sucesso',
        'success'
        )
    </script>
    <?php
    unset($_SESSION['success']);
    }
    ?>

    <?php
    if(isset($_SESSION['delete'])){
    ?>
    <script>
        Swal.fire(
        'Parabéns!',
        'O cadastro foi deletado com sucesso',
        'success'
        )
    </script>
    <?php
    unset($_SESSION['delete']);
    }
    ?>
    </body>
</html>
