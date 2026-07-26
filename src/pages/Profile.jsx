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
    <main className="sitePage profilePage">
      <section className="profileIntro">
        <p className="siteEyebrow">ABOUT THE DEVELOPER</p>
        <h1>Inzaghi Posuma Al Kahfi</h1>
        <p>
          Software developer yang berfokus pada web, mobile, dan solusi digital
          yang mudah digunakan.
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
            <a className="siteSecondaryButton" href="#experience">
              Resume
            </a>
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
              I&apos;m Inzaghi Posuma Al Kahfi, a fresh graduate in Information
              Technology from Pradita University. I have hands-on experience in
              web and mobile development, IoT projects, and data-driven
              applications using Laravel, React.js, Flutter, JavaScript, and
              Python.
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
  );
}
