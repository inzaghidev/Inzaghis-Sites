import { useState, useEffect } from "react";
import { Link, NavLink } from "react-router-dom";
import { FiSun, FiMoon } from "react-icons/fi";
import { useTheme } from "@context/ThemeContext";

export default function Navbar() {
  const [open, setOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);
  const [dropdown, setDropdown] = useState(null);
  const { theme, toggleTheme } = useTheme();

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 0);
    window.addEventListener("scroll", onScroll);
    onScroll();
    return () => window.removeEventListener("scroll", onScroll);
  }, []);

  const navClass = `navbar bg-opacity-60 bg-white fixed w-full z-10 transition-all duration-300 shadow-md ${
    scrolled ? "bg-opacity-45 shadow-md" : "bg-opacity-0"
  }`;

  return (
    <div className={navClass}>
      <nav
        className={`navbar-container bg-gray-200 bg-opacity-10 backdrop-filter backdrop-blur-lg text-black transition-all duration-300 ${
          scrolled ? "bg-opacity-45 shadow-md" : "bg-opacity-10"
        }`}
      >
        <div className="navbar-wrapper container mx-auto max-w-screen-xl px-4 flex items-center justify-between gap-4 w-full">
          <div className="isites-logo flex items-center">
            <Link to="/" className="flex items-center py-5 px-2">
              <img
                src="/icons/inzaghis-sites-logo-vertical-transparent.png"
                title="Inzaghi's Sites"
                className="!h-14"
                id="logo-nav"
                alt="Inzaghi's Sites"
              />
            </Link>
          </div>

          <div className="button-toggle flex items-center lg:order-2">
            <button className="sign-in-button hidden sm:block relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200">
              <Link
                to="/login"
                className="main-button-nav relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0"
              >
                Sign in
              </Link>
            </button>

            <div className="menu-toggle lg:hidden flex items-center hover:bg-gray-300 gap-2 rounded-lg block">
              <button
                onClick={() => setOpen((v) => !v)}
                className="mobile-menu-button py-3 px-3"
                aria-label="Toggle Menu"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                >
                  <title>Menu Toggle</title>
                  <g
                    fill="none"
                    stroke="currentColor"
                    strokeWidth="1.5"
                    strokeLinecap="round"
                  >
                    <path d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
                  </g>
                </svg>
              </button>
            </div>
          </div>

          <div
            id="navigation-menu"
            className={`${open ? "block" : "hidden"} nav-menu lg:flex lg:flex-row flex-col items-center justify-start lg:space-x-1 pb-3 lg:pb-0 font-['Inter'] text-sm`}
          >
            <NavLink
              to="/"
              className="nav-toggle py-2 px-3 hover:bg-[#c1e0d1] gap-2 rounded-lg block"
            >
              Home
            </NavLink>

            {/* Blogs dropdown */}
            <div
              className="relative group"
              onMouseEnter={() => setDropdown("blogs")}
              onMouseLeave={() => setDropdown(null)}
            >
              <div className="py-3">
                <button
                  onClick={() =>
                    setDropdown((d) => (d === "blogs" ? null : "blogs"))
                  }
                  className="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] flex items-center gap-2 rounded-lg"
                  aria-expanded={dropdown === "blogs"}
                >
                  <span className="pointer-events-none">Blogs</span>
                  <svg
                    className={`w-3 h-3 transition-transform duration-200 ${dropdown === "blogs" ? "rotate-180" : ""}`}
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    ></path>
                  </svg>
                </button>
              </div>

              {dropdown === "blogs" && (
                <div className="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl">
                  <a
                    href="https://medium.com/@izzumiposhaf29"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Inzaghi's Group Blog
                  </a>
                  <a
                    href="https://inzaghiposuma.wordpress.com/blog-posts"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    WordPress Blog
                  </a>
                </div>
              )}
            </div>

            {/* Portals dropdown */}
            <div
              className="relative group"
              onMouseEnter={() => setDropdown("portals")}
              onMouseLeave={() => setDropdown(null)}
            >
              <div className="py-3">
                <button
                  onClick={() =>
                    setDropdown((d) => (d === "portals" ? null : "portals"))
                  }
                  className="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] flex items-center gap-2 rounded-lg"
                  aria-expanded={dropdown === "portals"}
                >
                  <Link to="/portals">Portals</Link>
                  <svg
                    className={`w-3 h-3 transition-transform duration-200 ${dropdown === "portals" ? "rotate-180" : ""}`}
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    ></path>
                  </svg>
                </button>
              </div>

              {dropdown === "portals" && (
                <div className="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl">
                  <Link
                    to="/portals/widgets"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Widgets
                  </Link>
                  <Link
                    to="/portals/tech-tutorials"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Technology Tutorials
                  </Link>
                  <Link
                    to="/portals/projects"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    IT Project Lists
                  </Link>
                  <Link
                    to="/portals/career-portal"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Career Portal
                  </Link>
                  <Link
                    to="/portals/learning-materials"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Learning Materials
                  </Link>
                  <Link
                    to="/portals/entertainment-portal"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Entertainment Portal
                  </Link>
                  <Link
                    to="/portals/link-pages"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Link Pages
                  </Link>
                  <Link
                    to="/portals/muslim-portal"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Muslims Portal
                  </Link>
                  <Link
                    to="/portals/miscellaneous"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Miscellaneous
                  </Link>
                </div>
              )}
            </div>

            {/* Apps dropdown */}
            <div
              className="relative group"
              onMouseEnter={() => setDropdown("apps")}
              onMouseLeave={() => setDropdown(null)}
            >
              <div className="py-3">
                <button
                  onClick={() =>
                    setDropdown((d) => (d === "apps" ? null : "apps"))
                  }
                  className="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] flex items-center gap-2 rounded-lg"
                  aria-expanded={dropdown === "apps"}
                >
                  <Link to="/apps">Apps</Link>
                  <svg
                    className={`w-3 h-3 transition-transform duration-200 ${dropdown === "apps" ? "rotate-180" : ""}`}
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    ></path>
                  </svg>
                </button>
              </div>

              {dropdown === "apps" && (
                <div className="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl">
                  <Link
                    to="/apps/converters"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Converters
                  </Link>
                  <Link
                    to="/apps/calculators"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Calculators
                  </Link>
                  <Link
                    to="/apps/generators"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Generators
                  </Link>
                  <Link
                    to="/apps/formatters"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Formatters
                  </Link>
                  <Link
                    to="/apps/file-converters"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    File Converter
                  </Link>
                  <Link
                    to="/apps/utilities"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Utilities
                  </Link>
                  <Link
                    to="/apps/tester-tools"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Tester Tools
                  </Link>
                </div>
              )}
            </div>

            <NavLink
              to="/contact"
              className="nav-toggle py-2 px-3 hover:bg-[#c1e0d1] gap-2 rounded-lg block"
            >
              Contact
            </NavLink>

            {/* About & Profile dropdown */}
            <div
              className="relative group"
              onMouseEnter={() => setDropdown("about-profile")}
              onMouseLeave={() => setDropdown(null)}
            >
              <div className="py-3">
                <button
                  onClick={() =>
                    setDropdown((d) =>
                      d === "about-profile" ? null : "about-profile",
                    )
                  }
                  className="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] flex items-center gap-2 rounded-lg"
                  aria-expanded={dropdown === "about-profile"}
                >
                  <span className="pointer-events-none">About & Profile</span>
                  <svg
                    className={`w-3 h-3 transition-transform duration-200 ${dropdown === "about-profile" ? "rotate-180" : ""}`}
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    ></path>
                  </svg>
                </button>
              </div>

              {dropdown === "about-profile" && (
                <div className="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl">
                  <Link
                    to="/about"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    About
                  </Link>
                  <Link
                    to="/profile"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Profile
                  </Link>
                </div>
              )}
            </div>

            {/* Group dropdown */}
            <div
              className="relative group"
              onMouseEnter={() => setDropdown("group")}
              onMouseLeave={() => setDropdown(null)}
            >
              <div className="py-3">
                <button
                  onClick={() =>
                    setDropdown((d) => (d === "group" ? null : "group"))
                  }
                  className="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] flex items-center gap-2 rounded-lg"
                  aria-expanded={dropdown === "group"}
                >
                  <Link to="/networks">Inzaghi's Group</Link>
                  <svg
                    className={`w-3 h-3 transition-transform duration-200 ${dropdown === "group" ? "rotate-180" : ""}`}
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    ></path>
                  </svg>
                </button>
              </div>

              {dropdown === "group" && (
                <div className="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl">
                  <Link
                    to="/networks/blog"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Inzaghi's Blog
                  </Link>
                  <Link
                    to="/networks/media"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Inzaghi's Media
                  </Link>
                  <Link
                    to="/networks/dev"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Inzaghi's Dev
                  </Link>
                  <a
                    href="https://drive.google.com/drive/folders/1gAMLO2AdXqsp75ymexKwXllKbLMTfhxa"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                    target="_blank"
                    rel="noreferrer"
                  >
                    Inzaghi's Archives
                  </a>
                  <Link
                    to="/networks/ai"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                  >
                    Inzaghi's AI
                  </Link>
                </div>
              )}
            </div>

            {/* Switch-sites dropdown */}
            <div
              className="relative group"
              onMouseEnter={() => setDropdown("switch-sites")}
              onMouseLeave={() => setDropdown(null)}
            >
              <div className="py-3">
                <button
                  onClick={() =>
                    setDropdown((d) =>
                      d === "switch-sites" ? null : "switch-sites",
                    )
                  }
                  className="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] flex items-center gap-2 rounded-lg"
                  aria-expanded={dropdown === "switch-sites"}
                >
                  <span className="pointer-events-none">Switch to</span>
                  <svg
                    className={`w-3 h-3 transition-transform duration-200 ${dropdown === "switch-sites" ? "rotate-180" : ""}`}
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                      strokeWidth="1.5"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    ></path>
                  </svg>
                </button>
              </div>

              {dropdown === "switch-sites" && (
                <div className="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl">
                  <a
                    href="https://sites.google.com/view/inzaghis-sites"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                    target="_blank"
                    rel="noreferrer"
                  >
                    Old Inzaghi's Sites
                  </a>
                  <a
                    href="https://inzaghiposuma.wordpress.com/"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                    target="_blank"
                    rel="noreferrer"
                  >
                    WordPress Site
                  </a>
                  <a
                    href="https://inzaghi-site.webflow.io"
                    className="block px-4 py-2 mt-2 text-sm hover:text-gray-900 hover:bg-white"
                    target="_blank"
                    rel="noreferrer"
                  >
                    Preview (Webflow)
                  </a>
                </div>
              )}
            </div>

            {/* Theme toggle for larger screens */}
            <div className="hidden lg:block pl-2">
              <button
                onClick={toggleTheme}
                className="p-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800"
              >
                {theme === "light" ? <FiMoon size={18} /> : <FiSun size={18} />}
              </button>
            </div>
          </div>
        </div>
      </nav>
    </div>
  );
}
