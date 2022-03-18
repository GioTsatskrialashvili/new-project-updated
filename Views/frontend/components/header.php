<header>
    <div class="container">
        <div class="row">
            <div class="logo">
                GOCAST
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="?page=home" <?= $pageName == 'home' ? 'class="active"' : '' ?>>Home</a>
                    </li>
                    <li>
                        <a href="?page=about" <?= $pageName == 'about' ? 'class="active"' : '' ?>>About</a>
                    </li>
                    <li>
                        <a href="?page=categories" <?= $pageName == 'categories' ? 'class="active"' : '' ?>>Categories</a>
                    </li>
                    <li>
                        <a href="?page=news" <?= $pageName == 'news' ? 'class="active"' : '' ?>>News</a>
                    </li>
                    <li>
                        <a href="?page=contact" <?= $pageName == 'contact' ? 'class="active"' : '' ?>>Contact</a>
                    </li>
                </ul>
            </nav>
    
        </div>
    </div>
</header>