<?php
session_start();
if (!isset($_SESSION['emp-user'])) {
    header("Location: employee-login.html");
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
  <link rel="stylesheet" href="index-style.css?v=2">
  <script src="index-script.js"></script>
  
  <style>
    /* templates-list */
    .template-list{
        background-color:  #829271;
        /* height: 87vh; */
        border-radius: 0px 17% 0px 0px;
    }
    .template-list .template-links{
        list-style: none;
        margin-top: 10px;
    }
    .template-list h2{
        margin-top: 25px;
        font-weight: bold;
        margin-left: 10px;
        color: white;
    }
    .template-list .template-links div{
        font-size: 20px;
        background-color: #6d7a5f;
        margin: 10px 0px;
        padding: 10px;
        width: 90%;
        color: white;
        border-radius: 1px 10px 1px 10px;
        cursor: pointer;
    }

    .template-list .template-links div:nth-child(1){
        margin-top: 30px;
    }
    .mobile-list h2{
        text-align: center;
        font-size: 30px;
        margin-top: 20px;
        font-weight: bold;
    }
    .mobile-list .template-links{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }
    .mobile-list .template-links div{
        padding: 10px;
        margin: 5px;
        border-radius: 5px 5px 5px 10px;
        background-color: #6d7a5f;
        color: white;
    }
    .template-boxs h3{
        margin-top: 20px;
        font-weight: bold;
    }
    .template-box{
        margin: 20px 0px;
        padding: 10px;
    }
   .template-box h4{
    font-weight: bold;
   }
   .template-box-copytext{
    border:1px solid #888; 
    background-color: #f3f1f1;
    padding:10px; 
    border-radius:8px; 
    margin-top: 10px;
    border-radius: 1px 15px 15px 15px;

   }
   .copy-btn{
    cursor: pointer;
    padding: 5px 10px ;
    background-color:#b1c0a1;
    border: 1px solid #555852;
    border-radius: 1px 5px 5px 5px;
    margin-top: 20px;
    margin-bottom: 10px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 10px;
    transition: all .3s linear;
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

    <!-- Templates -->
    <div class="container-fluid ">
      <div class="row">

        <div class="col-12 col-md-3 template-list shadow d-none d-md-block">
            <h2>Important Links</h2>

            <div class="template-links">
                <div>
                    <a>Stamp Duty Calculator</a>
                </div>
                <div>
                    <a>Payment Sheet</a>
                </div>
                <div>
                    <a>GST Message</a>
                </div>
                <div>
                    <a>Post Incorporation</a>
                </div>
                <div>
                    <a>Training Video</a>
                </div>
            </div>
            

        </div>

        <div class="col-12 mb-2 d-flex flex-column d-md-none mobile-list">
            <h2>Important Links</h2>

            <div class="template-links">
                <div>
                    <a>Stamp Duty Calculator</a>
                </div>
                <div>
                    <a>Payment Sheet</a>
                </div>
                <div>
                    <a>GST Message</a>
                </div>
                <div>
                    <a>Post Incorporation</a>
                </div>
                <div>
                    <a>Training Video</a>
                </div>
            </div>
            

        </div>

        <div class="col-12 col-md template-boxs">

            <h3>GST Registration Msg</h3>

             <div class="template-box">
                <h4>Intro Arun</h4>

                <div class="template-box-copytext shadow">
                    <p>
Greetings of the Day!<br><br>

I’m <strong>*Arun*</strong> and I’m delighted to assist you with the GST Registration.I’ll be a single point of contact and will ensure the seamless process.<br><br>

Looking forward to working with you. <br><br>

Regards, <br>
Arun <br>
Team Vaidam <br> 
Your Business, Our Focus <br>
                    </p>
                    <button class="copy-btn shadow" onclick="copyToClipboard(event)">Copy Text</button>
                </div>
             </div>

             <div class="template-box">
                <h4>Intro Mukul</h4>

                <div class="template-box-copytext shadow">
                    <p >
Greetings of the Day!<br><br>

I’m <strong>*Mukul*</strong> and I’m delighted to assist you with the GST Registration.I’ll be a single point of contact and will ensure the seamless process.<br><br>

Looking forward to working with you. <br><br>

Ruchika, <br>
Mukul <br>
Team Vaidam <br> 
Your Business, Our Focus <br>
                    </p>
                    <button class="copy-btn shadow" onclick="copyToClipboard(event)">Copy Text</button>
                </div>
             </div>

             <div class="template-box">
                <h4>Docs-Proprietorship</h4>

                <div class="template-box-copytext shadow">
                    <p>
Greetings of the Day!<br><br>

It is our endeavour to complete GST Registration on time, we request you to share all information mentioned in the checklist latest by tomorrow. We will file an application in 2 working days after documents are completely received . <br><br>

1) Pan Card of Proprietor <br>
2) Aadhar card of Proprietor<br>
3) <strong>*Email ID and Mobile Number*</strong> of the Proprietor<br>
4) <strong>*Passport Size Photograph*</strong> of the Proprietor<br>
5) Rented Property - Commercial Stamped and Notarised Rent Agreement With 2 Witnesses details (If Business Property is Rented and Address Should Be same on Electricity Bill and Rent Agreement)<br>
6) Latest Electricity Bill of the Property(Not older than one month)<br>
7) Property Tax Receipt/Sale Deed having property address<br>
8) Pan and Aadhaar of Property Owner<br>
9) One Id Proof ( Aadhar/PAN)of Both Witnesses.<br>
10) NOC/ Consent letter signed from owner ( Format of NOC we will Draft and share )<br>
11) <strong>*Trade Name and Details of Goods and Services ( 2-3 lines)*</strong><br>
12) Geotag Photo of Business premises (in case of clarification)<br><br>

