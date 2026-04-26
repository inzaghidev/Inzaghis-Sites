import { Link } from "react-router-dom";

export default function Footer() {
  return (
    <section className="footer">
      <div className="footer-container">
        <section className="footer-wrapper mb-10">
          <section className="inzaghis-corp-logo !mb-10">
            <Link to="/" id="logo">
              <img src="/icons/inzaghis-corp-logo-vertical-transparent.png" className="h-16 w-auto" id="logo-foot" alt="logo" />
            </Link>
          </section>
          <section className="footer-grid mx-0 lg:mx-2 mb-5 md:mb-6 lg:mb-2 text-left">
            <section className="footer-list">
              <section className="footer-title mb-6 text-xl font-semibold text-black uppercase">Special Pages</section>
              <nav>
                <ul>
                  <li><Link to="/about" className="text-gray-800 hover:text-blue-800 block">About</Link></li>
                  <li><Link to="/disclaimer" className="text-gray-800 hover:text-blue-800 block">Disclaimer</Link></li>
                  <li><Link to="/privacy-policy" className="text-gray-800 hover:text-blue-800 block">Privacy Policy</Link></li>
                  <li><Link to="/contact" className="text-gray-800 hover:text-blue-800 block">Contact</Link></li>
                  <li><Link to="/portals" className="text-gray-800 hover:text-blue-800 block">Portals</Link></li>
                  <li><Link to="/apps" className="text-gray-800 hover:text-blue-800 block">Apps</Link></li>
                  <li><a href="https://medium.com/@izzumiposhaf29" className="text-gray-800 hover:text-blue-800 block" target="_blank" rel="noreferrer">Blog</a></li>
                  <li><Link to="/sitemap" className="text-gray-800 hover:text-blue-800 block">Sitemap</Link></li>
                </ul>
              </nav>
            </section>
            <section className="footer-list">
              <section className="footer-title mb-6 text-xl font-semibold text-black uppercase">Portals</section>
              <nav>
                <ul>
                  <li><Link to="/portals/widgets" className="text-gray-800 hover:text-blue-800 block">Widgets</Link></li>
                  <li><Link to="/portals/tech-tutorials" className="text-gray-800 hover:text-blue-800 block">Technology Tutorials</Link></li>
                  <li><Link to="/portals/projects" className="text-gray-800 hover:text-blue-800 block">IT Project Lists</Link></li>
                  <li><Link to="/portals/career-portal" className="text-gray-800 hover:text-blue-800 block">Career Portal</Link></li>
                  <li><Link to="/portals/learning-materials" className="text-gray-800 hover:text-blue-800 block">Learning Materials</Link></li>
                  <li><Link to="/portals/entertainment-portal" className="text-gray-800 hover:text-blue-800 block">Entertainment Portal</Link></li>
                  <li><Link to="/portals/link-pages" className="text-gray-800 hover:text-blue-800 block">Link Pages</Link></li>
                  <li><Link to="/portals/muslim-portal" className="text-gray-800 hover:text-blue-800 block">Muslims Portal</Link></li>
                  <li><Link to="/portals/miscellaneous" className="text-gray-800 hover:text-blue-800 block">Miscellaneous</Link></li>
                  <li><Link to="/portals" className="text-gray-800 hover:text-blue-800 block">Portal Lists</Link></li>
                </ul>
              </nav>
            </section>
            <section className="footer-list">
              <section className="footer-title mb-6 text-xl font-semibold text-black uppercase">Apps &amp; Tools</section>
              <nav>
                <ul>
                  <li><Link to="/apps/converters" className="text-gray-800 hover:text-blue-800 block">Converters</Link></li>
                  <li><Link to="/apps/calculators" className="text-gray-800 hover:text-blue-800 block">Calculators</Link></li>
                  <li><Link to="/apps/generators" className="text-gray-800 hover:text-blue-800 block">Generators</Link></li>
                  <li><Link to="/apps/formatters" className="text-gray-800 hover:text-blue-800 block">Formatters</Link></li>
                  <li><Link to="/apps/file-converter" className="text-gray-800 hover:text-blue-800 block">File Converter</Link></li>
                  <li><Link to="/apps/utilities" className="text-gray-800 hover:text-blue-800 block">Utilities</Link></li>
                  <li><Link to="/apps/tester-tools" className="text-gray-800 hover:text-blue-800 block">Tester Tools</Link></li>
                  <li><Link to="/apps" className="text-gray-800 hover:text-blue-800 block">Other Tools</Link></li>
                </ul>
              </nav>
            </section>
            <section className="footer-list">
              <section className="footer-title mb-6 text-xl font-semibold text-black uppercase">Networks</section>
              <nav>
                <ul>
                  <li><Link to="/networks/blog" className="text-gray-800 hover:text-blue-800 block">Inzaghi's Blog</Link></li>
                  <li><Link to="/networks/media" className="text-gray-800 hover:text-blue-800 block">Inzaghi's Media</Link></li>
                  <li><a href="https://github.com/inzaghidev" className="text-gray-800 hover:text-blue-800 block" target="_blank" rel="noreferrer">Inzaghi's Dev (GitHub)</a></li>
                  <li><a href="https://sites.google.com/view/inzaghis-sites" className="text-gray-800 hover:text-blue-800 block" target="_blank" rel="noreferrer">Inzaghi's Sites (Old)</a></li>
                  <li><a href="https://drive.google.com/drive/folders/1gAMLO2AdXqsp75ymexKwXllKbLMTfhxa" className="text-gray-800 hover:text-blue-800 block" target="_blank" rel="noreferrer">Inzaghi's Archives</a></li>
                  <li><Link to="/networks/ai" className="text-gray-800 hover:text-blue-800 block">Inzaghi's AI</Link></li>
                  <li><Link to="/networks" className="text-gray-800 hover:text-blue-800 block">Inzaghi's Group Network Lists</Link></li>
                </ul>
              </nav>
            </section>
            <section className="footer-list">
              <section className="footer-title mb-6 text-xl font-semibold text-black uppercase">Quick Link</section>
              <nav>
                <ul className="mb-5">
                  <li><a href="https://inzaghiposuma.wordpress.com/blog-posts" className="text-gray-800 hover:text-blue-800 block" target="_blank" rel="noreferrer">WordPress Blog</a></li>
                  <li><a href="https://medium.com/@izzumiposhaf29" className="text-gray-800 hover:text-blue-800 block">Inzaghi's Sites Blog</a></li>
                  <li><a href="https://linktr.ee/inzaghigroup" className="text-gray-800 hover:text-blue-800 block" target="_blank" rel="noreferrer">Linktree Inzaghi's Group</a></li>
                  <li><a href="https://old.inzaghi.wuaze.com" className="font-semibold text-green-900 hover:text-green-600 block"><b>Back to Old UI (Legacy)</b></a></li>
                  <li><a href="https://preview.inzaghi.wuaze.com" className="font-semibold text-pink-900 hover:text-pink-600 block"><b>Go to the Experimental (Preview)</b></a></li>
                </ul>
                <a className="github-button block" href="https://github.com/inzaghidev/Inzaghis-Sites" data-color-scheme="no-preference: light; light: light; dark: dark;" data-size="large" aria-label="Look at @inzaghidev">Look at @inzaghidev</a>
              </nav>
            </section>
          </section>
        </section>
        <section className="footer-bottom">
          <div className="footer-copyright flex items-center gap-1 text-xs sm:text-sm text-gray-700">
            <span>© 2026</span>
            <Link className="font-medium hover:text-blue-600" to="/">Inzaghi's Corp. (InzaTech)</Link>
            <span>All rights reserved.</span>
          </div>
        </section>
      </div>
    </section>
  );
}
