import { useEffect, useRef, useState } from "react";
import { Link, useLocation } from "react-router-dom";
import "./Navbar.css";

const menus = [
  {
    label: "Blogs",
    items: [
      {
        label: "Inzaghi's Group Blog",
        href: "https://medium.com/@izzumiposhaf29",
      },
      {
        label: "WordPress Blog",
        href: "https://inzaghiposuma.wordpress.com/blog-posts",
      },
      {
        label: "Inzaghi's Blog Aggregator",
        target: "_blank",
        href: "https://inzaghis-blog-aggregator.vercel.app",
      },
    ],
  },
  {
    label: "Portals",
    to: "/portals",
    items: [
      { label: "Widgets", to: "/portals/widgets" },
      { label: "Technology Tutorials", to: "/portals/tech-tutorials" },
      { label: "IT Project Lists", to: "/portals/projects" },
      { label: "Career Portal", to: "/portals/career-portal" },
      { label: "Learning Materials", to: "/portals/learning-materials" },
      { label: "Entertainment Portal", to: "/portals/entertainment-portal" },
      { label: "Link Pages", to: "/portals/link-pages" },
      { label: "Muslims Portal", to: "/portals/muslim-portal" },
      { label: "Miscellaneous", to: "/portals/miscellaneous" },
    ],
    allLabel: "All Portals",
  },
  {
    label: "Apps",
    to: "/apps",
    items: [
      { label: "Converters", to: "/apps/converters" },
      { label: "Calculators", to: "/apps/calculators" },
      { label: "Generators", to: "/apps/generators" },
      { label: "Formatters", to: "/apps/formatters" },
      { label: "File Converter", to: "/apps/file-converter" },
      { label: "Utilities", to: "/apps/utilities" },
      { label: "Tester Tools", to: "/apps/tester-tools" },
    ],
    allLabel: "All Apps",
  },
  {
    label: "About & Profile",
    items: [
      { label: "About", to: "/about" },
      { label: "Profile", to: "/profile" },
      { label: "Disclaimer", to: "/disclaimer" },
      { label: "Privacy Policy", to: "/privacy-policy" },
    ],
  },
  {
    label: "Inzaghi's Group",
    to: "/networks",
    items: [
      { label: "Inzaghi's Blog", href: "/inzaghis-group/inzaghis-blog" },
      { label: "Inzaghi's Media", href: "/inzaghis-group/inzaghis-media" },
      { label: "Inzaghi's Dev", href: "/inzaghis-group/inzaghis-dev" },
      {
        label: "Inzaghi's Archives",
        href: "/inzaghis-group/inzaghis-archives",
      },
      { label: "Inzaghi's App", href: "/inzaghis-group/inzaghis-app" },
      { label: "Inzaghi's AI", href: "/inzaghis-group/inzaghis-ai" },
    ],
    allLabel: "All Networks",
  },
  {
    label: "Switch to",
    items: [
      {
        label: "Old Inzaghi's Sites",
        href: "https://sites.google.com/view/inzaghis-sites",
      },
      { label: "WordPress Site", href: "https://inzaghiposuma.wordpress.com/" },
      { label: "Preview (Webflow)", href: "https://inzaghi-site.webflow.io" },
    ],
  },
];

function Chevron({ open }) {
  return (
    <svg
      className={`siteNavChevron ${open ? "isOpen" : ""}`}
      viewBox="0 0 24 24"
      aria-hidden="true"
    >
      <path
        d="m6 9 6 6 6-6"
        fill="none"
        stroke="currentColor"
        strokeWidth="2"
        strokeLinecap="round"
        strokeLinejoin="round"
      />
    </svg>
  );
}

function NavItem({ item, onNavigate }) {
  if (item.to) {
    return (
      <Link to={item.to} onClick={onNavigate} className="siteNavDropdownLink">
        {item.label}
      </Link>
    );
  }

  const { label, href, ...props } = item;

  return (
    <a
      href={href}
      onClick={onNavigate}
      className="siteNavDropdownLink"
      {...props}
      rel={props.target === "_blank" ? "noopener noreferrer" : props.rel}
    >
      {label}
    </a>
  );
}

export default function Navbar() {
  const location = useLocation();
  const [activeMenu, setActiveMenu] = useState(null);
  const [mobileOpen, setMobileOpen] = useState(false);
  const navRef = useRef(null);

  useEffect(() => {
    const closeOnOutsideClick = (event) => {
      if (!navRef.current?.contains(event.target)) setActiveMenu(null);
    };
    document.addEventListener("mousedown", closeOnOutsideClick);
    return () => document.removeEventListener("mousedown", closeOnOutsideClick);
  }, []);

  const toggleMenu = (label) =>
    setActiveMenu((current) => (current === label ? null : label));
  const isCurrent = (path) =>
    path === "/"
      ? location.pathname === path
      : location.pathname.startsWith(path);
  const closeAll = () => {
    setActiveMenu(null);
    setMobileOpen(false);
  };

  return (
    <header className="siteNav" ref={navRef}>
      <div className="siteNavInner">
        <Link
          to="/"
          className="siteNavBrand"
          aria-label="Inzaghi's Sites home"
          onClick={closeAll}
        >
          <img
            src="/icons/inzaghis-sites-logo-vertical-transparent.png"
            alt="Inzaghi's Sites"
          />
        </Link>

        <nav
          className={`siteNavLinks ${mobileOpen ? "mobileOpen" : ""}`}
          aria-label="Main navigation"
        >
          <Link
            to="/"
            className={`siteNavLink ${isCurrent("/") ? "active" : ""}`}
            onClick={closeAll}
          >
            Home
          </Link>
          <Link
            to="/contact"
            className={`siteNavLink ${isCurrent("/contact") ? "active" : ""}`}
            onClick={closeAll}
          >
            Contact
          </Link>
          {menus.map((menu) => {
            const open = activeMenu === menu.label;
            const menuIsCurrent = menu.to && isCurrent(menu.to);
            return (
              <div className="siteNavMenu" key={menu.label}>
                <button
                  type="button"
                  className={`siteNavLink siteNavMenuButton ${menuIsCurrent ? "active" : ""}`}
                  onClick={() => toggleMenu(menu.label)}
                  aria-expanded={open}
                >
                  {menu.label}
                  <Chevron open={open} />
                </button>
                {open && (
                  <div className="siteNavDropdown">
                    {menu.items.map((item) => (
                      <NavItem
                        item={item}
                        onNavigate={closeAll}
                        key={item.label}
                      />
                    ))}
                    {menu.allLabel && (
                      <>
                        <div className="siteNavDivider" />
                        <Link
                          className="siteNavDropdownLink siteNavAllLink"
                          to={menu.to}
                          onClick={closeAll}
                        >
                          {menu.allLabel}
                        </Link>
                      </>
                    )}
                  </div>
                )}
              </div>
            );
          })}
        </nav>

        <div className="siteNavActions">
          <a className="siteNavSignIn" href="/includes/login-page">
            Sign in
          </a>
          <button
            type="button"
            className="siteNavMobileToggle"
            onClick={() => setMobileOpen((open) => !open)}
            aria-label="Toggle navigation"
            aria-expanded={mobileOpen}
          >
            <span />
            <span />
            <span />
          </button>
        </div>
      </div>
    </header>
  );
}
