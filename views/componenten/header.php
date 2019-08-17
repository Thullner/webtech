<header>
    <nav>
        <div>
            De Boekenwinkel
        </div>
        <div>
            <ul>
                <li><a href="/<?= $rootURI ?>/" class="<?= $paginaBestandsNaam === 'home' ? 'active' : '' ?>">Home</a></li>
                <li><a href="over-ons" class="<?= $paginaBestandsNaam === 'over-ons' ? 'active' : '' ?>">Over ons</a></li>
                <li><a href="winkelwagen"
                       class="<?= $paginaBestandsNaam === 'winkelwagen' ? 'active' : '' ?>">Winkelwagen</a></li>
                <li><a href="boeken" class="<?= $paginaBestandsNaam === 'books' ? 'active' : '' ?>">Boeken</a></li>
            </ul>
            <ul>
                <li><a href="registreer" class="<?= $paginaBestandsNaam === 'registreer' ? 'active' : '' ?>">Registreer</a></li>
                <li><a href="login" class="<?= $paginaBestandsNaam === 'login' ? 'active' : '' ?>">Login</a></li>
            </ul>
        </div>
    </nav>
</header>
<div>
