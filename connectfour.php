<!DOCTYPE html>
<html lang="en">
<head>
    <title>Connect Four</title>

    <!-- Include the CSS inside <style> with escaping to PHP -->
    <style>
        <?php include 'connectfour.css'; ?>
    </style>

</head>
<body>   
    <?php
        // Define constants
        define('ROWS', 6);
        define('COLS', 7);

        // Define function createBoard with an empty parameter list
        function createBoard() {
            // Declare a two-dimensional array $initialMatrix initialized to data values
            $initialMatrix = [
                [0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0],
                [2, 1, 1, 2, 1, 0, 0],
                [1, 1, 2, 2, 1, 1, 2],
                [1, 2, 1, 2, 1, 2, 1]
            ];
                        
            // Build the HTML

            // Print/echo an <h1> with the text "Connect Four" using class "title"
            echo '<h1 class="title">Connect Four</h1>';
                
            // Print/echo a <table> using class "container"
            echo '<table class="container">';

            // Iterate through the ROWS to create each <tr>
            for ($row = 0; $row < ROWS; $row++) {
                echo '<tr>'; // Print/echo a <tr>

                // Iterate through the COLS to create each <td>
                for ($col = 0; $col < COLS; $col++) {
                    // Determine class based on cell value
                    if ($initialMatrix[$row][$col] == 1) {
                        $class = 'player1';
                    } elseif ($initialMatrix[$row][$col] == 2) {
                        $class = 'player2';
                    } else {
                        $class = 'empty';
                    }

                    // Print/echo the <td> for the cell using attribute class set equal to variable $class
                    echo "<td class='$class'></td>";
                }
                echo '</tr>'; // Print/echo the closing </tr> for the row
            }

            echo '</table>'; // Print/echo the closing </table> for the table
        }
             
        // Call function createBoard
        createBoard();
    ?>       
</body>
</html>
