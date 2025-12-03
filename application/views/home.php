<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SL Courses - Premium Learning Platform</title>
  <meta name="description" content="Your Gateway to the Best Online Courses in Sri Lanka">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --primary: #6366f1;
      --secondary: #ec4899;
      --accent: #14b8a6;
      --dark: #0a0a0a;
      --dark-light: #1a1a1a;
      --gray: #9ca3af;
      --light: #f9fafb;
      --white: #ffffff;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Outfit', sans-serif;
      line-height: 1.6;
      color: var(--dark);
      background: var(--dark);
      overflow-x: hidden;
    }

    /* Animated Background */
    .animated-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
    }

    .animated-bg::before {
      content: '';
      position: absolute;
      width: 200%;
      height: 200%;
      background: 
        radial-gradient(circle at 20% 50%, rgba(99, 102, 241, 0.15) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(236, 72, 153, 0.15) 0%, transparent 50%),
        radial-gradient(circle at 40% 20%, rgba(20, 184, 166, 0.15) 0%, transparent 50%);
      animation: morphing 20s ease-in-out infinite;
    }

    @keyframes morphing {
      0%, 100% { transform: translate(0, 0) rotate(0deg); }
      33% { transform: translate(50px, 100px) rotate(120deg); }
      66% { transform: translate(-50px, 50px) rotate(240deg); }
    }

    /* Floating Particles */
    .particles {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      pointer-events: none;
    }

    .particle {
      position: absolute;
      width: 4px;
      height: 4px;
      background: rgba(99, 102, 241, 0.5);
      border-radius: 50%;
      animation: float-particle 15s infinite;
    }

    @keyframes float-particle {
      0%, 100% { transform: translateY(0) translateX(0); opacity: 0; }
      10% { opacity: 1; }
      90% { opacity: 1; }
      100% { transform: translateY(-1000px) translateX(200px); opacity: 0; }
    }

    /* Header */
    .header {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      background: rgba(10, 10, 10, 0.8);
      backdrop-filter: blur(20px) saturate(180%);
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .header.scrolled {
      background: rgba(10, 10, 10, 0.95);
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
    }

    .header-container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 1.2rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 900;
      background: linear-gradient(135deg, #6366f1, #ec4899, #14b8a6);
      background-size: 200% 200%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-decoration: none;
      animation: gradient-shift 5s ease infinite;
      position: relative;
      transition: transform 0.3s ease;
    }

    .logo:hover {
      transform: scale(1.05);
    }

    @keyframes gradient-shift {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }

    .nav {
      display: flex;
      gap: 3rem;
      list-style: none;
      align-items: center;
    }

    .nav a {
      text-decoration: none;
      color: rgba(255, 255, 255, 0.8);
      font-weight: 600;
      transition: all 0.3s ease;
      position: relative;
      font-size: 1rem;
      letter-spacing: 0.5px;
    }

    .nav a::before {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 50%;
      width: 0;
      height: 2px;
      background: linear-gradient(90deg, #6366f1, #ec4899);
      transform: translateX(-50%);
      transition: width 0.3s ease;
    }

    .nav a:hover,
    .nav a.active {
      color: var(--white);
    }

    .nav a:hover::before,
    .nav a.active::before {
      width: 100%;
    }

    .mobile-toggle {
      display: none;
      font-size: 1.8rem;
      cursor: pointer;
      color: var(--white);
      transition: transform 0.3s ease;
    }

    .mobile-toggle:hover {
      transform: scale(1.1) rotate(90deg);
    }

    /* Hero Section */
    .hero {
      margin-top: 70px;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
      background: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1920&q=80') center/cover;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(10, 10, 10, 0.9), rgba(99, 102, 241, 0.7));
      z-index: 1;
    }

    .hero-content {
      text-align: center;
      color: var(--white);
      position: relative;
      z-index: 2;
      padding: 2rem;
      max-width: 1000px;
    }

    .hero-badge {
      display: inline-block;
      padding: 0.6rem 1.5rem;
      background: rgba(99, 102, 241, 0.2);
      border: 1px solid rgba(99, 102, 241, 0.5);
      border-radius: 50px;
      color: #a5b4fc;
      font-size: 0.9rem;
      font-weight: 600;
      margin-bottom: 2rem;
      animation: fadeInDown 0.8s ease;
      backdrop-filter: blur(10px);
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .hero h1 {
      font-size: 5rem;
      margin-bottom: 1.5rem;
      font-weight: 900;
      line-height: 1.1;
      background: linear-gradient(135deg, #ffffff, #a5b4fc, #f9a8d4);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: fadeInUp 0.8s ease 0.2s backwards;
      letter-spacing: -2px;
    }

    .hero p {
      font-size: 1.5rem;
      margin-bottom: 3rem;
      color: rgba(255, 255, 255, 0.9);
      animation: fadeInUp 0.8s ease 0.4s backwards;
      font-weight: 400;
    }

    .cta-buttons {
      display: flex;
      gap: 1.5rem;
      justify-content: center;
      animation: fadeInUp 0.8s ease 0.6s backwards;
      flex-wrap: wrap;
    }

    .cta-button {
      padding: 1.2rem 2.5rem;
      text-decoration: none;
      border-radius: 50px;
      font-weight: 700;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      font-size: 1.1rem;
      position: relative;
      overflow: hidden;
      letter-spacing: 0.5px;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }

    .cta-button.primary {
      background: linear-gradient(135deg, #6366f1, #ec4899);
      color: var(--white);
      box-shadow: 0 10px 40px rgba(99, 102, 241, 0.4);
    }

    .cta-button.primary::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      transition: left 0.7s ease;
    }

    .cta-button.primary:hover::before {
      left: 100%;
    }

    .cta-button.primary:hover {
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0 20px 60px rgba(99, 102, 241, 0.6);
    }

    .cta-button.secondary {
      background: rgba(255, 255, 255, 0.1);
      color: var(--white);
      border: 2px solid rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(10px);
    }

    .cta-button.secondary:hover {
      background: rgba(255, 255, 255, 0.2);
      border-color: rgba(255, 255, 255, 0.5);
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0 15px 40px rgba(255, 255, 255, 0.2);
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Scroll Indicator */
    .scroll-indicator {
      position: absolute;
      bottom: 3rem;
      left: 50%;
      transform: translateX(-50%);
      animation: bounce 2s infinite;
      z-index: 2;
      cursor: pointer;
    }

    .scroll-indicator i {
      font-size: 2rem;
      color: rgba(255, 255, 255, 0.7);
    }

    @keyframes bounce {
      0%, 100% { transform: translateX(-50%) translateY(0); }
      50% { transform: translateX(-50%) translateY(15px); }
    }

    /* Section Styles */
    .section {
      padding: 8rem 2rem;
      max-width: 1400px;
      margin: 0 auto;
      position: relative;
    }

    .section-title {
      text-align: center;
      margin-bottom: 5rem;
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s ease;
    }

    .section-title.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .section-title .badge {
      display: inline-block;
      padding: 0.5rem 1.2rem;
      background: rgba(99, 102, 241, 0.1);
      border: 1px solid rgba(99, 102, 241, 0.3);
      border-radius: 50px;
      color: #a5b4fc;
      font-size: 0.85rem;
      font-weight: 600;
      margin-bottom: 1rem;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    .section-title h2 {
      font-size: 3.5rem;
      margin-bottom: 1rem;
      background: linear-gradient(135deg, #ffffff, #a5b4fc);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      font-weight: 900;
      letter-spacing: -1px;
    }

    .section-title p {
      font-size: 1.3rem;
      color: var(--gray);
    }

    /* Stats Section */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
      margin: 4rem 0;
    }

    .stat-card {
      text-align: center;
      padding: 2.5rem;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 25px;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      opacity: 0;
      transform: translateY(30px);
    }

    .stat-card.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .stat-card:hover {
      transform: translateY(-10px) scale(1.05);
      background: rgba(255, 255, 255, 0.05);
      border-color: rgba(99, 102, 241, 0.5);
      box-shadow: 0 20px 60px rgba(99, 102, 241, 0.3);
    }

    .stat-number {
      font-size: 3.5rem;
      font-weight: 900;
      background: linear-gradient(135deg, #6366f1, #ec4899);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 0.5rem;
    }

    .stat-label {
      color: var(--gray);
      font-size: 1.1rem;
      font-weight: 500;
    }

    /* About Section */
    .about-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 2.5rem;
      margin-top: 3rem;
    }

    .about-card {
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 30px;
      padding: 3rem;
      backdrop-filter: blur(10px);
      transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
      opacity: 0;
      transform: translateY(30px);
    }

    .about-card.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .about-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(236, 72, 153, 0.1));
      opacity: 0;
      transition: opacity 0.4s ease;
    }

    .about-card:hover::before {
      opacity: 1;
    }

    .about-card:hover {
      transform: translateY(-15px) scale(1.02);
      border-color: rgba(99, 102, 241, 0.5);
      box-shadow: 0 25px 70px rgba(99, 102, 241, 0.3);
    }

    .about-icon {
      width: 80px;
      height: 80px;
      background: linear-gradient(135deg, #6366f1, #ec4899);
      border-radius: 25px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 2rem;
      font-size: 2.5rem;
      position: relative;
      z-index: 1;
      transition: all 0.4s ease;
    }

    .about-card:hover .about-icon {
      transform: rotate(10deg) scale(1.1);
    }

    .about-card h3 {
      color: var(--white);
      font-size: 1.6rem;
      margin-bottom: 1rem;
      position: relative;
      z-index: 1;
      font-weight: 700;
    }

    .about-card p {
      color: var(--gray);
      line-height: 1.8;
      position: relative;
      z-index: 1;
      font-size: 1.05rem;
    }

    /* Filter Section */
    .filter-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.5rem;
      margin-bottom: 4rem;
      padding: 2.5rem;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 30px;
      backdrop-filter: blur(20px);
    }

    .filter-container select,
    .filter-container input {
      padding: 1.2rem 1.8rem;
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      font-size: 1rem;
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.05);
      color: var(--white);
      font-family: 'Outfit', sans-serif;
    }

    .filter-container select option {
      background: var(--dark-light);
      color: var(--white);
    }

    .filter-container select:focus,
    .filter-container input:focus {
      outline: none;
      border-color: var(--primary);
      background: rgba(255, 255, 255, 0.08);
      box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.2);
      transform: translateY(-2px);
    }

    .filter-container input::placeholder {
      color: var(--gray);
    }

    /* Course Cards */
    .courses-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
      gap: 2.5rem;
    }

    .course-item {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.6s ease;
    }

    .course-item.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .course-card {
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 30px;
      overflow: hidden;
      transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    .course-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(236, 72, 153, 0.1));
      opacity: 0;
      transition: opacity 0.5s ease;
      z-index: 0;
    }

    .course-card:hover::before {
      opacity: 1;
    }

    .course-card:hover {
      transform: translateY(-20px) scale(1.03);
      border-color: rgba(99, 102, 241, 0.5);
      box-shadow: 0 30px 90px rgba(99, 102, 241, 0.4);
    }

    .course-img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      position: relative;
      transition: transform 0.5s ease;
    }

    .course-card:hover .course-img {
      transform: scale(1.1);
    }

    .course-img-wrapper {
      overflow: hidden;
      position: relative;
    }

    .course-content {
      padding: 2.5rem;
      position: relative;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      z-index: 1;
    }

    .course-tag {
      position: absolute;
      top: -20px;
      right: 25px;
      padding: 0.6rem 1.5rem;
      border-radius: 50px;
      font-size: 0.85rem;
      font-weight: 700;
      color: var(--white);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(10px);
      letter-spacing: 0.5px;
      text-transform: uppercase;
      z-index: 2;
    }

    .course-tag.free {
      background: linear-gradient(135deg, #14b8a6, #06b6d4);
    }

    .course-tag.paid {
      background: linear-gradient(135deg, #f59e0b, #ef4444);
    }

    .course-title {
      font-size: 1.5rem;
      margin-bottom: 0.8rem;
      color: var(--white);
      font-weight: 700;
    }

    .course-provider {
      color: var(--gray);
      font-size: 1rem;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 0.6rem;
    }

    .course-provider::before {
      content: '🎯';
      font-size: 1.2rem;
    }

    .course-meta {
      display: flex;
      gap: 2rem;
      margin-bottom: 2rem;
      padding-top: 1.5rem;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 0.95rem;
      color: var(--gray);
    }

    .course-meta span {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .course-meta i {
      color: var(--primary);
    }

    .btn-course {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 1.1rem;
      background: linear-gradient(135deg, #6366f1, #ec4899);
      color: var(--white);
      text-decoration: none;
      border-radius: 20px;
      font-weight: 700;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
      margin-top: auto;
      letter-spacing: 0.5px;
    }

    .btn-course::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      transition: left 0.7s ease;
    }

    .btn-course:hover::before {
      left: 100%;
    }

    .btn-course:hover {
      transform: scale(1.05);
      box-shadow: 0 15px 40px rgba(99, 102, 241, 0.6);
    }

    .btn-course i {
      transition: transform 0.3s ease;
    }

    .btn-course:hover i {
      transform: translateX(5px);
    }

    /* Contact Section */
    .contact-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: start;
    }

    .contact-info {
      position: sticky;
      top: 120px;
    }

    .contact-info h3 {
      font-size: 2.8rem;
      color: var(--white);
      margin-bottom: 1.5rem;
      font-weight: 800;
      line-height: 1.2;
    }

    .contact-info p {
      color: var(--gray);
      margin-bottom: 2.5rem;
      font-size: 1.15rem;
      line-height: 1.8;
    }

    .contact-details {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .contact-detail {
      display: flex;
      align-items: center;
      gap: 1.2rem;
      padding: 1.5rem;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      transition: all 0.3s ease;
    }

    .contact-detail:hover {
      background: rgba(255, 255, 255, 0.05);
      transform: translateX(10px);
      border-color: rgba(99, 102, 241, 0.5);
    }

    .contact-detail i {
      font-size: 1.5rem;
      color: var(--primary);
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(99, 102, 241, 0.1);
      border-radius: 12px;
    }

    .contact-detail span {
      color: var(--white);
      font-size: 1.05rem;
    }

    .contact-form {
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 3rem;
      border-radius: 30px;
      backdrop-filter: blur(20px);
    }

    .form-group {
      margin-bottom: 1.8rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.8rem;
      font-weight: 600;
      color: var(--white);
      font-size: 0.95rem;
      letter-spacing: 0.5px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 1.2rem 1.5rem;
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      font-size: 1rem;
      transition: all 0.3s ease;
      background: rgba(255, 255, 255, 0.05);
      color: var(--white);
      font-family: 'Outfit', sans-serif;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: var(--primary);
      background: rgba(255, 255, 255, 0.08);
      box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.2);
      transform: translateY(-2px);
    }

    .form-group input::placeholder,
    .form-group textarea::placeholder {
      color: var(--gray);
    }

    .submit-btn {
      width: 100%;
      padding: 1.3rem;
      background: linear-gradient(135deg, #6366f1, #ec4899);
      color: var(--white);
      border: none;
      border-radius: 20px;
      font-size: 1.1rem;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      position: relative;
      overflow: hidden;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
    }

    .submit-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      transition: left 0.7s ease;
    }

    .submit-btn:hover::before {
      left: 100%;
    }

    .submit-btn:hover {
      transform: translateY(-3px) scale(1.02);
      box-shadow: 0 20px 50px rgba(99, 102, 241, 0.6);
    }

    .submit-btn:active {
      transform: translateY(-1px) scale(0.98);
    }

    /* Footer */
    .footer {
      background: rgba(0, 0, 0, 0.5);
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding: 4rem 2rem 2rem;
      backdrop-filter: blur(20px);
    }

    .footer-content {
      max-width: 1400px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 3rem;
      margin-bottom: 3rem;
    }

    .footer h4 {
      margin-bottom: 1.5rem;
      font-size: 1.3rem;
      color: var(--white);
      font-weight: 700;
    }

    .footer p {
      color: var(--gray);
      line-height: 1.8;
      margin-bottom: 1rem;
    }

    .footer-links {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 1rem;
    }

    .footer-links a {
      color: var(--gray);
      text-decoration: none;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }

    .footer-links a::before {
      content: '→';
      opacity: 0;
      transform: translateX(-10px);
      transition: all 0.3s ease;
    }

    .footer-links a:hover {
      color: var(--white);
      padding-left: 5px;
    }

    .footer-links a:hover::before {
      opacity: 1;
      transform: translateX(0);
    }

    .social-links {
      display: flex;
      gap: 1rem;
      margin-top: 1.5rem;
    }

    .social-links a {
      width: 50px;
      height: 50px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      color: var(--white);
      text-decoration: none;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      font-size: 1.2rem;
    }

    .social-links a:hover {
      background: linear-gradient(135deg, #6366f1, #ec4899);
      border-color: transparent;
      transform: translateY(-8px) rotate(10deg);
      box-shadow: 0 15px 40px rgba(99, 102, 241, 0.5);
    }

    .copyright {
      text-align: center;
      padding-top: 2rem;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      color: var(--gray);
      max-width: 1400px;
      margin: 0 auto;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .contact-container {
        grid-template-columns: 1fr;
      }

      .contact-info {
        position: static;
      }
    }

    @media (max-width: 768px) {
      .nav {
        position: fixed;
        top: 70px;
        left: -100%;
        width: 100%;
        height: calc(100vh - 70px);
        background: rgba(10, 10, 10, 0.98);
        backdrop-filter: blur(20px);
        flex-direction: column;
        padding: 3rem 2rem;
        transition: left 0.3s ease;
        border-right: 1px solid rgba(255, 255, 255, 0.1);
        gap: 2rem;
        z-index: 999;
      }

      .nav.active {
        left: 0;
      }

      .mobile-toggle {
        display: block;
      }

      .hero h1 {
        font-size: 3rem;
        letter-spacing: -1px;
      }

      .hero p {
        font-size: 1.2rem;
      }

      .cta-buttons {
        flex-direction: column;
        align-items: stretch;
      }

      .section {
        padding: 5rem 1.5rem;
      }

      .section-title h2 {
        font-size: 2.5rem;
      }

      .section-title p {
        font-size: 1.1rem;
      }

      .courses-grid {
        grid-template-columns: 1fr;
      }

      .filter-container {
        grid-template-columns: 1fr;
      }

      .stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .about-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 480px) {
      .hero h1 {
        font-size: 2.2rem;
      }

      .hero p {
        font-size: 1rem;
      }

      .section {
        padding: 4rem 1.5rem;
      }

      .about-card,
      .contact-form {
        padding: 2rem;
      }

      .stat-number {
        font-size: 2.5rem;
      }

      .contact-info h3 {
        font-size: 2rem;
      }
    }

    .hidden {
      display: none !important;
    }

    /* Success Message */
    .success-message {
      background: rgba(20, 184, 166, 0.1);
      border: 1px solid rgba(20, 184, 166, 0.3);
      color: #5eead4;
      padding: 1rem 1.5rem;
      border-radius: 15px;
      margin-top: 1rem;
      display: none;
      animation: fadeInUp 0.5s ease;
    }

    .success-message.show {
      display: block;
    }
  </style>
</head>

<body>
  <!-- Animated Background -->
  <div class="animated-bg"></div>
  
  <!-- Particles -->
  <div class="particles" id="particles"></div>

  <header class="header" id="header">
    <div class="header-container">
      <a href="#hero" class="logo">SL Courses</a>
      
      <nav>
        <ul class="nav" id="navMenu">
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>

      <i class="bi bi-list mobile-toggle" id="mobileToggle"></i>
    </div>
  </header>

  <main>
    <!-- Hero Section -->
    <section id="hero" class="hero">
      <div class="hero-content">
        <h1>Transform Your Future with SL Courses</h1>
        <p>Discover world-class online courses from Sri Lanka's leading institutions</p>
        <div class="cta-buttons">
          <a href="#courses" class="cta-button primary">
            Explore Courses
            <i class="bi bi-arrow-right"></i>
          </a>
          <a href="#about" class="cta-button secondary">
            Learn More
            <i class="bi bi-info-circle"></i>
          </a>
        </div>
      </div>
      <div class="scroll-indicator">
        <i class="bi bi-chevron-down"></i>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="section">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-number">500+</div>
          <div class="stat-label">Active Courses</div>
        </div>
        <div class="stat-card">
          <div class="stat-number">50K+</div>
          <div class="stat-label">Students</div>
        </div>
        <div class="stat-card">
          <div class="stat-number">100+</div>
          <div class="stat-label">Institutions</div>
        </div>
        <div class="stat-card">
          <div class="stat-number">95%</div>
          <div class="stat-label">Success Rate</div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
      <div class="section-title">
        <div class="badge">Who We Are</div>
        <h2>Empowering Sri Lankan Learners</h2>
        <p>Your trusted gateway to quality online education</p>
      </div>

      <div class="about-grid">
        <div class="about-card">
          <div class="about-icon">🎯</div>
          <h3>Centralized Platform</h3>
          <p>Access all local online courses from Sri Lankan institutes in one place. No more browsing multiple websites - we bring everything together for you.</p>
        </div>

        <div class="about-card">
          <div class="about-icon">⚡</div>
          <h3>Time-Saving Solution</h3>
          <p>Save valuable time with clear, organized, and trustworthy course details. Compare and select the best options quickly and confidently.</p>
        </div>

        <div class="about-card">
          <div class="about-icon">🚀</div>
          <h3>Career Growth</h3>
          <p>Build skills, improve careers, and open new paths for growth. From IT to Business, we cover all major disciplines and professional development areas.</p>
        </div>
      </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="section">
      <div class="section-title">
        <div class="badge">Explore</div>
        <h2>Featured Courses</h2>
        <p>Handpicked courses from Sri Lanka's top institutions</p>
      </div>

      <div class="filter-container">
        <select id="categoryFilter">
          <option value="*">All Categories</option>
          <option value="it">IT & Software</option>
          <option value="business">Business</option>
          <option value="design">Design</option>
        </select>

        <select id="typeFilter">
          <option value="*">All Types</option>
          <option value="free">Free Courses</option>
          <option value="paid">Paid Courses</option>
        </select>

        <input type="text" id="searchFilter" placeholder="Search for courses...">
      </div>

      <div class="courses-grid" id="coursesGrid">
        <div class="course-item it free">
          <div class="course-card">
            <div class="course-img-wrapper">
              <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&q=80" alt="Web Development" class="course-img">
            </div>
            <div class="course-content">
              <span class="course-tag free">Free</span>
              <h4 class="course-title">Web Development for Beginners</h4>
              <p class="course-provider">ESOFT Metro Campus</p>
              <div class="course-meta">
                <span><i class="bi bi-clock"></i> 4 Weeks</span>
                <span><i class="bi bi-layers"></i> Beginner</span>
              </div>
              <a href="#" class="btn-course">
                Explore Course
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="course-item business paid">
          <div class="course-card">
            <div class="course-img-wrapper">
              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80" alt="Digital Marketing" class="course-img">
            </div>
            <div class="course-content">
              <span class="course-tag paid">Paid</span>
              <h4 class="course-title">Digital Marketing Essentials</h4>
              <p class="course-provider">UCSC Extension Center</p>
              <div class="course-meta">
                <span><i class="bi bi-clock"></i> 6 Weeks</span>
                <span><i class="bi bi-layers"></i> Beginner</span>
              </div>
              <a href="#" class="btn-course">
                Explore Course
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="course-item design free">
          <div class="course-card">
            <div class="course-img-wrapper">
              <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800&q=80" alt="Graphic Design" class="course-img">
            </div>
            <div class="course-content">
              <span class="course-tag free">Free</span>
              <h4 class="course-title">Graphic Design Fundamentals</h4>
              <p class="course-provider">SLIIT Academy</p>
              <div class="course-meta">
                <span><i class="bi bi-clock"></i> 3 Weeks</span>
                <span><i class="bi bi-layers"></i> Beginner</span>
              </div>
              <a href="#" class="btn-course">
                Explore Course
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="course-item design free">
          <div class="course-card">
            <div class="course-img-wrapper">
              <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?w=800&q=80" alt="Adobe Illustrator" class="course-img">
            </div>
            <div class="course-content">
              <span class="course-tag free">Free</span>
              <h4 class="course-title">Adobe Illustrator Basics</h4>
              <p class="course-provider">SLIIT Academy</p>
              <div class="course-meta">
                <span><i class="bi bi-clock"></i> 3 Weeks</span>
                <span><i class="bi bi-layers"></i> Beginner</span>
              </div>
              <a href="#" class="btn-course">
                Explore Course
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="course-item it paid">
          <div class="course-card">
            <div class="course-img-wrapper">
              <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=800&q=80" alt="C++ Programming" class="course-img">
            </div>
            <div class="course-content">
              <span class="course-tag paid">Paid</span>
              <h4 class="course-title">C++ Programming Mastery</h4>
              <p class="course-provider">IJSE</p>
              <div class="course-meta">
                <span><i class="bi bi-clock"></i> 8 Weeks</span>
                <span><i class="bi bi-layers"></i> Intermediate</span>
              </div>
              <a href="#" class="btn-course">
                Explore Course
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="course-item business free">
          <div class="course-card">
            <div class="course-img-wrapper">
              <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&q=80" alt="Entrepreneurship" class="course-img">
            </div>
            <div class="course-content">
              <span class="course-tag free">Free</span>
              <h4 class="course-title">Entrepreneurship Basics</h4>
              <p class="course-provider">Open University of Sri Lanka</p>
              <div class="course-meta">
                <span><i class="bi bi-clock"></i> 2 Weeks</span>
                <span><i class="bi bi-layers"></i> Beginner</span>
              </div>
              <a href="#" class="btn-course">
                Explore Course
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
      <div class="section-title">
        <div class="badge">Get In Touch</div>
        <h2>Let's Connect</h2>
        <p>Have questions? We're here to help</p>
      </div>

      <div class="contact-container">
        <div class="contact-info">
          <h3>Ready to Start Your Learning Journey?</h3>
          <p>Whether you're a student, job-seeker, or professional looking to upskill, we're here to guide you to the perfect course.</p>
          
          <div class="contact-details">
            <div class="contact-detail">
              <i class="bi bi-telephone-fill"></i>
              <span>+94 70 3010634</span>
            </div>
            <div class="contact-detail">
              <i class="bi bi-envelope-fill"></i>
              <span>slcourses@gmail.com</span>
            </div>
            <div class="contact-detail">
              <i class="bi bi-geo-alt-fill"></i>
              <span>Colombo, Sri Lanka</span>
            </div>
          </div>

          <div class="social-links">
            <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <form class="contact-form" id="contactForm">
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" placeholder="John Doe" required>
          </div>

          <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" id="email" placeholder="john@example.com" required>
          </div>

          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" placeholder="How can we help?" required>
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" rows="5" placeholder="Tell us more..." required></textarea>
          </div>

          <button type="submit" class="submit-btn">
            Send Message
            <i class="bi bi-send"></i>
          </button>

          <div class="success-message" id="successMessage">
            ✓ Thank you! Your message has been sent successfully.
          </div>
        </form>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="footer-content">
      <div>
        <h4>SL COURSES</h4>
        <p>Your trusted platform to find and explore online courses offered by Sri Lankan institutes. Empowering learners since 2025.</p>
      </div>

      <div>
        <h4>Quick Links</h4>
        <ul class="footer-links">
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#courses">Browse Courses</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <div>
        <h4>Categories</h4>
        <ul class="footer-links">
          <li><a href="#">IT & Software</a></li>
          <li><a href="#">Business</a></li>
          <li><a href="#">Design</a></li>
          <li><a href="#">Marketing</a></li>
        </ul>
      </div>

      <div>
        <h4>Stay Connected</h4>
        <p>Follow us for the latest course updates and learning tips.</p>
        <div class="social-links">
          <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>

    <div class="copyright">
      <p>© 2025 <strong>SL Courses</strong> | All Rights Reserved.</p>
    </div>
  </footer>

  <script>
    // Create Floating Particles
    const particlesContainer = document.getElementById('particles');
    for (let i = 0; i < 30; i++) {
      const particle = document.createElement('div');
      particle.className = 'particle';
      particle.style.left = Math.random() * 100 + '%';
      particle.style.animationDelay = Math.random() * 15 + 's';
      particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
      particlesContainer.appendChild(particle);
    }

    // Header Scroll Effect
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });

    // Mobile Navigation
    const mobileToggle = document.getElementById('mobileToggle');
    const navMenu = document.getElementById('navMenu');

    mobileToggle.addEventListener('click', () => {
      navMenu.classList.toggle('active');
      mobileToggle.classList.toggle('bi-list');
      mobileToggle.classList.toggle('bi-x');
    });

    // Course Filtering
    const categoryFilter = document.getElementById('categoryFilter');
    const typeFilter = document.getElementById('typeFilter');
    const searchFilter = document.getElementById('searchFilter');
    const courseItems = document.querySelectorAll('.course-item');

    function filterCourses() {
      const category = categoryFilter.value;
      const type = typeFilter.value;
      const searchText = searchFilter.value.toLowerCase();

      courseItems.forEach((item, index) => {
        const matchesCategory = category === '*' || item.classList.contains(category);
        const matchesType = type === '*' || item.classList.contains(type);
        const matchesSearch = item.querySelector('.course-title').textContent.toLowerCase().includes(searchText);

        if (matchesCategory && matchesType && matchesSearch) {
          item.style.display = 'block';
          setTimeout(() => {
            item.classList.add('visible');
          }, index * 100);
        } else {
          item.style.display = 'none';
          item.classList.remove('visible');
        }
      });
    }

    categoryFilter.addEventListener('change', filterCourses);
    typeFilter.addEventListener('change', filterCourses);
    searchFilter.addEventListener('input', filterCourses);

    // Smooth Scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          navMenu.classList.remove('active');
          mobileToggle.classList.add('bi-list');
          mobileToggle.classList.remove('bi-x');
        }
      });
    });

    // Active Navigation on Scroll
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav a');

    window.addEventListener('scroll', () => {
      let current = '';
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (scrollY >= sectionTop - 200) {
          current = section.getAttribute('id');
        }
      });

      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').substring(1) === current) {
          link.classList.add('active');
        }
      });
    });

    // Intersection Observer for Animations
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, observerOptions);

    document.querySelectorAll('.section-title, .about-card, .stat-card, .course-item').forEach(el => {
      observer.observe(el);
    });

    // Form Submission
    document.getElementById('contactForm').addEventListener('submit', (e) => {
      e.preventDefault();
      const successMessage = document.getElementById('successMessage');
      successMessage.classList.add('show');
      e.target.reset();
      
      setTimeout(() => {
        successMessage.classList.remove('show');
      }, 5000);
    });

    // Initial visibility for course items
    setTimeout(() => {
      courseItems.forEach((item, index) => {
        setTimeout(() => {
          item.classList.add('visible');
        }, index * 100);
      });
    }, 300);
  </script>

</body>
</html>