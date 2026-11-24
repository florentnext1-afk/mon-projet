import ArticleCard from '../Components/ArticleCard'
function Home() {
  return (
    <div className="container">
      <div className="hero">
        <h1>Bienvenue sur mon Blog !</h1>
        <p>Découvrez mes derniers articles sur le développement web.</p>
      </div>
      <div className="grid">
        <ArticleCard titre="Mon premier article" description="Voici comment j'ai commencé à apprendre React et pourquoi j'adore ça." />
        <ArticleCard titre="Pourquoi React ?" description="React permet de créer des sites rapides, modernes et interactifs." />
      </div>
    </div>
  )
}
export default Home