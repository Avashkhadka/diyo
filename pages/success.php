<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diyo Saving & Credit Co-Operative limited</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="web-container">
      <div class="navbar-res">
        <ul>
          <li class="btn cross">
            <i class="fa-solid fa-xmark" id="cross"></i>
          </li>
          <a href="../index.html"><li class="btn">HOME</li></a>
          <a id="aboutus-res"
            ><li class="btn">ABOUT US <i class="fa-solid fa-angle-down"></i></li
          ></a>

          <a href="bod.html"
            ><li class="btn js-aboutus-res">BOARD OF DIRECTORS</li></a
          >

          <a href="contactus.php"><li class="btn">CONTACT US</li></a>
          <a href="calinder.html"> <li class="btn">CALINDER(2081)</li></a>
        </ul>
      </div>
      <div class="header">
        <div class="box"></div>
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box4"></div>
        <div class="box5"></div>
        <div class="head-info">
          <div class="logo">
            <img src="../assects/images/logo4.png" alt="" srcset="" />
          </div>
          <div class="other-info">
            <div class="organizationName">
              <div class="head">दियो</div>
              <div class="otherLang">
                <div class="name-nepali">
                  सेभिङ्ग एण्ड क्रेडिट कोअपरेटिभ लि.
                </div>
                <div class="nameEnglish">
                  DIYO SAVING & CREDIT CO-OPETATIVE LTD.
                </div>
                <div class="organAddress">
                  Dashinkali-1, Khahare, Kathmandu, Tel:01-5124333,
                  Email:diyosaving@gmail.com
                </div>
              </div>
            </div>
          </div>
          <div class="socialmedia-handle">
            <div class="handleLinks">
              <a
                target="_blank"
                href="https://www.facebook.com/profile.php?id=100009771935950"
                ><i class="fa-brands fa-facebook-f"></i
              ></a>
            </div>
            <div class="handleLinks">
              <a
                target="_blank"
                href="https://www.facebook.com/profile.php?id=100009771935950"
                ><i class="fa-brands fa-twitter"></i
              ></a>
            </div>
            <div class="handleLinks">
              <a
                target="_blank"
                href="https://www.facebook.com/profile.php?id=100009771935950"
                ><i class="fa-brands fa-instagram"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="navbar">
          <ul class="ul">
            <li class="btn li"><a href="../index.html">HOME</a></li>
            <li class="hoverbtn li">
              <a href="" class="dropdown green"
                >ABOUT US <i class="fa-solid fa-angle-down"></i
              ></a>
              <ul class="js-aboutus" style="position: absolute; width: 16rem">
                <li>
                  <a href="bod.html" class="green">BOARD OF DIRECTORS</a>
                </li>
                <li>
                  <a href="aboutus.html" class="green">ABOUT US</a>
                </li>
              </ul>
            </li>
            <li class="btn activepage li">
              <a href="contactus.php">CONTACT US</a>
            </li>
            <li class="btn li">
              <a href="calinder.html">CALINDER(2081)</a>
            </li>
            <!-- <li class="btn"><a href="pages/bod.html">BOARD OF DIRECTORS</a></li> -->
          </ul>
        </div>
        <div class="marquee">
          <marquee behavior="" direction="">This is message</marquee>
          <div class="ham">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>

        <div class="pageloc">
          <div class="pagloc-bg">
            <div class="pagloc-left">Contact Us</div>
            <div class="pagloc-right">Home / contactus</div>
          </div>
        </div>
      </nav>
      <main>
        <div class="contact-main">
          <div class="datacontainer">
            <div class="contact-header">
              <h1 class="contact-head">Contact Us</h1>
              <div class="contactp">
                <p>
                  Do not hesitate to reach out. Just fill in the contact form
                  here
                </p>
                <p>and we’ll be sure to reply as fast as possible.</p>
              </div>
            </div>
            <div class="message-box">
              <div class="address-msg">
                <div class="inside-address-msg">
                  <div class="location-pin">
                    <div class="icon-ico">
                      <i class="fa-solid fa-location-dot"> </i>
                    </div>
                    <div class="ico-datd">Chalnakhel,Kathmandu</div>
                  </div>
                  <div class="location-pin">
                    <div class="icon-ico">
                      <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="ico-datd">01-5124333</div>
                  </div>
                  <div class="location-pin">
                    <div class="icon-ico">
                      <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="ico-datd">diyosaving@gmail.com</div>
                  </div>
                </div>
              </div>

              <div class="inquery-msg">
                <div
                id="successmsg"
                  style="
                    width: 100%;
                    font-size: 2rem;
                    text-align: center;
                    color: green;
                    padding: 1rem;
                  "
                >
                
                </div>
                <div class="backbtn">
                  <div class="btn-btn">
                  <a href="contactus.php">Go back to Contact us :</a>
                </div>

                  </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <?php
