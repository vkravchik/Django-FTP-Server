<!-- 1 -->
<?php
    function gcd ($a, $b) {
        if ($a === 0)
            return abs($b);
        if ($b === 0)
            return abs($a);
        for ( ; ; )
            if (($a %= $b) === 0)
                return abs($b);
            else if (($b %= $a) === 0)
                return abs($a);
    }
    $a = 111; $b = 432;
    echo gcd($a, $b);
?>
<!-- 2 -->
<?php
    $str = 'The temperature can be in range 10-15C next week though it was lesser last week (4-9C). It was -5 some time ago.';
    preg_match_all('!\d+!', $str, $matches);
    echo('['); print_r(min($matches[0])); echo(':'); print_r(max($matches[0])); echo(']');
?>
