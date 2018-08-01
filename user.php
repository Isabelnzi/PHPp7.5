<!DOCTYPE html>
    <html lang="fr" dir="ltr">
      <head>
        <meta charset="utf-8" />
        <title>user.php</title>
      </head>
      <body>
        <p>
        <?php
        if (isset($_POST['firstname']) && isset($_POST['lastname']))
      {
       echo 'Bonjour, ' . ($_POST['firstname']) . ' ' . ($_POST['lastname']);
     }
       ?>
     </p>
      </body>
    </html>
