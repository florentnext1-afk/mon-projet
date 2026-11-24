function ArticleCard({ titre, description }) {
  return (
    <div className="card">
      <h3>{titre}</h3>
      <p>{description}</p>
      <button className="btn">Lire la suite →</button>
    </div>
  )
}
export default ArticleCard