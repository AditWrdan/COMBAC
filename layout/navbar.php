<nav>
    <div class="logo">
        <p> <img src="images/logo.png" alt="logo">COMBAC</p>
    </div>
    </input>
    <ul class="menu">
        <?php if (isset ($_SESSION["is_login"])): ?>
            <li><a href="index.php">HOME</a></li>
            <form action="dashboard.php" method="POST">
                <button type="submit" name="logout" class="btn-logout">LOGOUT</button>
            </form>
        <?php else: ?>
            <li><a href="index.php">HOME</a></li>
            <li><a href="page-login.php">LOGIN</a></li>
        <?php endif ?>
    </ul>
</nav>