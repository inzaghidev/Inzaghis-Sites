<?php
	$page_title = "Home";
  include('../layouts/header.php');
?>
    <div class="pages-background flex flex-col xl:justify-center font-[sans-serif] sm:h-screen p-4">
      <div
        class="bg-white max-w-md w-full mx-auto ring-1 ring-green-500 rounded-2xl p-8"
      >
        <div class="text-center mb-12">
          <a href="javascript:void(0)"
            ><img
              src="../assets/icons/inzaghis-sites-logo-vertical-transparent.png"
              alt="logo"
              class="w-40 inline-block"
            />
          </a>
        </div>

        <form>
          <div class="space-y-6">
            <div>
              <label class="text-gray-800 text-sm mb-2 block">Email Id</label>
              <input
                name="email"
                type="text"
                class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-green-500"
                placeholder="Enter email"
              />
            </div>
            <div>
              <label class="text-gray-800 text-sm mb-2 block">Password</label>
              <input
                name="password"
                type="password"
                class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-green-500"
                placeholder="Enter password"
              />
            </div>
            <div>
              <label class="text-gray-800 text-sm mb-2 block"
                >Confirm Password</label
              >
              <input
                name="cpassword"
                type="password"
                class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-green-500"
                placeholder="Enter confirm password"
              />
            </div>

            <div class="flex items-center">
              <input
                id="remember-me"
                name="remember-me"
                type="checkbox"
                class="h-4 w-4 shrink-0 text-green-600 focus:ring-green-500 border-gray-300 rounded"
              />
              <label for="remember-me" class="text-gray-800 ml-3 block text-sm">
                I accept the
                <a
                  href="javascript:void(0);"
                  class="text-green-600 font-semibold hover:underline ml-1"
                  >Terms and Conditions</a
                >
              </label>
            </div>
          </div>

          <div class="!mt-12">
            <button
              type="button"
              class="w-full py-3 px-4 text-sm tracking-wider font-semibold rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none"
            >
              Sign in
            </button>
          </div>
          <p class="text-gray-800 text-sm mt-6 text-center">
            Don't have an account?
            <a
              href="../includes/register-page.php"
              class="text-green-600 font-semibold hover:underline ml-1"
              >Create an account</a
            >
          </p>
          <p class="text-gray-800 text-sm mt-6 text-center">
            Do you want go Back to Home?
            <a
              href="../public/index.php"
              class="text-green-600 font-semibold hover:underline ml-1"
            >
              &#60; Back</a
            >
          </p>
        </form>
      </div>
    </div>
<?php
	include('../layouts/footer.php');
?>

<!-- https://www.javatpoint.com/html-registration-form -->
<!-- https://www.w3schools.com/howto/howto_css_register_form.asp -->