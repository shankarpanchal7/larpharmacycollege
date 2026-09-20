<?php
include_once("components/header_t.php");
echo '<title>NSS</title>';
include_once("components/header_b.php"); ?>

<style>
    .objectives-iqac li {
        padding-top: 8px;
    }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

<style>
    .gallery-container {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        justify-content: center;
    }



    .gallery-img {
        width: 100%;
        object-fit: cover;
        border-radius: 10px;
        transition: .3s;
    }

    .gallery-img:hover {
        transform: scale(1.02);
    }

    .alert.alert-warning {
        max-width: 800px;
        margin: 0 auto;
    }

    @media (max-width: 768px) {
        .gallery-img {
            height: auto;
        }
    }
</style>

<section id="js--active-sticky">

    <div class="container">

        <h2>NSS</h2>

        <div class="mb-5">
            <h3 class="mb-4"> <strong> - World Youth Day 2026.</strong></h3>
            <hr>
            <div class="gallery-container">
                <div class="gallery-item">
                    <a data-fancybox="gallery" href="/img/nss/World Youth Day 2026/1.jpeg">
                        <img src="/img/nss/World Youth Day 2026/1.jpeg" class="gallery-img border"
                            alt="<?= htmlspecialchars($item['title']) ?>">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fancybox="gallery" href="/img/nss/World Youth Day 2026/2.jpeg">
                        <img src="/img/nss/World Youth Day 2026/2.jpeg" class="gallery-img border"
                            alt="<?= htmlspecialchars($item['title']) ?>">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fancybox="gallery" href="/img/nss/World Youth Day 2026/3.jpeg">
                        <img src="/img/nss/World Youth Day 2026/3.jpeg" class="gallery-img border"
                            alt="<?= htmlspecialchars($item['title']) ?>">
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-5">
             <h3 class="mb-4">
                <strong>- Health Check Up Camp.</strong>
                <hr>
            </h3>
             <div class="gallery-container">
                <div class="gallery-item">
                    <a data-fancybox="gallery" href="/img/nss/Health Check Up Camp/1.jpeg">
                        <img src="/img/nss/Health Check Up Camp/1.jpeg" class="gallery-img border"
                            alt="<?= htmlspecialchars($item['title']) ?>">
                    </a>
                </div>
            </div>
        </div>

    </div>

</section>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox='gallery']", {});
</script>
<?php
include_once('components/footer.php');
?>