import ArticleCard from '../Components/ArticleCard'
function Blog() {
  return (
    <div style={{ padding: '20px' }}>
      <h1>Tous les articles</h1>
      <div style={{ display: 'grid', gridTemplateColumns: '1fr 1fr', gap: '20px', marginTop: '20px' }}>
        <ArticleCard titre="Article 1" description="Description de l'article 1" />
        <ArticleCard titre="Article 2" description="Description de l'article 2" />
        <ArticleCard titre="Article 3" description="Description de l'article 3" />
        <ArticleCard titre="Article 4" description="Description de l'article 4" />
      </div>
    </div>
  )
}
export default Blog