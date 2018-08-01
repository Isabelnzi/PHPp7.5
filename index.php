<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>P7ex5</title>
  </head>
  <body>
    <form action='index.php' method='POST'>
      <select name="Civilité">
      <option value="choix1">Mr</option>
      <option value="choix2">Mme</option>
      <option value="choix3">Mlle</option>
    </select>
    <label for="lastname">Nom: </label><input type="text"name="lastname"placeholder="Nom">
    <label for="firstname">Prénom: </label><input type="text"name="firstname"placeholder="Prénom">
    <input type="submit"value="valider">
  </form>

    <?php
    // Vérification des POST s'ils existent ,Ce formulaire doit rediriger vers la page index.php.
    if (isset($_POST['civilité']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {

        echo ($_POST['civilité']) . ', ' . ($_POST['firstname']) . ' ' . ($_POST['lastname']);
    }
    ?>
  </body>
</html>
