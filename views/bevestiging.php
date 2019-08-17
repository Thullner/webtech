<main>
    <h2>Bevestiging van de bestelling</h2>
    <?php if (isset($meldingen['fout-voorraad'])) : ?>
        <ul class="meldingen">
            <?php foreach ($meldingen['fout-voorraad'] as $melding) : ?>
                <li class="fout">
                    <?= 'Niet genoeg voorraad voor bestelling van "' . $melding['titel'] . '"' ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <p>U heeft <?= $totaalAantalBoeken ?> boeken besteld, voor een totale prijs van € <?= number_format($totalePrijs,
            2) ?></p>
</main>
