<?php


/*
|--------------------------------------------------------------------------
| Timetable Data
|--------------------------------------------------------------------------
*/
$Calendars = [
    'msbte' => [
        [
            'id' => 'msbte-2023-2024',
            'heading' => 'MSBTE (2023-24)',
            'title' => 'Diploma Pharmacy 2023-24',
            'pdfUrl' => '/college-storage/academic-calendar/Academic calendar 2023-24PCl approved diploma pharmacy.pdf'
        ],
        [
            'id' => 'msbte-2024-2025',
            'heading' => 'MSBTE (2024-25)',
            'title' => 'Diploma 2024-25 (1st & 2nd Year v2)',
            'pdfUrl' => '/college-storage/academic-calendar/Academic calendar 2024-25 diploma 1st and 2nd year(2).pdf'
        ],
        [
            'id' => 'msbte-2025-2026',
            'heading' => 'MSBTE (2025-26)',
            'title' => 'Diploma 2024-25 (1st & 2nd Year)',
            'pdfUrl' => '/college-storage/academic-calendar/Academic calendar 2024-25 Diploma 1st and 2nd year.pdf'
        ]
    ],
    'dbatu' => [
        [
            'id' => 'dbatu-2023-2024',
            'heading' => 'DBATU (2023-24)',
            'title' => 'B. Pharm 2023-24 (Even Semesters)',
            'pdfUrl' => '/college-storage/academic-calendar/Academic calendar 2023-24 B pharm Sem- II, IV, VI, VIII.pdf'
        ],
                [
            'id' => 'dbatu-2023-2024',
            'heading' => 'DBATU (2023-24)',
            'title' => ' B. Pharm 2023-24 (1st & 2nd Year)',
            'pdfUrl' => '/college-storage/academic-calendar/Academic calendar 2023-24 B. pharm F.Y And S. Y.pdf'
        ],
        [
            'id' => 'dbatu-2024-2025',
            'heading' => 'DBATU (2024-25)',
            'title' => '1st Year Calendar 2024-25',
            'pdfUrl' => '/college-storage/academic-calendar/Academic calendar 2024-25 ( F.Y).pdf'
        ],
                [
            'id' => 'dbatu-2024-2025',
            'heading' => 'DBATU (2024-25)',
            'title' => 'B. Pharm 2024-25 (2nd to 4th Year)',
            'pdfUrl' => '/college-storage/academic-calendar/Academic calendar 2024-25 B. Pharm S.Y T.Y And Final year.pdf'
        ],
                        [
            'id' => 'dbatu-2024-2025',
            'heading' => 'DBATU (2024-25)',
            'title' => 'B. Pharm 2024-25 (Semester I)',
            'pdfUrl' => '/college-storage/academic-calendar/Academic calendar 2024-25 B. Pharm Sem -I.pdf'
        ],
        [
            'id' => 'dbatu-2025-2026',
            'heading' => 'DBATU (2025-26)',
            'title' => 'B. Pharm (1st, 3rd & Final Year)',
            'pdfUrl' => '/college-storage/academic-calendar/Academic calendar B. Pharm First.Third and Final year.pdf'
        ]
    ]
];

$selectedId = isset($_GET['id']) ? trim($_GET['id']) : '';
$matchedCalendars = [];

if ($selectedId !== '') {
    foreach ($Calendars as $program => $items) {
        foreach ($items as $item) {
            if ($item['id'] === $selectedId) {
                $matchedCalendars[] = $item;
            }
        }
    }
}

$pageHeading = 'Academic Calendar';
if (!empty($matchedCalendars)) {
    $pageHeading = 'Academic Calendar - ' . preg_replace('/\s*-\s*Semester\s*\w+$/i', '', $matchedCalendars[0]['heading']);
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

        <?php if (!empty($matchedCalendars)): ?>
            <div class="col-sm-12">
                <?php foreach ($matchedCalendars as $item): ?>
                        <a target="_blank" href="<?= htmlspecialchars($item['pdfUrl']) ?>">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <img src="/img/pdf_icon.png" width="30" alt="PDF Icon" />
                                        <h6 class="ml-2">Academic Calendar: <?= htmlspecialchars($item['title']) ?></h6>
                                        <i class="fa fa-download ml-auto text-secondary"></i>
                                    </div>
                                </div>                          
                            </div>
                        </a>
                <?php endforeach; ?>
            </div>

        <?php else: ?>
            <div class="alert alert-warning text-center">
                No calendar found.
            </div>
        <?php endif; ?>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox='gallery']", {});
</script>

<?php include_once("components/footer.php"); ?>