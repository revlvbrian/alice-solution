<?php
$Count = file_get_contents('alice.txt');

class WordCounter
{
    public function display($Count)
    {
        $byLine = explode("\n", $Count);
        $filtered = [];
        $specialChar = [
            ',',
            '?',
            '(',
            '-',
            ')',
            '`',
            '!',
            ';',
            '.',
            '_',
            '\'',
            '"',
            '[',
            '*'
        ];

        foreach ($byLine as $line)
        {
            $line = strtolower($line);
            $line = str_replace($specialChar, "", $line);

            if ($line)
            {
                $byWord = explode(" ", $line);

                foreach ($byWord as $index => $word):
                    $word = trim($word);


                    if (array_key_exists($word, $filtered) && strlen($word) > 0)
                    {
                        ++$filtered[$word];
                    }
                    else
                    {
                        $filtered[$word] = 1;
                    }

                endforeach;
            }
        }
        return $filtered;
    }
    public function getTop($sort)
    {
        arsort($sort);
        $sort = array_slice($sort, 0, 20);
        ksort($sort);
        return $sort;
    }
    public function sort($count)
    {
        ksort($count);
        return $count;
    }
}
$wordCount = new WordCounter();
echo "<b>Top 20 Words: </b>". "<pre>";
var_dump($wordCount->getTop($wordCount->display($Count)));
echo "<b>Word Count: </b>". "<pre>";
var_dump($wordCount->sort($wordCount->display($Count)));

echo "<br>";

require_once('csv.php');
require_once('upload.php');