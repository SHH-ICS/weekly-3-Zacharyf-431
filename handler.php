        <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $a = 0;
            $b = 0;

            // Corrected variable names to match the form input fields: 'size' and 'toppings'
            $x = strtolower(trim($_POST['size']));

            if ($x == 'large' || $x == 'l') {
              $a = 6.00;
            } elseif ($x == 'extra large' || $x == 'xl') {
              $a = 10.00;
            } else {
              echo "<p>Please enter a valid size (Large / Extra Large).</p>";
              exit();
            }

            // Corrected the name of the 'toppings' field to match the form
            $t = isset($_POST['toppings']) ? intval($_POST['toppings']) : 0;

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

            $v = ($a + $b) * 1.13; // Add 13% tax

            echo "<p>Your total cost is: $" . number_format($v, 2) . "</p>";
          }
          ?>

        <br /><br />
        <center>
          <a href="<?php echo $_SERVER['PHP_SELF']; ?>">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Do Another?</button>
          </a>
        </center>

        </body>

        </html>