import { BrowserRouter, Routes, Route, useNavigate, useParams } from "react-router-dom";
import Layout from "../components/layout/Layout";

import Home from "../pages/Home.jsx";
import About from "../pages/About.jsx";
import Contact from "../pages/Contact.jsx";
import Profile from "../pages/Profile.jsx";
import Disclaimer from "../pages/Disclaimer.jsx";
import PrivacyPolicy from "../pages/PrivacyPolicy.jsx";
import Networks from "../pages/Networks.jsx";
import InzaghisBlog from "../pages/inzaghis-group/InzaghisBlog.jsx";
import InzaghisMedia from "../pages/inzaghis-group/InzaghisMedia.jsx";
import { BookOpen, Laptop, ExternalLink } from "lucide-react";

/* ── Data: Apps list ─────────────────────────────────────── */
const appsList = [
  {
    id: "converters",
    title: "Converters",
    image: "/images/converters-by-pages-apps.png",
    description:
      "Merupakan portal untuk Aplikasi Konverter seperti Konversi Suhu, Massa/Berat, Panjang, Sistem Bilangan, dan lain sebagainya dan Aplikasi Konverter ini akan sedikit menggunakan API.",
  },
  {
    id: "calculators",
    title: "Calculators",
    image: "/images/calculators-by-pages-apps.png",
    description:
      "Merupakan kumpulan dari beberapa jenis Kalkulator seperti Kalkulator Sederhana, Umum, Matematika, Kesehatan, Keuangan, hingga Kalkulator dan Kesehatan.",
  },
  {
    id: "generators",
    title: "Generators",
    image: "/images/generators-by-pages-apps.png",
    description:
      "Merupakan Aplikasi untuk membuat dan menggenerate sesuatu, seperti Text Generator hingga Image Generator, dan dapat dibuat secara acak.",
  },
  {
    id: "formatters",
    title: "Formatters",
    image: "/images/formatters-by-pages-apps.png",
    description:
      "Merupakan Aplikasi untuk melakukan Formatting seperti XML, JSON, AI, hingga memasukan Pemilihan mutan apapun.",
  },
  {
    id: "file-converters",
    title: "File Converter",
    image: "/images/file-converters-by-pages-apps.png",
    description:
      "Merupakan portal untuk melakukan konversi format File apapun seperti JPG, PNG, DOCX, PDF, PPT, hingga TXT.",
  },
  {
    id: "utilities",
    title: "Utilities",
    image: "/images/utilities-by-pages-apps.png",
    description:
      "Merupakan portal untuk berbagai kumpulan Aplikasi untuk Utilities atau kebutuhan sehari-hari seperti Pencarian IP Address, SSL Checker, Website Status Checker, Find and Replace, dan lainnya.",
  },
  {
    id: "tester-tools",
    title: "Tester Tools",
    image: "/images/tester-tools-by-pages-apps.png",
    description:
      "Merupakan Aplikasi untuk Alat UI Color dan Simulator Online seperti Keyboard Tester, Mouse Tester, Sound Tester, dan lainnya.",
  },
  {
    id: "coming-soon",
    title: "Coming Soon",
    image: null,
    description:
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliased dlete dignissimos sequa velit, illo, possideat fuc consequatur ut eosel Commodi ea consequatur accusantium, tooken qui deserunt laselaz iure.",
  },
];

/* ── Data: Portals list ──────────────────────────────────── */
const portalsList = [
  {
    id: "widgets",
    title: "Widgets",
    category: "Interactive",
    description:
      "Koleksi widget interaktif seperti jam, cuaca, catatan, dan alat produktivitas lainnya.",
  },
  {
    id: "tutorials",
    title: "Tech Tutorials",
    category: "Learning",
    description:
      "Tutorial teknologi dari dasar hingga lanjutan — mulai dari web dev, DevOps, hingga AI/ML.",
  },
  {
    id: "materials",
    title: "Learning Materials",
    category: "Education",
    description:
      "Modul kuliah TI, draf tugas akhir, panduan instalasi Linux server, dan hasil riset AI.",
  },
  {
    id: "projects",
    title: "Projects Showcase",
    category: "Portfolio",
    description:
      "Daftar lengkap repositori GitHub yang diproduksi oleh tim InzaTech.",
  },
];

