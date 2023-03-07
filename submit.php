<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Page</title>

    <!-- Sweet Alert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/submit.css">

    <!-- Favicons -->
    <link href="assets/img/csi.ico" rel="icon">
</head>
<body>
    <?php
        include 'conn.php';

        $name1 = trim($_POST['name1']);
        $jntuno1 = trim($_POST['jntuno1']);
        $mail1 = trim($_POST['mail1']);
        $dept1 = trim($_POST['dept1']);
        $year1 = trim($_POST['year1']);
        $section1 = trim($_POST['section1']);
        $mobile1 = trim($_POST['mobile1']); 

        if(!($_POST['name2'] === '')) {
            $name2 = trim($_POST['name2']);
            $jntuno2 = trim($_POST['jntuno2']);
            $mail2 = trim($_POST['mail2']);
            $dept2 = trim($_POST['dept2']);
            $year2 = trim($_POST['year2']);
            $section2 = trim($_POST['section2']);
            $mobile2 = trim($_POST['mobile2']); 

            $max_query = "SELECT team_id FROM level1 WHERE team_id = (SELECT max(team_id) FROM level1);";
            $max_result = $conn->query($max_query);

            if($max_result == True) {
                while($max_row = $max_result->fetch_assoc()) {
                    $m = $max_row['team_id'];
                }
            }

            $register1_query = "INSERT INTO level1 VALUES($m+1, '".$name1."', '".$jntuno1."', '".$mail1."', '".$dept1."', '".$year1."', '".$section1."', '".$mobile1."');";
            $register1_result = $conn->query($register1_query);

            $register2_query = "INSERT INTO level1 VALUES($m+1, '".$name2."', '".$jntuno2."', '".$mail2."', '".$dept2."', '".$year2."', '".$section2."', '".$mobile2."');";
            $register2_result = $conn->query($register2_query);
            
            if($register1_result === TRUE && $register2_result === TRUE) {
            ?>
                <script>   
                    Swal.fire({
                        title: 'Registration Sucessfull',
                        text: 'You have Successfully registered for Code Wars'
                    })
                </script>
            <?php
            } else {
            ?>
                <script>   
                    Swal.fire('Registration unsucessfull', 'Some Error has occured', 'error');
                    function bg_change() {
                        document.body.style.background = "url('../img/sad.gif')!important";
                    }
                    bg_change();
                </script>
            <?php
            }
        } else {
            $register_query = "INSERT INTO level1 VALUES(DEFAULT, '".$name1."', '".$jntuno1."', '".$mail1."', '".$dept1."', '".$year1."', '".$section1."', '".$mobile1."');";
            $register_result = $conn->query($register_query);
            
            if($register_result === TRUE) {
            ?>
                <script>   
                    Swal.fire({
                        title: 'Registration Sucessfull',
                        text: 'You have Successfully registered for Code Wars',
                        icon: 'success'
                    })
                </script>
            <?php
            } else {
            ?>
                <script>
                    Swal.fire('Registration unsucessfull', 'Some Error has occured', 'error');
                    function bg_change() {
                        document.body.style.background = "url('../img/sad.gif')!important";
                    }
                    bg_change();
                </script>
            <?php
            }
        }
    ?>

    <div style="height: 100vh;">
        <br>
    </div>

    <script>
        
    </script>
</body>

</html>