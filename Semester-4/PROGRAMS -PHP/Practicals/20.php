<?php
$connect = mysqli_connect("localhost", "user", "password", "database");

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query  = "SELECT * FROM `table_name` WHERE CONCAT(`column_name1`,
`column_name2`, `column_name3`, `column_name4`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `table_name`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "user", "password", "database");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

        <form action="php_html_table_data_filter.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value a search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>

            <table>
                <tr>
                    <th>column_name1</th>
                    <th>column_name2</th>
                    <th>column_name3</th>
                    <th>column_name4</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['column_name1'];?></td>
                    <td><?php echo $row['column_name2'];?></td>
                    <td><?php echo $row['column_name3'];?></td>
                    <td><?php echo $row['column_name4'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

    </body>
</html>