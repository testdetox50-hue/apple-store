package fixtures

// Mass conversions.

// KilogramsToGrams converts kilograms to grams.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func KilogramsToGrams(value float64) float64 {
    result := value * 1000.0
    return result
}

// GramsToKilograms converts grams to kilograms.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func GramsToKilograms(value float64) float64 {
    result := value / 1000.0
    return result
}

// GramsToMilligrams converts grams to milligrams.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func GramsToMilligrams(value float64) float64 {
    result := value * 1000.0
    return result
}

// MilligramsToGrams converts milligrams to grams.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MilligramsToGrams(value float64) float64 {
    result := value / 1000.0
    return result
}

// MilligramsToMicrograms converts milligrams to micrograms.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MilligramsToMicrograms(value float64) float64 {
    result := value * 1000.0
    return result
}

// MicrogramsToMilligrams converts micrograms to milligrams.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MicrogramsToMilligrams(value float64) float64 {
    result := value / 1000.0
    return result
}

// TonnesToKilograms converts tonnes to kilograms.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func TonnesToKilograms(value float64) float64 {
    result := value * 1000.0
    return result
}

// KilogramsToTonnes converts kilograms to tonnes.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func KilogramsToTonnes(value float64) float64 {
    result := value / 1000.0
    return result
}

// PoundsToKilograms converts pounds to kilograms.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func PoundsToKilograms(value float64) float64 {
    result := value * 0.45359237
    return result
}

// KilogramsToPounds converts kilograms to pounds.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func KilogramsToPounds(value float64) float64 {
    result := value / 0.45359237
    return result
}

// OuncesToGrams converts ounces to grams.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func OuncesToGrams(value float64) float64 {
    result := value * 28.349523125
    return result
}

// GramsToOunces converts grams to ounces.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func GramsToOunces(value float64) float64 {
    result := value / 28.349523125
    return result
}

// StonesToPounds converts stones to pounds.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func StonesToPounds(value float64) float64 {
    result := value * 14.0
    return result
}

// PoundsToStones converts pounds to stones.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func PoundsToStones(value float64) float64 {
    result := value / 14.0
    return result
}

// ShortTonsToPounds converts short tons to pounds.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func ShortTonsToPounds(value float64) float64 {
    result := value * 2000.0
    return result
}

// PoundsToShortTons converts pounds to short tons.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func PoundsToShortTons(value float64) float64 {
    result := value / 2000.0
    return result
}

// LongTonsToPounds converts long tons to pounds.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func LongTonsToPounds(value float64) float64 {
    result := value * 2240.0
    return result
}

// PoundsToLongTons converts pounds to long tons.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func PoundsToLongTons(value float64) float64 {
    result := value / 2240.0
    return result
}

// CaratsToGrams converts carats to grams.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func CaratsToGrams(value float64) float64 {
    result := value * 0.2
    return result
}

// GramsToCarats converts grams to carats.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func GramsToCarats(value float64) float64 {
    result := value / 0.2
    return result
}

// GrainsToMilligrams converts grains to milligrams.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func GrainsToMilligrams(value float64) float64 {
    result := value * 64.79891
    return result
}

// MilligramsToGrains converts milligrams to grains.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func MilligramsToGrains(value float64) float64 {
    result := value / 64.79891
    return result
}

// TroyOuncesToGrams converts troy ounces to grams.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func TroyOuncesToGrams(value float64) float64 {
    result := value * 31.1034768
    return result
}

// GramsToTroyOunces converts grams to troy ounces.
// Accepts fractional values and preserves the sign.
// Returns the converted numeric value.
func GramsToTroyOunces(value float64) float64 {
    result := value / 31.1034768
    return result
}

func Sample38() int {
    return 38
