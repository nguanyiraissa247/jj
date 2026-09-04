<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raissa | About Me</title>
  
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <a class="logo" href="../project/index.php#home">RAISSA</a>
        <nav class="nav-links">
            <a href="../project/index.php#home">Home</a>
            <a href="../project/index.php#about">About</a>
            <a href="../project/index.php#services">Services</a>
            <a href="../project/index.php#projects">Projects</a>
            <a href="../project/index.php#contact">Contact</a>
        </nav>
    </header>

    <!-- Content Container -->
    <main class="wrapper">
        
        <!-- Hero Section -->
        <section class="hero-card">
            <img src="../profile.jpg/1000139627.jpg" alt="Raissa Profile" class="avatar" />
            <div class="hero-info">
                <span class="tagline">SOFTWARE ENGINEERING PROFILE</span>
                <h1>Raissa</h1>
                <p>Web designer creating simple personal websites, small business pages, online shops, and booking pages.</p>
                <a href="../project/index.php" class="btn">
                    <!-- Inline Back Arrow SVG -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M21 11H6.83l5.59-5.59L11 4l-8 8 8 8 1.41-1.41L6.83 13H21v-2z"/></svg>
                    Back to Main Portfolio
                </a>
            </div>
        </section>

        <section class="aura-section" aria-labelledby="aura-title">
            <div class="aura-orbit" aria-hidden="true">
                <span class="orbit-dot orbit-dot-one"></span>
                <span class="orbit-dot orbit-dot-two"></span>
                <span class="orbit-dot orbit-dot-three"></span>
                <span class="aura-word">AURA</span>
            </div>
            <div class="aura-copy">
                <span class="tagline">THE RAISSA SIGNATURE</span>
                <h2 id="aura-title">I make digital spaces feel <span>like you.</span></h2>
                <p>Every website begins with a feeling: calm, confident, playful, warm, or bold. I turn that feeling into a clear online experience that people enjoy using.</p>
                <div class="aura-traits">
                    <div><strong>01</strong><span>Listen first</span><small>Your story guides the design.</small></div>
                    <div><strong>02</strong><span>Make it simple</span><small>Visitors find what they need quickly.</small></div>
                    <div><strong>03</strong><span>Leave a glow</span><small>Small details make the page memorable.</small></div>
                </div>
            </div>
        </section>

        <!-- Technical Competencies -->
        <h2 class="section-title">What I Bring <span>To Your Project</span></h2>
        
        <div class="dashboard-grid">
            
            <div class="info-card">
                <div class="card-header">
                    <!-- Inline Code Icon SVG -->
                    <svg viewBox="0 0 24 24"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
                    <h3>Languages & Web</h3>
                </div>
                <ul>
                    <li><b>PHP:</b> Backend session handling, relational workflows</li>
                    <li><b>JavaScript & CSS:</b> Dynamic UI & responsive layouts</li>
                    <li><b>C Language:</b> Algorithm development & memory allocation</li>
                </ul>
            </div>

            <div class="info-card">
                <div class="card-header">
                    <!-- Inline Database Icon SVG -->
                    <svg viewBox="0 0 24 24"><path d="M12 3C7.58 3 4 4.79 4 7v10c0 2.21 3.58 4 8 4s8-1.79 8-4V7c0-2.21-3.58-4-8-4zm0 2c3.87 0 6 1.34 6 2s-2.13 2-6 2-6-1.34-6-2 2.13-2 6-2zm0 14c-3.87 0-6-1.34-6-2v-2.16C7.47 15.5 9.61 16 12 16s4.53-.5 6-1.16V17c0 .66-2.13 2-6 2zm0-5c-3.87 0-6-1.34-6-2v-2.16C7.47 10.5 9.61 11 12 11s4.53-.5 6-1.16V12c0 .66-2.13 2-6 2z"/></svg>
                    <h3>Database & Servers</h3>
                </div>
                <ul>
                    <li><b>MySQL:</b> Relational database schemas & complex queries</li>
                    <li><b>XAMPP:</b> Local Apache and MySQL testing environments</li>
                    <li><b>Data Modeling:</b> Entity normalization</li>
                </ul>
            </div>

            <div class="info-card">
                <div class="card-header">
                    <!-- Inline Architecture Icon SVG -->
                    <svg viewBox="0 0 24 24"><path d="M4 11h5V5H4v6zm0 7h5v-5H4v5zm6 0h5v-5h-5v5zm6 0h5v-5h-5v5zm0-13v6h5V5h-5zm-6 6h5V5h-5v6z"/></svg>
                    <h3>System Architecture</h3>
                </div>
                <ul>
                    <li><b>StarUML:</b> Use Case, Class, and Sequence diagrams</li>
                    <li><b>Git & GitHub:</b> Version control management</li>
                    <li><b>VS Code:</b> Workspace configuration</li>
                </ul>
            </div>

        </div>

    </main>

