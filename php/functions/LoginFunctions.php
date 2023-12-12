<?php
function createRegistrationForm()
{

    echo "<form id='login-form' action='php/RegisterNewAccount.php' method='post'>
    <div class='username-password-fields'>
        <div>
            <label for='username'>Your username</label>
            <input type='text' name='username'>
        </div>

        <div>
            <label for='password'>Create password</label>
            <input type='password' name='password'>
        </div>
    </div>

    <div>
        <label for='email'>Email</label>
        <input type='email' id='email-field' name='email'>
    </div>

    <div class='control-buttons login'>
        <button type='reset'>Clear</button>
        <button type='submit'>Create account</button>
    </div>

    <a class='login-link' href='signin.php'>Already have an account?</a>
</form>";
}

function createLoginForm()
{
    echo "<form id='login-form' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>
    <div>
        <label for='username'>Username</label>
        <input type='text' name='username'>
    </div>

    <div>
        <label for='password'>Password</label>
        <input type='password' name='password'>
    </div>

    <div class='control-buttons login'>
        <button type='submit'>Sign In</button>
    </div>

    <a class='login-link' href='register.php'>Don't have an account?</a>
</form>";

}

function checkLogin()
{
    session_start();
    $sessionVar = $_SESSION["isLoggedIn"];
    return isset($sessionVar) && $sessionVar == true;
}
?>