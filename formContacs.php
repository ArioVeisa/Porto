<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body style="background: linear-gradient(50deg, rgba(31,31,31,1) 28%, rgba(255,255,255,1) 100%); overflow: hidden;">

    <div class="container">
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Welcome to our contact</h3>
                <p class="text">
                    Create your message to me, I will reply as soon as possible
                </p>

                <div class="info">
                    <div class="information">
                        <img src="assets/location.png" class="icon" alt="">
                        <p>Jl. Jendral Sudirman</p>
                    </div>
                    <div class="information">
                        <img src="assets/email.png" class="icon" alt="">
                        <p>admin@contact.com</p>
                    </div>
                    <div class="information">
                        <img src="assets/phone.png" class="icon" alt="">
                        <p>314355</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form id="contactForm" action="create.php" method="post" autocomplete="off">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input" required/>
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" required/>
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input"/>
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input" required></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <button type="button" class="btn btn-light" id="liveToastBtn">Send</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Toast HTML -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    Apakah data sudah benar?
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.getElementById('liveToastBtn').addEventListener('click', function() {
            var toastEl = document.getElementById('liveToast');
            var toast = new bootstrap.Toast(toastEl);

            toast.show();

            // Handle form submission after toast
            toastEl.addEventListener('hidden.bs.toast', function () {
                document.getElementById('contactForm').submit();
            });
        });
    </script>
    <script src="form.js"></script>
  </body>
</html>
