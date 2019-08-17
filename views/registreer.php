<main>
    <h2>Registreer</h2>
    <p>Om boeken te kopen kunt, u een account aanmaken.</p>
    <?php if (count($meldingen) > 0): ?>
        <ul class="meldingen">
            <?php if (isset($meldingen['fout-registreer'])) : ?>
                <li class="fout">
                    <?= $meldingen['fout-registreer'] ?>
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
            <label>Voornaam</label>
            <input type="text" name="voornaam" required>
        </div>
        <div>
            <label>Achternaam</label>
            <input type="text" name="achternaam" required>
        </div>
        <div>
            <button type="submit">Registreren</button>
        </div>
    </form>
</main>
