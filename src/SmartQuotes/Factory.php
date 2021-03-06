<?php namespace SSD\SmartQuotes;


class Factory {

    /**
     * @param Contract $smartQuotes
     * @param mixed $string
     *
     * @return mixed|null
     */
    public static function filter(Contract $smartQuotes, $string)
    {

        return $smartQuotes->purify($string);

    }

}