import { useState } from "react";
import { ChevronDown } from "lucide-react";
import { Link } from "react-router-dom";
import { Helmet } from "react-helmet-async";

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

function BranchMenu({ liveUrl, repositoryUrl }) {
  const [open, setOpen] = useState(false);

  return (
    <div className="branchMenu">
      <button
        type="button"
        className="branchButton branchMenuToggle"
        aria-expanded={open}
        onClick={() => setOpen((isOpen) => !isOpen)}
      >
        Click here
        <ChevronDown
          aria-hidden="true"
          className={`branchMenuIcon${open ? " isOpen" : ""}`}
        />
      </button>
      {open && (
        <div className="branchMenuDropdown">
          <a href={liveUrl}>Link</a>
          <a href={repositoryUrl} target="_blank" rel="noreferrer">
            Repository
          </a>
        </div>
      )}
    </div>
  );
}

export default function Home() {
  return (
    <>
      <Helmet>
        <title>Home - Inzaghi's Sites</title>
      </Helmet>
      <main className="sitePage">
        <section className="siteHero siteHomeHero">
          <div>
            <p className="siteEyebrow">DIGITAL SERVICES HUB</p>
            <h1>
              Welcome to
              <br />
              Inzaghi&apos;s Sites!
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

        {/* Branch Versions */}
        <section className="banner-info">
          <div className="slider-container">
            <h2 className="title-heading">
              Branch Subdomains (Another Versions)
            </h2>
            <p className="centered-subheading m-4">
              Untuk melihat Versi lainnya dari Situs ini, silakan lihat dari
              beberapa Tautan/Link di bawah ini.
            </p>
            <div
              className="bg-pink-600/20 border border-pink-100 text-sm text-pink-800 rounded-lg p-4 dark:bg-pink-500/20 dark:border-pink-900 dark:text-pink-500"
              role="alert"
              tabIndex={-1}
              aria-labelledby="hs-with-description-label"
            >
              <div className="flex">
                <div className="shrink-0">
                  <svg
                    className="shrink-0 size-4 mt-1"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    strokeWidth="2"
                    strokeLinecap="round"
                    strokeLinejoin="round"
                  >
                    <circle cx="12" cy="12" r="10" />
                    <path d="M12 16v-4" />
                    <path d="M12 8h.01" />
                  </svg>
                </div>
                <div className="ms-4">
                  <h3
                    id="hs-with-description-label"
                    className="text-lg font-semibold font-[Inter]"
                  >
                    This Project will be Retired Soon! And will be Merged into
                    the InzaTech Platform.
                  </h3>
                  <div className="mt-1 text-sm text-green-600 dark:text-green-700 font-[Inter]">
                    Nantinya, Proyek Inzaghi's Sites ini akan segera dihentikan,
                    dan akan digabungkan ke dalam Platform InzaTech. Nantikan
                    Kehadiran Plaform InzaTech yang akan menyediakan berbagai
                    macam Layanan dan Fitur yang lebih lengkap, canggih, dan
                    modern untuk memenuhi kebutuhan Anda di bidang Teknologi
                    Informasi.
                  </div>
                  <div className="mt-1 text-sm text-green-600 dark:text-green-700 font-bold font-[Inter]">
                    Coming Soon in September 2026!
                  </div>
                </div>
              </div>
            </div>
            <div className="relative flex flex-col my-6 bg-white border border-gray-200 rounded-lg shadow-xl w-full mx-auto ring-1 ring-green-500 hover:shadow-2xl">
              <div className="p-4">
                <div className="mb-4 flex items-center justify-between">
                  <h5 className="text-slate-800 text-lg font-semibold">
                    Versions
                  </h5>
                </div>
                <hr className="my-2 border-t border-green-500" />
                <div className="divide-y divide-slate-200">
                  <div className="items-center justify-between pb-3 pt-3 last:pb-0">
                    <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                      <div className="flex items-center">
                        <img
                          src="/icons/git-branch.svg"
                          alt="Git Branch Icon"
                          width="44"
                          height="44"
                        />
                        <span className="text-2xl ml-3 text-gray-700 font-bold font-[Inter]">
                          Main Branch (New UI)
                        </span>
                      </div>
                      <a
                        href="https://inzaghi.wuaze.com"
                        className="branchButton inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Click here
                      </a>
                    </div>
                    <p className="is-desc">
                      Merupakan Cabang/Branch Utama dari Website Platform ini,
                      yang sifatnya Stabil, dan sudah menggunakan Tampilan UI
                      Baru.
                    </p>
                    <hr className="my-2 border-t border-gray" />
                  </div>
                  <div className="items-center justify-between pb-3 pt-3 last:pb-0">
                    <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                      <div className="flex items-center">
                        <img
                          src="/icons/rocket-01.svg"
                          alt="Rocket Icon 1"
                          width="44"
                          height="44"
                        />
                        <span className="text-2xl ml-3 text-gray-700 font-bold font-[Inter]">
                          Beta Future (Old UI - Temporary)
                        </span>
                      </div>
                      <a
                        href="https://preview.inzaghi.wuaze.com"
                        className="branchButton inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Click here
                      </a>
                    </div>
                    <p className="is-desc">
                      Merupakan Cabang/Branch yang didesain untuk melakukan
                      Uji-Coba Fitur Baru secara Pratinjau (Preview). Untuk
                      sementara, Branch ini masih menggunakan Tampilan UI Lama,
                      hingga dimatangkan akan menggunakan Tampilan UI Baru.
                    </p>
                    <hr className="my-2 border-t border-gray" />
                  </div>
                  <div className="items-center justify-between pb-3 pt-3 last:pb-0">
                    <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                      <div className="flex items-center">
                        <img
                          src="/icons/square-arrow-down-double.svg"
                          alt="Square Arrow Down Double"
                          width="44"
                          height="44"
                        />
                        <span className="text-2xl ml-3 text-gray-700 font-bold font-[Inter]">
                          Master (Old UI)
                        </span>
                      </div>
                      <a
                        href="https://old.inzaghi.wuaze.com"
                        className="branchButton inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Click here
                      </a>
                    </div>
                    <p className="is-desc">
                      Merupakan Cabang dari Inzaghi's Sites yang masih
                      menggunakan Tampilan UI Lama. Mirip seperti pada Main
                      Branch, hanya saja masih menggunakan Tampilan Lama.
                    </p>
                    <hr className="my-2 border-t border-gray" />
                  </div>
                  <div className="items-center justify-between pb-3 pt-3 last:pb-0">
                    <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                      <div className="flex items-center">
                        <img
                          src="/icons/web-design-02.svg"
                          alt="Web Design"
                          width="44"
                          height="44"
                        />
                        <span className="text-2xl ml-3 text-gray-700 font-bold font-[Inter]">
                          Laravel (Coming Soon)
                        </span>
                      </div>
                      <BranchMenu
                        liveUrl="https://inzaghi.infinityfreeapp.com"
                        repositoryUrl="https://github.com/inzaghidev/Inzaghis-Sites/tree/isites-laravel"
                      />
                    </div>
                    <p className="is-desc">
                      Pada Branch ini, akan dibangun dan dikembangkan ulang
                      dengan menggunakan Laravel. Untuk sementara, masih
                      tersedia di dalam Branch pada Repository GitHub kami.
                    </p>
                  </div>
                  <div className="items-center justify-between pb-3 pt-3 last:pb-0">
                    <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                      <div className="flex items-center">
                        <img
                          src="/icons/atom-02.svg"
                          alt="Web Design"
                          width="44"
                          height="44"
                        />
                        <span className="text-2xl ml-3 text-gray-700 font-bold font-[Inter]">
                          React.js (Coming Soon)
                        </span>
                      </div>
                      <BranchMenu
                        liveUrl="https://inzaghis-sites.vercel.app"
                        repositoryUrl="https://github.com/inzaghidev/Inzaghis-Sites/tree/isites-react"
                      />
                    </div>
                    <p className="is-desc">
                      Pada Branch ini, juga akan dibangun dan dikembangkan ulang
                      dengan menggunakan React.js. Untuk sementara, masih
                      tersedia di dalam Branch pada Repository GitHub kami.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
        <section className="inzaghis-blog-home">
          <div className="inzaghis-blog-container">
            <h2 className="title-heading text-yellow-600">Our Blog</h2>
            <div className="text-container mb-8">
              <p className="text-description">
                Inzaghi's Blog merupakan Platform Blogging sebagai tempat untuk
                berbagi Ilmu Pengetahuan, terutama seputar IT. Inzaghi's Blog
                lebih menggunakan Platform Blogger, agar lebih mudah dan
                praktis.
              </p>
              <section className="group-button">
                <Link
                  to="/inzaghis-group/inzaghis-blog"
                  className="main-button"
                >
                  Click here
                </Link>
              </section>
            </div>
            <div className="container inzaghisblog mx-auto">
              <div className="flex flex-wrap -mx-4 xl:-mx-2">
                <div className="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4">
                  <div className="relative flex flex-col text-gray-700 bg-gray-200 shadow-xl bg-clip-border rounded-xl h-full bg-opacity-50 backdrop-filter backdrop-blur-xl hover:bg-[#fff6f0] ring-1 ring-gray-300">
                    <div className="relative mx-4 mt-4 overflow-hidden text-white shadow-md bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                      <img
                        src="/images/inzaghis-blog-legacy.png"
                        alt="Inzaghi's Blog Legacy"
                        className="w-full h-full object-cover"
                      />
                    </div>
                    <div className="p-6 text-center flex flex-col grow justify-between">
                      <h5 className="blog-name block mb-2 text-3xl sm:text-2xl md:text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Inzaghi's Blog Legacy
                      </h5>
                      <p className="blog-description mb-auto block text-base antialiased font-light leading-relaxed text-inherit">
                        Merupakan Blog Lama yang sudah tersedia sejak Tahun
                        2018, tempat untuk memposting apapun itu.
                      </p>
                      <div className="mt-4">
                        <button className="align-middle select-none font-bold text-center uppercase transition-all text-xs px-1 py-1 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none focus:ring-4 focus:outline-none focus:ring-yellow-500">
                          <a
                            href="https://inzaghiposuma.blogspot.com"
                            target="_blank"
                            className="button-link px-5 py-2"
                          >
                            Klik di sini
                          </a>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div className="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4">
                  <div className="relative flex flex-col text-gray-700 bg-gray-200 shadow-xl bg-clip-border rounded-xl h-full bg-opacity-50 backdrop-filter backdrop-blur-xl hover:bg-[#fff6f0] ring-1 ring-gray-300">
                    <div className="relative mx-4 mt-4 overflow-hidden text-white shadow-md bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                      <img
                        src="/images/teknoblog-by-inzaghis-blog.png"
                        alt="Teknoblog - Inzaghi's Blog"
                        className="w-full h-full object-cover"
                      />
                    </div>
                    <div className="p-6 text-center flex flex-col grow justify-between">
                      <h5 className="blog-name block mb-2 text-3xl sm:text-2xl md:text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Teknoblog
                      </h5>
                      <p className="blog-description mb-auto block text-base antialiased font-light leading-relaxed text-inherit">
                        Merupakan Pindahan dari Blog Lama yang bernama Inzaghi's
                        Blog (Legacy), dan Artikel yang dikhususkan tentang
                        Teknologi.
                      </p>
                      <div className="mt-4">
                        <button className="align-middle select-none font-bold text-center uppercase transition-all text-xs px-1 py-1 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none focus:ring-4 focus:outline-none focus:ring-yellow-500">
                          <a
                            href="https://enzatech.blogspot.com"
                            target="_blank"
                            className="button-link px-5 py-2"
                          >
                            Klik di sini
                          </a>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div className="w-full sm:w-1/2 lg:w-1/3 px-4 mb-4">
                  <div className="relative flex flex-col text-gray-700 bg-gray-200 shadow-xl bg-clip-border rounded-xl h-full bg-opacity-50 backdrop-filter backdrop-blur-xl hover:bg-[#fff6f0] ring-1 ring-gray-300">
                    <div className="relative mx-4 mt-4 overflow-hidden text-white shadow-md bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                      <img
                        src="/images/miniblog-by-inzaghis-blog.png"
                        alt="Miniblog - Inzaghi's Blog"
                        className="w-full h-full object-cover"
                      />
                    </div>
                    <div className="p-6 text-center flex flex-col grow justify-between">
                      <h5 className="blog-name block mb-2 text-3xl sm:text-2xl md:text-3xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Miniblog
                      </h5>
                      <p className="blog-description mb-auto block text-base antialiased font-light leading-relaxed text-inherit">
                        Merupakan Blog khusus Microblogging, terutama untuk
                        menyimpan Postingan Sederhana seperti Kode Program
                        Sederhana, hingga Teks dan Tutorial Singkat.
                      </p>
                      <div className="mt-4">
                        <button className="align-middle select-none font-bold text-center uppercase transition-all text-xs px-1 py-1 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none focus:ring-4 focus:outline-none focus:ring-yellow-500">
                          <a
                            href="https://enzashorts.blogspot.com"
                            target="_blank"
                            className="button-link px-5 py-2"
                          >
                            Klik di sini
                          </a>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section className="inzaghis-media-home">
          <div className="inzaghis-media-container">
            <h2 className="title-heading text-red-600">Our Social Media</h2>
            <div className="text-container mb-8">
              <p className="text-description">
                Inzaghi's Media merupakan Platform Layanan untuk Sharing Ilmu,
                terutama seputar IT.
              </p>
              <section className="group-button">
                <Link
                  to="/inzaghis-group/inzaghis-media"
                  className="main-button"
                >
                  Click here
                </Link>
              </section>
            </div>
            <div className="container inzaghismedia">
              <div className="row -mx-4 sm:-mx-2">
                <div className="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                  <div className="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500 transition-all duration-400">
                    <div className="p-6 mb-auto">
                      <img
                        src="/icons/instagram-logo-withcolor.svg"
                        alt="Instagram Logo"
                        width="44"
                        height="44"
                      />
                      <h5 className="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-3xl">
                        Instagram
                      </h5>
                      <p className="socmed-description block antialiased leading-relaxed text-inherit">
                        Sebagai Postingan berbentuk Gambar Persegi dan sebagai
                        Asisten dari Inzaghi's Blog.
                      </p>
                    </div>
                    <div className="p-6 pt-0">
                      <div className="flex justify-center mt-4">
                        <button className="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                          <a
                            href="https://www.instagram.com/enzapost"
                            target="_blank"
                            className="button-link px-5 py-1.5"
                          >
                            @enzapost
                          </a>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div className="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500 transition-all duration-400">
                    <div className="p-6 mb-auto">
                      <img
                        src="/icons/tiktok-logo-withcolor.svg"
                        alt="TikTok Logo"
                        width="44"
                        height="44"
                      />
                      <h5 className="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-3xl">
                        TikTok
                      </h5>
                      <p className="socmed-description block antialiased leading-relaxed text-inherit">
                        Sebagai Postingan berbentuk Video Vertikal (Portrait)
                        yang dapat di-Scrolling seperti Video Tutorial/Tips dan
                        Informasi Singkat.
                      </p>
                    </div>
                    <div className="p-6 pt-0">
                      <div className="flex justify-center mt-4">
                        <button className="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                          <a
                            href="https://www.tiktok.com/@enzapostmedia"
                            target="_blank"
                            className="button-link px-5 py-1.5"
                          >
                            @enzapostmedia
                          </a>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div className="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500 transition-all duration-400">
                    <div className="p-6 mb-auto">
                      <img
                        src="/icons/youtube-logo-withcolor.svg"
                        alt="YouTube Logo"
                        width="44"
                        height="44"
                      />
                      <h5 className="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-3xl">
                        YouTube
                      </h5>
                      <p className="socmed-description block antialiased leading-relaxed text-inherit">
                        Sebagai sebuah Channel yang berbentuk Video seperti
                        Tutorial, Video Shorts, hingga Demo Aplikasi/Project.
                      </p>
                    </div>
                    <div className="p-6 pt-0">
                      <div className="flex justify-center mt-4">
                        <button className="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                          <a
                            href="https://www.youtube.com/@enzavlogpost"
                            target="_blank"
                            className="button-link px-5 py-1.5"
                          >
                            Inzaghi's Media
                          </a>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div className="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500 transition-all duration-400">
                    <div className="p-6 mb-auto">
                      <img
                        src="/icons/x-twitter-logo.svg"
                        alt="X Logo"
                        width="44"
                        height="44"
                      />
                      <h5 className="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-3xl">
                        X (Twitter)
                      </h5>
                      <p className="socmed-description block antialiased leading-relaxed text-inherit">
                        Sebagai Postingan berbentuk Repost/Retweet,
                        Utasan/Tulisan, hingga Postingan-postingan dari
                        Inzaghi's Blog.
                      </p>
                    </div>
                    <div className="p-6 pt-0">
                      <div className="flex justify-center mt-4">
                        <button className="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                          <a
                            href="https://x.com/InzaTechMedia"
                            target="_blank"
                            className="button-link px-5 py-1.5"
                          >
                            @InzaTechMedia
                          </a>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div className="relative flex flex-col mt-6 text-gray-700 bg-red-100 hover:bg-red-200 shadow-lg bg-clip-border rounded-xl w-full ring-1 ring-slate-600 hover:ring-2 hover:ring-gray-500 transition-all duration-400">
                    <div className="p-6 mb-auto">
                      <img
                        src="/icons/threads-logo.svg"
                        alt="Threads Logo"
                        width="44"
                        height="44"
                      />
                      <h5 className="socmed-name block mb-2 antialiased font-semibold leading-snug tracking-normal text-blue-gray-900 text-3xl">
                        Threads
                      </h5>
                      <p className="socmed-description block antialiased leading-relaxed text-inherit">
                        Sama seperti di X, Sebagai Postingan berbentuk Repost,
                        Utasan/Tulisan, hingga Postingan-postingan dari
                        Instagram dan Inzaghi's Blog.
                      </p>
                    </div>
                    <div className="p-6 pt-0">
                      <div className="flex justify-center mt-4">
                        <button className="text-white hover:text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                          <a
                            href="https://www.threads.net/@enzapost"
                            target="_blank"
                            className="button-link px-5 py-1.5"
                          >
                            @enzapost
                          </a>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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
    </>
  );
}
