import { useEffect } from "react";
import { Helmet } from "react-helmet-async";

export default function InzagisApp() {
  useEffect(() => {
    window.scrollTo(0, 0);
  }, []);
  return (
    <>
      <Helmet>
        <title>Inzaghi's App</title>
      </Helmet>
      <section className="inzaghis-group-pages inzaghisapp-slider">
        <div className="page-wrapper inzagroup-pages">
          <h1 className="my-4 page-title">Inzaghi's App</h1>
          <div className="text-container mb-8">
            <p className="text-description">
              Inzaghi's App merupakan Aplikasi Konten-konten yang menyajikan
              apapun dengan Tampilan Versi Mobile dari Inzaghi's Sites, seperti
              Inzaghi's Blog, Inzaghi's Media, dan Inzaghi's Group. Nantinya,
              Inzaghi's App akan tersedia dalam Versi Android dan iOS.
            </p>
            <section className="group-button">
              <a href="#" target="_blank" className="main-button">
                Click here
              </a>
            </section>
          </div>
          <section className="group-content">
            <div id="hcg-slider-1" className="hcg-slider">
              <div className="hcg-slide-container content-description shadow-xl rounded-lg ring-1 ring-blue-400 m-0">
                <div className="hcg-slider-body">
                  <a
                    className="hcg-slides animated"
                    style={{ display: "flex" }}
                  >
                    <img
                      src="/images/inzaghis-app-by-inzaghis-group-corp.png"
                      alt="Inzaghi's App"
                    />
                  </a>
                </div>
              </div>
            </div>
          </section>
          <div className="bg-white shadow-xl rounded-lg p-6 ring-1 ring-blue-400"></div>
        </div>
      </section>
    </>
  );
}
