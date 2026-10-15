<?php include_once("components/header_t.php"); echo '<title>News Gallery - LARCOP</title>'; include_once("components/header_b.php"); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

<style>
    /* ── News Gallery page styles ── */
    .news-gallery-grid {
        column-count: 4;
        column-gap: 12px;
        max-width: 1100px;
        margin: 0 auto;
    }

    .news-gallery-item {
        break-inside: avoid;
        margin-bottom: 12px;
        display: block;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10);
        transition: box-shadow 0.3s ease, transform 0.25s ease;
        background: #eeeeee;
    }

    .news-gallery-item:hover {
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.20);
        transform: translateY(-3px);
    }

    .news-gallery-item img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 10px;
        transition: transform 0.35s ease;
    }

    .news-gallery-item:hover img {
        transform: scale(1.04);
    }

    /* zoom icon overlay on hover */
    .news-gallery-item::after {
        content: '\f00e';
        font-family: FontAwesome;
        font-size: 1.5rem;
        color: #fff;
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0);
        border-radius: 10px;
        transition: background 0.3s ease;
        pointer-events: none;
    }

    .news-gallery-item:hover::after {
        background: rgba(0, 0, 0, 0.28);
    }

    /* Responsive breakpoints */
    @media (max-width: 1152px) {
        .news-gallery-grid { column-count: 3; }
    }

    @media (max-width: 768px) {
        .news-gallery-grid { column-count: 2; }
    }

    @media (max-width: 500px) {
        .news-gallery-grid { column-count: 1; }
    }
</style>

<section id="js--active-sticky">
    <div class="container">

        <h2>News Gallery</h2>

        <div class="mb-4">
            <p>
                A glimpse of events, activities, and milestones at
                <strong>Loknete Appasaheb Rajale College of Pharmacy</strong>.
                Browse through our latest news photos capturing the vibrant campus life.
            </p>
        </div>

        <h4 class="mb-3">Photo Gallery</h4>

        <div class="news-gallery-grid">
            <?php
                // Auto-load all images from the news-gallery folder
                $gallery_dir  = __DIR__ . '/college-storage/news-gallery/';
                $web_base     = '/college-storage/news-gallery/';
                $allowed_ext  = ['jpg', 'jpeg', 'png', 'webp', 'gif'];

                $files = glob($gallery_dir . '*');
                if ($files) {
                    // Natural sort so "1 (2)" comes before "1 (10)" etc.
                    natsort($files);
                    $index = 1;
                    foreach ($files as $file_path) {
                        $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
                        if (!in_array($ext, $allowed_ext)) continue;

                        $filename   = basename($file_path);
                        $web_path   = $web_base . rawurlencode($filename);
                        $caption    = 'News Gallery – Photo ' . $index;
                        $alt        = htmlspecialchars('LARCOP News Gallery Photo ' . $index, ENT_QUOTES);
                        echo '            <a class="news-gallery-item" data-fancybox="news-gallery" href="' . $web_path . '" data-caption="' . htmlspecialchars($caption, ENT_QUOTES) . '">' . "\n";
                        echo '                <img src="' . $web_path . '" alt="' . $alt . '" loading="lazy">' . "\n";
                        echo '            </a>' . "\n";
                        $index++;
                    }
                } else {
                    echo '<p class="text-muted">No images found.</p>';
                }
            ?>
        </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox='news-gallery']", {
        Toolbar: {
            display: {
                left:  ["infobar"],
                right: ["slideshow", "fullscreen", "thumbs", "close"]
            }
        }
    });
</script>

<?php include_once('components/footer.php'); ?>
