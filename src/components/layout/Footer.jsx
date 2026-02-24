import { Link } from "react-router-dom";
import {
  FaGithub,
  FaInstagram,
  FaYoutube,
  FaTwitter,
  FaTiktok,
  FaLinkedin,
  FaSpotify,
} from "react-icons/fa";

export default function Footer() {
  const currentYear = new Date().getFullYear();

  const footerSections = {
    portals: {
      title: "Portals",
      links: [
        { name: "Widgets", path: "/portals/widgets" },
        { name: "Technology Tutorials", path: "/portals/tech-tutorials" },
        { name: "IT Project Lists", path: "/portals/projects" },
        { name: "Career Portal", path: "/portals/career-portal" },
        { name: "Learning Materials", path: "/portals/learning-materials" },
        { name: "Entertainment Portal", path: "/portals/entertainment-portal" },
        { name: "Link Pages", path: "/portals/link-pages" },
        { name: "Muslims Portal", path: "/portals/muslim-portal" },
        { name: "Miscellaneous", path: "/portals/miscellaneous" },
        { name: "Portal Lists", path: "/portals" },
      ],
    },
    apps: {
      title: "Apps & Tools",
      links: [
        { name: "Converters", path: "/apps/converters" },
        { name: "Calculators", path: "/apps/calculators" },
        { name: "Generators", path: "/apps/generators" },
        { name: "Formatters", path: "/apps/formatters" },
        { name: "File Converters", path: "/apps/file-converters" },
        { name: "Utilities", path: "/apps/utilities" },
        { name: "Tester Tools", path: "/apps/tester-tools" },
        { name: "App Tools Lists", path: "/apps" },
      ],
    },
    networks: {
      title: "Networks",
      links: [
        { name: "Inzaghi's Blog", path: "/networks/blog" },
        { name: "Inzaghi's Media", path: "/networks/media" },
        { name: "Inzaghi's Dev", path: "/networks/dev" },
        {
          name: "Inzaghi's Archives",
          path: "https://drive.google.com/drive/folders/1gAMLO2AdXqsp75ymexKwXllKbLMTfhxa",
          external: true,
        },
        { name: "Inzaghi's AI", path: "/networks/ai" },
        { name: "Inzaghi's Group Network", path: "/networks" },
      ],
    },
    special: {
      title: "Special Pages",
      links: [
        { name: "About", path: "/about" },
        { name: "Profile", path: "/profile" },
        { name: "Contact", path: "/contact" },
        {
          name: "Blog",
          path: "https://medium.com/@izzumiposhaf29",
          external: true,
        },
      ],
    },
    quick: {
      title: "Quick Link",
      links: [
        {
          name: "WordPress Blog",
          path: "https://inzaghiposuma.wordpress.com/blog-posts",
          external: true,
        },
        {
          name: "Inzaghi's Sites Blog",
          path: "https://medium.com/@izzumiposhaf29",
          external: true,
        },
        {
          name: "Linktree Inzaghi's Group",
          path: "https://linktr.ee/inzaghigroup",
          external: true,
        },
      ],
    },
  };

  const socialLinks = [
    {
      name: "Instagram",
      url: "https://www.instagram.com/enzapost",
      icon: FaInstagram,
    },
    { name: "Twitter", url: "https://x.com/InzaTechMedia", icon: FaTwitter },
    {
      name: "YouTube",
      url: "https://www.youtube.com/@enzavlogpost",
      icon: FaYoutube,
    },
    {
      name: "TikTok",
      url: "https://www.tiktok.com/@enzapostmedia",
      icon: FaTiktok,
    },
    { name: "GitHub", url: "https://github.com/inzaghidev", icon: FaGithub },
    { name: "Spotify", url: "https://github.com/inzaghidev", icon: FaSpotify },
  ];

  return (
    <footer className="footer">
      <div className="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-2 font-Inter">
        <div className="lg:flex lg:items-start lg:gap-8">
          {/* Logo Section */}
          <section className="inzaghis-corp-logo flex justify-center md:justify-start text-teal-600">
            <Link to="/">
              <img
                src="/icons/inzaghis-corp-logo-vertical-transparent.png"
                className="h-16 w-auto"
                alt="Inzaghi's Corp Logo"
              />
            </Link>
          </section>

          {/* Footer Links Grid */}
          <div className="text-center md:text-left mt-8 grid grid-cols-2 gap-8 md:grid-cols-3 md:gap-y-12 lg:mt-0 lg:grid-cols-5 lg:gap-y-16">
            {/* Portals Section */}
            <div className="col-span-2 sm:col-span-1">
              <p className="footer-title font-medium text-xl font-semibold text-gray-900 uppercase">
                {footerSections.portals.title}
              </p>
              <ul className="mt-6 space-y-4 text-sm">
                {footerSections.portals.links.map((link) => (
                  <li key={link.path}>
                    {link.external ? (
                      <a
                        href={link.path}
                        target="_blank"
                        rel="noopener noreferrer"
                        className="text-gray-700 dark:text-gray-300 transition hover:text-blue-600 dark:hover:text-blue-400 hover:opacity-75"
                      >
                        {link.name}
                      </a>
                    ) : (
                      <Link
                        to={link.path}
                        className="text-gray-700 dark:text-gray-300 transition hover:text-blue-600 dark:hover:text-blue-400 hover:opacity-75"
                      >
                        {link.name}
                      </Link>
                    )}
                  </li>
                ))}
              </ul>
            </div>

            {/* Apps & Tools Section */}
            <div className="col-span-2 sm:col-span-1">
              <p className="footer-title font-medium text-xl font-semibold text-gray-900 uppercase">
                {footerSections.apps.title}
              </p>
              <ul className="mt-6 space-y-4 text-sm">
                {footerSections.apps.links.map((link) => (
                  <li key={link.path}>
                    <Link
                      to={link.path}
                      className="text-gray-700 dark:text-gray-300 transition hover:text-blue-600 dark:hover:text-blue-400 hover:opacity-75"
                    >
                      {link.name}
                    </Link>
                  </li>
                ))}
              </ul>
            </div>

            {/* Networks Section */}
            <div className="col-span-2 sm:col-span-1">
              <p className="footer-title font-medium text-xl font-semibold text-gray-900 uppercase">
                {footerSections.networks.title}
              </p>
              <ul className="mt-6 space-y-4 text-sm">
                {footerSections.networks.links.map((link) => (
                  <li key={link.path}>
                    {link.external ? (
                      <a
                        href={link.path}
                        target="_blank"
                        rel="noopener noreferrer"
                        className="text-gray-700 dark:text-gray-300 transition hover:text-blue-600 dark:hover:text-blue-400 hover:opacity-75"
                      >
                        {link.name}
                      </a>
                    ) : (
                      <Link
                        to={link.path}
                        className="text-gray-700 dark:text-gray-300 transition hover:text-blue-600 dark:hover:text-blue-400 hover:opacity-75"
                      >
                        {link.name}
                      </Link>
                    )}
                  </li>
                ))}
              </ul>
            </div>

            {/* Special Pages Section */}
            <div className="col-span-2 sm:col-span-1">
              <p className="footer-title font-medium text-xl font-semibold text-gray-900 uppercase">
                {footerSections.special.title}
              </p>
              <ul className="mt-6 space-y-4 text-sm">
                {footerSections.special.links.map((link) => (
                  <li key={link.path}>
                    {link.external ? (
                      <a
                        href={link.path}
                        target="_blank"
                        rel="noopener noreferrer"
                        className="text-gray-700 dark:text-gray-300 transition hover:text-blue-600 dark:hover:text-blue-400 hover:opacity-75"
                      >
                        {link.name}
                      </a>
                    ) : (
                      <Link
                        to={link.path}
                        className="text-gray-700 dark:text-gray-300 transition hover:text-blue-600 dark:hover:text-blue-400 hover:opacity-75"
                      >
                        {link.name}
                      </Link>
                    )}
                  </li>
                ))}
              </ul>
            </div>

            {/* Quick Links Section */}
            <div className="col-span-2 sm:col-span-1">
              <p className="footer-title font-medium text-xl font-semibold text-gray-900 uppercase">
                {footerSections.quick.title}
              </p>
              <ul className="mt-6 space-y-4 text-sm">
                {footerSections.quick.links.map((link) => (
                  <li key={link.path}>
                    <a
                      href={link.path}
                      target="_blank"
                      rel="noopener noreferrer"
                      className="text-gray-700 dark:text-gray-300 transition hover:text-blue-600 dark:hover:text-blue-400 hover:opacity-75"
                    >
                      {link.name}
                    </a>
                  </li>
                ))}
              </ul>
            </div>

            {/* Social Media Links */}
            <ul className="col-span-2 flex justify-start gap-6 lg:col-span-5 lg:justify-end">
              {socialLinks.map((social) => {
                const Icon = social.icon;
                return (
                  <li key={social.name}>
                    <a
                      href={social.url}
                      target="_blank"
                      rel="noopener noreferrer"
                      className="text-gray-700 dark:text-gray-300 transition hover:text-blue-600 dark:hover:text-blue-400 hover:opacity-75"
                      aria-label={social.name}
                    >
                      <Icon size={24} />
                    </a>
                  </li>
                );
              })}
            </ul>
          </div>
        </div>

        {/* Bottom Section */}
        <div className="mt-8 border-t border-gray-100 dark:border-gray-800 pt-8">
          <div className="sm:flex sm:justify-between">
            <div className="flex items-center gap-1 text-xs md:text-sm text-gray-600 dark:text-gray-400">
              <span>&copy; {currentYear}</span>
              <Link
                className="font-medium hover:text-blue-600 dark:hover:text-blue-400"
                to="/"
              >
                Inzaghi's Corp. (InzaTech)
              </Link>
              <span>All rights reserved.</span>
            </div>

            <ul className="mt-8 flex flex-wrap justify-start gap-4 text-xs sm:mt-0 lg:justify-end">
              <li>
                <Link
                  to="/disclaimer"
                  className="text-gray-600 dark:text-gray-400 transition hover:text-blue-700 dark:hover:text-blue-400 hover:opacity-75"
                >
                  Terms & Conditions
                </Link>
              </li>

              <li>
                <Link
                  to="/privacy-policy"
                  className="text-gray-600 dark:text-gray-400 transition hover:text-blue-700 dark:hover:text-blue-400 hover:opacity-75"
                >
                  Privacy Policy
                </Link>
              </li>

              <li>
                <a
                  href="#"
                  className="text-gray-600 dark:text-gray-400 transition hover:text-blue-700 dark:hover:text-blue-400 hover:opacity-75"
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
