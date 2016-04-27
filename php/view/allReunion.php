<div class="allReunions">


    <table class="affTab">
        <thead>
            <tr>
                <th>Date</th>
                <th>Duree</th>
                <th>Intitule</th>
                <th>Salle</th>
                <th>Lien Reunion</th>
            </tr>
        </thead>
        <tbody>
    <?php
        foreach ($reunions as $reunion) {
            echo "<tr>";
                showReunion($reunion[date_reunion]);
                showReunion($reunion[duree_estimee_reunion]);
                showReunion($reunion[intitule_reunion]);
                showReunion($reunion[salle_reunion]);?>
                <td><a href="index.php?action=reunion&id=<?php echo $reunion['id_reunion']; ?>">Look at reunion <?php echo $reunion['id_reunion']; ?></td>
                <?php echo "</tr>";
        }
    ?>
  </tbody>
</table>
<br>
<a href="index.php?action=create"><input type="button" value="Creer"></input></a>

                <?php

                    $date = date('m/d/Y h:i:s a', time());
                    echo $date;
                    ?>
        
</div>
