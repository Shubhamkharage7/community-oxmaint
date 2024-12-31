<?php
// Read JSON file
$jsonString = file_get_contents('../include/data.json');
$data = json_decode($jsonString, true);

// Check if JSON decoding was successful
if ($data === null) {
    die("Error decoding JSON.");
}

// Extract card data
$cardData = $data['Blog'];

$categories = array_unique(array_column($cardData, 'Category'));

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
    <meta name="description" content="The Oxmaint Community Blog offers articles on the latest trends, best practices, and updates in maintenance management and equipment lifecycle. It features expert insights, practical tips, and industry news to help you optimize your maintenance operations and stay ahead of the curve. Stay informed and enhance your strategies with valuable content from the Oxmaint community.">
    <meta name="keywords" content="maintenance management, industry news, best practices, tips, updates, insights">
    <meta name="author" content="oxmaint">
    <link rel="canonical" href="https://community.oxmaint.com/blog">
    <title>Oxmaint Community Blog</title>
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
                <div class="row text-center">
                    <h2>Blogs</h2>
                    <h1 class="display-3 text-primary">The latest insights from our team</h1>
                    <h3>Industry news, interviews, and resources.</h3>
                </div>
                <div class="row">
                    <p class="mb-0 mt-5 text-primary">Filter your results</p>
                    <div class="col-12 mb-5 d-md-flex justify-content-between">
                        <div class="col-md-4 mb-3">
                            <select class='form-select text-dark border' id='category' name='category' onchange='filterCardsByCategory()'>
                                <option value=''>All Categories</option>
                                <?php
                                $categoriesArray = array();
                                foreach ($categories as $category) {
                                    $categoriesArray = array_merge($categoriesArray, explode(',', $category));
                                }
                                $uniqueCategories = array_unique($categoriesArray);
                                foreach ($uniqueCategories as $category): ?>
                                    <option value="<?php echo htmlspecialchars($category); ?>"><?php echo htmlspecialchars($category); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-5">
                            <form class="search-form">
                                <div class="form-floating mb-0">
                                    <input id="searchInput" type="text" class="form-control border" placeholder="Search">
                                    <label for="search-form">Search Blogs..</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div id="cardContainer" class="row">
                    <?php foreach ($cardData as $data): ?>
                        <div id="blogs" class="col-md-6 col-lg-3">
                            <div class="card bg-soft-primary border mb-5 lift">
                                <a href="<?php echo htmlspecialchars($data['URL']); ?>">
                                    <div class="card-body p-3">
                                        <p><b><?php echo htmlspecialchars($data['Category']); ?></b></p>
                                        <h4 class=""><?php echo htmlspecialchars($data['Title']); ?></h4>
                                        <a href="<?php echo htmlspecialchars($data['URL']); ?>" class="more hover link-yellow">Learn More</a>
                                    </div>
                                </a>
                            </div>
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
                    <h2 class="text-primary">Total Blogs: <span class="text-primary" id="pagination-text"></span></h2>
                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>

    <?php include "../include/footer.php" ?>
    <!-- /footer -->

    <script>
        function filterCardsByCategory() {
            const selectedCategory = document.getElementById('category').value.toLowerCase();
            if (selectedCategory === '') {
                filteredItems = items;
                document.getElementById('pagination-div').style.display = 'flex';
                paginate(filteredItems, itemsPerPage);
            } else {
                filteredItems = items.filter(item => {
                    const categories = item.querySelector('p>b').textContent.toLowerCase().split(',');
                    return categories.some(category => category === selectedCategory);
                });
                document.getElementById('pagination-div').style.display = 'none';

                // Clear the card container and add the filtered items
                itemsContainer.innerHTML = "";
                filteredItems.forEach((item) => {
                    itemsContainer.appendChild(item);
                });
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const categorySelect = document.getElementById('category');
            categorySelect.addEventListener('change', filterCardsByCategory);

        });
        
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