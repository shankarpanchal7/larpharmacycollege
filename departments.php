<?php
    include_once("components/header_t.php");
        echo '<title>Departments</title>';
    include_once("components/header_b.php"); ?>

<style>
    .equipments-img {
        text-align: center;
        text-align: justify;

    }

    .lists-ul {
        padding-left: 25px;
    }

    div#equipments-list img {
        width: 73%;
    }

    #dpt-title {
        text-transform: capitalize;
    }

    #image-div img {
        border-radius: 1%;
    }
</style>

<section id="js--active-sticky">
    <div class="container">
        <h2 class="page-heading">Departments</h2>
    </div>
    <div class="container">
        <H3 style="color: #5c5c5c;">Departments of</H3>
        <div class="departments">
            <button data="pharmaceutical-analysis" class="btn dept-btn active">Pharmaceutics</button>
            <button data="pharmaceutical-chemistry" class="btn dept-btn">Pharmaceutical Chemistry</button>
            <button data="pharmacognosy" class="btn dept-btn">Pharmacognosy</button>
            <button data="pharmacology" class="btn dept-btn">Pharmacology</button>
            <!-- <button data="laboratories" class="btn dept-btn">Laboratories</button> -->
            <!-- <button data="labAndNetwork" class="btn dept-btn">Library & Networking</button> -->
        </div>
    </div>
    <div class="container" style="margin-top: 50px">

        <h3 id="dpt-title"></h3>

        <div style="margin-top: 15px">
            <!-- <p class="text-bold">Vision:</p> -->
            <p id="dpt-description"></p>
            <div id="image-div">

            </div>
        </div>


    </div>
</section>

<?php
  include_once('components/footer.php');
?>

