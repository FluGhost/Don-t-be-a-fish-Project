<?php
function WhatsLang(){
    if (isset($_GET["lang"])){
        switch ($_GET["lang"]){
            case "fr":
                return "fr";
            break;
            case "en":
                return "en";
            break;
        }
    } else {
        return "en";
    }
}

switch (WhatsLang()){
    case "en":
        $file_to_charge = "en.php";
    break;
    case "fr":
        $file_to_charge = "fr.php";
    break;
}

$path_of_file_to_charge = "views/index/" . $file_to_charge;