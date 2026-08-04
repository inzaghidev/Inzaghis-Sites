import { Helmet } from "react-helmet-async";

export default function InzaghisBlog() {
  return (
    <>
      <Helmet>
        <title>Inzaghi's Blog - Inzaghi's Sites</title>
      </Helmet>
      <section className="inzaghis-group-pages inzaghisblog-slider">
        <div className="page-wrapper inzagroup-pages">
          <h1 className="my-4 page-title">📝 Inzaghi's Blog</h1>
            <div className="bg-white shadow-xl rounded-lg p-6 ring-1 ring-yellow-500">
              <div className="card-apps">
              <h2 className="text-4xl font-bold mb-4 font-[Inter]">Description</h2>
              <p className="text-black text-sm font-[Inter]">
                Inzaghi's Blog merupakan Platform Blogging sebagai tempat untuk
                berbagi Ilmu Pengetahuan, terutama seputar IT. Inzaghi's Blog
                lebih menggunakan Platform Blogger, agar lebih mudah dan praktis.
              Untuk melihat Halaman ini di Google Sites, silakan lihat di sini :
            </p>
            <br />
            <section className="group-button">
              <a
                href="https://sites.google.com/view/inzaghis-sites/pages/inzaghis-blog"
                target="_blank"
                className="btn btn-outline-light description-button"
                >Click here</a
              >
            </section>
            <br />
            <p className="text-black text-sm font-[Inter]">
              Untuk melihat Inzaghi's Blog Aggregator yang ditarik Data
              Postingan-nya menggunakan API Blogger, silakan lihat di sini :
            </p>
            <br />
            <section className="group-button">
              <a
                href="https://inzaghis-blog-aggregator.vercel.app/"
                target="_blank"
                className="btn btn-outline-light description-button"
                >Inzaghi's Blog Aggregator</a
              >
            </section>
            <hr className="my-6 border-t border-gray-500" />
          </div>
            <br />
            <div className="mb-6">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <span className="text-3xl text-gray-700 font-bold font-[Inter]">
                  Inzaghi's Blog (Legacy)
                </span>
                <button type="button">
                  <a
                    href="https://inzaghiposuma.blogspot.com"
                    target="_blank"
                    rel="noreferrer"
                    className="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >
                    Klik di sini
                  </a>
                </button>
              </div>
              <p className="mt-2 text-gray-600 text-sm font-[Inter]">
                Merupakan Blog Lama yang sudah tersedia sejak Tahun 2018, tempat
                untuk memposting apapun itu.
              </p>
              <br />
              <iframe
                src="https://inzaghiposuma.blogspot.com"
                id="inzaghis-blog-embed"
                title="Inzaghi's Blog Legacy"
              ></iframe>
            </div>
            <div className="mb-6">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <span className="text-3xl text-gray-700 font-bold font-[Inter]">
                  Teknoblog
                </span>
                <button type="button">
                  <a
                    href="https://enzatech.blogspot.com"
                    target="_blank"
                    rel="noreferrer"
                    className="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >
                    Klik di sini
                  </a>
                </button>
              </div>
              <p className="mt-2 text-gray-600 text-sm font-[Inter]">
                Merupakan Pindahan dari Blog Lama yang bernama Inzaghi's Blog
                (Legacy), dan Artikel yang dikhususkan tentang Teknologi.
              </p>
              <br />
              <iframe
                src="https://enzatech.blogspot.com"
                id="inzaghis-blog-embed"
                title="Teknoblog"
              ></iframe>
            </div>
            <div className="mb-6">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <span className="text-3xl text-gray-700 font-bold font-[Inter]">
                  Miniblog
                </span>
                <button type="button">
                  <a
                    href="https://enzashorts.blogspot.com"
                    target="_blank"
                    rel="noreferrer"
                    className="inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-gray-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >
                    Klik di sini
                  </a>
                </button>
              </div>
              <p className="mt-2 text-gray-600 text-sm font-[Inter]">
                Merupakan Blog khusus Microblogging, terutama untuk menyimpan
                Postingan Sederhana seperti Kode Program Sederhana, hingga Teks
                dan Tutorial Singkat.
              </p>
              <br />
              <iframe
                src="https://enzashorts.blogspot.com"
                id="inzaghis-blog-embed"
                title="Miniblog"
              ></iframe>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
