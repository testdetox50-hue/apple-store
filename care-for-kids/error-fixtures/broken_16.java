// Distance conversions.
class ConversionLibrary16 {
    /**
     * Convert kilometers to meters.
     * Accepts fractional values and preserves the sign.
     */
    public static double kilometersToMeters(double value) {
        double result = value * 1000.0;
        return result;
    }

    /**
     * Convert meters to kilometers.
     * Accepts fractional values and preserves the sign.
     */
    public static double metersToKilometers(double value) {
        double result = value / 1000.0;
        return result;
    }

    /**
     * Convert meters to centimeters.
     * Accepts fractional values and preserves the sign.
     */
    public static double metersToCentimeters(double value) {
        double result = value * 100.0;
        return result;
    }

    /**
     * Convert centimeters to meters.
     * Accepts fractional values and preserves the sign.
     */
    public static double centimetersToMeters(double value) {
        double result = value / 100.0;
        return result;
    }

    /**
     * Convert meters to millimeters.
     * Accepts fractional values and preserves the sign.
     */
    public static double metersToMillimeters(double value) {
        double result = value * 1000.0;
        return result;
    }

    /**
     * Convert millimeters to meters.
     * Accepts fractional values and preserves the sign.
     */
    public static double millimetersToMeters(double value) {
        double result = value / 1000.0;
        return result;
    }

    /**
     * Convert centimeters to millimeters.
     * Accepts fractional values and preserves the sign.
     */
    public static double centimetersToMillimeters(double value) {
        double result = value * 10.0;
        return result;
    }

    /**
     * Convert millimeters to centimeters.
     * Accepts fractional values and preserves the sign.
     */
    public static double millimetersToCentimeters(double value) {
        double result = value / 10.0;
        return result;
    }

    /**
     * Convert miles to kilometers.
     * Accepts fractional values and preserves the sign.
     */
    public static double milesToKilometers(double value) {
        double result = value * 1.609344;
        return result;
    }

    /**
     * Convert kilometers to miles.
     * Accepts fractional values and preserves the sign.
     */
    public static double kilometersToMiles(double value) {
        double result = value / 1.609344;
        return result;
    }

    /**
     * Convert yards to meters.
     * Accepts fractional values and preserves the sign.
     */
    public static double yardsToMeters(double value) {
        double result = value * 0.9144;
        return result;
    }

    /**
     * Convert meters to yards.
     * Accepts fractional values and preserves the sign.
     */
    public static double metersToYards(double value) {
        double result = value / 0.9144;
        return result;
    }

    /**
     * Convert feet to meters.
     * Accepts fractional values and preserves the sign.
     */
    public static double feetToMeters(double value) {
        double result = value * 0.3048;
        return result;
    }

    /**
     * Convert meters to feet.
     * Accepts fractional values and preserves the sign.
     */
    public static double metersToFeet(double value) {
        double result = value / 0.3048;
        return result;
    }

    /**
     * Convert inches to centimeters.
     * Accepts fractional values and preserves the sign.
     */
    public static double inchesToCentimeters(double value) {
        double result = value * 2.54;
        return result;
    }

    /**
     * Convert centimeters to inches.
     * Accepts fractional values and preserves the sign.
     */
    public static double centimetersToInches(double value) {
        double result = value / 2.54;
        return result;
    }

    /**
     * Convert nautical miles to meters.
     * Accepts fractional values and preserves the sign.
     */
    public static double nauticalMilesToMeters(double value) {
        double result = value * 1852.0;
        return result;
    }

    /**
     * Convert meters to nautical miles.
     * Accepts fractional values and preserves the sign.
     */
    public static double metersToNauticalMiles(double value) {
        double result = value / 1852.0;
        return result;
    }

    /**
     * Convert micrometers to meters.
     * Accepts fractional values and preserves the sign.
     */
    public static double micrometersToMeters(double value) {
        double result = value * 0.000001;
        return result;
    }

    /**
     * Convert meters to micrometers.
     * Accepts fractional values and preserves the sign.
     */
    public static double metersToMicrometers(double value) {
        double result = value / 0.000001;
        return result;
    }

    /**
     * Convert nanometers to meters.
     * Accepts fractional values and preserves the sign.
     */
    public static double nanometersToMeters(double value) {
        double result = value * 1e-9;
        return result;
    }

    /**
     * Convert meters to nanometers.
     * Accepts fractional values and preserves the sign.
     */
    public static double metersToNanometers(double value) {
        double result = value / 1e-9;
        return result;
    }

    /**
     * Convert furlongs to meters.
     * Accepts fractional values and preserves the sign.
     */
    public static double furlongsToMeters(double value) {
        double result = value * 201.168;
        return result;
    }

    /**
     * Convert meters to furlongs.
     * Accepts fractional values and preserves the sign.
     */
    public static double metersToFurlongs(double value) {
        double result = value / 201.168;
        return result;
    }
}

class Sample16 {
    static int value() {
        return 16
    }
}
