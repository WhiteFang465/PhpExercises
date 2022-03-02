<?php
const SENTENCE = 'A sentence to be displayed by putting one word per line';
function showTitle($title)
{
    echo "<br/><b>&#9830; $title </b><br/>";
}


showTitle('Exercise 1: Display 1 word per line.');

$wordsAfterSplitting = explode(" ", SENTENCE);
echo implode("<br/>", $wordsAfterSplitting);

echo '<hr/>';
//
showTitle('Exercise 2: Reverse display 1 word per line.');

$arrayReversing = array_reverse($wordsAfterSplitting);
echo implode("<br/>", $arrayReversing);
//
echo '<hr/>';

showTitle('Exercise 3: Display number of Words in Sentence.');

$wordCount = str_word_count(SENTENCE);
echo "Number of Words: " . $wordCount;
//
echo '<hr/>';
showTitle('Exercise 4: Display number of characters in sentence.');

$characterCount = strlen(SENTENCE);
echo "Number of characters: " . $characterCount;
//


echo '<hr/>';
showTitle('Exercise 5: Display number of characters excluding spaces');
$characterCountWithoutSpace = $characterCount - substr_count(SENTENCE, " ");
echo "Number of characters without space" . $characterCountWithoutSpace;
//

echo '<hr/>';
showTitle('Exercise 6: Display sentence with all characters UPPERCASE');

echo strtoupper(SENTENCE);
//

echo '<hr/>';
showTitle('Exercise 7: Display sentence with each word first letter Capitalized');

echo ucwords(SENTENCE);
//

echo '<hr/>';
showTitle('Exercise 8: Display sentence with all characters lowercase');

echo strtolower(SENTENCE);
//
