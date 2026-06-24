<?php
/**
 * ============================================================
 *  PHP DEBUGGING PRACTICE — EASY LEVEL
 * ============================================================
 *  
 *  🐛 There are 10 BUGS hidden in this file.
 *  
 *  Your goal: Find and fix ALL 10 bugs so the script
 *  runs correctly and all output matches the expected results.
 *
 *  Each section is labeled with what it SHOULD do.
 *  Read the comments, spot the bug, and fix it!
 *
 *  Run this file with:  php challenge.php
 *
 *  💡 Tips:
 *    - Read error messages carefully — they tell you the line number
 *    - Pay attention to syntax: semicolons, quotes, brackets
 *    - Check variable names for typos
 *    - Think about what each function/operator actually does
 *
 *  When all bugs are fixed, you should see:
 *    ✅ All 10 tests passed! Great debugging!
 * ============================================================
 */

$passed = 0;
$total = 10;

// Helper function to check results
function check($testNum, $description, $actual, $expected) {
    global $passed;
    if ($actual === $expected) {
        echo "  ✅ Bug #$testNum FIXED: $description\n";
        $passed++;
    } else {
        echo "  ❌ Bug #$testNum NOT FIXED: $description\n";
        echo "     Expected: "; var_export($expected); echo "\n";
        echo "     Got:      "; var_export($actual); echo "\n";
    }
}

echo "============================================\n";
echo "  PHP DEBUGGING PRACTICE — EASY LEVEL\n";
echo "============================================\n\n";


// ──────────────────────────────────────────────
// BUG #1: String Concatenation
// This should print: "Hello, World!"
// ──────────────────────────────────────────────


echo $greeting = "Hello, " . "World!";  // 🐛 BUG HERE

check(1, "String concatenation", $greeting, "Hello, World!");


// ──────────────────────────────────────────────
// BUG #2: Variable Name Typo
// This should calculate the area of a rectangle
// with width=5 and height=10, result should be 50
// ──────────────────────────────────────────────

$width = 5;
$height = 10;
$area = $width * $height;  // 🐛 BUG HERE

check(2, "Variable name typo", $area, 50);


// ──────────────────────────────────────────────
// BUG #3: Comparison vs Assignment
// This should check if $age is equal to 18
// and set $canVote to true
// ──────────────────────────────────────────────

$age = 18;
if ($age >= 18) {  // 🐛 BUG HERE
    $canVote = true;
} else {
    $canVote = false;
}

check(3, "Comparison vs assignment", $canVote, true);


// ──────────────────────────────────────────────
// BUG #4: Array Index Off-by-One
// This should get the FIRST element of the array
// The first element is "apple"
// ──────────────────────────────────────────────

$fruits = ["apple", "banana", "cherry"];
$firstFruit = $fruits[0];  // 🐛 BUG HERE

check(4, "Array index off-by-one", $firstFruit, "apple");


// ──────────────────────────────────────────────
// BUG #5: Wrong String Function
// This should count the number of characters 
// in the string "PHP is fun" (result: 10)
// ──────────────────────────────────────────────

$text = "PHP is fun";
$charCount = strlen($text);  // 🐛 BUG HERE

check(5, "Wrong string function", $charCount, 10);


// ──────────────────────────────────────────────
// BUG #6: Missing Dollar Sign
// This should double the value of $number
// Starting value is 7, result should be 14
// ──────────────────────────────────────────────

$number = 7;
$doubled = $number * 2;  // 🐛 BUG HERE

check(6, "Missing dollar sign", $doubled, 14);


// ──────────────────────────────────────────────
// BUG #7: Wrong Loop Condition
// This should sum numbers from 1 to 5
// (1+2+3+4+5 = 15)
// ──────────────────────────────────────────────

$sum = 0;
for ($i = 1; $i <= 5; $i++) {  // 🐛 BUG HERE
    $sum += $i;
}

check(7, "Wrong loop condition", $sum, 15);


// ──────────────────────────────────────────────
// BUG #8: Logical Operator Error
// This should check if a number is between 
// 1 AND 100 (inclusive). $score is 75.
// ──────────────────────────────────────────────

$score = 75;
if ($score >= 1 && $score <= 100) {  // 🐛 BUG HERE
    $inRange = true;
} else {
    $inRange = false;
}
// Test with an out-of-range value to verify logic
$testScore = 150;
if ($testScore >= 1 && $testScore <= 100) {  // 🐛 SAME BUG — fix this one too
    $outOfRange = false;  // 150 should NOT be in range
} else {
    $outOfRange = true;   // so this should be true
}

check(8, "Logical operator error", $inRange && $outOfRange, true);


// ──────────────────────────────────────────────
// BUG #9: Incorrect Array Function
// This should add "grape" to the END of the 
// $basket array. Result: ["apple", "banana", "grape"]
// ──────────────────────────────────────────────

$basket = ["apple", "banana"];
         // 🐛 BUG HERE
$basket[] = "grape";         // This line is fine

check(9, "Incorrect array function", $basket, ["apple", "banana", "grape"]);


// ──────────────────────────────────────────────
// BUG #10: Return Value Not Captured
// This function should convert text to uppercase
// $shout should be "HELLO"
// ──────────────────────────────────────────────

$word = "hello";
$shout = strtoupper($word);      // 🐛 BUG HERE

check(10, "Return value not captured", $shout, "HELLO");


// ──────────────────────────────────────────────
// RESULTS
// ──────────────────────────────────────────────

echo "\n============================================\n";
if ($passed === $total) {
    echo "  🎉 All $total tests passed! Great debugging!\n";
} else {
    echo "  🔧 $passed/$total bugs fixed. Keep going!\n";
}
echo "============================================\n";
