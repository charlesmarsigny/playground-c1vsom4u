<?php
    include 'Universe.php';
    function test() {
        if (countAllStars([2,3]) ==  5 && countAllStars([9,-3]) == 6) {

            echo("TECHIO> success true \r\n");
            $file = file_get_contents("./Universe.php");
            if (strpos($file, "array_sum") !== false) {
		echo("TECHIO> message --channel 'My personal Yoda, you are. 🙏' \"* ● ¸ .　¸. :° ☾ ° 　¸. ● ¸ .　　¸.　:. • \"  \r\n");
		echo("TECHIO> message --channel 'My personal Yoda, you are. 🙏' \"           　★ °  ☆ ¸. ¸ 　★　 :.　 .   \"\r\n");
		echo("TECHIO> message --channel 'My personal Yoda, you are. 🙏' \"__.-._     ° . .　　　　.　☾ ° 　. *   ¸ .\"\r\n");
		echo("TECHIO> message --channel 'My personal Yoda, you are. 🙏' \"'-._\\7'      .　　° ☾  ° 　¸.☆  ● .　　　\"\r\n");
		echo("TECHIO> message --channel 'My personal Yoda, you are. 🙏' \" /'.-c    　   * ●  ¸.　　°     ° 　¸.    \"\r\n");
		echo("TECHIO> message --channel 'My personal Yoda, you are. 🙏' \" |  /T      　　°     ° 　¸.     ¸ .　　  \"\r\n");
		echo("TECHIO> message --channel 'My personal Yoda, you are. 🙏' \"_)_/LI\"\r\n");
            }
            else
            {
                echo("TECHIO> message --channel 'Victoire 🌟' Bon travail ! Essayez d'utiliser array_sum");
            }
        } 
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Essayez encore 🐞 \r\n");
            echo("TECHIO> message --channel 'Indice 💡'  Avez-vous correctement accumulé toutes les étoiles dans 'totalStars' ? 🤔 \r\n");
        }
    }
    test();
?>
