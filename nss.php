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

    .gallery-item {
        width: min(450px, 100%);
    }

    .gallery-img {
        width: 100%;
        height: 700px;
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
        <div>
            <div class="gallery-container">
                <div class="gallery-item">
                    <a data-fancybox="gallery" href="/img/iqac.jpeg">
                        <img src="/img/iqac.jpeg" class="gallery-img border"
                            alt="<?= htmlspecialchars($item['title']) ?>">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fancybox="gallery" href="/img/iqac.jpeg">
                        <img src="/img/iqac.jpeg" class="gallery-img border"
                            alt="<?= htmlspecialchars($item['title']) ?>">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fancybox="gallery" href="/img/iqac.jpeg">
                        <img src="/img/iqac.jpeg" class="gallery-img border"
                            alt="<?= htmlspecialchars($item['title']) ?>">
                    </a>
                </div>
                <div class="gallery-item">
                    <a data-fancybox="gallery" href="/img/iqac.jpeg">
                        <img src="/img/iqac.jpeg" class="gallery-img border"
                            alt="<?= htmlspecialchars($item['title']) ?>">
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div class="gallery-container">
                <div class="gallery-item">
                    <a data-fancybox="gallery" href="/img/iqac.jpeg">
                        <img src="/img/iqac.jpeg" class="gallery-img border"
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