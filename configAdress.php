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

    #erreur{
        font-size: 15px;
        color: red;
    }
</style>

<?php
session_start();
if (!isset ($_SESSION['nb_form'])){
$_SESSION['nb_form'] =$_POST['nb_adress'];} 

if ($_POST){
    if (empty($_POST['nb_adress']) || !is_numeric($_POST['nb_adress'])) {
        $_SESSION['erreur_msg'] = "Le nombre d'adresses doit être un nombre entier.";
        header("Location: index.php");
    }}
?>

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
            <select name="<?php echo "type". $i?>" maxlength="20"> 
                <option value="Livraison"  <?php if (isset($_SESSION['type' . $i])){ if ($_SESSION['type' . $i] == "Livraison"){echo "selected";} }; ?>>Livraison </option>
                <option value="Facturation" <?php if (isset($_SESSION['type' . $i])){ if ($_SESSION['type' . $i] == "Facturation"){echo "selected";} }; ?>>Facturation</option>
                <option value="Autre" <?php if (isset($_SESSION['type' . $i])){ if ($_SESSION['type' . $i] == "Autre"){echo "selected";}};?>>Autre</option>
            </select>
            <br>

            <label for="city">Ville :</label>
            <select name="<?php echo "city". $i?>" >
                <option value="Montreal" <?php if (isset($_SESSION['city' . $i])){ if ($_SESSION['city' . $i] == "Montreal"){echo "selected";}};?>>Montreal</option>
                <option value="Laval" <?php if (isset($_SESSION['city' . $i])){ if ($_SESSION['city' . $i] == "Laval"){echo "selected";}};?>>Laval</option>
                <option value="Toronto" <?php if (isset($_SESSION['city' . $i])){ if ($_SESSION['city' . $i] == "Toronto"){echo "selected";}};?>>Toronto</option>
                <option value="Quebec" <?php if (isset($_SESSION['city' . $i])){ if ($_SESSION['city' . $i] == "Quebec"){echo "selected";}};?>>Quebec</option>
            </select>
            <br>

            <label for="zipcode">Code postal :</label>
            <input type="text" name="<?php echo "zipcode". $i?>" value="<?php echo isset($_SESSION['zipcode' . $i]) ? $_SESSION['zipcode' . $i] : ''; ?>">
            <br> 
            <label id="erreur"><?php if(isset($_SESSION['address_erreur_msg'])) echo $_SESSION['address_erreur_msg']; ?></label>

        <?php }; ?>
        <input type="submit" value="Soumettre">
    </form>
</div>
