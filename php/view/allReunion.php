<div class="title1">Calendar Project - Bidault Bastien / Widmer Alexis</div>
<div class="allReunions">Reunions pour le mois de :<p>

<?php

$date = date('m/d/Y h:i:s a', time());
echo $date;
?>
<table class="affTab">
  <thead>
    <tr>
      <th>Date</th>
      <th>Duree</th>
      <th>Intitule</th>
      <th>Salle</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($reunions as $reunion) {
        echo "<tr>";

          showReunion($reunion[date_reunion]);
          showReunion($reunion[duree_estimee_reunion]);
          showReunion($reunion[intitule_reunion]);
          showReunion($reunion[salle_reunion]);
          echo "</tr>";
      }
    ?>
  </tbody>
</table>
