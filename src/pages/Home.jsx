import { Link } from "react-router-dom";

const portals = [
  [
    "Widgets",
    "Kumpulan widget serbaguna untuk berbagai kebutuhan.",
    "/images/widgets-by-portals.png",
    "/portals/widgets",
  ],
  [
    "Technology Tutorials",
    "Tutorial dan materi teknologi untuk pembelajaran IT.",
    "/images/tech-tutorials-by-portals.png",
    "/portals/tech-tutorials",
  ],
  [
    "IT Project Lists",
    "Daftar proyek IT sebagai inspirasi dan referensi.",
    "/images/it-project-lists-by-portals.png",
    "/portals/projects",
  ],
];
const apps = [
  [
    "Converters",
    "Konversi suhu, panjang, sistem bilangan, dan lainnya.",
    "/images/converters-by-pages-apps.png",
    "/apps/converters",
  ],
  [
    "Calculators",
    "Kalkulator sederhana, ilmiah, kesehatan, dan keuangan.",
    "/images/calculators-by-pages-apps.png",
    "/apps/calculators",
  ],
  [
    "Generators",
    "Generator teks, angka, dan berbagai kebutuhan lainnya.",
    "/images/generators-by-pages-apps.png",
    "/apps/generators",
  ],
];

function Collection({ title, description, items }) {
  return (
    <section className="siteSection">
      <div className="siteSectionHeading">
        <div>
          <p className="siteEyebrow">EXPLORE</p>
          <h2>{title}</h2>
          <p>{description}</p>
        </div>
        <Link to={`/${title.toLowerCase()}`} className="siteTextLink">
          Lihat semua →
        </Link>
      </div>
      <div className="siteCardGrid">
        {items.map(([name, text, image, link]) => (
          <article className="siteFeatureCard" key={name}>
            <img src={image} alt={name} />
            <div>
              <h3>{name}</h3>
              <p>{text}</p>
              <Link to={link}>
                Explore <span>→</span>
              </Link>
            </div>
          </article>
        ))}
      </div>
    </section>
  );
}

export default function Home() {
  return (
    <main className="sitePage">
      <section className="siteHero siteHomeHero">
        <div>
          <p className="siteEyebrow">DIGITAL SERVICES HUB</p>
          <h1>
            Welcome to
            <br />
            Inzaghi&apos;s Sites.
          </h1>
          <p className="siteLead">
            Akses aplikasi, portal, dan jaringan digital Inzaghi&apos;s Group
            dalam satu situs yang rapi dan mudah digunakan.
          </p>
          <div className="siteHeroActions">
            <Link className="sitePrimaryButton" to="/about">
              Tentang Kami
            </Link>
            <Link className="siteSecondaryButton" to="/networks">
              Our Networks
            </Link>
          </div>
        </div>
        <img
          src="/images/website-illustration-transparent-3d.png"
          alt="Website illustration"
        />
      </section>
      <Collection
        title="Portals"
        description="Portal untuk widget, tutorial, materi pembelajaran, dan lainnya."
        items={portals}
      />
      <Collection
        title="Apps"
        description="Aplikasi praktis untuk konversi, kalkulasi, generator, dan utilitas."
        items={apps}
      />
      <section className="siteNetworkBanner">
        <div>
          <p className="siteEyebrow">INZAGHI'S GROUP</p>
          <h2>Terhubung dengan jaringan kami.</h2>
          <p>
            Temukan berbagai layanan konten, teknologi, dan platform kreatif
            dari Inzaghi&apos;s Group.
          </p>
          <Link className="sitePrimaryButton" to="/networks">
            Lihat jaringan
          </Link>
        </div>
        <img
          src="/images/inzaghis-group-partners.png"
          alt="Inzaghi's Group partners"
        />
      </section>
    </main>
  );
}
