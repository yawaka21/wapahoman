<?php
     include("sidevar.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <link rel="stylesheet" href="style-Management.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="tableContainer">
        <button type="button" class="btn btn-primary"> Add</button>
    <table class="table table-success table-striped">
   
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Buss Number</th>
                <th scope="col">Drivers Name</th>
                <th scope="col">Bus Type</th>
                <th scope="col">Operation</th>
                
            </tr>
        </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>064310</td>
                    <td>Jonel D. Gelig</td>
                    <td>Air Condition</td>
                    <td>
                    <button type="button" class="btn btn-info">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            
            </tbody>
    </table>
</div> 
</body>
</html>