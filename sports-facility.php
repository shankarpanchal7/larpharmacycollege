<?php include_once("components/header_t.php"); echo '<title>Sports Facility - LARCOP</title>'; include_once("components/header_b.php"); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

<style>
    .masonry-grid {
        column-count: 2;
        column-gap: 14px;
        max-width: 960px;
        margin: 0 auto;
    }

    .masonry-item {
        break-inside: avoid;
        margin-bottom: 14px;
        display: block;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 2px 10px rgba(0,0,0,0.10);
        transition: box-shadow 0.3s ease, transform 0.25s ease;
        background: #f0f0f0;
    }

    .masonry-item:hover {
        box-shadow: 0 10px 28px rgba(0,0,0,0.20);
        transform: translateY(-4px);
    }

    .masonry-item img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 12px;
        transition: transform 0.35s ease;
    }

    .masonry-item:hover img {
        transform: scale(1.03);
    }

    .masonry-item::after {
        content: '\f00e';
        font-family: FontAwesome;
        font-size: 1.6rem;
        color: #fff;
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0,0,0,0);
        border-radius: 12px;
        transition: background 0.3s ease;
        pointer-events: none;
    }

    .masonry-item:hover::after {
        background: rgba(0,0,0,0.28);
    }

    @media (max-width: 480px) {
        .masonry-grid { column-count: 1; }
    }
</style>

<section id="js--active-sticky">
    <div class="container">

        <h2>Sports Facility</h2>

        <div class="mb-4">
            <p>
                <strong>Loknete Appasaheb Rajale College of Pharmacy</strong> encourages students to participate
                in sports and physical activities as an essential part of holistic development. The college provides
                dedicated sports facilities and grounds for both indoor and outdoor games, fostering teamwork,
                discipline, and a spirit of healthy competition among students.
            </p>
        </div>

        <h4 class="mb-3">Sports Facility Gallery</h4>

        <div class="masonry-grid">

            <a class="masonry-item" data-fancybox="sports-gallery" href="/img/sports-facility/1.jpeg" data-caption="Sports Facility - View 1">
                <img src="/img/sports-facility/1.jpeg" alt="Sports Facility View 1" loading="lazy">
            </a>

            <a class="masonry-item" data-fancybox="sports-gallery" href="/img/sports-facility/2.jpeg" data-caption="Sports Facility - View 2">
                <img src="/img/sports-facility/2.jpeg" alt="Sports Facility View 2" loading="lazy">
            </a>

            <a class="masonry-item" data-fancybox="sports-gallery" href="/img/sports-facility/3.jpeg" data-caption="Sports Facility - View 3">
                <img src="/img/sports-facility/3.jpeg" alt="Sports Facility View 3" loading="lazy">
            </a>

            <a class="masonry-item" data-fancybox="sports-gallery" href="/img/sports-facility/4.jpeg" data-caption="Sports Facility - View 4">
                <img src="/img/sports-facility/4.jpeg" alt="Sports Facility View 4" loading="lazy">
            </a>

            <a class="masonry-item" data-fancybox="sports-gallery" href="/img/sports-facility/6.jpeg" data-caption="Sports Facility - View 6">
                <img src="/img/sports-facility/6.jpeg" alt="Sports Facility View 6" loading="lazy">
            </a>

            <a class="masonry-item" data-fancybox="sports-gallery" href="/img/sports-facility/7.jpeg" data-caption="Sports Facility - View 7">
                <img src="/img/sports-facility/7.jpeg" alt="Sports Facility View 7" loading="lazy">
            </a>

            <a class="masonry-item" data-fancybox="sports-gallery" href="/img/sports-facility/8.jpeg" data-caption="Sports Facility - View 8">
                <img src="/img/sports-facility/8.jpeg" alt="Sports Facility View 8" loading="lazy">
            </a>

            <a class="masonry-item" data-fancybox="sports-gallery" href="/img/sports-facility/9.jpeg" data-caption="Sports Facility - View 9">
                <img src="/img/sports-facility/9.jpeg" alt="Sports Facility View 9" loading="lazy">
            </a>

            <a class="masonry-item" data-fancybox="sports-gallery" href="/img/sports-facility/10.jpeg" data-caption="Sports Facility - View 10">
                <img src="/img/sports-facility/10.jpeg" alt="Sports Facility View 10" loading="lazy">
            </a>

            <!-- Add more images below as needed -->
            <!-- <a class="masonry-item" data-fancybox="sports-gallery" href="/img/sports-facility/11.jpeg" data-caption="Sports Facility - View 11">
                <img src="/img/sports-facility/11.jpeg" alt="Sports Facility View 11" loading="lazy">
            </a> -->

        </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox='sports-gallery']", {});
</script>

<?php include_once('components/footer.php'); ?>