With Regard, <br>
Team Vaidam <br> 
Your Business, Our Focus <br>
                    </p>
                    <button class="copy-btn shadow" onclick="copyToClipboard(event)">Copy Text</button>
                </div>
             </div>

             <div class="template-box">
                <h4>Docs-Partnership</h4>

                <div class="template-box-copytext shadow">
                    <p>
Greetings of the Day!<br><br>

It is our endeavour to complete GST Registration on time, we request you to share all information mentioned in the checklist latest by tomorrow. We will file an application in 2 working days after documents are completely received<br><br>

1. Pan Card of all Partners<br>
2. Aadhar card of all Partners<br>
3. <strong>*Email ID and Mobile Number*</strong> of all Partners<br>
4. <strong>*Passport Size Photograph*</strong> of all Partners<br>
5. Partnership deed Stamped and Notarised<br>
6. PAN Card of Partnership Firm<br>
7. Name of Authorised Partner for GST<br>
8. Rented Property - Commercial Stamped and Notarised Rent Agreement With 2 Witnesses details (If Business Property is Rented and Address Should Be same on Electricity Bill and Rent Agreement)<br>
9. Latest Electricity Bill of the Property(Not older than one month)<br>
10. Property Tax Receipt/Sale Deed having property address<br>
11. Pan and Aadhaar of the Property Owner<br>
12. One Id Proof ( Aadhar/PAN)of Both Witnesses.<br>
13. NOC signed from owner ( Format of NOC we will Draft and share )<br>
14. <strong>*Trade Name and Details of Goods and Services ( 2-3 lines)*</strong><br>
15. Geotag Photo of Business premises (in case of clarification)<br><br>

With Regard, <br>
Team Vaidam <br> 
Your Business, Our Focus <br>
                    </p>
                    <button class="copy-btn shadow" onclick="copyToClipboard(event)">Copy Text</button>
                </div>
             </div>

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
                    <a href="./backend/logout.php">Logout</a>

                </div>

            </div>

            <div class="col-12 col-md contact-us ">
                <h2 class="mt-4 mt-md-3">CONTACT US</h2>
                <div class="bar"></div>
                <div>
                    <div class="email"><span><i class="fa-solid fa-envelope"></i></span>   vaidamconsultancy@gmail.com</div>
                    <div class="phone-no"><span><i class="fa-solid fa-phone"></i></span>  +91 9105627344</div>
                </div>
                <a class="crt-blog-btn shadow" href="blog-login.php" >Create New Blog Post</a>
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

//copyToClipbord
function copyToClipboard(event) {
    const btn = event.target;
    const div = btn.closest("div");
    const p = div?.querySelector("p");
    
    navigator.clipboard.writeText(p.textContent).then(()=>{
        Swal.fire({
        title: "Success!",
        text: "Template is Copied!",
        icon: "success",
        showConfirmButton: false,
        timer: 1000,
        timerProgressBar: true 
        });
    })
}

</script>

</html>
