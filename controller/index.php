<?php

require '../view/header.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

$client = new SoapClient("http://localhost/CA2Soap-Server/LOI.wsdl");
$func = $client->__getFunctions();



switch ($action) {
    case "home":
        $teams = json_decode($client->getTeamEntry(), true);
        $clubs = json_decode($client->getClubs(), true);
      
        include '../view/aside.php';
        include "../view/home.php";
        Break;
    case "singleTeam":
        $id = filter_input(INPUT_POST, 'singleTeam');
        $aTeam = json_decode($client->getATeam($id), true);
        include '../view/aside2.php';
        include "../view/team.php";
        
        Break;
    case "compare":
        $id1 = filter_input(INPUT_POST, 'team1');
        $id2 = filter_input(INPUT_POST, 'team2');
        $comps = json_decode($client->twoTeams($id1,$id2), true);
        include '../view/aside2.php';
        include "../view/twoTeams.php";
        
        Break;    
    default :
        echo "Unknown action " . $action;
}

require '../view/footer.php';
?>

 