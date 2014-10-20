<?php
class RestWiz_Formatter_JSON implements FormatterInterface {

    public $content = null;

    public function getFormattedOutput()
    {
        return json_encode($this->content);
    }

    public function setRawContent($content)
    {
        if (empty($content))
        {
            return false;
        }
        $this->content = $content;
    }

}