<?php
    include 'Universe.php';
    function test() {
        if (countAllStars([2,3]) ==  5 && countAllStars([9,-3]) == 6) {

            echo("TECHIO> success true \r\n");
            $file = file_get_contents("./Universe.php");
            if (strpos($file, "array_sum") !== false) {
		echo("TECHIO> message --channel 'My personal Yoda, you are. π' \"* β ΒΈ .γΒΈ. :Β° βΎ Β° γΒΈ. β ΒΈ .γγΒΈ.γ:. β’ \"  \r\n");
		echo("TECHIO> message --channel 'My personal Yoda, you are. π' \"           γβ Β°  β ΒΈ. ΒΈ γβγ :.γ .   \"\r\n");
		echo("TECHIO> message --channel 'My personal Yoda, you are. π' \"__.-._     Β° . .γγγγ.γβΎ Β° γ. *   ΒΈ .\"\r\n");
		echo("TECHIO> message --channel 'My personal Yoda, you are. π' \"'-._\\7'      .γγΒ° βΎ  Β° γΒΈ.β  β .γγγ\"\r\n");
		echo("TECHIO> message --channel 'My personal Yoda, you are. π' \" /'.-c    γ   * β  ΒΈ.γγΒ°     Β° γΒΈ.    \"\r\n");
		echo("TECHIO> message --channel 'My personal Yoda, you are. π' \" |  /T      γγΒ°     Β° γΒΈ.     ΒΈ .γγ  \"\r\n");
		echo("TECHIO> message --channel 'My personal Yoda, you are. π' \"_)_/LI\"\r\n");
            }
            else
            {
                echo("TECHIO> message --channel 'Victoire π' Bon travail ! Essayez d'utiliser array_sum");
            }
        } 
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Essayez encore π \r\n");
            echo("TECHIO> message --channel 'Indice π‘'  Avez-vous correctement accumulΓ© toutes les Γ©toiles dans 'totalStars'Β ? π€ \r\n");
        }
    }
    test();
?>
