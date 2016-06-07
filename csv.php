<?php
$csv = file_get_contents('todo.csv');

class CsvTable
{
    public function csvContent($csv)
    {
        $byLine = explode("\n", $csv);

        $table = [];

        foreach ($byLine as $line)
        {
            $byWords = explode(',', $line);

            list($id, $title, $description) = $byWords;

            $table[] = [
                'id' => $id,
                'title' => $title,
                'description' => $description
            ];
        }
    }

    function rowPrinter($rows, $cols)
    {
        echo "<table>";
        echo "<tr>";

        foreach($cols as $col)
        {
            echo "<th>$col</th>";
        }
        echo "</tr>";

        foreach($rows as $row)
        {
            echo "<tr>";

            foreach ($cols as $col) {
                echo "<td>{$row[$col]}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
$tblcsv = new csvTable();
var_dump($tblcsv->csvContent($table, ['id', 'title', 'description']));