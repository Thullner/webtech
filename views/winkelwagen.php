<main>
    <h2>Winkelwagen</h2>

    <?php if (count($aantalBoekenPerBoek) === 0): ?>
        <p>
            Uw winkelwagen is leeg. Ga naar de Homepagina om boeken aan uw winkelwagen toe te voegen.
        </p>

    <?php else : ?>

        <?php if (count($meldingen) > 0): ?>
            <ul class="meldingen">
                <?php if (isset($meldingen['fout-voorraad'])) : ?>
                    <li class="fout">
                        <?= 'Geen voorraad meer van "' . $meldingen['fout-voorraad']['titel'] . '"' ?>
                    </li>
                <?php endif; ?>
            </ul>
        <?php endif; ?>

        <form method="post">
            <div>
                <button>Leeg winkelwagen</button>
                <input type="hidden" name="leegWinkelwagen">
            </div>
        </form>

        <table>
            <thead>
            <tr>
                <th>Titel</th>
                <th>Auteur</th>
                <th>Prijs per boek</th>
                <th>Aantal</th>
                <th>Wijzig</th>
                <th>Totaal</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($aantalBoekenPerBoek as $boekId => $aantalBoeken): ?>
                <tr>
                    <td><?= $boeken[$boekId]['titel'] ?></td>
                    <td><?= $boeken[$boekId]['auteurVoornaam'] . ' ' .
                        $boeken[$boekId]['auteurAchternaam'] ?></td>
                    <td>€ <?= number_format($boeken[$boekId]['prijs'], 2) ?></td>
                    <td><?= $aantalBoeken ?></td>
                    <td>
                        <div class="wijzigen-winkelwagen">
                            <form method="post">
                                <button>
                                    <i class="fa fa-plus"></i>
                                </button>
                                <input type="hidden" name="boekId" value="<?= $boekId ?>">
                                <input type="hidden" name="voegToe" value="<?= 1 ?>">
                            </form>
                            <form method="post">
                                <button>
                                    <i class="fa fa-minus"></i>
                                    <input type="hidden" name="boekId" value="<?= $boekId ?>">
                                    <input type="hidden" name="voegToe" value="<?= -1 ?>">
                                </button>
                            </form>
                        </div>

                    </td>
                    <td> € <?= number_format($boeken[$boekId]['totaalPrijs'], 2) ?> </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Totaal</th>
                <th>€ <?= number_format($totaalPrijs, 2) ?></th>
            </tr>
            </tfoot>
        </table>
    <div>
        <a href="bevestiging">Betalen</a>
    </div>
    <?php endif; ?>


</main>
