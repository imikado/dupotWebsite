<?php

namespace MyWebsite\Apis;

class TextApi
{
    // typographie française : espace insécable avant ! ? : ; pour éviter une ponctuation seule en début de ligne
    public static function frenchSpacing(string $text): string
    {
        return preg_replace('/ ([!?:;»])/u', '&nbsp;$1', $text);
    }
}
