<?php
// Volume conversions.

/**
 * Convert liters to milliliters.
 * Accepts fractional values and preserves the sign.
 */
function litersToMilliliters(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert milliliters to liters.
 * Accepts fractional values and preserves the sign.
 */
function millilitersToLiters(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert cubic meters to liters.
 * Accepts fractional values and preserves the sign.
 */
function cubicMetersToLiters(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert liters to cubic meters.
 * Accepts fractional values and preserves the sign.
 */
function litersToCubicMeters(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert cubic centimeters to milliliters.
 * Accepts fractional values and preserves the sign.
 */
function cubicCentimetersToMilliliters(float $value): float {
    $result = $value * 1.0;
    return $result;
}

/**
 * Convert milliliters to cubic centimeters.
 * Accepts fractional values and preserves the sign.
 */
function millilitersToCubicCentimeters(float $value): float {
    $result = $value / 1.0;
    return $result;
}

/**
 * Convert cubic inches to milliliters.
 * Accepts fractional values and preserves the sign.
 */
function cubicInchesToMilliliters(float $value): float {
    $result = $value * 16.387064;
    return $result;
}

/**
 * Convert milliliters to cubic inches.
 * Accepts fractional values and preserves the sign.
 */
function millilitersToCubicInches(float $value): float {
    $result = $value / 16.387064;
    return $result;
}

/**
 * Convert cubic feet to liters.
 * Accepts fractional values and preserves the sign.
 */
function cubicFeetToLiters(float $value): float {
    $result = $value * 28.316846592;
    return $result;
}

/**
 * Convert liters to cubic feet.
 * Accepts fractional values and preserves the sign.
 */
function litersToCubicFeet(float $value): float {
    $result = $value / 28.316846592;
    return $result;
}

/**
 * Convert us gallons to liters.
 * Accepts fractional values and preserves the sign.
 */
function usGallonsToLiters(float $value): float {
    $result = $value * 3.785411784;
    return $result;
}

/**
 * Convert liters to us gallons.
 * Accepts fractional values and preserves the sign.
 */
function litersToUsGallons(float $value): float {
    $result = $value / 3.785411784;
    return $result;
}

/**
 * Convert us quarts to liters.
 * Accepts fractional values and preserves the sign.
 */
function usQuartsToLiters(float $value): float {
    $result = $value * 0.946352946;
    return $result;
}

/**
 * Convert liters to us quarts.
 * Accepts fractional values and preserves the sign.
 */
function litersToUsQuarts(float $value): float {
    $result = $value / 0.946352946;
    return $result;
}

/**
 * Convert us pints to milliliters.
 * Accepts fractional values and preserves the sign.
 */
function usPintsToMilliliters(float $value): float {
    $result = $value * 473.176473;
    return $result;
}

/**
 * Convert milliliters to us pints.
 * Accepts fractional values and preserves the sign.
 */
function millilitersToUsPints(float $value): float {
    $result = $value / 473.176473;
    return $result;
}

/**
 * Convert us cups to milliliters.
 * Accepts fractional values and preserves the sign.
 */
function usCupsToMilliliters(float $value): float {
    $result = $value * 236.5882365;
    return $result;
}

/**
 * Convert milliliters to us cups.
 * Accepts fractional values and preserves the sign.
 */
function millilitersToUsCups(float $value): float {
    $result = $value / 236.5882365;
    return $result;
}

/**
 * Convert us fluid ounces to milliliters.
 * Accepts fractional values and preserves the sign.
 */
function usFluidOuncesToMilliliters(float $value): float {
    $result = $value * 29.5735295625;
    return $result;
}

/**
 * Convert milliliters to us fluid ounces.
 * Accepts fractional values and preserves the sign.
 */
function millilitersToUsFluidOunces(float $value): float {
    $result = $value / 29.5735295625;
    return $result;
}

/**
 * Convert us tablespoons to milliliters.
 * Accepts fractional values and preserves the sign.
 */
function usTablespoonsToMilliliters(float $value): float {
    $result = $value * 14.78676478125;
    return $result;
}

/**
 * Convert milliliters to us tablespoons.
 * Accepts fractional values and preserves the sign.
 */
function millilitersToUsTablespoons(float $value): float {
    $result = $value / 14.78676478125;
    return $result;
}

/**
 * Convert us teaspoons to milliliters.
 * Accepts fractional values and preserves the sign.
 */
function usTeaspoonsToMilliliters(float $value): float {
    $result = $value * 4.92892159375;
    return $result;
}

/**
 * Convert milliliters to us teaspoons.
 * Accepts fractional values and preserves the sign.
 */
function millilitersToUsTeaspoons(float $value): float {
    $result = $value / 4.92892159375;
    return $result;
}

function sample49() {
    return 49
}
