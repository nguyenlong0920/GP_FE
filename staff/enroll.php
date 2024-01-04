<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Enrollment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../staff/enroll.css">
        <link rel="stylesheet" href="../staff/navbar2.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/staffnav.php'; ?>

      <ul class="nav">
        <li><a href="../staff/courseAnnounce.php">Announcement</a></li>
        <li><a href="../staff/courseOverview.php">Overview</a></li>
        <li><a href="../staff/gradesDetail.php">Grade</a></li>
        <li><a href="../staff/attend.php">Attendance</a></li>
        <li class="active"><a href="../staff/enroll.php">Enrollment</a></li>
      </ul>

        <!-- Main content -->
        <h1>Enrollment</h1>
        <div class="container mt-4">
          <div class="btn-container">
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#enrollM">
              <span class="button-content gap-4">
                  Add
              </span>
          </button>
          </div>
        </div>
        <!-- Add Enroll List Modal-->
        <div class="modal fade" id="enrollM" tabindex="-1" role="dialog" aria-labelledby="enrollMLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="enrollMLabel">Add Student</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for adding new student -->
                        <form id="EnrollForm" action="../staff/enrollM.php" method="post">
                            <div class="form-group">
                                <label for="studentMajor">Major:</label>
                                <input type="text" class="form-control" id="studentMajor" name="studentMajor" required>
                            </div>
                            <div class="form-group">
                                <label for="studentID">Student ID:</label>
                                <input type="text" class="form-control" id="studentID" name="studentID" required>
                            </div>
                            <div class="form-group">
                                <label for="studentName">Student Name:</label>
                                <input type="text" class="form-control" id="studentName" name="studentName" required>
                            </div>
                            <div class="form-group">
                                <label for="studentDOB">Date of birth:</label>
                                <input type="date" class="form-control" id="studentDOB" name="studentDOB" required>
                            </div>
                            <div class="form-group">
                              <label for="studentSex">Gender:</label>
                              <select class="form-control" id="studentSex" name="studentSex" required>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="studentEmail">Email:</label>
                              <input type="email" class="form-control" id="studentEmail" name="studentEmail" required>
                            </div>
                            
                            <button type="submit" class="btn btn-custom" name="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-2">
          <table class="table table-bordered table-hover">
              <thead>
                <tr class="tb-row">
                  <th class="td-head" scope="col">Major</th>
                  <th class="td-head" scope="col">Student ID</th>
                  <th class="td-head" scope="col">Name</th>
                  <th class="td-head" scope="col">DOB</th>
                  <th class="td-head" scope="col">Gender</th>
                  <th class="td-head" scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
                <tr class="tb-row">
                  <td class="td-custom">ICT</td>
                  <td class="td-custom">BI12-001 </td>
                  <td class="td-custom">Nguyễn Văn A </td>
                  <td class="td-custom">01/01/2001</td>
                  <td class="td-custom">Male</td>
                  <td class="td-custom">anguyenvanbi12001@gmail.com</td>
                </tr>
              </tbody>
            </table>
      </div>

      <div class="container">
        <nav class="list-pagination">
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="pre-item page-link" href="studentList.php">Previous</a></li>
              <li class="page-item"><a class="page-link" href="studentList.php">1</a></li>
              <li class="page-item active"><a class="page-link" href="studentList2.php">2</a></li>
              <li class="page-item"><a class="page-link" href="studentList3.php">3</a></li>
              <li class="page-item"><a class="next-item page-link" href="studentList3.php">Next</a></li>
            </ul>
          </nav>
      </div>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>


    </body>
</html>