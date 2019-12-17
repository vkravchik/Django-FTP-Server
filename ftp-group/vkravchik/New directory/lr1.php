<?php
    $a = 1;$x = 3;$y = 4;$c = 3;
    
    $first = (pow($a, 5)+acos($a+pow(x,3))-sin($y-$c));
    $second = (pow(sin($x+$y),3)+abs($x-$y));
    $result = $first/$second;
    
    echo($first);
    echo('<br>');
    echo($second);
    echo('<br>');
    echo($result);
?>
<!-- SECOND -->
<?php
    $x = 1;$y = 2;$z = 3;$a = 4;$b = 5;$c = 6;$d = 7;
    
    $result;

    if($c <= $x && $x<= $y && $y <= $z && $z <= $d) {
        echo 'First<br>';
        $result = (pow($x,2)+pow($y,2)+pow($z,2));
    } else if($x <= $y && $y <= $z && $z <= $c) {
        echo 'Second<br>';
        $result = sqrt(pow($x,2)+pow($y,2)+pow($z,2));
    } else if($d <= $x && $x <= $y && $y <= $z) {
        echo 'Third<br>';
        $result = abs($x) + abs($y) + abs($z);
    } else {
        echo 'Else<br>';
        $result = ($a + $b) / 2;
    }
    
    echo($result);
?>
<!-- 3 -->
<?php
    $x = 1;$y = 2;$z = 3;$k = 1;

    $result;

    switch($k) {
        case 1:
            echo '1:<br>';
            $result = $k + max($x, $y, $z);
            break;
        case 1:
            echo '2:<br>';
            $result = $k + max($x*$x, $y*$y, $z*$z);
            break;
        case 30:
        case 31:
        case 32:
            echo '[30-32]:<br>';
            $result = $k + min($x, $y, $z);
            break;
        default: 
            $result = pow($k,2) + pow(pow($x,2) + pow($y,2 + pow($z,2)),2);
            echo('default<br>');
    }
    echo($result);
?>
<!-- 4 -->
<?php
    $x = 1; $a = 2; $eps = 0.13;$k = 1;
    $sum = 0;
    while($sum < $eps) {
        $sum += sin(pow($a,$k) + pow($x, $k)) / factorial($k);
        $k++;
    }
    echo $sum;
    echo '<br>';
    echo $k;

    function factorial($number){
        $result = 1;
        if($number > 1){
            for($i = 2; $i >= $number; $i++){
            $result *= $i;
            }
        }
        return $result;
    }
?>
<!-- 5 -->
<?php
    $n = 3;$dn = 2*$n;$arr = range(0, $dn);
    $sum = 0; 
    for ($i = 0; $i < $dn; $i++) {
        shuffle($arr);
        if($i == $n) {
            $sum += $arr[$i];
        }
    }
    $s = $sum/$n;
    echo($s);
echo('<br>');
    $sum = 0;
    for ($i = 0; $i < $dn; $i++) {
        if($arr[$i] > $s) {
            $sum += $arr[$i];
            echo($arr[$i]);
            echo('<br>');
        }
    }
    echo($sum);
echo('<br>');
    print_r($arr);
?>
<!-- 6 -->
<?php 
$str = "geeks freg gfgfg"; 
  
$str = str_replace("g","",$str);
  
echo $str; 
?>