/* ── Placeholder tool components for /apps/:appId ────────── */
function ConverterTool() {
  return (
    <div className="max-w-xl mx-auto space-y-4 bg-slate-50 border border-slate-100 rounded-2xl p-6 text-center">
      <h3 className="text-base font-bold text-slate-800">Converter Tool</h3>
      <p className="text-xs text-slate-500 leading-relaxed">
        Konversi satuan, mata uang, zona waktu, dan format data — segera hadir!
      </p>
      <span className="inline-block text-[10px] bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold uppercase">
        Coming Soon
      </span>
    </div>
  );
}

function CalculatorTool() {
  return (
    <div className="max-w-xl mx-auto space-y-4 bg-slate-50 border border-slate-100 rounded-2xl p-6 text-center">
      <h3 className="text-base font-bold text-slate-800">Calculator Tool</h3>
      <p className="text-xs text-slate-500 leading-relaxed">
        Kalkulator serbaguna untuk matematika, keuangan, dan sains — segera hadir!
      </p>
      <span className="inline-block text-[10px] bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold uppercase">
        Coming Soon
      </span>
    </div>
  );
}

function GeneratorTool() {
  return (
    <div className="max-w-xl mx-auto space-y-4 bg-slate-50 border border-slate-100 rounded-2xl p-6 text-center">
      <h3 className="text-base font-bold text-slate-800">Generator Tool</h3>
      <p className="text-xs text-slate-500 leading-relaxed">
        Generate password, UUID, QR code, dan data acak lainnya — segera hadir!
      </p>
      <span className="inline-block text-[10px] bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold uppercase">
        Coming Soon
      </span>
    </div>
  );
}

function FormatterTool() {
  return (
    <div className="max-w-xl mx-auto space-y-4 bg-slate-50 border border-slate-100 rounded-2xl p-6 text-center">
      <h3 className="text-base font-bold text-slate-800">Formatter Tool</h3>
      <p className="text-xs text-slate-500 leading-relaxed">
        Format dan beautify JSON, XML, SQL, serta kode lainnya — segera hadir!
      </p>
      <span className="inline-block text-[10px] bg-amber-100 text-amber-700 px-3 py-1 rounded-full font-bold uppercase">
        Coming Soon
      </span>
    </div>
  );
}

/* ── Placeholder portal components for /portals/:portalId ── */
function WidgetPortal() {
  return (
    <div className="max-w-xl mx-auto space-y-4 bg-slate-50 border border-slate-100 rounded-2xl p-6 text-center">
      <h3 className="text-base font-bold text-slate-800">Widget Portal</h3>
      <p className="text-xs text-slate-500 leading-relaxed">
        Koleksi widget interaktif — jam, cuaca, catatan, dan alat produktivitas lainnya.
      </p>
      <span className="inline-block text-[10px] bg-sky-100 text-sky-700 px-3 py-1 rounded-full font-bold uppercase">
        Coming Soon
      </span>
    </div>
  );
}

function TutorialPortal() {
  return (
    <div className="max-w-xl mx-auto space-y-4 bg-slate-50 border border-slate-100 rounded-2xl p-6 text-center">
      <h3 className="text-base font-bold text-slate-800">Tech Tutorials</h3>
      <p className="text-xs text-slate-500 leading-relaxed">
        Tutorial teknologi dari dasar hingga lanjutan — segera hadir!
      </p>
      <span className="inline-block text-[10px] bg-sky-100 text-sky-700 px-3 py-1 rounded-full font-bold uppercase">
        Coming Soon
      </span>
    </div>
  );
}

