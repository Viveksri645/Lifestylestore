<?php
require("common.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="jq.js"></script>
  <script type="text/javascript" name="javascript" src="js/bootstrap.min.js"></script>
  <title>Cart</title>
</head>

<body>
  <?php
  require("header.php");
  ?>
  <?php
  if (isset($_SESSION['email'])) {
    $user_id = $_SESSION['user_id'];
    $inner_join = "SELECT products.id,products.name,products.price from user_items INNER JOIN  users on users.id = user_items.user_id
          INNER JOIN products on products.id=user_items.item_id WHERE user_id = $user_id";
    $inner_join_result = mysqli_query($_con, $inner_join) or die(mysqli_error($_con));
    $row = mysqli_num_rows($inner_join_result);
  }
  ?>
  <div class="container bg-light border rounded my-2">
    <h3 class="text-center text-success p-2 ">My Cart(<?php echo $row ?>)</h3>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-1">
        <table class="table table-sm table-responsive-sm">
          <thead class="text-center">
            <tr>
              <th>Serial Number</th>
              <th>Item Name</th>
              <th>Price</th>
              <th></th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php
            $total = 0;
            if (isset($_SESSION['email'])) {
              $user_id = $_SESSION['user_id'];
              $inner_join = "SELECT products.id,products.name,products.price, user_items.status from user_items INNER JOIN  users on users.id = user_items.user_id
                      INNER JOIN products on products.id=user_items.item_id WHERE user_id = $user_id ";
              $inner_join_result = mysqli_query($_con, $inner_join) or die(mysqli_error($_con));
              $row = mysqli_num_rows($inner_join_result);
              if ($row == 0) {
                echo "<p class='text-danger'>First add items to cart</p>";
              } else {
                for ($rows = 1; $rows < $row + 1; $rows++) {
                  $array = mysqli_fetch_array($inner_join_result);
                  if ($array['status'] == 'Added to cart'){
                  $total = $total + $array['price'];
                  }else{
                    $total = $total+0;
                  }
                  if ($array['status'] == 'Added to cart') {
                    echo "
         <tr>
         <td>$rows</td>
         <td>$array[name]</td>
         <td>$array[price]</td>
         <td><a href='cart-remove.php?id={$array['id']}' class='btn btn-outline-danger btn-sm'>Remove</a></td>
         </tr>";
                  } else {
                    echo "
                  <tr>
                  <td>$rows</td>
                  <td>$array[name]</td>
                  <td>$array[price]</td>
                  <td><button class='btn btn-outline-success btn-sm'>CONFIRMED</button></td>
                  </tr>";
                  }
                }
              }
            } ?>


          </tbody>
        </table>
      </div>
      <div class="col-md-4 offset-1">
        <div class="border bg-light rounded p-1 my-5">
          <h3 class="bg-light text-left">Total:</h3>
          <p class="text-success text-right">Amount payable = <?php echo $total ?></p>
          <p class="text-success">Choose payment option</p>
          <div class="form-check mb-1">
            <input class="form-check-input" type="radio" name="Radios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="Radios">
              cash on delivery
            </label>
          </div>
          <div class="container">
            <form method="POST" action="success.php">
              <button class="btn btn-primary btn-block mb-2" name="order">Proceed to order</button>
            </form>
          </div>

        </div>
      </div>
    </div>

  </div>

  <?php
  include("footer.php");
  ?>

</body>

</html>