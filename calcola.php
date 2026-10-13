<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazione Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        $marca = $_GET["marca"];
        $modello = $_GET["modello"];
        $stato = $_GET["stato"];
        $anno = $_GET["anno"];
        $cilindrata = $_GET["cilindrata"];
        $cavalli = $_GET["cavalli"];
        $prezzo = $_GET["prezzo"];
        $targa = $_GET["targa"];


        if (empty($_GET["accessori"])) {
            $accessori = "";
        } else {
            $accessori = $_GET["accessori"];
        }

        $accessori_stringa = "";
        $i = 0;

        if (empty($accessori)) { 
            $accessori_stringa = "Nessun accessorio selezionato.";
        } else {
            foreach ($accessori as $n) {
                $accessori_stringa .= $n . ", ";
                $i = $i  +1;
            }
        }



    ?>

    <fieldset>
            <legend>
                <strong><i><u>Inserimento Auto</u></i></strong> 
            </legend>

            <br>

            <table>
                <tr>
                    <td class="area_blu"><p>Marca</p></td>
                    <td> <?php echo $marca; ?></td>
                </tr> 

                <tr>
                    <td class="area_blu"><p>Modello</p></td>
                    <td> <?php echo $modello; ?></td>
                </tr> 

                <tr>
                    <td class="area_blu"><p>Stato</p></td>
                    <td> <?php echo $stato; ?></td>
                </tr>

                <tr>
                    <td class="area_blu"><p>Anno Costruzione</p></td>
                    <td> <?php echo $anno; ?></td>
                </tr>

                <tr>
                    <td class="area_blu"><p>Cilindrata</p></td>
                    <td> <?php echo $cilindrata; ?></td>
                </tr> 

                <tr>
                    <td class="area_blu"><p>Cavalli</p></td>
                    <td> <?php echo $cavalli; ?></td>
                </tr> 

                <tr>
                    <td class="area_blu"><p>prezzo</p></td>
                    <td> <?php echo $prezzo; ?></td>
                </tr> 

                <tr>
                    <td class="area_blu"><p>Targa</p></td>
                    <td> <?php echo $targa; ?></td>
                </tr> 

                <tr>
                    <td class="area_blu"><p>Accessori</p></td>
                    <td class="area_dx"> <?php echo $accessori_stringa; ?></td>
                </tr>

                <tr>
                    <td class="area_blu"><p>Descrizione Aggiuntiva</p></td>
                    <td> <?php echo $descrizione; ?></td>
                </tr>
            </table>

            <br> <br>

        </fieldset>
</body>
</html>