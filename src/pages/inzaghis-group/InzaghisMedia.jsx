import { useEffect } from "react";
import { Helmet } from "react-helmet-async";

export default function InzaghisMedia() {
  useEffect(() => {
    // Load Instagram widget script
    const instagramScript = document.createElement("script");
    instagramScript.src =
      "https://widgets.sociablekit.com/instagram-feed/widget.js";
    instagramScript.async = true;
    instagramScript.defer = true;
    document.body.appendChild(instagramScript);

    // Load TikTok widget script
    const tiktokScript = document.createElement("script");
    tiktokScript.src = "https://widgets.sociablekit.com/tiktok-feed/widget.js";
    tiktokScript.async = true;
    tiktokScript.defer = true;
    document.body.appendChild(tiktokScript);

    // Load YouTube widget script
    const youtubeScript = document.createElement("script");
    youtubeScript.src =
      "https://widgets.sociablekit.com/youtube-channel-videos/widget.js";
    youtubeScript.defer = true;
    document.body.appendChild(youtubeScript);

    // Load Twitter widget script
    const twitterScript = document.createElement("script");
    twitterScript.src =
      "https://widgets.sociablekit.com/twitter-feed/widget.js";
    twitterScript.defer = true;
    document.body.appendChild(twitterScript);

    // Load Threads widget script
    const threadsScript = document.createElement("script");
    threadsScript.src =
      "https://widgets.sociablekit.com/threads-posts/widget.js";
    threadsScript.defer = true;
    document.body.appendChild(threadsScript);

    return () => {
      // Cleanup scripts on unmount
      document.body.removeChild(instagramScript);
      document.body.removeChild(tiktokScript);
      document.body.removeChild(youtubeScript);
      document.body.removeChild(twitterScript);
      document.body.removeChild(threadsScript);
    };
  }, []);

  return (
    <>
      <Helmet>
        <title>Inzaghi's Media - Inzaghi's Sites</title>
      </Helmet>
      <section className="inzaghis-group-pages inzaghismedia-slider">
        <div className="page-wrapper inzagroup-pages">
          <h1 className="my-4 page-title">📰 Inzaghi's Media</h1>
          <div className="bg-white shadow-xl rounded-lg p-6 ring-1 ring-red-400">
            <div className="card-apps">
              <h2 className="text-4xl font-bold mb-4 font-[Inter]">
                Description
              </h2>
              <p className="text-black text-sm font-[Inter]">
                Inzaghi's Media merupakan Platform Layanan untuk Sharing Ilmu,
                terutama seputar IT. Untuk melihat Halaman ini di Google Sites,
                silakan lihat di sini :
              </p>
              <br />
              <section className="group-button">
                <a
                  href="https://sites.google.com/view/inzaghis-sites/pages/inzaghis-media"
                  target="_blank"
                  className="btn btn-outline-light description-button"
                >
                  Click here
                </a>
              </section>
              <hr className="my-6 border-t border-gray-500" />
            </div>
            <br />
            <div className="mb-6">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div className="flex items-center">
                  <img
                    src="/icons/instagram-logo.svg"
                    alt="Instagram Logo"
                    width="44"
                    height="44"
                  />
                  <span className="text-3xl ml-3 text-gray-700 font-bold font-[Inter]">
                    Instagram
                  </span>
                </div>
                <a
                  href="https://www.instagram.com/enzapost"
                  target="_blank"
                  rel="noreferrer"
                  className="branchButton inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                  @enzapost
                </a>
              </div>
              <p className="mt-2 text-gray-600 text-sm font-[Inter]">
                Sebagai Postingan berbentuk Gambar Persegi dan sebagai Asisten
                dari Inzaghi's Blog.
              </p>
              <br />
              <div className="sk-instagram-feed" data-embed-id="25485818"></div>
            </div>
            <div className="mb-6">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div className="flex items-center">
                  <img
                    src="/icons/tiktok-logo.svg"
                    alt="TikTok Logo"
                    width="44"
                    height="44"
                  />
                  <span className="text-3xl ml-3 text-gray-700 font-bold font-[Inter]">
                    TikTok
                  </span>
                </div>
                <a
                  href="https://www.tiktok.com/@enzapostmedia"
                  target="_blank"
                  rel="noreferrer"
                  className="branchButton inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                  @enzapostmedia
                </a>
              </div>
              <p className="mt-2 text-gray-600 text-sm font-[Inter]">
                Sebagai Postingan berbentuk Video Vertikal (Portrait) yang dapat
                di-Scrolling seperti Video Tutorial/Tips dan Informasi Singkat.
              </p>
              <br />
              <div className="sk-tiktok-feed" data-embed-id="25485777"></div>
            </div>
            <div className="mb-6">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div className="flex items-center">
                  <img
                    src="/icons/youtube-logo.svg"
                    alt="YouTube Logo"
                    width="44"
                    height="44"
                  />
                  <span className="text-3xl ml-3 text-gray-700 font-bold font-[Inter]">
                    YouTube
                  </span>
                </div>
                <a
                  href="https://www.youtube.com/@enzavlogpost"
                  target="_blank"
                  rel="noreferrer"
                  className="branchButton inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                  Inzaghi's Media
                </a>
              </div>
              <p className="mt-2 text-gray-600 text-sm font-[Inter]">
                Sebagai sebuah Channel yang berbentuk Video seperti Tutorial,
                Video Shorts, hingga Demo Aplikasi/Project.
              </p>
              <br />
              <div
                className="sk-ww-youtube-channel-videos"
                data-embed-id="25676479"
              ></div>
            </div>
            <div className="mb-6">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div className="flex items-center">
                  <img
                    src="/icons/x-twitter-logo.svg"
                    alt="X Logo"
                    width="44"
                    height="44"
                  />
                  <span className="text-3xl ml-3 text-gray-700 font-bold font-[Inter]">
                    Twitter/X
                  </span>
                </div>
                <a
                  href="https://x.com/InzaTechMedia"
                  target="_blank"
                  rel="noreferrer"
                  className="branchButton inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                  @InzaTechMedia
                </a>
              </div>
              <p className="mt-2 text-gray-600 text-sm font-[Inter]">
                Sebagai Postingan berbentuk Repost/Retweet, Utasan/Tulisan,
                hingga Postingan-postingan dari Inzaghi's Blog.
              </p>
              <br />
              <div
                className="sk-ww-twitter-feed"
                data-embed-id="25676338"
              ></div>
            </div>
            <div className="mb-6">
              <div className="flex justify-between flex-wrap gap-2 mb-4 w-full">
                <div className="flex items-center">
                  <img
                    src="/icons/threads-logo.svg"
                    alt="Threads Logo"
                    width="44"
                    height="44"
                  />
                  <span className="text-3xl ml-3 text-gray-700 font-bold font-[Inter]">
                    Threads
                  </span>
                </div>
                <a
                  href="https://www.threads.net/@enzapost"
                  target="_blank"
                  rel="noreferrer"
                  className="branchButton inline-flex items-center px-4 py-2 md:px-6 lg:py-2.5 xl:px-8 text-sm font-medium text-center rounded-lg hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                  @enzapost
                </a>
              </div>
              <p className="mt-2 text-gray-600 text-sm font-[Inter]">
                Sama seperti di X, Sebagai Postingan berbentuk Repost,
                Utasan/Tulisan, hingga Postingan-postingan dari Instagram dan
                Inzaghi's Blog.
              </p>
              <br />
              <div
                className="sk-ww-threads-posts"
                data-embed-id="25676359"
              ></div>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
