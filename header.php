<header>
    <!-- Logo and menu in the header -->
    <img src="../media/logo.svg" alt="Website logo" />
    <div id="logo">DenApp</div>

    <nav>
        <!-- Main menu -->
        <ul>
            <li><a href="../home/">Home</a></li>
            <li><a href="../projekt1/">Project 1</a></li>
            <li><a href="../projekt2/">Project 2</a></li>
            <li><a href="../rapport/">Report</a></li>
            <?php
            // Greet known visitors
            if (isset($_SESSION['username'])) {
                //print("Welcome back ". $_SESSION['username']);
                print("<li><a href='./profile.php'>". $_SESSION['username']."'s profile</a></li>");
            }
            ?>
        </ul>
    </nav>
</header>