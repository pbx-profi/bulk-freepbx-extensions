<?php

/*
 * www.servitux.es
 */

$first = "101";
$last = "110";
$tech = "pjsip"
$password = "REGEN";

echo 'extension,name,description,tech,secret,callwaiting_enable,findmefollow_enabled,findmefollow_grplist,voicemail'."\n";

for($a=$first;$a<$last;$a++) {
        echo "$a,$a,$a,$tech,$password,,,$a,novm\n";

}
?>
