
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When it comes to correctly charging replacement parts to a work order for rebuilds, there seems to be some confusion on which transactions to use. Take for example a scenario where a $10,000 pump is signed out of MRO stock (SAP-MM) for a work order (SAP-PM). The challenge lies">
    <meta name="keywords" content="replacement parts charging, work order rebuilds, charging work orders, mro stock transactions, sap-mm transactions, sap-pm transactions, rebuilt parts costs, manufacturing area">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/effective-methods-for-charging-work-orders-for-rebuilt-parts">
    <title>Effective Methods for Charging Work Orders for Rebuilt Parts | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Effective Methods for Charging Work Orders for Rebuilt Parts | Oxmaint Community">
    <meta property="og:description" content="When it comes to correctly charging replacement parts to a work order for rebuilds, there seems to be some confusion on which transactions to use. Take for example a scenario where a $10,000 pump is signed out of MRO stock (SAP-MM) for a work order (SAP-PM). The challenge lies">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/effective-methods-for-charging-work-orders-for-rebuilt-parts">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Effective Methods for Charging Work Orders for Rebuilt Parts | Oxmaint Community">
    <meta name="twitter:description" content="When it comes to correctly charging replacement parts to a work order for rebuilds, there seems to be some confusion on which transactions to use. Take for example a scenario where a $10,000 pump is signed out of MRO stock (SAP-MM) for a work order (SAP-PM). The challenge lies">
    <meta name="twitter:image" content="https://community.oxmaint.com/assets/img/favicon.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6M0T9NLP4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-Y6M0T9NLP4');
    </script>

    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://community.oxmaint.com/discussion-forum/effective-methods-for-charging-work-orders-for-rebuilt-parts"
      },
      "headline": "Effective Methods for Charging Work Orders for Rebuilt Parts",
      "description": "When it comes to correctly charging replacement parts to a work order for rebuilds, there seems to be some confusion on which transactions to use. Take for example a scenario where a $10,000 pump is signed out of MRO stock (SAP-MM) for a work order (SAP-PM). The challenge lies",
      "author": {
        "@type": "Person",
        "name": "William Thompson"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-04",
      "image": "https://community.oxmaint.com/assets/img/favicon.png"
    }
    </script>

    

<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" defer></script>
<link rel="stylesheet" href="./../assets/css/home.css"/>
</head>
<body>
    <div class="content-wrapper bg-gray">
        <?php include "../include/header.php" ?>
        <!-- /header -->
        <div class="container my-5">
            

            <div class="bg-primary card p-4 mb-4">
                <h1 class="text-white">Effective Methods for Charging Work Orders for Rebuilt Parts</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>William Thompson</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3812</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">462</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When it comes to correctly charging replacement parts to a work order for rebuilds, there seems to be some confusion on which transactions to use. Take for example a scenario where a $10,000 pump is signed out of MRO stock (SAP-MM) for a work order (SAP-PM). The challenge lies in automatically charging the work order for the replacement cost of the pump, while also accounting for the $2,500 repair cost when the pump is sent out to a vendor. In order to maintain accurate budgets for a specific manufacturing area, it is crucial to credit the original work order with the $10,000 and only charge $2,500 for the rebuild. Are there specific MM transactions that can help achieve this task effectively? Any advice on the best approach to handle this situation would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you utilizing a refurbishment order for the replacement process? This is typically the standard procedure for such repairs. The first step involves creating a work order to dismantle the faulty part and install the new one, then placing the dismantled part in the repair stock. The second step entails repairing the faulty part using a refurbishment order, which requires split valuation. Make sure to have the refurbishment order completed properly. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vince Myers</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, We utilize either a PM01 or a PM02 work order when replacing a faulty part with a new or rebuilt one from our inventory. Our SAP-MM system automatically invoices the work order for the price of the new unit when the part is taken out of stock. We are working on crediting the work order for the full purchase price of the item, so that the work order reflects the lower cost of a vendor rebuild. We are comfortable handling in-house rebuilds completed by our maintenance staff. The challenge arises when we receive the item back from the vendor repair - how can we accurately charge the work order for the repair cost instead of the new purchase price? Any guidance on how to handle this situation with refurbishment work orders would be greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Brenda Green</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To streamline the process, you can easily return the item needing repair to the store for further handling. It is recommended to designate a specific storage location for items awaiting repair, facilitating the crediting of the work order with the cost of the new unit. Subsequently, any purchase orders generated for repairing the unit will be associated with an account assignment to allocate costs to the work order. Once the item is repaired and returned, it is transferred to a different storage location signifying its availability for use. Upon receipt of the item, the cost of the repair will be recorded in the work order. Alternatively, you may consider implementing the SAP Refurbishment process, which involves charging the work order with the value of the item taken from the store and initiating a separate Refurbishment order for the repair of the returned part. Material valuations will be subdivided to indicate whether stored parts are valued at the new price, cost of repair, or a designated value for items awaiting repairs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Marcus Woods</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon receiving the repaired item, we need guidance on allocating the repair cost to the correct work order or cost center. Any assistance on this matter would be greatly appreciated. Thank you, W.W.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Charlie Evans</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems that opting for the PM04 refurbishment order may be the best choice for us. Upon closer examination, we have found that this method includes the essential features we require. A big thank you to everyone for their assistance and support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jack Parker</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering long-term strategies, it is wise to prioritize the Refurbishment Order for optimal results. While this process may take time to fully integrate, it has the potential to revolutionize how inventory is valued in stores. Engaging in discussions with financial experts and store managers is essential to ensure a smooth transition and readiness for the anticipated revaluation of stocks. In the short term, it is crucial to focus on properly assigning account details on purchase requisitions and repair orders to the appropriate work order.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kelly Hughes</span></li>
            </ul>
        </div>
        
                        </div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 outer-container">
        <!-- Related Topics -->
    <?php include "./related-topic.php" ?>
    </div>
            </div>
             <!-- cta button -->
        <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can replacement parts be correctly charged to a work order for rebuilds?
- To correctly charge replacement parts to a work order for rebuilds, it is important to credit the original work order with the replacement cost of the part and only charge the actual repair cost. This can help maintain accurate budgets for specific manufacturing areas.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the challenge in automatically charging work orders for replacement parts in scenarios like the one mentioned?</h4>
<p class='text-muted'><strong>Answer:</strong> - The challenge in scenarios like the one mentioned is ensuring that the work order is charged accurately for the replacement cost of the part, while also accounting for any repair costs incurred when the part is sent out to a vendor.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there specific MM transactions that can help in effectively charging work orders for rebuilt parts?</h4>
<p class='text-muted'><strong>Answer:</strong> - Utilizing SAP-MM transactions can aid in effectively charging work orders for rebuilt parts. These transactions can help credit the original work order with the replacement cost of the part and only charge for the actual repair cost, thereby ensuring accurate budget management.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What is the best approach to handle situations where replacement parts need to be charged to work orders for rebuilds?</h4>
<p class='text-muted'><strong>Answer:</strong> - The best approach to handle such situations is to carefully credit the original work order with the replacement cost of the part and charge only the repair cost. This approach helps in maintaining accurate budgets for specific manufacturing areas.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

        <script src="like-view-counter.js"></script>
    </div>
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
