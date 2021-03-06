<?php

namespace Enums;

use MyCLabs\Enum\Enum;

class EtipoEmpleado extends Enum
{
    const BARTENDER = 1;
    const CERVECERO = 2;
    const COCINERO = 3;
    const MOZO = 4;

    public static function esTipo($numero)
    {
        switch ($numero) {
            case EtipoEmpleado::BARTENDER:
                return true;
            case EtipoEmpleado::CERVECERO:
                return true;
            case EtipoEmpleado::COCINERO:
                return true;
            case EtipoEmpleado::MOZO:
                return true;
            default:
                return false;
        }
    }
    public static function GetDescription($numero)
    {
        switch ($numero) {
            case EtipoEmpleado::BARTENDER:
                return "BARTENDER";
            case EtipoEmpleado::CERVECERO:
                return "CERVECERO";
            case EtipoEmpleado::COCINERO:
                return "COCINERO";
            case EtipoEmpleado::MOZO:
                return "MOZO";
        }
    }

    public static function getVal($string)
    {
        switch ($string) {
            case "BARTENDER":
                return EtipoEmpleado::BARTENDER;
            case "CERVECERO":
                return EtipoEmpleado::CERVECERO;
            case "COCINERO":
                return EtipoEmpleado::COCINERO;
            case "MOZO":
                return EtipoEmpleado::MOZO;
            default:
                return "";
        }
    }
}
