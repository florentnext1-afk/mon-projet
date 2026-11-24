import { Link } from 'react-router-dom'
function Header() {
  return (
    <header className="header">
      <div className="logo">Mon<span>Blog</span></div>
      <nav className="nav">
        <Link to="/">Accueil</Link>
        <Link to="/blog">Blog</Link>
        <Link to="/about">À propos</Link>
        <Link to="/contact">Contact</Link>
      </nav>
    </header>
  )
}
export default Header