package fixtures

// Volume conversions.

// LitersToMilliliters converts liters to milliliters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func LitersToMilliliters(value float64) float64 {
    result := value * 1000.0
    return result
}

// MillilitersToLiters converts milliliters to liters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MillilitersToLiters(value float64) float64 {
    result := value / 1000.0
    return result
}

// CubicMetersToLiters converts cubic meters to liters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func CubicMetersToLiters(value float64) float64 {
    result := value * 1000.0
    return result
}

// LitersToCubicMeters converts liters to cubic meters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func LitersToCubicMeters(value float64) float64 {
    result := value / 1000.0
    return result
}

// CubicCentimetersToMilliliters converts cubic centimeters to milliliters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func CubicCentimetersToMilliliters(value float64) float64 {
    result := value * 1.0
    return result
}

// MillilitersToCubicCentimeters converts milliliters to cubic centimeters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MillilitersToCubicCentimeters(value float64) float64 {
    result := value / 1.0
    return result
}

// CubicInchesToMilliliters converts cubic inches to milliliters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func CubicInchesToMilliliters(value float64) float64 {
    result := value * 16.387064
    return result
}

// MillilitersToCubicInches converts milliliters to cubic inches.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MillilitersToCubicInches(value float64) float64 {
    result := value / 16.387064
    return result
}

// CubicFeetToLiters converts cubic feet to liters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func CubicFeetToLiters(value float64) float64 {
    result := value * 28.316846592
    return result
}

// LitersToCubicFeet converts liters to cubic feet.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func LitersToCubicFeet(value float64) float64 {
    result := value / 28.316846592
    return result
}

// UsGallonsToLiters converts us gallons to liters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func UsGallonsToLiters(value float64) float64 {
    result := value * 3.785411784
    return result
}

// LitersToUsGallons converts liters to us gallons.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func LitersToUsGallons(value float64) float64 {
    result := value / 3.785411784
    return result
}

// UsQuartsToLiters converts us quarts to liters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func UsQuartsToLiters(value float64) float64 {
    result := value * 0.946352946
    return result
}

// LitersToUsQuarts converts liters to us quarts.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func LitersToUsQuarts(value float64) float64 {
    result := value / 0.946352946
    return result
}

// UsPintsToMilliliters converts us pints to milliliters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func UsPintsToMilliliters(value float64) float64 {
    result := value * 473.176473
    return result
}

// MillilitersToUsPints converts milliliters to us pints.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MillilitersToUsPints(value float64) float64 {
    result := value / 473.176473
    return result
}

// UsCupsToMilliliters converts us cups to milliliters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func UsCupsToMilliliters(value float64) float64 {
    result := value * 236.5882365
    return result
}

// MillilitersToUsCups converts milliliters to us cups.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MillilitersToUsCups(value float64) float64 {
    result := value / 236.5882365
    return result
}

// UsFluidOuncesToMilliliters converts us fluid ounces to milliliters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func UsFluidOuncesToMilliliters(value float64) float64 {
    result := value * 29.5735295625
    return result
}

// MillilitersToUsFluidOunces converts milliliters to us fluid ounces.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MillilitersToUsFluidOunces(value float64) float64 {
    result := value / 29.5735295625
    return result
}

// UsTablespoonsToMilliliters converts us tablespoons to milliliters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func UsTablespoonsToMilliliters(value float64) float64 {
    result := value * 14.78676478125
    return result
}

// MillilitersToUsTablespoons converts milliliters to us tablespoons.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MillilitersToUsTablespoons(value float64) float64 {
    result := value / 14.78676478125
    return result
}

// UsTeaspoonsToMilliliters converts us teaspoons to milliliters.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func UsTeaspoonsToMilliliters(value float64) float64 {
    result := value * 4.92892159375
    return result
}

// MillilitersToUsTeaspoons converts milliliters to us teaspoons.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MillilitersToUsTeaspoons(value float64) float64 {
    result := value / 4.92892159375
    return result
}

func Sample39() int {
    return 39
