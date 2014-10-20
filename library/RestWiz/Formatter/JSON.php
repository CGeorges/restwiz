<?php
require_once LIBRARY_PATH . '/Formatter/Abstract.php';
class RestWiz_Formatter_JSON extends Formatter_Abstract {

    public function getFormattedOutput()
    {
        return $this->getHeader() .
               json_encode($this->getRawOutput()) .
               $this->getFooter();
    }
}