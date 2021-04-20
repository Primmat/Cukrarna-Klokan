<?php
include_once('zahlavi.php');
?>
<section>
    <div class="ohraniceni">
        <h2>Kontakt</h2>
        <div class="leva-sekce">
            <div class="kontakt">
                <form method="post">
                    <input type="text" name="jmeno" placeholder="Vaše jméno *" required>
                    <input type="email" name="email" placeholder="Váš email *" required>
                    <input type="tel" name="tel" placeholder="Vaše telefonní číslo">
                    <textarea name="zprava" rows="5" placeholder="Zpráva" required></textarea>
                    <input type="submit" name="odeslat" value="Odeslat">
                </form>
            </div>
        </div>
        <div class="prava-sekce">
            <div class="kontaktni-udaje">
                <p><span>Cukrárna Klokan</span></p>
                <p>Frýdek - Místek</p>
                <hr>
                <p><a href="tel:+420123456789">+420 123 456 789</a></p>
                <p><a href="mailto:email@email.cz">email@email.cz</a></p>
            </div>
        </div>
    </div>
</section>
<?php
include_once('zapati.php');
?>
