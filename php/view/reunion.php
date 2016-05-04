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
     <div class="buttons">

     <!-- Script pour ouvrir une boîte de dialogue et proposer la suppression ou non de la réunion -->
          <?php if (isset($_POST['delete'])) { ?>

               <script type="text/javascript">
               var reponse = window.confirm("Voulez-vous vraiment supprimer la réunion?");
               if (reponse) {
                    //Confirmation de la suppression
                    alert("La réunion a été supprimée.")
                    //Suppression de la réunion dans la bdd
                    <?php
                    $request = "DELETE * FROM reunion WHERE id_reunion = ".$_GET['id'];
                     ?>
                    document.location.href="index.php"
               }
               else
                    alert("Suppression annulée.")
               </script>

          <?php } ?>
          <form method="post" action="#">
               <input type="submit" value="Supprimer la réunion" name="delete">
          </form>

          <a href="index.php?action=update"><input type="button" value="Modifier la réunion"></input></a>
     </div>
</div><!-- /content -->
