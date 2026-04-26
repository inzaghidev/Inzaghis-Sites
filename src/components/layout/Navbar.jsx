import { useState, useEffect } from "react";
import { Link } from "react-router-dom";

export default function Navbar() {
  const [open, setOpen] = useState(false);
  const [dropdown, setDropdown] = useState(null);
  const [mobileDropdown, setMobileDropdown] = useState(null);
  const [isScrolled, setIsScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 0);
    };

    window.addEventListener("scroll", handleScroll);

    return () => {
      window.removeEventListener("scroll", handleScroll);
    };
  }, []);

  useEffect(() => {
    const navContainer = document.querySelector(".navbar-container");
    const navbar = document.querySelector(".navbar");

    if (navbar) {
      if (isScrolled) {
        navbar.classList.add("bg-opacity-45", "shadow-md");
        navbar.classList.remove("bg-opacity-0");
      } else {
        navbar.classList.add("bg-opacity-0");
        navbar.classList.remove("bg-opacity-45", "shadow-md");
      }
    }

    if (navContainer) {
      if (isScrolled) {
        navContainer.classList.add("bg-opacity-45", "shadow-md");
        navContainer.classList.remove("bg-opacity-10", "bg-opacity-0");
      } else {
        navContainer.classList.add("bg-opacity-10");
        navContainer.classList.remove("bg-opacity-45", "shadow-md");
      }
    }
  }, [isScrolled]);

  return (
    <div className={`navbar bg-opacity-60 bg-white fixed w-full z-10 transition-all duration-300 shadow-md ${isScrolled ? 'bg-opacity-100' : ''}`}>
      <nav className={`navbar-container ${isScrolled ? 'bg-gray-100 bg-opacity-90' : 'bg-gray-200 bg-opacity-10'} backdrop-filter backdrop-blur-lg text-black shadow-md transition-all duration-300`}>
        <div className="navbar-wrapper container mx-auto max-w-screen-xl px-4 flex items-center justify-between gap-4 w-full">
          <div className="isites-logo flex items-center">
            <Link to="/" className="flex items-center py-5 px-2">
              <img src="/icons/inzaghis-sites-logo-vertical-transparent.png" title="Inzaghi's Sites" className="!h-14" id="logo-nav" alt="Inzaghi's Sites" />
            </Link>
          </div>
          <div className="button-toggle flex items-center lg:order-2">
            <button className="sign-in-button hidden sm:block relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-200">
              <a className="main-button-nav relative px-5 py-2.5 transition-all ease-in duration-75 bg-gray-900 rounded-md group-hover:bg-opacity-0" href="/includes/login-page.php">
                Sign in
              </a>
            </button>
            <div className="menu-toggle lg:hidden flex items-center hover:bg-gray-300 gap-2 rounded-lg block">
              <button onClick={() => setOpen(!open)} className="mobile-menu-button py-3 px-3" aria-label="Toggle Menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <title>Menu Toggle</title>
                  <g fill="none" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
                  </g>
                </svg>
              </button>
            </div>
          </div>
          
          <div id="navigation-menu" className={`${open ? 'block' : 'hidden'} nav-menu hidden lg:flex lg:flex-row flex-col items-center justify-start lg:space-x-1 pb-3 lg:pb-0 font-['Inter'] text-sm`}>
            <Link to="/" className="nav-toggle py-2 px-3 hover:bg-[#c1e0d1] gap-2 rounded-lg block">Home</Link>
            
            <div className="relative group" onMouseEnter={() => setDropdown('blogs')} onMouseLeave={() => setDropdown(null)}>
              <div className="py-3">
                <button onClick={() => setDropdown(dropdown === 'blogs' ? null : 'blogs')} className="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] flex items-center gap-2 rounded-lg">
                  <span className="pointer-events-none">Blogs</span>
                  <svg className={`w-3 h-3 transition-transform duration-200 ${dropdown === 'blogs' ? 'rotate-180' : ''}`} xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                    <title>chevron-down</title>
                    <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
                  </svg>
                </button>
              </div>
              {dropdown === 'blogs' && (
                <div className="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl">
                  <a href="https://medium.com/@izzumiposhaf29" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Inzaghi's Group Blog</a>
                  <a href="https://inzaghiposuma.wordpress.com/blog-posts" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">WordPress Blog</a>
                </div>
              )}
            </div>

            <div className="relative group" onMouseEnter={() => setDropdown('portals')} onMouseLeave={() => setDropdown(null)}>
              <div className="py-3">
                <button onClick={() => setDropdown(dropdown === 'portals' ? null : 'portals')} className="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] flex items-center gap-2 rounded-lg">
                  <Link to="/portals">Portals</Link>
                  <svg className={`w-3 h-3 transition-transform duration-200 ${dropdown === 'portals' ? 'rotate-180' : ''}`} xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                    <title>chevron-down</title>
                    <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
                  </svg>
                </button>
              </div>
              {dropdown === 'portals' && (
                <div className="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl">
                  <Link to="/portals/widgets" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Widgets</Link>
                  <Link to="/portals/tech-tutorials" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Technology Tutorials</Link>
                  <Link to="/portals/projects" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">IT Project Lists</Link>
                  <Link to="/portals/career-portal" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Career Portal</Link>
                  <Link to="/portals/learning-materials" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Learning Materials</Link>
                  <Link to="/portals/entertainment-portal" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Entertainment Portal</Link>
                  <Link to="/portals/link-pages" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Link Pages</Link>
                  <Link to="/portals/muslim-portal" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Muslims Portal</Link>
                  <Link to="/portals/miscellaneous" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Miscellaneous</Link>
                </div>
              )}
            </div>

            <div className="relative group" onMouseEnter={() => setDropdown('apps')} onMouseLeave={() => setDropdown(null)}>
              <div className="py-3">
                <button onClick={() => setDropdown(dropdown === 'apps' ? null : 'apps')} className="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] flex items-center gap-2 rounded-lg">
                  <Link to="/apps">Apps</Link>
                  <svg className={`w-3 h-3 transition-transform duration-200 ${dropdown === 'apps' ? 'rotate-180' : ''}`} xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                    <title>chevron-down</title>
                    <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
                  </svg>
                </button>
              </div>
              {dropdown === 'apps' && (
                <div className="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl">
                  <Link to="/apps/converters" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Converters</Link>
                  <Link to="/apps/calculators" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Calculators</Link>
                  <Link to="/apps/generators" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Generators</Link>
                  <Link to="/apps/formatters" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Formatters</Link>
                  <Link to="/apps/file-converter" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">File Converter</Link>
                  <Link to="/apps/utilities" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Utilities</Link>
                  <Link to="/apps/tester-tools" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Tester Tools</Link>
                </div>
              )}
            </div>

            <Link to="/contact" className="nav-toggle py-2 px-3 hover:bg-[#c1e0d1] gap-2 rounded-lg block">Contact</Link>
            
            <div className="relative group" onMouseEnter={() => setDropdown('about-profile')} onMouseLeave={() => setDropdown(null)}>
              <div className="py-3">
                <button onClick={() => setDropdown(dropdown === 'about-profile' ? null : 'about-profile')} className="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] flex items-center gap-2 rounded-lg">
                  <span className="pointer-events-none">About &amp; Profile</span>
                  <svg className={`w-3 h-3 transition-transform duration-200 ${dropdown === 'about-profile' ? 'rotate-180' : ''}`} xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                    <title>chevron-down</title>
                    <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
                  </svg>
                </button>
              </div>
              {dropdown === 'about-profile' && (
                <div className="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl">
                  <Link to="/about" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">About</Link>
                  <Link to="/profile" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Profile</Link>
                </div>
              )}
            </div>

            <div className="relative group" onMouseEnter={() => setDropdown('group')} onMouseLeave={() => setDropdown(null)}>
              <div className="py-3">
                <button onClick={() => setDropdown(dropdown === 'group' ? null : 'group')} className="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] flex items-center gap-2 rounded-lg">
                  <Link to="/networks">Inzaghi's Group</Link>
                  <svg className={`w-3 h-3 transition-transform duration-200 ${dropdown === 'group' ? 'rotate-180' : ''}`} xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                    <title>chevron-down</title>
                    <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
                  </svg>
                </button>
              </div>
              {dropdown === 'group' && (
                <div className="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl">
                  <a href="/inzaghis-group/inzaghis-blog.php" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Inzaghi's Blog</a>
                  <a href="/inzaghis-group/inzaghis-media.php" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Inzaghi's Media</a>
                  <a href="/inzaghis-group/inzaghis-dev.php" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Inzaghi's Dev</a>
                  <a href="/inzaghis-group/inzaghis-archives.php" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Inzaghi's Archives</a>
                  <a href="/inzaghis-group/inzaghis-app.php" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Inzaghi's App</a>
                  <a href="/inzaghis-group/inzaghis-ai.php" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Inzaghi's AI</a>
                </div>
              )}
            </div>

            <div className="relative group" onMouseEnter={() => setDropdown('switch-sites')} onMouseLeave={() => setDropdown(null)}>
              <div className="py-3">
                <button onClick={() => setDropdown(dropdown === 'switch-sites' ? null : 'switch-sites')} className="dropdown-toggle py-2 px-3 hover:bg-[#c1e0d1] flex items-center gap-2 rounded-lg">
                  <span className="pointer-events-none">Switch to</span>
                  <svg className={`w-3 h-3 transition-transform duration-200 ${dropdown === 'switch-sites' ? 'rotate-180' : ''}`} xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                    <title>chevron-down</title>
                    <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
                  </svg>
                </button>
              </div>
              {dropdown === 'switch-sites' && (
                <div className="nav-drpdwn-list px-2 py-2 absolute inset-auto w-48 origin-top-right rounded-lg shadow-lg bg-[#dadeda] bg-opacity-[0.95] backdrop-filter backdrop-blur-xl">
                  <a href="https://sites.google.com/view/inzaghis-sites" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Old Inzaghi's Sites</a>
                  <a href="https://inzaghiposuma.wordpress.com/" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">WordPress Site</a>
                  <a href="https://inzaghi-site.webflow.io" className="block px-4 py-2 mt-2 text-sm font-normal bg-transparent rounded-lg hover:bg-white focus:bg-green-100 hover:text-gray-900 focus:outline-none focus:shadow-outline">Preview (Webflow)</a>
                </div>
              )}
            </div>
          </div>
        </div>
      </nav>

      {open && (
        <div className="lg:invisible navbar-menu fixed inset-0 z-50 bg-gray-900 bg-opacity-50" onClick={() => setOpen(false)}>
          <div className="lg:invisible relative bg-white w-auto sm:w-80 max-w-full h-full" onClick={(e) => e.stopPropagation()}>
            <div className="flex items-center justify-between px-4 py-3 bg-gray-200">
              <span className="text-xl font-semibold text-gray-900">
                <Link to="/" className="relative bg-gray-200 w-auto max-w-full h-full px-2 py-2">
                  <img src="/icons/inzaghis-sites-logo-vertical-transparent.png" title="Inzaghi's Sites" className="!h-14" id="logo-nav" alt="Inzaghi's Sites" />
                </Link>
              </span>
              <div className="menu-toggle lg:hidden flex items-center hover:bg-gray-300 gap-2 rounded-lg block">
                <button onClick={() => setOpen(false)} className="mobile-menu-button py-3 px-3" aria-label="Close Menu">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5" strokecurrentColor="currentColor" className="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>
              </div>
            </div>
            
            <nav className="px-3 py-2 space-y-2 overflow-y-auto h-[calc(100%-6rem)] max-h-full">
              <div className="mb-auto pt-4 p-[inherit] font-['Inter'] text-sm">
                <div className="pt-1">
                  <Link to="/" className="block text-gray-900 hover:bg-[#c1e0d1] py-3 px-4 rounded-lg">Home</Link>
                </div>
                
                <div className="relative pt-1">
                  <button onClick={() => setMobileDropdown(mobileDropdown === 'blogs' ? null : 'blogs')} className="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1]">
                    <span>Blogs</span>
                    <span className={`transition-colors duration-200 ${mobileDropdown === 'blogs' ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' : 'relative py-1 px-1 inline-flex items-center rounded-md'}`}>
                      <svg className={`w-3 h-3 transition-transform duration-200 ${mobileDropdown === 'blogs' ? 'rotate-180' : ''}`} xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                        <title>chevron-down</title>
                        <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
                      </svg>
                    </span>
                  </button>
                  {mobileDropdown === 'blogs' && (
                    <div className="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda]">
                      <a href="https://medium.com/@izzumiposhaf29" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Group Blog</a>
                      <a href="https://inzaghiposuma.wordpress.com/blog-posts" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">WordPress Blog</a>
                    </div>
                  )}
                </div>

                <div className="relative pt-1">
                  <button onClick={() => setMobileDropdown(mobileDropdown === 'portals' ? null : 'portals')} className="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1]">
                    <Link to="/portals">Portals</Link>
                    <span className={`transition-colors duration-200 ${mobileDropdown === 'portals' ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' : 'relative py-1 px-1 inline-flex items-center rounded-md'}`}>
                      <svg className={`w-3 h-3 transition-transform duration-200 ${mobileDropdown === 'portals' ? 'rotate-180' : ''}`} xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                        <title>chevron-down</title>
                        <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
                      </svg>
                    </span>
                  </button>
                  {mobileDropdown === 'portals' && (
                    <div className="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda]">
                      <Link to="/portals/widgets" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Widgets</Link>
                      <Link to="/portals/tech-tutorials" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Technology Tutorials</Link>
                      <Link to="/portals/projects" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">IT Project Lists</Link>
                      <Link to="/portals/career-portal" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Career Portal</Link>
                      <Link to="/portals/learning-materials" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Learning Materials</Link>
                      <Link to="/portals/entertainment-portal" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Entertainment Portal</Link>
                      <Link to="/portals/link-pages" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Link Pages</Link>
                      <Link to="/portals/muslim-portal" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Muslims Portal</Link>
                      <Link to="/portals/miscellaneous" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Miscellaneous</Link>
                    </div>
                  )}
                </div>

                <div className="relative pt-1">
                  <button onClick={() => setMobileDropdown(mobileDropdown === 'apps' ? null : 'apps')} className="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1]">
                    <Link to="/apps">Apps</Link>
                    <span className={`transition-colors duration-200 ${mobileDropdown === 'apps' ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' : 'relative py-1 px-1 inline-flex items-center rounded-md'}`}>
                      <svg className={`w-3 h-3 transition-transform duration-200 ${mobileDropdown === 'apps' ? 'rotate-180' : ''}`} xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                        <title>chevron-down</title>
                        <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
                      </svg>
                    </span>
                  </button>
                  {mobileDropdown === 'apps' && (
                    <div className="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda]">
                      <Link to="/apps/converters" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Converters</Link>
                      <Link to="/apps/calculators" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Calculators</Link>
                      <Link to="/apps/generators" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Generators</Link>
                      <Link to="/apps/formatters" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Formatters</Link>
                      <Link to="/apps/file-converter" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">File Converter</Link>
                      <Link to="/apps/utilities" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Utilities</Link>
                      <Link to="/apps/tester-tools" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Tester Tools</Link>
                    </div>
                  )}
                </div>

                <div className="pt-1">
                  <Link to="/contact" className="block text-gray-900 hover:bg-[#c1e0d1] py-3 px-4 rounded-lg">Contact</Link>
                </div>

                <div className="relative pt-1">
                  <button onClick={() => setMobileDropdown(mobileDropdown === 'about-profile' ? null : 'about-profile')} className="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1]">
                    <span>About &amp; Profile</span>
                    <span className={`transition-colors duration-200 ${mobileDropdown === 'about-profile' ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' : 'relative py-1 px-1 inline-flex items-center rounded-md'}`}>
                      <svg className={`w-3 h-3 transition-transform duration-200 ${mobileDropdown === 'about-profile' ? 'rotate-180' : ''}`} xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                        <title>chevron-down</title>
                        <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
                      </svg>
                    </span>
                  </button>
                  {mobileDropdown === 'about-profile' && (
                    <div className="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda]">
                      <Link to="/about" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">About</Link>
                      <Link to="/profile" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Profile</Link>
                    </div>
                  )}
                </div>

                <div className="relative pt-1">
                  <button onClick={() => setMobileDropdown(mobileDropdown === 'group' ? null : 'group')} className="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1]">
                    <Link to="/networks">Inzaghi's Group</Link>
                    <span className={`transition-colors duration-200 ${mobileDropdown === 'group' ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' : 'relative py-1 px-1 inline-flex items-center rounded-md'}`}>
                      <svg className={`w-3 h-3 transition-transform duration-200 ${mobileDropdown === 'group' ? 'rotate-180' : ''}`} xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                        <title>chevron-down</title>
                        <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
                      </svg>
                    </span>
                  </button>
                  {mobileDropdown === 'group' && (
                    <div className="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda]">
                      <a href="/inzaghis-group/inzaghis-blog.php" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Blog</a>
                      <a href="/inzaghis-group/inzaghis-media.php" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Media</a>
                      <a href="/inzaghis-group/inzaghis-dev.php" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Dev</a>
                      <a href="/inzaghis-group/inzaghis-archives.php" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's Archives</a>
                      <a href="/inzaghis-group/inzaghis-app.php" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's App</a>
                      <a href="/inzaghis-group/inzaghis-ai.php" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Inzaghi's AI</a>
                    </div>
                  )}
                </div>

                <div className="relative pt-1">
                  <button onClick={() => setMobileDropdown(mobileDropdown === 'switch-sites' ? null : 'switch-sites')} className="w-full flex items-center justify-between gap-2 py-3 px-4 rounded-lg text-gray-900 hover:bg-[#c1e0d1]">
                    <span>Switch to</span>
                    <span className={`transition-colors duration-200 ${mobileDropdown === 'switch-sites' ? 'relative py-1 px-1 inline-flex items-center rounded-md border border-gray-200 bg-gray-100 text-gray-800' : 'relative py-1 px-1 inline-flex items-center rounded-md'}`}>
                      <svg className={`w-3 h-3 transition-transform duration-200 ${mobileDropdown === 'switch-sites' ? 'rotate-180' : ''}`} xmlns="http://www.w3.org/2000/svg" fill="none" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor">
                        <title>chevron-down</title>
                        <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round"></path>
                      </svg>
                    </span>
                  </button>
                  {mobileDropdown === 'switch-sites' && (
                    <div className="nav-drpdwn-list w-full px-2 py-2 mt-2 mb-2 rounded-lg shadow-lg bg-[#dadeda]">
                      <a href="https://sites.google.com/view/inzaghis-sites" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Old Inzaghi's Sites</a>
                      <a href="https://inzaghiposuma.wordpress.com/" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">WordPress Site</a>
                      <a href="https://inzaghi-site.webflow.io" className="block px-4 py-2 text-sm font-normal bg-transparent rounded-lg hover:text-gray-900 hover:bg-white focus:bg-green-100 focus:outline-none">Preview (Webflow)</a>
                    </div>
                  )}
                </div>
              </div>
              
              <div className="pt-6 p-[inherit]">
                <button type="button" className="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 w-full">
                  <a className="button-link relative transition-all ease-in duration-75 rounded-md group-hover:bg-opacity-0" href="/includes/login-page.php">
                    Sign in
                  </a>
                </button>
              </div>
            </nav>
          </div>
        </div>
      )}
    </div>
  );
}
