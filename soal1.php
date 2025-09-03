<?php

$jml = $_GET['jml'];

echo "<style>
        table { 
            border-collapse: collapse; 
            width: 300px; 
        }
        td {
            border: 2px solid black;
            padding: 7px;
        }
      </style>";

echo "<table>\n";
for ($a = $jml; $a > 0; $a--) {
    $total = 0;
    for ($b = $a; $b > 0; $b--) {
        $total += $b;
    }

    echo "<tr><td colspan='$jml'><b>TOTAL: $total</b></td></tr>\n";

    echo "<tr>";
    for ($b = $a; $b > 0; $b--) {
        echo "<td>$b</td>";
    }

    if ($a < $jml) {
        $c = $jml - $a;
        echo "<td colspan='$c'></td>";
    }

    echo "</tr>\n";
}
echo "</table>";
