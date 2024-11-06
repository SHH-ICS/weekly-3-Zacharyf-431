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
            $a = 0;
            $b = 0;

            $x = strtolower(trim($_POST['Size']));

            if ($x == 'large' || $x == 'l') {
              $a = 6.00;
            } elseif ($x == 'extra large' || $x == 'xl') {
              $a = 10.00;
            } else {
              echo "<p>Please enter a valid size (Large / Extra Large).</p>";
              exit();
            }

            $t = isset($_POST['Toppings']) ? intval($_POST['Toppings']) : 0;
            if ($t == 1) {
              $b = 1.00;
            } elseif ($t == 2) {
              $b = 1.75;
            } elseif ($t == 3) {
              $b = 2.50;
            } elseif ($t == 4) {
              $b = 3.35;
            } elseif ($t == 0) {
              $b = 0.00;
            } else {
              echo "<p>Please enter a valid number of toppings (0-4).</p>";
              exit();
            }

            $v = ($a + $b) * 1.13;

            echo "<p>Your total cost is: $" . number_format($v, 2) . "</p>";
          }
          ?>

          <br /><br />
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
              Do Another?
            </button></a>

        </center>

      </div>
    </main>
  </div>

</body>

</html>