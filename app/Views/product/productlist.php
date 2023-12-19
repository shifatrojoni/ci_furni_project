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
                        <h1 class="h3 d-inline align-middle">Forms</h1>
                        <a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
                            Get more form examples
                        </a>
                    </div>
                    <div>
                    <a href="categoryadd"  class="btn-group"><button type="button" class="btn btn-success">ADD New</button></a>
                    </div><br>
                    <div class="row">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Sku</th>
                                    <th>Category</th>
                                    <th>Inventory</th>
                                    <th>Price</th>
                                    <th>Created_at</th>
                                    <th>Modified_at</th>
                                    <th>Deleted_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Sku</th>
                                    <th>Category</th>
                                    <th>Inventory</th>
                                    <th>Price</th>
                                    <th>Created_at</th>
                                    <th>Modified_at</th>
                                    <th>Deleted_at</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
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