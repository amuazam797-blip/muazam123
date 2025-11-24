<?php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>VIBE STREETWEAR ® | Premium Streetwear</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <style>
    :root {
      --primary: #000000;
      --secondary: #ffffff;
      --accent: #ff4655;
      --gray: #f5f5f5;
    }
    * { margin:0; padding:0; box-sizing:border-box; }
    body {
      font-family: 'Montserrat', sans-serif;
      color: var(--primary);
      background: var(--secondary);
      line-height: 1.6;
    }
    header {
      position: fixed;
      top: 0;
      width: 100%;
      background: rgba(255,255,255,0.95);
      backdrop-filter: blur(10px);
      z-index: 1000;
      padding: 1rem 5%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #eee;
    }
    .logo {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-weight: 700;
      letter-spacing: 2px;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 2rem;
    }
    nav a {
      text-decoration: none;
      color: var(--primary);
      font-weight: 500;
      transition: color 0.3s;
    }
    nav a:hover { color: var(--accent); }
    .cart { font-size: 1.4rem; position: relative; }
    .cart span {
      position: absolute;
      top: -8px;
      right: -10px;
      background: var(--accent);
      color: white;
      font-size: 0.7rem;
      width: 18px;
      height: 18px;
      border-radius: 50%;
      display: grid;
      place-items: center;
    }

    /* Hero */
    .hero {
      height: 100vh;
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1445205170230-053b83016050?q=80&w=2070&auto=format&fit=crop') center/cover no-repeat;
      display: grid;
      place-items: center;
      text-align: center;
      color: white;
    }
    .hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 5rem;
      margin-bottom: 1rem;
    }
    .hero p { font-size: 1.3rem; margin-bottom: 2rem; }
    .btn {
      padding: 1rem 3rem;
      background: var(--accent);
      color: white;
      border: none;
      font-size: 1.1rem;
      cursor: pointer;
      transition: 0.3s;
    }
    .btn:hover { background: #e03a45; transform: scale(1.05); }

    /* Products */
    .products {
      padding: 120px 5%;
      background: var(--gray);
    }
    .section-title {
      text-align: center;
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      margin-bottom: 4rem;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      max-width: 1400px;
      margin: 0 auto;
    }
    .card {
      background: white;
      overflow: hidden;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.4s;
    }
    .card:hover { transform: translateY(-10px); }
    .card img {
      width: 100%;
      height: 380px;
      object-fit: cover;
    }
    .card-info {
      padding: 1.5rem;
      text-align: center;
    }
    .card-info h3 { margin-bottom: 0.5rem; }
    .price {
      font-weight: 700;
      font-size: 1.3rem;
      color: var(--accent);
    }

    /* Footer */
    footer {
      background: var(--primary);
      color: white;
      padding: 4rem 5% 2rem;
      text-align: center;
    }
    .footer-links {
      display: flex;
      justify-content: center;
      gap: 3rem;
      margin-bottom: 2rem;
      flex-wrap: wrap;
    }
    .footer-links a {
      color: #ccc;
      text-decoration: none;
    }
    .socials a {
      color: white;
      font-size: 1.5rem;
      margin: 0 1rem;
    }

    @media (max-width: 768px) {
      .hero h1 { font-size: 3.5rem; }
      nav ul { gap: 1rem; font-size: 0.9rem; }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">VIBE</div>
    <nav>
      <ul>
        <li><a href="#">New</a></li>
        <li><a href="#">Men</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">Sale</a></li>
        <li><a href="#" class="cart"><i class="fas fa-shopping-bag"></i><span>3</span></a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div>
      <h1>Fall/Winter 2025</h1>
      <p>Bold silhouettes. Premium fabrics. Unapologetic style.</p>
      <button class="btn">Shop Collection</button>
    </div>
  </section>

  <!-- Featured Products -->
  <section class="products">
    <h2 class="section-title">New Arrivals</h2>
    <div class="grid">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=2070&auto=format&fit=crop" alt="Sneakers">
        <div class="card-info">
          <h3>VIBE Runner Pro</h3>
          <p class="price">$179</p>
        </div>
      </div>
      <div class="card">
        <img src="https://images.unsplash.com/photo-1554560418-2959146b2af2?q=80&w=2070&auto=format&fit=crop" alt="Hoodie">
        <div class="card-info">
          <h3>Oversized Signature Hoodie</h3>
          <p class="price">$89</p>
        </div>
      </div>
      <div class="card">
        <img src="https://images.unsplash.com/photo-1596755095171-8f1be4d5f6b9?q=80&w=2070&auto=format&fit=crop" alt="Jacket">
        <div class="card-info">
          <h3>Tech Puffer Jacket</h3>
          <p class="price">$249</p>
        </div>
      </div>
      <div class="card">
        <img src="https://images.unsplash.com/photo-1584911849127-99f0b7df5e89?q=80&w=2070&auto=format&fit=crop" alt="Pants">
        <div class="card-info">
          <h3>Cargo Tactical Pants</h3>
          <p class="price">$119</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-links">
      <a href="#">About</a>
      <a href="#">Contact</a>
      <a href="#">Shipping</a>
      <a href="#">Returns</a>
      <a href="#">Privacy Policy</a>
    </div>
    <div class="socials">
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-tiktok"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
    <p>&copy; 2025 VIBE STREETWEAR ® – All Rights Reserved</p>
  </footer>

  <script>
    // Simple scroll effect for header
    window.addEventListener('scroll', () => {
      document.querySelector('header').classList.toggle('scrolled', window.scrollY > 50);
    });
  </script>
</body>
</html>


?>