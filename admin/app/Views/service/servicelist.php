<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

    <title>Forms | AdminKit Demo</title>

    <link href="assets/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
       <?php echo $this->include('includes/sidebar.php')?>

        <div class="main">
        <?php echo $this->include('includes/topbar.php'); ?>

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Table</h1>
                       
                    </div>
                    <div>
                    <a href="serviceadd"  class="btn-group"><button type="button" class="btn btn-success">ADD New</button></a>
                    </div><br>
                    <div class="row">
                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Icon</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Icon</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach($msg as $item):?>
                                <tr>
                                    <td><?= $item['id']?></td>
                                    <td><?= $item['icon']?></td>
                                    <td><?= $item['name']?></td>
                                    <td><?= $item['description']?></td>
                                    
                                   
                                   
                                   
                                    <td>
                                      <a href="<?php echo base_url('/service/editservice/' . $item['id']) ?>" class="btn btn-success">Edit</a>  <br>
                                      <a href="<?php echo base_url('/service/delete/' . $item['id']) ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                            
                        </table>
                    </div>

                </div>
            </main>

            <?php echo $this->include('includes/footer.php'); ?>
        </div>
    </div>

    <script src="assets/js/app.js"></script>

</body>

</html>