<?php
$name = "nakachi giichirou";

if ($name == "nakachi giichirou") {
    echo "「私はあなたの名前です」";
} else {
    echo "「私はあなたの名前ではありません」";
}

$total = 0;

for ($i = 0; $i < 10000; $i++) {
    echo $total += $i;
}

echo $total;

$fruits = array("orange","banana","grape","apple","cherry");

foreach($fruits as $fruit) {
    echo $fruit;
}

$start = 1;

$end = 100 ;

for ($i = $start; $i <= $end; $i++) {
    if ($i % 5 == 0) {
        echo $i;
    }
}