ob_start();
include "../php/connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['msg'];
    if (empty($fname) || empty($lname) || empty($email) || empty($subject) || empty($message)) {
      echo "All fields are required.";
      return;
    }
else{

            $sqlreq='SELECT * FROM webtable';
            $result=mysqli_query($conn,$sqlreq);
            while($res=mysqli_fetch_assoc($result))
            {
                echo"<script>console.log('".$res['webEmail']."')</script>";
              if($email==$res['webEmail'])
                {
                echo "<script>let successmsg=document.querySelector('#successmsg');
                successmsg.innerText='You cant send message again until previous msg is readen by admin.';
                successmsg.style.backgroundColor='#cd5c5c63';
                successmsg.style.color='#ff4747';</script>";
                exit();
            
                }
            }

      
        $sql = "INSERT INTO webtable (webfName, weblName, webEmail, webSubject, webMessage) VALUES ('$fname', '$lname', '$email', '$subject', '$message')";
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            echo "Failed to insert data: " . mysqli_connect_error();
        } else {
          echo "<script>let successmsg=document.querySelector('#successmsg');
          successmsg.innerText='msg send successifully.';
          successmsg.style.backgroundColor='rgb(154 255 0 / 37%)';
          successmsg.style.color='rgb(56 93 0)';</script>";
            exit();
        }
    }   
    
}

ob_end_flush();
?>



      <footer>
        <div class="footer">
          <div class="footer-links">
            <div class="short-info">
              <div class="foot-logo">
                <div class="logocard">
                  <img src="../assects/images/logo4.png" alt="" srcset="" />
                  <h2>Diyo saving and credit co-operative ltd.</h2>
                </div>
                <br />
                <br />
                <div class="info-organ">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Possimus iste rem cupiditate ipsa similique laudantium! Veniam
                  sint perspiciatis omnis consequatur?
                </div>
                <div class="sociallink">
                  <a
                    target="_blank"
                    href="https://www.facebook.com/profile.php?id=100009771935950"
                    ><i class="fa-brands fa-facebook-f"></i
                  ></a>
                  <a
                    target="_blank"
                    href="https://www.facebook.com/profile.php?id=100009771935950"
                    ><i class="fa-brands fa-twitter"></i
                  ></a>
                  <a
                    target="_blank"
                    href="https://www.facebook.com/profile.php?id=100009771935950"
                    ><i class="fa-brands fa-instagram"></i
                  ></a>
                </div>
              </div>

              <br />
              <br />
            </div>
            <div class="footer70">
              <div class="Quick-links">
                <div class="address">
                  <div class="addressHead">Quick links</div>
                  <div class="footer-usefullink">
                    <a href="" class="green">Feedback</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="" class="green">FAQs</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="" class="green">Downloads</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="" class="green">Contact Us</a>
                  </div>
                </div>
              </div>
              <br />
              <br />
              <div class="Quick-links">
                <div class="address">
                  <div class="addressHead">Usefull Links</div>
                  <div class="footer-usefullink">
                    <a href="" class="green">Feedback</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="" class="green">FAQs</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="" class="green">Downloads</a>
                  </div>
                  <div class="footer-usefullink">
                    <a href="" class="green">Contact Us</a>
                  </div>
                </div>
              </div>
              <br />
              <br />

              <div class="links-address">
                <div class="address">
                  <div class="addressHead">Address</div>
                  <div class="address-loc">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>
                      diyo saving & credit co-opetative ltd.br dashinkali-1,
                      khahare, kathmandu
                    </p>
                  </div>
                </div>
                <div class="contactInfo">
                  <div class="contactHead">Contact Information</div>
                  <div class="contactbtn">
                    <div class="phone">
                      <i class="fa-solid fa-phone"></i>
                      <a href="tel:+977-01-5124333" class="green">01-5124333</a>
                    </div>
                    <div class="mail">
                      <i class="fa-solid fa-envelope"></i>
                      <a href="mailto:diyosaving@gmail.com" class="green"
                        >diyosaving@gmail.com</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright-container">
            <div class="copyright">© Copyright 2024 All Rights Reserved.</div>
            <div class="design">
              Developed by

              <a href="https://www.instagram.com/aavash.khadka_/"
                >Avash Khadka</a
              >
              <br />
              <p>
                (Design reference taken from
                <a href="https://ncfnepal.com.np">: nfcnepal </a> &
                <a href="https://hamronepalcoop.com.np"> hamronepalcoop )</a>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="../js/app.js"></script>
  </body>
</html>
