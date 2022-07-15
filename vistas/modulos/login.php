
<form method="post" action="" name="signup-form">
<div id="login">
    <div class="form-element">
        <label>Nombre de Usuario </label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Correo Electronico</label>
        <input type="email" name="email" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="password" id="password" required />
    </div>
    <div class="form-element">
        <label>Vuelva a repetir la contraseña</label>
        <input type="password" name="password2"  id="password2" required />
    </div>
    <?php
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        if($password == $password2)
        {
            $register.disabled = false;
        }

    ?>
    <button type="submit" name="register" id="register " <?php
    if($password == $password2)
        {?>
            style="display: none;"
            <?php
        }?>
    value="register">Registrarse</button>
</div>
</form>
