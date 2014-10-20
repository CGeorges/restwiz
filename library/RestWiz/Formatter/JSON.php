<?php
class RestWiz_Formatter_JSON implements FormatterInterface {

    public $content = null;

    public function __construct($content)
    {
        if (empty($content))
        {
            return false;
        }
        $this->content = $content;
    }

    public function getFormattedOutput()
    {
        return json_encode($this->content);
    }
}