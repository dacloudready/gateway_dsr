<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
<table class="table table-striped table-hovered table-bordered">
    <thead>
        <th>ID</th>
        <th>Date</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Unit</th>
        <th>Model</th>
        <th>Branch</th>
        <th>Source</th>
    </thead>
    <tbody>
        
                <tr>
                    <td><a href="<?=base_url('view-lead')."/".$user['id'];?>"><?=$user['id'];?></a></td>
                    <td><?=$user['created_at'];?></td>
                    <td><?=$user['name'];?></td>
                    <td><?=$user['address'];?></td>
                    <td><?=$user['contact'];?></td>
                    <td><?=$user['email']; ?></td>
                    <td><?=$user['desired_unit_brand']; ?></td>
                    <td><?=$user['desired_unit_model'];?></td>
                    <td><?=$user['visited_branch'];?></td>
                    <td><?=$user['source'];?></td>
                </tr>
    
        
    </tbody>
    

</table>
</div>
</body>
</html>




