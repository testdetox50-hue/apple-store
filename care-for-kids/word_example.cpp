// Standalone C++ sample for testing unrelated file types.
#include <algorithm>
#include <iostream>
#include <string>

std::string reverseWord(std::string word) {
    std::reverse(word.begin(), word.end());
    return word;
}

int main() {
    std::cout << "Reversed word: " << reverseWord("example") << '\n';
    return 0;
}
