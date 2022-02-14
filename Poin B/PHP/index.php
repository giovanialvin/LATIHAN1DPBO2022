<?php
    include "SoccerClub.php";

    //input using parameter
    $team1Players = array("Dani Alves", "Gavi", "Ferran Torres", "Ousmane Dembele", "Pedri");
    $team1 = new SoccerClub("Barcelona", "Spain", "1899", $team1Players);
    $team1->output();


    echo "<br>";

    //input using set methods
    $team2Players = array("Lionel Messi", "Neymar Jr.", "Kylian Mbappe", "Sergio Ramos");
    $team2 = new SoccerClub();
    $team2->setNation("France");
    $team2->setPlayers($team2Players);
    $team2->setYear("1970");
    $team2->setName("Paris Saint-German F.C.");
    $team2->output();





    


    

?>