<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mohamed Adel - Portfolio</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
    <!-- إضافة FontAwesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>

  <body>
    <div class="sidebar">
      <div>
        <h2><span>Mohamed</span> Adel</h2>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="social">
        <a href="https://www.facebook.com/profile.php?id=100001140354998" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://x.com/Mohamed61551981" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.tiktok.com/@medomohamed063?lang=en" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.instagram.com/hamada_ro/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/feed/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>

    <div class="main-content">
      <!-- Home Section -->
      <section id="home">
        <div class="home-text">
          <h3>Hi There...</h3>
          <h1>I Am <span>Mohamed Adel</span></h1>
          <p>I Am Front-End Developer</p>
          <a href="#about" class="btn">About Me</a>
        </div>
        <div class="home-img">
          <img src="images/download.jpeg" alt="Download Project" />
        </div>
      </section>

      <!-- About Section -->
      <section id="about">
        <h2 class="section-title">About <span>Me</span></h2>
        <div class="about-content">
          <img src="images/download.jpeg" alt="Download Project" style="max-width: 300px; border-radius: 10px;" />
          <div class="about-text">
            <p>
              My Name is Mohamed Adel 
I am a motivated and driven individual with a Bachelor's degree in Information Systems from 6 October University. At 22, I am passionate about making a positive impact in my community and contributing to meaningful initiatives through volunteer work and interested in working in Frontend Web Developer Enthusiast.
            </p>
            <p>
              My active involvement in various student activities has allowed me to develop strong teamwork and leadership skills, which I bring to every endeavor. With a growing interest and enthusiasm for frontend web development, I aim to merge creativity and technical expertise to deliver user-friendly and visually appealing web solutions.
            </p>

            <!-- المعلومات الشخصية -->
            <div class="personal-info" style="display: flex; flex-wrap: wrap; gap: 20px;">
              <ul style="list-style: none; padding: 0;">
                <li><strong>Gender:</strong> Male</li>
                <li><strong>Freelance:</strong> Available</li>
                <li><strong>Phone:</strong> +20 111 142 8907</li>
                <li><strong>Email:</strong> mohamed.adel3940@gmail.com</li>
              </ul>
              <ul style="list-style: none; padding: 0;">
                <li><strong>Language:</strong> Arabic, English</li>
                <li><strong>Work:</strong>Fresh Graduate</li>
                <li><strong>City:</strong> Cairo - Rod El Farag - Masaken Geziret Badran</li>
              </ul>
            </div>

            <!-- الأزرار -->
            <div class="about-buttons" style="margin-top: 20px;">
              <a href="pdf/Mohamed Adel CV.pdf" download class="btn">Download CV</a>
              <a href="https://www.linkedin.com/in/mohamed-adel-0a7295338/" target="_blank" class="btn">Hire Me</a>
              <a href="pdf/PDF_202502274209.pdf" download class="btn">Certificate</a>
            </div>
          </div>
        </div>

        <!-- Skills -->
        <div class="skills">
          <h2><span>My</span> Skills</h2>
          <div class="skill"><span>HTML</span><div class="bar"><div style="width:95%"></div></div></div>
          <div class="skill"><span>CSS</span><div class="bar"><div style="width:90%"></div></div></div>
          <div class="skill"><span>JavaScript</span><div class="bar"><div style="width:85%"></div></div></div>
          <div class="skill"><span>jQuery</span><div class="bar"><div style="width:80%"></div></div></div>
          <div class="skill"><span>Bootstrap</span><div class="bar"><div style="width:90%"></div></div></div>
          <div class="skill"><span>React</span><div class="bar"><div style="width:75%"></div></div></div>
          <div class="skill"><span>MySQL</span><div class="bar"><div style="width:70%"></div></div></div>
        </div>
      </section>

      <!-- Portfolio Section -->
      <section id="portfolio">
        <h2 class="section-title">My <span>Projects</span></h2>
        <div class="portfolio-container">
          <div class="project">
            <h3>PEPSI Landing Page</h3>
            <img src="images/as.png" alt="PEPSI Project" class="project-img" />
            <p><a href="https://github.com/Mohamed244532/PEPSI-Landing-Page" target="_blank">View on GitHub</a></p>
          </div>
          <div class="project">
            <h3>Movie Project</h3>
            <img src="images/unitled.png" alt="Untitled Image" />
            <p><a href="https://github.com/Mohamed244532/Movie-Project" target="_blank">View on GitHub</a></p>
          </div>
          <div class="project">
            <h3>Adidas Landing Page</h3>
            <img src="images/ae.png" alt="Adidas Project" class="project-img" />
            <p><a href="https://github.com/Mohamed244532/adidas-landing-page" target="_blank">View on GitHub</a></p>
          </div>
          <div class="project">
            <h3>TO-DO-List</h3>
            <img src="images/to-do-list.png" alt="To-Do List" />
            <p><a href="https://github.com/Mohamed244532/TO-DO-List" target="_blank">View on GitHub</a></p>
          </div>
          <div class="project">
            <h3>LOG-IN-Website</h3>
            <img src="images/login.png" alt="Login Project" />
            <p><a href="https://github.com/Mohamed244532/LOG-IN-Website" target="_blank">View on GitHub</a></p>
          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section id="contact">
      <h2 class="section-title">Contact <span>Me</span></h2>
      <form action="send_email.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="email" name="email" placeholder="Your Email" required />
        <input type="tel" name="phone" placeholder="Your Phone" required />
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
      </form>

      <div class="contact-info">
        <p><strong>Email:</strong> mohamed.adel3940@gmail.com</p>
        <p><strong>Phone:</strong> +20 111 142 8907</p>
        <p><strong>Address:</strong> Cairo - Rod El Farag - Masaken Geziret Badran</p>
      </div>
    </section>
  </body>
</html>