</body>
</html>

  <style>
        /* Modern System Font Stack - Zero Network Fetch Delay */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        :root {
            --dark-bg: #0d1117;
            --dark-card: #161b22;
            --dark-border: #30363d;
            --accent-glow: #ffb703;
            --text-primary: #f0f6fc;
            --text-secondary: #8b949e;
        }

        body {
            background-color: var(--dark-bg);
            color: var(--text-primary);
            padding-bottom: 5rem;
        }

        /* Fast Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1.5rem 5%;
            background: rgba(22, 27, 34, 0.95);
            border-bottom: 1px solid var(--dark-border);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .logo {
            font-size: 2.2rem;
            color: #ffffff;
            font-weight: 700;
        }

        .logo span {
            color: var(--accent-glow);
        }

        .nav-links a {
            font-size: 1.5rem;
            color: #ffffff;
            margin-left: 2rem;
            font-weight: 500;
            transition: 0.2s;
        }

        .nav-links a:hover {
            color: var(--accent-glow);
        }

        /* Layout Container */
        .wrapper {
            max-width: 1100px;
            margin: 10rem auto 4rem;
            padding: 0 2rem;
        }

        /* Hero Banner Card */
        .hero-card {
            background: linear-gradient(135deg, rgba(255, 183, 3, 0.08), rgba(22, 27, 34, 0.95));
            border: 1px solid var(--dark-border);
            border-radius: 2rem;
            padding: 3.5rem;
            display: flex;
            align-items: center;
            gap: 3.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        }

        .avatar {
            width: 16rem;
            height: 16rem;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid var(--accent-glow);
            background-color: var(--dark-card);
        }

        .tagline {
            color: var(--accent-glow);
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .hero-info h1 {
            font-size: 3.6rem;
            margin: 0.5rem 0 1rem;
        }

        .hero-info p {

        .aura-section {
            position: relative;
            display: grid;
            grid-template-columns: 280px 1fr;
            align-items: center;
            gap: 4rem;
            margin: 4rem 0 2rem;
            padding: 3rem;
            overflow: hidden;
            border: 1px solid var(--dark-border);
            border-radius: 2rem;
            background: radial-gradient(circle at 12% 50%, rgba(255, 183, 3, 0.22), transparent 32%), var(--dark-card);
        }

        .aura-orbit {
            position: relative;
            display: grid;
            place-items: center;
            width: 230px;
            height: 230px;
            margin: auto;
            border: 1px solid rgba(255, 183, 3, 0.65);
            border-radius: 50%;
            box-shadow: 0 0 0 18px rgba(255, 183, 3, 0.04), 0 0 55px rgba(255, 183, 3, 0.24);
            animation: auraPulse 4s ease-in-out infinite;
        }

        .aura-orbit::before, .aura-orbit::after {
            position: absolute;
            content: '';
            border: 1px solid rgba(255, 183, 3, 0.22);
            border-radius: 50%;
        }

        .aura-orbit::before { inset: 24px; }
        .aura-orbit::after { inset: -22px; border-style: dashed; }
        .aura-word { color: var(--accent-glow); font-size: 2.4rem; font-weight: 800; letter-spacing: 0.6rem; margin-left: 0.6rem; }

        .orbit-dot { position: absolute; width: 12px; height: 12px; background: var(--accent-glow); border-radius: 50%; box-shadow: 0 0 16px var(--accent-glow); }
        .orbit-dot-one { top: 12px; right: 52px; }
        .orbit-dot-two { bottom: 28px; left: 18px; }
        .orbit-dot-three { top: 82px; left: -6px; }

        @keyframes auraPulse { 50% { transform: scale(1.03); box-shadow: 0 0 0 28px rgba(255, 183, 3, 0.03), 0 0 75px rgba(255, 183, 3, 0.32); } }
        .aura-copy h2 { max-width: 650px; margin: 0.7rem 0 1rem; font-size: 3.2rem; line-height: 1.1; }
        .aura-copy h2 span { color: var(--accent-glow); }
        .aura-copy > p { max-width: 700px; color: var(--text-secondary); font-size: 1.5rem; line-height: 1.7; }
        .aura-traits { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-top: 2rem; }
        .aura-traits div { padding: 1rem 0; border-top: 1px solid var(--dark-border); }
        .aura-traits strong { display: block; color: var(--accent-glow); font-size: 1.1rem; }
        .aura-traits span { display: block; margin: 0.4rem 0; color: var(--text-primary); font-size: 1.4rem; font-weight: 700; }
        .aura-traits small { display: block; color: var(--text-secondary); font-size: 1.1rem; line-height: 1.4; }
            font-size: 1.5rem;
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            padding: 1rem 2.2rem;
            background: var(--accent-glow);
            color: #1c1c1c;
            border-radius: 3rem;
            font-size: 1.5rem;
            font-weight: 600;
            transition: 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 15px rgba(255, 183, 3, 0.4);
        }

        /* Dashboard Grid */
        .section-title {
            font-size: 2.6rem;
            margin: 4.5rem 0 2rem;
            text-align: center;
        }

        .section-title span {
            color: var(--accent-glow);
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }

        .info-card {
            background: var(--dark-card);
            border: 1px solid var(--dark-border);
            padding: 2.5rem;
            border-radius: 1.5rem;
            transition: 0.2s ease;
        }

        .info-card:hover {
            border-color: var(--accent-glow);
            transform: translateY(-3px);
        }

        @media (max-width: 760px) {
            .aura-section { grid-template-columns: 1fr; gap: 2rem; padding: 2rem; }
            .aura-traits { grid-template-columns: 1fr; }
            .aura-copy h2 { font-size: 2.5rem; }
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            margin-bottom: 1.5rem;
        }

        .card-header svg {
            width: 32px;
            height: 32px;
            fill: var(--accent-glow);
        }

        .info-card h3 {
            font-size: 2rem;
        }

        .info-card ul {
            list-style: none;
        }

        .info-card ul li {
            font-size: 1.4rem;
            color: var(--text-secondary);
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        .info-card ul li b {
            color: var(--text-primary);
        }

        /* Mobile Adjustments */
        @media (max-width: 768px) {
            .hero-card { flex-direction: column; text-align: center; }
            .nav-links { display: none; }
        }
    </style>