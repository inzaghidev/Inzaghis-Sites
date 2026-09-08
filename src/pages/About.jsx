import { Helmet } from "react-helmet-async";

export default function About() {
  return (
    <>
      <Helmet>
        <title>About - Inzaghi's Sites</title>
      </Helmet>
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
              Inzaghi's Sites yang baru ini digunakan sebagai Situs Web untuk
              mengakses Konten-konten apapun, baik itu dari Inzaghi's Blog
              maupun di Inzaghi's Media. Dan juga, Situs kami di sini akan
              menggantikan Website yang lama di Google Sites.
            </p>
            <p>
              Inzaghi's Sites juga memudahkan Anda untuk mengakses Aplikasi dan
              Portal apapun yang berbasis Web seperti yang tersedia pada Portals
              dan Apps seperti Widget, Tutorial Teknologi, Konverter,
              Kalkulator, Generator, dan lain-lainnya.
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
    </>
  );
}
