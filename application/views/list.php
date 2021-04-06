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
            <div class="row">
                <div class="col-md-6">
                  <h1>View users</h1>
                  <a class="btn btn-primary" href="<?php echo base_url().'index.php/user/create';?>">Create user</a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-striped">
                         <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Edit</td>
                                <td>Delete</td>
                        </tr>

                        <?php 
                                if(!empty($users))
                                { 
                                    foreach($users as $user)
                                    {   ?>
                                    <tr>  
                                        <td><?php echo $user['user_id']?> </td>
                                        <td><?php echo $user['name']?> </td>
                                        <td><?php echo $user['email']?> </td>

                                        <td> 
                                            <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>" class="btn btn-primary">
                                            Edit</a>
                                        </td>
                                        <td> 
                                            <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id'];?>" class="btn btn-danger">
                                            Delete</a>
                                        </td>
                                    </tr>
                            
                            <?php }  }  else{   ?>
                                 <tr>
                                     <td colspan="5">Records not found</td>
                                </tr>
                            <?php } ?>

                        </table>

                    </div>
                </div>
            </form>    
        </div>
    </body>
</html>