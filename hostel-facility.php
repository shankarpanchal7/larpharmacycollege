<?php include_once("components/header_t.php"); echo '<title>Hostel Facility - LARCOP</title>'; include_once("components/header_b.php"); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

<style>
    .hostel-gallery-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        max-width: 960px;
        margin: 0 auto;
    }

    .hostel-gallery-grid a {
        display: block;
        overflow: hidden;
        border-radius: 8px;
        border: 1px solid #dee2e6;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        transition: box-shadow 0.3s ease;
    }

    .hostel-gallery-grid a:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .hostel-gallery-grid img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
    }

    .hostel-gallery-grid a:hover img {
        transform: scale(1.04);
    }

    @media (max-width: 600px) {
        .hostel-gallery-grid {
            grid-template-columns: 1fr;
        }

        .hostel-gallery-grid img {
            height: 220px;
        }
    }
</style>

<section id="js--active-sticky">
    <div class="container">

        <h2>Hostel Facility</h2>

        <div class="mb-4">
        </div>

        <div class="hostel-gallery-grid">
            <a data-fancybox="hostel-gallery" href="/img/hostel-facility/1.jpeg" data-caption="Hostel Facility - View 1">
                <img src="/img/hostel-facility/1.jpeg" alt="Hostel Facility View 1">
            </a>
            <a data-fancybox="hostel-gallery" href="/img/hostel-facility/2.jpeg" data-caption="Hostel Facility - View 2">
                <img src="/img/hostel-facility/2.jpeg" alt="Hostel Facility View 2">
            </a>
            <a data-fancybox="hostel-gallery" href="/img/hostel-facility/3.jpeg" data-caption="Hostel Facility - View 3">
                <img src="/img/hostel-facility/3.jpeg" alt="Hostel Facility View 3">
            </a>
            <a data-fancybox="hostel-gallery" href="/img/hostel-facility/4.jpeg" data-caption="Hostel Facility - View 4">
                <img src="/img/hostel-facility/4.jpeg" alt="Hostel Facility View 4">
            </a>
        </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox='hostel-gallery']", {});
</script>

<?php include_once('components/footer.php'); ?>