export default function AppRouter() {
  return (
    <BrowserRouter>
      <Layout>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/about" element={<About />} />
          <Route path="/contact" element={<Contact />} />
          <Route path="/profile" element={<Profile />} />
          <Route path="/disclaimer" element={<Disclaimer />} />
          <Route path="/privacy-policy" element={<PrivacyPolicy />} />
          <Route path="/apps" element={<Apps />} />
          <Route path="/apps/:appId" element={<Apps />} />
          <Route path="/portals" element={<Portals />} />
          <Route path="/networks" element={<Networks />} />
          <Route
            path="/inzaghis-group/inzaghis-blog"
            element={<InzaghisBlog />}
          />
          <Route
            path="/inzaghis-group/inzaghis-media"
            element={<InzaghisMedia />}
          />
          <Route path="*" element={<NotFound />} />
        </Routes>
      </Layout>
    </BrowserRouter>
  );
}

function Apps() {
  const navigate = useNavigate();
  const { appId } = useParams();

  return (
    <div className="sitePage">
    <section key="apps-view" id="apps-view-container" className="space-y-8">
      {/* Header block */}
      <div className="text-left space-y-2">
        <h2 className="text-3xl font-black font-display text-slate-900 tracking-tight flex items-center gap-2">
          Pages Apps{" "}
          <span className="text-[10px] bg-amber-100 text-amber-700 px-2 py-0.5 rounded-full font-bold uppercase tracking-wider">
            Beta
          </span>
        </h2>
        <p className="text-xs md:text-sm text-slate-500 max-w-3xl leading-relaxed font-normal">
          Pages Apps merupakan Halaman Aplikasi yang tersedia untuk berbagai
          kebutuhan. Pages Apps menyediakan berbagai Portal seperti Kalkulator,
          Generator, Formatter, dan lainnya.
        </p>
      </div>

      {/* Focused Active Tool Area */}
      {appId ? (
        <div className="bg-white border border-slate-200/60 rounded-3xl p-6 md:p-8 shadow-sm">
          <div className="flex items-center justify-between mb-6 border-b border-slate-100 pb-4">
            <button
              onClick={() => navigate("/apps")}
              className="px-4 py-1.5 border border-slate-200 rounded-xl text-xs font-semibold text-slate-600 hover:bg-slate-50 transition-all uppercase"
            >
              ← Kembali ke Semua Apps
            </button>
            <span className="text-xs font-bold text-emerald-600 uppercase tracking-wide">
              Aplikasi Terpilih: {appId.toUpperCase()}
            </span>
          </div>

          {appId === "converters" && <ConverterTool />}
          {appId === "calculators" && <CalculatorTool />}
          {appId === "generators" && <GeneratorTool />}
          {appId === "formatters" && <FormatterTool />}
        </div>
      ) : (
        /* Grid of all Apps */
        <div
          id="apps-grid"
          className="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2"
        >
          {appsList.map((app) => (
            <div
              key={app.id}
              className="bg-white border border-slate-200/60 rounded-3xl overflow-hidden flex flex-col md:flex-row shadow-sm hover:shadow-md transition-shadow"
            >
              {/* Left side category card */}
              <div
                className={`md:w-2/5 p-6 flex flex-col items-center justify-between text-center ${
                  app.id === "converters"
                    ? "bg-rose-50"
                    : app.id === "calculators"
                      ? "bg-amber-50"
                      : app.id === "generators"
                        ? "bg-sky-50"
                        : "bg-violet-50"
                }`}
              >
                <div>
                  <span
                    className={`text-[9px] font-black uppercase tracking-widest ${
                      app.id === "converters"
                        ? "text-pink-600"
                        : app.id === "calculators"
                          ? "text-amber-700"
                          : app.id === "generators"
                            ? "text-sky-600"
                            : "text-violet-600"
                    }`}
                  >
                    {app.title.toUpperCase()}
                  </span>
                </div>

                {/* App icon container */}
                <div className="my-5 flex flex-col items-center gap-2">
                  {app.id === "converters" && (
                    <svg
                      className="w-12 h-12 text-pink-500 animate-pulse"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      strokeWidth="1.5"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        d="M12 6v12m-3-2.818l.251.11a3.375 3.375 0 003.498-.112l.147-.091a3.375 3.375 0 001.37-2.733c0-1.867-1.425-3.375-3.187-3.375-1.762 0-3.188-1.508-3.188-3.375 0-1.868 1.426-3.375 3.188-3.375 1.762 0 3.187 1.507 3.187 3.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>
                  )}
                  {app.id === "calculators" && (
                    <svg
                      className="w-12 h-12 text-amber-500"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      strokeWidth="1.5"
                    >
                      <rect
                        x="4"
                        y="2"
                        width="16"
                        height="20"
                        rx="2"
                        strokeWidth="2"
                      />
                      <rect x="7" y="5" width="10" height="4" rx="1" />
                      <circle cx="8" cy="13" r="1" />
                      <circle cx="12" cy="13" r="1" />
                      <circle cx="16" cy="13" r="1" />
                      <circle cx="8" cy="17" r="1" />
                      <circle cx="12" cy="17" r="1" />
                      <circle cx="16" cy="17" r="1" />
                    </svg>
                  )}
                  {app.id === "generators" && (
                    <svg
                      className="w-12 h-12 text-sky-500 animate-spin"
                      style={{ animationDuration: "12s" }}
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      strokeWidth="1.5"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.827m11.379-8.16l1.15-.827M8.14 21.27l.707-1.03m7.56-11.01l.707-1.03M12 3v1.5m0 15V21m-3.077-16.5l.513 1.41m5.13 14.095l.513 1.41M4.215 6.225l.827 1.15m8.16 11.379l.827 1.15M2.73 8.14l1.03.707m11.01 7.56l1.03.707"
                      />
                    </svg>
                  )}
                  {app.id === "formatters" && (
                    <svg
                      className="w-12 h-12 text-violet-500"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      strokeWidth="1.5"
                    >
                      <path
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"
                      />
                    </svg>
                  )}
                  <span className="text-[10px] text-slate-400 font-bold tracking-tight">
                    Pages Apps
                  </span>
                </div>

                {/* logo footer of left side */}
                <div className="flex items-center gap-1">
                  <svg
                    className="w-3.5 h-3.5 text-emerald-500"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    strokeWidth="2.5"
                  >
                    <path
                      d="M12 2L3 7v6c0 5.5 4.5 10 9 11 4.5-1 9-5.5 9-11V7l-9-5z"
                      fill="none"
                      stroke="#10b981"
                    />
                  </svg>
                  <span className="text-[8px] font-extrabold text-slate-500">
                    Inzaghi's Sites
                  </span>
                </div>
              </div>

              {/* Right details content side */}
              <div className="md:w-3/5 p-6 md:p-8 flex flex-col justify-between text-left">
                <div className="space-y-2">
                  <h3 className="text-xl font-bold text-slate-800 tracking-tight">
                    {app.title}
                  </h3>
                  <p className="text-xs text-slate-500 leading-relaxed font-normal">
                    {app.description}
                  </p>
                </div>

                <div className="pt-6">
                  <button
                    onClick={() => navigate(`/apps/${app.id}`)}
                    className="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs rounded-xl transition-colors shadow-sm"
                  >
                    Click here
                  </button>
                </div>
              </div>
            </div>
          ))}
        </div>
      )}
    </section>
    </div>
  );
}

