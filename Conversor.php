<?php


class Conversor
{
    public static function celsiusAFahrenheit(float $celsius): float
    {
        return ($celsius * 9/5) + 32;
    }

    public static function fahrenheitACelsius(float $fahrenheit): float
    {
        return ($fahrenheit - 32) * 5/9;
    }

    public static function celsiusAKelvin(float $celsius): float
    {
        return $celsius + 273.15;
    }

    public static function fahrenheitAKelvin(float $fahrenheit): float
    {
        return self::celsiusAKelvin(self::fahrenheitACelsius($fahrenheit));
    }

    public static function kelvinACelsius(float $kelvin): float
    {
        return $kelvin - 273.15;
    }

    public static function kelvinAFahrenheit(float $kelvin): float
    {
        return self::celsiusAFahrenheit(self::kelvinACelsius($kelvin));
    }
}
