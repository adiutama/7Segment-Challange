<?php

class SevenSegment {
    /**
     * Number base
     *
     * @type integer
     */
    const BASE = 10;

    /**
     * Table of integer representation for bit pattern
     *
     * @type integer[] $dict
     */
    const TABLE = [123, 72, 61, 109, 78, 103, 119, 73, 127, 111];

    /**
     * Main function to handle number convertion
     *
     * @param integer $input
     * @return string
     */
    public function convert($input) {
        $head   = $input;
        $result = [];

        do {
            $index = 0;
            $tmp = '';

            // Split the digit
            $digit = $head % self::BASE;
            $head = floor($head / self::BASE);

            $pattern = self::TABLE[$digit]; // Get the pattern from table

            // Itterate 7 times to get all the string
            for ($i = 0; $i < 7; $i++) {
                // Create reference for current result row
                $row = &$result[$index];

                $bit = $pattern & 1; // Get right most bit from pattern
                $pattern = $pattern >> 1; // Shift pattern to get next bit

                // Get string for the key
                $tmp .= $this->getString($bit, $i);

                // Swithcing to the next row
                switch($i) {
                    case 0; case 3; case 6;
                        $row = $tmp . $row;

                        $index += 1;
                        $tmp = '';
                        break;
                }
            }
        } while($head > 0);

        // Trim sting in each row
        foreach($result as $key => $value) {
            $result[$key] = rtrim($value);
        }

        return implode("\n", $result);
    }

    /**
     * Get correct string for each keys
     *
     * @param boolean $bit
     * @param integer $key
     * @return string
     */
    private function getString($bit, $key) {
        if (!$bit) {
            return ($key) ? ' ' : '   ';
        }

        switch ($key) {
            case 0;
                return ' _ ';

            case 2; case 5;
                return '_';

            default:
                return '|';
        }
    }
}
