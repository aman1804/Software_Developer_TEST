// Problem: Convert a camelCase string to a normal sentence.

function camelToSentence($str) {
    return strtolower(preg_replace('/([a-z])([A-Z])/', '$1 $2', $str)); // Insert spaces between words
}

echo camelToSentence("camelCaseString"); // Output: "camel case string"
