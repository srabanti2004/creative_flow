@extends('layout.app')
@section('title', 'CreativeFlow-Freelanceer')
@section('content')
    <!--========================== Banner Section Start ==========================-->
    <section class="hero section-bg z-index-1">
        <img
          src="{{ asset('assets/images/gradients/banner-gradient.png') }}"
          alt=""
          class="bg--gradient white-version"
        />

        <img
          src="{{ asset('assets/images/shapes/element-moon1.png') }}"
          alt=""
          class="element one"
        />
        <img
          src="{{ asset('assets/images/shapes/element-moon2.png') }}"
          alt=""
          class="element two"
        />

        <div class="container container-two">
          <div class="row align-items-center gy-sm-5 gy-4">
            <div class="col-lg-6">
              <div class="hero-inner position-relative pe-lg-5">
                <div>
                  <span
                    class="banner-three-content__subtitle text-main fw-700 font-heading font-20"
                    >Welcome to Our Agency</span
                  >
                  <h1 class="hero-inner__title">
                    Your Hub for Expert Freelance Services
                  </h1>
                  <p class="hero-inner__desc font-18">
                    Discover a curated network of skilled freelancers ready to
                    provide customized solutions for your projects. From design
                    to development, we connect you with the right experts to
                    help your business thrive.
                  </p>

                  <div class="position-relative">
                    <div class="get_started_btn">
                      <button
                        onclick="window.location.href='login.html'"
                        class="btn-main btn pill"
                      >
                        Get started
                        <span
                          ><img
                            src="{{ asset('assets/images/icons/right-arrow.svg')}}"
                            alt=""
                        /></span>
                      </button>
                    </div>
                  </div>
                  <!-- Tech List Start -->
                  <div class="product-category-list">
                    <a
                      href="all-product.html"
                      class="product-category-list__item"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      data-bs-title="WordPress"
                    >
                      <img
                        src="{{ asset('assets/images/thumbs/tech-icon1.png') }}"
                        alt=""
                        class="white-version"
                      />
                      <img
                        src="{{ asset('assets/images/thumbs/tech-icon-white1.png') }}"
                        alt=""
                        class="dark-version"
                      />
                    </a>
                    <a
                      href="all-product.html"
                      class="product-category-list__item"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      data-bs-title="Laravel"
                    >
                      <img src="{{ asset('assets/images/thumbs/tech-icon2.png') }}" alt="" />
                    </a>
                    <a
                      href="all-product.html"
                      class="product-category-list__item"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      data-bs-title="PHP"
                    >
                      <img
                        src="{{ asset('assets/images/thumbs/tech-icon3.png') }}"
                        alt=""
                        class="white-version"
                      />
                      <img
                        src="{{ asset('assets/images/thumbs/tech-icon-white3.png') }}"
                        alt=""
                        class="dark-version"
                      />
                    </a>
                    <a
                      href="all-product.html"
                      class="product-category-list__item"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      data-bs-title="HTML"
                    >
                      <img src="{{ asset('assets/images/thumbs/tech-icon4.png') }}" alt="" />
                    </a>
                    <a
                      href="all-product.html"
                      class="product-category-list__item"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      data-bs-title="Figma"
                    >
                      <img src="{{ asset('assets/images/thumbs/tech-icon6.png') }}" alt="" />
                    </a>
                    <a
                      href="all-product.html"
                      class="product-category-list__item"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      data-bs-title="Bootstrap"
                    >
                      <img src="{{ asset('assets/images/thumbs/tech-icon7.png') }}" alt="" />
                    </a>
                    <a
                      href="all-product.html"
                      class="product-category-list__item"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      data-bs-title="Tailwind"
                    >
                      <img src="{{ asset('assets/images/thumbs/tech-icon8.png') }}" alt="" />
                    </a>
                    <a
                      href="all-product.html"
                      class="product-category-list__item"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      data-bs-title="React"
                    >
                      <img src="{{ asset('assets/images/thumbs/tech-icon9.png') }}" alt="" />
                    </a>
                  </div>
                  <!-- Tech List End -->
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hero-thumb">
                <img src="{{ asset('assets/images/thumbs/banner-img.png') }}" alt="" />
                <img
                  src="{{ asset('assets/images/shapes/dots.png') }}"
                  alt=""
                  class="dotted-img white-version"
                />
                <img
                  src="{{ asset('assets/images/shapes/dots-white.png') }}"
                  alt=""
                  class="dotted-img dark-version"
                />
                <img
                  src="{{ asset('assets/images/shapes/element2.png') }}"
                  alt=""
                  class="element two end-0"
                />

                <div class="statistics animation bg-main text-center">
                  <h5 class="statistics__amount text-white">25k</h5>
                  <span class="statistics__text text-white font-14"
                    >Clients</span
                  >
                </div>

                <div class="statistics style-two bg-white text-center">
                  <h5
                    class="statistics__amount statistics__amount-two text-heading"
                  >
                    24
                  </h5>
                  <span class="statistics__text text-heading font-14"
                    >hour open</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--========================== Banner Section End ==========================-->

      <!-- ======================== we works on =========================== -->
      <section class="popular padding-y-120 overflow-hidden">
        <div class="container container-two">
          <div class="section-heading style-left mb-64">
            <h5 class="section-heading__title">We works on</h5>
          </div>
          <div class="popular-slider arrow-style-two row gy-4">
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/html.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">HTML</h6>
                <span class="popular-item__qty text-body">99%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/css.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">CSS</h6>
                <span class="popular-item__qty text-body">99%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/javascript.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">javascript</h6>
                <span class="popular-item__qty text-body">97%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/jquery.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">Jquery</h6>
                <span class="popular-item__qty text-body">97%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/react.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">React js</h6>
                <span class="popular-item__qty text-body">98%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/node-js.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">Node js</h6>
                <span class="popular-item__qty text-body">97%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/bootstrap.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">Bootstrap</h6>
                <span class="popular-item__qty text-body">99%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/python.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">Python</h6>
                <span class="popular-item__qty text-body">95%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/sql.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">SQL</h6>
                <span class="popular-item__qty text-body">98%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/mongodb.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">MongoDB</h6>
                <span class="popular-item__qty text-body">96%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/php.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">PHP</h6>
                <span class="popular-item__qty text-body">99%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/laravel.svg')}}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">Laravel</h6>
                <span class="popular-item__qty text-body">99%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/angularjs.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">Angular</h6>
                <span class="popular-item__qty text-body">95%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/codeigniter.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">CodeIgniter</h6>
                <span class="popular-item__qty text-body">98%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/figma.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">Figma</h6>
                <span class="popular-item__qty text-body">99%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/photoshop.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">Photoshop</h6>
                <span class="popular-item__qty text-body">97%</span>
              </a>
            </div>
            <div class="col-lg-2">
              <a href="all-product.html" class="popular-item w-100">
                <span class="popular-item__icon">
                  <img src="{{ asset('assets/images/icons/illustrator.png') }}" alt="" />
                </span>
                <h6 class="popular-item__title font-18">Illustrator</h6>
                <span class="popular-item__qty text-body">96%</span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- ======================== we works on End =========================== -->
      <!-- ======================= Featured Products Start =============================== -->
      <section
        class="featured-product padding-y-0 position-relative z-index-1 mb-5"
      >
        <img
          src="{{ asset('assets/images/gradients/featured-gradient.png') }}"
          alt=""
          class="bg--gradient white-version"
        />
        <img
          src="{{ asset('assets/images/shapes/spider-net.png') }}"
          alt=""
          class="spider-net position-absolute top-0 end-0 z-index--1 white-version"
        />
        <img
          src="{{ asset('assets/images/shapes/spider-net-white.png') }}"
          alt=""
          class="spider-net position-absolute top-0 end-0 z-index--1 dark-version"
        />

        <img
          src="{{ asset('assets/images/shapes/element1.png') }}"
          alt=""
          class="element two"
        />

        <div class="container container-two">
          <div class="row gy-4 flex-wrap-reverse align-items-center">
            <div class="col-xl-6">
              <div class="banner-three__right">
                <div class="banner-three-thumb position-relative">
                  <img src="{{ asset('assets/images/thumbs/banner-thumb.png') }}" alt="" />

                  <div class="statistics-three-box bg-white text-center">
                    <h5 class="statistics-three-box__amount text-heading">
                      19k
                    </h5>
                    <span
                      class="statistics-three-box__text text-heading font-14"
                      >Themes &amp; Plugins</span
                    >
                  </div>

                  <!-- Happy Client Start -->
                  <div class="happy-client-three flx-align">
                    <div class="happy-client-three__thumbs">
                      <img
                        src="{{ asset('assets/images/thumbs/happy-client1.png') }}"
                        alt="Client"
                        class="happy-client-three__img"
                      />
                      <img
                        src="{{ asset('assets/images/thumbs/happy-client2.png') }}"
                        alt="Client"
                        class="happy-client-three__img"
                      />
                      <img
                        src="{{ asset('assets/images/thumbs/happy-client3.png') }}"
                        alt="Client"
                        class="happy-client-three__img"
                      />
                      <img
                        src="{{ asset('assets/images/thumbs/happy-client4.png') }}"
                        alt="Client"
                        class="happy-client-three__img"
                      />
                    </div>
                    <span
                      class="happy-client-three__text text-heading fw-500 text-center"
                      >2k Happy Clients</span
                    >
                  </div>
                  <!-- Happy Client End -->
                </div>
              </div>
            </div>
            <div class="col-xl-1 d-xl-block d-none"></div>
            <div class="col-xl-5">
              <div class="section-content">
                <div class="section-heading style-left">
                  <h3 class="section-heading__title">About us</h3>
                  <p class="section-heading__desc font-18 w-sm">
                    Welcome to creativeFlow, your destination for expert
                    freelance services tailored to meet your unique business
                    needs. We are a diverse team of skilled freelancers, each
                    specializing in areas like web development,Web design,UI/UX,
                    graphic design, content creation and more.
                  </p>
                </div>
                <a href="about.html" class="btn btn-main btn-lg pill fw-300">
                  About us
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======================= Featured Products End =============================== -->

      <!-- =======================service section Start ========================= -->
      <section
        id="service_section"
        class="selling-product padding-y-120 position-relative z-index-1 overflow-hidden"
      >
        <img
          src="{{ asset('assets/images/gradients/selling-gradient.png') }}"
          alt=""
          class="bg--gradient"
        />

        <img
          src="{{ asset('assets/images/shapes/element2.png') }}"
          alt=""
          class="element one"
        />
        <img
          src="{{ asset('assets/images/shapes/element1.png') }}"
          alt=""
          class="element two"
        />

        <img
          src="{{ asset('assets/images/shapes/curve-pattern1.png') }}"
          alt=""
          class="position-absolute start-0 top-0 z-index--1"
        />
        <img
          src="{{ asset('assets/images/shapes/curve-pattern2.png') }}"
          alt=""
          class="position-absolute end-0 top-0 z-index--1"
        />

        <div class="container container-two">
          <div
            class="section-heading style-left style-white flx-between max-w-unset gap-4"
          >
            <div class="mx-auto text-center">
              <h3 class="section-heading__title text-center">
                Your Vision, Our Expertise Delivered.
              </h3>
              <p class="section-heading__desc font-18 text-center m-auto">
                We transform your vision into reality with customized,
                expert-driven solutions. Our team is committed to delivering
                excellence that propels your success.
              </p>
            </div>
          </div>
          <div class="selling-product-slider">
            <div class="product-item shadow-sm overlay-none">
              <div class="product-item__thumb d-flex max-h-unset">
                <a href="product-details.html" class="link w-100">
                  <img
                    src="{{ asset('assets/images/thumbs/web-development.png') }}"
                    alt=""
                    class="cover-img"
                  />
                </a>
              </div>
              <div class="product-item__content">
                <h6 class="product-item__title">
                  <a href="product-details.html" class="link"
                    >Web Development</a
                  >
                </h6>
                <div class="product-item__info flx-between gap-2">
                  <span class="product-item__author">
                    Custom website development, responsive design, and CMS
                    integration (WordPress, Shopify, etc.).
                  </span>
                </div>
                <div class="product-item__bottom flx-between gap-2">
                  <div>
                    <span class="product-item__sales font-16 mb-2"
                      >1230 Sales</span
                    >
                    <ul class="star-rating gap-2">
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="flx-align gap-2">
                    <a
                      href="product-details.html"
                      class="btn btn-outline-light pill"
                      >Explore it</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item shadow-sm overlay-none">
              <div class="product-item__thumb d-flex max-h-unset">
                <a href="product-details.html" class="link w-100">
                  <img
                    src="{{ asset('assets/images/thumbs/uxuiDesign.png') }}"
                    alt=""
                    class="cover-img"
                  />
                </a>
              </div>
              <div class="product-item__content">
                <h6 class="product-item__title">
                  <a href="product-details.html" class="link">UI/UX Design</a>
                </h6>
                <div class="product-item__info flx-between gap-2">
                  <span class="product-item__author">
                    Creating user-friendly and visually appealing interfaces
                    that enhance user experience.
                  </span>
                </div>
                <div class="product-item__bottom flx-between gap-2">
                  <div>
                    <span class="product-item__sales font-16 mb-2"
                      >1230 Sales</span
                    >
                    <ul class="star-rating gap-2">
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="flx-align gap-2">
                    <a
                      href="product-details.html"
                      class="btn btn-outline-light pill"
                      >Explore it</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item shadow-sm overlay-none">
              <div class="product-item__thumb d-flex max-h-unset">
                <a href="product-details.html" class="link w-100">
                  <img
                    src="{{ asset('assets/images/thumbs/grapic-design-1.png') }}"
                    alt=""
                    class="cover-img"
                  />
                </a>
              </div>
              <div class="product-item__content">
                <h6 class="product-item__title">
                  <a href="product-details.html" class="link">Graphic Design</a>
                </h6>
                <div class="product-item__info flx-between gap-2">
                  <span class="product-item__author">
                    Logo design, branding, marketing materials,Photoshop and
                    illustrations for businesses.
                  </span>
                </div>
                <div class="product-item__bottom flx-between gap-2">
                  <div>
                    <span class="product-item__sales font-16 mb-2"
                      >1230 Sales</span
                    >
                    <ul class="star-rating gap-2">
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="flx-align gap-2">
                    <a
                      href="product-details.html"
                      class="btn btn-outline-light pill"
                      >Explore it</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item shadow-sm overlay-none">
              <div class="product-item__thumb d-flex max-h-unset">
                <a href="product-details.html" class="link w-100">
                  <img
                    src="{{ asset('assets/images/thumbs/ecommarce-img.png') }}"
                    alt=""
                    class="cover-img"
                  />
                </a>
              </div>
              <div class="product-item__content">
                <h6 class="product-item__title">
                  <a href="product-details.html" class="link"
                    >E-Commerce Solutions</a
                  >
                </h6>
                <div class="product-item__info flx-between gap-2">
                  <span class="product-item__author">
                    Customizing e-commerce platforms with integrated payment
                    gateways and inventory management.
                  </span>
                </div>
                <div class="product-item__bottom flx-between gap-2">
                  <div>
                    <span class="product-item__sales font-16 mb-2"
                      >1230 Sales</span
                    >
                    <ul class="star-rating gap-2">
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                      <li class="star-rating__item font-16">
                        <i class="fas fa-star"></i>
                      </li>
                    </ul>
                  </div>
                  <div class="flx-align gap-2">
                    <a
                      href="product-details.html"
                      class="btn btn-outline-light pill"
                      >Explore it</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======================= services section End ========================= -->
      <!-- ======================= Top performance Author Start =============================== -->
      <section
        class="top-performance overflow-hidden padding-y-120 position-relative z-index-1"
      >
        <img
          src="{{ asset('assets/images/shapes/spider-net.png') }}"
          alt=""
          class="spider-net position-absolute top-0 end-0 z-index--1 white-version"
        />
        <img
          src="{{ asset('assets/images/shapes/spider-net-white.png') }}"
          alt=""
          class="spider-net position-absolute top-0 end-0 z-index--1 dark-version"
        />
        <img
          src="{{ asset('assets/images/shapes/pattern-curve-four.png') }}"
          alt=""
          class="position-absolute top-0 start-0 z-index--1"
        />

        <img
          src="{{ asset('assets/images/shapes/element2.png') }}"
          alt=""
          class="element two"
        />

        <div class="container container-two">
          <div class="row gy-4 align-items-center flex-wrap-reverse">
            <div class="col-lg-7 pe-lg-5">
              <div class="position-relative">
                <div class="circle style-two static-circle">
                  <div class="circle__badge">
                    <img src="{{ asset('assets/images/icons/featured-badge.png') }}" alt="" />
                  </div>
                  <div class="circle__desc circle__text">
                    <p>Our Top Performance</p>
                  </div>
                </div>
                <div class="performance-content">
                  <div class="performance-content__item">
                    <h4>
                      Timely Project<br />
                      Delivery
                    </h4>
                  </div>
                  <div class="performance-content__item">
                    <h4>Expert Team</h4>
                  </div>
                  <div class="performance-content__item">
                    <h4>Client Satisfaction</h4>
                  </div>
                  <div class="performance-content__item">
                    <h4>Cost-Effective <br />Services</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="section-content">
                <div class="section-heading style-left">
                  <h3 class="section-heading__title">
                    Excellence in Every Project
                  </h3>
                  <p class="section-heading__desc font-18 w-sm">
                    Our team consistently delivers top-tier performance,
                    combining timely delivery, innovative solutions, and
                    client-focused services. We ensure high-quality results that
                    drive success and satisfaction in every project.
                  </p>
                </div>
                <a href="contact.html" class="btn btn-main btn-lg pill fw-300">
                  Get Started
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======================= Top performance Author End =============================== -->
      <!-- ======================= Become seller section start ==================== -->
      <section class="seller padding-y-120">
        <div class="container container-two">
          <div class="row gy-4">
            <div class="col-lg-12">
              <div class="support position-relative z-index-1">
                <img
                  src="{{ asset('assets/images/shapes/spider-net-sm.png') }}"
                  alt=""
                  class="spider-net position-absolute top-0 end-0 z-index--1"
                />
                <img
                  src="{{ asset('assets/images/shapes/arrow-shape.png') }}"
                  alt=""
                  class="arrow-shape"
                />
                <div class="row align-items-center">
                  <div class="col-lg-1 d-lg-block d-none"></div>
                  <div class="col-lg-3 col-md-4 d-md-block d-none">
                    <div class="support-thumb text-center">
                      <img src="{{ asset('assets/images/thumbs/support-img.png') }}" alt="" />
                    </div>
                  </div>
                  <div class="col-lg-3 d-lg-block d-none"></div>
                  <div class="col-lg-5 col-md-8">
                    <div class="support-content">
                      <h3 class="support-content__title mb-3">Support 24/7</h3>
                      <p class="support-content__desc">
                        Wanna talk? Send us a message
                      </p>
                      <a
                        href="mailto:infomail@office.com"
                        class="btn btn-static-black btn-lg fw-300 pill"
                        >infomail@office.com</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======================= Become seller section End ==================== -->
@endsection