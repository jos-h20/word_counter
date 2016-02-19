<?php
class RepeatCounter
{
    function countRepeats($word_searched, $string_searched)
    {
        $string_words = explode(" ", $string_searched);
        $count = 0;
        foreach ($string_words as $string_word) {
            if ($word_searched == $string_word) {
                $count++;
            }
        }
        return $count;
    }
}

 ?>
