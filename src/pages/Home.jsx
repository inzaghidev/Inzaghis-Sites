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
              class="bg-pink-600/20 border border-pink-100 text-sm text-pink-800 rounded-lg p-4 dark:bg-pink-500/20 dark:border-pink-900 dark:text-pink-500"
              role="alert"
              tabindex="-1"
              aria-labelledby="hs-with-description-label"
            >
              <div class="flex">
                <div class="shrink-0">
                  <svg
                    class="shrink-0 size-4 mt-1"
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <circle cx="12" cy="12" r="10" />
                    <path d="M12 16v-4" />
                    <path d="M12 8h.01" />
                  </svg>
                </div>
                <div class="ms-4">
                  <h3
                    id="hs-with-description-label"
                    class="text-lg font-semibold font-[Inter]"
                  >
                    This Project will be Retired Soon! And will be Merged into
                    the InzaTech Platform.
                  </h3>
                  <div class="mt-1 text-sm text-green-600 dark:text-green-700 font-[Inter]">
                    Nantinya, Proyek Inzaghi's Sites ini akan segera dihentikan,
                    dan akan digabungkan ke dalam Platform InzaTech. Nantikan
                    Kehadiran Plaform InzaTech yang akan menyediakan berbagai
                    macam Layanan dan Fitur yang lebih lengkap, canggih, dan
                    modern untuk memenuhi kebutuhan Anda di bidang Teknologi
                    Informasi.
                  </div>
                  <div class="mt-1 text-sm text-green-600 dark:text-green-700 font-bold font-[Inter]">
                    Coming Soon in September 2026!
                  </div>
                </div>
              </div>
            </div>
            <div className="block relative flex flex-col my-6 bg-white border border-gray-200 rounded-lg shadow-xl w-full mx-auto ring-1 ring-green-500 hover:shadow-2xl">
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
                          src="/public/icons/git-branch.svg"
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
                          src="/public/icons/rocket-01.svg"
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
                          src="/public/icons/square-arrow-down-double.svg"
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
                          src="/public/icons/web-design-02.svg"
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
                          src="/public/icons/atom-02.svg"
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
