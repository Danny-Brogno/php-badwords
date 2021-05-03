<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>

    <style>

      body {
        background-color: black;
        color: white;
      }

      header {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-size: 20px;
      }

    </style>

    <header>
      <h1>FULMICOTONE </h1>

      <h2>
        <?php
          $x = "Io sono un test";
          echo $x;
        ?>
      </h2>

      <h3>
        Hello
        <?php
          echo $_GET["name"];
          echo " age: ";
          echo $_GET["value"];
        ?>
      </h3>

      <h4>
        <?php
          $frutta = "mela pera banana ananas kiwi mango";
          $fruttaSingola = explode(" ", $frutta);
          echo $fruttaSingola[0];
          echo $fruttaSingola[1];
         ?>
      </h4>

      <h4>
        <?php
          $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
          echo str_replace(" ", " :-) ", $testo);
         ?>
      </h4>

      <h4>
        <?php
          $testoLungo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
          echo strlen($testoLungo);
          echo str_replace("dolor", "***", $testoLungo);
         ?>
      </h4>

    </header>
    <!-- PLEASE COPY AND PASTE THIS LINK INTO THE SEARCH BAR -->
    <!-- http://localhost/?name=Danny%20&value=20 -->
  </body>

</html>
