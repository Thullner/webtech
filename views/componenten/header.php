<header>
    <nav>
        <div>
            De Boekenwinkel
        </div>
        <div>
            <ul>
                <li>
                    <a href="<?= $rootPath ?>/" class="<?= $paginaBestandsNaam === 'home' ? 'active' : '' ?>">Home</a>
                </li>
                <li>
                    <a href="<?= $rootPath ?>/over-ons"
                       class="<?= $paginaBestandsNaam === 'over-ons' ? 'active' : '' ?>">Over ons</a>
                </li>
                <?php if (isset($gebruiker)) : ?>
                    <li>
                        <a href="<?= $rootPath ?>/winkelwagen"
                           class="<?= $paginaBestandsNaam === 'winkelwagen' ? 'active' : '' ?>">
                            <i class="fa fa-shopping-cart">
                            </i>Winkelwagen</a>
                    </li>
                <?php endif; ?>
            </ul>
            <ul>

                <?php if (isset($gebruiker)) : ?>
                    <li><i class="fa fa-user">
                        </i><?= $gebruiker['voornaam'] . ' ' . $gebruiker['achternaam'] ?></li>
                    <li>
                        <a href="<?= $rootPath ?>/uitloggen"">Uitloggen</a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?= $rootPath ?>/registreer"
                           class="<?= $paginaBestandsNaam === 'registreer' ? 'active' : '' ?>">Registreer</a>
                    </li>
                    <li>
                        <a href="<?= $rootPath ?>/login" class="<?= $paginaBestandsNaam === 'login' ? 'active' : '' ?>">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>
<div>
