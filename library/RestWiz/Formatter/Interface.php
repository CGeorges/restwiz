<?php
interface FormatterInterface
{
    /**
     * @return string
     */
    public function getFormattedOutput();

    /**
     * @return mixed
     */
    public function getRawOutput();

    /**
     * @return string
     */
    public function getHeader();

    /**
     * @return string
     */
    public function getFooter();

    /**
     * @param $content mixed
     */
    public function setRawContent($content);

    /**
     * @param $content string|int
     */
    public function prependRawContent($content);

    /**
     * @param $content string|int
     */
    public function appendRawContent($content);
}