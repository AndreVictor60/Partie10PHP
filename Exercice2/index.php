<?php
if (!isset($_POST['firstname']) && !isset($_POST['lastname']) && !isset($_POST['age']) && !isset($_POST['society'])) {
    $_POST['firstname'] = '';
    $_POST['lastname'] = '';
    $_POST['age'] = '';
    $_POST['society'] = '';
}
?>

<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Partie 10 TP 2</title>
    </head>
    <body>
        <div class="container">
            <?php
            $civil = ['Monsieur' => 'Mr', 'Madame' => 'Mdm'];
            ?>

            <h1>Formulaire</h1>
            <form method = "POST">
                <div class = "form-group">
                    <label for = "civil">Civilité</label>
                    <select name = "civil" class = "form-control">
                        <?php foreach ($civil as $key => $value) {
                            ?>
                            <option value="<?php echo $key ?>"><?php echo $value ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class = "form-group">
                    <label for = "firstname">Nom</label>
                    <input type = "text" class = "form-control" name = "firstname" value="<?php echo $_POST['firstname'] ?>">
                </div>
                <div class = "form-group">
                    <label for = "lastname">Prénom</label>
                    <input type = "text" class = "form-control" name = "lastname" value="<?php echo $_POST['lastname'] ?>">
                </div>
                <div class = "form-group">
                    <label for = "age">Age</label>
                    <input type = "text" class = "form-control" name = "age" value="<?php echo ($_POST['age'] <= 0) ? 0 : $_POST['age']; ?>">
                </div>
                <div class = "form-group">
                    <label for = "society">Société</label>
                    <input type = "text" class = "form-control" name = "society" value="<?php echo $_POST['society'] ?>">
                </div>
                <input type="submit" value="Valider"/>
            </form>
            <?php if (isset($_POST['civil'])) { ?>
                <label for="civil">Civilité</label>
                <p><?php echo $_POST['civil'] ?></p>
                <label for="firstname">Nom</label>
                <p><?php echo htmlspecialchars($_POST['firstname']) ?></p>
                <label for="lastname">Prénom</label>
                <p><?php echo htmlspecialchars($_POST['lastname']) ?></p>
                <?php if ($_POST['age'] <= 0) { ?>
                    <label for="age">Age</label>
                    <p><?php echo 'Veuillez saisir une age correct' ?></p>
                    <?php
                } else {
                    ?>
                    <label for="age">Age</label>
                    <p><?php echo htmlspecialchars($_POST['age']) ?> ans</p>
                <?php }
                ?>
                <label for="society">Société</label>
                <p><?php echo htmlspecialchars($_POST['society']) ?></p>


                <?php
            }
            ?>
            <a href="../index.php"><button type="button">Retour</button></a>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
