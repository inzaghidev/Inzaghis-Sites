<?php
	$page_title = "Profile";
	include('../layouts/header.php');
  include('../components/navbar/navbar.php');
?>
  <style>
    ul.a {
      display: block;
      list-style: disc;
      margin-top: 1em;
      margin-left: 0;
      margin-right: 0;
      padding-left: 40px;
    }
    li {
      list-style: circle;
    }
  </style>
  <div class="container-top"></div>
  <section class="pages">
    <h1 class="my-4 title-page">
      Profile
      <small>Inzaghi Posuma Al Kahfi</small>
    </h1>

    <!-- Portfolio Item Row -->
    <div class="row">
      <div class="col-md-6">
        <img
          class="img-fluid"
          src="../images/inzaghi-posuma-alkahfi.jpg"
          style="margin-left: auto; margin-right: auto"
          width="50%"
          alt=""
        />
      </div>

      <div class="col-md-6">
        <h3 class="my-3">My Biodata</h3>
        <p>
          I'm majoring of Information Technology (IT) College Student in
          Pradita University. And I am a Programmer, Developer, UI/UX
          Designer, Bloggers, and Content Creator. Candidate for Chief
          Executive Officer (CEO) of Inzaghi's Corp. (Inzaghi's Group).
        </p>
        <h3 class="my-3">My Biodata</h3>
        <ul class="a">
          <li>Lorem Ipsum</li>
          <li>Dolor Sit Amet</li>
          <li>Consectetur</li>
          <li>Adipiscing Elit</li>
        </ul>
      </div>
    </div>
  </section>
<?php
	include('../components/footsite/footsite.php');
	include('../layouts/footer.php');
?>