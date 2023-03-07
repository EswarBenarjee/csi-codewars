var num = 0; 

function change() {
  if(num%2 == 0) {
    document.getElementById('head').innerHTML = '<h4 class="card-title" style="margin-left: 0.5vw; padding: 0;">Member 1 <i class="ri-user-follow-line"></i></h4>';
    document.getElementById('member2').style.display = 'inline-block';
  } else {
    document.getElementById('head').innerHTML = '<h4 class="card-title" style="margin-left: 0.5vw; padding: 0;">Student Registration<i class="ri-user-follow-line"></i></h4>';
    document.getElementById('member2').style.display = 'none';
  }
  num++;
}

function submit_ans() {
  
  if(num%2 != 0) {
      var name = document.getElementById("floatingName name1").value;
    var name_res = /^[A-Za-z\s]+$/;
    if(!(name_res.test(name))) {
      Swal.fire('OOPS!','Please enter Member 1 Name correctly','error');
      return false;
    }

    var name = document.getElementById("floatingName name2").value;
    if(!(name_res.test(name))) {
      Swal.fire('OOPS!','Please enter Member 2 Name correctly','error');
      return false;
    }

    var jntuno = document.getElementById("floatingName jntuno1").value;
    var jntuno_res = /^[1-2][0-9]34[15][A][01][0-9a-zA-Z]{3}$/i;
    if(!(jntuno_res.test(jntuno))) {
      Swal.fire('OOPS!','Please enter Member 1 Jntuno correctly','error');
      return false;
    }

    var jntuno = document.getElementById("floatingName jntuno2").value;
    if(!(jntuno_res.test(jntuno))) {
      Swal.fire('OOPS!','Please enter Member 2 Jntuno correctly','error');
      return false;
    }

    var mail_id = document.getElementById("floatingName mail_id1").value;
    var mail_res = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!(mail_res.test(mail_id))) {
      Swal.fire('OOPS!','Please enter Member 1 Mail ID correctly','error');
      return false; 
    }

    var mail_id = document.getElementById("floatingName mail_id2").value;
    if(!(mail_res.test(mail_id))) {
      Swal.fire('OOPS!','Please enter Member 2 Mail ID correctly','error');
      return false; 
    }

    var year = document.getElementById("floatingNumber year1").value;
    var year_res = /^[2-4]$/;
    if(!(year_res.test(year))) {
      Swal.fire('OOPS!','Please enter Member 1 Year of Study correctly','error');
      return false;
    }

    var year = document.getElementById("floatingNumber year2").value;
    if(!(year_res.test(year))) {
      Swal.fire('OOPS!','Please enter Member 2 Year of Study correctly','error');
      return false;
    }

    var mobile = document.getElementById("floatingNumber mobile1").value;
    var mobile_res = /^[6789][0-9]{9}$/;
    if(!(mobile_res.test(mobile))) {
      Swal.fire('OOPS!','Please enter Member 1 Mobile Number correctly','error');
      return false;
    }

    var mobile = document.getElementById("floatingNumber mobile2").value;
    if(!(mobile_res.test(mobile))) {
      Swal.fire('OOPS!','Please enter Member 2 Mobile Number correctly','error');
      return false;
    }

    return true;
  }

  var name = document.getElementById("floatingName name1").value;
  var name_res = /^[A-Za-z\s]+$/;
  if(!(name_res.test(name))) {
    Swal.fire('OOPS!','Please enter Name correctly','error');
    return false;
  }
  
  var jntuno = document.getElementById("floatingName jntuno1").value;
  var jntuno_res = /^[1-2][0-9]34[15][A][01][0-9a-zA-Z]{3}$/i;
  if(!(jntuno_res.test(jntuno))) {
    Swal.fire('OOPS!','Please enter Jntuno correctly','error');
    return false;
  }

  var mail_id = document.getElementById("floatingName mail_id1").value;
  var mail_res = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(!(mail_res.test(mail_id))) {
    Swal.fire('OOPS!','Please enter Mail ID correctly','error');
    return false; 
  }

  var year = document.getElementById("floatingNumber year1").value;
  var year_res = /^[2-4]$/;
  if(!(year_res.test(year))) {
    Swal.fire('OOPS!','Please enter Year of Study correctly','error');
    return false;
  }
  
  var mobile = document.getElementById("floatingNumber mobile1").value;
  var mobile_res = /^[6789][0-9]{9}$/;
  if(!(mobile_res.test(mobile))) {
    Swal.fire('OOPS!','Please enter Mobile Number correctly','error');
    return false;
  }
  
  return true;
}