<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Jajja Financial System</title>
  <link rel="stylesheet" href="<?=base_url('/assets/css/style.css')?>">
  <link rel="stylesheet" href="<?=base_url('node_modules/bootstrap/dist/css/bootstrap.min.css')?>">
</head>

<body style="background-color:aliceblue">
  <div class="container">
    <?php if(session()->getFlashdata('previousUrl')):?>
    <input type='text' hidden class='form-control' value='<?=session()->getFlashdata('previousUrl')?>' id='previousUri'>
    <?php endif;?>
    <span class="text-center text-danger" id='messageSpan'></span>
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <button type="button" class="btn btn-primary w-100" id="loginBtn">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<script src="<?=base_url('node_modules/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('node_modules/axios/dist/axios.js')?>"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const elPassword = document.getElementById("password");
    const elEmail = document.getElementById("email");
    const elLoginBtn = document.getElementById("loginBtn");
    let previousUri = document.getElementById("previousUri")

    if(previousUri){
      document.getElementById("messageSpan").textContent='Session Expired! Please login to continue'
    }
    // Check if elements exist before accessing their values
    if (elPassword && elEmail) {
      
      elLoginBtn.addEventListener('click', function () {
        const passwordValue = elPassword.value;
        const emailValue = elEmail.value;
      
        axios.post('/login', {
            email: emailValue,
            password: passwordValue
          })
          .then((response) => {
            if (response.data.status == "success")
            {
              if(previousUri)
              {
               window.location.assign(`/${previousUri}`);
              }else{
               window.location.assign("/home");
            }
            }
          })
          .catch((err) => {
            console.log(err)
            if (err.response.status != 500) {
              // toastr.error(err.response.data.message);
              alert(err.response.data.message)
            } else {
              // toastr.error("Sorry! Server down!");
              alert('Sorry, server down!')
            }
          })
      })
      // Use the values as needed
    } else {
      alert("Sorry, unexpected error has occured")
    }
  });
</script>