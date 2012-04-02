<?php
function smarty_modifier_split_format($text, $arg) {
    # $arg = '%1 %2'
    $array = explode(',', $text);
    for ($i = 1; $i <= count($array); $i++) {
        $pattern = '/%'.$i.'/';
        $arg = preg_replace($pattern, $array[$i-1], $arg);
    }
    return $arg;
}
?>