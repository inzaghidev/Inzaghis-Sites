import { useEffect } from "react";
import { Helmet } from "react-helmet-async";

export default function InzaghisDev() {
  useEffect(() => {
    window.scrollTo(0, 0);
  }, []);
  return (
    <>
      <Helmet>
        <title>Inzaghi's Dev</title>
      </Helmet>
      <section className="inzaghis-group-pages inzaghisdev-slider">
        <div className="page-wrapper inzagroup-pages">
          <h1 className="my-4 page-title">Inzaghi's Dev</h1>
          <div className="text-container mb-8">
            <p className="text-description">
              Inzaghi's Dev merupakan kumpulan Proyek TI untuk menyimpan Kode
              Program seperti Website, Aplikasi Sederhana, Program-program
              Dasar, hingga API.
            </p>
            <section className="group-button">
              <a
                href="https://github.com/inzaghidev"
                target="_blank"
                className="main-button"
              >
                Click here
              </a>
            </section>
          </div>
          <section className="group-content">
            <div id="hcg-slider-1" className="hcg-slider">
              <div className="hcg-slide-container content-description shadow-xl rounded-lg ring-1 ring-purple-400 m-0">
                <div className="hcg-slider-body">
                  <a className="hcg-slides animated" style={{ display: 'flex' }}>
                    <img
                      src="/images/inzaghis-dev-by-inzaghis-group-corp.png"
                      alt="Inzaghi's Dev"
                    />
                  </a>
                </div>
              </div>
            </div>
          </section>
          <div className="bg-white shadow-xl rounded-lg p-6 ring-1 ring-purple-400"></div>
        </div>
      </section>
    </>
  );
}
