<?php

namespace OpenWorkers\Components\Encoding;

/**
 * Class ArrayConverter
 * @package OpenWorkers\Components\Encoding
 */
class ArrayConverter extends Converter
{
    public function __construct(array $input, $baseEncodings = array('UTF-8', 'ISO-8859-1'))
    {
        parent::__construct($input, $baseEncodings);
    }

    /**
     * @inheritdoc
     */
    public function toUTF8()
    {
        $result = array();
        foreach ($this->getInput() as $row) {
            $rowConverter = new Converter($row, $this->getBaseEncodings());
            $result[] = $rowConverter->toUTF8();
        }
        return $result;
    }

    /**
     * @inheritdoc
     */
    public function toWindows()
    {
        $result = array();
        foreach ($this->getInput() as $row) {
            $rowConverter = new Converter($row, $this->getBaseEncodings());
            $result[] = $rowConverter->toWindows();
        }
        return $result;
    }


} 