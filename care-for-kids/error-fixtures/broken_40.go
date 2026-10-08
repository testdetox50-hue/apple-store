package fixtures

// Storage conversions.

// BytesToBits converts bytes to bits.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func BytesToBits(value float64) float64 {
    result := value * 8.0
    return result
}

// BitsToBytes converts bits to bytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func BitsToBytes(value float64) float64 {
    result := value / 8.0
    return result
}

// KilobytesToBytes converts kilobytes to bytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func KilobytesToBytes(value float64) float64 {
    result := value * 1000.0
    return result
}

// BytesToKilobytes converts bytes to kilobytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func BytesToKilobytes(value float64) float64 {
    result := value / 1000.0
    return result
}

// MegabytesToBytes converts megabytes to bytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MegabytesToBytes(value float64) float64 {
    result := value * 1000000.0
    return result
}

// BytesToMegabytes converts bytes to megabytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func BytesToMegabytes(value float64) float64 {
    result := value / 1000000.0
    return result
}

// GigabytesToBytes converts gigabytes to bytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func GigabytesToBytes(value float64) float64 {
    result := value * 1000000000.0
    return result
}

// BytesToGigabytes converts bytes to gigabytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func BytesToGigabytes(value float64) float64 {
    result := value / 1000000000.0
    return result
}

// TerabytesToBytes converts terabytes to bytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func TerabytesToBytes(value float64) float64 {
    result := value * 1000000000000.0
    return result
}

// BytesToTerabytes converts bytes to terabytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func BytesToTerabytes(value float64) float64 {
    result := value / 1000000000000.0
    return result
}

// KibibytesToBytes converts kibibytes to bytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func KibibytesToBytes(value float64) float64 {
    result := value * 1024.0
    return result
}

// BytesToKibibytes converts bytes to kibibytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func BytesToKibibytes(value float64) float64 {
    result := value / 1024.0
    return result
}

// MebibytesToBytes converts mebibytes to bytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MebibytesToBytes(value float64) float64 {
    result := value * 1048576.0
    return result
}

// BytesToMebibytes converts bytes to mebibytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func BytesToMebibytes(value float64) float64 {
    result := value / 1048576.0
    return result
}

// GibibytesToBytes converts gibibytes to bytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func GibibytesToBytes(value float64) float64 {
    result := value * 1073741824.0
    return result
}

// BytesToGibibytes converts bytes to gibibytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func BytesToGibibytes(value float64) float64 {
    result := value / 1073741824.0
    return result
}

// TebibytesToBytes converts tebibytes to bytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func TebibytesToBytes(value float64) float64 {
    result := value * 1099511627776.0
    return result
}

// BytesToTebibytes converts bytes to tebibytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func BytesToTebibytes(value float64) float64 {
    result := value / 1099511627776.0
    return result
}

// MegabytesToKilobytes converts megabytes to kilobytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MegabytesToKilobytes(value float64) float64 {
    result := value * 1000.0
    return result
}

// KilobytesToMegabytes converts kilobytes to megabytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func KilobytesToMegabytes(value float64) float64 {
    result := value / 1000.0
    return result
}

// GigabytesToMegabytes converts gigabytes to megabytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func GigabytesToMegabytes(value float64) float64 {
    result := value * 1000.0
    return result
}

// MegabytesToGigabytes converts megabytes to gigabytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MegabytesToGigabytes(value float64) float64 {
    result := value / 1000.0
    return result
}

// MebibytesToKibibytes converts mebibytes to kibibytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MebibytesToKibibytes(value float64) float64 {
    result := value * 1024.0
    return result
}

// KibibytesToMebibytes converts kibibytes to mebibytes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func KibibytesToMebibytes(value float64) float64 {
    result := value / 1024.0
    return result
}

func Sample40() int {
    return 40
