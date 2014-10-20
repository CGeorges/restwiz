<?php
class RestWiz_Formatter_JSON {

    public $content = null;

    /**
     * @param $content string|array
     */
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