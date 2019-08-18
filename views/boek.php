<main>
    <h2><?= $boek['titel'] ?></h2>

    <section>
        <div>
            <img src="<?= $rootPath ?>/afbeeldingen/boeken/<?= $boek['afbeelding'] ?>"
                 alt="Afbeelding van <?= $boek['titel'] ?>"/>
        </div>
        <div>
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

            <div class="boek-info">
                <span>
                    Jaar van publicatie:
                </span>
                <span>
                    <?= $boek['jaarVanPublicatie'] ?>
                </span>
            </div>
            <div class="boek-info">
                <span>
                    Auteur:
                </span>
                <span>
                    <?= $auteur['voornaam'] . ' ' . $auteur['achternaam'] ?>
                </span>
            </div>
            <div class="boek-info">
                <span>
                    Genre:
                </span>
                <span>
                    <?= $genre['naam'] ?>
                </span>
            </div>
            <div class="boek-info">
                <span>
                    Aantal boeken in voorraad:
                </span>
                <span>
                    <?= $boek['aantal'] ?>
                </span>
            </div>
            <div class="boek-info">
                <span>
                    Prijs:
                </span>
                <span>
                    € <?= number_format($boek['prijs'], 2) ?>
                </span>
            </div>
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

    </section>

</main>
