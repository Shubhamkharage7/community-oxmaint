<?php
// Read JSON file
$jsonString = file_get_contents('../include/data.json');
$data = json_decode($jsonString, true);

// Check if JSON decoding was successful
if ($data === null) {
    die("Error decoding JSON.");
}

// Extract card data
$cardData = $data['Thread'] ?? []; // Use empty array if 'Thread' key is missing

// Extract categories data with check for 'equipment_type'
$categories = array_unique(array_column($cardData, 'equipment_type'));

// Sort the filtered data
usort($cardData, function ($a, $b) {
    $dateA = new DateTime($a['post_date']);
    $dateB = new DateTime($b['post_date']);
    return $dateB <=> $dateA;
});

// Define the PHP truncateText function
function truncateText($text, $maxLength)
{
    if (strlen($text) <= $maxLength)
        return $text;
    return substr($text, 0, $maxLength) . '...';
}

// Fetch the first 300 threads
$initialThreads = array_slice($cardData, 0, 2535);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Explore the latest discussion thread on oxmaint's. Join the conversation, share insights, and learn valuable tips on maintaining commercial vehicles and ensuring safety compliance.">
    <meta name="keywords" content="oxmaint, truck maintenance, vehicle safety, commercial vehicles, vehicle inspection tips">
    <meta name="author" content="oxmaint">
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/">
    <title>Oxmaint Community Forum | Discussion Thread</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XPHFYCP1NW"></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-XPHFYCP1NW'); </script>

    <style>
        .suggestion-box {
            position: absolute;
            background: white;
            z-index: 1000;
            width: 100%;
            max-height: 200px;
            overflow-y: auto;
        }

        .suggestion-item {
            display: block;
            padding: 0 0 2px 5px;
            cursor: pointer;
            text-decoration: none;
            color: black;
        }

        .suggestion-item:hover {
            color: #747ed1;
            background: #f0f0f0;
        }
    </style>
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" defer></script>
<link rel="stylesheet" href="./../assets/css/home.css"/>
</head>

