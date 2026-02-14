import { useState } from "react";
import { Link } from "react-router-dom";

export default function Navbar() {
  const [mobileOpen, setMobileOpen] = useState(false);
  const [groupOpen, setGroupOpen] = useState(false);
  const [switchOpen, setSwitchOpen] = useState(false);

  return (
    <div className="navbar bg-white bg-opacity-60 fixed w-full z-10 shadow-md">
      <nav className="bg-gray-100 bg-opacity-10 backdrop-filter backdrop-blur-lg text-black shadow-md">
        <div className="container mx-auto px-4 lg:flex items-center justify-center gap-6 w-full">
          <div className="flex items-center justify-between lg:w-auto w-full">
            <Link to="/" id="logo" className="flex items-center py-5 px-2">
              <img
                src="/images/inzaghis-sites-logo-vertical-transparent.png"
                title="Inzaghi's Sites"
                className="h-12"
                alt="Inzaghi's Sites"
              />
            </Link>

            <div className="lg:hidden flex items-center hover:bg-gray-300 gap-2 rounded-lg block">
              <button
                aria-label="Toggle menu"
                onClick={() => setMobileOpen((s) => !s)}
                className="mobile-menu-button py-3 px-3"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <title>bars-3-bottom-left</title>
                  <g fill="none">
                    <path
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12"
                      stroke="currentColor"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                  </g>
                </svg>
              </button>
            </div>
          </div>

          <div
            id="navigation-menu"
            className={`${
              mobileOpen ? "block" : "hidden"
            } lg:flex lg:flex-row flex-col items-center justify-start lg:space-x-1 pb-3 lg:pb-0`}
          >
            <Link
              to="/"
              className="py-2 px-3 hover:bg-gray-300 gap-2 rounded-lg block"
            >
              Home
            </Link>
            <a
              href="https://medium.com/@izzumiposhaf29"
              target="_blank"
              rel="noopener noreferrer"
              className="py-2 px-3 hover:bg-gray-300 gap-2 rounded-lg block"
            >
              Blog
            </a>
            <Link
              to="/apps"
              className="py-2 px-3 hover:bg-gray-300 gap-2 rounded-lg block"
            >
              Apps
            </Link>
            <Link
              to="/contact"
              className="py-2 px-3 hover:bg-gray-300 gap-2 rounded-lg block"
            >
              Contact
            </Link>
            <Link
              to="/profile"
              className="py-2 px-3 hover:bg-gray-300 gap-2 rounded-lg block"
            >
              Profile
            </Link>
            <Link
              to="/about"
              className="py-2 px-3 hover:bg-gray-300 gap-2 rounded-lg block"
            >
              About
            </Link>

            <div className="relative">
              <button
                onClick={() => setGroupOpen((s) => !s)}
                className="dropdown-toggle py-2 px-3 hover:bg-gray-300 flex items-center gap-2 rounded-lg"
                aria-expanded={groupOpen}
              >
                <span>Inzaghi's Group</span>
                <svg
                  className="w-3 h-3 pointer-events-none"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <g fill="none">
                    <path
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      stroke="currentColor"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                  </g>
                </svg>
              </button>
              {groupOpen && (
                <div className="nav-drpdwn-list dropdown-menu lg:absolute bg-opacity-95 bg-gray-300 text-black rounded-lg py-2 shadow-xl mt-2">
                  <a
                    href="/inzaghis-group/inzaghis-blog.html"
                    className="block px-6 py-2 hover:bg-gray-200"
                  >
                    Inzaghi's Blog
                  </a>
                  <a
                    href="/inzaghis-group/inzaghis-media.html"
                    className="block px-6 py-2 hover:bg-gray-200"
                  >
                    Inzaghi's Media
                  </a>
                </div>
              )}
            </div>

            <div className="relative">
              <button
                onClick={() => setSwitchOpen((s) => !s)}
                className="dropdown-toggle py-2 px-3 hover:bg-gray-300 flex items-center gap-2 rounded-lg"
                aria-expanded={switchOpen}
              >
                <span>Switch to Another Site</span>
                <svg
                  className="w-3 h-3 pointer-events-none"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <g fill="none">
                    <path
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      stroke="currentColor"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                  </g>
                </svg>
              </button>
              {switchOpen && (
                <div className="nav-drpdwn-list dropdown-menu lg:absolute bg-opacity-95 bg-gray-300 text-black rounded-lg py-2 shadow-xl mt-2">
                  <a
                    href="https://sites.google.com/view/inzaghis-sites"
                    className="block px-6 py-2 hover:bg-gray-200"
                  >
                    Old Inzaghi's Sites
                  </a>
                  <a
                    href="https://inzaghiposuma.wordpress.com"
                    className="block px-6 py-2 hover:bg-gray-200"
                  >
                    WordPress Site
                  </a>
                  <a
                    href="https://inzaghi-site.webflow.io"
                    className="block px-6 py-2 hover:bg-gray-200"
                  >
                    Preview (Webflow)
                  </a>
                </div>
              )}
            </div>

            <button className="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200">
              <span className="relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Sign in
              </span>
            </button>
          </div>
        </div>
      </nav>
    </div>
  );
}
