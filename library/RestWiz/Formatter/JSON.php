<?php
require_once LIBRARY_PATH . '/Formatter/Abstract.php';
class RestWiz_Formatter_JSON extends Formatter_Abstract {

    public $content = null;

    public function getFormattedOutput()
    {
        return json_encode($this->content);
    }
}