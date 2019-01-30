<?php 
    require "header.php";
?>

<main>
    <section class="signup-section">
        <form class="signup-form" action="includes/signup.inc.php" method="post">
            <input class="signup-input" type="text" name="uid" placeholder="Username">
            <input class="signup-input" type="text" name="mail" placeholder="E-mail">
            <input class="signup-input" type="password" name="pwd" placeholder="Password">
            <input class="signup-input" type="password" name="pwd-repeat" placeholder="Confirm password">
            <button class="signup-submit-btn" type="submit" name="signup-submit">Sign up</button>
        </form>
    </section>
</main>


<?php 
    require "footer.php";
?>