<?php
class Formatter_Abstract implements FormatterInterface {

    public $content = null;

    public function getFormattedOutput()
    {
        return $this->content;
    }

    public function setRawContent($content)
    {
        if (empty($content))
        {
            return false;
        }
        $this->content = $content;
    }

    public function prependContent($content)
    {
        $this->content = $content . $this->content;
    }

    public function appendContent($content)
    {
        $this->content .= $content;
    }
}