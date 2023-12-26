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
            <button class="custom-button" data-bs-toggle="modal" data-bs-target="#editEnroll">
              <span class="button-content gap-4">
                  Edit
              </span>
          </button>
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

  
       </script>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>


    </body>
</html>