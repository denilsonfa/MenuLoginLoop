<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
    <fieldset>
        <legend>Registrar usuario</legend>
        
        <div class="form-group">
            <label for="name">Login:</label>
            <input type="text" name="name" placeholder="Nome de Usuario"class="form-control" />
            <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
        </div>
        
        <div class="form-group">
            <label for="name">Senha:</label>
            <input type="password" name="password" placeholder="Senha do Usuario" required class="form-control" />
            <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
        </div>
        
        <div class="form-group">
            <input type="submit" name="signup" value="Registrar" class="btn btn-success" style="width:100%"/>
        </div>

    </fieldset>
</form>