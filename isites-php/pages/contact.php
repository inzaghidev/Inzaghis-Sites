<?php
	$page_title = "Contact";
	include('../layouts/header.php');
  include('../components/navbar/navbar.php');
?>
  <div class="container-top"></div>
  <section class="page-sub-container">
    <h1 class="my-4 title-page">Contact Us</h1>

    <p class="is-desc">
      Do you have any questions? Please do not hesitate to contact us
      directly. Our team will come back to you within a matter of hours to
      help you.
    </p>

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <i class="fa fa-envelope"></i> Contact us.
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    aria-describedby="emailHelp"
                    placeholder="Enter Name"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    aria-describedby="emailHelp"
                    placeholder="Enter Email"
                    required
                  />
                  <small id="emailHelp" class="form-text text-muted"
                    >We'll never share your email with anyone else.</small
                  >
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea
                    class="form-control"
                    id="message"
                    rows="6"
                    required
                  ></textarea>
                </div>
                <div class="mx-auto">
                  <button type="submit" class="btn btn-primary text-right">
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class="card bg-light mb-3">
            <div class="card-header bg-success text-white text-uppercase">
              <i class="fa fa-home"></i> Address
            </div>
            <div class="card-body">
              <p>
                Jl. K. H. Hasyim Ashari Perum. Banjar Wijaya Cluster Cemara 1
                RT. 04/RW. 013 Blok. B1. No. 32
              </p>
              <p>Tangerang, Banten 15142</p>
              <p>Indonesia</p>
              <p>Email : izzumiposhaf29@gmail.com</p>
              <p>Tel. (+62) 813 4396 1494</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
  include('../components/footsite/footsite.php');
	include('../layouts/footer.php');
?>

<!-- https://mdbootstrap.com/docs/b4/jquery/forms/contact -->
<!-- https://bootsnipp.com/tags/contact -->