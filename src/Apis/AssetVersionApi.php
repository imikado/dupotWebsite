<?php

namespace MyWebsite\Apis;

class AssetVersionApi
{
    // images locales référencées par src="..." ou url(...) : images/..., /images/..., css/images/...
    const PATTERN = '#(src="|url\(\'?)(/?(?:css/)?images/[^"\'?)]+)(?=["\')])#';

    // ajoute ?v=YYYYMMDD (date de modification du fichier) pour que le navigateur recharge une image mise à jour
    public static function apply(string $html, string $docsPath): string
    {
        return preg_replace_callback(self::PATTERN, function ($matches) use ($docsPath) {
            $file = $docsPath . '/' . ltrim($matches[2], '/');
            if (!is_file($file)) {
                return $matches[0];
            }

            return $matches[0] . '?v=' . date('Ymd', filemtime($file));
        }, $html);
    }
}
