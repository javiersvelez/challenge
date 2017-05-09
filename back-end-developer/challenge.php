<?php
    //Challenge Back-end Developer
    for ($i = 1; $i < 101; $i++){
        //One if requirement
        if (true){
        echo_special($i);
        }
    }
    
    function echo_special($n){
        $rem3 = $n % 3;
        $rem5 = $n % 5;
        $remainders = $rem3 . $rem5;
        
        switch($remainders){
				case "00":
				echo "\nLinianos";
				break;
				case "01":
				echo "\nLinio";
				break;
				case "02":
				echo "\nLinio";
				break;
				case "03":
				echo "\nLinio";
				break;
				case "04":
				echo "\nLinio";
				break;
				case "10":
				echo "\nIT";
				break;
				case "20":
				echo "\nIT";
				break;
				default:
				echo "\n$n";
				break;
			}
    }
?>