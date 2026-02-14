import { Link } from 'react-router-dom'
import { Helmet } from 'react-helmet-async'
export default function NotFound() {
  return (
    <>
      <Helmet><title>404 - Page Not Found</title></Helmet>
      <div className="min-h-screen flex items-center justify-center">
        <div className="text-center">
          <h1 className="text-6xl font-bold text-gray-900 dark:text-white mb-4">404</h1>
          <p className="text-xl text-gray-600 dark:text-gray-400 mb-8">Page not found</p>
          <Link to="/" className="px-6 py-3 bg-primary-600 text-white rounded-lg">Go Home</Link>
        </div>
      </div>
    </>
  )
}
