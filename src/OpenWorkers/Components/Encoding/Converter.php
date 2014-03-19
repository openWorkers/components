<?php

namespace OpenWorkers\Components\Encoding;

/**
 * Class Converter
 *
 * Helps to work with data from/for Windows servers and services
 *
 * @package OpenWorkers\Components\Encoding
 */
class Converter
{

    /**
     * @var array
     */
    private $baseEncodings;
    private $input;

    public function __construct($input, $baseEncodings = array('UTF-8', 'ISO-8859-1'))
    {
        $this->baseEncodings = $baseEncodings;
        $this->input = $input;
    }

    /**
     * Converts the value to UTF-8
     *
     * @return string
     */
    public function toUTF8()
    {
        return mb_convert_encoding($this->input, "UTF-8", $this->baseEncodings);
    }

    /**
     * Converts the value to WINDOWS-ISO-8859-1
     *
     * @return string
     */
    public function toWindows()
    {
        return mb_convert_encoding($this->input, "ISO-8859-1", $this->baseEncodings);
    }

    /**
     * Returns the configured BaseEncodings
     *
     * @return array
     */
    public function getBaseEncodings()
    {
        return $this->baseEncodings;
    }

    protected function getInput()
    {
        return $this->input;
    }

} 