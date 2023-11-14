<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        margin: 0;
    }

    .form-container {
        width: 600px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    form {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input, select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<?php
session_start();
if (!isset ($_SESSION['nb_form'])){
$_SESSION['nb_form'] =$_POST['nb_adress'];} ?>
 
<div class="form-container">
    <form action="result.php" method="post" name="adress">
        <?php for ($i = 1; $i <= $_SESSION['nb_form']; $i++) { ?>
            <h1>Formulaire adresse <?php echo $i;?></h1>
            <label for="street">Adresse :</label>
            <input type="text" name="<?php echo "street" . $i ?>" maxlength="50" value="<?php echo isset($_SESSION['street' . $i]) ? $_SESSION['street' . $i] : ''; ?>">
            <br>

            <label for="street_nb">Numéro de rue :</label>
            <input type="number" name="<?php echo "street_nb". $i?>" value="<?php echo isset($_SESSION['street_nb' . $i]) ? $_SESSION['street_nb' . $i] : ''; ?>">
            <br>

            <label for="type">Type adresse :</label>
            <select name="<?php echo "type". $i?>" maxlength="20" value="<?php echo isset($_SESSION['type' . $i]) ? $_SESSION['type' . $i] : ''; ?>">
                <option value="livraison">Livraison</option>
                <option value="facturation">Facturation</option>
                <option value="autre">Autre</option>
            </select>
            <br>

            <label for="city">Ville :</label>
            <select name="<?php echo "city". $i?>" value="<?php echo isset($_SESSION['city' . $i]) ? $_SESSION['city' . $i] : ''; ?>">
                <option value="Montreal">Montréal</option>
                <option value="Laval">Laval</option>
                <option value="Toronto">Toronto</option>
                <option value="Quebec">Québec</option>
            </select>
            <br>

            <label for="zipcode">Code postal :</label>
            <input type="text" name="<?php echo "zipCode". $i?>" value="<?php echo isset($_SESSION['zipCode' . $i]) ? $_SESSION['zipCode' . $i] : ''; ?>">
            <br> 
        <?php }; ?>
        <input type="submit" value="Soumettre">
    </form>
</div>
