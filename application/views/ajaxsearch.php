<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Polosbae
                </h1>
            </div>
        </div>
    </section>
    <section class="hero is-info is-medium">

        <div class="hero-body">
            <div class="container">
                <div class="field has-addons has-addons-centered ">
                    <p class="control">
                        <span class="select">
                            <select>
                                <option>LAPTOP</option>
                                <option>COMPUTER</option>
                            </select>
                        </span>
                    </p>
                    <p class="control " style="width: 50%;">
                        <input type="text" name="input" onkeyup="myFunction()" id="input" placeholder="Search Evrything Here" class="input" />
                    </p>
                    </p>
                    <p class="control" tyle="width: 50%;">
                        <a class="button is-primary">
                            Transfer
                        </a>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover" style="display: none;" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <?php foreach ($h as $product) : ?>
                                    <tr>
                                        <td class="nr">
                                            <a href="<?php echo base_url("home/indexx?id=" . $product->id) ?> " class="use-address">
                                                <?php echo $product->Name; ?>
                                        </td>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                                <script>
                                    $(".use-address").click(function() {
                                        var $row = $(this).closest("tr"); // Find the row
                                        $something = $row.find(".nr").text(); // Find the text
                                        sessionStorage.setItem("nama", $something);
                                        localStorage.setItem("storageName", $something);
                                        alert($something)
                                        // Let's test it out
                                    });
                                </script>
                                <?php
                                $jj =  "<script>document.writeln(something);</script>";
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
       
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("input");
            filter = input.value.toUpperCase();
            table = document.getElementById("dataTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if ($.trim($('#input').val()) == '') {
                        table.style.display = "none";
                    } else {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            table.style.display = "block";
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        }
    </script>

</body>

</html>