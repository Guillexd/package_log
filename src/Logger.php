<?php

namespace Log\PackageLog;

class Logger {
    protected $_word;
    protected $_num;

    protected function __construct($word, $number) {
        $this->_word = $word;
        $this->_num = $number;
    }

    protected function generateWord(): string {
        $word = '';
        for ($i = 0; $i < $this->_num; $i++) { 
            $word .= $this->_word . '__';
        }
        return $word;
    }

    public static function log($word, $num = 10) {
        return new static($word, $num);
    }

    public function __toString() {
        return $this->generateWord();
    }
}
