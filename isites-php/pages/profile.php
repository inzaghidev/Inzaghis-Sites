<?php
	$page_title = "Profile";
	include('../layouts/header.php');
  include('../components/navbar/navbar.php');
?>
  <div class="container-top"></div>
  <div class="pages-background page-sub-container-full bg-gray-100">
    <div class="container mx-auto py-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 px-4">
        <div class="col-span-4 md:col-span-8 lg:col-span-3">
          <div class="bg-white shadow-xl rounded-lg p-6 ring-1 ring-green-500">
            <div class="flex flex-col items-center">
              <img
                src="../assets/images/inzaghi-posuma-alkahfi.jpg"
                class="w-36 h-48 bg-gray-300 rounded-lg mb-4 shrink-0"
              />
                 
              <h1 class="text-xl font-bold">Inzaghi Posuma Al Kahfi</h1>
              <p class="text-gray-700">Software Developer</p>
              <div class="mt-6 flex flex-wrap gap-4 justify-center">
                <a
                  href="https://inzaghiposuma.blogspot.com/p/contact-and-profile.html"
                  target="_blank"
                  class="bg-blue-500 hover:bg-blue-600 text-white hover:text-white py-2 px-4 rounded-lg focus:ring-4 focus:ring-blue-300"
                  >Contact</a
                >
                <a
                  href="https://portofolio-inzaghi-posuma.vercel.app"
                  target="_blank"
                  class="bg-gray-300 hover:bg-gray-400 text-gray-700 py-2 px-4 rounded-lg focus:ring-4 focus:ring-gray-200"
                  >Portofolio</a
                >
              </div>
            </div>
            <hr class="my-6 border-t border-gray-300" />
            <div class="flex flex-col">
              <span
                class="text-gray-700 uppercase font-bold tracking-wider mb-2"
                >Skills</span
              >
              <ul>
                <li class="mb-2">JavaScript</li>
                <li class="mb-2">React</li>
                <li class="mb-2">Node.js</li>
                <li class="mb-2">HTML/CSS</li>
                <li class="mb-2">Tailwind Css</li>
              </ul>
            </div>
            <br />
            <section class="py-3">
              <h3 class="uppercase font-semibold text-lg mb-4">Education</h3>
              <ul class="list-none space-y-3">
                <li>
                  <div class="font-bold text-base">
                    Information Technology
                  </div>
                  <div class="text-gray-500 text-sm">Pradita University</div>
                  <div class="text-gray-500 text-sm">2021 - 2025</div>
                </li>
                <li>
                  <div class="font-bold text-base">Science Studies</div>
                  <div class="text-gray-500 text-sm">Islamic Village High School</div>
                  <div class="text-gray-500 text-sm">2018 - 2021</div>
                </li>
              </ul>
            </section>
          </div>
        </div>
        <div class="col-span-4 md:col-span-8 lg:col-span-9">
          <div class="font-[Inter] bg-white shadow-xl rounded-lg p-6 ring-1 ring-green-500">
            <h2 class="text-2xl font-bold mb-4">About Me</h2>
            <p class="text-gray-700 text-sm">
                I'm Inzaghi Posuma Al Kahfi, a Fresher Graduate in Information
                Technology Student at Pradita University (Tangerang, Banten,
                Indonesia) with hands-on experience in Web and Mobile
                Development, IoT Projects, and Data-driven Applications. I'm
                also a Passionate Software Engineer and Full-stack Developer
                with hands-on experience in Web and Mobile App Development,
                utilizing Laravel (PHP), React.js, Flutter (Dart), JavaScript,
                and Python. Candidate for Chief Executive Officer (CEO) of
                Inzaghi’s Group (InzaTech Poshaf).
            </p>
           
            <h3 class="font-semibold text-center mt-3 -mb-2">Find me on</h3>
            <div class="flex justify-center items-center gap-6 my-6">
              <a
                class="text-gray-700 hover:text-orange-600"
                aria-label="Visit TrendyMinds LinkedIn"
                href="https://www.linkedin.com/in/inzaghi-posuma-al-kahfi-b2613528b"
                target="_blank"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                  class="h-6"
                >
                  <path
                    fill="currentColor"
                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                  ></path>
                </svg>
              </a>
              <a
                class="text-gray-700 hover:text-orange-600"
                aria-label="Visit TrendyMinds YouTube"
                href=""
                target="_blank"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 576 512"
                  class="h-6"
                >
                  <path
                    fill="currentColor"
                    d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
                  ></path>
                </svg>
              </a>
              <a
                class="text-gray-700 hover:text-orange-600"
                aria-label="Visit TrendyMinds Facebook"
                href=""
                target="_blank"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 320 512"
                  class="h-6"
                >
                  <path
                    fill="currentColor"
                    d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                  ></path>
                </svg>
              </a>
              <a
                class="text-gray-700 hover:text-orange-600"
                aria-label="Visit TrendyMinds Instagram"
                href="https://www.instagram.com/inzaghiposuma"
                target="_blank"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                  class="h-6"
                >
                  <path
                    fill="currentColor"
                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                  ></path>
                </svg>
              </a>
              <a
                class="text-gray-700 hover:text-orange-600"
                aria-label="Visit TrendyMinds Twitter"
                href="https://x.com/lPosumA0209"
                target="_blank"
              >
                <svg
                  class="h-6"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                >
                  <path
                    fill="currentColor"
                    d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
                  ></path>
                </svg>
              </a>
            </div>
            
            <h2 class="text-2xl font-bold mt-6 mb-4">Experience</h2>
            <div class="mb-6">
              <div class="flex justify-between flex-wrap gap-2 w-full">
                <span class="text-gray-700 text-lg font-bold">Web Developer</span>
                <p>
                  <span class="text-gray-700 mr-2">ABC Company</span>
                  <span class="text-gray-700">2017 - 2019</span>
                </p>
              </div>
              <p class="mt-2 text-sm">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                eu, pretium quis, sem. Donec pede justo, fringilla vel. Lorem
                ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                penatibus et magnis dis parturient montes, nascetur ridiculus
                mus. Donec quam felis.
              </p>
            </div>
            <div class="mb-6">
              <div class="flex justify-between flex-wrap gap-2 w-full">
                <span class="text-gray-700 text-lg font-bold">Web Developer</span>
                <p>
                  <span class="text-gray-700 mr-2">ABC Company</span>
                  <span class="text-gray-700">2017 - 2019</span>
                </p>
              </div>
              <p class="mt-2 text-sm">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                eu, pretium quis, sem. Donec pede justo, fringilla vel.
              </p>
            </div>
            <div class="mb-6">
              <div class="flex justify-between flex-wrap gap-2 w-full">
                <span class="text-gray-700 text-lg font-bold">Web Developer</span>
                <p>
                  <span class="text-gray-700 mr-2">ABC Company</span>
                  <span class="text-gray-700">2017 - 2019</span>
                </p>
              </div>
              <p class="mt-2 text-sm">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus.
              </p>
            </div>
            <div class="mb-6">
              <div class="flex justify-between flex-wrap gap-2 w-full">
                <span class="text-gray-700 text-lg font-bold">Web Developer</span>
                <p>
                  <span class="text-gray-700 mr-2">ABC Company</span>
                  <span class="text-gray-700">2017 - 2019</span>
                </p>
              </div>
              <p class="mt-2 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                finibus est vitae tortor ullamcorper, ut vestibulum velit
                convallis. Aenean posuere risus non velit egestas suscipit.
              </p>
            </div>
            <br />
            <h2 class="text-2xl font-bold mt-6 mb-4">Projects</h2>
            <div class="mb-6">
              <div class="flex justify-between flex-wrap gap-2 w-full">
                <span class="text-gray-700 text-lg font-bold">Project Lorem Ipsum 1</span>
                <p>
                  <span class="text-gray-700 mr-2">Open Source</span>
                </p>
              </div>
              <p class="mt-2 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                finibus est vitae tortor ullamcorper, ut vestibulum velit
                convallis. Aenean posuere risus non velit egestas suscipit.
              </p>
            </div>
            <div class="mb-6">
              <div class="flex justify-between flex-wrap gap-2 w-full">
                <span class="text-gray-700 text-lg font-bold">Project Lorem Ipsum 2</span>
                <p>
                  <span class="text-gray-700 mr-2">Open Source</span>
                </p>
              </div>
              <p class="mt-2 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                finibus est vitae tortor ullamcorper, ut vestibulum velit
                convallis. Aenean posuere risus non velit egestas suscipit.
              </p>
            </div>
            <div class="mb-6">
              <div class="flex justify-between flex-wrap gap-2 w-full">
                <span class="text-gray-700 text-lg font-bold">Project Lorem Ipsum 3</span>
                <p>
                  <span class="text-gray-700 mr-2">Open Source</span>
                </p>
              </div>
              <p class="mt-2 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                finibus est vitae tortor ullamcorper, ut vestibulum velit
                convallis. Aenean posuere risus non velit egestas suscipit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
	include('../components/footsite/footsite.php');
	include('../layouts/footer.php');
?>