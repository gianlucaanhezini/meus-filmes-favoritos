<?php
$filmes = [
    [
        "titulo" => "Harry Potter e a Pedra Filosofal",
        "ano" => 2001,
        "descricao" => "Harry Potter descobre que é um bruxo no dia do seu 11º aniversário e é convidado para estudar na Escola de Magia e Bruxaria de Hogwarts. Lá, ele faz novos amigos, aprende sobre o mundo mágico e descobre a verdade sobre a morte de seus pais, enfrentando o temível Lorde Voldemort.",
        "genero" => "Fantasia / Aventura",
        "duracao" => "152 min",
        "atores" => [
            ["nome" => "Daniel Radcliffe", "personagem" => "Harry Potter"],
            ["nome" => "Emma Watson", "personagem" => "Hermione Granger"],
            ["nome" => "Rupert Grint", "personagem" => "Ron Weasley"],
            ["nome" => "Richard Harris", "personagem" => "Dumbledore"],
        ],
        "poster" => "https://upload.wikimedia.org/wikipedia/en/e/e9/Harry_Potter_and_the_Philosopher%27s_Stone_Book_Cover.jpg",
        "cor" => "#7c3aed",
        "icone" => "✨",
        "rating" => 7.6,
    ],
    [
        "titulo" => "Capitão América: O Primeiro Vingador",
        "ano" => 2011,
        "descricao" => "Steve Rogers, um jovem magro de Brooklyn que tenta incansavelmente servir ao exército na Segunda Guerra Mundial, é transformado em um super-soldado pelo soro de serum. Munido de seu icônico escudo, ele se torna o Capitão América e enfrenta a organização nazista HYDRA liderada pelo temível Caveira Vermelha.",
        "genero" => "Ação / Ficção Científica",
        "duracao" => "124 min",
        "atores" => [
            ["nome" => "Chris Evans", "personagem" => "Steve Rogers / Capitão América"],
            ["nome" => "Hayley Atwell", "personagem" => "Peggy Carter"],
            ["nome" => "Sebastian Stan", "personagem" => "Bucky Barnes"],
            ["nome" => "Hugo Weaving", "personagem" => "Caveira Vermelha"],
        ],
        "poster" => "https://upload.wikimedia.org/wikipedia/en/3/37/Captain_America_The_First_Avenger_poster.jpg",
        "cor" => "#1d4ed8",
        "icone" => "🛡️",
        "rating" => 6.9,
    ],
    [
        "titulo" => "Homem-Aranha: No Aranhaverso",
        "ano" => 2018,
        "descricao" => "Miles Morales se torna o Homem-Aranha de sua realidade e deve se unir a outros Homens-Aranha de universos paralelos para deter uma ameaça que pode destruir todos os mundos. Uma jornada sobre identidade, responsabilidade e o que significa ser um herói — seja quem for, de onde vier.",
        "genero" => "Animação / Ação",
        "duracao" => "117 min",
        "atores" => [
            ["nome" => "Shameik Moore", "personagem" => "Miles Morales"],
            ["nome" => "Hailee Steinfeld", "personagem" => "Gwen Stacy"],
            ["nome" => "Mahershala Ali", "personagem" => "Tio Aaron"],
            ["nome" => "Jake Johnson", "personagem" => "Peter B. Parker"],
        ],
        "poster" => "https://upload.wikimedia.org/wikipedia/en/2/2d/Spider-Man_Into_the_Spider-Verse_poster.png",
        "cor" => "#dc2626",
        "icone" => "🕷️",
        "rating" => 8.4,
    ],
];
?>
<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Filmes Favoritos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@300..700&display=swap" rel="stylesheet">
    <style>
        /* ===== DESIGN TOKENS ===== */
        :root, [data-theme="light"] {
            --color-bg: #f7f6f2;
            --color-surface: #f9f8f5;
            --color-surface-2: #fbfbf9;
            --color-surface-offset: #f3f0ec;
            --color-border: #d4d1ca;
            --color-text: #28251d;
            --color-text-muted: #7a7974;
            --color-text-faint: #bab9b4;
            --color-text-inverse: #f9f8f4;
            --color-primary: #01696f;
            --color-primary-hover: #0c4e54;
            --shadow-sm: 0 1px 2px oklch(0.2 0.01 80 / 0.06);
            --shadow-md: 0 4px 12px oklch(0.2 0.01 80 / 0.08);
            --shadow-lg: 0 12px 32px oklch(0.2 0.01 80 / 0.12);
            --radius-sm: 0.375rem;
            --radius-md: 0.5rem;
            --radius-lg: 0.75rem;
            --radius-xl: 1rem;
            --radius-full: 9999px;
            --space-1: 0.25rem; --space-2: 0.5rem; --space-3: 0.75rem;
            --space-4: 1rem; --space-6: 1.5rem; --space-8: 2rem;
            --space-10: 2.5rem; --space-12: 3rem; --space-16: 4rem;
            --text-xs: clamp(0.75rem, 0.7rem + 0.25vw, 0.875rem);
            --text-sm: clamp(0.875rem, 0.8rem + 0.35vw, 1rem);
            --text-base: clamp(1rem, 0.95rem + 0.25vw, 1.125rem);
            --text-lg: clamp(1.125rem, 1rem + 0.75vw, 1.5rem);
            --text-xl: clamp(1.5rem, 1.2rem + 1.25vw, 2.25rem);
            --text-2xl: clamp(2rem, 1.2rem + 2.5vw, 3.5rem);
            --text-hero: clamp(3rem, 0.5rem + 7vw, 8rem);
            --font-display: 'Bebas Neue', 'Georgia', serif;
            --font-body: 'Inter', 'Helvetica Neue', sans-serif;
            --transition-interactive: 180ms cubic-bezier(0.16, 1, 0.3, 1);
        }

        [data-theme="dark"] {
            --color-bg: #0f0e0d;
            --color-surface: #171614;
            --color-surface-2: #1c1b19;
            --color-surface-offset: #22211f;
            --color-border: #2d2c2a;
            --color-text: #cdccca;
            --color-text-muted: #797876;
            --color-text-faint: #5a5957;
            --color-text-inverse: #2b2a28;
            --color-primary: #4f98a3;
            --color-primary-hover: #227f8b;
            --shadow-sm: 0 1px 2px oklch(0 0 0 / 0.25);
            --shadow-md: 0 4px 12px oklch(0 0 0 / 0.35);
            --shadow-lg: 0 12px 32px oklch(0 0 0 / 0.5);
        }

        @media (prefers-color-scheme: dark) {
            :root:not([data-theme]) {
                --color-bg: #0f0e0d; --color-surface: #171614;
                --color-surface-2: #1c1b19; --color-surface-offset: #22211f;
                --color-border: #2d2c2a; --color-text: #cdccca;
                --color-text-muted: #797876; --color-text-faint: #5a5957;
                --color-primary: #4f98a3; --color-primary-hover: #227f8b;
                --shadow-sm: 0 1px 2px oklch(0 0 0 / 0.25);
                --shadow-md: 0 4px 12px oklch(0 0 0 / 0.35);
                --shadow-lg: 0 12px 32px oklch(0 0 0 / 0.5);
            }
        }

        /* ===== BASE ===== */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { -webkit-font-smoothing: antialiased; scroll-behavior: smooth; scroll-padding-top: var(--space-16); }
        body { min-height: 100dvh; line-height: 1.6; font-family: var(--font-body); font-size: var(--text-base); color: var(--color-text); background-color: var(--color-bg); }
        img { display: block; max-width: 100%; height: auto; }
        h1, h2, h3 { text-wrap: balance; line-height: 1.1; font-family: var(--font-display); letter-spacing: 0.02em; }
        p { text-wrap: pretty; }
        a, button { transition: color var(--transition-interactive), background var(--transition-interactive), box-shadow var(--transition-interactive); }
        button { cursor: pointer; background: none; border: none; font: inherit; color: inherit; }
        ::selection { background: oklch(from var(--color-primary) l c h / 0.25); color: var(--color-text); }
        :focus-visible { outline: 2px solid var(--color-primary); outline-offset: 3px; border-radius: var(--radius-sm); }

        /* ===== LAYOUT ===== */
        .container { max-width: 1100px; margin-inline: auto; padding-inline: var(--space-6); }

        /* ===== HEADER ===== */
        .site-header {
            position: sticky; top: 0; z-index: 100;
            background: oklch(from var(--color-bg) l c h / 0.85);
            backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid oklch(from var(--color-text) l c h / 0.08);
            padding-block: var(--space-4);
        }
        .header-inner { display: flex; align-items: center; justify-content: space-between; gap: var(--space-4); }
        .logo { display: flex; align-items: center; gap: var(--space-3); text-decoration: none; color: var(--color-text); }
        .logo svg { flex-shrink: 0; }
        .logo-text { font-family: var(--font-display); font-size: var(--text-lg); letter-spacing: 0.05em; line-height: 1; }
        .logo-sub { font-size: var(--text-xs); color: var(--color-text-muted); font-family: var(--font-body); letter-spacing: 0.08em; text-transform: uppercase; }
        .theme-toggle {
            width: 40px; height: 40px; border-radius: var(--radius-full);
            display: flex; align-items: center; justify-content: center;
            color: var(--color-text-muted);
            border: 1px solid oklch(from var(--color-text) l c h / 0.12);
        }
        .theme-toggle:hover { color: var(--color-text); background: var(--color-surface-offset); }

        /* ===== HERO ===== */
        .hero {
            padding-block: clamp(var(--space-12), 8vw, var(--space-16));
            text-align: center;
            position: relative; overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute; inset: 0;
            background: radial-gradient(ellipse 80% 60% at 50% 0%, oklch(from var(--color-primary) l c h / 0.12), transparent 70%);
            pointer-events: none;
        }
        .hero-eyebrow {
            display: inline-flex; align-items: center; gap: var(--space-2);
            font-size: var(--text-xs); color: var(--color-primary);
            text-transform: uppercase; letter-spacing: 0.12em; font-weight: 600;
            margin-bottom: var(--space-4);
        }
        .hero-eyebrow::before, .hero-eyebrow::after { content: '—'; opacity: 0.5; }
        .hero h1 { font-size: var(--text-hero); color: var(--color-text); margin-bottom: var(--space-4); }
        .hero p { font-size: var(--text-base); color: var(--color-text-muted); max-width: 48ch; margin-inline: auto; }

        /* ===== FILMS GRID ===== */
        .films-section { padding-block: clamp(var(--space-10), 6vw, var(--space-16)); }
        .films-grid { display: grid; gap: var(--space-8); }

        /* ===== FILM CARD ===== */
        .film-card {
            display: grid;
            grid-template-columns: 260px 1fr;
            background: var(--color-surface);
            border-radius: var(--radius-xl);
            border: 1px solid oklch(from var(--color-text) l c h / 0.08);
            box-shadow: var(--shadow-md);
            overflow: hidden;
            transition: transform var(--transition-interactive), box-shadow var(--transition-interactive);
        }
        .film-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }

        .film-poster {
            position: relative; overflow: hidden;
            background: var(--color-surface-offset);
            aspect-ratio: auto;
        }
        .film-poster img {
            width: 100%; height: 100%; object-fit: cover;
            transition: transform 400ms cubic-bezier(0.16, 1, 0.3, 1);
        }
        .film-card:hover .film-poster img { transform: scale(1.04); }
        .film-number {
            position: absolute; top: var(--space-3); left: var(--space-3);
            width: 36px; height: 36px; border-radius: var(--radius-full);
            background: oklch(0 0 0 / 0.6); backdrop-filter: blur(8px);
            display: flex; align-items: center; justify-content: center;
            font-family: var(--font-display); font-size: var(--text-lg); color: #fff; line-height: 1;
        }
        .film-rating-badge {
            position: absolute; bottom: var(--space-3); right: var(--space-3);
            background: oklch(0 0 0 / 0.7); backdrop-filter: blur(8px);
            border-radius: var(--radius-full); padding: var(--space-1) var(--space-3);
            display: flex; align-items: center; gap: var(--space-1);
            font-size: var(--text-xs); color: #facc15; font-weight: 700;
        }

        .film-body { padding: var(--space-8); display: flex; flex-direction: column; gap: var(--space-5); }

        .film-meta { display: flex; align-items: center; flex-wrap: wrap; gap: var(--space-2); }
        .badge {
            display: inline-flex; align-items: center;
            font-size: var(--text-xs); font-weight: 500;
            padding: 3px var(--space-3); border-radius: var(--radius-full);
            border: 1px solid oklch(from var(--color-text) l c h / 0.12);
            color: var(--color-text-muted); background: var(--color-surface-2);
            text-transform: uppercase; letter-spacing: 0.06em;
        }
        .badge-accent {
            background: oklch(from var(--color-primary) l c h / 0.12);
            color: var(--color-primary);
            border-color: oklch(from var(--color-primary) l c h / 0.25);
        }

        .film-title { font-size: var(--text-2xl); color: var(--color-text); }
        .film-desc { font-size: var(--text-sm); color: var(--color-text-muted); line-height: 1.75; max-width: 60ch; }

        .actors-section {}
        .actors-label {
            font-size: var(--text-xs); text-transform: uppercase; letter-spacing: 0.1em;
            color: var(--color-text-faint); font-weight: 600; margin-bottom: var(--space-3);
        }
        .actors-list { display: flex; flex-wrap: wrap; gap: var(--space-2); }
        .actor-chip {
            display: flex; align-items: center; gap: var(--space-2);
            background: var(--color-surface-2);
            border: 1px solid oklch(from var(--color-text) l c h / 0.08);
            border-radius: var(--radius-full);
            padding: var(--space-2) var(--space-3);
        }
        .actor-avatar {
            width: 28px; height: 28px; border-radius: var(--radius-full);
            background: var(--color-surface-offset);
            display: flex; align-items: center; justify-content: center;
            font-size: 14px; flex-shrink: 0;
        }
        .actor-info {}
        .actor-name { font-size: var(--text-xs); font-weight: 600; color: var(--color-text); line-height: 1.2; }
        .actor-role { font-size: 10px; color: var(--color-text-faint); line-height: 1.2; }

        /* ===== FOOTER ===== */
        .site-footer {
            padding-block: var(--space-8);
            border-top: 1px solid oklch(from var(--color-text) l c h / 0.08);
            text-align: center;
            color: var(--color-text-faint);
            font-size: var(--text-xs);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .film-card { grid-template-columns: 1fr; }
            .film-poster { aspect-ratio: 3/4; max-height: 320px; }
            .film-poster img { max-height: 320px; }
            .film-body { padding: var(--space-6); }
            .film-title { font-size: var(--text-xl); }
        }
        @media (max-width: 480px) {
            .hero h1 { font-size: clamp(3rem, 14vw, 6rem); }
            .actors-list { gap: var(--space-2); }
            .actor-chip { padding: var(--space-1) var(--space-2); }
        }

        /* ===== SCROLL REVEAL ===== */
        .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.6s ease, transform 0.6s cubic-bezier(0.16, 1, 0.3, 1); }
        .reveal.visible { opacity: 1; transform: none; }
        .reveal:nth-child(2) { transition-delay: 0.1s; }
        .reveal:nth-child(3) { transition-delay: 0.2s; }
        @media (prefers-reduced-motion: reduce) {
            .reveal { opacity: 1; transform: none; transition: none; }
        }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="site-header">
    <div class="container">
        <div class="header-inner">
            <a href="#" class="logo" aria-label="Meus Filmes Favoritos">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                    <rect width="32" height="32" rx="8" fill="var(--color-primary)" opacity="0.15"/>
                    <rect x="6" y="10" width="20" height="14" rx="2" stroke="var(--color-primary)" stroke-width="1.5" fill="none"/>
                    <circle cx="16" cy="17" r="3" fill="var(--color-primary)"/>
                    <path d="M6 14h20M10 10V8M22 10V8" stroke="var(--color-primary)" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
                <div>
                    <div class="logo-text">CineList</div>
                    <div class="logo-sub">Meus Favoritos</div>
                </div>
            </a>
            <button class="theme-toggle" data-theme-toggle aria-label="Alternar tema">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
            </button>
        </div>
    </div>
