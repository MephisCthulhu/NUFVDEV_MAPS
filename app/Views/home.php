<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MAPS home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky" data-offset="500">
      <div class="container">
        <a href="#" class="navbar-brand">Manpower Allocation and Planning System</a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <?= anchor('home', 'Home', ['class' => 'nav-link']) ?>
            </li>
            <li class="nav-item">
              <?= anchor('projects', 'Projects', ['class' => 'nav-link']) ?>
            </li>
            <li class="nav-item">
              <?= anchor('scheduler', 'Scheduler', ['class' => 'nav-link']) ?>
            </li>
            <li class="nav-item">
              <?= anchor('manageaccount', 'Manage Account', ['class' => 'nav-link']) ?>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>

  <div class="container mt-5">

    <div>

    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Projects</h5>
                    <p class="card-text">List of projects and service types</p>
                    <a class="btn btn-success btn-lg" href="<?php echo base_url('projects'); ?>">Proceed</a>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Scheduler</h5>
                    <p class="card-text">Assign tasks and access calendar</p>
                    <a class="btn btn-success btn-lg" href="<?php echo base_url('scheduler'); ?>">Proceed</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Manage Account</h5>
                    <p class="card-text">View or Manage account</p>
                    <a class="btn btn-success btn-lg" href="<?php echo base_url('manageaccount'); ?>">Proceed</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

