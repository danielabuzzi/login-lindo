<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
    <!-- FONTES -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- ICONS LOGIN -->
    <title>D.O.A</title>
      
  </head>
  <header>
      
    <nav class="navbar fixed-top navbar-light .navbar-expand-lg">
        
      <div id="menu1" class="container">
        <a class="navbar-brand" href="#">Fixed top</a>
        
       
        <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSite">-->
        
            <ul class="nav justify-content-end ">
                  <li class="nav-item ">
                    <a class="menu-2 active" href="#">QUEM SOMOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="menu-2" href="#">NOTICIAS</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="menu-2 dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ORFANATOS</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="menu-2 dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ASILOS</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="menu-2" href="#">DOAÇÕES</a>
                  </li>
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      LOGIN
                    </button>
            </ul>
        </div>
    </nav>
  </header>
    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color:transparent;">
                  <div class=" login-card"><!-- LOGIN RESPONSIVO col-lg-4 col-md-7 col-sm-6 col-xs-12-->
                        <!--Form de login-->
                        <form id="login-form" class="col-lg-12" method="POST" action="<?php echo base_url();

?>index.php/user/login">
<fieldset>
                           <div class="col-lg-12 logo-kapsul">
                                <img width="100" class="logo" src="imagens/login.png" alt="Logo" />
                           </div>
                            
                            <div style="clear:both;"></div>
                            <!-- EMAIL-->
                            <div class="group">
                                <input type="login" name="login" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label><i class="material-icons input-ikon">person_outline</i><span class="span-input">Email</span></label>
                            </div>
                            <!-- SENHA-->
                            <div class="group">
                                <input type="password" name="senha" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label><i class="material-icons input-sifre-ikon">lock</i><span class="span-input">Senha</span></label>
                            </div>
                            <!-- SUBMIT -->
                            <button type="submit">Enviar</button>>

                            <?php
if($this->session->flashdata('error')){
?>
<div class="alert alert-danger text-center"

style="margin-top:20px;">

<?php echo $this->session->flashdata('error'); ?>

</div>
<?php
}
?>
                            <!-- LETRAS MIUDAS-->
                            <div class="forgot-and-create tab-menu">
                                <a class="sifre-hatirlat-link" href="javascript:void('sifre-hatirlat-link');">RECUPERAR SENHA</a>
                                <a class="hesap-olustur-link" href="javascript:void('hesap-olustur-link');">CADASTRE-SE</a>
                            </div>
                        </form>    
                        <form name= "cadastro" method= "post" id="kayit-form" class="col-lg-12">
                             <div class="col-lg-12 logo-kapsul">
                                <img width="100" class="logo" src="imagens/login.png" alt="Logo" />
                           </div>
                            <div style="clear:both;"></div>
                            <!-- CAMPO USUARIO-->
                            <div class="group">
                                <input type="text" name="nome" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label><i class="material-icons input-ikon">person_outline</i><span class="span-input">USÚARIO</span></label>
                            </div>
                            <!-- CAMPO EMAIL -->
                            <div class="group">
                                <input type="text" name="login" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label><i class="material-icons input-ikon">mail_outline</i><span class="span-input">EMAIL</span></label>
                            </div>
                            <!-- CAMPO DE SENHA-->
                            <div class="group">
                                <input type="password" name="senha" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label><i class="material-icons input-sifre-ikon">lock</i><span class="span-input">SENHA</span></label>
                            </div>
                            <!-- CAMPO CONFIRMAR SENHA -->
                            <div class="group">
                                <input type="password" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label><i class="material-icons input-sifre-ikon">lock</i><span class="span-input">CONFIRME SUA SENHA</span></label>
                            </div>
                            <!-- SUBMIT -->
                            <a href="javascript:void(0);" class="kayit-ol-buton">CADASTRAR</a>
                            <!-- Zaten Hesap Var Link -->
                            <a class="zaten-hesap-var-link" href="javascript:void('zaten-hesap-var-link');">JÁ TENHO UMA CONTA</a>
                        </form>
                        <form id="sifre-hatirlat-form" class="col-lg-12">
                            <div class="col-lg-12 logo-kapsul">
                                <img width="100" class="logo" src="imagens/email.png" alt="Logo" />
                           </div>
                            <div style="clear:both;"></div>
                            <!-- CAMPODE EMAIL -->
                            <div class="group">
                                <input type="text" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label><i class="material-icons input-ikon">mail_outline</i><span class="span-input">EMAIL</span></label>
                            </div>
                            <!-- SUBMIT -->
                            <a href="javascript:void(0);" class="sifre-hatirlat-buton">ENVIAR</a>
                            <!-- Zaten Hesap Var Link -->
                            <a class="zaten-hesap-var-link" href="javascript:void('zaten-hesap-var-link');">LOGIN</a>
                    </form>
                  </div>
              </div>
            </div>
          </div>
        <!--Fim modal-->

   <?php

include('rodape.php');

?>
      
      