<script>
    $(document).ready(function () {
        var baseUrl = "/img/departments/"

        var pharmaceuticalAnalysis = {
            title: "Department of Pharmaceutics",
            description: `<p>Pharmaceutics is a vital branch of the pharmacy field that reflects the core essence of the pharmacy profession. It primarily focuses on the design, formulation, and development of therapeutically effective chemical entities into suitable drug delivery systems such as tablets, capsules, syrups, and other dosage forms. The study of pharmaceutics requires the integration of physical, chemical, and biological principles as they apply to the various components of drug delivery systems.</p>
<p>In the current scenario, the discovery of numerous new drug entities has led to significant advancements in drug delivery systems.
Modern production techniques, and state-of-the-art machinery. These developments ensure the manufacturing of high-quality pharmaceutical products with improved efficacy and safety.</p>`,
            departments: [
                {
                    title: "",
                    fileName: ""
                },

            ]
        }

        var pharmaceuticalChemistry = {
            title: "Department of Pharmaceutical Chemistry",
            description: `<p>Pharmaceutical chemistry is an interdisciplinary science that has experienced remarkable growth over the past decade. Traditionally regarded as a branch of organic chemistry, it has now evolved into a highly complex and advanced field. It involves various aspects such as the synthesis, isolation, purification, and characterization of organic compounds intended for use in the treatment and cure of diseases. Additionally, it establishes a crucial relationship between chemical structure and biological activity.</p>

<p>Medicinal chemists play a vital role in the design and development of selective, potent, and non-toxic new chemical entities with desirable pharmacokinetic properties. The design of improved molecules remains a central focus in medicinal chemistry. These professionals are deeply involved in pharmaceutical research, where they synthesize, purify, and analyze novel bioactive compounds.</p>

<p>While identifying organic lead compounds is essential, the real challenge lies in optimizing their structures to enhance biological activity. This involves modifying specific positions on the molecular framework to achieve better therapeutic outcomes. Modern medicinal chemistry utilizes advanced tools such as drug design software, high-resolution spectroscopy techniques, and high-throughput screening methods.</p>

<p>The postgraduate chemistry department is equipped with two well-established laboratories for synthetic and analytical work, featuring sophisticated instruments and software to support advanced research activities.</p>`,
            departments: [
                {
                    title: "",
                    fileName: ""
                }
            ]
        }

        var pharmaceutics = {
            title: "Department of Pharmaceutics",
            vision: "The Department of Pharmaceutics is committed to create highly trained, versatile, ethical professionals needed for providing quality medicines for health care services with technological innovations in drug product development.",
            mission: "To get recognized as a top-tier education and research center in pharmaceutics through innovative approaches in teaching, training, and research by disseminating new knowledge by conducting cutting edge research in the formulation sciences.",
            Objectives: `
                    <ul class="lists-ul">
                        <li>Understand the basics of different dosage form, pharmaceutical incompatibilities and pharmaceutical calculations.</li>
                        <li>Understand the professional way of handling the prescription.</li>
                        <li>Understand various physicochemical properties of drug molecules in the designing the dosage form and manufacturing techniques.</li>
                        <li>Know the principle of chemical kinetics and to use them for stability testing and determination of expiry date of formulations.</li>
                        <li>Demonstrate use of physicochemical properties in the formulation development and evaluation of dosage form.</li>
                        <li>Know various considerations in development of pharmaceutical dosage form.</li>
                        <li>Understanding the importance of immobilized enzymes in pharmaceutical industries.</li>
                        <li>Genetic engineering applications in relation to production of pharmaceuticals.</li>
                    </ul>
                `,
            departments: [
                {
                    title: "Bulk Density Apparatus",
                    fileName: "pharmaceutics1.png"
                },
                {
                    title: "Digital Melting & Boiling Point apparatus",
                    fileName: "pharmaceutics2.png"
                },
                {
                    title: "Dissolution Apparatus",
                    fileName: "pharmaceutics3.png"
                },
                {
                    title: "Hot Air Oven",
                    fileName: "pharmaceutics4.png"
                },
                {
                    title: "Incubator",
                    fileName: "pharmaceutics5.png"
                },
                {
                    title: "Magnetic stirrer",
                    fileName: "pharmaceutics6.png"
                },
                {
                    title: "Overhead stirrer",
                    fileName: "pharmaceutics7.png"
                },
                {
                    title: "Sieve shaker",
                    fileName: "pharmaceutics8.png"
                },
                {
                    title: "Single Punch tablet Press",
                    fileName: "pharmaceutics9.png"
                }
            ]
        }

        var pharmacognosy = {
            title: "Department of Pharmacognosy",
            description: `<p>Pharmacognosy is an applied branch of science that deals with the detailed study of crude drugs obtained from natural sources such as plants, animals, and minerals. The department is supported by a well-equipped laboratory covering an area of approximately 82 m², designed to meet the requirements of various practical sessions.</p>

<p>The Department of Pharmacognosy and Phytochemistry focuses on strengthening fundamental concepts such as the identification and authentication of plants belonging to different families. At initial level, emphasis is placed on the microscopical evaluation of crude drugs. In the third year, greater importance is given to the identification of crude drugs through morphological and microscopical analysis.</p>

<p>At the final-year level, students undertake various projects to explore recent advances in pharmacognosy and phytochemistry, with a strong focus on industrial applications. The curriculum includes the detailed study of cultivation, collection, and processing of medicinal plants. Students also gain hands-on experience in the extraction of phytoconstituents from crude drugs, followed by their purification and identification using techniques such as Thin Layer Chromatography (TLC).</p>

<p>The pharmacognosy laboratory is enriched with approximately 40 educational charts, around 50 different crude drug samples, dosage forms from alternative systems of medicine, and student-prepared models of calcium oxalate crystals.</p>

<p>Additionally, the department maintains a well-developed medicinal plant garden spread over approximately 400 m², housing around 100 species of medicinal plants from various families, along with about 50 species of ornamental plants.</p>`,
            departments: [
                {
                    title: "",
                    fileName: ""
                }
            ]
        }

        var pharmacology = {
            title: "Department of Pharmacology",
            description: `<p>Pharmacology is the science which deals with the study of drugs. The word 'Pharmacolgy' derives from the Greek words Pharmakon (a drug or poison) and logos (discourse). It broadly covers the information about the history, source, physiochemical properties, physiological actions, mechanism of action, pharmacokinetics, therapeutic uses and toxicity profile of the drug.
The main aims of research in the department of pharmacology are to find out a therapeutic agent suitable for human use, study the toxicity of a drug and to study the mechanism and site of action of drugs</p>
<p>The major research interests of department include:</p>
<ul class="lists-ul">
    <li>Screening of medicinal plants for pharmacological action.</li>
    <li>Development of stable herbal formulation/Ayurvedic preparation suitable for human use.</li>
    <li>Study of toxicity profile of medicinal plants and chemicals.</li>
</ul>
`,
            departments: [
                {
                    title: "",
                    fileName: "pharmacology.png"
                },
            ]
        }

        var LABORATORIES = {
            title: "Laboratories ",
            description: `The colleges have 09 well designed spacious laboratories with ultramodern facilities imparting quality education and training in various subjects of Pharmacy. The laboratories are well planned as per norms and standards of statutory bodies of country`,
            departments: []
        }


        var networkAndLab = {
            title: 'Library & Networking',
            description: "Both the colleges have rich collection of latest editions of textbooks, reference books, allied books, periodicals and hardbound as well as e-journals of national and international repute.",
            departments: [
                {
                    title: "",
                    fileName: "library1.png"
                },
                {
                    title: "",
                    fileName: "library2.png"
                },
            ]
        }
        showFacultyListDepartmentWise("pharmaceutical-analysis")

        function showFacultyListDepartmentWise(department) {
            switch (department) {
                case 'pharmaceutical-analysis':
                    renderHtml(pharmaceuticalAnalysis)
                    break;
                case 'pharmaceutical-chemistry':
                    renderHtml(pharmaceuticalChemistry)
                    break;
                case 'pharmacognosy':
                    renderHtml(pharmacognosy)
                    break;
                case 'pharmacology':
                    renderHtml(pharmacology)
                    break;
                case 'laboratories':
                    renderHtml(LABORATORIES)
                    break;
                case 'labAndNetwork':
                    renderHtml(networkAndLab)
                    break;

                default:
                    break;
            }
        }

        function renderHtml(departmentObj = {}) {
            var renderHtmlStr = ''
            console.log("departmentObj ::", departmentObj);

            $("#dpt-title").html(departmentObj.title)
            $("#dpt-description").html(departmentObj.description)


            if (departmentObj.departments == 0) renderHtmlStr = "<p></p>"

            var tempArr = departmentObj.departments
            for (let dIdx = 0; dIdx < tempArr.length; dIdx++) {
                const aDpt = tempArr[dIdx];
                var url = baseUrl + aDpt.fileName
                renderHtmlStr += `
                    <div class="equipments-img">
                        <img src="${url}" alt="${aDpt.fileName}">
                        <p class="text-bold">${aDpt.title}</p>
                    </div>
                `

            }

            $("#image-div").html(renderHtmlStr)
        }

        $(".dept-btn").click(function () {
            let department = $(this).attr('data')

            $('.dept-btn.active').removeClass('active');
            $(this).addClass('active');
            showFacultyListDepartmentWise(department)
        })



    })
</script>