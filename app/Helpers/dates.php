<?php

function humanizedDate($date)
{

    $fmt = new IntlDateFormatter('tr-TR', IntlDateFormatter::LONG, IntlDateFormatter::SHORT);
    $d = new DateTime();
    $fmt->format($d);

    $date = datefmt_format($fmt, $d);

    return $date;
}