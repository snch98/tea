<?php
function createRegistrationForm()
{
    echo "<form id='registration-form' action='". htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>
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
    return isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] == true;
}

function showLoginButton() {
    echo "<a class='main-link login-btn' href='signin.php'>Sign In</a>";
}

function showLogoutButton() {
    echo "
        <div>
            <a class='main-link login-btn' href='signout.php'>Sign Out</a>
            <a class='cart-link' href='cart.php'>
                Cart
                <img src='media/shopping-cart-icon.svg' alt='Cart Icon' class='cart-icon'>
            </a>
        </div>
    ";
}
?>