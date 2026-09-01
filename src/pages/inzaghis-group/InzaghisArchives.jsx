import { useEffect } from "react";
import { Helmet } from "react-helmet-async";

export default function InzagisArchives() {
  useEffect(() => {
    window.scrollTo(0, 0);
  }, []);
  return (
    <>
      <Helmet>
        <title>Inzaghi's Archives</title>
      </Helmet>
      <section className="inzaghis-group-pages inzaghisarchives-slider">
        <div className="page-wrapper inzagroup-pages">
          <h1 className="my-4 page-title">Inzaghi's Archives</h1>
          <div className="text-container mb-8">
            <p className="text-description">
              Inzaghi's Archives merupakan Pengarsipan File-file dalam bentuk
              Dokumen seperti Dokumen/Word (.doc), Excel (.xls),
              PowerPoint/Slide/Presentasi/PPT (.ppt), PDF (.pdf), dan File
              berbentuk Zip (.zip dan .rar). File-file Dokumen yang disimpan di
              Inzaghi's Archives untuk ditampilkan beberapa Layanan seperti
              Inzaghi's Blog dan Inzaghi's Sites.
            </p>
            <section className="group-button">
              <a
                href="https://drive.google.com/drive/folders/1gAMLO2AdXqsp75ymexKwXllKbLMTfhxa"
                target="_blank"
                className="main-button"
              >
                Click here
              </a>
            </section>
          </div>
          <section className="group-content">
            <div id="hcg-slider-1" className="hcg-slider">
              <div className="hcg-slide-container content-description shadow-xl rounded-lg ring-1 ring-blue-600 m-0">
                <div className="hcg-slider-body">
                  <a
                    className="hcg-slides animated"
                    style={{ display: "flex" }}
                  >
                    <img
                      src="/images/inzaghis-archives-by-inzaghis-group-corp.png"
                      alt="Inzaghi's Archives"
                    />
                  </a>
                </div>
              </div>
            </div>
          </section>
          <div className="bg-white shadow-xl rounded-lg p-6 ring-1 ring-blue-600"></div>
        </div>
      </section>
    </>
  );
}
