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
        <h3>Add Lead</h3>
        <hr>
        <form action="<?=base_url('store-lead')?>" method="POST">
            <input type="text" name="name" placeholder="name" /><br>
            <input type="text" name="address" placeholder="address"/><br>
            <input type="text" name="contact" placeholder="contact"/><br>
            <input type="text" name="email" placeholder="email"/><br>
            <input type="text" name="unit_brand" placeholder="Choose brand"/><br>
            <input type="text" name="unit_model" placeholder="Model"/><br>
            <input type="text" name="branch" placeholder="Branch visited"/><br>
            <input type="text" name="source" placeholder="Source"/><br>
            <button type="Submit">Submit Record</button>
        </form>
    </div>
</body>
</html>




