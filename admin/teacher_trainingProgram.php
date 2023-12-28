<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Training Program</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../admin/teacher_traningProgram.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
              <a class="navbar-brand" href="#">
                <img class="logo" src="../images/logo-moi_2.svg" alt="logo" width="90" height="50.78">
              </a>
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="../Teacher/announcement.php"><i class="fas fa-home"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/manageAccount.php"><i class="fas fa-users-cog"></i> Account</a>
                      </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-graduation-cap"></i> Academic
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="../admin/curriculumList.php">Curriculum</a></li>
                        </ul>
                    </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cog"></i> System
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="../admin/systemSetting.php">System Settings</a></li>
                          <li><a class="dropdown-item" href="../admin/security.php">System Security</a></li>
                          <li><a class="dropdown-item" href="../admin/upgradeMaintance.php">Upgrade & Maintance</a></li>
                          <div class="dropdown-divider"></div>
                          <li><a class="dropdown-item" href="../admin/integrations.php">System Integrations</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../admin/admin_profile.php">Account</a></li>
                        <li><a class="dropdown-item" href="../sign-in/logout.php">Logout</a></li>
                      </ul>
                    </li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
        </header>

        <!-- Main content -->
        <div class="container mt-4">
            <p class="header-text">Training Program</p>
        </div>

        <div class="container mt-4">
            <div class="training">
                <button class="btn btn-primary btn-lg year-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCourse1" aria-expanded="false" aria-controls="collapseCourse1">
                  Year 2
                </button>
                <div class="collapse" id="collapseCourse1">
                  <div class="card card-body course-card">
                    <ul class="yearCourse">
                      <li class="courseList"><a class="courseName" href="../admin/teacher_List.php">Information and Communication Technology (ICT)</a></li>
                      <li class="courseList"><a class="courseName" href="../admin/teacher_List.php">Data Sciences (DS)</a></li>
                      <li class="courseList"><a class="courseName" href="../admin/teacher_List.php">Cyber Security (CS)</a></li>
                    </ul>
                  </div>
                </div>
              </div>
        
              <div class="training">
                <button class="btn btn-primary btn-lg year-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCourse1" aria-expanded="false" aria-controls="collapseCourse1">
                  Year 3
                </button>
                <div class="collapse" id="collapseCourse1">
                  <div class="card card-body course-card">
                    <ul class="yearCourse">
                      <li class="courseList"><a class="courseName" href="../admin/teacher_List.php">Information and Communication Technology (ICT)</a></li>
                      <li class="courseList"><a class="courseName" href="../admin/teacher_List.php">Data Sciences (DS)</a></li>
                      <li class="courseList"><a class="courseName" href="../admin/teacher_List.php">Cyber Security (CS)</a></li>
                    </ul>
                  </div>
                </div>
              </div>
        </div>


    
        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>

    </body>
</html>