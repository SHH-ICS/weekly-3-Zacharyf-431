        <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $a = 0;
            $b = 0;

            $x = strtolower(trim($_POST['size']));

            if ($x == 'large' || $x == 'l') {
              $a = 6.00;
            } elseif ($x == 'extra large' || $x == 'xl') {
              $a = 10.00;
            } else {
              echo "<p>Please enter a valid size (Large / Extra Large).</p>";
              exit();
            }

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

            $v = ($a + $b) * 1.13;

            echo "<p>Your total cost is: $" . number_format($v, 2) . "</p>";
          }
          ?>