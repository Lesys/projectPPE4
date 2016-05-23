<?php if (isset($_POST['update'])) {
     updateReunion();
     ?>

     <script type="text/javascript">
          alert("La réunion a été modifié.");
          document.location.href="index.php";
     </script>

     <?php }

     else if (isset($_POST['cancel'])) { ?>

     <script type="text/javascript">
          alert("Modification annulée.");
          document.location.href="index.php";
     </script>

     <?php } ?>

<form method="post" action="#">
     <fieldset>
          <legend>Reunion</legend>
          <p>

          <label for="datePost">Date/heure :</label>
          <input type="datetime" name="datePost" id="datePost" placeholder="aaaa-MM-jj hh:mm:ss" maxlength="19" required="" value="<?php echo $reunion['date_reunion']; ?>"/>

          <br>

          <label for="dureePost">Durée :</label>
          <input type="time" name="dureePost" id="dureePost" placeholder="hh:mm:ss" maxlength="5" required="" value="<?php echo $reunion['duree_estimee_reunion']; ?>"/>

          <br>

          <label for="intitulePost">Intitulé :</label>
          <input type="text" name="intitulePost" placeholder="Intitule" id="intitulePost" required="" maxlength="500" required="" value="<?php echo $reunion['intitule_reunion']; ?>"/>

          <br>

          <label for="sallePost">Salle :</label>
               <select name="sallePost">
               <?php
                    foreach ($salles as $salle) { ?>
                         <option value="<?php echo $salle['id_salle']; ?>" <?php if ($reunion['salle_reunion'] == $salle['id_salle']) { ?>
                              selected="selected" <?php } ?> ><?php echo $salle['num_salle']; ?></option>
                    <?php } ?>
          </select>

          <br>

          <label for="descriptifPost">Descriptif :</label><br>
          <textarea name="descriptifPost" id="descriptifPost" cols="100" rows="10" maxlength="5000" placeholder="Réunion sur l'amortissement de la chute des cheveux en Amazonie..." value="<?php echo $reunion['descriptif_reunion']; ?>"></textarea>

          <br>

          <br><br>

          <input type="submit" value="Valider les changements" name="update"/>
          <input type="submit" value="Annuler" name="cancel"/>
     </fieldset>
 </form>