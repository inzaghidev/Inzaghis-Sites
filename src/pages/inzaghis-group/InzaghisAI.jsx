import { useEffect } from "react";
import { Helmet } from "react-helmet-async";

export default function InzagisAI() {
  useEffect(() => {
    window.scrollTo(0, 0);
  }, []);
  return (
    <>
      <Helmet>
        <title>Inzaghi's AI</title>
      </Helmet>
      <section className="inzaghis-group-pages inzaghisai-slider">
        <div className="page-wrapper inzagroup-pages">
          <h1 className="my-4 page-title">Inzaghi's AI</h1>
          <p className="centered-subheading mb-8">
            Inzaghi's AI merupakan Platform berbasis Kecerdasan Buatan (AI) yang
            akan tersedia di Inzaghi's Sites (Web) dan Inzaghi's App (Mobile).
            Inzaghi's AI juga menyediakan Chatbot Artificial Intelligence (AI)
            seperti ChatGPT/Gemini, Image Generator berbasis AI, hingga
            Tools/Aplikasi lainnya yang berbasis AI dan menggunakan AI-API Key
            apapun.
          </p>
          <section className="group-content">
            <div id="hcg-slider-1" className="hcg-slider">
              <div className="hcg-slide-container content-description shadow-xl rounded-lg ring-1 ring-yellow-700 m-0">
                <div className="hcg-slider-body">
                  <a
                    className="hcg-slides animated"
                    style={{ display: "flex" }}
                  >
                    <img
                      src="/images/inzaghis-ai-by-inzaghis-group-corp.png"
                      alt="Inzaghi's AI"
                    />
                  </a>
                </div>
              </div>
            </div>
          </section>
          <div className="bg-white shadow-xl rounded-lg p-6 ring-1 ring-yellow-700"></div>
        </div>
      </section>
    </>
  );
}
