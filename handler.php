<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <title>Pizza Order</title>

</head>

<body>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Pizza Calculator</span>
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content"><br />

        <center>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="text" id="size" name="Size" required>
              <label class="mdl-textfield__label" for="size">Enter Pizza Size (Large / Extra Large):</label>
            </div>

            <br />

            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type="number" id="toppings" name="Toppings" min="0" max="4" required>
              <label class="mdl-textfield__label" for="toppings">Enter Number of Toppings (0-4):</label>
            </div>

            <br />

            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
              Calculate Cost
            </button>
          </form>

          <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo "<p>Form Submitted Successfully!</p>";
          }
          ?>

        </center>

      </div>
    </main>
  </div>

</body>

</html>