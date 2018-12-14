<?php
    header('Content-Type: text/plain');
     $Personen = 4;
     $Tage = 24;
     $durch = $Tage / $Personen;
     $y=1;
     $x=1;
     $z=1;
     $tuer=0;

     while($x <= $Personen){
        echo $x.". Person:";

        for($y; $y <= $durch; $y++){
            $tuer = $Personen*($y-1)+$x;
            echo " ".str_pad($tuer, 2, '0', STR_PAD_LEFT);
        }
        $y=1;
        echo "\n";
        $x=$x+1;
        //echo $x;
    }
    echo "\nJeder hat ".floor($durch)." Türchen geöffnet.\n";
    echo "\n";
    if($tuer != $Tage){
        $rest = $Tage - $tuer;

        echo "Es sind noch ".$rest." Türchen auf die restlichen Personen zu verteilen.\n";
        echo "\n";
        $rdmgen = [];
            for ($y; $y<=$Personen; $y++){
                $rdmgen[$y]=$y;
            }
        shuffle ($rdmgen);
        echo "Vorschlag: ";
        for($z; $z<=$rest; $z++){
            echo " Person ".$rdmgen[$z].",";
        }
    }


 ?>
