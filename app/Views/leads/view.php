<?=$this->extend('layout/template'); ?>


<?=$this->section('content');?>

<!-- HEADER -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?=$page_title?></h1>
    </div>
</div>

<!-- CONTENT -->
<div class="row">
    <div class="col-lg-7">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-user"></i> Client Information   
            </div>
            
            <div class="panel-body">
                <form class="form-horizontal" action="" method="POST" role="form">
                    <div class="form-group">
                        <label class="col-xs-3">Name:</label>
                        <div class="col-xs-9">
                            <input class="form-control input-sm"  type="text" name="name" id="name" value="<?= "{$user['first_name']} {$user['middle_name']} {$user['last_name']} "; ?>" />
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                    </div>
                        
                        
                    <div class="form-group">
                        <label class="col-xs-3">Address:</label>
                        <div class="col-xs-9">
                            <input class="form-control input-sm"  type="text" name="address" id="address" value="<?=$user['address']?>" />
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>  
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3">Contact:</label>
                        <div class="col-xs-9">
                            <input class="form-control input-sm"  type="text" name="contact" id="contact" value="<?=$user['contact']?>" />
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3">Email: </label>
                        <div class="col-xs-9">
                            <input class="form-control input-sm"  type="text" name="email" id="email" value="<?=$user['email']?>" />
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3">Branch Visited: </label>
                        <div class="col-xs-9">
                            <input class="form-control input-sm"  type="text" name="branch" id="branch" value="<?=$user['visited_branch']?>" />
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-xs-3">Preferred Brand: </label>
                        <div class="col-xs-9">
                            <input class="form-control input-sm"  type="text" name="brand" id="brand" value="<?=$user['desired_unit_brand'] ?>" />
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3">Model: </label>
                        <div class="col-xs-9">
                            <input class="form-control input-sm"  type="text" name="model" id="model" value="<?=$user['desired_unit_model'] ?>" />
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3">Agent: </label>
                        <div class="col-xs-9">
                            <input class="form-control input-sm"  type="text" name="agent" id="agent" value="" />
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3">Source: </label>
                        <div class="col-xs-9">
                            <input class="radio-inline" type="radio" name="source" id="source" checked value="<?=$user['source'];?>" /> <?=$user['source'];?>
                            <!--<p class="help-block">Example block-level help text here.</p>-->
                        </div>
                    </div>


                </form>
            </div>
        
        </div>
    </div>

    
</div>

<?=$this->endSection();?>

<?=$this->section('js');?>
<?=$this->endSection();?>