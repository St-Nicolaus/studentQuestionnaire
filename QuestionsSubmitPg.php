<!doctype html>
<!--
    Author:Nicolaus Kuchta
    Updated:12/19/2019

    Note: This is a work-in-progress. This file collects the answers from the 
    questionnaire.php file and places some of them into specific categories,
    which in turn is displayed in a table.
-->
<html>
<head>
    <link rel="stylesheet" href="table.css">
</head>
<body>
<?php
/*
*   Not sure if a loop would be more efficient
*   to cycle thru each variable. Would it contain
    all answers, or just those needed for the table? 
*/
$q1 = $_POST["q1"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$q9 = $_POST["q9"];
$q11 = $_POST["q11"];
$q16 = $_POST["q16"];
$q17 = $_POST["q17"];
$q19 = $_POST["q19"];
$q21 = $_POST["q21"];
$q23 = $_POST["q23"];
$q24 = $_POST["q24"];
$q25 = $_POST["q25"];
$q29 = $_POST["q29"];
$q32 = $_POST["q32"];
$q33 = $_POST["q33"];
$q39 = $_POST["q39"];
$q42 = $_POST["q42"];
$q44 = $_POST["q44"];
$q45 = $_POST["q45"];
$q48 = $_POST["q48"];
$q49 = $_POST["q49"];
$q50 = $_POST["q50"];
$q51 = $_POST["q51"];
$q56 = $_POST["q56"];
$q57 = $_POST["q57"];
$q58 = $_POST["q58"];
$q60 = $_POST["q60"];
$q64 = $_POST["q64"];
$q68 = $_POST["q68"];
$q71 = $_POST["q71"];

$criteriaTotal = 0;

$catMotivation = $q5 + $q24 + $q58 + $q60;
$catInterest = $q11 + $q19;
$catCommSkills = $q9 + $q21 + $q50 + $q57;
$catProbSolvAbility = $q42 + $q64 + $q68;
$catMemory = $q23 + $q39;
$catInquiry = $q1 + $q3;
$catInsight = $q25 + $q33 + $q48;
$catImagination = $q16 + $q44 + $q45 + $q51 + $q56;
$catHumor = $q4 + $q49;
$catReason = $q29 + $q32 + $q64 + $q71;
$catRAA = $q17;

echo "<br />";
echo "<table><tr><th>TRAIT</th><th>1</th><th>2</th>
<th>3</th></tr><tr><th>Motivation (M)</th>";
switch ($catMotivation) {
    case "0":
        echo "<td> </td><td> </td>";
        break;
    case "1":
        echo "<td>x</td><td> </td>";
        break;
    case "2":
    case "3":
    case "4":
        echo "<td>x</td><td>x</td>";
        $criteriaTotal += 1;
        break;
}
 echo "<td class='blk'> </td></tr><tr><th>Interest (I)</th>";
switch ($catInterest) {
    case "0":
        echo "<td> </td>";
        break;
    case "1":
    case "2":
        echo "<td>x</td>";
        $criteriaTotal += 1;
        break;
}
echo "<td class='blk'> </td><td class='blk'> </td>
</tr><tr><th>Communication Skills (C)</th>";
switch ($catCommSkills) {
    case "0":
        echo "<td> </td><td> </td>";
        break;
    case "1":
        echo "<td>x</td><td> </td>";
        break;
    case "2":
    case "3":
    case "4":
        echo "<td>x</td><td>x</td>";
        $criteriaTotal += 1;
        break;
}
echo "<td class='blk'> </td></tr><tr><th>Problem Solving Ability (PS)</th>";
switch ($catProbSolvAbility) {
    case "0":
        echo "<td> </td><td> </td>";
        break;
    case "1":
        echo "<td>x</td><td> </td>";
        break;
    case "2":
    case "3":
        echo "<td>x</td><td>x</td>";
        $criteriaTotal += 1;
        break;
}
echo "<td class='blk'> </td></tr><tr><th>Memory (Me)</th>";
switch ($catMemory) {
    case "0":
        echo "<td> </td>";
        break;
    case "1":
    case "2":
        echo "<td>x</td>";
        $criteriaTotal += 1;
        break;
}
echo "<td class='blk'> </td><td class='blk'> </td>
</tr><tr><th>Inquiry (In)</th>";
switch ($catInquiry) {
    case "0":
        echo "<td> </td>";
        break;
    case "1":
    case "2":
        echo "<td>x</td>";
        $criteriaTotal += 1;
        break;
}
echo "<td class='blk'> </td><td class='blk'> </td>
</tr><tr><th>Insight (It)</th>";
switch ($catInsight) {
    case "0":
        echo "<td> </td><td> </td>";
        break;
    case "1":
        echo "<td>x</td><td> </td>";
        break;
    case "2":
    case "3":
        echo "<td>x</td><td>x</td>";
        $criteriaTotal += 1;
        break;
}
echo "<td class='blk'> </td></tr><tr><th>Imagination/Creativity (Ic)</th>";
switch ($catImagination) {
    case "0":
        echo "<td> </td><td> </td><td> </td>";
        break;
    case "1":
        echo "<td>x</td><td> </td><td> </td>";
        break;
    case "2":
        echo "<td>x</td><td>x</td><td> </td>";
        break;
    case "3":
    case "4":
    case "5":
        echo "<td>x</td><td>x</td><td>x</td>";
        $criteriaTotal += 1;
        break;
}
echo "</tr><tr><th>Humor (H)</th>";
switch ($catHumor) {
    case "0":
        echo "<td> </td>";
        break;
    case "1":
    case "2":
        echo "<td>x</td>";
        $criteriaTotal += 1;
        break;
}
echo "<td class='blk'> </td><td class='blk'> </td></tr>
<tr><th>Reasoning (R)</th>";
switch ($catReason) {
    case "0":
        echo "<td> </td><td> </td>";
        break;
    case "1":
        echo "<td>x</td><td> </td>";
        break;
    case "2":
    case "3":
    case "4":
        echo "<td>x</td><td>x</td>";
        $criteriaTotal += 1;
        break;
}
echo "<td class='blk'> </td></tr><tr><th>Rate of Aquisition for Application (Ra)</th>";
switch ($catRAA) {
    case "0":
        echo "<td> </td>";
        break;
    case "1":
        echo "<td>x</td>";
        $criteriaTotal += 1;
        break;
}
echo "<td class='blk'> </td><td class='blk'> </td></tr></table><br />";
echo "<h2>Criteria met in <u>$criteriaTotal</u> of 11 areas.</h2>";
/*Cannot get criteria total to underline. Not sure of problem*/
    ?>
</body>
</html>