<main>
    <h2>Inloggen</h2>
    <p>Om boeken te kopen moet u ingelogd zijn.</p>
    <?php if (count($meldingen) > 0): ?>
        <ul class="meldingen">
            <?php if (isset($meldingen['fout-inlog'])) : ?>
                <li class="fout">
                    <?= $meldingen['fout-inlog'] ?>
                </li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
    <form method="post">
        <div>
            <label>Gebruikersnaam</label>
            <input type="text" name="loginnaam" required>
        </div>
        <div>
            <label>Wachtwoord</label>
            <input type="password" name="wachtwoord" required>
        </div>
        <div>
            <button type="submit">Inloggen</button>
        </div>
        <div>
            <a href="<?= $rootPath ?>/registreer">Of maak een account aan</a>
        </div>
    </form>
</main>
