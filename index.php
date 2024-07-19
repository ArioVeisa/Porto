<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Landing Page</title>
  </head>

  <body>
    <nav>
      <div class="logo">
        <img src="assets/logo.png" />
        <a href="#">Pages</a>
      </div>
      <div class="nav-links">
        <a href="#">Docs</a>
        <a href="#Project">Projects</a>
        <a href="#">Blog</a>
        <a href="#">Youtube</a>
        <a href="#">About</a>
      </div>
      <button><i class="ri-github-fill"></i> My Projects</button>
      
    </nav>

    <div class="hero">
      <div class="left-section">
        <div class="top">
          <h2>Creative FullStack Web Developer</h2>
          <p>
            Design and code beautifully simple projects without overwhelming
            yourself with complexity. Enjoy your passion for creating with ease
            and love.
          </p>

          <div class="buttons">
            <button class="doc">
              Hire Me Now <i class="ri-arrow-right-line"></i>
            </button>
            <button class="git">
              <i class="ri-github-fill"></i> My Github
            </button>
          </div>
        </div>
        <div class="bottom">
          <p>Other Socials:</p>
          <div class="icons">
            <i class="ri-youtube-line"></i>
            <i class="ri-twitter-x-line"></i>
            <i class="ri-linkedin-box-line"></i>
            <i class="ri-instagram-line"></i>
          </div>
        </div>
      </div>

      <img width="50%" height="70%" src="https://images.pexels.com/photos/4705605/pexels-photo-4705605.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" />
    </div>
    <div style="margin-bottom: -5px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f5f5f5" fill-opacity="1" d="M0,160L18.5,181.3C36.9,203,74,245,111,250.7C147.7,256,185,224,222,176C258.5,128,295,64,332,74.7C369.2,85,406,171,443,176C480,181,517,107,554,96C590.8,85,628,139,665,170.7C701.5,203,738,213,775,224C812.3,235,849,245,886,256C923.1,267,960,277,997,266.7C1033.8,256,1071,224,1108,208C1144.6,192,1182,192,1218,181.3C1255.4,171,1292,149,1329,154.7C1366.2,160,1403,192,1422,208L1440,224L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"></path></svg></div>
    <div class="about">
      <p>About Web Development</p>
      <h2>I create user-friendly, and beautiful websites and applications.</h2>
      <div class="items">
        <div class="item">
          <div class="inner">
            <img src="assets/item-1.jpg" />
            <a href="#">Front-End Development</a>
            <p>
              Crafting visually appealing and responsive interfaces using HTML,
              CSS, and JavaScript frameworks like React and Vue.
            </p>
          </div>
        </div>
        <div class="item">
          <div class="inner">
            <img src="assets/item-2.jpg" />
            <a href="#">Back-End Development</a>
            <p>
              Building robust and scalable server-side applications with
              Node.js, Express, and databases like MongoDB and SQL.
            </p>
          </div>
        </div>
        <div class="item">
          <div class="inner">
            <img src="assets/item-3.jpg" />
            <a href="#">Full-Stack Integration</a>
            <p>
              Seamlessly integrating front-end and back-end technologies to
              deliver comprehensive web solutions.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="projects" id="Project">
      <div class="inner">
        <p class="debug">
          <i class="ri-command-line"></i> Troubleshoot & Debug
        </p>
        <h2>Projects Showcase</h2>
        <p class="info">
          Take a look at some of my notable projects, showcasing my ability to
          design and devlop effective web solutions.
        </p>
        <button>Explore my projects <i class="ri-arrow-right-line"></i></button>

        <div class="items">
          <div class="item">
            <i class="ri-shopping-bag-4-line"></i>
            <a href="https://arioveisa.github.io/Project0123_KedaiKopi/">E-Commerce</a>
            <p>
              Developer full-featured e-commerce platform with secure payments.
            </p>
          </div>
          <div class="item">
            <i class="ri-id-card-line"></i>
            <a href="https://arioveisa.github.io/Portofolio/">Portfolio Website</a>
            <p>
              Designed and built a personal portfolio website to showcase my
              projects and skills.
            </p>
          </div>
          <div class="item">
            <i class="ri-apps-line"></i>
            <a href="#">Social Media App</a>
            <p>
              Created a social media application with real-time updates and user
              interactions.
            </p>
          </div>
          <div class="item">
            <i class="ri-news-line"></i>
            <a href="#">Blog Platform</a>
            <p>
              Built a dynamic blog platform with content management features.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="contact">
      <h2>Interested in Working Together?</h2>
      <div class="items">
        <div class="item">
          <a href="#">Schedule a call</a>
          <p>Let's discuss your project ideas and how I can help you.</p>
          <button id="scheduleCallBtn">Schedule a Call</button>
        </div>
        <div class="item">
          <a href="#">Explore My Work</a>
          <p>View my portfolio to see the kind of work I do for you.</p>
          <button>View My Work</button>
        </div>
      </div>
    </div>

    <footer>
      <a href="#">Terms of Service</a>
      <a href="#">Privacy Policy</a>
      <p>© 2024 arioveisa</p>
    </footer>
    <script src="main.js"></script>
  </body>
</html>
