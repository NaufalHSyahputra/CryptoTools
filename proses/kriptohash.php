<?php
$p = empty($_POST['p']) ? null : $_POST['p'];
?>
<html>
<head><title>Tugas Hash</title></head>
<style type="text/css">
    table {border-collapse: collapse;}
    table, td, th {border: solid 1px #ccc;}
    th {background: #e1e1e1;border-color: #999;}
    td, th {padding: 0.25em;}
    td.algo {font-weight: bold;}
    tr.on td {background: #f0f0f0;}
</style>
<body>
    <h1>String hashing</h1>
	<div class="box-body">
                Kelompok : <br />
                1. Bayu Abie Rasmana (201581101)<br />
                2. Gihfar Pramadan (201581098)<br />
                3. Imam Mujahid Assalafy (201581121)<br />
                4. Habib Riyansyah (201581099)<br />
                5. Fanolo Gulo (201581006)<br />
				6. Bagas Lutfiarta (201581066)<br />
				7. Andre Kurniawan (201581045)<br />
				8. Agung Patria (201581092)<br />
				9. Rizki Ratno (201581053)<br />
              </div><!-- /.box-body -->
            </div>
    <form method="post" action="<?php echo basename(__FILE__) ?>">
        <p><label for="p">Enter a string to hash:</label><br /><input id="p" type="text" name="p" value="<?php echo $p ?>" /></p>
        <p><input type="submit" name="submit" value="Hash It" /></p>
    </form>
   
    <?php /* If there is a posted value use it */ ?>
    <?php if ($p): ?>
    <hr />
    <h2>Table of hash values for <em><?php echo $p ?></em> based on algorithm</h2>
    <table>
        <tr>
            <th>Algorithm</th>
            <th>Hashed value of <em><?php echo $p ?></em></th>
        </tr>
        <?php /* Loop through each hash algorithm, colorizing every other row */ ?>
        <?php $on = false; foreach (hash_algos() as $algo): ?>
        <tr<?php if ($on): ?> class="on"<?php endif; ?>>
            <td class="algo"><?php echo $algo ?></td>
            <td class="hash"><?php echo hash($algo, $p) ?></td>
        </tr>
    <?php $on = !$on; endforeach; ?>
    </table>
    <?php endif; ?>
</body>
</html>