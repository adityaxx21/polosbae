<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>

<body>

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Polosbae
                </h1>
                <div class="field has-addons has-addons-centered ">
                    <p class="control">
                        <span class="select">
                            <select>
                                <option>LAPTOP </option>
                                <option>COMPUTER</option>
                                <option><?php echo $id; ?></option>
                            </select>
                        </span>
                    </p>
                    <p class="control " style="width: 50%;">
                        <input class="input" type="text" placeholder="Amount of money">
                    </p>
                    <p class="control" tyle="width: 50%;">
                        <a class="button is-primary">
                            Transfer
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <section class="hero is-info is-medium">

        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Processor</th>
                <th>Gpu</th>
                <th>Display</th>
                <th>Memory</th>
                <th>Storage</th>
                <th>Weight</th>
                <th>Dimension</th>
                <th>Battery</th>
                <th>Image</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($h as $product) : ?>
                <tr>
                  <td class="nr">
                    <?php echo $product->Name; ?>
                  </td>
                  <td>
                  <a href="<?php echo base_url("home/indexx?id=".$product->id)?> " class="use-address" >
                      uji
                  </td>
                  <td>
                    <?php echo $product->Processor; ?>
                  </td>
                  <td>
                    <?php echo $product->Gpu; ?>
                  </td>
                  <td>
                    <?php echo $product->Display; ?>
                  </td>
                  <td>
                    <?php echo $product->Storage; ?>
                  </td>
                  <td>
                    <?php echo $product->Memory; ?>
                  </td>
                  <td>
                    <?php echo $product->Weight ?>
                  </td>
                  <td>
                    <?php echo $product->Dimension ?>
                  </td>
                  <td>
                    <?php echo $product->Battery ?>
                  </td>
                </tr>
              <?php endforeach; ?>
              <script>
                $(".use-address").click(function() {
                  var $row = $(this).closest("tr"); // Find the row
                  $something = $row.find(".nr").text(); // Find the text
                  sessionStorage.setItem("nama", $something);
                  localStorage.setItem("storageName",$something);

                  // Let's test it out
                });
              </script>
              <?php
              $jj =  "<script>document.writeln(something);</script>";
              ?>
            </tbody>
          </table>

            <div class="hero-body">
                <div id="img-dev">
                    <img src="https://selular.id/wp-content/uploads/2020/08/Pixel-4a-696x606.jpg" alt="" width="20%">
                </div>
            </div>
            <div class="hero-body">

            </div>
        </section>

        <section class="hero is-alert is-medium">

            <div class="hero-body">
            </div>
        </section>
    </section>


</body>

</html>