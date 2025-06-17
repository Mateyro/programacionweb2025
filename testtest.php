<?php
// i'll replace test with the actual variable once i go to deal with html
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $test = ($_POST["name"]);
}
$words = explode(" ", $test);
$wordsN = count($words);

if (strlen($test)>700 || $wordsN>100) {
    print "Tu relato no es elejible."; 
}else {
    print "Tu relato es elejible.";
};

?>