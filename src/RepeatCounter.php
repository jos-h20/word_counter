<?php
class RepeatCounter
{
    function countRepeats($word_searched, $string_searched)
    {
        $string_words = explode(" ", strtolower($string_searched));
        $count = 0;
        foreach ($string_words as $string_word) {
            if (strtolower($word_searched) == $string_word) {
                $count++;
            }
        }
        return $count;
    }
}

 ?>
