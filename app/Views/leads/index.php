<?=$this->extend('layout/template');?>


<?=$this->section('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?=$page_title?></h1>
    </div>
</div>
 
<!--<a class="btn btn-sm btn-success" href="<?=base_url('create-lead');?>">Add Lead</a>-->
    
<div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-tasks"></i> Summary</div>
    <div class="panel-body">
    <table class="table table-sm table-bordered table-striped" id="myTable" width="100%">
            <thead>
                <th>Date</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Unit</th>
                <th>Model</th>
                <th>Branch</th>
                <th>Source</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php foreach($leads as $row): ?>
                    <tr>
                        
                        <td><?=date_format(date_create($row['created_at']),"m/d/Y");?></td>
                        <td><?= "{$row['first_name']} {$row['middle_name']} {$row['last_name']} "; ?></td>
                        <td><?=$row['address'];?></td>
                        <td><?=$row['contact'];?></td>
                        <td><?=$row['email']; ?></td>
                        <td><?=$row['desired_unit_brand']; ?></td>
                        <td><?=$row['desired_unit_model'];?></td>
                        <td><?=$row['visited_branch'];?></td>
                        <td><?=$row['source'];?></td>
                        <td>
                            <center>
                                <a class="btn btn-sm btn-success center" href="<?=base_url('view-lead')."/".$row['id'];?>">
                                <i class="fa fa-eye"></i> View
                                </a>
                            </center>
                        </td>
                        
                    </tr>
                <?php endforeach; ?>  
            </tbody>
        </table>
    </div>
</div>


<?=$this->endSection();?>

<?=$this->section('js'); ?>
<script>
    $('document').ready(function () {
        $('#myTable').DataTable();
    });
</script>
<?=$this->endSection();?>


