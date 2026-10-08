package fixtures

// Distance conversions.

// KilometersToMeters converts kilometers to meters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func KilometersToMeters(value float64) float64 {
    result := value * 1000.0
    return result
}

// MetersToKilometers converts meters to kilometers.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MetersToKilometers(value float64) float64 {
    result := value / 1000.0
    return result
}

// MetersToCentimeters converts meters to centimeters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MetersToCentimeters(value float64) float64 {
    result := value * 100.0
    return result
}

// CentimetersToMeters converts centimeters to meters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func CentimetersToMeters(value float64) float64 {
    result := value / 100.0
    return result
}

// MetersToMillimeters converts meters to millimeters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MetersToMillimeters(value float64) float64 {
    result := value * 1000.0
    return result
}

// MillimetersToMeters converts millimeters to meters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MillimetersToMeters(value float64) float64 {
    result := value / 1000.0
    return result
}

// CentimetersToMillimeters converts centimeters to millimeters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func CentimetersToMillimeters(value float64) float64 {
    result := value * 10.0
    return result
}

// MillimetersToCentimeters converts millimeters to centimeters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MillimetersToCentimeters(value float64) float64 {
    result := value / 10.0
    return result
}

// MilesToKilometers converts miles to kilometers.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MilesToKilometers(value float64) float64 {
    result := value * 1.609344
    return result
}

// KilometersToMiles converts kilometers to miles.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func KilometersToMiles(value float64) float64 {
    result := value / 1.609344
    return result
}

// YardsToMeters converts yards to meters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func YardsToMeters(value float64) float64 {
    result := value * 0.9144
    return result
}

// MetersToYards converts meters to yards.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MetersToYards(value float64) float64 {
    result := value / 0.9144
    return result
}

// FeetToMeters converts feet to meters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func FeetToMeters(value float64) float64 {
    result := value * 0.3048
    return result
}

// MetersToFeet converts meters to feet.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MetersToFeet(value float64) float64 {
    result := value / 0.3048
    return result
}

// InchesToCentimeters converts inches to centimeters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func InchesToCentimeters(value float64) float64 {
    result := value * 2.54
    return result
}

// CentimetersToInches converts centimeters to inches.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func CentimetersToInches(value float64) float64 {
    result := value / 2.54
    return result
}

// NauticalMilesToMeters converts nautical miles to meters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func NauticalMilesToMeters(value float64) float64 {
    result := value * 1852.0
    return result
}

// MetersToNauticalMiles converts meters to nautical miles.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MetersToNauticalMiles(value float64) float64 {
    result := value / 1852.0
    return result
}

// MicrometersToMeters converts micrometers to meters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MicrometersToMeters(value float64) float64 {
    result := value * 0.000001
    return result
}

// MetersToMicrometers converts meters to micrometers.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MetersToMicrometers(value float64) float64 {
    result := value / 0.000001
    return result
}

// NanometersToMeters converts nanometers to meters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func NanometersToMeters(value float64) float64 {
    result := value * 1e-9
    return result
}

// MetersToNanometers converts meters to nanometers.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MetersToNanometers(value float64) float64 {
    result := value / 1e-9
    return result
}

// FurlongsToMeters converts furlongs to meters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func FurlongsToMeters(value float64) float64 {
    result := value * 201.168
    return result
}

// MetersToFurlongs converts meters to furlongs.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MetersToFurlongs(value float64) float64 {
    result := value / 201.168
    return result
}

func Sample36() int {
    return 36
