<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GSM</title>
  
  <link rel="stylesheet" href="content/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="content/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="content/css/adminlte.min.css">
  <link rel="icon" href="data/logo1.png">
  <script src="content/jquery/jquery.min.js"></script>
    <script type="text/javascript">
         $(document).ready(function(){
            $("#connexion").click(function(e){
                var connexion = document.getElementById('connexion');
                var result = document.getElementById('result');
                e.preventDefault();
               
                result.style.color = "blue";
                $("#result").html("Connexion en cours...");
                connexion.disabled = true;
               
               $.post(
                    'controller/controllerPersonnel/controller.personnel.php',
                  {
                        connexionPerso : "GO",
                        pseudo : $("#pseudo").val(),
                        mdp : $("#mdp").val()
                    },
                    
                    function(data){
                        if (data=="OK") {
                          connexion.disabled = true;
                          result.style.color = "blue";
                          $("#result").html("Connexion resussi...");
                          window.location.reload();
                        }else{
                          connexion.disabled = false;
                          result.style.color = "red";
                          $("#result").html(data);
                        }
                    },
                ); 
            });
         });
    </script>
</head>

<body class="login-page" style="background: #fff;">
<!-- <body class="login-page" style="background-image: url('data/bat.jpg'); background-size: cover; background-repeat: no-repeat;"> -->


<div class="login-box">
  <div class="login-logo" style="background: #fff;" >
      <img src="data/logo1.png" class="img-responsive" width="70" height="70" />
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <h4 class="login-box-msg text-success">GSM</h4>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="pseudo" placeholder="Login..."  >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="mdp" placeholder="Mot de passe..." >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-success btn-block" id="connexion">Connexion</button>
        </div>
        <p style="color: red;text-align: center;" id="result"></p>

      <div class="row">
        <div class="col">
         <h6 align="" class="text-success"><small><i class="fas fa-copyright"></i> 2024</small></h6> 
        </div>
        <div class="col">
         <h6 align="right" class="text-success"><small>METFP</small></h6> 
        </div>
      </div>
    </div>
  </div>
</div>

<script src="content/plugins/jquery/jquery.min.js"></script>
<script src="content/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="content/js/adminlte.min.js"></script>
</body>
</html>
