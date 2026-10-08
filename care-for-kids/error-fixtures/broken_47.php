<?php
// Duration conversions.

/**
 * Convert minutes to seconds.
 * Accepts fractional values and preserves the sign.
 */
function minutesToSeconds(float $value): float {
    $result = $value * 60.0;
    return $result;
}

/**
 * Convert seconds to minutes.
 * Accepts fractional values and preserves the sign.
 */
function secondsToMinutes(float $value): float {
    $result = $value / 60.0;
    return $result;
}

/**
 * Convert hours to seconds.
 * Accepts fractional values and preserves the sign.
 */
function hoursToSeconds(float $value): float {
    $result = $value * 3600.0;
    return $result;
}

/**
 * Convert seconds to hours.
 * Accepts fractional values and preserves the sign.
 */
function secondsToHours(float $value): float {
    $result = $value / 3600.0;
    return $result;
}

/**
 * Convert days to seconds.
 * Accepts fractional values and preserves the sign.
 */
function daysToSeconds(float $value): float {
    $result = $value * 86400.0;
    return $result;
}

/**
 * Convert seconds to days.
 * Accepts fractional values and preserves the sign.
 */
function secondsToDays(float $value): float {
    $result = $value / 86400.0;
    return $result;
}

/**
 * Convert weeks to days.
 * Accepts fractional values and preserves the sign.
 */
function weeksToDays(float $value): float {
    $result = $value * 7.0;
    return $result;
}

/**
 * Convert days to weeks.
 * Accepts fractional values and preserves the sign.
 */
function daysToWeeks(float $value): float {
    $result = $value / 7.0;
    return $result;
}

/**
 * Convert hours to minutes.
 * Accepts fractional values and preserves the sign.
 */
function hoursToMinutes(float $value): float {
    $result = $value * 60.0;
    return $result;
}

/**
 * Convert minutes to hours.
 * Accepts fractional values and preserves the sign.
 */
function minutesToHours(float $value): float {
    $result = $value / 60.0;
    return $result;
}

/**
 * Convert days to hours.
 * Accepts fractional values and preserves the sign.
 */
function daysToHours(float $value): float {
    $result = $value * 24.0;
    return $result;
}

/**
 * Convert hours to days.
 * Accepts fractional values and preserves the sign.
 */
function hoursToDays(float $value): float {
    $result = $value / 24.0;
    return $result;
}

/**
 * Convert weeks to hours.
 * Accepts fractional values and preserves the sign.
 */
function weeksToHours(float $value): float {
    $result = $value * 168.0;
    return $result;
}

/**
 * Convert hours to weeks.
 * Accepts fractional values and preserves the sign.
 */
function hoursToWeeks(float $value): float {
    $result = $value / 168.0;
    return $result;
}

/**
 * Convert seconds to milliseconds.
 * Accepts fractional values and preserves the sign.
 */
function secondsToMilliseconds(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert milliseconds to seconds.
 * Accepts fractional values and preserves the sign.
 */
function millisecondsToSeconds(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert milliseconds to microseconds.
 * Accepts fractional values and preserves the sign.
 */
function millisecondsToMicroseconds(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert microseconds to milliseconds.
 * Accepts fractional values and preserves the sign.
 */
function microsecondsToMilliseconds(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert microseconds to nanoseconds.
 * Accepts fractional values and preserves the sign.
 */
function microsecondsToNanoseconds(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert nanoseconds to microseconds.
 * Accepts fractional values and preserves the sign.
 */
function nanosecondsToMicroseconds(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert fortnights to days.
 * Accepts fractional values and preserves the sign.
 */
function fortnightsToDays(float $value): float {
    $result = $value * 14.0;
    return $result;
}

/**
 * Convert days to fortnights.
 * Accepts fractional values and preserves the sign.
 */
function daysToFortnights(float $value): float {
    $result = $value / 14.0;
    return $result;
}

/**
 * Convert weeks to minutes.
 * Accepts fractional values and preserves the sign.
 */
function weeksToMinutes(float $value): float {
    $result = $value * 10080.0;
    return $result;
}

/**
 * Convert minutes to weeks.
 * Accepts fractional values and preserves the sign.
 */
function minutesToWeeks(float $value): float {
    $result = $value / 10080.0;
    return $result;
}

function sample47() {
    return 47
}
