<?php


/*
|--------------------------------------------------------------------------
| Syllabus Data
|--------------------------------------------------------------------------
*/
$Syllabuses = [
    'd-pharm' => [
        'heading' => 'D.Pharm. Syllabus',
        'items' => [
            [
                'id' => 'd-pharm-first-year',
                'title' => 'First Year',
                'pdfUrl' => '/college-storage/syllabus/d-pharm-first-year.pdf'
            ],
            [
                'id' => 'd-pharm-second-year',
                'title' => 'Second Year',
                'pdfUrl' => '/college-storage/syllabus/d-pharm-second-year.pdf'
            ]
        ]
    ],
    'b-pharm' => [
        'heading' => 'B.Pharm. Syllabus',
        'items' => [
            [
                'id' => 'b-pharm-first-year',
                'title' => 'First Year',
                'pdfUrl' => '/college-storage/syllabus/b-pharm-first-year.pdf'
            ],
            [
                'id' => 'b-pharm-second-year',
                'title' => 'Second Year',
                'pdfUrl' => '/college-storage/syllabus/b-pharm-second-year.pdf'
            ],
            [
                'id' => 'b-pharm-third-year',
                'title' => 'Third Year',
                'pdfUrl' => '/college-storage/syllabus/b-pharm-third-year.pdf'
            ],
            [
                'id' => 'b-pharm-final-year',
                'title' => 'Final Year',
                'pdfUrl' => '/college-storage/syllabus/b-pharm-final-year.pdf'
            ]
        ]
    ]
];

$selectedId = isset($_GET['id']) ? trim($_GET['id']) : '';
$matchedSyllabuses = [];

if ($selectedId !== '') {
    foreach ($Syllabuses as $program => $programData) {
        foreach ($programData['items'] as $item) {
            if ($item['id'] === $selectedId) {
                $matchedSyllabuses[] = $item;
            }
        }
    }
}

$pageHeading = 'Academic Syllabus';
if (!empty($matchedSyllabuses)) {
    $pageHeading = 'Academic Syllabus - ' . $matchedSyllabuses[0]['title'];
}

include_once("components/header_t.php");
echo '<title>' . htmlspecialchars($pageHeading) . '</title>';
include_once("components/header_b.php");

?>

<div class="container py-5">
    <h2 class="text-center mb-5" id="pageTitle">
        <?= htmlspecialchars($pageHeading) ?>
    </h2>
    <div class="row">

        <?php if (!empty($matchedSyllabuses)): ?>
            <div class="col-sm-12">
                <?php foreach ($matchedSyllabuses as $item): ?>
                        <a target="_blank" href="<?= htmlspecialchars($item['pdfUrl']) ?>">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/pdf_icon.png" width="30" alt="PDF Icon" />
                                        <h6 class="ml-2">Syllabus: <?= htmlspecialchars($item['title']) ?></h6>
                                        <i class="fa fa-download ml-auto text-secondary"></i>
                                    </div>
                                </div>                          
                            </div>
                        </a>
                <?php endforeach; ?>
            </div>

        <?php else: ?>
            <div class="col-sm-12">
                <?php foreach ($Syllabuses as $program => $programData): ?>
                    <div class="mb-5">
                        <h4 class="mb-3"><?= htmlspecialchars($programData['heading']) ?></h4>
                        <?php foreach ($programData['items'] as $item): ?>
                            <a href="?id=<?= urlencode($item['id']) ?>">
                                <div class="card mb-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="/img/pdf_icon.png" width="30" alt="PDF Icon" />
                                            <h6 class="ml-2"><?= htmlspecialchars($item['title']) ?></h6>
                                            <i class="fa fa-arrow-right ml-auto text-secondary"></i>
                                        </div>
                                    </div>                          
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox='gallery']", {});
</script>

<?php include_once("components/footer.php"); ?>