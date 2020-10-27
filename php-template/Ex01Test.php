<?php
include 'Ex01.php';
global $numbers;
function test() {
    sort($numbers);
    if ($numbers == [42, 12, 78]) {

        echo("TECHIO> success true \r\n");
    }
    else {
        echo("TECHIO> success false  \r\n");
        echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
    }
}
test();
?>
