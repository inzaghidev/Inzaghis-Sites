export default function About() {
  return (
    <main className="sitePage">
      <section className="siteHero siteAboutHero">
        <div>
          <p className="siteEyebrow">INZAGHI'S SITES</p>
          <h1>About Inzaghi&apos;s Sites</h1>
          <p className="siteLead">
            Platform layanan situs web untuk mengakses layanan, aplikasi, dan
            portal dari Inzaghi&apos;s Group.
          </p>
        </div>
      </section>
      <section className="siteContent siteTwoColumns">
        <article className="siteCopyCard">
          <h2>Satu pintu untuk seluruh layanan</h2>
          <p>
            Inzaghi&apos;s Sites merupakan platform layanan situs web untuk
            mengakses seluruh layanan Inzaghi&apos;s Group, termasuk
            Inzaghi&apos;s Blog, Inzaghi&apos;s Media, dan Inzaghi&apos;s Dev.
          </p>
          <p>
            Situs ini memudahkan akses ke berbagai aplikasi dan portal berbasis
            web, seperti widget, tutorial teknologi, konverter, kalkulator,
            generator, dan banyak lagi.
          </p>
          <p>
            Versi baru Inzaghi&apos;s Sites menggantikan situs lama dan terus
            dikembangkan sebagai rumah digital yang lebih cepat, teratur, dan
            mudah digunakan.
          </p>
          <div className="siteLinkList">
            <a
              href="http://inzaghisites.000webhostapp.com"
              target="_blank"
              rel="noreferrer"
            >
              Situs awal di 000webhost
            </a>
            <a
              href="https://inzaghi.wuaze.com"
              target="_blank"
              rel="noreferrer"
            >
              Situs Inzaghi&apos;s Sites di InfinityFree
            </a>
          </div>
        </article>
        <figure className="siteImageCard">
          <img
            src="/images/inzaghis-sites-by-inzaghis-group-corp.png"
            alt="Inzaghi's Sites"
          />
        </figure>
      </section>
    </main>
  );
}
