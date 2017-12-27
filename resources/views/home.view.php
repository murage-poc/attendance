<?php
/**
 * All rights reserved.
 * User: Dread Pirate Roberts
 * Date: 06-Aug-17
 * Time: 16:47
 */

require_once 'partials/header.php';

?>

<div class = "container">
    <div class = "main-table">
        <!-- Default panel contents -->
        <h2>KUCSA members list</h2>
        
        <!-- Table -->
        <table class = "table table-bordered table-responsive table-format">
            <thead>
            <tr>
                <th>No</th>
                <th>NAME</th>
                <th>Reg No</th>
                <th>Year</th>
                <th>Report</th>
            </tr>
            </thead>
            <tbody id="datalist">
            
            
            </tbody>
        </table>
    
        <footer>
            <p>
                This website uses cookies. By using our services, you’re agreeing to our <a>Cookie Policy</a>.
            </p>
        </footer>
<?php
require_once 'partials/footer.php';
?>
