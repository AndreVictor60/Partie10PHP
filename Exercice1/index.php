<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Exercice 1 Partie 10</title>
    </head>

    <body>
        <div class = "container">
            <?php
            $country = array(
                "AF" => "Afghanistan",
                "AL" => "Albania",
                "DZ" => "Algeria",
                "AS" => "American Samoa",
                "AD" => "Andorra",
                "AO" => "Angola",
                "AI" => "Anguilla",
                "AQ" => "Antarctica",
                "AG" => "Antigua and Barbuda",
                "AR" => "Argentina",
                "AM" => "Armenia",
                "AW" => "Aruba",
                "AU" => "Australia",
                "AT" => "Austria",
                "AZ" => "Azerbaijan",
                "BS" => "Bahamas",
                "BH" => "Bahrain",
                "BD" => "Bangladesh",
                "BB" => "Barbados",
                "BY" => "Belarus",
                "BE" => "Belgium",
                "BZ" => "Belize",
                "BJ" => "Benin",
                "BM" => "Bermuda",
                "BT" => "Bhutan",
                "BO" => "Bolivia",
                "BA" => "Bosnia and Herzegovina",
                "BW" => "Botswana",
                "BV" => "Bouvet Island",
                "BR" => "Brazil",
                "IO" => "British Indian Ocean Territory",
                "BN" => "Brunei Darussalam",
                "BG" => "Bulgaria",
                "BF" => "Burkina Faso",
                "BI" => "Burundi",
                "KH" => "Cambodia",
                "CM" => "Cameroon",
                "CA" => "Canada",
                "CV" => "Cape Verde",
                "KY" => "Cayman Islands",
                "CF" => "Central African Republic",
                "TD" => "Chad",
                "CL" => "Chile",
                "CN" => "China",
                "CX" => "Christmas Island",
                "CC" => "Cocos (Keeling) Islands",
                "CO" => "Colombia",
                "KM" => "Comoros",
                "CG" => "Congo",
                "CD" => "Congo, the Democratic Republic of the",
                "CK" => "Cook Islands",
                "CR" => "Costa Rica",
                "CI" => "Cote D'Ivoire",
                "HR" => "Croatia",
                "CU" => "Cuba",
                "CY" => "Cyprus",
                "CZ" => "Czech Republic",
                "DK" => "Denmark",
                "DJ" => "Djibouti",
                "DM" => "Dominica",
                "DO" => "Dominican Republic",
                "EC" => "Ecuador",
                "EG" => "Egypt",
                "SV" => "El Salvador",
                "GQ" => "Equatorial Guinea",
                "ER" => "Eritrea",
                "EE" => "Estonia",
                "ET" => "Ethiopia",
                "FK" => "Falkland Islands (Malvinas)",
                "FO" => "Faroe Islands",
                "FJ" => "Fiji",
                "FI" => "Finland",
                "FR" => "France",
                "GF" => "French Guiana",
                "PF" => "French Polynesia",
                "TF" => "French Southern Territories",
                "GA" => "Gabon",
                "GM" => "Gambia",
                "GE" => "Georgia",
                "DE" => "Germany",
                "GH" => "Ghana",
                "GI" => "Gibraltar",
                "GR" => "Greece",
                "GL" => "Greenland",
                "GD" => "Grenada",
                "GP" => "Guadeloupe",
                "GU" => "Guam",
                "GT" => "Guatemala",
                "GN" => "Guinea",
                "GW" => "Guinea-Bissau",
                "GY" => "Guyana",
                "HT" => "Haiti",
                "HM" => "Heard Island and Mcdonald Islands",
                "VA" => "Holy See (Vatican City State)",
                "HN" => "Honduras",
                "HK" => "Hong Kong",
                "HU" => "Hungary",
                "IS" => "Iceland",
                "IN" => "India",
                "ID" => "Indonesia",
                "IR" => "Iran, Islamic Republic of",
                "IQ" => "Iraq",
                "IE" => "Ireland",
                "IL" => "Israel",
                "IT" => "Italy",
                "JM" => "Jamaica",
                "JP" => "Japan",
                "JO" => "Jordan",
                "KZ" => "Kazakhstan",
                "KE" => "Kenya",
                "KI" => "Kiribati",
                "KP" => "Korea, Democratic People's Republic of",
                "KR" => "Korea, Republic of",
                "KW" => "Kuwait",
                "KG" => "Kyrgyzstan",
                "LA" => "Lao People's Democratic Republic",
                "LV" => "Latvia",
                "LB" => "Lebanon",
                "LS" => "Lesotho",
                "LR" => "Liberia",
                "LY" => "Libyan Arab Jamahiriya",
                "LI" => "Liechtenstein",
                "LT" => "Lithuania",
                "LU" => "Luxembourg",
                "MO" => "Macao",
                "MK" => "Macedonia, the Former Yugoslav Republic of",
                "MG" => "Madagascar",
                "MW" => "Malawi",
                "MY" => "Malaysia",
                "MV" => "Maldives",
                "ML" => "Mali",
                "MT" => "Malta",
                "MH" => "Marshall Islands",
                "MQ" => "Martinique",
                "MR" => "Mauritania",
                "MU" => "Mauritius",
                "YT" => "Mayotte",
                "MX" => "Mexico",
                "FM" => "Micronesia, Federated States of",
                "MD" => "Moldova, Republic of",
                "MC" => "Monaco",
                "MN" => "Mongolia",
                "MS" => "Montserrat",
                "MA" => "Morocco",
                "MZ" => "Mozambique",
                "MM" => "Myanmar",
                "NA" => "Namibia",
                "NR" => "Nauru",
                "NP" => "Nepal",
                "NL" => "Netherlands",
                "AN" => "Netherlands Antilles",
                "NC" => "New Caledonia",
                "NZ" => "New Zealand",
                "NI" => "Nicaragua",
                "NE" => "Niger",
                "NG" => "Nigeria",
                "NU" => "Niue",
                "NF" => "Norfolk Island",
                "MP" => "Northern Mariana Islands",
                "NO" => "Norway",
                "OM" => "Oman",
                "PK" => "Pakistan",
                "PW" => "Palau",
                "PS" => "Palestinian Territory, Occupied",
                "PA" => "Panama",
                "PG" => "Papua New Guinea",
                "PY" => "Paraguay",
                "PE" => "Peru",
                "PH" => "Philippines",
                "PN" => "Pitcairn",
                "PL" => "Poland",
                "PT" => "Portugal",
                "PR" => "Puerto Rico",
                "QA" => "Qatar",
                "RE" => "Reunion",
                "RO" => "Romania",
                "RU" => "Russian Federation",
                "RW" => "Rwanda",
                "SH" => "Saint Helena",
                "KN" => "Saint Kitts and Nevis",
                "LC" => "Saint Lucia",
                "PM" => "Saint Pierre and Miquelon",
                "VC" => "Saint Vincent and the Grenadines",
                "WS" => "Samoa",
                "SM" => "San Marino",
                "ST" => "Sao Tome and Principe",
                "SA" => "Saudi Arabia",
                "SN" => "Senegal",
                "CS" => "Serbia and Montenegro",
                "SC" => "Seychelles",
                "SL" => "Sierra Leone",
                "SG" => "Singapore",
                "SK" => "Slovakia",
                "SI" => "Slovenia",
                "SB" => "Solomon Islands",
                "SO" => "Somalia",
                "ZA" => "South Africa",
                "GS" => "South Georgia and the South Sandwich Islands",
                "ES" => "Spain",
                "LK" => "Sri Lanka",
                "SD" => "Sudan",
                "SR" => "Suriname",
                "SJ" => "Svalbard and Jan Mayen",
                "SZ" => "Swaziland",
                "SE" => "Sweden",
                "CH" => "Switzerland",
                "SY" => "Syrian Arab Republic",
                "TW" => "Taiwan, Province of China",
                "TJ" => "Tajikistan",
                "TZ" => "Tanzania, United Republic of",
                "TH" => "Thailand",
                "TL" => "Timor-Leste",
                "TG" => "Togo",
                "TK" => "Tokelau",
                "TO" => "Tonga",
                "TT" => "Trinidad and Tobago",
                "TN" => "Tunisia",
                "TR" => "Turkey",
                "TM" => "Turkmenistan",
                "TC" => "Turks and Caicos Islands",
                "TV" => "Tuvalu",
                "UG" => "Uganda",
                "UA" => "Ukraine",
                "AE" => "United Arab Emirates",
                "GB" => "United Kingdom",
                "US" => "United States",
                "UM" => "United States Minor Outlying Islands",
                "UY" => "Uruguay",
                "UZ" => "Uzbekistan",
                "VU" => "Vanuatu",
                "VE" => "Venezuela",
                "VN" => "Viet Nam",
                "VG" => "Virgin Islands, British",
                "VI" => "Virgin Islands, U.s.",
                "WF" => "Wallis and Futuna",
                "EH" => "Western Sahara",
                "YE" => "Yemen",
                "ZM" => "Zambia",
                "ZW" => "Zimbabwe"
            );

            $countryBirth = array('Afghane',
                'Albanaise',
                'Algerienne',
                'Allemande',
                'Americaine',
                'Andorrane',
                'Angolaise',
                'Antiguaise et barbudienne',
                'Argentine',
                'Armenienne',
                'Australienne',
                'Autrichienne',
                'Azerbaïdjanaise',
                'Bahamienne',
                'Bahreinienne',
                'Bangladaise',
                'Barbadienne',
                'Belge',
                'Belizienne',
                'Beninoise',
                'Bhoutanaise',
                'Bielorusse',
                'Birmane',
                'Bissau-Guinéenne',
                'Bolivienne',
                'Bosnienne',
                'Botswanaise',
                'Bresilienne',
                'Britannique',
                'Bruneienne',
                'Bulgare',
                'Burkinabe',
                'Camerounaise',
                'Canadienne',
                'Cap-verdienne',
                'Centrafricaine',
                'Chilienne',
                'Chinoise',
                'Chypriote',
                'Colombienne',
                'Comorienne',
                'Congolaise',
                'Costaricaine',
                'Croate',
                'Cubaine',
                'Danoise',
                'Djiboutienne',
                'Dominicaine',
                'Dominiquaise',
                'Egyptienne',
                'Emirienne',
                'Equato-guineenne',
                'Equatorienne',
                'Erythreenne',
                'Espagnole',
                'Est-timoraise',
                'Estonienne',
                'Ethiopienne',
                'Fidjienne',
                'Finlandaise',
                'Française',
                'Gabonaise',
                'Grenadienne',
                'Guatemalteque',
                'Guineenne',
                'Guyanienne',
                'Haïtienne',
                'Hellenique',
                'Hongroise',
                'Indienne',
                'Indonesienne',
                'Irakienne',
                'Irlandaise',
                'Islandaise',
                'Israélienne',
                'Italienne',
                'Ivoirienne',
                'Jamaïcaine',
                'Japonaise',
                'Jordanienne',
                'Kazakhstanaise',
                'Kenyane',
                'Kirghize',
                'Kiribatienne',
                'Kittitienne-et-nevicienne',
                'Kossovienne',
                'Koweitienne',
                'Laotienne',
                'Lesothane',
                'Lettone',
                'Libanaise',
                'Liberienne',
                'Libyenne',
                'Liechtensteinoise',
                'Lituanienne',
                'Luxembourgeoise',
                'Macedonienne',
                'Malaisienne',
                'Malawienne',
                'Maldivienne',
                'Malgache',
                'Malienne',
                'Maltaise',
                'Marocaine',
                'Marshallaise',
                'Mauricienne',
                'Mauritanienne',
                'Mexicaine',
                'Micronesienne',
                'Moldave',
                'Monegasque',
                'Mongole',
                'Montenegrine',
                'Mozambicaine',
                'Namibienne',
                'Nauruane',
                'Neerlandaise',
                'Neo-zelandaise',
                'Nepalaise',
                'Nicaraguayenne',
                'Nigeriane',
                'Nigerienne',
                'Nord-coréenne',
                'Norvegienne',
                'Omanaise',
                'Ougandaise',
                'Ouzbeke',
                'Pakistanaise',
                'Palau',
                'Palestinienne',
                'Panameenne',
                'Papouane-neoguineenne',
                'Paraguayenne',
                'Peruvienne',
                'Philippine',
                'Polonaise',
                'Portoricaine',
                'Portugaise',
                'Qatarienne',
                'Roumaine',
                'Russe',
                'Rwandaise',
                'Saint-lucienne',
                'Saint-marinaise',
                'Saint-vincentaise-et-grenadine',
                'Salomonaise',
                'Salvadorienne',
                'Samoane',
                'Santomeenne',
                'Saoudienne',
                'Senegalaise',
                'Serbe',
                'Seychelloise',
                'Sierra-leonaise',
                'Singapourienne',
                'Slovaque',
                'Slovene',
                'Somalienne',
                'Soudanaise',
                'Sri-lankaise',
                'Sud-africaine',
                'Sud-coréenne',
                'Suedoise',
                'Suisse',
                'Surinamaise',
                'Swazie',
                'Syrienne',
                'Tadjike',
                'Taiwanaise',
                'Tanzanienne',
                'Tchadienne',
                'Tcheque',
                'Thaïlandaise',
                'Togolaise',
                'Tonguienne',
                'Trinidadienne',
                'Tunisienne',
                'Turkmene',
                'Turque',
                'Tuvaluane',
                'Ukrainienne',
                'Uruguayenne',
                'Vanuatuane',
                'Venezuelienne',
                'Vietnamienne',
                'Yemenite',
                'Zambienne',
                'Zimbabweenne'
            );
            $diploma = ['sans', 'Bac', 'Bac+2', 'Bac+3', 'supérieur'];
            if (isset($_POST['firstname']) and isset($_POST['lastname']) AND isset($_POST['countryBirth']) AND isset($_POST['adress']) AND isset($_POST['email']) AND isset($_POST['tel'])AND isset($_POST['Diploma']) AND isset($_POST['nbpoleemploi']) AND isset($_POST['nbbadge']) AND isset($_POST['urllien']) AND isset($_POST['hero']) AND isset($_POST['hack']) AND isset($_POST['data'])) {
                ?>
                <h1 style="text-align: center;">Votre récapitulatif</h1>
                <label for = "firstname">Nom</label>
                <p name="firstname"><?php echo htmlspecialchars($_POST['firstname']); ?></p>

                <label for = "lastname">Prénom</label>
                <p name="lastname"><?php echo htmlspecialchars($_POST['lastname']); ?></p>

                <label for = "birthDate">Date de naissance</label>
                <p><?php echo htmlspecialchars($_POST['birthDate']); ?></p>
                <label for = "countryBirth">Pays de naissance</label>
                <p><?php echo htmlspecialchars($_POST['countryBirth']); ?></p>
                <label for = "country">Nationalité</label>
                <p><?php echo htmlspecialchars($_POST['country']); ?></p>
                <label for = "adress">Adresse</label>
                <p><?php echo htmlspecialchars($_POST['adress']); ?></p>
                <label for = "email">Email</label>
                <p><?php echo htmlspecialchars($_POST['email']); ?></p>
                <label for = "tel">Téléphone</label>
                <p><?php echo htmlspecialchars($_POST['tel']); ?></p>
                <label for = "Diploma">Diplôme</label>
                <p><?php echo htmlspecialchars($_POST['Diploma']); ?></p>
                <label for = "nbpoleemploi">Numéro pôle emploi</label>
                <p><?php echo htmlspecialchars($_POST['nbpoleemploi']); ?></p>
                <label for = "nbbadge">Nombre de badge</label>
                <p><?php echo htmlspecialchars($_POST['nbbadge']); ?></p>
                <label for = "urllien">Liens codecademy</label>
                <p><?php echo htmlspecialchars($_POST['urllien']); ?></p>
                <label for = "hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                <p><?php echo htmlspecialchars($_POST['hero']); ?></p>
                <label for = "hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                <p><?php echo htmlspecialchars($_POST['hack']); ?></p>
                <label for = "data">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                <p><?php echo htmlspecialchars($_POST['data']); ?></p>
                <?php
            } else {
                ?>
                <form method = "POST">
                    <div class = "form-group">
                        <label for = "firstname">Nom</label>
                        <input type = "text" class = "form-control" name = "firstname">
                    </div>
                    <div class = "form-group">
                        <label for = "lastname">Prénom</label>
                        <input type = "text" class = "form-control" name = "lastname">
                    </div>
                    <div class = "form-group">
                        <label for = "birthDate">Date de naissance</label>
                        <input type = "date" class = "form-control" name = "birthDate">
                    </div>
                    <div class = "form-group">
                        <label for = "countryBirth">Pays de naissance</label>

                        <select name = "countryBirth" class = "form-control">
                            <?php foreach ($country as $value) {
                                ?>
                                <option><?php echo $value ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class = "form-group">
                        <label for = "country">Nationalité</label>
                        <select name = "country" class = "form-control">
                            <?php foreach ($countryBirth as $value) {
                                ?>
                                <option><?php echo $value ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="adress">Adresse</label>
                        <input type="text" class="form-control" name="adress">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tel">Téléphone</label>
                        <input type="tel" name="tel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Diploma">Diplôme</label>
                        <select name="Diploma" class="form-control">
                            <?php foreach ($diploma as $value) {
                                ?>
                                <option><?php echo $value ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nbpoleemploi">Numéro pôle emploi</label>
                        <input type="text" class="form-control" name="nbpoleemploi">
                    </div>
                    <div class="form-group">
                        <label for="nbbadge">Nombre de badge</label>
                        <input type="text" class="form-control" name="nbbadge">
                    </div>
                    <div class="form-group">
                        <label for="urllien">Liens codecademy</label>
                        <input type="text" class="form-control" name="urllien">
                    </div>
                    <div class="form-group">
                        <label for="hero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                        <textarea name="hero" rows=5 cols=140></textarea>
                    </div>
                    <div class="form-group">
                        <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                        <textarea name="hack" rows=5 cols=140></textarea>
                    </div>
                    <div class="form-group">
                        <label for="data">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                        <textarea name="data" rows=5 cols=140></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            <?php } ?>
            <a href="../index.php"><button type="button">Retour</button></a>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
