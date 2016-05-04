<?php

//createNewField();

?>

<form method="post" action="traitement.php">
  <fieldset>
  <legend>Reunion</legend>
   <p>

     <label for="datePost">Date/heure : * </label>
     <input type="datetime" name="datePost" id="datePost" placeholder="jj/MM/aaaa hh:mm:ss" maxlength="19" required="">

     <br>

     <label for="dureePost">Durée : * </label>
     <input type="time" name="dureePost" id="dureePost" placeholder="00:00" maxlength="5" required="">

     <br>

     <label for="intitulePost">Intitulé : * </label>
     <input type="text" name="intitulePost" id="intitulePost" required="" maxlength="500" required=""/>

     <br>

     <label for="sallePost">Salle : * </label>
     <input type="text" name="sallePost" id="sallePost" required="" maxlength="4" required=""/>

     <br>

     <label for="descriptifPost">Descriptif : </label><br>
     <textarea name="descriptifPost" id="descriptifPost" cols="100" rows="10" maxlength="5000" placeholder="Réunion sur l'amortissement de la chute des cheveux en Amazonie..."></textarea>

     <br>

     <br><br>

     <input type="submit" value="valider"/>
     <input type="reset" value="Effacer" />
     <br><br>
     * : Champs obligatoires

   </p>
 </fieldset>

</form>
