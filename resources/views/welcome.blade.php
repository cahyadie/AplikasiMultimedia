<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Privasi di Dunia Digital - Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <style>
        /* CSS Reset & Base */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #fff;
            color: #222;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
            border-radius: 10px;
        }

        button {
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            border: none;
            outline-offset: 2px;
            outline-color: #8b5cf6;
            border-radius: 12px;
            transition: background-color 0.25s ease, box-shadow 0.25s ease;
        }

        button:focus-visible {
            outline-style: solid;
            outline-width: 2px;
        }

        /* Container */
        .container {
            max-width: 1200px;
            padding-left: 24px;
            padding-right: 24px;
            margin-left: auto;
            margin-right: auto;
        }

        /* HEADER */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 24px;
            position: sticky;
            top: 0;
            background: #fff;
            z-index: 1000;
            border-bottom: 1px solid #eaeaea;
        }

        .logo {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.5rem;
            color: #07575b;
            gap: 8px;
        }

        .logo-icon {
            font-size: 36px;
            color: rgb(48, 80, 82);
            font-weight: 900;
            line-height: 1;
        }

        header .footer-logo img {
            height: 28px;
            /* Atur tinggi logo sesuai keinginan */
            width: auto;
            /* Biarkan lebar menyesuaikan secara otomatis agar tidak gepeng */
        }

        nav.desktop-nav {
            display: flex;
            gap: 32px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        nav.desktop-nav a {
            color: #07575b;
            transition: color 0.3s ease;
        }

        nav.desktop-nav a:hover,
        nav.desktop-nav a:focus-visible {
            color: #8b5cf6;
        }

        /* Mobile hamburger menu */
        .hamburger {
            display: none;
            background: none;
            border: none;
            font-size: 28px;
            color: #07575b;
        }

        .mobile-nav {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            background: rgba(7, 87, 91, 0.95);
            color: white;
            display: none;
            flex-direction: column;
            padding: 64px 24px;
            z-index: 1500;
            gap: 24px;
        }

        .mobile-nav.show {
            display: flex;
        }

        .mobile-nav a {
            font-size: 1.25rem;
            font-weight: 600;
            color: white;
            padding: 12px 0;
            border-bottom: 1px solid rgba(255 255 255 / 0.3);
            outline-offset: 2px;
        }

        .mobile-nav a:focus-visible {
            outline: 2px solid #8b5cf6;
        }

        .mobile-nav-close {
            position: absolute;
            top: 16px;
            right: 24px;
            font-size: 32px;
            background: none;
            border: none;
            color: white;
            cursor: pointer;
        }

        /* HERO SECTION */
        .hero {
            background: linear-gradient(135deg, #07575b 0%, #2ab7ca 100%);
            color: white;
            text-align: center;
            padding: 96px 24px 64px;
            position: relative;
            overflow: visible;
        }

        .hero h1 {
            font-weight: 700;
            font-size: 2.75rem;
            max-width: 800px;
            margin: 0 auto 40px;
            line-height: 1.15;
        }

        .message-images {
            max-width: 900px;
            margin: 0 auto 48px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
            justify-content: center;

        }

        .message-card {
            background: #044646;
            padding: 16px;
            border-radius: 16px;
            max-width: 200px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            max-width: 280px;
            user-select: none;
            flex: 0 0 auto;
            justify-content: center;
            font-size: 0.8rem;
            color: #cce7e9;
            line-height: 1.3;
            font-family: 'Courier New', Courier, monospace;
            overflow-wrap: break-word;
        }

        .hero-subtext {
            font-size: 1.25rem;
            margin-top: 32px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 500;
            line-height: 1.4;
        }

        .emphasize {
            font-weight: 700;
            color: #ade8f4;
        }

        /* VIDEO & TEXT SECTION */
        .video-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 64px 24px;
            gap: 40px;
            background: #fafafa;
        }

        .video-placeholder {
            flex: 1 1 320px;
            min-width: 280px;
            max-width: 560px;
            background: #ddd;
            aspect-ratio: 16 / 9;
            border-radius: 16px;
            position: relative;
        }

        .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 64px;
            color: #666;
            opacity: 0.8;
        }

        .video-text {
            flex: 1 1 280px;
            font-size: 1.1rem;
            max-width: 480px;
            color: #222;
            font-weight: 600;
            line-height: 1.5;
            padding: 0 12px;
        }

        /* DATA PRIVACY INFO CARDS */
        .data-privacy-section {
            padding: 64px 24px 32px;
            text-align: center;
            max-width: 900px;
            margin: 0 auto 40px;
        }

        .data-privacy-section h2 {
            font-weight: 700;
            font-size: 1.6rem;
            margin-bottom: 4px;
            color: #07575b;
        }

        .data-privacy-section p {
            font-weight: 400;
            font-size: 0.9rem;
            margin-bottom: 48px;
            font-style: italic;

        }

        .privacy-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* Ubah baris ini */
            gap: 24px;
            justify-items: center;

        }

        .privacy-card {
            background: #07575b;
            color: white;
            padding: 32px 24px;
            border-radius: 20px;
            width: 100%;
            max-width: 320px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .privacy-card h3 {
            font-weight: 700;
            font-size: 1.15rem;
            color: rgb(255, 255, 255);
        }

        .privacy-card ul {
            padding-left: 18px;
            list-style-type: disc;
            text-align: left;
            font-size: 0.9rem;
            line-height: 1.4;
            color: rgb(255, 255, 255);
            margin: 0;
        }

        .privacy-card ul li {
            margin-bottom: 6px;
            max-width: 95%;
        }

        /* DANGER ZONE BANNER */
        .danger-zone {
            background: linear-gradient(135deg, #063f4f, #07575b);
            color: #e1f6f4;
            padding: 48px 24px;
            max-width: 960px;
            margin: 48px auto 64px;
            border-radius: 24px;
            box-shadow: 0 15px 30px rgba(7, 87, 91, 0.7);
            font-weight: 600;
            font-size: 1rem;
            line-height: 1.5;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 32px;
            user-select: none;
        }

        .danger-item {
            display: flex;
            flex-direction: column;
            gap: 12px;
            border-left: 4px solid #8b5cf6;
            padding-left: 16px;
        }

        .danger-item p:first-child {
            font-weight: 700;
            font-size: 0.95rem;
            margin: 0;
            font-style: normal;
        }

        .danger-item p:last-child {
            font-weight: 400;
            font-size: 0.85rem;
            margin: 0;
            font-style: italic;
            color: #b6e1e0;
        }

        /* TIPS ACCORDION */
        .tips-section {
            max-width: 720px;
            margin: 0 auto 96px;
            padding: 0 24px;
            font-weight: 500;
            color: #222;
        }

        .tips-section h2 {
            font-weight: 700;
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 10px;
            color: #07575b;
        }

        .tips-section p.subtitle {
            font-weight: 400;
            font-style: italic;
            font-size: 0.9rem;
            color: #444;
            margin-bottom: 36px;
            text-align: center;
        }

        details {
            background: #f3faff;
            border-radius: 12px;
            margin-bottom: 16px;
            box-shadow: 0 2px 6px rgba(7, 87, 91, 0.1);
            padding: 14px 24px;
            cursor: pointer;
            line-height: 1.4;
            font-size: 0.95rem;
            position: relative;
            transition: background-color 0.3s ease;
        }

        details[open] {
            background: #d7f0fb;
        }

        summary {
            font-weight: 600;
            list-style: none;
            outline: none;
            user-select: none;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        details summary::after {
            content: 'expand_more';
            font-family: 'Material Icons';
            float: right;
            font-size: 24px;
            line-height: 1;
            transition: transform 0.3s ease;
            color: #07575b;
        }

        details[open] summary::after {
            content: 'expand_less';
            color: #4c1d95;
        }

        /* QUIZ CTA */
        .quiz-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 720px;
            margin: 0 auto 96px;
            padding: 0 24px;
            gap: 16px;
            flex-wrap: wrap;
        }

        .quiz-text {
            font-weight: 700;
            font-size: 1.8rem;
            color: #121212;
            flex: 1 1 280px;
        }

        .quiz-btn {
            background-color: #d8cbf9;
            color: #4c1d95;
            padding: 14px 32px;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 16px;
            border: none;
            flex-shrink: 0;
            user-select: none;
            box-shadow: 0 4px 10px rgba(76, 29, 149, 0.3);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .quiz-btn:hover,
        .quiz-btn:focus-visible {
            background-color: #b5a3f7;
            box-shadow: 0 6px 14px rgba(76, 29, 149, 0.5);
            outline-offset: 3px;
        }

        /* FOOTER */
        footer {
            background: #fffffe;
            border-top: 1px solid #ddd;
            padding: 48px 24px;
            font-size: 0.9rem;
            color: #666;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            gap: 48px;
        }

        .footer-logo {
            flex: 1 1 180px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            font-size: 1.6rem;
            color: #07575b;
        }

        .footer-logo .logo-icon {
            font-size: 38px;
            font-weight: 900;
            color: #07575b;
            line-height: 1;
        }

        .footer-links {
            flex: 3 1 720px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 36px;
            color: #444;
        }

        .footer-column h4 {
            font-weight: 700;
            margin-bottom: 12px;
            color: #07575b;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #4a4a4a;
            transition: color 0.3s ease;
        }

        .footer-column ul li a:hover,
        .footer-column ul li a:focus-visible {
            color: #8b5cf6;
        }

        .footer-bottom {
            flex-basis: 100%;
            padding-top: 24px;
            border-top: 1px solid #ddd;
            color: #999;
            font-size: 0.8rem;
            text-align: center;
            user-select: none;
        }

        /* RESPONSIVENESS */

        @media (max-width: 767px) {
            header {
                padding: 16px;
            }

            nav.desktop-nav {
                display: none;
            }

            .hamburger {
                display: block;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .message-images {
                grid-template-columns: 1fr 1fr;
                max-width: 100%;
                gap: 16px;
            }

            .video-section {
                flex-direction: column;
                padding: 48px 16px;
            }

            .video-text,
            .video-placeholder {
                max-width: 100%;
                flex: unset;
            }

            .data-privacy-section {
                padding: 48px 16px 24px;
                max-width: 100%;
            }

            .privacy-cards {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .danger-zone {
                grid-template-columns: 1fr;
                padding: 36px 16px;
                margin: 40px 12px 56px;
            }

            .tips-section {
                padding: 0 16px;
                max-width: 100%;
                margin-bottom: 64px;
            }

            .quiz-section {
                flex-direction: column;
                justify-content: center;
                padding: 0 16px;
                margin-bottom: 64px;
            }

            .quiz-text {
                font-size: 1.4rem;
                text-align: center;
            }

            .quiz-btn {
                width: 100%;
                padding: 16px;
                font-size: 1.1rem;
            }

            footer {
                display: block;
                padding: 32px 16px 48px;
                gap: 24px;
            }

            .footer-links {
                grid-template-columns: 1fr 1fr;
                margin-top: 24px;
            }

            .footer-logo {
                justify-content: center;
                font-size: 1.4rem;
            }

            .footer-bottom {
                font-size: 0.75rem;
                padding-top: 16px;
            }
        }

        @media (min-width: 1440px) {
            .container {
                max-width: 1380px;
            }

            .message-images {
                max-width: 1100px;
                gap: 28px;
            }

            .data-privacy-section {
                max-width: 1100px;
            }

            .danger-zone {
                max-width: 1100px;
            }

            .tips-section {
                max-width: 820px;
            }

            .quiz-section {
                max-width: 820px;
            }

            footer {
                max-width: 1380px;
                padding-left: 48px;
                padding-right: 48px;
            }
        }
    </style>
</head>

<body>
    <header>
        <a href="/" class="footer-logo" aria-label="Logo Perusahaan Anda">
            <img src="{{ asset('images/logo.png') }}">
        </a>
        <nav class="desktop-nav" aria-label="Primary navigation">
            <a href="#data-pribadi">Data Pribadi</a>
            <a href="#phising-malware">Phising & Malware</a>
            <a href="#tips-buat-kamu">Tips</a>
        </nav>
        <button class="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu"
            id="hamburger-btn">
            <span class="material-icons">menu</span>
        </button>
    </header>
    <nav class="mobile-nav" id="mobile-menu" aria-label="Mobile navigation" hidden>
        <button class="mobile-nav-close" aria-label="Close menu" id="close-menu-btn">
            <span class="material-icons">close</span>
        </button>
        <a href="#data-pribadi">Data Pribadi</a>
        <a href="#phising-malware">Phising & Malware</a>
        <a href="#tips-buat-kamu">Tips</a>
    </nav>

    <main>
        <section class="hero" aria-labelledby="hero-title">
            <h1 id="hero-title">Privasi di Dunia Digital</h1>

            <div class="message-images" aria-label="Contoh pesan phishing dan malware dalam bahasa Indonesia">
                <article class="message-card">
                    <img src="{{ asset('images/image1.png') }}"
                        alt="Contoh pesan penipuan dari BANK BRI, berpura-pura mengonfirmasi data." />
                </article>

                <article class="message-card">
                    <img src="{{ asset('images/image2.png') }}"
                        alt="Pesan palsu yang berisi link konfirmasi transaksi resmi dari bank." />
                </article>

                <article class="message-card">
                    <img src="{{ asset('images/image3.png') }}"
                        alt="Chat notifikasi palsu yang meminta data pribadi dengan ancaman." />
                </article>

                <article class="message-card">
                    <img src="{{ asset('images/image4.png') }}"
                        alt="Pesan SMS dari BANK BRI palsu yang meminta data lanjutan." />
                </article>

                <article class="message-card">
                    <img src="{{ asset('images/image5.png') }}"
                        alt="Contoh pesan penipuan via WhatsApp mengatasnamakan admin resmi." />
                </article>
            </div>

            <p class="hero-subtext">
                Kalian sering mendapat pesan kayak gitu?<br />
                Coba tonton video di bawah ini paham dan bagaimana agar terhindar dari
                <span class="emphasize">Phising dan Malware!!</span>
            </p>
        </section>

        <section class="video-section" aria-labelledby="video-section-title">
            <div class="video-placeholder" role="region"
                aria-label="Placeholder for instructional video about data privacy threats">
                <span class="material-icons play-icon" aria-hidden="true">play_circle_filled</span>
            </div>
            <p class="video-text">
                Nonton video di samping biar kalian tau apa itu hal yang mengancam data privasi kalian.
            </p>
        </section>

        <section id="data-pribadi" class="data-privacy-section" aria-labelledby="data-pribadi-title">
            <h2 id="data-pribadi-title">DATA PRIBADI LO ITU APA SAJA SIH?</h2>
            <p>Kenali <em>'Harta Karun Digital'</em>-mu biar nggak gampang kecolongan!</p>

            <div class="privacy-cards" role="list">
                <article class="privacy-card" role="listitem" tabindex="0">
                    <h3>Data Pribadi Umum</h3>
                    <ul>
                        <li>Nama Lengkap</li>
                        <li>Jenis Kelamin</li>
                        <li>Tanggal Lahir</li>
                        <li>Alamat</li>
                        <li>Nomor HP & Email</li>
                        <li>Lokasi GPS</li>
                    </ul>
                </article>
                <article class="privacy-card" role="listitem" tabindex="0">
                    <h3>LOCKED SECRET STATS (Level Bahaya!)</h3>
                    <ul>
                        <li>Data Kesehatan</li>
                        <li>Info Biometrik (Sidik Jari, Wajah)</li>
                        <li>Orientasi Seksual / Pandangan Politik</li>
                        <li>Info Keuangan (Nomor Rekening, Kartu Kredit)</li>
                    </ul>
                </article>
                <article class="privacy-card" role="listitem" tabindex="0">
                    <h3>GOLDEN RULE: "Ini Punya Gue!"</h3>
                    <p>Intinya cuma satu: Semua data itu punya LO.</p>
                    <p>
                        Orang lain atau aplikasi cuma boleh "pijin" atau pake' kalau lo udh
                        resmi izin (consent). Kalau mereka macam-macam, ada hukum yang
                        melindungi lo (kayak UU PDP di Indonesia). Simpel, kan?
                    </p>
                </article>
            </div>
        </section>

        <section class="danger-zone" aria-label="Danger zone warnings about sharing personal data">
            <div class="danger-item" tabindex="0">
                <p>Jangan cuma dibaca! ini akibat nyata kalau data lo bocor:</p>
                <p>Kalau KTP & Data Diri lo bocor... Nama lo bisa dipakai buat daftar pinjol! Tibatiba lo yang ditagih
                    utang. Serem kan?</p>
            </div>
            <div class="danger-item" tabindex="0">
                <p>Temen-temen dan keluarga lo dipintu pakai nama lo. Reputasi lo ancur!</p>
                <p>Kalau akun medsos & email lo ke-hack...</p>
            </div>
            <div class="danger-item" tabindex="0">
                <p>Diteror spam & penipuan non-stop, bahkan bisa didetengin orang nggak dikenal.</p>
                <p>Kalau no handphone & alamat lo tersebar...</p>
            </div>
        </section>

        <section id="tips-buat-kamu" class="tips-section" aria-labelledby="tips-title">
            <h2 id="tips-title">Tips Buat Kamu!</h2>
            <p class="subtitle">Agar kamu bisa tau lebih dalam dan gak ketipu lagi</p>

            <details>
                <summary>Jangan Klik Link Asal-asalan</summary>
                <p>Selalu periksa alamat link dan pastikan berasal dari sumber terpercaya. Hindari mengklik tautan dari
                    email atau pesan yang mencurigakan.
                    <br><br>
                    Mencegah Anda menjadi korban phishing dan malware.
                    <br>
                <ul>
                    <li>Periksa Alamat URL Sebelum Mengklik: Arahkan kursor mouse ke tautan (tanpa mengklik) untuk
                        melihat URL lengkap yang akan Anda kunjungi. Pastikan itu sesuai dengan situs web yang Anda
                        harapkan. Perhatikan ejaan yang salah atau domain yang mencurigakan (misalnya, `google.co.id`
                        bukan `go0gle.com`).</li>
                    <li>Waspadai Email dan Pesan Mencurigakan: Jika Anda menerima email atau pesan teks yang meminta
                        informasi pribadi, pembayaran segera, atau berisi tautan yang tidak dikenal, jangan langsung
                        klik. Verifikasi keasliannya melalui saluran resmi (misalnya, hubungi perusahaan tersebut
                        langsung menggunakan nomor telepon resmi mereka).</li>
                    <li>Gunakan Fitur "Laporkan Phishing": Banyak penyedia email memiliki fitur untuk melaporkan email
                        phishing. Manfaatkan fitur ini untuk membantu melindungi orang lain.</li>
                </ul>
                </p>
            </details>
            <details>
                <summary>Gunakan Password yang Kuat dan Berbeda</summary>
                <p>Buat password yang sulit ditebak dan gunakan password unik untuk setiap akun online kamu.
                    <br><br>
                    Melindungi akun Anda dari peretasan. Jika satu akun diretas, akun lain tidak ikut terancam.
                    <br>
                <ul>
                    <li>Gunakan Kombinasi Karakter: Buat kata sandi yang terdiri dari kombinasi huruf besar, huruf
                        kecil, angka, dan simbol.</li>
                    <li>Panjang Minimal: Usahakan kata sandi memiliki panjang minimal 12-16 karakter.</li>
                    <li>**Hindari Informasi Pribadi:** Jangan gunakan tanggal lahir, nama hewan peliharaan, nama
                        keluarga, atau informasi pribadi lain yang mudah ditebak.</li>
                    <li>**Gunakan Pengelola Kata Sandi (Password Manager):** Aplikasi seperti LastPass, Bitwarden, atau
                        1Password dapat membantu Anda membuat, menyimpan, dan mengelola kata sandi yang kuat dan unik
                        untuk setiap akun. Ini sangat direkomendasikan.</li>
                    <li>**Ubah Kata Sandi Secara Berkala:** Meskipun tidak selalu diwajibkan oleh semua layanan,
                        mengganti kata sandi utama Anda secara berkala (misalnya, setiap 3-6 bulan) dapat meningkatkan
                        keamanan.</li>
                </ul>
                </p>
            </details>
            <details>
                <summary>Aktifkan Autentikasi Dua Faktor (2FA)</summary>
                <p>Pastikan untuk mengaktifkan 2FA di akun-akun penting untuk menambah lapisan keamanan ekstra.
                    <br><br>
                    **Pentingnya:** Menambahkan lapisan keamanan ekstra, bahkan jika kata sandi Anda terungkap.
                    <br>
                    **Cara Melakukannya:**
                <ul>
                    <li>**Cari Pengaturan Keamanan Akun:** Masuk ke akun-akun penting Anda (email, media sosial,
                        perbankan online, dll.) dan cari bagian "Keamanan" atau "Pengaturan Privasi".</li>
                    <li>**Pilih Metode 2FA:** Umumnya, ada beberapa pilihan:
                        <ul>
                            <li>**Aplikasi Autentikator:** Gunakan aplikasi seperti Google Authenticator, Microsoft
                                Authenticator, atau Authy yang menghasilkan kode sekali pakai. Ini adalah metode yang
                                paling direkomendasikan.</li>
                            <li>**SMS:** Kode dikirim melalui SMS ke nomor telepon Anda. (Kurang aman dibandingkan
                                aplikasi autentikator karena risiko SIM-swapping).</li>
                            <li>**Kunci Keamanan Fisik:** Perangkat fisik seperti YubiKey yang harus dicolokkan ke
                                perangkat Anda. (Sangat aman, cocok untuk akun yang sangat sensitif).</li>
                        </ul>
                    </li>
                    <li>**Ikuti Instruksi Penyiapan:** Ikuti langkah-langkah yang diberikan oleh layanan untuk
                        mengaktifkan 2FA. Pastikan untuk menyimpan kode cadangan (recovery codes) di tempat yang aman
                        jika Anda kehilangan akses ke perangkat 2FA Anda.</li>
                </ul>
                </p>
            </details>
            <details>
                <summary>Rutin Update Perangkat dan Aplikasi</summary>
                <p>Selalu jalankan pembaruan software agar perangkat tetap terlindungi dari ancaman terbaru.
                    <br><br>
                    **Pentingnya:** Memperbaiki kerentanan keamanan yang ditemukan dan meningkatkan kinerja.
                    <br>
                    **Cara Melakukannya:**
                <ul>
                    <li>**Aktifkan Pembaruan Otomatis (Jika Ada):** Di pengaturan sistem operasi (Windows, macOS,
                        Android, iOS) dan aplikasi, aktifkan pembaruan otomatis jika tersedia.</li>
                    <li>**Periksa Pembaruan Secara Manual:** Jika pembaruan otomatis tidak diaktifkan, secara berkala
                        periksa pembaruan sistem operasi dan semua aplikasi yang Anda gunakan.
                        <ul>
                            <li>**Windows:** Pengaturan > Pembaruan & Keamanan > Windows Update.</li>
                            <li>**macOS:** Pengaturan Sistem > Umum > Pembaruan Perangkat Lunak.</li>
                            <li>**Android:** Pengaturan > Sistem > Pembaruan Sistem/Perangkat Lunak.</li>
                            <li>**iOS:** Pengaturan > Umum > Pembaruan Perangkat Lunak.</li>
                        </ul>
                    </li>
                    <li>**Pembaruan Aplikasi:** Perbarui aplikasi melalui toko aplikasi resmi (Google Play Store, Apple
                        App Store) atau langsung dari situs web pengembang.</li>
                </ul>
                </p>
            </details>
            <details>
                <summary>Pasang Antivirus dan Jangan Unduh File Sembarangan</summary>
                <p>Gunakan program antivirus dan hindari mengunduh file dari sumber yang tidak terpercaya.
                    <br><br>
                    **Pentingnya:** Melindungi perangkat Anda dari virus, malware, dan ancaman lainnya.
                    <br>
                    **Cara Melakukannya:**
                <ul>
                    <li>**Instal Program Antivirus Terkemuka:** Gunakan antivirus yang memiliki reputasi baik seperti
                        Avast, AVG, Bitdefender, Norton, ESET, atau Windows Defender (bawaan Windows). Pastikan program
                        antivirus Anda selalu diperbarui.</li>
                    <li>**Pindai Secara Teratur:** Lakukan pemindaian penuh sistem secara teratur (misalnya, seminggu
                        sekali) menggunakan program antivirus Anda.</li>
                    <li>**Berhati-hati Mengunduh File:**
                        <ul>
                            <li>**Hanya dari Sumber Terpercaya:** Unduh file (aplikasi, dokumen, dll.) hanya dari situs
                                web resmi pengembang atau toko aplikasi resmi.</li>
                            <li>**Hindari Situs Unduhan Ilegal/Pirates:** Situs-situs ini seringkali menyertakan malware
                                dalam unduhan mereka.</li>
                            <li>**Pindai File Unduhan:** Banyak program antivirus secara otomatis memindai file yang
                                baru diunduh. Jika tidak, lakukan pemindaian manual sebelum membuka file yang diunduh
                                dari sumber yang kurang dikenal.</li>
                            <li>**Waspadai Ekstensi File:** Berhati-hatilah dengan file yang memiliki ekstensi ganda
                                (misalnya, `foto.jpg.exe`) atau ekstensi yang tidak biasa (.vbs, .js).</li>
                        </ul>
                    </li>
                </ul>
                </p>
            </details>
        </section>

        <section class="quiz-section" aria-label="Quiz call to action">
            <p class="quiz-text">Buktiin diri lu kalo udah paham !</p>
            <button class="quiz-btn" aria-label="Start quiz">QUIZ</button>
        </section>
    </main>

    <footer>
        <a href="/" class="footer-logo" aria-label="Logo Perusahaan Anda">
            <img src="{{ asset('images/logo.png') }}">
        </a>
        <div class="footer-links" role="list">
            <div class="footer-column" role="listitem">
                <h4>Jelajahi</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog/Artikel</a></li>
                    <li><a href="#">Cheat Codes (Tips)</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                </ul>
            </div>
            <div class="footer-column" role="listitem">
                <h4>Yuk, Terhubung!</h4>
                <ul>
                    <li><a href="#">TikTok</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">YouTube</a></li>
                    <li><a href="#">Discord</a></li>
                </ul>
            </div>
            <div class="footer-column" role="listitem">
                <h4>Aturan Main</h4>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Disclaimer</a></li>
                    <li><a href="#">Kontak Kami</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        &copy; 2025 Three. Dibuat dengan ❤ untuk Generasi Cerdas Digital.
    </div>
    <script>
        // Mobile menu toggle
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenuBtn = document.getElementById('close-menu-btn');

        hamburgerBtn.addEventListener('click', () => {
            mobileMenu.classList.add('show');
            mobileMenu.removeAttribute('hidden');
            hamburgerBtn.setAttribute('aria-expanded', 'true');
        });

        closeMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('show');
            mobileMenu.setAttribute('hidden', '');
            hamburgerBtn.setAttribute('aria-expanded', 'false');
        });

        // Close menu on link click for accessibility
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('show');
                mobileMenu.setAttribute('hidden', '');
                hamburgerBtn.setAttribute('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>