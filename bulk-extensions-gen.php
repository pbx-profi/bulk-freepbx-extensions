<?php

/*
 * www.servitux.es
 */

$tech = "pjsip";
$password = "REGEN";

minput:
echo "Введите первый номер из диапазона:";
$first = rtrim(fgets(STDIN));
    if (!ctype_digit($first)) {
        echo "Может содержать только числа!\n";
        sleep(3);
        system('clear');
        goto minput;
}

maxput:
echo "Введите последний номер из диапазона:";
$last = rtrim(fgets(STDIN));

    if (!ctype_digit($last)) {
        echo "Может содержать только числа!\n";
        sleep(3);
        system('clear');
        goto maxput;
    }

if($last < $first)
{
        echo "Недопустимый диапазон. Последнее значение не может быть ниже начального!\n";
        sleep(3);
        system('clear');
        goto minput;
}

echo "Подготовка файла...\n";
sleep(2);
system('clear');

$content = 'extension,name,description,tech,secret,callwaiting_enable,findmefollow_enabled,findmefollow_grplist,voicemail'."\n";
for($a=$first;$a<=$last;$a++) {
        $content=$content."$a,$a,$a,$tech,$password,,,$a,novm\n";
}

$filename="/var/spool/freepbx/bulk/extensions/extensions_".$first."-".$last.".csv";

if (!file_exists($filename)) {
    touch($filename);
}

$myfile = fopen($filename, "w") or die("Unable to open file!");
fwrite($myfile, $content);
fclose($myfile);

echo "Готово!\n";
echo "Файл сохранён:\n";
echo $filename."\n";
?>
