<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CSI Code Wars</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/csi.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    main {
      padding: 5vh 5vw 0;
    }
    @media only screen and (min-width: 1200px) {
      main {
        padding: 5vh 10vw 5vh;
      }
    }
  </style>
</head>

<body>
  <main>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">CSI Code Wars <i class="ri-sword-fill"></i></h5>

      <!-- Floating Labels Form -->
      <form class="row g-3" id="form" method="POST" action="submit.php" onSubmit="return submit_ans();">

        <div class="member1 row g-3" id="member1">
          <div class="col-12" id="head">
            <h4 class="card-title" style="margin-left: 0.5vw; padding: 0;">Student Registration<i class="ri-user-follow-line"></i></h4>
          </div>
          
          <div class="col-md-12">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingName name1" name="name1" placeholder="Student Name">
              <label for="floatingName">Name</label>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingName jntuno1" name="jntuno1" placeholder="Jntu Number">
              <label for="floatingName">Jntu Number</label>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingName mail_id1" name="mail1" placeholder="Mail ID">
              <label for="floatingName">Mail ID</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-floating mb-3">
              <select class="form-select" id="floatingSelect dept1" name="dept1" aria-label="Department">
                <option value="cse" selected>Computer Science and Engineering</option>
                <option value="it">Information Technology</option>
              </select>
              <label for="floatingSelect">Department</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-floating">
              <input type="number" class="form-control" id="floatingNumber year1" name="year1" placeholder="Year">
              <label for="floatingNumber">Year</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-floating mb-3">
              <select class="form-select" id="floatingSelect section1" name="section1" aria-label="Section">
                <option value="A" selected>A</option>
                <option value="B">B</option>
                <option value="C">C</option>
              </select>
              <label for="floatingSelect">Section</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-floating">
              <input type="number" class="form-control" id="floatingNumber mobile1" name="mobile1" placeholder="Mobile Number">
              <label for="floatingNumber">Mobile Number</label>
            </div>
          </div>
        </div>
        
        <span id="js1"></span>
        
        <div class="member2 row g-3" id="member2" style="display: none">
          <div class="col-12" id="head">
            <h4 class="card-title" style="margin-left: 0.5vw; padding: 0;">Member 2 <i class="ri-user-follow-line"></i></h4>
          </div>
          
          <div class="col-md-12">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingName name2" name="name2" value="" placeholder="Student Name">
              <label for="floatingName">Name</label>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingName jntuno2" name="jntuno2" placeholder="Jntu Number">
              <label for="floatingName">Jntu Number</label>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingName mail_id2" name="mail2" placeholder="Mail ID">
              <label for="floatingName">Mail ID</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-floating mb-3">
              <select class="form-select" id="floatingSelect dept2" name="dept2" aria-label="Department">
                <option value="cse" selected>Computer Science and Engineering</option>
                <option value="it">Information Technology</option>
              </select>
              <label for="floatingSelect">Department</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-floating">
              <input type="number" class="form-control" id="floatingNumber year2" name="year2" placeholder="Year">
              <label for="floatingNumber">Year</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-floating mb-3">
              <select class="form-select" id="floatingSelect section2" name="section2" aria-label="Section">
                <option value="A" selected>A</option>
                <option value="B">B</option>
                <option value="C">C</option>
              </select>
              <label for="floatingSelect">Section</label>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-floating">
              <input type="number" class="form-control" id="floatingNumber mobile2" name="mobile2" placeholder="Mobile Number">
              <label for="floatingNumber">Mobile Number</label>
            </div>
          </div>
  
        </div>

        <center>
          <div class="col-md-3">
            <div class="form-check" style="text-align: left;">
              <input class="form-check-input" type="checkbox" name="check" id="gridCheck" onclick="change()">
              <label class="form-check-label" for="gridCheck">
                Do you have a Team Member?
              </label>
            </div>
          </div>
        </center>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      
      </form><!-- End floating Labels Form -->

    </div>
  </div>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <!-- Sweet Alert 2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="assets/js/index.js"></script>

</body>

</html>
