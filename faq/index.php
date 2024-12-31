<?php
// Read JSON file
$jsonString = file_get_contents('../include/data.json');
$data = json_decode($jsonString, true);

// Check if JSON decoding was successful
if ($data === null) {
    die("Error decoding JSON.");
}

// Extract card data
$cardData = $data['FAQ'];

// Sort the filtered data
usort($cardData, function ($a, $b) {
    $dateA = new DateTime($a['Date']);
    $dateB = new DateTime($b['Date']);
    return $dateB <=> $dateA;
});
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Oxmaint Community FAQ section provides answers to common questions and detailed support for maintenance management and equipment lifecycle. This resource helps users troubleshoot issues, understand best practices, and make the most of Oxmaint's services. It aims to assist with efficient problem-solving and enhance user experience in managing maintenance tasks.">
    <meta name="keywords" content="FAQ, maintenance management, equipment lifecycle, common questions, support, troubleshooting">
    <meta name="author" content="oxmaint">
    <link rel="canonical" href="https://community.oxmaint.com/faq">
    <title>Oxmaint Community FAQ</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6M0T9NLP4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-Y6M0T9NLP4');
    </script>

</head>

<body>
    <div class="content-wrapper">
        <?php include "../include/header.php" ?>
        <!-- /header -->

        <section class="wrapper">
            <div class="container mt-8 py-4 py-md-6">
                <div class="row">
                    <div class="col-12 mb-5 d-lg-flex justify-content-between">
                        <div class="col-lg-6">
                            <h1 class="display-4 text-left">Frequently Asked Questions</h1>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group mb-3">
                                <input type="text" id="searchInput" class="form-control border" placeholder="Search FAQs..">
                                <button class="btn btn-primary" id="searchButton">Search</button>
                            </div>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div id="cardContainer" class="row">
                    <?php foreach ($cardData as $data): ?>
                        <div id="faqs" class="card mb-2 border bg-soft-primary lift">
                            <a href="<?php echo htmlspecialchars($data['URL']); ?>">
                                <div class="card-body d-flex flex-xl-row flex-column justify-content-between align-items-xl-center p-2">
                                    <h4 class="text-primary"><?php echo htmlspecialchars($data['Question']); ?></h4>
                                    <a href="<?php echo htmlspecialchars($data['URL']); ?>" class="more hover link-yellow">Learn More</a>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- /.row -->
                <div id="pagination-div" class="justify-content-between align-items-baseline mt-5" style="display: flex;">
                    <div id="pagination" class="pagination-Container d-flex justify-content-between">
                        <button class="btn btn-primary rounded p-1 me-4" type="button" value="Previous" id="preBtn"><a class="text-white px-2"
                                href="#">Previous</a></button>
                        <button class="btn btn-primary rounded p-1" type="button" value="Next" id="nextBtn"><a class="text-white px-2"
                                href="#">Next</a></button>
                    </div>
                    <h2 class="text-primary">Total FAQs: <span class="text-primary" id="pagination-text"></span></h2>
                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>

    <?php include "../include/footer.php" ?>
    <!-- /footer -->

    <script>
        function filterCards(keyword) {
            keyword = keyword.toLowerCase();
            let filteredItems = items.filter(item => {
                const question = item.querySelector('h4').textContent.toLowerCase();
                return question.includes(keyword);
            });

            if (keyword) {
                document.getElementById('pagination-div').style.display = 'none';
                itemsContainer.innerHTML = "";
                filteredItems.forEach((item) => {
                    itemsContainer.appendChild(item);
                });
            } else {
                document.getElementById('pagination-div').style.display = 'flex';
                paginate(items, itemsPerPage);
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', () => {
                const keyword = searchInput.value.trim();
                filterCards(keyword);
            });
        });
    </script>
    <script src="./pagination.js"></script>

</body>

</html>