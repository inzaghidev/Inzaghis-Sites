import { Link } from "react-router-dom";
import GitHubButton from "react-github-btn";

export default function Footer() {
  return (
    <footer className="footer">
      <div className="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-2 font-[Inter]">
        <div className="lg:flex lg:items-start lg:gap-8">
          <section className="inzaghis-corp-logo flex justify-center md:justify-start text-teal-600">
            <a href="#" id="logo">
              <img
                src="/icons/inzaghis-corp-logo-vertical-transparent.png"
                className="h-16 w-auto"
                alt="logo"
              />
            </a>
          </section>

          <div className="text-center md:text-left mt-8 grid grid-cols-2 gap-8 md:grid-cols-3 md:gap-y-12 lg:mt-0 lg:grid-cols-5 lg:gap-y-16">
            <div className="col-span-2 sm:col-span-1">
              <p className="footer-title font-medium text-xl font-semibold text-gray-900 uppercase">
                Portals
              </p>

              <ul className="mt-6 space-y-4 text-sm">
                <li>
                  <a
                    href="/portals/widgets"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Widgets
                  </a>
                </li>

                <li>
                  <a
                    href="/portals/tech-tutorials"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Technology Tutorials
                  </a>
                </li>

                <li>
                  <a
                    href="/portals/projects"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    IT Project Lists
                  </a>
                </li>

                <li>
                  <a
                    href="/portals/career-portal"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Career Portal
                  </a>
                </li>

                <li>
                  <a
                    href="/portals/learning-materials"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Learning Materials
                  </a>
                </li>

                <li>
                  <a
                    href="/portals/entertainment-portal"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Entertainment Portal
                  </a>
                </li>

                <li>
                  <a
                    href="/portals/link-pages"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Link Pages
                  </a>
                </li>

                <li>
                  <a
                    href="/portals/muslim-portal"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Muslims Portal
                  </a>
                </li>

                <li>
                  <a
                    href="/portals/miscellaneous"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Miscellaneous
                  </a>
                </li>

                <li>
                  <a
                    href="/portals"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Portal Lists
                  </a>
                </li>
              </ul>
            </div>

            <div className="col-span-2 sm:col-span-1">
              <p className="footer-title font-medium text-xl font-semibold text-gray-900 uppercase">
                Apps & Tools
              </p>

              <ul className="mt-6 space-y-4 text-sm">
                <li>
                  <a
                    href="/apps/converter"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Converters
                  </a>
                </li>

                <li>
                  <a
                    href="/apps/calculators"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Calculators
                  </a>
                </li>

                <li>
                  <a
                    href="/apps/generators"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Generators
                  </a>
                </li>

                <li>
                  <a
                    href="/apps/formatters"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Formatters
                  </a>
                </li>

                <li>
                  <a
                    href="/apps/file-converter"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    File Converters
                  </a>
                </li>

                <li>
                  <a
                    href="/apps/utilities"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Utilities
                  </a>
                </li>

                <li>
                  <a
                    href="/apps/tester-tools"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Tester Tools
                  </a>
                </li>

                <li>
                  <a
                    href="/apps"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    App Tools Lists
                  </a>
                </li>
              </ul>
            </div>

            <div className="col-span-2 sm:col-span-1">
              <p className="footer-title font-medium text-xl font-semibold text-gray-900 uppercase">
                Networks
              </p>

              <ul className="mt-6 space-y-4 text-sm">
                <li>
                  <a
                    href="/inzaghis-group/inzaghis-blog"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Inzaghi's Blog
                  </a>
                </li>

                <li>
                  <a
                    href="/inzaghis-group/inzaghis-media"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Inzaghi's Media
                  </a>
                </li>

                <li>
                  <a
                    href="#"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Inzaghi's Dev
                  </a>
                </li>

                <li>
                  <a
                    href="https://drive.google.com/drive/folders/1gAMLO2AdXqsp75ymexKwXllKbLMTfhxa"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Inzaghi's Archives
                  </a>
                </li>

                <li>
                  <a
                    href="#"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Inzaghi's AI
                  </a>
                </li>

                <li>
                  <a
                    href="/networks"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Inzaghi's Group Network
                  </a>
                </li>
              </ul>
            </div>

            <div className="col-span-2 sm:col-span-1">
              <p className="footer-title font-medium text-xl font-semibold text-gray-900 uppercase">
                Special Pages
              </p>

              <ul className="mt-6 space-y-4 text-sm">
                <li>
                  <a
                    href="/about"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    About
                  </a>
                </li>
                <li>
                  <a
                    href="/profile"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Profile
                  </a>
                </li>
                <li>
                  <a
                    href="/contact"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Contact
                  </a>
                </li>
                <li>
                  <a
                    href="https://medium.com/@izzumiposhaf29"
                    target="_blank"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Blog
                  </a>
                </li>
              </ul>
            </div>

            <div className="col-span-2 sm:col-span-1">
              <p className="footer-title font-medium text-xl font-semibold text-gray-900 uppercase">
                Quick Link
              </p>

              <ul className="mt-6 space-y-4 text-sm">
                <li>
                  <a
                    href="https://inzaghiposuma.wordpress.com/blog-posts"
                    target="_blank"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    WordPress Blog
                  </a>
                </li>
                <li>
                  <a
                    href="https://medium.com/@izzumiposhaf29"
                    target="_blank"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Inzaghi's Sites Blog
                  </a>
                </li>
                <li>
                  <a
                    href="https://linktr.ee/inzaghigroup"
                    target="_blank"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    Linktree Inzaghi's Group
                  </a>
                </li>
              </ul>
            </div>

            <div className="col-span-2 flex flex-col items-center gap-6 sm:flex-row sm:justify-start lg:col-span-5 lg:justify-end">
              <ul className="flex gap-6">
                <li>
                  <a
                    href="https://www.instagram.com/enzapost"
                    rel="noreferrer"
                    target="_blank"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    <span className="sr-only">Instagram</span>

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      color="#000000"
                      fill="none"
                    >
                      <path
                        d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M16.5 12C16.5 14.4853 14.4853 16.5 12 16.5C9.51472 16.5 7.5 14.4853 7.5 12C7.5 9.51472 9.51472 7.5 12 7.5C14.4853 7.5 16.5 9.51472 16.5 12Z"
                        stroke="currentColor"
                        stroke-width="1.5"
                      />
                      <path
                        d="M17.5078 6.5L17.4988 6.5"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </a>
                </li>

                <li>
                  <a
                    href="https://x.com/InzaTechMedia"
                    rel="noreferrer"
                    target="_blank"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    <span className="sr-only">X (Twitter)</span>

                    <svg
                      className="size-6"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                      aria-hidden="true"
                    >
                      <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>

                <li>
                  <a
                    href="https://www.youtube.com/@enzavlogpost"
                    rel="noreferrer"
                    target="_blank"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    <span className="sr-only">YouTube</span>

                    <svg
                      width="24"
                      height="24"
                      viewBox="0 -2 16 16"
                      className="fill-current"
                    >
                      <path d="M15.6645 1.88018C15.4839 1.13364 14.9419 0.552995 14.2452 0.359447C13.0065 6.59222e-08 8 0 8 0C8 0 2.99355 6.59222e-08 1.75484 0.359447C1.05806 0.552995 0.516129 1.13364 0.335484 1.88018C0 3.23502 0 6 0 6C0 6 0 8.79263 0.335484 10.1198C0.516129 10.8664 1.05806 11.447 1.75484 11.6406C2.99355 12 8 12 8 12C8 12 13.0065 12 14.2452 11.6406C14.9419 11.447 15.4839 10.8664 15.6645 10.1198C16 8.79263 16 6 16 6C16 6 16 3.23502 15.6645 1.88018ZM6.4 8.57143V3.42857L10.5548 6L6.4 8.57143Z"></path>
                    </svg>
                  </a>
                </li>

                <li>
                  <a
                    href="https://www.tiktok.com/@enzapostmedia"
                    rel="noreferrer"
                    target="_blank"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    <span className="sr-only">TikTok</span>

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      color="#000000"
                      fill="none"
                    >
                      <path
                        d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M10.5359 11.0075C9.71585 10.8916 7.84666 11.0834 6.93011 12.7782C6.01355 14.4729 6.9373 16.2368 7.51374 16.9069C8.08298 17.5338 9.89226 18.721 11.8114 17.5619C12.2871 17.2746 12.8797 17.0603 13.552 14.8153L13.4738 5.98145C13.3441 6.95419 14.4186 9.23575 17.478 9.5057"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </a>
                </li>

                <li>
                  <a
                    href="https://github.com/inzaghidev"
                    rel="noreferrer"
                    target="_blank"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    <span className="sr-only">GitHub</span>

                    <svg
                      className="size-6"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                      aria-hidden="true"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </a>
                </li>

                <li>
                  <a
                    href="https://github.com/inzaghidev"
                    rel="noreferrer"
                    target="_blank"
                    className="text-gray-700 transition hover:text-blue-600 hover:opacity-75"
                  >
                    <span className="sr-only">Spotify</span>

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="24"
                      height="24"
                      color="#000000"
                      fill="none"
                    >
                      <circle
                        cx="12"
                        cy="12"
                        r="10"
                        stroke="#000000"
                        stroke-width="1.5"
                      ></circle>
                      <path
                        d="M7.5 12.0685C8.59944 11.6998 9.77639 11.5 11 11.5C13.0238 11.5 14.9199 12.0465 16.5488 13M18 10C16.1509 8.7383 13.9122 8 11.5 8C9.90307 8 8.38216 8.32358 7 8.90839M15.129 16C13.8927 15.3609 12.4894 15 11.0018 15C10.1819 15 9.38762 15.1096 8.63281 15.315"
                        stroke="#000000"
                        stroke-width="1.5"
                        stroke-linecap="round"
                      ></path>
                    </svg>
                  </a>
                </li>
              </ul>
              <GitHubButton
                href="https://github.com/inzaghidev/Inzaghis-Sites"
                data-color-scheme="no-preference: light; light: light; dark: dark;"
                data-size="large"
                aria-label="Look at @inzaghidev"
              >
                Follow @buttons
              </GitHubButton>
            </div>
          </div>
        </div>

        <div className="mt-8 border-t border-gray-100 pt-8">
          <div className="sm:flex sm:justify-between">
            <div className="flex items-center gap-1 text-xs md:text-sm text-gray-600">
              <span>&copy; 2026</span>
              <a className="font-medium" href="/">
                Inzaghi's Corp. (InzaTech)
              </a>
              <span>All rights reserved.</span>
            </div>

            <ul className="mt-8 flex flex-wrap justify-start gap-4 text-xs sm:mt-0 lg:justify-end">
              <li>
                <a
                  href="/disclaimer"
                  className="text-gray-600 transition hover:text-blue-700 hover:opacity-75"
                >
                  Terms & Conditions
                </a>
              </li>

              <li>
                <a
                  href="/privacy-policy"
                  className="text-gray-600 transition hover:text-blue-700 hover:opacity-75"
                >
                  Privacy Policy
                </a>
              </li>

              <li>
                <a
                  href="/sitemap"
                  className="text-gray-600 transition hover:text-blue-700 hover:opacity-75"
                >
                  Sitemap
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  );
}
