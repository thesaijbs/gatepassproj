<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:logout.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include your meta tags, stylesheets, and scripts here -->
    <!-- ... -->
    <title>Requests</title>
    <!--===============================================================================================-->
    <meta charset="UTF-8">
    <!--===============================================================================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/logo.jpg" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="./js/search.js"></script>
</head>

<style>
    /* Include your styles here */
    /* ... */
    html {
        position: relative;
        min-height: 100%;
    }

    body {
        padding-top: 4.5rem;
        margin-bottom: 4.5rem;
        background: linear-gradient(to left, #55A8FB 0%, white 100%);
    }

    #navbarCollapse a {
        color: #fff;

    }

    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 3.5rem;
        line-height: 3.5rem;
        background-color: #2196f3;
    }

    .nav-link:hover {
        transition: all 0.4s;
    }

    .nav-link-collapse:after {
        float: right;
        content: '\f067';
        font-family: 'FontAwesome';
    }

    .nav-link-show:after {
        float: right;
        content: '\f068';
        font-family: 'FontAwesome';
    }

    .nav-item ul.nav-second-level {
        padding-left: 0;
    }

    .nav-item ul.nav-second-level>.nav-item {
        padding-left: 20px;
    }

    @media (min-width: 992px) {
        .sidenav {
            position: absolute;
            top: 0;
            left: 0;
            width: 230px;
            height: calc(100vh - 3.5rem);
            margin-top: 3.5rem;
            background: #2196f3;
            box-sizing: border-box;
            border-top: 1px solid rgba(0, 0, 0, 0.3);
        }

        .navbar-expand-lg .sidenav {
            flex-direction: column;
        }

        .content-wrapper {
            margin-left: 230px;
        }

        .footer {
            width: calc(100% - 230px);
            margin-left: 230px;
        }
    }

    .active {
        background-color: #1565c0;
    }
</style>

<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background:#2196f3;">
            <a class="navbar-brand" style="color: white;" href="#">E-Out Pass</a>
            <!-- ... (rest of your navigation code) ... -->
            <!--tj-- ------------ -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background:#2196f3;">
                <a class="navbar-brand" style="color: white;" href="#">E-Out Pass</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
                        <br>
                        <li class="nav-item active">
                            <a class="nav-link" href="requests.php"> &#128233; Requests<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="accepts.php"> &#128505; Accepts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rejects.php"> &#128503; Rejects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-collapse" href="#" id="hasSubItems" data-toggle="collapse" data-target="#collapseSubItems2" aria-controls="collapseSubItems2" aria-expanded="false"> &#128202; Statistics <strong>⇩</strong></a>
                            <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">
                                <li class="nav-item ">
                                    <a class="nav-link" href="homestatustics.php">
                                        <span class="nav-link-text"> &#127968; Home Permissions</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="onehourstatustics.php">
                                        <span class="nav-link-text"> &#127966; One Hour Permissions</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="studentregistration.php"> &#128221; Student Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="studentdata.php">&#127891; Student Data</a>
                        </li>
                    </ul>
                    <form class="form-inline ml-auto mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" id="myInput" onkeyup="myFunction()" placeholder=" Search &#128269;" aria-label="Search">
                    </form>
                    <a href="logout.php">Logout &#128473;</a>
                </div>
            </nav>
            <!-------tj------------->


            <main class="content-wrapper">
                <div>
                    <h1> Requests:</h1>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <!-- ... (rest of your table header) ... -->
                                <!-- -------tj------------- -->
                                <th scope="col">Roll Number</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Stream</th>
                                <th scope="col">Permissing Type</th>
                                <th scope="col">Reason of Leaveing</th>
                                <th scope="col">Leaving Date/time from collage </th>
                                <th scope="col">Return Date/time</th>
                                <th scope="col">Place</th>
                                <th scope="col">Contact Number</th>
                                <!-- -------tj------------- -->
                                <th scope="col">Accept</th>
                                <th scope="col">Reject</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php
                            include "connect.php";

                            $query = "SELECT * FROM `perpermissions_details` WHERE `status`='PENDING' ORDER BY `sno` DESC ";
                            $sql = mysqli_query($connect, $query);

                            while ($row = mysqli_fetch_array($sql)) {
                                $student_query = "SELECT * FROM `student_details` WHERE `rollnumber` = '" . $row['rollnumber'] . "'";
                                $student_sql = mysqli_query($connect, $student_query);
                                $student_details = mysqli_fetch_array($student_sql);

                                echo "<tr scope='row'>
                                //   <!-- ... (rest of your table cells) ... -->
                                //   ---------tj--------
                                <td>" . $row['rollnumber'] . "</td>
						  <td>" . $student_details['studentname'] . "</td>
						  <td>" . $student_details['stream'] . "</td>
						  <td>" . $row['prmissiontype'] . "</td>
						  <td>" . $row['reason'] . "</td>
						  <td>" . $row['leavingdatetime'] . "</td>
						  <td>" . $row['returndatetime'] . "</td>
						  <td>" . $row['place'] . "</td>
						  <td>" . $row['contacnumber'] . "</td>
                                // ---------tj------- 
                                  <td><a class='btn btn-success' href='acceptdata.php?q=" . $row['sno'] . "'>Accept</a></td>
                                  <td><a class='btn btn-danger' href='rejectreason.php?q=" . $row['sno'] . "'>Reject</a></td>
                               </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
    </section>

    <script>
        // Include your scripts here
        // ...
        $(document).ready(function() {
            $('.nav-link-collapse').on('click', function() {
                $('.nav-link-collapse').not(this).removeClass('nav-link-show');
                $(this).toggleClass('nav-link-show');
            });
        });
    </script>
</body>

</html>