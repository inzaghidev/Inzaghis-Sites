import { useState } from "react";

export default function Contact() {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    message: "",
  });

  const [submitted, setSubmitted] = useState(false);
  const [loading, setLoading] = useState(false);

  const handleChange = (e) => {
    const { name, value } = e.target;
    setFormData((prev) => ({
      ...prev,
      [name]: value,
    }));
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    if (!formData.name || !formData.email || !formData.message) {
      alert("Please fill in all fields");
      return;
    }

    setLoading(true);

    try {
      // Simulate form submission
      await new Promise((resolve) => setTimeout(resolve, 1000));
      setSubmitted(true);
      setFormData({ name: "", email: "", message: "" });

      // Reset success message after 3 seconds
      setTimeout(() => setSubmitted(false), 3000);
    } catch (error) {
      console.error("Error submitting form:", error);
    } finally {
      setLoading(false);
    }
  };

  return (
    <section
      className="page-background page-sub-container-full bg-gray-50 light:bg-slate-800"
      id="contact"
    >
      <div className="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
        <div className="mb-4">
          <div className="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
            <h2 className="page-title font-heading mb-4 font-bold tracking-tight text-green-700 light:text-green-800 text-3xl sm:text-5xl">
              Contact Us
            </h2>
          </div>
        </div>
        <div className="flex items-stretch justify-center">
          <div className="grid md:grid-cols-2">
            <div className="h-full pr-6">
              <p className="font-[Inter] mt-3 mb-12 text-md text-gray-600 dark:text-slate-600">
                Do you have any questions? Please do not hesitate to contact us
                directly. Our team will come back to you within a matter of
                hours to help you.
              </p>
              <ul className="mb-6 md:mb-0">
                <li className="flex">
                  <div className="flex h-10 w-10 items-center justify-center rounded bg-green-800 text-gray-50">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      className="h-6 w-6"
                    >
                      <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                      <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
                    </svg>
                  </div>
                  <div className="ml-4 mb-4">
                    <h3 className="font-[Inter] mb-2 text-lg font-bold leading-6 text-gray-800 light:text-black">
                      Our Address
                    </h3>
                    <p className="font-[Inter] text-sm text-gray-600 dark:text-slate-600">
                      Jl. K. H. Hasyim Ashari Perum. Banjar Wijaya Cluster
                      Cemara 1 RT. 04/RW. 013 Blok. B1. No. 32
                    </p>
                    <p className="font-[Inter] text-sm text-gray-600 dark:text-slate-600">
                      Tangerang, Banten 15142, Indonesia
                    </p>
                  </div>
                </li>
                <li className="flex">
                  <div className="flex h-10 w-10 items-center justify-center rounded bg-green-800 text-gray-50">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      className="h-6 w-6"
                    >
                      <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                      <path d="M15 7a2 2 0 0 1 2 2"></path>
                      <path d="M15 3a6 6 0 0 1 6 6"></path>
                    </svg>
                  </div>
                  <div className="ml-4 mb-4">
                    <h3 className="font-[Inter] mb-2 text-lg font-bold leading-6 text-gray-800 light:text-black">
                      Contact
                    </h3>
                    <p className="font-[Inter] text-sm text-gray-600 dark:text-slate-600">
                      Mobile : (+62) 813 4396 1494
                    </p>
                    <p className="font-[Inter] text-sm text-gray-600 dark:text-slate-600">
                      Email : izzumiposhaf29@gmail.com
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            <div className="card h-fit max-w-6xl p-5 md:p-6" id="form">
              <h2 className="font-[Inter] mb-4 text-2xl font-bold text-green-700 light:text-green-800">
                Ready to Get Started?
              </h2>
              <form id="contactForm">
                <div className="mb-6">
                  <div className="mx-0 mb-1 sm:mb-4">
                    <div className="mx-0 mb-1 sm:mb-4">
                      <label
                        for="name"
                        className="pb-1 text-sm text-gray-700 md:text-xs xl:text-sm font-bold uppercase tracking-wider"
                      >
                        Name
                      </label>
                      <input
                        type="text"
                        id="name"
                        name="name"
                        autocomplete="given-name"
                        placeholder="Enter Name"
                        className="mb-2 w-full rounded-md border border-green-600 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"
                      />
                    </div>
                    <div className="mx-0 mb-1 sm:mb-4">
                      <label
                        for="email"
                        className="pb-1 text-sm text-gray-700 md:text-xs xl:text-sm font-bold uppercase tracking-wider"
                      >
                        Email
                      </label>
                      <input
                        type="email"
                        id="email"
                        name="email"
                        autocomplete="email"
                        placeholder="Enter Email Address"
                        className="mb-2 w-full rounded-md border border-green-600 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"
                      />
                    </div>
                  </div>
                  <div className="mx-0 mb-1 sm:mb-4">
                    <label
                      for="textarea"
                      className="pb-1 text-sm text-gray-700 md:text-xs xl:text-sm font-bold uppercase tracking-wider"
                    >
                      Message
                    </label>
                    <textarea
                      id="textarea"
                      name="message"
                      cols="30"
                      rows="5"
                      placeholder="Write your Message..."
                      className="mb-2 w-full rounded-md border border-green-600 py-2 pl-2 pr-4 shadow-md dark:text-gray-800 sm:mb-0"
                    ></textarea>
                  </div>
                </div>
                <div className="text-center">
                  <button
                    type="submit"
                    className="w-full bg-green-800 hover:bg-green-700 text-white px-6 py-3 font-xl rounded-lg sm:mb-0 shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none hover:text-white"
                  >
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
