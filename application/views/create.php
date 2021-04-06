<html>
    <head>
        <title>Create user</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" > 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script> 
    </head>

    <body>
        <div class="navbar navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand">CRUD operations Application</a>
            </div>
        </div>
        <div class="container" style="margin-top:20px">
            <h1>create user</h1>
            <hr>
            <form name="createUser" method="post" action="<?php echo base_url()."index.php/user/create";?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="from-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo set_value('name');?>">
                           <?php //echo form_error('name');?>
                        </div>
                        <div class="from-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo set_value('name');?>">
                            <?php //echo form_error('email');?>
                        </div><br>
                        <div class="from-group">
                            <button class="btn btn-primary" >Create</button>
                            <a href="<?php echo base_url().'index.php/user/index';?>" class="btn btn-secondary">Cancel</a>
                        </div>

                    </div>
                </div>
            </form>    
        </div>
    </body>
</html>