<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Terminal Tanjung Pinggir | Sistem Informasi Terminal</title>

    <meta name="description"
        content="Sistem Informasi Layanan Terminal Tanjung Pinggir">

    <link rel="stylesheet"
        href="{{ asset('css/terminal.css') }}">
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <header class="navbar">

        <div class="nav-container">

            <a href="#" class="brand">

                <div class="brand-icon">
                    🚌
                </div>

                <div>
                    <strong>Terminal</strong>
                    <span>Tanjung Pinggir</span>
                </div>

            </a>


            <nav class="nav-menu">

                <a href="#beranda" class="active">
                    Beranda
                </a>

                <a href="#jadwal">
                    Jadwal
                </a>

                <a href="#layanan">
                    Layanan
                </a>

                <a href="#fasilitas">
                    Fasilitas
                </a>

                <a href="#lokasi">
                    Lokasi
                </a>

            </nav>


            <a href="#kontak" class="nav-button">
                Hubungi Kami
            </a>


            <button class="menu-toggle" id="menuToggle">
                ☰
            </button>

        </div>

    </header>



    <!-- ================= HERO ================= -->

    <main>

        <section class="hero" id="beranda">

            <div class="hero-overlay"></div>

            <div class="hero-container">

                <div class="hero-content">

                    <div class="hero-badge">
                        ● SISTEM INFORMASI TERMINAL
                    </div>


                    <h1>

                        Perjalanan Lebih
                        <span>Mudah & Nyaman.</span>

                    </h1>


                    <p>

                        Temukan jadwal keberangkatan, rute perjalanan,
                        fasilitas, dan informasi terbaru Terminal
                        Tanjung Pinggir dalam satu tempat.

                    </p>


                    <div class="hero-buttons">

                        <a href="#cari" class="btn-primary">

                            🔎 Cari Jadwal

                        </a>


                        <a href="#layanan" class="btn-secondary">

                            Lihat Layanan
                            →

                        </a>

                    </div>

                </div>


                <!-- CARD INFORMASI -->

                <div class="hero-info-card">

                    <div class="live-indicator">

                        <span></span>

                        INFORMASI TERKINI

                    </div>


                    <h3>
                        Jadwal Keberangkatan Hari Ini
                    </h3>


                    <div class="next-bus">

                        <div>

                            <small>KEBERANGKATAN BERIKUTNYA</small>

                            <strong id="nextBusTime">
                                08:00
                            </strong>

                        </div>


                        <div class="bus-icon">
                            🚌
                        </div>

                    </div>


                    <div class="bus-detail">

                        <span>
                            ALS
                        </span>

                        <span>
                            → Medan
                        </span>

                    </div>


                    <a href="#jadwal">
                        Lihat semua jadwal →
                    </a>

                </div>

            </div>

        </section>



        <!-- ================= STATISTIK ================= -->

        <section class="statistics">

            <div class="statistics-container">


                <div class="stat-item">

                    <div class="stat-icon">
                        🚌
                    </div>

                    <div>

                        <strong>
                            24+
                        </strong>

                        <span>
                            Jadwal Bus
                        </span>

                    </div>

                </div>



                <div class="stat-item">

                    <div class="stat-icon">
                        📍
                    </div>

                    <div>

                        <strong>
                            15+
                        </strong>

                        <span>
                            Rute Perjalanan
                        </span>

                    </div>

                </div>



                <div class="stat-item">

                    <div class="stat-icon">
                        🕐
                    </div>

                    <div>

                        <strong>
                            06:00
                        </strong>

                        <span>
                            Jam Operasional
                        </span>

                    </div>

                </div>



                <div class="stat-item">

                    <div class="stat-icon">
                        ⭐
                    </div>

                    <div>

                        <strong>
                            24/7
                        </strong>

                        <span>
                            Informasi Online
                        </span>

                    </div>

                </div>

            </div>

        </section>



        <!-- ================= PENCARIAN ================= -->

        <section class="search-section" id="cari">

            <div class="section-container">

                <div class="section-heading">

                    <div>

                        <span class="section-label">
                            PENCARIAN PERJALANAN
                        </span>

                        <h2>
                            Mau pergi ke mana?
                        </h2>

                    </div>


                    <p>
                        Cari informasi jadwal bus dengan cepat.
                    </p>

                </div>



                <div class="search-box">

                    <div class="input-group">

                        <label>
                            DARI
                        </label>

                        <select id="fromCity">

                            <option>
                                Terminal Tanjung Pinggir
                            </option>

                        </select>

                    </div>



                    <div class="swap-button" id="swapButton">
                        ⇄
                    </div>



                    <div class="input-group">

                        <label>
                            TUJUAN
                        </label>

                        <select id="destination">

                            <option value="">
                                Pilih tujuan
                            </option>

                            <option value="Medan">
                                Medan
                            </option>

                            <option value="Balige">
                                Balige
                            </option>

                            <option value="Parapat">
                                Parapat
                            </option>

                            <option value="Pematangsiantar">
                                Pematangsiantar
                            </option>

                        </select>

                    </div>



                    <div class="input-group">

                        <label>
                            TANGGAL
                        </label>

                        <input
                            type="date"
                            id="travelDate">

                    </div>



                    <button
                        class="search-button"
                        id="searchButton">

                        🔎 Cari Jadwal

                    </button>

                </div>


                <div
                    id="searchResult"
                    class="search-result">

                </div>

            </div>

        </section>



        <!-- ================= JADWAL ================= -->

        <section class="schedule-section" id="jadwal">

            <div class="section-container">

                <div class="section-heading centered">

                    <span class="section-label">
                        JADWAL KEBERANGKATAN
                    </span>

                    <h2>
                        Jadwal Bus Hari Ini
                    </h2>

                    <p>
                        Informasi jadwal keberangkatan bus
                        Terminal Tanjung Pinggir.
                    </p>

                </div>



                <div class="schedule-filter">

                    <button
                        class="filter active"
                        data-filter="all">

                        Semua

                    </button>

                    <button
                        class="filter"
                        data-filter="Medan">

                        Medan

                    </button>

                    <button
                        class="filter"
                        data-filter="Balige">

                        Balige

                    </button>

                    <button
                        class="filter"
                        data-filter="Parapat">

                        Parapat

                    </button>

                </div>



                <div class="schedule-table-wrapper">

                    <table class="schedule-table">

                        <thead>

                            <tr>

                                <th>
                                    BUS
                                </th>

                                <th>
                                    TUJUAN
                                </th>

                                <th>
                                    BERANGKAT
                                </th>

                                <th>
                                    KELAS
                                </th>

                                <th>
                                    STATUS
                                </th>

                            </tr>

                        </thead>


                        <tbody id="scheduleBody">

                            <tr data-destination="Medan">

                                <td>

                                    <div class="bus-name">

                                        <div class="bus-logo">
                                            A
                                        </div>

                                        <div>

                                            <strong>
                                                ALS
                                            </strong>

                                            <small>
                                                Antar Lintas Sumatera
                                            </small>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <strong>
                                        Medan
                                    </strong>

                                    <small>
                                        Via Tebing Tinggi
                                    </small>

                                </td>


                                <td>

                                    <strong class="time">
                                        08:00
                                    </strong>

                                    <small>
                                        WIB
                                    </small>

                                </td>


                                <td>
                                    Executive
                                </td>


                                <td>

                                    <span class="status available">
                                        ● Tersedia
                                    </span>

                                </td>

                            </tr>



                            <tr data-destination="Balige">

                                <td>

                                    <div class="bus-name">

                                        <div class="bus-logo purple">
                                            P
                                        </div>

                                        <div>

                                            <strong>
                                                PMTOH
                                            </strong>

                                            <small>
                                                Bus Antar Kota
                                            </small>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <strong>
                                        Balige
                                    </strong>

                                    <small>
                                        Via Parapat
                                    </small>

                                </td>


                                <td>

                                    <strong class="time">
                                        10:30
                                    </strong>

                                    <small>
                                        WIB
                                    </small>

                                </td>


                                <td>
                                    Ekonomi
                                </td>


                                <td>

                                    <span class="status available">
                                        ● Tersedia
                                    </span>

                                </td>

                            </tr>



                            <tr data-destination="Parapat">

                                <td>

                                    <div class="bus-name">

                                        <div class="bus-logo orange">
                                            M
                                        </div>

                                        <div>

                                            <strong>
                                                Makmur
                                            </strong>

                                            <small>
                                                Angkutan Antar Kota
                                            </small>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <strong>
                                        Parapat
                                    </strong>

                                    <small>
                                        Via Siantar
                                    </small>

                                </td>


                                <td>

                                    <strong class="time">
                                        13:00
                                    </strong>

                                    <small>
                                        WIB
                                    </small>

                                </td>


                                <td>
                                    Executive
                                </td>


                                <td>

                                    <span class="status available">
                                        ● Tersedia
                                    </span>

                                </td>

                            </tr>



                            <tr data-destination="Medan">

                                <td>

                                    <div class="bus-name">

                                        <div class="bus-logo green">
                                            S
                                        </div>

                                        <div>

                                            <strong>
                                                Sinar Sepadan
                                            </strong>

                                            <small>
                                                Bus Antar Kota
                                            </small>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <strong>
                                        Medan
                                    </strong>

                                    <small>
                                        Via Perdagangan
                                    </small>

                                </td>


                                <td>

                                    <strong class="time">
                                        15:30
                                    </strong>

                                    <small>
                                        WIB
                                    </small>

                                </td>


                                <td>
                                    Ekonomi
                                </td>


                                <td>

                                    <span class="status available">
                                        ● Tersedia
                                    </span>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <div class="table-footer">

                    <span>
                        Menampilkan jadwal keberangkatan
                    </span>

                    <button id="showAll">
                        Lihat Semua Jadwal →
                    </button>

                </div>

            </div>

        </section>



        <!-- ================= LAYANAN ================= -->

        <section class="services-section" id="layanan">

            <div class="section-container">

                <div class="section-heading centered">

                    <span class="section-label">
                        LAYANAN TERMINAL
                    </span>

                    <h2>
                        Semua Informasi dalam Satu Tempat
                    </h2>

                    <p>
                        Kami menyediakan berbagai informasi
                        untuk membantu perjalanan Anda.
                    </p>

                </div>



                <div class="service-grid">


                    <div class="service-card">

                        <div class="service-icon blue">
                            🚌
                        </div>

                        <h3>
                            Informasi Bus
                        </h3>

                        <p>
                            Lihat jadwal keberangkatan,
                            tujuan, dan informasi bus.
                        </p>

                        <a href="#jadwal">
                            Lihat Jadwal →
                        </a>

                    </div>



                    <div class="service-card">

                        <div class="service-icon green">
                            📍
                        </div>

                        <h3>
                            Rute Perjalanan
                        </h3>

                        <p>
                            Temukan informasi rute
                            perjalanan menuju berbagai kota.
                        </p>

                        <a href="#jadwal">
                            Lihat Rute →
                        </a>

                    </div>



                    <div class="service-card">

                        <div class="service-icon orange">
                            🎫
                        </div>

                        <h3>
                            Informasi Tiket
                        </h3>

                        <p>
                            Informasi pembelian tiket dan
                            layanan transportasi.
                        </p>

                        <a href="#kontak">
                            Informasi →
                        </a>

                    </div>



                    <div class="service-card">

                        <div class="service-icon purple">
                            📢
                        </div>

                        <h3>
                            Pengumuman
                        </h3>

                        <p>
                            Dapatkan informasi terbaru
                            mengenai terminal.
                        </p>

                        <a href="#pengumuman">
                            Lihat Pengumuman →
                        </a>

                    </div>

                </div>

            </div>

        </section>



        <!-- ================= FASILITAS ================= -->

        <section class="facility-section" id="fasilitas">

            <div class="section-container">

                <div class="facility-layout">


                    <div class="facility-content">

                        <span class="section-label">
                            FASILITAS TERMINAL
                        </span>

                        <h2>
                            Fasilitas untuk
                            Perjalanan yang Nyaman
                        </h2>

                        <p>
                            Terminal Tanjung Pinggir menyediakan
                            berbagai fasilitas untuk mendukung
                            kenyamanan penumpang.
                        </p>


                        <div class="facility-list">


                            <div class="facility-item">

                                <span>🚻</span>

                                <div>

                                    <strong>
                                        Toilet
                                    </strong>

                                    <small>
                                        Fasilitas toilet penumpang
                                    </small>

                                </div>

                            </div>



                            <div class="facility-item">

                                <span>🪑</span>

                                <div>

                                    <strong>
                                        Ruang Tunggu
                                    </strong>

                                    <small>
                                        Area tunggu penumpang
                                    </small>

                                </div>

                            </div>



                            <div class="facility-item">

                                <span>🕌</span>

                                <div>

                                    <strong>
                                        Mushola
                                    </strong>

                                    <small>
                                        Tempat ibadah penumpang
                                    </small>

                                </div>

                            </div>



                            <div class="facility-item">

                                <span>🅿️</span>

                                <div>

                                    <strong>
                                        Area Parkir
                                    </strong>

                                    <small>
                                        Area parkir kendaraan
                                    </small>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="facility-visual">

                        <div class="visual-card">

                            <div class="visual-icon">
                                🚌
                            </div>

                            <h3>
                                Terminal Tanjung Pinggir
                            </h3>

                            <p>
                                Pusat layanan informasi
                                transportasi.
                            </p>

                            <div class="visual-line"></div>

                            <span>
                                📍 Pematangsiantar
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- ================= PENGUMUMAN ================= -->

        <section class="announcement-section" id="pengumuman">

            <div class="section-container">

                <div class="announcement">

                    <div class="announcement-icon">
                        📢
                    </div>


                    <div class="announcement-content">

                        <span>
                            PENGUMUMAN TERBARU
                        </span>

                        <h3>
                            Pastikan Anda datang 30 menit
                            sebelum keberangkatan.
                        </h3>

                        <p>
                            Penumpang disarankan tiba lebih awal
                            untuk proses pemeriksaan dan persiapan
                            keberangkatan.
                        </p>

                    </div>


                    <button
                        class="announcement-button"
                        onclick="showAnnouncement()">

                        Selengkapnya →

                    </button>

                </div>

            </div>

        </section>



        <!-- ================= LOKASI ================= -->

        <section class="location-section" id="lokasi">

            <div class="section-container">

                <div class="location-layout">


                    <div>

                        <span class="section-label">
                            LOKASI
                        </span>

                        <h2>
                            Temukan Kami
                        </h2>

                        <p>
                            Terminal Tanjung Pinggir
                            berada di wilayah Pematangsiantar.
                        </p>


                        <div class="location-info">

                            <div>
                                📍
                            </div>

                            <div>

                                <strong>
                                    Terminal Tanjung Pinggir
                                </strong>

                                <span>
                                    Pematangsiantar, Sumatera Utara
                                </span>

                            </div>

                        </div>


                        <button
                            class="btn-primary"
                            onclick="openMap()">

                            📍 Buka Google Maps

                        </button>

                    </div>


                    <div class="map-placeholder">

                        <div class="map-content">

                            <div class="map-pin">
                                📍
                            </div>

                            <strong>
                                Terminal Tanjung Pinggir
                            </strong>

                            <span>
                                Pematangsiantar
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>



    <!-- ================= FOOTER ================= -->

    <footer id="kontak">

        <div class="footer-container">


            <div class="footer-brand">

                <div class="brand">

                    <div class="brand-icon">
                        🚌
                    </div>

                    <div>

                        <strong>
                            Terminal
                        </strong>

                        <span>
                            Tanjung Pinggir
                        </span>

                    </div>

                </div>


                <p>
                    Sistem Informasi Layanan Terminal
                    Tanjung Pinggir.
                </p>

            </div>



            <div class="footer-column">

                <h4>
                    Navigasi
                </h4>

                <a href="#beranda">
                    Beranda
                </a>

                <a href="#jadwal">
                    Jadwal Bus
                </a>

                <a href="#layanan">
                    Layanan
                </a>

                <a href="#fasilitas">
                    Fasilitas
                </a>

            </div>



            <div class="footer-column">

                <h4>
                    Informasi
                </h4>

                <a href="#lokasi">
                    Lokasi
                </a>

                <a href="#pengumuman">
                    Pengumuman
                </a>

                <a href="#kontak">
                    Kontak
                </a>

            </div>



            <div class="footer-column">

                <h4>
                    Kontak
                </h4>

                <span>
                    📍 Pematangsiantar
                </span>

                <span>
                    📞 Informasi Terminal
                </span>

                <span>
                    ✉️ info@terminal.local
                </span>

            </div>

        </div>


        <div class="footer-bottom">

            © 2026 Terminal Tanjung Pinggir.
            Semua hak dilindungi.

        </div>

    </footer>



    <script src="{{ asset('js/terminal.js') }}"></script>

</body>

</html>