<?php
array_shift($argv);
$args = join($argv, ' ');
 
if (!preg_match('/(^c|^p) \d+/', $args, $id_match)) die("Usage: php Loot.php [options] <npc-id>\n p : create pickpocketing_loot_template\n c : create creature_loot_template\n");
 
$table = $argv[0];
$npc = $argv[1];
 
$url = "http://www.wowhead.com/npc=".$npc;
 
if (!$page = file_get_contents($url)) die("Error in fetching data from Wowhead.\n");
 
if ($table == "c") {
    if (!$posi = strpos($page, "tab_drops")) die("No drop loot\n");
    $template = "`creature_loot_template`";
} else {
    if (!$posi = strpos($page, "lvnote_npcpickpocketing")) die("No pickpocketing loot\n");
    $template = "`pickpocketing_loot_template`";
}
 preg_match('/(og:title" content=")(.*?)\/\>/', $page, $match);

$name = rtrim($match[0],'" />');
$name = substr($name,19);
$name = str_replace("&quot;",'"',$name);
 
echo "-- ",$name," ",$url,"\n";
echo "-- Source Wowhead\n";
echo "DELETE FROM ",$template," WHERE `entry`=",$npc,";\n";
echo "INSERT INTO ",$template," (`entry`, `item`, `ChanceOrQuestChance`, `lootmode`, `groupid`, `mincountOrRef`, `maxcount`) VALUES \n";
 
$pagepart = substr($page, $posi);
 
preg_match("/totalCount\: \d+/", $pagepart, $tcount_match);
$total_count = preg_replace("/[^0-9]/", '', $tcount_match[0]);

$what_to_search = "]})";
$posi2 = strpos($pagepart, $what_to_search);
$loot = substr($page, $posi, $posi2+4);

$numberofmatches = preg_match_all("/classs(.*?)stack\:/", $loot, $match);

for ($loop=0;;$loop++) {
    if ($loop == $numberofmatches) break;

    preg_match('/("id":)\d+/', $match[0][$loop], $id_match);
    $itemid = preg_replace("/[^0-9]/", '', $id_match[0], 10);

    preg_match('/(name":")[0-9a-zA-Z\s\'\-\:]+(",)/', $match[0][$loop], $name_match);
    $name = rtrim($name_match[0],"\x22\x2c");
    $name = substr($name,8);   

    preg_match('/(count:)\d+/', $match[0][$loop], $count_match);   
    $count = preg_replace("/[^0-9]/", '', $count_match[0]);   
 
    echo "(",$npc,", ",$itemid,", ", number_format((($count/$total_count)*100), 4, '.',''),", "," 1, 0, 1, 1)";
    if (($loop + 1)  == $numberofmatches) {
        echo "; -- ",$name,"\n";
        if ($table == "p") 
            echo "UPDATE `creature_template` SET `pickpocketloot`=",$npc," WHERE `entry`=",$npc,";";
        } else {
        echo ", -- ",$name,"\n";
    }   
}
?>