<?php
function reviewforms(){?>


    <style>
        body {
            margin: 20px;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        label+label {
            font-weight: bold;
            color: #555;
        }

        br {
            margin-bottom: 16px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            margin: 8px 4px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

    <div class="container">
        <form>
            <?php for ($i = 1; $i <= $_SESSION['nb_form']; $i++) { ?>
                <h1>Adresse <?php echo $i; ?></h1>
                <label for="street">Adresse :</label>
                <label for=""><?php echo $_POST['street' . $i] ?></label>
                <br>

                <label for="street_nb">Numéro de rue :</label>
                <label for=""><?php echo $_POST['street_nb' . $i] ?></label>
                <br>

                <label for="type">Type adresse :</label>
                <label for=""><?php echo $_POST['type' . $i] ?></label>

                <br>

                <label for="city">Ville :</label>
                <label for=""><?php echo $_POST['city' . $i] ?></label>

                <br>

                <label for="zipcode">Code postal :</label>
                <label for=""><?php echo $_POST['zipcode' . $i] ?></label>

                <br>
            <?php };?>

            <button formaction="configAdress.php">Modifier</button>
            <button formaction="db.php" >Sauvegarder</button>

        </form>
    </div>

<?php ; };
?>
