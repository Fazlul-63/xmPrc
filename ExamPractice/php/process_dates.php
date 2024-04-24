<?php
// Check if dates are sent via POST
if(isset($_POST['dates'])) {
    $dates = $_POST['dates'];
    
    // Construct HTML table with selected dates
    $table = '<table class="table">';
    $table .= '<thead><tr><th>Date</th></tr></thead>';
    $table .= '<tbody>';
    foreach ($dates as $date) {
        // No need to convert date string to DateTime object, directly use the string
        $formattedDate = date('Y-m-d', strtotime($date)); // Format the date string
        $table .= '<tr><td>' . $formattedDate . '</td></tr>';
    }
    $table .= '</tbody>';
    $table .= '</table>';
    
    echo $table;
}
?>