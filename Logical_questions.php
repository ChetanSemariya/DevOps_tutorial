<!-- Reverse the string -->
<?php
$str = "chetan";
$reversed = "";
$length = 0;

// manually calculate length
while (isset($str[$length])) {
    $length++;
}

// reverse manually
for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $str[$i];
}

?>

<!-- FR Reasons
DSA QUESTIONS
php concepts
confidence in english comm -->
<!-- Find the vowels in the string -->

<?php
$str = "chetan semariya";
$vowels = "aeiouAEIOU"; // to handle both cases
$foundVowels = "";
$length = 0;

// manually calculate string length
while (isset($str[$length])) {
    $length++;
}

// check each character
for ($i = 0; $i < $length; $i++) {
    $ch = $str[$i];
    $j = 0;
    while (isset($vowels[$j])) {
        if ($ch === $vowels[$j]) {
            $foundVowels .= $ch;
            break;
        }
        $j++;
    }
}

echo "Vowels found: " . $foundVowels; 