<body>
    <div class="content-wrapper">
        <?php include "../include/header.php"; ?>
        <!-- /header -->

        <section class="wrapper">
            <div class="container mt-8 py-4 py-md-6">
                <h1 class="display-4 text-center">Oxmaint Community</h1>
                <div class="row">
                    <p class="mb-0 mt-5 text-primary">Filter your results</p>
                    <div class="col-12 mb-5 d-lg-flex justify-content-between">
                        <div class="col-md-3 mb-3">
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
                                    <label for="searchInput">Search Threads..</label>
                                </div>
                                <div id="suggestionBox" class="suggestion-box card" style="display: none;"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="cardContainer" class="row p-2">
                    <?php if (empty($initialThreads)): ?>
                        <p class="text-center">No threads available.</p>
                    <?php else: ?>
                        <?php foreach ($initialThreads as $item): ?>
                            <div class="card border mb-3 lift" data-category="<?php echo htmlspecialchars($item['equipment_type']); ?>">
                                <div class="card-body p-2">
                                    <a href="<?php echo htmlspecialchars($item['page_name']); ?>">
                                        <p class="d-none"><b><?php echo htmlspecialchars($item['equipment_type']); ?></b></p>
                                        <h4 class="text-primary"><?php echo htmlspecialchars($item['title']); ?></h4>
                                        <p class="text-muted"><?php echo htmlspecialchars(truncateText($item['content'], 150)); ?></p>
                                    </a>
                                    <div class="post-footer d-flex flex-column flex-md-row justify-content-between">
                                        <ul class="post-meta fs-15 mb-0">
                                            <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By
                                                        <?php echo htmlspecialchars($item['user_name']); ?></span></a></li>
                                            <li class="post-comments"><i
                                                    class="uil uil-comment-alt-dots"></i><span><?php echo htmlspecialchars($item['replies_count']); ?></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <div id="pagination-div" class="justify-content-between align-items-baseline mt-5" style="display: flex;">
                    <div id="pagination" class="pagination-Container d-flex justify-content-between">
                        <button class="btn btn-primary rounded p-1 me-4" type="button" value="Previous" id="preBtn"><a class="text-white px-2"
                                href="#">Previous</a></button>
                        <button class="btn btn-primary rounded p-1" type="button" value="Next" id="nextBtn"><a class="text-white px-2"
                                href="#">Next</a></button>
                    </div>
                    <h2 class="text-primary">Total Threads: <span class="text-primary" id="pagination-text"><?php echo count($cardData); ?></span></h2>
                </div>
            </div>
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->

    <?php include "../include/footer.php"; ?>
    <!-- /footer -->

    <script>
        // Global variable to store all threads data
        let allThreads = <?php echo json_encode($cardData); ?>;
        let filteredThreads = allThreads;
        let currentPage = 1; // Track the current page globally
        const itemsPerPage = 30;

        // Define the truncateText function in JavaScript
        function truncateText(text, maxLength) {
            if (text.length <= maxLength) return text;
            return text.substring(0, maxLength) + '...';
        }

        // Define the loadPage function
        function loadPage(page) {
            const totalPages = Math.ceil(filteredThreads.length / itemsPerPage);
            if (page < 1 || page > totalPages) return;

            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = Math.min(startIndex + itemsPerPage, filteredThreads.length);
            const pageData = filteredThreads.slice(startIndex, endIndex);
            updateCardContainer(pageData);
            updatePaginationText(startIndex + 1, endIndex, filteredThreads.length);
            togglePaginationButtons(page, totalPages);
            currentPage = page; // Update the current page
        }

        // Define the updateCardContainer function
        function updateCardContainer(data) {
            const cardContainer = document.getElementById('cardContainer');
            cardContainer.innerHTML = '';
            if (data.length === 0) {
                cardContainer.innerHTML = '<p class="text-center">No threads available.</p>';
                return;
            }
            data.forEach(item => {
                const card = document.createElement('div');
                card.className = 'card border mb-3 lift';
                card.innerHTML = `
                        <div class="card-body p-2">
                            <a href="${item.page_name}">
                                <p class="d-none"><b>${item.equipment_type}</b></p>
                                <h4 class="text-primary">${item.title}</h4>
                                <p class="text-muted">${truncateText(item.content, 150)}...</p>
                            </a>
                            <div class="post-footer d-flex flex-column flex-md-row justify-content-between">
                                <ul class="post-meta fs-15 mb-0">
                                    <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By ${item.user_name}</span></a></li>
                                    <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>${item.replies_count}</span></li>
                                </ul>
                            </div>
                        </div>`;
                cardContainer.appendChild(card);
            });
        }

        // Define the updatePaginationText function
        function updatePaginationText(start, end, total) {
            const paginationText = document.getElementById('pagination-text');
            paginationText.textContent = `${start} - ${end} of ${total}`;
        }

        // Define the togglePaginationButtons function
        function togglePaginationButtons(page, totalPages) {
            const preBtn = document.getElementById('preBtn');
            const nextBtn = document.getElementById('nextBtn');
            preBtn.style.display = (page === 1) ? 'none' : 'inline-block';
            nextBtn.style.display = (page === totalPages) ? 'none' : 'inline-block';
        }

        // Define the filterCardsByCategory function
        function filterCardsByCategory() {
            const selectedCategory = document.getElementById('category').value.toLowerCase();
            if (!selectedCategory) {
                filteredThreads = allThreads;
            } else {
                filteredThreads = allThreads.filter(item => {
                    const categories = item.equipment_type ? item.equipment_type.toLowerCase().split(',') : [];
                    return categories.includes(selectedCategory);
                });
            }
            loadPage(1); // Load the first page of filtered results
        }

        // Define the showSuggestions function
        function showSuggestions(keyword) {
            const suggestionBox = document.getElementById('suggestionBox');
            suggestionBox.innerHTML = '';

            if (keyword) {
                const suggestions = allThreads.filter(item => item.title.toLowerCase().includes(keyword.toLowerCase()));
                suggestions.forEach(item => {
                    const suggestionItem = document.createElement('a');
                    suggestionItem.className = 'suggestion-item';
                    suggestionItem.href = item.page_name;
                    suggestionItem.textContent = item.title;
                    suggestionBox.appendChild(suggestionItem);
                });
                suggestionBox.style.display = 'block';
            } else {
                suggestionBox.style.display = 'none';
            }
        }

        // Define the filterCards function
        function filterCards(keyword) {
            filteredThreads = allThreads.filter(item => {
                return item.title.toLowerCase().includes(keyword.toLowerCase());
            });
            loadPage(1);
        }

        // Event listeners for DOMContentLoaded
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('category').addEventListener('change', filterCardsByCategory);
            document.getElementById('searchInput').addEventListener('input', () => {
                const keyword = document.getElementById('searchInput').value.trim();
                showSuggestions(keyword);
                filterCards(keyword);
            });

            document.getElementById('preBtn').addEventListener('click', () => loadPage(currentPage - 1));
            document.getElementById('nextBtn').addEventListener('click', () => loadPage(currentPage + 1));

            // Ensure threads are displayed on initial load
            loadPage(1);
        });
    </script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    function initializeToggleFunctionality() {
        const toggleLink = document.querySelector(".toggle-more-replies");
        const moreRepliesContent = document.querySelector(".more-replies-content");
        const noRepliesMessage = document.querySelector(".no-replies-message");

        if (!toggleLink || !moreRepliesContent || !noRepliesMessage) {
            console.error("Required elements not found. Ensure the correct class names are used.");
            console.log({
                toggleLink,
                moreRepliesContent,
                noRepliesMessage,
            });
            return;
        }

        const hasReplies = Array.from(moreRepliesContent.children).some(
            (child) => child.nodeType === Node.ELEMENT_NODE
        );

        if (hasReplies) {
            noRepliesMessage.style.display = "none";
        } else {
            noRepliesMessage.style.display = "block";
            toggleLink.style.display = "none";
            return;
        }

        toggleLink.addEventListener("click", (event) => {
            event.preventDefault();
            const isHidden = getComputedStyle(moreRepliesContent).display === "none";
            moreRepliesContent.style.display = isHidden ? "block" : "none";
            toggleLink.textContent = isHidden ? "Hide More Replies" : "More Replies →";
        });
    }

    initializeToggleFunctionality();

    const observer = new MutationObserver(() => {
        const toggleLink = document.querySelector(".toggle-more-replies");
        const moreRepliesContent = document.querySelector(".more-replies-content");

        if (toggleLink && moreRepliesContent) {
            initializeToggleFunctionality();
            observer.disconnect();
        }
    });

    observer.observe(document.body, { childList: true, subtree: true });
});
</script>
</body>

</html>