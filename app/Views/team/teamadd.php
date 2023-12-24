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
    <link rel="shortcut icon" href="assets/img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

    <title>Forms | AdminKit Demo</title>

    <link href="<?= site_url('assets/css/app.css')?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <?php echo $this->include('includes/sidebar.php') ?>

        <div class="main">
            <?php echo $this->include('includes/topbar.php') ?>

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Forms</h1>
                        
                    </div>
                    <div class="row">
                        <div>
                            <form class="row g-3 needs-validation" action="<?php echo base_url('/team/store') ?>" enctype="multipart/form-data" method="post" novalidate>

                                <div class="col-md-12">
                                    <label for="bsValidation3" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="bsValidation3" placeholder="Enter team name" name="name" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="bsValidation13" class="form-label">Designation</label>
                                    <textarea class="form-control" id="bsValidation13" placeholder="designation" name="designation" rows="3" required></textarea>
                                    <div class="invalid-feedback">
                                        Please enter a valid address.
                                    </div>
                                </div>
                               

                                <div class="col-md-12">
                                    <label for="bsValidation13" class="form-label">Description</label>
                                    <textarea class="form-control" id="bsValidation13" placeholder="description ..." name="description" rows="3" required></textarea>
                                    <div class="invalid-feedback">
                                        Please enter a valid address.
                                    </div>
                                </div>
                               
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="bsValidation14" required>
                                        <label class="form-check-label" for="bsValidation14">Agree to terms and conditions</label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-md-flex d-grid align-items-center gap-3">
                                        <button type="submit" class="btn btn-primary px-4">ADD</button>
                                        <button type="reset" class="btn btn-light px-4">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </main>

            <?php echo $this->include('includes/footer.php') ?>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

    <script src="assets/js/app.js"></script>

</body>

</html>