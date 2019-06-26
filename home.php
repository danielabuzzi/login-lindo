<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();
?>assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1 class="page-header text-center">Login with Flashdata</h1>
<div class="row">
<div class="col-md-4 col-md-offset-4">
<?php
$user = $this->session->userdata('user');
extract($user);
?>
<h2>Bem vindo a sua pagina inicial </h2>
<h4>Informacoes do usuario:</h4>
<p>Nome: <?php echo $nome; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Tipo de Instituicao: <?php echo $tipo_inst; ?></p>
<a href="<?php echo base_url(); ?>index.php/user/logout"

class="btn btn-danger">Logout</a>

</div>
</div>
</div>
</body>
</html>