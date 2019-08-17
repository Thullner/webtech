<main>
    <h2>Home</h2>
    <p>
        Welkom bij <em>De Boekenwinkel!</em> U kunt hier de leukste en nieuwste boeken bestellen.
    </p>
    <?php if (count($meldingen) > 0): ?>
        <ul class="meldingen">
            <?php if (isset($meldingen['boek-toegevoegd'])) : ?>
                <li>
                    <?= '"' . $meldingen['boek-toegevoegd']['titel'] . '" is toegevoegd aan de winkelwagen' ?>
                </li>
            <?php endif; ?>
            <?php if (isset($meldingen['fout-voorraad'])) : ?>
                <li class="fout">
                    <?= 'Geen voorraad meer van "' . $meldingen['fout-voorraad']['titel'] . '"' ?>
                </li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
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
            <a href="<?= $rootPath ?>/">Verwijder filters</a>
        </div>
    </form>

    <section>

        <?php if (count($boeken) === 0) : ?>
            Voor deze auteur in combinatie met dit genre, zijn er geen boeken beschikbaar.
        <?php else : ?>
            <?php foreach ($boeken as $boek): ?>
                <figure>
                    <img src="<?= $rootPath ?>/afbeeldingen/boeken/<?= $boek['afbeelding'] ?>"
                         alt="Afbeelding van <?= $boek['titel'] ?>"/>
                    <figcaption>
                        <div>
                            <div>
                                <?= $boek['titel'] ?>
                            </div>
                            <div>
                                <?= $boek['auteurVoornaam'] ?> <?= $boek['auteurAchternaam'] ?>
                            </div>
                        </div>
                        <div>
                            <a href="<?= $rootPath ?>/boek/<?= $boek['id'] ?>">Meer informatie</a>
                            <form method="post">
                                <input type="hidden" name="boekId" value="<?= $boek['id'] ?>">
                                <button>
                                    <i class="fa fa-plus">
                                    </i>
                                    <i class="fa fa-shopping-cart">
                                    </i>
                                </button>
                            </form>
                        </div>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
</main>

