<?php
/**
 * All rights reserved.
 * User: Dread Pirate Roberts
 * Date: 06-Aug-17
 * Time: 16:47
 */

require_once 'partials/header.php';

?>

<div class = "col-lg-12 col-xs-5 col-md-5 wrapper">
    <div class = "panel panel-primary">
        <!-- Default panel contents -->
        <div class = "panel-heading">KUCSA members list</div>
        
        <!-- Table -->
        <table class = "table table-responsive">
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


<?php
require_once 'partials/footer.php';
?>
