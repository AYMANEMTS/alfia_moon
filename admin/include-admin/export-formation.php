<?php include('config.php'); 
    $query = "SELECT * FROM formation  ";
    $query_run = mysqli_query($con, $query); 
    
    $data = "
    <table border ='1'>
        <thead>
            <tr>
            <th>Nom Complet</th>
            <th>Telephone</th>
            <th>E-mail</th>
            <th>Age</th>
            <th>Ville</th>
            <th>Métier</th>
            <th>Nom de projet</th>
            <th>idée de projet</th>
            <th>Programme</th>
            </tr>
        </thead>
    <tbody>
    ";

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            $data.= "
            <tr>
            <td>$row[fullname]</td>
            <td>$row[tel]</td>
            <td>$row[email]</td>
            <td>$row[age]</td>
            <td>$row[city]</td>
            <td>$row[job]</td>
            <td>$row[nameproject]</td>
            <td>$row[ideaproject]</td>
            <td>$row[alfia]</td>
            </tr>
            ";
        }
    }

    $data.= "</tfoot>
    </table>";

    $name="Data Formation ".date("d-m-y");

    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=$name.xls");

    echo $data;
?>