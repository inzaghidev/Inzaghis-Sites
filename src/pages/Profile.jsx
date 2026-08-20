import { useState, useRef, useEffect } from "react";
import { Helmet } from "react-helmet-async";

function PortfolioDropdown() {
  const [open, setOpen] = useState(false);
  const ref = useRef(null);

  useEffect(() => {
    function handleClickOutside(e) {
      if (ref.current && !ref.current.contains(e.target)) {
        setOpen(false);
      }
    }
    document.addEventListener("mousedown", handleClickOutside);
    return () => document.removeEventListener("mousedown", handleClickOutside);
  }, []);

  return (
    <div className="relative inline-flex w-full" ref={ref}>
      <button
        onClick={() => setOpen((prev) => !prev)}
        className="inline-flex w-full justify-center gap-x-1.5 rounded-lg bg-gray-300 px-3 py-3 text-sm font-semibold text-gray-700 shadow-xs inset-ring-1 inset-ring-gray-300 hover:bg-gray-400"
      >
        Portofolio &amp; CV
        <svg
          viewBox="0 0 20 20"
          fill="currentColor"
          aria-hidden="true"
          style={{
            transition: "transform 200ms",
            transform: open ? "rotate(180deg)" : "rotate(0deg)",
          }}
          className="-mr-1 size-5 text-gray-700"
        >
          <path
            fillRule="evenodd"
            clipRule="evenodd"
            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
          />
        </svg>
      </button>

      {open && (
        <div
          className="absolute left-0 right-0 top-full z-50 mt-1 rounded-lg bg-gray-100 shadow-xl outline outline-1 outline-black/5"
          style={{
            animation: "dropdownIn 100ms ease-out forwards",
          }}
        >
          <div className="py-1">
            <a
              href="https://portofolio-inzaghi-posuma.vercel.app"
              target="_blank"
              rel="noreferrer"
              className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-300 hover:text-gray-900"
            >
              Portofolio
            </a>
            <a
              href="https://drive.google.com/file/d/11A2emY6ZicngDT8y8AinzfMLpwFs3mhq/view"
              target="_blank"
              rel="noreferrer"
              className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-300 hover:text-gray-900"
            >
              ATS CV/Resume
            </a>
          </div>
        </div>
      )}
    </div>
  );
}

const skills = ["JavaScript", "React", "Node.js", "HTML & CSS", "Tailwind CSS"];
const experience = [
  [
    "Web Developer",
    "ABC Company",
    "2017 – 2019",
    "Mengerjakan antarmuka web yang responsif serta membantu pengembangan aplikasi digital.",
  ],
  [
    "Software Developer",
    "Inzaghi's Group",
    "2023 – Sekarang",
    "Mengembangkan situs, aplikasi, dan layanan digital di lingkungan Inzaghi's Group.",
  ],
];

export default function Profile() {
  return (
    <>
      <Helmet>
        <title>Profile - Inzaghi's Sites</title>
      </Helmet>
      <main className="sitePage profilePage">
        <section className="profileIntro">
          <p className="siteEyebrow">ABOUT THE DEVELOPER</p>
          <h1>Inzaghi Posuma Al Kahfi</h1>
          <p>
            Software developer yang berfokus pada web, mobile, dan solusi
            digital yang mudah digunakan.
          </p>
        </section>
        <div className="profileLayout">
          <aside className="profileSidebar rounded-xl ring-2 ring-green-500 ring-offset-2 bg-white">
            <img
              src="/images/inzaghi-posuma-alkahfi.jpg"
              alt="Inzaghi Posuma Al Kahfi"
            />
            <h2>Inzaghi Posuma Al Kahfi</h2>
            <p>Software Developer</p>
            <div className="profileActions">
              <a
                className="sitePrimaryButton"
                href="https://enzatech.blogspot.com/p/contact-and-profile.html"
                target="_blank"
                rel="noreferrer"
              >
                Contact
              </a>
              <PortfolioDropdown />
            </div>
            <div className="profileBlock">
              <h3>Skills</h3>
              <ul>
                {skills.map((skill) => (
                  <li key={skill}>{skill}</li>
                ))}
              </ul>
            </div>
            <div className="profileBlock">
              <h3>Education</h3>
              <p>
                <strong>Information Technology</strong>
                <span>Pradita University · 2021 – 2025</span>
              </p>
              <p>
                <strong>Science Studies</strong>
                <span>Islamic Village High School · 2018 – 2021</span>
              </p>
            </div>
          </aside>
          <section className="profileContent">
            <div className="profileBlock">
              <h2>About me</h2>
              <p>
                I&apos;m Inzaghi Posuma Al Kahfi, a fresh graduate in
                Information Technology from Pradita University. I have hands-on
                experience in web and mobile development, IoT projects, and
                data-driven applications using Laravel, React.js, Flutter,
                JavaScript, and Python.
              </p>
              <div className="profileSocial">
                <a
                  href="https://www.linkedin.com"
                  target="_blank"
                  rel="noreferrer"
                >
                  LinkedIn
                </a>
                <a
                  href="https://github.com/inzaghidev"
                  target="_blank"
                  rel="noreferrer"
                >
                  GitHub
                </a>
                <a
                  href="https://www.instagram.com/enzapost"
                  target="_blank"
                  rel="noreferrer"
                >
                  Instagram
                </a>
              </div>
            </div>
            <div className="profileBlock" id="experience">
              <h2>Experience</h2>
              {experience.map(([role, company, period, text]) => (
                <article className="profileTimeline" key={company}>
                  <div>
                    <h3>{role}</h3>
                    <p>{text}</p>
                  </div>
                  <p className="profileMeta">
                    <strong>{company}</strong>
                    <span>{period}</span>
                  </p>
                </article>
              ))}
            </div>
            <div className="profileBlock">
              <h2>Projects</h2>
              <article className="profileTimeline">
                <div>
                  <h3>Inzaghi&apos;s Sites</h3>
                  <p>
                    Platform pusat untuk akses layanan dan produk digital
                    Inzaghi&apos;s Group.
                  </p>
                </div>
                <p className="profileMeta">
                  <strong>Open Source</strong>
                  <span>React.js</span>
                </p>
              </article>
            </div>
          </section>
        </div>
      </main>
    </>
  );
}
