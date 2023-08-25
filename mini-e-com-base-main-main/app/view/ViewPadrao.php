<?php
namespace App\View;

abstract class ViewPadrao {
    /**
     * Renderiza uma View
     * @param array $aVars (string/numeric)
     * @return string
     */
    static function render(array $aVars = []) {
        if ($xView = self::getView()) {
            $aKeys = array_map(
                function ($xItem) {
                    return '{{' . $xItem . '}}';
                },
                array_keys($aVars)
            );
            return str_replace(
                $aKeys,
                array_values($aVars),
                self::getContentView($xView)
            );
        }
        return '';
    }

    /**
     * Retornar o nome da View
     * @return string
     */
    private static function getView() {
        if ($aCalledClass = explode('\\', get_called_class())) {
            return str_replace('View', '', array_pop($aCalledClass));
        }
        return false;
    }

    /**
     * Retorna o conteúdo de uma View
     * @param string $sView
     * @return string
     */
    private static function getContentView($sView) {
        $sFile = __DIR__ . '//layout/' . $sView . '.html';
        return file_exists($sFile) ? file_get_contents($sFile) : '';
    }
}