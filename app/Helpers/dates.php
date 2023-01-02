<?php

function humanizedDate($date)
{

    $fmt = new IntlDateFormatter('tr-TR', IntlDateFormatter::LONG, IntlDateFormatter::SHORT);
    $d = new DateTime($date);
    $fmt->format($d);

    $date = datefmt_format($fmt, $d);

    return $date;
}

function cardType($type) {

    $types = [
        "credit_card" => "Kredi Kartı",
        "salary_card" => "Maaş Kartı",
        "virtual_card" => "Sanal Kart",
    ];

    return $types[$type];
}