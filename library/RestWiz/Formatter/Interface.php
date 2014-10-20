<?php
interface FormatterInterface
{
    /**
     * @return string
     */
    public function getFormattedOutput();

    /**
     * @param $content mixed
     * @return mixed
     */
    public function setRawContent($content);
}