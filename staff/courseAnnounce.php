<!DOCTYPE html>
<html lang="en-US">
    <head> 
        <title>Announcement</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="../staff/courseAnnounce.css">
        <link rel="stylesheet" href="../staff/navbar2.css">
        <script src="../staff/announce.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    </head>

    <body> 
        <!-- Navbar-->
        <?php include '../navbar/staffnav.php'; ?>

      <ul class="nav">
        <li class="active"><a href="../staff/courseAnnounce.php">Announcement</a></li>
        <li><a href="../staff/courseOverview.php">Overview</a></li>
        <li><a href="../staff/gradesDetail.php">Grade</a></li>
        <li><a href="../staff/attend.php">Attendance</a></li>
        <li><a href="../staff/enroll.php">Enrollment</a></li>
      </ul>

        <!-- Main content -->
        <div class="container mt-4">
            <p class="header-text">Announcements</p>
        </div>

        <div class="container mt-4">
        <div class="btn-container">
          <button class="custom-button" data-bs-toggle="modal" data-bs-target="#addCourseAnnounce">
            <span class="button-content gap-4">
                Add
            </span>
        </button>
        </div>
      </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox1">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(1)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox2">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(2)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox3">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="deleteAnnouncement(3)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox4">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(4)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox1">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(1)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox5">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(5)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox6">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(6)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox7">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="deleteAnnouncement(7)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox8">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(8)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox9">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(9)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox10">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(10)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox11">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(11)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox12">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(1)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox13">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(12)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox14">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(13)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox15">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(14)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox16">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(15)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox17">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(16)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox18">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(17)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox1">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(18)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card announcement">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checkbox19">
                                <a class="link" href="../Teacher/link_announcement.php">Updated invitation: FINAL EXAM MOODLE - Mobile application development - Dr. ... @ Fri Dec 1, 2023 1pm - 2:45pm (ICT)</a>
                                <i class="fas fa-trash-can delete-icon" onclick="confirmDeleteAnnouncement(19)"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            
        </div>

        <!-- Footer -->
        <?php include '../footer/footer.php'; ?>
    </body>
</html>