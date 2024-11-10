<?php include "header.php"; ?>

<!-- ======================== Breadcrumb Two Section Start ===================== -->
<section class="banner-three">
  <div class="container container-full">
    <div class="banner-three__wrapper section-bg position-relative z-index-1">
      <img src="assets/images/gradients/banner-gradient-two.png" alt="" class="bg--gradient" />
      <img src="assets/images/shapes/line-curve1.png" alt="" class="line-curve one" />
      <img src="assets/images/shapes/line-curve2.png" alt="" class="line-curve two" />
      <img src="assets/images/shapes/element2.png" alt="" class="element two" />

      <div class="banner-three__inner">
        <div class="banner-three-content">
          <!-- breadcrumb -->
          <div class="breadcrumb">
            <ul>
              <li class="home_redirect">
                <a href="index.html"><img src="assets/images/icons/home.png" alt="" /></a>
              </li>
              <span class="angle"><img src="assets/images/icons/right-arrow.png" alt="" /></span>
              <li class="current_page"><span>Contact Us</span></li>
            </ul>
          </div>
          <!-- breadcrumb -->
          <h1 class="banner-three-content__title my-3 text-capitalize">
            Contact Our Freelancing Agency Today!
          </h1>
          <p class="banner-three-content__desc font-18">
            We're here to help—reach out for any inquiries or project
            discussions with our expert team.
          </p>

          <div class="statistics-three-wrapper flx-align mt-64 position-relative d-inline-flex">
            <div class="statistics-three">
              <h4 class="statistics-three__amount text-heading mb-0">
                2900+
              </h4>
              <span class="statistics-three__text font-18 text-heading fw-500">Project Completed</span>
            </div>
            <div class="statistics-three">
              <h4 class="statistics-three__amount text-heading mb-0">
                1680+
              </h4>
              <span class="statistics-three__text font-18 text-heading fw-500">Customer Reviewed</span>
            </div>
            <img src="assets/images/icons/curve-arrow.png" alt="" class="curve-arrow" />
          </div>
        </div>

        <!-- Banner-three Right Start -->
        <div class="banner-three__right">
          <div class="banner-three-thumb position-relative">
            <img src="assets/images/thumbs/banner-thumb.png" alt="" />

            <div class="statistics-three-box bg-white text-center">
              <h5 class="statistics-three-box__amount text-heading">
                19k
              </h5>
              <span class="statistics-three-box__text text-heading font-14">Projects</span>
            </div>

            <!-- Happy Client Start -->
            <div class="happy-client-three flx-align">
              <div class="happy-client-three__thumbs">
                <img src="assets/images/thumbs/happy-client1.png" alt="Client" class="happy-client-three__img" />
                <img src="assets/images/thumbs/happy-client2.png" alt="Client" class="happy-client-three__img" />
                <img src="assets/images/thumbs/happy-client3.png" alt="Client" class="happy-client-three__img" />
                <img src="assets/images/thumbs/happy-client4.png" alt="Client" class="happy-client-three__img" />
              </div>
              <span class="happy-client-three__text text-heading fw-500 text-center">2k Happy Clients</span>
            </div>
            <!-- Happy Client End -->
          </div>
        </div>
        <!-- Banner-three Right End -->
      </div>
    </div>
  </div>
</section>
<!-- ======================== Breadcrumb Two Section End ===================== -->

