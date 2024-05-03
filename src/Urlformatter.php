<?php 

namespace KyawKyawHtet\Urlformatter;

class Urlformatter
{
    public function format($value)
    {
        // Check if the link doesn't already start with 'http://' or 'https://'
        if (!preg_match("~^(?:f|ht)tps?://~i", $value)) {
            // If not, prepend 'https://' to the link
            return 'https://' . $value;
        } else {
            // Otherwise, use the link as it is
            return $value;
        }
    }
}