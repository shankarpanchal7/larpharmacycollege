<?php


/*
|--------------------------------------------------------------------------
| Timetable Data
|--------------------------------------------------------------------------
*/
$timetables = [
    'D.Pharm' => [
        [
            'id' => 'dpharm-1',
            'heading' => 'D.Pharm (First Year)',
            'title' => '',
            'image' => '/college-storage/academic-timetable/d_pharm/dpharm_first_year.jpg'
        ],
        [
            'id' => 'dpharm-2',
            'heading' => 'D.Pharm (Second Year)',
            'title' => '',
            'image' => '/college-storage/academic-timetable/d_pharm/dpharm_second_year.jpg'
        ],
    ],
    'B.Pharm' => [
        [
            'id' => 'bpharm-1',
            'title' => 'Semester I',
            'heading' => 'B.Pharm First Year',
            'image' => '/college-storage/academic-timetable/b_pharm/b_pharm_sem1.jpg'
        ],
        [
            'id' => 'bpharm-1',
            'heading' => 'B.Pharm First Year',
            'title' => 'Semester II',
            'image' => '/college-storage/academic-timetable/b_pharm/b_pharm_sem2.jpg'
        ],
        [
            'id' => 'bpharm-2',
            'heading' => 'B.Pharm Second Year',
            'title' => 'Semester III',
            'image' => '/college-storage/academic-timetable/b_pharm/b_pharm_sem3.jpg'
        ],
        [
            'id' => 'bpharm-2',
            'heading' => 'B.Pharm Second Year',
            'title' => 'Semester IV',
            'image' => '/college-storage/academic-timetable/b_pharm/b_pharm_sem4.jpg'
        ],
        [
            'id' => 'bpharm-3',
            'heading' => 'B.Pharm Third Year',
            'title' => 'Semester V',
            'image' => '/college-storage/academic-timetable/b_pharm/b_pharm_sem5.jpg'
        ],
        [
            'id' => 'bpharm-3',
            'heading' => 'B.Pharm Third Year',
            'title' => 'Semester VI',
            'image' => '/college-storage/academic-timetable/b_pharm/b_pharm_sem6.jpg'
        ],
        [
            'id' => 'bpharm-4',
            'heading' => 'B.Pharm Fourth Year',
            'title' => 'Semester VII',
            'image' => '/college-storage/academic-timetable/b_pharm/b_pharm_sem7.jpg'
        ],
        [
            'id' => 'bpharm-4',
            'heading' => 'B.Pharm Fourth Year',
            'title' => 'Semester VIII',
            'image' => '/college-storage/academic-timetable/b_pharm/b_pharm_sem8.jpg'
        ],
    ],
];

$selectedId = isset($_GET['id']) ? trim($_GET['id']) : '';
$matchedTimetables = [];

if ($selectedId !== '') {
    foreach ($timetables as $program => $items) {
        foreach ($items as $item) {
            if ($item['id'] === $selectedId) {
                $matchedTimetables[] = $item;
            }
        }
    }
}

$pageHeading = 'Academic Timetable';
if (!empty($matchedTimetables)) {
    $pageHeading = 'Academic Timetable - ' . preg_replace('/\s*-\s*Semester\s*\w+$/i', '', $matchedTimetables[0]['heading']);
}

include_once("components/header_t.php");
echo '<title>' . htmlspecialchars($pageHeading) . '</title>';
include_once("components/header_b.php");

?>

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

<div class="container-fluid py-5">
    <h2 class="text-center mb-5" id="pageTitle">
        <?= htmlspecialchars($pageHeading) ?>
    </h2>

    <?php if (!empty($matchedTimetables)): ?>
        <div class="gallery-container">
            <?php foreach ($matchedTimetables as $item): ?>
                <div class="gallery-item">
                    <p class="text-center my-4">
                        <b><?= htmlspecialchars($item['title']) ?></b>
                    </p>
                    <a data-fancybox="gallery" href="<?= htmlspecialchars($item['image']) ?>">
                        <img
                            src="<?= htmlspecialchars($item['image']) ?>"
                            class="gallery-img border"
                            alt="<?= htmlspecialchars($item['title']) ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="alert alert-warning text-center">
            No timetable found. Use a valid query string like <code>?id=dpharm-1</code> or <code>?id=bpharm-2</code>.
        </div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox='gallery']", {});
</script>

<?php include_once("components/footer.php"); ?>