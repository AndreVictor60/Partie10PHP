<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Exercice 3 Partie 10</title>
    </head>
    <body>
        <div class="container">
            <?php
            $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
            $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
            $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
            $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

            function displayTal($array) {

                $name = $array['name'];
                $firstname = $array['firstname'];
                $portrait = '<img width="100px" height="120px" src="' . $array['portrait'] . '" />';
                return $portrait . ' <p>' . $name . ' ' . $firstname . '</p>';
            }
            ?>

            <div class="panel panel-default">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel-heading">
                            <h1>Les portraits</h1>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class=' col-lg-offset-3 col-lg-2 image'>
                            <?php echo displayTal($portrait1); ?>
                        </div>
                        <div class='col-lg-offset-2 col-lg-2 image'>
                            <?php echo displayTal($portrait2); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class='col-lg-offset-3 col-lg-2 image'>
                            <?php echo displayTal($portrait3); ?>
                        </div>
                        <div class='col-lg-offset-2 col-lg-2 image'>
                            <?php echo displayTal($portrait4); ?>
                        </div>
                    </div>
                    <a href="../index.php"><button type="button">Retour</button></a>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
