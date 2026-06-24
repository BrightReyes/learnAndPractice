<?php
/**
 * ============================================================
 *  PHP DEBUGGING PRACTICE — EASY LEVEL (SOLUTIONS)
 * ============================================================
 *
 *  ⚠️  SPOILER ALERT! Try to solve all bugs before reading this.
 *
 *  Each bug is explained with:
 *    ❌ What was wrong
 *    ✅ The fix
 *    📖 Why it was wrong
 * ============================================================
 */

$passed = 0;
$total = 10;

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
echo "  PHP DEBUGGING PRACTICE — SOLUTIONS\n";
echo "============================================\n\n";


// ──────────────────────────────────────────────
// BUG #1: String Concatenation
// ──────────────────────────────────────────────
// ❌ WRONG:   $greeting = "Hello, " + "World!";
// ✅ FIX:     $greeting = "Hello, " . "World!";
// 📖 WHY:     PHP uses the DOT (.) operator for string
//             concatenation, not the plus (+) sign.
//             The + operator does arithmetic addition, which
//             converts strings to 0, giving you 0 instead of text.

$greeting = "Hello, " . "World!";

check(1, "String concatenation", $greeting, "Hello, World!");


// ──────────────────────────────────────────────
// BUG #2: Variable Name Typo
// ──────────────────────────────────────────────
// ❌ WRONG:   $area = $width * $heigth;
// ✅ FIX:     $area = $width * $height;
// 📖 WHY:     Variable names are case-sensitive and must
//             be spelled exactly. "$heigth" is not the same
//             as "$height". Undefined variables default to
//             null (treated as 0 in math), giving 0 instead of 50.

$width = 5;
$height = 10;
$area = $width * $height;

check(2, "Variable name typo", $area, 50);


// ──────────────────────────────────────────────
// BUG #3: Comparison vs Assignment
// ──────────────────────────────────────────────
// ❌ WRONG:   if ($age = 18)    — single equals = ASSIGNS
// ✅ FIX:     if ($age == 18)   — double equals = COMPARES
// 📖 WHY:     A single = is assignment (sets $age to 18 and 
//             always evaluates to true). You need == for
//             comparison. This bug is tricky because the code
//             still "works" when $age is already 18, but it
//             would break for any other value. Use === for
//             strict comparison (checks type too).

$age = 18;
if ($age == 18) {
    $canVote = true;
} else {
    $canVote = false;
}

check(3, "Comparison vs assignment", $canVote, true);


// ──────────────────────────────────────────────
// BUG #4: Array Index Off-by-One
// ──────────────────────────────────────────────
// ❌ WRONG:   $firstFruit = $fruits[1];  → gives "banana"
// ✅ FIX:     $firstFruit = $fruits[0];  → gives "apple"
// 📖 WHY:     PHP arrays are zero-indexed. The FIRST element
//             is at index 0, not 1. This is one of the most
//             common beginner mistakes in programming.
//               Index 0 = "apple"
//               Index 1 = "banana"
//               Index 2 = "cherry"

$fruits = ["apple", "banana", "cherry"];
$firstFruit = $fruits[0];

check(4, "Array index off-by-one", $firstFruit, "apple");


// ──────────────────────────────────────────────
// BUG #5: Wrong String Function
// ──────────────────────────────────────────────
// ❌ WRONG:   $charCount = count($text);
// ✅ FIX:     $charCount = strlen($text);
// 📖 WHY:     count() is for ARRAYS — it counts the number of
//             elements in an array. To count characters in a 
//             STRING, use strlen() (string length).
//             count() on a string returns 1 (not the character count).

$text = "PHP is fun";
$charCount = strlen($text);

check(5, "Wrong string function", $charCount, 10);


// ──────────────────────────────────────────────
// BUG #6: Missing Dollar Sign
// ──────────────────────────────────────────────
// ❌ WRONG:   $doubled = number * 2;
// ✅ FIX:     $doubled = $number * 2;
// 📖 WHY:     In PHP, ALL variable names start with $.
//             Without the $, PHP thinks "number" is a constant.
//             If no constant named "number" exists, PHP throws
//             a fatal error (or in older versions, treats it as
//             the string "number").

$number = 7;
$doubled = $number * 2;

check(6, "Missing dollar sign", $doubled, 14);


// ──────────────────────────────────────────────
// BUG #7: Wrong Loop Condition
// ──────────────────────────────────────────────
// ❌ WRONG:   for ($i = 1; $i < 5; $i++)   → sums 1+2+3+4 = 10
// ✅ FIX:     for ($i = 1; $i <= 5; $i++)  → sums 1+2+3+4+5 = 15
// 📖 WHY:     The < (less than) operator stops BEFORE reaching 5,
//             so the loop only runs for i = 1, 2, 3, 4.
//             Use <= (less than or equal) to INCLUDE 5 in the loop.

$sum = 0;
for ($i = 1; $i <= 5; $i++) {
    $sum += $i;
}

check(7, "Wrong loop condition", $sum, 15);


// ──────────────────────────────────────────────
// BUG #8: Logical Operator Error
// ──────────────────────────────────────────────
// ❌ WRONG:   if ($score >= 1 || $score <= 100)
// ✅ FIX:     if ($score >= 1 && $score <= 100)
// 📖 WHY:     || means OR — the condition is true if EITHER
//             side is true. Since 150 >= 1 is true, the whole
//             condition is true even though 150 > 100.
//             Use && (AND) so BOTH conditions must be true:
//             the number must be >= 1 AND also <= 100.

$score = 75;
if ($score >= 1 && $score <= 100) {
    $inRange = true;
} else {
    $inRange = false;
}

$testScore = 150;
if ($testScore >= 1 && $testScore <= 100) {
    $outOfRange = false;
} else {
    $outOfRange = true;
}

check(8, "Logical operator error", $inRange && $outOfRange, true);


// ──────────────────────────────────────────────
// BUG #9: Incorrect Array Function
// ──────────────────────────────────────────────
// ❌ WRONG:   array_pop($basket);     → REMOVES the last element
// ✅ FIX:     Remove the array_pop() line entirely (or do nothing)
// 📖 WHY:     array_pop() REMOVES and returns the last element.
//             The next line $basket[] = "grape" adds grape, but
//             "banana" was already removed, giving ["apple", "grape"]
//             instead of ["apple", "banana", "grape"].
//             We just need the $basket[] = "grape" line.

$basket = ["apple", "banana"];
// Removed: array_pop($basket);   ← this was removing "banana"
$basket[] = "grape";

check(9, "Incorrect array function", $basket, ["apple", "banana", "grape"]);


// ──────────────────────────────────────────────
// BUG #10: Return Value Not Captured
// ──────────────────────────────────────────────
// ❌ WRONG:   strtoupper($word);   — result is thrown away
//             $shout = $word;       — $word is still "hello"
// ✅ FIX:     $shout = strtoupper($word);
// 📖 WHY:     strtoupper() RETURNS a new uppercase string —
//             it does NOT modify the original variable. You must
//             capture the return value in a variable.
//             This applies to most PHP string functions: they
//             return new values rather than modifying in place.

$word = "hello";
$shout = strtoupper($word);

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
