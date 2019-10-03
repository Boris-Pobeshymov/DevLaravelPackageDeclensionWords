<?php

namespace ztbpb\DeclensionWords;

class DeclensionWordsClass
{
    /**
     * Getting the correct word form for Russian language depending on the number before this word.
     *
     * @param float $num
     * @param string $form_for_1
     * @param string $form_for_2
     * @param string $form_for_3
     * @return string
     */
    public static function ru(float $num, string $form_for_1, string $form_for_2, string $form_for_3): string
    {
        $num = abs($num) % 100;
        $num_x = $num % 10;
        if ($num > 10 && $num < 20)
            return $form_for_3;
        if ($num_x > 1 && $num_x < 5)
            return $form_for_2;
        if ($num_x == 1)
            return $form_for_1;
        return $form_for_3;
    }

    /**
     * Getting the correct word form for English language depending on the number before this word.
     *
     * @param float $num
     * @param string $form_for_1
     * @param string $form_for_2
     * @return string
     */
    public static function en(float $num, string $form_for_1, string $form_for_2): string
    {
        $num = abs($num);
        if($num == 1)
            return $form_for_1;
        return $form_for_2;
    }

}