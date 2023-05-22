<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Project list</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Project List</title>
        <style>
            .box {
                border: 1px solid black;
                padding: 10px;
                margin: 10px;
                cursor: pointer;
            }
            .details {
                display: none;
            }
            .edit-btn, .delete-btn {
                background-color: gray;
                color: white;
                padding: 5px;
                border: none;
                border-radius: 5px;
                margin-right: 5px;
            }
            .add-btn {
                background-color: green;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
        </style>
        <script>
            function expandDetails(id) {
                var details = document.getElementById("details-" + id);
                if (details.style.display === "none") {
                    details.style.display = "block";
                } else {
                    details.style.display = "none";
                }
            }
            function editProject(id) {
                console.log("Edit project with ID: " + id);
            }
            function deleteProject(id) {
                console.log("Delete project with ID: " + id);
            }
            function addProject() {
                console.log("Add new project");
            }
        </script>
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
      <h1>Project List</h1>
          <?php
          // Establish a connection to the database
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "Projects";
          $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Prepare a SELECT statement
      $sql = "SELECT * FROM projectsdb";
      $result = $conn->query($sql);

      // Loop through the data and output each row as a project box
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo '<div class="box" onclick="expandDetails(' . $row['ProjectID'] . ')">';
              echo '<h2>' . $row['ProjectName'] . '</h2>';
              echo '<p>Client: ' . $row['ClientName'] . '</p>';
              echo '<p>Services needed: ' . $row['ServicesNeeded'] . '</p>';
              echo '<p>Due date: ' . $row['DueDate'] . '</p>';
              echo '<button class="edit-btn" onclick="editProject(' . $row['ProjectID'] . ')">Edit</button>';
              echo '<button class="delete-btn" onclick="deleteProject(' . $row['ProjectID'] . ')">Delete</button>';
              echo '<div class="details" id="details-' . $row['ProjectID'] . '">';
              echo '<p>Details of ' . $row['ProjectName'] . '</p>';
              echo '</div>';
              echo '</div>';
          }
      } else {
          echo '<p>No projects found.</p>';
      }

      // Close the database connection
      $conn->close();
      ?>

      <button class="add-btn" onclick="addProject()">Add Project</button>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>