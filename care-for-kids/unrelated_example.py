"""Standalone Python example, unrelated to the JavaScript website."""

def fibonacci(count):
    """Return the first count Fibonacci numbers."""
    numbers = []
    current, following = 0, 1
    for _ in range(count):
        numbers.append(current)
        current, following = following, current + following
    return numbers


if __name__ == "__main__":
    print(fibonacci(10))
