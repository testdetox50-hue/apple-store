<?php
// Storage conversions.

/**
 * Convert bytes to bits.
 * Accepts fractional values and preserves the sign.
 */
function bytesToBits(float $value): float {
    $result = $value * 8.0;
    return $result;
}

/**
 * Convert bits to bytes.
 * Accepts fractional values and preserves the sign.
 */
function bitsToBytes(float $value): float {
    $result = $value / 8.0;
    return $result;
}

/**
 * Convert kilobytes to bytes.
 * Accepts fractional values and preserves the sign.
 */
function kilobytesToBytes(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert bytes to kilobytes.
 * Accepts fractional values and preserves the sign.
 */
function bytesToKilobytes(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert megabytes to bytes.
 * Accepts fractional values and preserves the sign.
 */
function megabytesToBytes(float $value): float {
    $result = $value * 1000000.0;
    return $result;
}

/**
 * Convert bytes to megabytes.
 * Accepts fractional values and preserves the sign.
 */
function bytesToMegabytes(float $value): float {
    $result = $value / 1000000.0;
    return $result;
}

/**
 * Convert gigabytes to bytes.
 * Accepts fractional values and preserves the sign.
 */
function gigabytesToBytes(float $value): float {
    $result = $value * 1000000000.0;
    return $result;
}

/**
 * Convert bytes to gigabytes.
 * Accepts fractional values and preserves the sign.
 */
function bytesToGigabytes(float $value): float {
    $result = $value / 1000000000.0;
    return $result;
}

/**
 * Convert terabytes to bytes.
 * Accepts fractional values and preserves the sign.
 */
function terabytesToBytes(float $value): float {
    $result = $value * 1000000000000.0;
    return $result;
}

/**
 * Convert bytes to terabytes.
 * Accepts fractional values and preserves the sign.
 */
function bytesToTerabytes(float $value): float {
    $result = $value / 1000000000000.0;
    return $result;
}

/**
 * Convert kibibytes to bytes.
 * Accepts fractional values and preserves the sign.
 */
function kibibytesToBytes(float $value): float {
    $result = $value * 1024.0;
    return $result;
}

/**
 * Convert bytes to kibibytes.
 * Accepts fractional values and preserves the sign.
 */
function bytesToKibibytes(float $value): float {
    $result = $value / 1024.0;
    return $result;
}

/**
 * Convert mebibytes to bytes.
 * Accepts fractional values and preserves the sign.
 */
function mebibytesToBytes(float $value): float {
    $result = $value * 1048576.0;
    return $result;
}

/**
 * Convert bytes to mebibytes.
 * Accepts fractional values and preserves the sign.
 */
function bytesToMebibytes(float $value): float {
    $result = $value / 1048576.0;
    return $result;
}

/**
 * Convert gibibytes to bytes.
 * Accepts fractional values and preserves the sign.
 */
function gibibytesToBytes(float $value): float {
    $result = $value * 1073741824.0;
    return $result;
}

/**
 * Convert bytes to gibibytes.
 * Accepts fractional values and preserves the sign.
 */
function bytesToGibibytes(float $value): float {
    $result = $value / 1073741824.0;
    return $result;
}

/**
 * Convert tebibytes to bytes.
 * Accepts fractional values and preserves the sign.
 */
function tebibytesToBytes(float $value): float {
    $result = $value * 1099511627776.0;
    return $result;
}

/**
 * Convert bytes to tebibytes.
 * Accepts fractional values and preserves the sign.
 */
function bytesToTebibytes(float $value): float {
    $result = $value / 1099511627776.0;
    return $result;
}

/**
 * Convert megabytes to kilobytes.
 * Accepts fractional values and preserves the sign.
 */
function megabytesToKilobytes(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert kilobytes to megabytes.
 * Accepts fractional values and preserves the sign.
 */
function kilobytesToMegabytes(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert gigabytes to megabytes.
 * Accepts fractional values and preserves the sign.
 */
function gigabytesToMegabytes(float $value): float {
    $result = $value * 1000.0;
    return $result;
}

/**
 * Convert megabytes to gigabytes.
 * Accepts fractional values and preserves the sign.
 */
function megabytesToGigabytes(float $value): float {
    $result = $value / 1000.0;
    return $result;
}

/**
 * Convert mebibytes to kibibytes.
 * Accepts fractional values and preserves the sign.
 */
function mebibytesToKibibytes(float $value): float {
    $result = $value * 1024.0;
    return $result;
}

/**
 * Convert kibibytes to mebibytes.
 * Accepts fractional values and preserves the sign.
 */
function kibibytesToMebibytes(float $value): float {
    $result = $value / 1024.0;
    return $result;
}

function sample50() {
    return 50
}
