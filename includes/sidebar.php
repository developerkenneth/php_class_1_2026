<aside id="left-sidebar">
    <div id="logo">Logo</div>

    <!-- navigations -->
    <nav>
        <ul class="navs">
            <li class="nav-item"><a class="nav-link <?= $fileName == "index.php" ? "active" : "" ?>" href="index.php">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link <?= $fileName == "profile.php" ? "active" : "" ?>" href="profile.php">Profile</a></li>
        </ul>
    </nav>
</aside>