function showToast(message) {
  if (typeof window !== "undefined" && typeof window.alert === "function") {
    window.alert(message);
  } else {
    // fallback for non-browser environments
    console.log(message);
  }
}

function Portals() {
  const navigate = useNavigate();
  const { portalId } = useParams();

  return (
    <div className="sitePage">
    <section
      key="portals-view"
      id="portals-view-container"
      className="space-y-8"
    >
      {/* Header block */}
      <div className="text-left space-y-2">
        <h2 className="text-3xl font-black font-display text-slate-900 tracking-tight flex items-center gap-2">
          Portals{" "}
          <span className="text-[10px] bg-sky-100 text-sky-700 px-2 py-0.5 rounded-full font-bold uppercase tracking-wider">
            Beta
          </span>
        </h2>
        <p className="text-xs md:text-sm text-slate-500 max-w-3xl leading-relaxed font-normal">
          Portals merupakan Halaman Portal yang tersedia untuk berbagai
          kebutuhan apapun seperti Widgets, Tutorial Teknologi, Materi
          Pembelajaran, dan lainnya.
        </p>
      </div>

      {/* If a sub portal is selected, show it focused */}
      {portalId ? (
        <div className="bg-white border border-slate-200/60 rounded-3xl p-6 md:p-8 shadow-sm">
          <div className="flex items-center justify-between mb-6 border-b border-slate-100 pb-4">
            <button
              onClick={() => navigate("/portals")}
              className="px-4 py-1.5 border border-slate-200 rounded-xl text-xs font-semibold text-slate-600 hover:bg-slate-50 transition-all uppercase"
            >
              ← Kembali ke Semua Portal
            </button>
            <span className="text-xs font-bold text-emerald-600 uppercase tracking-wide">
              Portal Terpilih
            </span>
          </div>

          {portalId === "widgets" && <WidgetPortal />}
          {portalId === "tutorials" && <TutorialPortal />}
          {portalId === "materials" && (
            <div className="max-w-xl mx-auto space-y-4 bg-slate-50 border border-slate-100 rounded-2xl p-6 text-center">
              <BookOpen className="w-10 h-10 text-blue-500 mx-auto" />
              <h3 className="text-base font-bold text-slate-800">
                Learning Materials & Thesis Repo
              </h3>
              <p className="text-xs text-slate-500 leading-relaxed max-w-sm mx-auto">
                Akses modul kuliah TI, draf tugas akhir, panduan instalasi Linux
                server, serta hasil wawancara riset AI secara gratis.
              </p>
              <button
                onClick={() =>
                  showToast("Mengunduh katalog modul pembelajaran terbaru...")
                }
                className="px-4 py-2 bg-slate-800 hover:bg-slate-700 text-white rounded-xl text-xs font-bold transition-all uppercase"
              >
                Unduh Katalog (PDF)
              </button>
            </div>
          )}
          {portalId === "projects" && (
            <div className="max-w-xl mx-auto space-y-4 bg-slate-50 border border-slate-100 rounded-2xl p-6 text-center">
              <Laptop className="w-10 h-10 text-emerald-500 mx-auto" />
              <h3 className="text-base font-bold text-slate-800">
                Inzaghi's Projects Showcase
              </h3>
              <p className="text-xs text-slate-500 leading-relaxed max-w-sm mx-auto">
                Lihat daftar lengkap repositori GitHub yang diproduksi oleh tim
                InzaTech, dari microservices hingga sensor IoT cerdas.
              </p>
              <a
                href="https://github.com/inzaghidev"
                target="_blank"
                rel="noreferrer"
                className="inline-flex items-center gap-1.5 px-4 py-2 bg-emerald-500 hover:bg-emerald-600 text-white rounded-xl text-xs font-bold transition-all uppercase"
              >
                Buka GitHub Inzaghi <ExternalLink className="w-3.5 h-3.5" />
              </a>
            </div>
          )}
        </div>
      ) : (
        /* Grid of all Portals */
        <div
          id="portals-grid"
          className="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2"
        >
          {portalsList.map((portal) => (
            <div
              key={portal.id}
              className="bg-white border border-slate-200/70 rounded-3xl overflow-hidden flex flex-col md:flex-row shadow-sm hover:shadow-md transition-shadow"
            >
              {/* Left Graphic Side */}
              <div
                className={`md:w-2/5 p-6 flex flex-col items-center justify-between text-center ${
                  portal.id === "tutorials"
                    ? "bg-[#0f1d1f] text-white"
                    : "bg-[#fbeaea]"
                }`}
              >
                <div>
                  <span
                    className={`text-[10px] font-extrabold uppercase tracking-widest ${
                      portal.id === "tutorials"
                        ? "text-teal-400"
                        : "text-rose-500"
                    }`}
                  >
                    {portal.category}
                  </span>
                </div>

                {portal.id === "widgets" && (
                  <div className="my-6 space-y-3 flex flex-col items-center">
                    <span className="font-display font-black text-lg text-slate-900 tracking-wider">
                      WIDGETS
                    </span>
                    <div className="grid grid-cols-2 gap-2">
                      <div className="w-5 h-5 bg-rose-500 rounded"></div>
                      <div className="w-5 h-5 bg-rose-500 rotate-45 rounded"></div>
                      <div className="w-5 h-5 bg-rose-500 rounded"></div>
                      <div className="w-5 h-5 bg-rose-500 rounded"></div>
                    </div>
                    <span className="text-[10px] font-bold text-slate-500">
                      Portals
                    </span>
                  </div>
                )}

                {portal.id === "tutorials" && (
                  <div className="my-6 space-y-3 flex flex-col items-center">
                    <span className="font-display font-black text-base text-white tracking-wider">
                      TECH TUTORIALS
                    </span>
                    <svg
                      className="w-12 h-12 text-teal-400"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      strokeWidth="2"
                    >
                      <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                      <line x1="8" y1="21" x2="16" y2="21" />
                      <line x1="12" y1="17" x2="12" y2="21" />
                      <path d="M10 8l-2 2 2 2M14 8l2 2-2 2" />
                    </svg>
                    <span className="text-[10px] font-bold text-teal-400/80">
                      Portals
                    </span>
                  </div>
                )}

                {portal.id !== "widgets" && portal.id !== "tutorials" && (
                  <div className="my-6 flex flex-col items-center gap-2">
                    <span className="font-display font-black text-base text-rose-900 tracking-wider">
                      {portal.title.toUpperCase()}
                    </span>
                    <BookOpen className="w-10 h-10 text-rose-500" />
                  </div>
                )}

                <div className="flex items-center gap-1">
                  <svg
                    className="w-4 h-4 text-emerald-500"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    strokeWidth="2.5"
                  >
                    <path
                      d="M12 2L3 7v6c0 5.5 4.5 10 9 11 4.5-1 9-5.5 9-11V7l-9-5z"
                      fill="none"
                      stroke="#10b981"
                    />
                  </svg>
                  <span className="text-[9px] font-extrabold text-slate-700">
                    Inzaghi's Sites
                  </span>
                </div>
              </div>

              {/* Right Details Side */}
              <div className="md:w-3/5 p-6 md:p-8 flex flex-col justify-between text-left">
                <div className="space-y-2">
                  <h3 className="text-xl font-bold text-slate-800 tracking-tight">
                    {portal.title}
                  </h3>
                  <p className="text-xs text-slate-500 leading-relaxed font-normal">
                    {portal.description}
                  </p>
                </div>

                <div className="pt-6">
                  <button
                    onClick={() => navigate(`/portals/${portal.id}`)}
                    className="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs rounded-xl transition-colors shadow-sm"
                  >
                    Click here
                  </button>
                </div>
              </div>
            </div>
          ))}
        </div>
      )}
    </section>
    </div>
  );
}

function NotFound() {
  return (
    <section className="max-w-5xl mx-auto px-6 py-16 text-center">
      <h1 className="text-5xl font-bold text-gray-800 mb-4">404</h1>
      <p className="text-xl text-gray-600 mb-6">Page not found</p>
      <a
        href="/"
        className="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-800 transition inline-block"
      >
        Go back home
      </a>
    </section>
  );
}
