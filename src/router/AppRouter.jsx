import { BrowserRouter, Routes, Route } from "react-router-dom";
import Layout from "../components/layout/Layout";

import Home from "../pages/Home.jsx";
import About from "../pages/About.jsx";
import Contact from "../pages/Contact.jsx";
import Profile from "../pages/Profile.jsx";
import Disclaimer from "../pages/Disclaimer.jsx";
import PrivacyPolicy from "../pages/PrivacyPolicy.jsx";

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
          <Route path="/portals" element={<Portals />} />
          <Route path="*" element={<NotFound />} />
        </Routes>
      </Layout>
    </BrowserRouter>
  );
}

function Apps() {
  return (
    <section className="max-w-5xl mx-auto px-6 py-16">
      <h1 className="text-4xl font-bold text-gray-800 mb-6">Apps & Tools</h1>
      <div className="bg-white p-8 rounded-xl shadow-lg">
        <p className="text-gray-600">
          Coming soon! Explore a wide range of calculators, converters,
          generators, and more utilities.
        </p>
      </div>
    </section>
  );
}

function Portals() {
  return (
    <section className="max-w-5xl mx-auto px-6 py-16">
      <h1 className="text-4xl font-bold text-gray-800 mb-6">
        Learning Portals
      </h1>
      <div className="bg-white p-8 rounded-xl shadow-lg">
        <p className="text-gray-600">
          Coming soon! Access curated learning materials, courses, and
          educational resources.
        </p>
      </div>
    </section>
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
