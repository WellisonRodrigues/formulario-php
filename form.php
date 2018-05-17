<?php
/**
 * Created by PhpStorm.
 * User: wrodrigues
 * Date: 16/05/2018
 * Time: 16:08
 */
?>
<div class="wraper">
    <form method="post" action="index.php" onSubmit="return enviardados();">
        <label>Data:</label>
        <input type="date" name="tx_data" id="data" required>
        <br>
        <label> Texto:</label>
        <input type="text" name="tx_texto" id="texto" required>
        <br>
        <label> checkbox:</label>
        <input type="checkbox" name="tx_check" required>
        <br>
        <label>Texto grande:</label>
        <textarea name="tx_texto_grande" id="texto_grande" rows="10" cols="30" required></textarea>
        <br><br>
        <input class="alig-submit" type="submit" name="submit" value="submit">
    </form>
</div>
