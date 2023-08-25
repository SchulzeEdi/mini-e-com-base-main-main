<?php
namespace App\Controller;
use App\View\ViewPage,
    App\View\ViewHeader,
    App\View\ViewFooter;

abstract class ControllerPadrao {
    protected $headerVars = [];
    protected $footerVars = [];
    function render() {
        $sAction = $_GET['act'] ??= '';
        switch ($sAction) {
            case 'insert':
                return $this->processInsert();
            case 'update':
                return $this->processUpdate();
            case 'delete':
                return $this->processDelete();
        }
        return $this->processPage();
    }
    protected function processInsert() {}

    protected function processUpdate() {}

    protected function processDelete() {}

    protected function processPage() {}

    protected function getHeader($aVars = []) {
        return ViewHeader::render($aVars);
    }

    protected function getFooter($aVars = []) {
        return ViewFooter::render($aVars);
    }

    protected function getPage($sTitle, $sContent) {
        $sHeader = $this->getHeader($this->headerVars);
        $sFooter = $this->getFooter($this->footerVars);
        return ViewPage::render([
            'title'   => $sTitle,
            'header'  => $sHeader,
            'content' => $sContent,
            'footer'  => $sFooter
        ]);
    }
}
