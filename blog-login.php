<?php
session_start();
if (isset($_SESSION['blog-user'])) {
    header("Location: create-blog.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vaidam Consultancy | Support Solution For Every Business</title>
  
<!-- our logo on browser -->
<link rel="icon" type="image/png" href="./assets/images/vaidam/vaidam v logo.png">
    
  <!-- Boostrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  
  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Special+Gothic&display=swap" rel="stylesheet">
  
  <!-- Font awessome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

  <!-- awesome2 alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
  <!-- vaidam nav link -->
  <link rel="stylesheet" href="index-style.css">
  <script src="index-script.js"></script>
  
<style>
    .employee-login .login{
        background-color: #a7b698;
        border: 1px solid #7a7373;
    }
    .employee-login .login .login-title h2{
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 35px;
        font-weight: bold;
        text-align: center;
        color: white;
    }
    .login-input{
        box-shadow: none !important;
        border: 1px solid #8d9b7e !important;
    }
    .login-btn{
        font-weight: bold;
        padding: 5px 20px ;
        color: #819170;
        font-size: 18px;
        /* background-color: #99ad82; */
        border: 1px solid #7a7373;
        background-color: rgba(255, 255, 255, 0.945);
        border-radius: 5px;
        outline: none;
    }
    .login-btn:hover{
        border: 1px solid #657455;
    }


</style>

</head>

<body>
  <div class="body" id="toTop">

    <!-- Navbar -->
    <nav class="navbar container-fluid p-0 shadow bg-body-tertiary" id="navbar">

      <!-- Nav -->
      <div class="container ">

          <img src="./assets/images/vaidam/logo1.png" alt="vaidam logo" class="img-fluid" width="190">

          <div class="d-none d-md-flex navLinks ">

              <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a class="dropdown-toggle" onclick="servicesToggeleOn()">Services</a></li>
                  <li><a href="">About Us</a></li>
                  <li><a href="">Blog</a></li>
                  <li><a href="">Contact Us</a></li>
              </ul>

          </div>
          
          <button class="navbar-toggler d-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-start w-75" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

              <div class="offcanvas-header">
                  <div class="offcanvas-title" id="offcanvasNavbarLabel" >
                      <img src="./assets/images/vaidam/logo1.png" alt="vaidam logo" class="img-fluid" width="150">
                  </div>
                  <button type="button" class="btn-close me-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>

              <div class="offcanvas-body">

                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                        <a class="offcanva-link" href="index.html">Home</a>
                    </li>
                    
                    <li class="nav-item nav-link dropdown-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                        <a class="offcanva-link" onclick="servicesToggeleOn()">Services</a>
                    </li>

                    <li class="nav-item nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                        <a class="offcanva-link">About Us</a>
                    </li>

                    <li class="nav-item nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                        <a class="offcanva-link" href="">Blog</a>
                    </li>

                    <li class="nav-item nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" >
                        <a class="offcanva-link">Contact Us</a>
                    </li>

                </ul>

              </div>

          </div>
                  
      </div>
       
      <!-- Services -->
      <div class="container bg-white shadow rounded services">

          <div class="row pb-3">

              <div class="col col-12 col-md m-3 mb-0 px-5 px-md-2 servicesList">

                  <div class="servicesList-title">Business Setup</div>
                  <hr>
                  
                  <div class="d-inline-flex servicesList-role d-flex flex-column">
                      <a href="">Business Registration</a>
                      <a href="">Sole Proprietorship</a>
                      <a href="">Partnership Firm</a>
                  </div>
                  
                  <div class="collapse" id="collapseExample1">
                      <div class="servicesList-role d-flex flex-column">
                          <a href="">Pvt Ltd Company</a>
                          <a href="">Public  Limited</a>
                          <a href="">OPC Registration</a>
                          <a href="">LLP Registration</a>
                          <a href="">Startup Registration</a>
                          <a href="">Nidhi Company</a>
                      </div>
                  </div>

                  <div class="servicesList-viewMoreTop">
                      <a class="servicesList-viewMore" onclick="viewToggle(event)" data-bs-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample" role="button">
                          View More +
                      </a>
                  </div>

                  <div class="d-inline-flex servicesList-role d-flex flex-column">
                      <a href="">Business Setup</a>
                      <a href="">Udaya Registration</a>
                      <a href="">GST Registration</a>
                  </div>
                  
                  <div class="collapse" id="collapseExample1.1">
                      <div class="servicesList-role d-flex flex-column">
                          <a href="">Professional Tax</a>
                      </div>
                  </div>

                  <div class="servicesList-viewMoreTop">
                      <a class="servicesList-viewMore" onclick="viewToggle(event)" data-bs-toggle="collapse" href="#collapseExample1.1" aria-expanded="false" aria-controls="collapseExample" role="button">
                          View More +
                      </a>
                  </div>
                      
              </div>

              <div class="col col-12 col-md m-3 mb-0 px-5 px-md-2">

                  <div class="servicesList-title">Compliances</div>
                  <hr>

                  <div class="d-inline-flex servicesList-role d-flex flex-column">
                      <a href="">Secretarial Compliances</a>
                      <a href="">Auditor Appointment</a>
                      <a href="">Director Disqualification</a>
                  </div>

                  <div class="collapse" id="collapseExample2">
                      <div class="servicesList-role d-flex flex-column">
                          <a href="">Annual Return</a>
                          <a href="">LLP Compliance</a>
                          <a href="">Trust Compliance</a>
                          <a href="">15CA 15CB Filing</a>
                          <a href="">Form FC TRS</a>
                          <a href="">LLP Form 11</a>
                          <a href="">LLP Form 4</a>
                          <a href="">LLP Form 8</a>
                          <a href="">LLP Form 3</a>
                          
                      </div>
                  </div>

                  <div class="servicesList-viewMoreTop">
                      <a class="servicesList-viewMore" onclick="viewToggle(event)" data-bs-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample" role="button">
                          View More +
                      </a>
                  </div>
                      
              </div>

              <div class="col col-12 col-md m-3 mb-0 px-5 px-md-2">
                  <div class="servicesList-title">Licenses</div>
                  <hr>

                  <div class="d-inline-flex servicesList-role d-flex flex-column">
                      <a href="">FSSAI</a>
                      <a href="">FSSAI Registration</a>
                      <a href="">FSSAI State</a>
                  </div>

                  <div class="collapse" id="collapseExample3">
                      <div class="servicesList-role d-flex flex-column">
                          <a href="">FSSAI Cental</a>
                          <a href="">FSSAI Renewable</a>
                          <a href="">FSSAI Annual Return</a>
                      </div>
                  </div>

                  <div class="servicesList-viewMoreTop">
                      <a class="servicesList-viewMore" onclick="viewToggle(event)" data-bs-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample" role="button">
                          View More +
                      </a>
                  </div>
                      
                  <div class="servicesList-title">Tax</div>
                  <hr>

                  <div class="d-inline-flex servicesList-role d-flex flex-column">
                      <a href="">TDA</a>
                      <a href="">TDA on Dividend</a>
                      <a href="">TDA on Salary</a>
                  </div>

                  <div class="collapse" id="collapseExample3.1">
                      <div class="servicesList-role d-flex flex-column">
                          <a href="">TDA Return Filling</a>
                      </div>
                  </div>

                  <div class="servicesList-viewMoreTop">
                      <a class="servicesList-viewMore" onclick="viewToggle(event)" data-bs-toggle="collapse" href="#collapseExample3.1" aria-expanded="false" aria-controls="collapseExample" role="button">
                          View More +
                      </a>
                  </div>

              </div>

              <div class="col col-12 col-md m-3 mb-0 px-5 px-md-2">
                  <div class="servicesList-title">Certificates</div>
                  <hr>

                  <div class="d-inline-flex servicesList-role d-flex flex-column">
                      <a href="">Government</a>
                      <a href="">Make In India</a>
                      <a href="">GeM Registration</a>
                  </div>

                  <div class="collapse" id="collapseExample4">
                      <div class="servicesList-role d-flex flex-column">
                          <a href="">Make In Indian Services</a>
                          <a href="">EPR Registration</a>
                      </div>
                  </div>

                  <div class="servicesList-viewMoreTop">
                      <a class="servicesList-viewMore" onclick="viewToggle(event)" data-bs-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample" role="button">
                          View More +
                      </a>
                  </div>
                      
              </div>

          </div>

          <div class="crossIcon" onclick="servicesToggeleOff()" >
              <i class="fa-solid fa-xmark"></i>
          </div>

      </div>

    </nav>

    <!-- blog-login -->
    <div class="container employee-login ">
        <div class="row justify-content-center my-5 mx-2 ">
            
            <div class="col-12 col-md-6 col-lg-5 shadow p-4 rounded my-4 login">

                <div class="login-title">
                    <h2>BLOG - LOGIN</h2>
                </div>

                <form class="d-flex flex-column gap-4" onsubmit="formSubmit(event)">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-white">Email address</label>
                        <input
                            type="email"
                            class="form-control login-input"
                            placeholder="Username"
                            id="exampleInputEmail1"
                            required
                        />
                    </div>
    
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-white">Password</label>
                        <input
                            type="password"
                            class="form-control login-input"
                            placeholder="Password"
                            id="exampleInputPassword1"
                            required
                        />
                    </div>
    
                    <div class="justify-content-center d-flex">
                        <button class="login-btn" type="submit" >
                            LOGIN
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        </button>
                    </div>
                    
                </form>

            </div>

        </div>
        
    </div>

    <!-- Footer -->
    <div class="container-fluid footer">

        <div class="row py-5">
            
            <div class="col-12 col-md-4 px-3">
                <div class="d-flex flex-column align-items-start justify-content-center logo">
                    <img src="./assets/images/vaidam/logo1.png" alt="vaidam logo" width="200">
                    <div class="bar mb-4 ms-5"></div>

                    <p>Support solutions for every business.
                        Strategic Focus, Measurable Results.</p>
                </div>
            </div>

            <div class="col-12 col-md links ">
                <h2 class="mt-4 mt-md-3">LINKS</h2>
                <div class="bar"></div>
                <div class="link">
                    <a href="index.html">Home</a>
                    <a href="">Services</a>
                    <a href="">About Us</a>
                    <a href="">Blog</a>
                    <a href="">Contact Us</a>
                    <a href="employee-login.php">Employee Login</a>

                </div>

            </div>

            <div class="col-12 col-md contact-us ">
                <h2 class="mt-4 mt-md-3">CONTACT US</h2>
                <div class="bar"></div>
                <div>
                    <div class="email"><span><i class="fa-solid fa-envelope"></i></span>   vaidamconsultancy@gmail.com</div>
                    <div class="phone-no"><span><i class="fa-solid fa-phone"></i></span>  +91 9105627344</div>
                </div>
                <!-- <div class="crt-blog-btn shadow">Create New Blog Post</div> -->
            </div>

        </div>

        <div class="row copyright">
            <div>
                © 2025 Copyright: <a href="https://vaidamconsultancy.com">Vaidam Consultancy</a>. All rights reserved.
            </div>
        </div>
        
    </div>

  </div>
</body>
<script>

    // servicesToggele
    document.querySelector(".services").style.display="none";

    // formSubmit
    async function formSubmit(e) {

            e.preventDefault();
            const email = document.getElementById('exampleInputEmail1').value;
            const password = document.getElementById('exampleInputPassword1').value;
        
        try{
            const responce = await fetch("./backend/blog-login.php", 
            {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ email, password })
            });
            
            const data = await responce.json();
            console.log(data);
            

            if (data.success) {
                Swal.fire({
                title: "Login successful!",
                icon: "success",
                showConfirmButton: false,
                timer: 900,
                timerProgressBar: true 
                });
                setTimeout(()=>{
                    window.location.href = 'create-blog.php'; 
                },920);

            } else {
                Swal.fire({
                icon: 'error',
                title: 'Login Failed',
                text:data.message || 'Invalid email or password!',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true 
                });
            }

        }
        catch(e){
            console.log('Error fetching users:', e.message)
        }
        finally{
            document.getElementById('exampleInputEmail1').value="";
            document.getElementById('exampleInputPassword1').value="";
        }
       
    }

</script>
</html>
