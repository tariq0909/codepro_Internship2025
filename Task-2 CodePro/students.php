<?php 
session_start();



require 'includes/header.php';
require 'includes/navbar.php'; 
require 'includes/footer.php'; 

$students = [
    [
        'name' => 'Tarique',
        'fname' => 'Brohi',
        'rollnumber' => '21121430',
        'course' => 'Computer Science',
        'status' => 'Registered',
        'registration' => '01-07-2021',
     
    ],
    [
        'name' => 'Ali',
        'fname' => 'Khan',
        'rollnumber' => '12345',
        'course' => 'Computer Science',
        'status' => 'Registered',
       'registration' => '05-03-2023',
        
    ],
    [
        'name' => 'Ameer',
        'fname' => 'Hamaza',
        'rollnumber' => '67890',
        'course' => 'Information Technology',
        'status' => 'Pending',
       'registration' => '01-11-2024',
     
    ],

    [
        'name' => 'Maaz',
        'fname' => 'Khan',
        'rollnumber' => '120800',
        'course' => 'Software Engineering',
        'status' => 'not registered',
        'registration' => '01-01-2025',
     
    ],
    [
        'name' => 'Hassan',
        'fname' => 'Khan',
        'rollnumber' => '567890',
        'course' => 'BBA',
        'status' => 'Pending',
       'registration' => '04-01-2025',
     
    ],
   
];
?>

<div class="container py-4">
    <div class="row">
        <div class="col">
            <div class="card my-3 rounded shadow bg-dark text-white p-3">
                <h3>Candidate's Record</h3>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-md-6">
            <a href="register-student.php" target="_blank" class="text-decoration-none border-bottom border-5 border-danger text-danger p-2 rounded">
                <i class="fa fa-user"></i> Register New Student
            </a>
        </div>
        <div class="col-md-6 text-end">
            <a href="export-student.php" class="text-decoration-none border-bottom border-5 border-primary p-2 rounded">
                <i class="fa fa-download"></i> Export Record
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Candidate's Record</h6>
                    <div class="row my-3">
                        <div class="col-md-12">
                            <input type="text" id="searchStudent" class="form-control" placeholder="Search Candidate by Name" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Candidate</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Enrolled In</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Registration</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">View/Edit</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                        
<?php foreach ($students as $student) : ?>
  <tr>
    <td>
      <div class="d-flex px-2 py-1">
        <div>
          <?php if (!empty($student['image'])) : ?>
            <img src="assets/img/<?= htmlspecialchars($student['image']) ?>" class="avatar avatar-sm me-3" alt="student image">
          <?php else : ?>
            <i class="fas fa-user fa-3x me-3"></i>
          <?php endif; ?>
        </div>
        <div class="d-flex flex-column justify-content-center">
          <h6 class="mb-0 text-sm"><?= htmlspecialchars($student['name']) ?></h6>
          <p class="text-xs text-secondary mb-0"><?= htmlspecialchars($student['fname']) ?></p>
          <p class="text-xs text-secondary mb-0"><?= htmlspecialchars($student['rollnumber']) ?></p>
        </div>
      </div>
    </td>
    <td>
      <p class="text-xs font-weight-bold mb-0"><?= htmlspecialchars($student['course']) ?></p>
    </td>
    <td class="align-middle text-center text-sm">
      <?php if ($student['status'] == 'Registered') : ?>
        <span class="text-success fw-bold"><?= htmlspecialchars($student['status']) ?></span>
      <?php else : ?>
        <span class="text-danger fw-bold"><?= htmlspecialchars($student['status']) ?></span>
      <?php endif; ?>
    </td>
    <td class="align-middle text-center">
      <span class="text-secondary text-xs font-weight-bold"><?= htmlspecialchars($student['registration']) ?></span>
    </td>
    <td class="align-middle text-center">
      <a href="edit-student.php?id=<?= urlencode($student['rollnumber']) ?>" class="text-decoration-none">
        <i class="fas fa-edit text-info"></i>
      </a>
    </td>
    <td class="align-middle text-center">
      <a href="delete-student.php?id=<?= urlencode($student['rollnumber']) ?>" class="text-decoration-none">
        <i class="fas fa-trash text-danger"></i>
      </a>
    </td>
  </tr>
<?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'includes/footer.php'; ?>
