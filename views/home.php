<main>
    <h2>Home</h2>
    <p>
        Welkom bij <em>De Boekenwinkel</em>
    </p>
    <form method="get">
        <div>
            <label for="auteuren">Kies een auteur</label>
            <select id="auteuren" name="auteurId">
                <option value="">...</option>
                <?php foreach ($auteurs as $auteur): ?>
                    <?php if (isset($_GET['auteurId']) && $_GET['auteurId'] === $auteur['id']) : ?>
                        <option selected
                                value="<?= $auteur['id'] ?>"><?= $auteur['voornaam'] . ' ' . $auteur['achternaam'] ?></option>
                    <?php else : ?>
                        <option value="<?= $auteur['id'] ?>"><?= $auteur['voornaam'] . ' ' . $auteur['achternaam'] ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="genres">Kies een genre</label>
            <select id="genres" name="genreId">
                <option value="">...</option>
                <?php foreach ($genres as $genre): ?>
                    <?php if (isset($_GET['genreId']) && $_GET['genreId'] === $genre['id']) : ?>
                        <option selected value="<?= $genre['id'] ?>"><?= $genre['naam'] ?></option>
                    <?php else : ?>
                        <option value="<?= $genre['id'] ?>"><?= $genre['naam'] ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <button type="submit">Filter</button>
        </div>
        <div>
            <a href="/<?= $rootURI ?>/">Verwijder filters</a>
        </div>
    </form>

    <section>

        <?php if (count($boeken) === 0) : ?>
            Voor deze auteur in combinatie met dit genre, zijn geen boeken beschikbaar.
        <?php else : ?>
            <?php foreach ($boeken as $boek): ?>
                <figure>
                    <img src="/<?= $rootURI ?>/afbeeldingen/boeken/<?= $boek['afbeelding'] ?>"
                         alt="Afbeelding van <?= $boek['titel'] ?>"/>
                    <figcaption>
                        <?= $boek['titel'] ?>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
</main>

