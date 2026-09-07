<?php
include_once("components/header_t.php");
echo '<title>About IQAC</title>';
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

        <h2>About IQAC</h2>
        <div>
            <p>The <strong>Internal Quality Assurance Cell (IQAC)</strong> of <strong>Loknete Appasaheb Rajale College
                    of Pharmacy, Adinathnagar</strong>
                was established in accordance with the guidelines of the <strong>National Assessment and Accreditation
                    Council
                    (NAAC). Prof. M. M. Joshi</strong> has been serving as the <strong>IQAC Coordinator</strong> since
                its establishment.</p>
            <p>The IQAC plays a vital role in promoting <strong>quality education, academic excellence, infrastructural
                    development, and continuous institutional improvement.</strong> The IQAC Committee is constituted as
                per NAAC
                guidelines and actively works towards implementing various quality enhancement initiatives.</p>

            <p>Regular IQAC meetings are conducted, and the <strong>proceedings, Action Taken Reports (ATRs), and Annual
                    Quality
                    Assurance Reports (AQARs)</strong> are systematically prepared and maintained.</p>
            <p>The prime objective of IQAC is to develop a system of <strong>conscious, consistent, and catalytic
                    improvement</strong> in
                the overall performance of the institution. It coordinates and monitors quality initiatives aimed at
                achieving <strong>academic excellence, institutional development, and sustained quality
                    enhancement.</strong></p>

            <h3 class="pt-2">Objectives of IQAC</h3>
            <p><strong>The Internal Quality Assurance Cell (IQAC)</strong> aims to promote a culture of<strong> quality,
                    excellence, and
                    continuous improvement</strong> in all areas of institutional functioning. Its major objectives are:
            <p>
            <ul class="pl-4 objectives-iqac">
                <li>To develop and implement <strong>quality benchmarks</strong> for academic and administrative
                    activities. </li>
                <li>To promote continuous improvement in <strong>teaching, learning, evaluation, research, and
                        administration.</strong>
                </li>
                <li>To ensure effective implementation of <strong>Outcome-Based Education (OBE)</strong> and monitor
                    COs, POs, and PSOs.
                </li>
                <li>To encourage <strong>innovative and student-centric teaching-learning practices.</strong> </li>
                <li>To promote <strong>faculty development, research, innovation, and entrepreneurship.</strong> </li>
                <li>To strengthen <strong>industry–institute interaction, internships, and professional development.</strong> </li>
                <li>To collect and analyse <strong>stakeholder feedback</strong> for continuous improvement. </li>
                <li>To promote <strong>extension activities, social responsibility, and environmental sustainability.</strong> </li>
                <li>To ensure compliance with <strong>PCI, NAAC, university, and other regulatory requirements.</strong>
                </li>
                <li>To promote <strong>quality audits, best practices, and institutional innovations.</strong> </li>
                <li>To maintain proper <strong>quality documentation and institutional data.</strong> </li>
                <li>To coordinate the preparation and submission of <strong>AQAR</strong> and support accreditation and
                    quality
                    enhancement activities.</li>
            </ul>
        </div>
        <div>
            <h3 class="mt-5"> <i>Internal Quality Assurance Cell (IQAC) COMPOSITION</i> </h3>

            <div class="table-responsive mt-3">
                <table class="table table-bordered table-striped table-hover iqac-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Affiliation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Dr. S.G. Khanage</td>
                            <td>Chairman</td>
                            <td>Principal</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Mr. Nitin J. Shinde</td>
                            <td>Management Representative</td>
                            <td>Secretary, Shri Dadapatil Rajale Shikan Santha, Adinathanagar</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Dr. A.B. Kataranavare</td>
                            <td>Faculty Member</td>
                            <td>Dept. of Pharmaceutics</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Prof. A.P. Funde</td>
                            <td>Faculty Member</td>
                            <td>Dept. of Pharmaceutical Chemistry</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Prof. R.M. Handal</td>
                            <td>Faculty Member</td>
                            <td>Dept. of Pharmaceutics</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>Prof. V.S. Gavhane</td>
                            <td>Faculty Member</td>
                            <td>Dept. of Quality Assurance</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>Mr. Vikas S. Wagh</td>
                            <td>Administrative Officer</td>
                            <td>Office Superintendent</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>Mr. Rahul Rajale</td>
                            <td>Stakeholder – Employer</td>
                            <td>Member, Shri Dadapatil Rajale Shikan Santha, Adinathanagar</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>Dr. R.T. Gholap</td>
                            <td>Nominated Educationist</td>
                            <td>Shri Dadapatil Rajale Arts &amp; Science College, Adinathanagar</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>Mr. Ambarish B. Mulay</td>
                            <td>Stakeholder – Industry</td>
                            <td>Assistant General Manager, Centaur Pharmaceuticals PVT LTD, Pune</td>
                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>Mr. Sanjay N. Ware</td>
                            <td>Stakeholder – Parent</td>
                            <td>Dhamangaon, Tal Pathardi, Dist Ahilyanagar</td>
                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>Mr. Sangram Rahul Purale</td>
                            <td>Alumnus</td>
                            <td>Loknete Appasaheb Rajale College of Pharmacy, Adinathanagar</td>
                        </tr>
                        <tr>
                            <td>13.</td>
                            <td>Ms. Sanika M. Palve</td>
                            <td>Student Member</td>
                            <td>Second Year B. Pharm.</td>
                        </tr>
                        <tr>
                            <td>14.</td>
                            <td>Prof. M. M. Joshi</td>
                            <td>Coordinator</td>
                            <td>Dept. of Pharmaceutical Chemistry</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- <div>
            <div class="gallery-container">
                <div class="gallery-item">
                    <p class="text-center my-4">
                        <b></b>
                    </p>
                    <a data-fancybox="gallery" href="/img/iqac.jpeg">
                        <img src="/img/iqac.jpeg" class="gallery-img border"
                            alt="<?= htmlspecialchars($item['title']) ?>">
                    </a>
                </div>
            </div>
        </div> -->

    </div>

</section>
<!-- <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox='gallery']", {});
</script> -->
<?php
include_once('components/footer.php');
?>