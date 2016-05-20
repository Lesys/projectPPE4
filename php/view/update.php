<?php if (isset($_POST['update'])) {
     createNewReunion();
     ?>

     <script type="text/javascript">
          alert("La réunion a été ajoutée.");
          document.location.href="index.php";
     </script>

     <?php }
     else if (isset($_POST['cancel'])) { ?>

     <script type="text/javascript">
        document.location.href="index.php";
     </script>

     <?php } ?>

<form method="post" action="#">
     <fieldset>
          <legend>Reunion</legend>
          <p>

          <label for="datePost">Date/heure :</label>
          <input type="datetime" name="datePost" id="datePost" placeholder="jj-MM-aaaa hh:mm:ss" maxlength="19" required="">

          <br>

          <label for="dureePost">Durée :</label>
          <input type="time" name="dureePost" id="dureePost" placeholder="00:00:00" maxlength="5" required="">

          <br>

          <label for="intitulePost">Intitulé :</label>
          <input type="text" name="intitulePost" id="intitulePost" required="" maxlength="500" required=""/>

          <br>

          <label for="sallePost">Salle :</label>
          <input type="text" name="sallePost" id="sallePost" required="" maxlength="4" required=""/>

          <br>

          <label for="descriptifPost">Descriptif :</label><br>
          <textarea name="descriptifPost" id="descriptifPost" cols="100" rows="10" maxlength="5000" placeholder="Réunion sur l'amortissement de la chute des cheveux en Amazonie..."></textarea>

          <br>

          <br><br>

          <input type="submit" value="Valider les changements" name="update"/>
          <input type="submit" value="Annuler" name="cancel"/>
     </fieldset>
 </form>