<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Announcements</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../students/retakeForm.css">
        <link rel="stylesheet" href="../students/navbar.css">
        <link rel="stylesheet" href="../students/navbar2.css">
        <link rel="stylesheet" href="../students/footer.css">
        <script src="accordion.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <header>
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#">
          <img src="../images/logo-moi_2.svg" alt="logo" width="90" height="50.78">
        </a>
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="../students/announce.php">
                  <i class="fas fa-home"></i> Announcement</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../students/course-overview.php"> 
                  <i class="fas fa-book"></i> Course
                </a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="../students/contact.php"><i class="fa-solid fa-phone"></i> Contact</a>
                  </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-calendar"></i> Timetable
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="https://usth.edu.vn/en/timetableo-of-year-2-program-in-information-and-communication-technology-5959/">Second Year</a></li>
                  <li><a class="dropdown-item" href="https://usth.edu.vn/en/timetable-of-year-3-ict-5961/">Third Year</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-question-circle"></i> </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-user-circle"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../students/account.php">Account</a></li>
                  <li><a class="dropdown-item" href="../students/course-gpa.php">GPA</a></li>
                  <li><a class="dropdown-item" href="../sign-in/logout.php">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

        <!-- Main content -->
        <h1>Retake Form</h1>
        <div class="container mt-4">
            <form id="retakeForm">
                <div class="mb-3">
                    <label for="studentEmail" class="form-label">Email: </label>
                    <input type="email" class="form-control" id="studentEmail" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="studentID" class="form-label">Student ID: </label>
                    <input type="text" class="form-control" id="studentID" placeholder="Enter student ID" required>
                </div>
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name: </label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone Number: </label>
                    <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number" required>
                </div>
                <div class="mb-3">
                    <label for="studentDOB" class="form-label">Date of birth: </label>
                    <input type="date" class="form-control" id="studentDOB" placeholder="Enter your phone number" required>
                </div>
                <div class="mb-3">
                    <label for="studentSex">Gender:</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="" selected disabled hidden>Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                </div>
                <div class="mb-3">
                  <label>Retake or Improve Score: </label><br>
                  <div class="form-check">
                      <input type="radio" class="form-check-input" id="retake" name="retake" value="retake">
                      <label class="form-check-label" for="retake">Retake</label>
                  </div>
                  <div class="form-check">
                      <input type="radio" class="form-check-input" id="improve" name="improve" value="improve">
                      <label class="form-check-label" for="improve">Improve Score</label>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="photoImport">Receipt photo:</label>
                  <input type="file" class="form-control" id="photoImport" name="photoImport" required>
                </div>
                <div class="mb-3">
                  <label for="note" class="form-label">Note (if any): </label>
                  <input type="text" class="form-control" id="note">
              </div>
                
                <button type="submit" class="btn btn-custom">Submit</button>
            </form>
        </div>
         
        <!-- Footer -->
        <footer>
        <div class="row mt-4">
            <div class="col-md-4 infor">
                <img class="white-logo" src="../images/white_logo.png">
                <!--Address-->
                <p class="detail"> <i class="fa-solid fa-house icon-footer"></i>
                    Address
                </p>
                <p class="text-detail"> A21 building, Vietnam Academy of Science and Technology, 18 Hoang Quoc Viet, Cau Giay, Hanoi</p>
                <hr class="divider">

                <!--Phone-->
                <p class="detail"><i class="fa-solid fa-phone icon-footer"></i>
                Phone</p>
                <p class="text-detail"> +84-24 37 91 69 60</p>
                <hr class="divider">
                
                <!--Email-->
                <p class="detail"> <i class="fa-solid fa-envelope icon-footer"></i>
                    Email
                </p>
                <p class="text-detail">officeusth@usth.edu.vn</p>
                <hr class="divider">
                
                <!--Contact-->
                <p class="detail"> <i class="fa-solid fa-envelope icon-footer"></i>
                    Contact
                <p class="text-detail">webmaster@usth.edu.vn</p>
                <hr class="divider">
                
            </div>
            <div class="copy-right  py-2 mt-4">
                <p class="ft-text">&copy; 2021 <span class="web-site">usth.edu.vn</span>. All Rights reserved</p>
            </div>
        </div>
      </footer>


    </body>
</html>