<!-- =========================== Contact Section Start ========================== -->
<section class="contact padding-t-120 padding-b-60 section-bg position-relative z-index-1 overflow-hidden">
  <img src="assets/images/gradients/banner-two-gradient.png" alt="" class="bg--gradient" />
  <img src="assets/images/shapes/pattern-five.png" class="position-absolute end-0 top-0 z-index--1" alt="" />

  <div class="container container-two">
    <div class="row gy-4">
      <div class="col-lg-5">
        <div class="contact-info">
          <h3 class="contact-info__title">Get in touch with us today</h3>
          <p class="contact-info__desc">
            Let's collaborate! Reach out to our freelance agency and
            discover how we can help elevate your business.
          </p>

          <div class="contact-info__item-wrapper flx-between gap-4">
            <div class="contact-info__item">
              <span class="contact-info__text text-capitalize d-block mb-1">Give Us A Call</span>
              <a href="tel:8159830701" onclick="window.open('tel:8159830701');"
                class="contact-info__link font-24 fw-500 text-heading hover-text-main">+91 815 983 0701</a>
            </div>
            <div class="contact-info__item">
              <span class="contact-info__text text-capitalize d-block mb-1">Give Us An Email</span>
              <a href="mailto:webdev@creative-flow.in"
                class="contact-info__link font-24 fw-500 text-heading hover-text-main">webdev@creative-flow.in</a>
            </div>
          </div>

          <div class="mt-24">
            <ul class="social-icon-list">
              <li class="social-icon-list__item">
                <a href="https://www.facebook.com" class="social-icon-list__link text-heading flx-center"><i
                    class="fab fa-facebook-f"></i></a>
              </li>
              <li class="social-icon-list__item">
                <a href="https://www.twitter.com" class="social-icon-list__link text-heading flx-center">
                  <i class="fab fa-twitter"></i></a>
              </li>
              <li class="social-icon-list__item">
                <a href="https://www.linkedin.com" class="social-icon-list__link text-heading flx-center">
                  <i class="fab fa-linkedin-in"></i></a>
              </li>
              <li class="social-icon-list__item">
                <a href="https://www.pinterest.com" class="social-icon-list__link text-heading flx-center">
                  <i class="fab fa-github"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-7 ps-lg-5">
        <div class="card common-card p-sm-4">
          <div class="card-body">
            <form action="#" autocomplete="off" onsubmit="clientToUsemail(); reset(); return false;">
              <div class="row gy-4">
                <div class="col-sm-12">
                  <label for="name" class="form-label mb-2 font-18 font-heading fw-600">Full Name</label>
                  <input type="text" class="common-input common-input--grayBg border" id="name"
                    placeholder="Your name here" />
                </div>
                <div class="row mt-4">
                  <div class="col-sm-6">
                    <label for="email" class="form-label mb-2 font-18 font-heading fw-600">Your Mail</label>
                    <input type="email" class="common-input common-input--grayBg border" id="email"
                      placeholder="Your email here " />
                  </div>
                  <div class="col-sm-6">
                    <label for="phone" class="form-label mb-2 font-18 font-heading fw-600">Your phone</label>
                    <input type="text" class="common-input common-input--grayBg border" id="phone"
                      placeholder="Your phone number" />
                  </div>
                </div>
                <div class="col-sm-12">
                  <label for="message" class="form-label mb-2 font-18 font-heading fw-600">Your Message</label>
                  <textarea class="common-input common-input--grayBg border" id="message"
                    placeholder="Write Your Message Here"></textarea>
                </div>
                <div class="col-sm-12">
                  <button class="btn btn-main btn-lg pill w-100">
                    Submit Now
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- =========================== Contact Section End ========================== -->

<!-- ===================== Newsletter Two Start ============================ -->

<section class="newsletter-two padding-t-60 padding-b-120 section-bg position-relative z-index-1 overflow-hidden">
  <img src="assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient" />
  <img src="assets/images/shapes/element-moon3.png" alt="" class="element one" />
  <img src="assets/images/shapes/element-moon1.png" alt="" class="element three" />

  <div class="container container-two">
    <div class="flx-between gap-3">
      <div class="newsletter-two-content">
        <h3 class="newsletter-two-content__title mb-3">
          Connect with Us Directly on WhatsApp
        </h3>
        <p class="newsletter-two-content__desc text-heading font-18">
          Have questions or need quick assistance? Message us directly on
          WhatsApp for fast, convenient communication and real-time
          support from our team.
        </p>
      </div>
      <a href="all-product.html" class="btn btn-main btn-lg pill">Chat with us</a>
    </div>
  </div>
</section>
<!-- ===================== Newsletter Two End ============================ -->
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
  function clientToUsemail() {
    Email.send({
      Host: "smtp.gmail.com",
      Username: "santanu2002giri@gmail.com",
      Password: "Santanu@2002@",
      To: 'webdev@creative-flow.in',
      From: document.getElementById("email").value,
      Subject: "client's message from creativeFlow",
      Body: "Name: " + document.getElementById("name").value +
        "<br> Email: " + document.getElementById("email").value +
        "<br> Phone number: " + document.getElementById("phone").value +
        "<br> Message: " + document.getElementById("message").value
    }).then(
      message => alert("Message sent successfully. Thank You")
    );
  }
</script>
<?php include "footer.php"; ?>