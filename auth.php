<?php    require_once("templates/header.php")        ?>
   <div id="main-container" class="container-fluid">
  <div class="col-md-12">
    <div class="row" id="auth-row">
        <div class="col-md-4" id="login-container">
            <h2>Entrar</h2>
            <form action="<?= $BASE_URL ?>auth_process.php" method="POST">
            <input type="hidden" name="type" value="login">
            <div class="form-group">
                <label for="email_entrar">
                E-mail:
                </label>
                <input type="email" class="form-control" id="email_entrar"  name="email_name" placeholder="Digite seu e-mail">
            </div>

            <div class="form-group">
                <label for="password_entrar">
                    Senha:
                </label>
                <input type="password" class="form-control" id="password_entrar"  name="password_name" placeholder="Digite sua senha">
            </div>

            <input type="submit" value="Entrar" class="btn card-btn">
            
            </form>
        </div>

        <div class="col-md-4" id="register-container">
            <h2>Criar Conta</h2>
           
            <form action="<?= $BASE_URL ?>auth_process.php" method="POST">
            <input type="hidden" name="type" value="register">
            <div class="form-group">
                <label for="email">
                    E-mail:
                </label>
                <input type="email" class="form-control" id="email"  name="email_name" placeholder="Digite seu e-mail">
            </div>

            <div class="form-group">
                <label for="name">
                    Nome:
                </label>
                <input type="text" class="form-control" id="name"  name="name_name" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="lastname">
                    Sobrenome:
                </label>
                <input type="text" class="form-control" id="lastname"  name="lastname_name" placeholder="Digite seu sobrenome">
            </div>

            
            



            <div class="form-group">
                <label for="password">

                Senha:
                </label>
                <input type="password" class="form-control" id="password"  name="password_name" placeholder="Digite sua senha">
            </div>

            <div class="form-group">
                <label for="confirmpassword">
                    Confirmação de senha:
                </label>
                <input type="password" class="form-control" id="confirmpassword"  name="confirmpassword_name" placeholder="Confirme sua senha">
            </div>

            <input type="submit" value="Registrar-se" class="btn card-btn">
            
            </form>
        </div>

    </div>

  </div>

   </div>
   <?php    require_once("templates/footer.php")    ;   ?>