</header>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <div class="hero-eyebrow">Top 3 Filmes</div>
        <h1>MEUS FAVORITOS</h1>
        <p>Uma seleção pessoal dos filmes que marcaram minha vida — aventura, herói e magia em cada cena.</p>
    </div>
</section>

<!-- FILMS -->
<section class="films-section">
    <div class="container">
        <div class="films-grid">
            <?php foreach ($filmes as $i => $filme): ?>
            <article class="film-card reveal">

                <div class="film-poster">
                    <img
                        src="<?= htmlspecialchars($filme['poster']) ?>"
                        alt="Poster de <?= htmlspecialchars($filme['titulo']) ?>"
                        width="260"
                        height="400"
                        loading="<?= $i === 0 ? 'eager' : 'lazy' ?>"
                        onerror="this.onerror=null;this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22260%22 height=%22400%22><rect width=%22260%22 height=%22400%22 fill=%22%231c1b19%22/><text x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22 fill=%22%23797876%22 font-size=%2248%22><?= urlencode($filme['icone']) ?></text></svg>'"
                    >
                    <div class="film-number"><?= $i + 1 ?></div>
                    <div class="film-rating-badge">
                        ★ <?= number_format($filme['rating'], 1) ?>
                    </div>
                </div>

                <div class="film-body">
                    <div class="film-meta">
                        <span class="badge badge-accent"><?= htmlspecialchars($filme['icone']) ?> <?= htmlspecialchars($filme['genero']) ?></span>
                        <span class="badge"><?= htmlspecialchars($filme['ano']) ?></span>
                        <span class="badge">⏱ <?= htmlspecialchars($filme['duracao']) ?></span>
                    </div>

                    <h2 class="film-title"><?= htmlspecialchars($filme['titulo']) ?></h2>

                    <p class="film-desc"><?= htmlspecialchars($filme['descricao']) ?></p>

                    <div class="actors-section">
                        <div class="actors-label">Elenco Principal</div>
                        <div class="actors-list">
                            <?php foreach ($filme['atores'] as $ator): ?>
                            <div class="actor-chip">
                                <div class="actor-avatar"><?= mb_substr($ator['nome'], 0, 1) ?></div>
                                <div class="actor-info">
                                    <div class="actor-name"><?= htmlspecialchars($ator['nome']) ?></div>
                                    <div class="actor-role"><?= htmlspecialchars($ator['personagem']) ?></div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="site-footer">
    <div class="container">
        <p>Feito com ❤️ por Gianluca · <?= date('Y') ?> · CineList</p>
    </div>
</footer>

<script>
// Theme toggle
(function(){
    const t=document.querySelector('[data-theme-toggle]'),r=document.documentElement;
    let d=r.getAttribute('data-theme')||'dark';
    const icons={dark:'<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>',light:'<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>'};
    t&&(t.innerHTML=icons[d],t.addEventListener('click',function(){d=d==='dark'?'light':'dark';r.setAttribute('data-theme',d);t.innerHTML=icons[d];}));
})();

// Scroll reveal
const observer=new IntersectionObserver(entries=>{
    entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('visible');observer.unobserve(e.target);}});
},{threshold:0.1,rootMargin:'0px 0px -40px 0px'});
document.querySelectorAll('.reveal').forEach(el=>observer.observe(el));
</script>
</body>
</html>
