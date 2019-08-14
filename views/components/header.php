<header>

    <nav>
        <div>
            De Boekenwinkel
        </div>
        <div>
            <ul>
                <li><a href="/<?= $rootURI ?>/" class="<?= $pageFileName === 'home' ? 'active' : '' ?>">Home</a></li>
                <li><a href="over-ons" class="<?= $pageFileName === 'over-ons' ? 'active' : '' ?>">Over ons</a></li>
                <li><a href="winkelwagen"
                       class="<?= $pageFileName === 'winkelwagen' ? 'active' : '' ?>">Winkelwagen</a></li>
                <li><a href="boeken" class="<?= $pageFileName === 'books' ? 'active' : '' ?>">Boeken</a></li>
            </ul>
            <ul>
                <li><a href="registreer" class="<?= $pageFileName === 'registreer' ? 'active' : '' ?>">Registreer</a></li>
                <li><a href="login" class="<?= $pageFileName === 'login' ? 'active' : '' ?>">Login</a></li>
            </ul>
        </div>
    </nav>
</header>
<div class="content">
