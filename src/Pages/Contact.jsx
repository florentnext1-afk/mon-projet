function Contact() {
  return (
    <div style={{ padding: '20px' }}>
      <h1>Contactez-moi</h1>
      <form style={{ display: 'flex', flexDirection: 'column', gap: '10px', maxWidth: '400px' }}>
        <input placeholder="Votre nom" style={{ padding: '10px' }} />
        <input placeholder="Votre email" style={{ padding: '10px' }} />
        <textarea placeholder="Votre message" style={{ padding: '10px', height: '100px' }}></textarea>
        <button style={{ background: '#111', color: 'white', padding: '10px', border: 'none' }}>Envoyer</button>
      </form>
    </div>
  )
}
export default Contact