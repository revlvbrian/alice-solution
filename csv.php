<?php
$content = file_get_contents('todo.csv');

class Csv
{
    public function table($content)
    {
        $csvContent = explode("\n", $content);

        return $csvContent;
    }
    public function createTable($rows, $cols)
    {

        echo "<table border=2>";
        echo "<tr>";

        foreach ($cols as $col) {
            echo "<th>$col</th>";
        }
        echo "</tr>";


        foreach ($rows as $row) {
            $rowContent = explode(",", $row);
            echo "<tr>";
        foreach ($rowContent as $rowContents){

        echo "<td>$rowContents</td>";
        }
        echo "</tr>";

        }
        echo "</table>";
    }
}

$tbl = new Csv($content);
$tbl->createTable($tbl->table($content), ['no.','Title','Details']);