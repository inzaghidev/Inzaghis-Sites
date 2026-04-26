import React from "react";
import { Link } from "react-router-dom";
import { useMemo } from "react";

function SlideCard({ item }) {
  return (
    <div className="relative flex flex-col text-gray-700 bg-gray-100 shadow-xl rounded-xl overflow-hidden h-full">
      <div className="relative mx-4 mt-4 overflow-hidden rounded-xl">
        <a href={item.link}>
          <img
            src={item.imgSrc}
            alt={item.name}
            className="w-full h-48 object-cover"
          />
        </a>
      </div>
      <div className="p-4 flex flex-col flex-grow justify-between">
        <h5 className="text-2xl font-semibold text-green-700 mb-2">
          {item.name}
        </h5>
        <p className="text-sm text-left text-gray-700 flex-grow">
          {item.description}
        </p>
        <div className="mt-4 text-center">
          <a
            href={item.link}
            className="inline-block bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800"
          >
            Click here
          </a>
        </div>
      </div>
    </div>
  );
}

export default function Home() {
  const portalsData = useMemo(
    () => [
      {
        name: "Widgets",
        imgSrc: "/assets/images/widgets-by-portals.png",
        description: "Kumpulan widget serbaguna untuk berbagai kebutuhan.",
        link: "/portals/widgets",
      },
      {
        name: "Technology Tutorials",
        imgSrc: "/assets/images/tech-tutorials-by-portals.png",
        description: "Tutorial & materi teknologi untuk pembelajaran IT.",
        link: "/portals/tech-tutorials",
      },
      {
        name: "IT Project Lists",
        imgSrc: "/assets/images/it-project-lists-by-portals.png",
        description: "Daftar proyek IT sebagai inspirasi dan referensi.",
        link: "/portals/projects",
      },
      {
        name: "Learning Materials",
        imgSrc: "/assets/images/learning-materials-by-portals.png",
        description: "Materi pembelajaran untuk sekolah & kampus.",
        link: "/portals/learning-materials",
      },
    ],
    [],
  );

  const appsData = useMemo(
    () => [
      {
        name: "Converters",
        imgSrc: "/assets/images/converters-by-pages-apps.png",
        description: "Konversi suhu, panjang, sistem bilangan dan lainnya.",
        link: "/apps/converters",
      },
      {
        name: "Calculators",
        imgSrc: "/assets/images/calculators-by-pages-apps.png",
        description:
          "Kumpulan kalkulator: sederhana, ilmiah, kesehatan, keuangan.",
        link: "/apps/calculators",
      },
      {
        name: "Generators",
        imgSrc: "/assets/images/generators-by-pages-apps.png",
        description: "Generator teks, angka, dan lainnya.",
        link: "/apps/generators",
      },
    ],
    [],
  );

  return (
    <main className="max-w-7xl mx-auto">
      {/* Hero / Welcome */}
      <section className="welcome">
        <div className="welcome-container">
          <div className="flex-1">
            <h1 className="welcome-title text-4xl md:text-5xl font-bold text-gray-800 font-[Inter]">
              WELCOME TO INZAGHI'S SITES!
            </h1>
            <p className="mt-6 text-lg text-gray-600">
              Inzaghi's Sites merupakan Platform Layanan Situs Web untuk dapat
              diakses ke semua layanan Inzaghi's Group.
              <br />
              <br />
              Inzaghi's Sites juga memudahkan Anda untuk mengakses Aplikasi dan
              Portal apapun yang berbasis Web seperti yang tersedia pada Portals
              dan Apps seperti Widget, Tutorial Teknologi, Konverter,
              Kalkulator, Generator, dan lain-lainnya.
            </p>
            <div className="group-button about-inzaghis-sites-button mt-6 flex gap-4">
              <Link to="/about" className="main-button">
                ABOUT
              </Link>
            </div>
          </div>

          <div className="welcome-image-to-inzaghis-sites w-full md:w-1/2 flex justify-center">
            <img
              alt="Inzaghi's Sites Illustration"
              src="images/website-illustration-transparent-3d.png"
              className="w-80 md:w-96 object-contain"
            />
          </div>
        </div>
      </section>

      {/* Branch Versions */}
  <section className="banner-info">
    <div className="slider-container">
      <h2 className="title-heading">Branch Subdomains (Another Versions)</h2>
      <p className="centered-subheading m-4">
        Untuk melihat Versi lainnya dari Situs ini, silakan lihat dari
        beberapa Tautan/Link di bawah ini.
      </p>
      <div
        className="block relative flex flex-col my-6 bg-white border border-gray-200 rounded-lg shadow-xl w-full mx-auto ring-1 ring-green-500 hover:shadow-2xl"
      >
        <div className="p-4">
          <div className="mb-4 flex items-center justify-between">
            <h5 className="text-slate-800 text-lg font-semibold">Versions</h5>
          </div>
          <hr className="my-2 border-t border-green-500" />
          <div className="divide-y divide-slate-200">
            <div className="items-center justify-between pb-3 pt-3 last:pb-0">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div className="flex items-center">
                  <img
                    src="../assets/icons/git-branch.svg"
                    alt="Git Branch Icon"
                    width="44"
                    height="44"
                  />
                  <span
                    className="text-2xl ml-3 text-gray-700 font-bold font-[Inter]"
                    >Main Branch (New UI)</span
                  >
                </div>
                <button type="button">
                  <a
                    href="https://inzaghi.wuaze.com"
                    className="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >Click here</a
                  >
                </button>
              </div>
              <p className="is-desc">
                Merupakan Cabang/Branch Utama dari Website Platform ini, yang
                sifatnya Stabil, dan sudah menggunakan Tampilan UI Baru.
              </p>
              <hr className="my-2 border-t border-gray" />
            </div>
            <div className="items-center justify-between pb-3 pt-3 last:pb-0">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div className="flex items-center">
                  <img
                    src="../assets/icons/rocket-01.svg"
                    alt="Rocket Icon 1"
                    width="44"
                    height="44"
                  />
                  <span
                    className="text-2xl ml-3 text-gray-700 font-bold font-[Inter]"
                    >Beta Future (Old UI - Temporary)</span
                  >
                </div>
                <button type="button">
                  <a
                    href="https://preview.inzaghi.wuaze.com"
                    className="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >Click here</a
                  >
                </button>
              </div>
              <p className="is-desc">
                Merupakan Cabang/Branch yang didesain untuk melakukan Uji-Coba
                Fitur Baru secara Pratinjau (Preview). Untuk sementara, Branch
                ini masih menggunakan Tampilan UI Lama, hingga dimatangkan
                akan menggunakan Tampilan UI Baru.
              </p>
              <hr className="my-2 border-t border-gray" />
            </div>
            <div className="items-center justify-between pb-3 pt-3 last:pb-0">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div className="flex items-center">
                  <img
                    src="../assets/icons/square-arrow-down-double.svg"
                    alt="Square Arrow Down Double"
                    width="44"
                    height="44"
                  />
                  <span
                    className="text-2xl ml-3 text-gray-700 font-bold font-[Inter]"
                    >Master (Old UI)</span
                  >
                </div>
                <button type="button">
                  <a
                    href="https://old.inzaghi.wuaze.com"
                    className="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >Click here</a
                  >
                </button>
              </div>
              <p className="is-desc">
                Merupakan Cabang dari Inzaghi's Sites yang masih menggunakan
                Tampilan UI Lama. Mirip seperti pada Main Branch, hanya saja
                masih menggunakan Tampilan Lama.
              </p>
              <hr className="my-2 border-t border-gray" />
            </div>
            <div className="items-center justify-between pb-3 pt-3 last:pb-0">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div className="flex items-center">
                  <img
                    src="../assets/icons/web-design-02.svg"
                    alt="Web Design"
                    width="44"
                    height="44"
                  />
                  <span
                    className="text-2xl ml-3 text-gray-700 font-bold font-[Inter]"
                    >Laravel (Coming Soon)</span
                  >
                </div>
                <button type="button">
                  <a
                    href="https://github.com/inzaghidev/Inzaghis-Sites/tree/isites-laravel"
                    target="_blank"
                    className="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >Click here</a
                  >
                </button>
              </div>
              <p className="is-desc">
                Pada Branch ini, akan dibangun dan dikembangkan ulang dengan
                menggunakan Laravel. Untuk sementara, masih tersedia di dalam
                Branch pada Repository GitHub kami.
              </p>
            </div>
            <div className="items-center justify-between pb-3 pt-3 last:pb-0">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div className="flex items-center">
                  <img
                    src="../assets/icons/atom-02.svg"
                    alt="Web Design"
                    width="44"
                    height="44"
                  />
                  <span
                    className="text-2xl ml-3 text-gray-700 font-bold font-[Inter]"
                    >React.js (Coming Soon)</span
                  >
                </div>
                <button type="button">
                  <a
                    href="https://github.com/inzaghidev/Inzaghis-Sites/tree/isites-react"
                    target="_blank"
                    className="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >Click here</a
                  >
                </button>
              </div>
              <p className="is-desc">
                Pada Branch ini, juga akan dibangun dan dikembangkan ulang
                dengan menggunakan React.js. Untuk sementara, masih tersedia
                di dalam Branch pada Repository GitHub kami.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      {/* Portals */}
      <section className="slider-carousel">
        <div>
          <h2 className="text-2xl font-semibold text-green-700 mb-2">
            Portals
          </h2>
          <p className="text-gray-600 mb-4">
            Portal untuk widgets, tutorial, materi pembelajaran dan lainnya.
          </p>

          <div className="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            {portalsData.map((p) => (
              <SlideCard key={p.name} item={p} />
            ))}
          </div>
        </div>
      </section>

      {/* Apps */}
      <section className="slider-carousel">
        <div>
          <h2 className="text-2xl font-semibold text-green-700 mb-2">Apps</h2>
          <p className="text-gray-600 mb-4">
            Aplikasi: konverter, kalkulator, generator, formatter, utilities.
          </p>

          <div className="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            {appsData.map((a) => (
              <SlideCard key={a.name} item={a} />
            ))}
          </div>
        </div>
      </section>

      {/* Blogs */}
      <section className="inzaghis-blog-slider">
        <div className="bg-white rounded-xl p-6 shadow-md">
          <h2 className="text-2xl font-semibold text-yellow-600 mb-2">
            Our Blog
          </h2>
          <p className="text-gray-600 mb-4">
            Platform blogging untuk berbagi pengetahuan terutama seputar IT.
          </p>

          <div className="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            <div className="p-4 bg-gray-50 rounded-xl">
              <img
                src="/assets/images/inzaghis-blog-legacy.png"
                alt="Legacy"
                className="w-full h-40 object-cover rounded"
              />
              <h5 className="text-xl font-semibold mt-4">
                Inzaghi's Blog Legacy
              </h5>
              <p className="text-sm text-gray-700 mt-2">
                Blog lama sejak 2018.
              </p>
              <div className="mt-4">
                <a
                  href="https://inzaghiposuma.blogspot.com"
                  target="_blank"
                  rel="noreferrer"
                  className="bg-gray-900 text-white px-4 py-2 rounded-lg inline-block"
                >
                  Klik di sini
                </a>
              </div>
            </div>

            <div className="p-4 bg-gray-50 rounded-xl">
              <img
                src="/assets/images/teknoblog-by-inzaghis-blog.png"
                alt="Teknoblog"
                className="w-full h-40 object-cover rounded"
              />
              <h5 className="text-xl font-semibold mt-4">Teknoblog</h5>
              <p className="text-sm text-gray-700 mt-2">
                Artikel khusus teknologi.
              </p>
              <div className="mt-4">
                <a
                  href="https://enzatech.blogspot.com"
                  target="_blank"
                  rel="noreferrer"
                  className="bg-gray-900 text-white px-4 py-2 rounded-lg inline-block"
                >
                  Klik di sini
                </a>
              </div>
            </div>

            <div className="p-4 bg-gray-50 rounded-xl">
              <img
                src="/assets/images/miniblog-by-inzaghis-blog.png"
                alt="Miniblog"
                className="w-full h-40 object-cover rounded"
              />
              <h5 className="text-xl font-semibold mt-4">Miniblog</h5>
              <p className="text-sm text-gray-700 mt-2">
                Microblogging untuk catatan singkat dan kode.
              </p>
              <div className="mt-4">
                <a
                  href="https://enzashorts.blogspot.com"
                  target="_blank"
                  rel="noreferrer"
                  className="bg-gray-900 text-white px-4 py-2 rounded-lg inline-block"
                >
                  Klik di sini
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Social Media */}
      <section className="inzaghis-media-info">
        <div className="bg-white rounded-xl p-6 shadow-md">
          <h2 className="text-2xl font-semibold text-red-600 mb-2">
            Our Social Media
          </h2>
          <p className="text-gray-600 mb-4">
            Platform sharing ilmu dan update singkat.
          </p>

          <div className="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            <div className="p-6 bg-red-50 rounded-xl">
              <h5 className="text-2xl font-semibold mb-2">Instagram</h5>
              <p className="text-sm text-gray-700">
                Postingan gambar & update singkat.
              </p>
              <div className="mt-4">
                <a
                  href="https://www.instagram.com/enzapost"
                  target="_blank"
                  rel="noreferrer"
                  className="bg-blue-700 text-white px-4 py-2 rounded-lg"
                >
                  @enzapost
                </a>
              </div>
            </div>

            <div className="p-6 bg-red-50 rounded-xl">
              <h5 className="text-2xl font-semibold mb-2">TikTok</h5>
              <p className="text-sm text-gray-700">
                Video pendek tutorial & tips.
              </p>
              <div className="mt-4">
                <a
                  href="https://www.tiktok.com/@enzapostmedia"
                  target="_blank"
                  rel="noreferrer"
                  className="bg-blue-700 text-white px-4 py-2 rounded-lg"
                >
                  @enzapostmedia
                </a>
              </div>
            </div>

            <div className="p-6 bg-red-50 rounded-xl">
              <h5 className="text-2xl font-semibold mb-2">YouTube</h5>
              <p className="text-sm text-gray-700">
                Tutorial, shorts & demo project.
              </p>
              <div className="mt-4">
                <a
                  href="https://www.youtube.com/@enzavlogpost"
                  target="_blank"
                  rel="noreferrer"
                  className="bg-blue-700 text-white px-4 py-2 rounded-lg"
                >
                  Inzaghi's Media
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Group Network */}
      <section className="inzaghis-group-network">
        <div className="bg-white rounded-xl p-6 shadow-md flex flex-col md:flex-row items-center gap-6">
          <div className="flex-1">
            <h2 className="text-2xl font-semibold">Inzaghi's Group Network</h2>
            <p className="text-gray-600 mt-2">
              Inzaghi's Group menyediakan layanan konten berbasis teknologi dan
              sains untuk akses informasi yang bermanfaat.
            </p>
            <div className="mt-4">
              <Link
                to="/networks"
                className="bg-green-600 text-white px-4 py-2 rounded-lg"
              >
                DETAILS
              </Link>
            </div>
          </div>

          <div className="grid grid-cols-4 gap-4 w-full md:w-1/2">
            <img
              src="/assets/icons/inzaghis-blog-logo-vertical-transparent.png"
              alt="logo"
              className="h-16 mx-auto"
            />
            <img
              src="/assets/icons/inzaghis-sites-logo-vertical-transparent.png"
              alt="logo"
              className="h-16 mx-auto"
            />
            <img
              src="/assets/icons/inzaghis-media-logo-vertical-transparent.png"
              alt="logo"
              className="h-16 mx-auto"
            />
            <img
              src="/assets/icons/inzaghis-dev-logo-vertical-transparent.png"
              alt="logo"
              className="h-16 mx-auto"
            />
          </div>
        </div>
      </section>
    </main>
  );
}
