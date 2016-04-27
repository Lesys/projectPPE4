<div id="reunionAlone"> 
     <table class="affTab">
          <thead>
               <tr>
                    <th>ID Reunion</th>
                    <th>Date Reunion</th>
                    <th>Length</th>
                    <th>Intitule</th>
                    <th>Descriptif</th>
               </tr>
          </thead>

          <tr>
               <td id="id"><?php echo $reunion["id_reunion"]; ?></td>
               <td id="date"><?php echo $reunion["date_reunion"]; ?></td>
               <td id="timer"><?php echo $reunion["duree_estimee_reunion"]; ?></td>
               <td id="intitule"><?php echo $reunion["intitule_reunion"]; ?></td>
               <td id="descriptif"><?php echo $reunion["descriptif_reunion"]; ?></td>
          </tr>
     </table>
</div><!-- /content -->