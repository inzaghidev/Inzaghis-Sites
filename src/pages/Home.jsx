import { Link } from "react-router-dom";

export default function Home() {
  return (
    <section className="max-w-7xl mx-auto px-6 py-16">
      <div className="text-center">
        <h1 className="text-4xl md:text-5xl font-bold text-gray-800">
          Welcome to Inzaghi's Sites
        </h1>
        <p className="mt-6 text-lg text-gray-600 max-w-2xl mx-auto">
          A collection of modern tools, utilities, generators, and web
          applications designed to improve productivity and workflow.
        </p>
      </div>

      <div className="grid md:grid-cols-3 gap-8 mt-16">
        <Link
          to="/apps"
          className="bg-white shadow-lg rounded-xl p-6 hover:shadow-2xl hover:scale-105 transition-all cursor-pointer"
        >
          <div className="text-4xl mb-4">🛠️</div>
          <h3 className="text-xl font-semibold">Apps</h3>
          <p className="mt-3 text-gray-600">
            Explore calculators, converters, generators, and more.
          </p>
        </Link>

        <Link
          to="/portals"
          className="bg-white shadow-lg rounded-xl p-6 hover:shadow-2xl hover:scale-105 transition-all cursor-pointer"
        >
          <div className="text-4xl mb-4">📚</div>
          <h3 className="text-xl font-semibold">Portals</h3>
          <p className="mt-3 text-gray-600">
            Access curated learning materials and resources.
          </p>
        </Link>

        <Link
          to="/about"
          className="bg-white shadow-lg rounded-xl p-6 hover:shadow-2xl hover:scale-105 transition-all cursor-pointer"
        >
          <div className="text-4xl mb-4">📖</div>
          <h3 className="text-xl font-semibold">Resources</h3>
          <p className="mt-3 text-gray-600">
            Technical insights, tutorials, and documentation.
          </p>
        </Link>
      </div>

      <div className="mt-16 text-center">
        <h2 className="text-3xl font-bold text-gray-800 mb-6">Get Started</h2>
        <div className="flex flex-col md:flex-row justify-center gap-4">
          <Link
            to="/contact"
            className="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-800 transition"
          >
            Contact Us
          </Link>
          <Link
            to="/profile"
            className="bg-gray-200 text-gray-800 px-8 py-3 rounded-lg hover:bg-gray-300 transition"
          >
            View Profile
          </Link>
        </div>
      </div>
    </section>
  );
}
