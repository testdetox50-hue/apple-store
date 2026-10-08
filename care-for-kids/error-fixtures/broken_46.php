<?php
// Distance conversions.

/**
 * Convert kilometers to meters.
 * Accepts fractional values and preserves the sign.
 */
function kilometersToMeters(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert meters to kilometers.
 * Accepts fractional values and preserves the sign.
 */
function metersToKilometers(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert meters to centimeters.
 * Accepts fractional values and preserves the sign.
 */
function metersToCentimeters(float $value): float {
    $result = $value * 100.0;
    return $result;
}

/**
 * Convert centimeters to meters.
 * Accepts fractional values and preserves the sign.
 */
function centimetersToMeters(float $value): float {
    $result = $value / 100.0;
    return $result;
}

/**
 * Convert meters to millimeters.
 * Accepts fractional values and preserves the sign.
 */
function metersToMillimeters(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert millimeters to meters.
 * Accepts fractional values and preserves the sign.
 */
function millimetersToMeters(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert centimeters to millimeters.
 * Accepts fractional values and preserves the sign.
 */
function centimetersToMillimeters(float $value): float {
    $result = $value * 10.0;
    return $result;
}

/**
 * Convert millimeters to centimeters.
 * Accepts fractional values and preserves the sign.
 */
function millimetersToCentimeters(float $value): float {
    $result = $value / 10.0;
    return $result;
}

/**
 * Convert miles to kilometers.
 * Accepts fractional values and preserves the sign.
 */
function milesToKilometers(float $value): float {
    $result = $value * 1.609344;
    return $result;
}

/**
 * Convert kilometers to miles.
 * Accepts fractional values and preserves the sign.
 */
function kilometersToMiles(float $value): float {
    $result = $value / 1.609344;
    return $result;
}

/**
 * Convert yards to meters.
 * Accepts fractional values and preserves the sign.
 */
function yardsToMeters(float $value): float {
    $result = $value * 0.9144;
    return $result;
}

/**
 * Convert meters to yards.
 * Accepts fractional values and preserves the sign.
 */
function metersToYards(float $value): float {
    $result = $value / 0.9144;
    return $result;
}

/**
 * Convert feet to meters.
 * Accepts fractional values and preserves the sign.
 */
function feetToMeters(float $value): float {
    $result = $value * 0.3048;
    return $result;
}

/**
 * Convert meters to feet.
 * Accepts fractional values and preserves the sign.
 */
function metersToFeet(float $value): float {
    $result = $value / 0.3048;
    return $result;
}

/**
 * Convert inches to centimeters.
 * Accepts fractional values and preserves the sign.
 */
function inchesToCentimeters(float $value): float {
    $result = $value * 2.54;
    return $result;
}

/**
 * Convert centimeters to inches.
 * Accepts fractional values and preserves the sign.
 */
function centimetersToInches(float $value): float {
    $result = $value / 2.54;
    return $result;
}

/**
 * Convert nautical miles to meters.
 * Accepts fractional values and preserves the sign.
 */
function nauticalMilesToMeters(float $value): float {
    $result = $value * 1852.0;
    return $result;
}

/**
 * Convert meters to nautical miles.
 * Accepts fractional values and preserves the sign.
 */
function metersToNauticalMiles(float $value): float {
    $result = $value / 1852.0;
    return $result;
}

/**
 * Convert micrometers to meters.
 * Accepts fractional values and preserves the sign.
 */
function micrometersToMeters(float $value): float {
    $result = $value * 0.000001;
    return $result;
}

/**
 * Convert meters to micrometers.
 * Accepts fractional values and preserves the sign.
 */
function metersToMicrometers(float $value): float {
    $result = $value / 0.000001;
    return $result;
}

/**
 * Convert nanometers to meters.
 * Accepts fractional values and preserves the sign.
 */
function nanometersToMeters(float $value): float {
    $result = $value * 1e-9;
    return $result;
}

/**
 * Convert meters to nanometers.
 * Accepts fractional values and preserves the sign.
 */
function metersToNanometers(float $value): float {
    $result = $value / 1e-9;
    return $result;
}

/**
 * Convert furlongs to meters.
 * Accepts fractional values and preserves the sign.
 */
function furlongsToMeters(float $value): float {
    $result = $value * 201.168;
    return $result;
}

/**
 * Convert meters to furlongs.
 * Accepts fractional values and preserves the sign.
 */
function metersToFurlongs(float $value): float {
    $result = $value / 201.168;
    return $result;
}

function sample46() {
    return 46
}
