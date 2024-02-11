<?php
	$page_title = "Contact";
	include('../layouts/header.php');
?>
  <div class="container-top"></div>
  <section class="page-sub-container">
    <h1 class="my-4 title-page">Contact Us</h1>

    <p class="inzaghis-sites-description">
      Do you have any questions? Please do not hesitate to contact us
      directly. Our team will come back to you within a matter of hours to
      help you.
    </p>

    <secion class="page-sub-container">
      <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
          <form
            id="contact-form"
            name="contact-form"
            action="mail.php"
            method="POST"
          >
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                  />
                  <label for="name" class="">Your name</label>
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input
                    type="text"
                    id="email"
                    name="email"
                    class="form-control"
                  />
                  <label for="email" class="">Your email</label>
                </div>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <input
                    type="text"
                    id="subject"
                    name="subject"
                    class="form-control"
                  />
                  <label for="subject" class="">Subject</label>
                </div>
              </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-md-12">
                <div class="md-form">
                  <textarea
                    type="text"
                    id="message"
                    name="message"
                    rows="2"
                    class="form-control md-textarea"
                  ></textarea>
                  <label for="message">Your message</label>
                </div>
              </div>
            </div>
            <!--Grid row-->
          </form>

          <div class="text-center text-md-left">
            <a
              class="btn btn-primary"
              onclick="document.getElementById('contact-form').submit();"
              >Send</a
            >
          </div>
          <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
            <li>
              <i class="fas fa-map-marker-alt fa-2x"></i>
              <p>Tangerang, Banten 15142, Indonesia</p>
            </li>

            <li>
              <i class="fas fa-phone mt-4 fa-2x"></i>
              <p>+ 01 234 567 89</p>
            </li>

            <li>
              <i class="fas fa-envelope mt-4 fa-2x"></i>
              <p>contact@mdbootstrap.com</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
    </secion>
  </section>
<?php
	include('../layouts/footer.php');
?>

<!-- https://mdbootstrap.com/docs/b4/jquery/forms/contact -->
<!-- https://bootsnipp.com/tags/contact -->