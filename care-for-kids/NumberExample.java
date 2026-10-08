// Standalone Java sample for testing unrelated file types.
public class NumberExample {
    public static long sumTo(int limit) {
        if (limit < 0) {
            throw new IllegalArgumentException("limit must be non-negative");
        }
        return (long) limit * (limit + 1L) / 2;
    }

    public static void main(String[] args) {
        System.out.println("Sum of 1 through 10: " + sumTo(10));
    }
}
