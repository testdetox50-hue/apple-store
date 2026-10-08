<?php
// Mass conversions.

/**
 * Convert kilograms to grams.
 * Accepts fractional values and preserves the sign.
 */
function kilogramsToGrams(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert grams to kilograms.
 * Accepts fractional values and preserves the sign.
 */
function gramsToKilograms(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert grams to milligrams.
 * Accepts fractional values and preserves the sign.
 */
function gramsToMilligrams(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert milligrams to grams.
 * Accepts fractional values and preserves the sign.
 */
function milligramsToGrams(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert milligrams to micrograms.
 * Accepts fractional values and preserves the sign.
 */
function milligramsToMicrograms(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert micrograms to milligrams.
 * Accepts fractional values and preserves the sign.
 */
function microgramsToMilligrams(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert tonnes to kilograms.
 * Accepts fractional values and preserves the sign.
 */
function tonnesToKilograms(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert kilograms to tonnes.
 * Accepts fractional values and preserves the sign.
 */
function kilogramsToTonnes(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert pounds to kilograms.
 * Accepts fractional values and preserves the sign.
 */
function poundsToKilograms(float $value): float {
    $result = $value * 0.45359237;
    return $result;
}

/**
 * Convert kilograms to pounds.
 * Accepts fractional values and preserves the sign.
 */
function kilogramsToPounds(float $value): float {
    $result = $value / 0.45359237;
    return $result;
}

/**
 * Convert ounces to grams.
 * Accepts fractional values and preserves the sign.
 */
function ouncesToGrams(float $value): float {
    $result = $value * 28.349523125;
    return $result;
}

/**
 * Convert grams to ounces.
 * Accepts fractional values and preserves the sign.
 */
function gramsToOunces(float $value): float {
    $result = $value / 28.349523125;
    return $result;
}

/**
 * Convert stones to pounds.
 * Accepts fractional values and preserves the sign.
 */
function stonesToPounds(float $value): float {
    $result = $value * 14.0;
    return $result;
}

/**
 * Convert pounds to stones.
 * Accepts fractional values and preserves the sign.
 */
function poundsToStones(float $value): float {
    $result = $value / 14.0;
    return $result;
}

/**
 * Convert short tons to pounds.
 * Accepts fractional values and preserves the sign.
 */
function shortTonsToPounds(float $value): float {
    $result = $value * 2000.0;
    return $result;
}

/**
 * Convert pounds to short tons.
 * Accepts fractional values and preserves the sign.
 */
function poundsToShortTons(float $value): float {
    $result = $value / 2000.0;
    return $result;
}

/**
 * Convert long tons to pounds.
 * Accepts fractional values and preserves the sign.
 */
function longTonsToPounds(float $value): float {
    $result = $value * 2240.0;
    return $result;
}

/**
 * Convert pounds to long tons.
 * Accepts fractional values and preserves the sign.
 */
function poundsToLongTons(float $value): float {
    $result = $value / 2240.0;
    return $result;
}

/**
 * Convert carats to grams.
 * Accepts fractional values and preserves the sign.
 */
function caratsToGrams(float $value): float {
    $result = $value * 0.2;
    return $result;
}

/**
 * Convert grams to carats.
 * Accepts fractional values and preserves the sign.
 */
function gramsToCarats(float $value): float {
    $result = $value / 0.2;
    return $result;
}

/**
 * Convert grains to milligrams.
 * Accepts fractional values and preserves the sign.
 */
function grainsToMilligrams(float $value): float {
    $result = $value * 64.79891;
    return $result;
}

/**
 * Convert milligrams to grains.
 * Accepts fractional values and preserves the sign.
 */
function milligramsToGrains(float $value): float {
    $result = $value / 64.79891;
    return $result;
}

/**
 * Convert troy ounces to grams.
 * Accepts fractional values and preserves the sign.
 */
function troyOuncesToGrams(float $value): float {
    $result = $value * 31.1034768;
    return $result;
}

/**
 * Convert grams to troy ounces.
 * Accepts fractional values and preserves the sign.
 */
function gramsToTroyOunces(float $value): float {
    $result = $value / 31.1034768;
    return $result;
}

function sample48() {
    return 48
}
