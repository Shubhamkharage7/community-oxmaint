
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="If the address of a long or real variable is not correctly aligned, the Vijeo Citect compiler will show the Address on bad boundary message. You can adjust this setting in the .ini file by changing the value from 1 (default) to 0 (disable checking) or 1 (enable checking).">
    <meta name="keywords" content="disable address boundary checking, citect vijeo compiler, long variable alignment, real variable alignment, address on bad boundary, .ini file setting, disable checking, enable checking, editing .ini file, alignment issue, memory alignment, vijeo citect">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-disable-address-boundary-checking-in-citect-vijeo-compiler">
    <title>How to Disable Address Boundary Checking in Citect Vijeo Compiler | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Disable Address Boundary Checking in Citect Vijeo Compiler | Oxmaint Community">
    <meta property="og:description" content="If the address of a long or real variable is not correctly aligned, the Vijeo Citect compiler will show the Address on bad boundary message. You can adjust this setting in the .ini file by changing the value from 1 (default) to 0 (disable checking) or 1 (enable checking).">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-disable-address-boundary-checking-in-citect-vijeo-compiler">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Disable Address Boundary Checking in Citect Vijeo Compiler | Oxmaint Community">
    <meta name="twitter:description" content="If the address of a long or real variable is not correctly aligned, the Vijeo Citect compiler will show the Address on bad boundary message. You can adjust this setting in the .ini file by changing the value from 1 (default) to 0 (disable checking) or 1 (enable checking).">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-disable-address-boundary-checking-in-citect-vijeo-compiler"
      },
      "headline": "How to Disable Address Boundary Checking in Citect Vijeo Compiler",
      "description": "If the address of a long or real variable is not correctly aligned, the Vijeo Citect compiler will show the Address on bad boundary message. You can adjust this setting in the .ini file by changing the value from 1 (default) to 0 (disable checking) or 1 (enable checking).",
      "author": {
        "@type": "Person",
        "name": "ongzy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-25",
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
                <h1 class="text-white">How to Disable Address Boundary Checking in Citect Vijeo Compiler</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ongzy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">16474</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">204</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>If the address of a long or real variable is not correctly aligned, the Vijeo Citect compiler will show the "Address on bad boundary" message. You can adjust this setting in the .ini file by changing the value from 1 (default) to 0 (disable checking) or 1 (enable checking).  Where can you find the .ini file for editing this setting?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Discovering the solution to a common issue: in Citect Project Editor, navigate to Computer Setup Editor located in the bottom right corner. Under the General section, set the Parameter to CheckAddressBoundary and the Value to 0. Click Add, then save. Remember to create a backup of your citect.ini file before making any changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ongzy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You can also adjust these settings in the ini file. However, it's important to note that in some PLCs like the Ti series, disabling boundary checking may still cause communication issues in Citect if all multi-word addresses are not aligned on the same boundary. While INTs may work fine, we encountered issues with REALs when some were on odd addresses (e.g. V123, where the REAL value is stored in addresses V123 & V124) and others on even addresses (e.g. V124, where the REAL value is stored in addresses V124 & V125).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dua Anjing</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the guidance, it will be duly noted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ongzy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to proceed with caution when altering this parameter, as inconsistencies may arise when integers and longs are not aligned on even addresses. Best regards, Marsi.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Marsupilami</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ongzy pointed out an important tip for configuring Citect Project Editor on your computer. To access the Computer Setup Editor, navigate to the bottom right corner of the screen. In the General section, locate the Parameter labeled CheckAddressBoundary and set its Value to 0. After making this adjustment, remember to add the setting and save your changes. Before making any modifications, it is crucial to create a backup of your citect.ini file. Thank you for sharing this helpful information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>akd.jrdb</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Marsupilami advised caution when altering parameters to avoid unexpected results with drivers on uneven memory addresses for integers and longs. This issue is more related to individual drivers and devices rather than the parameter itself. The address boundary parameter simply prevents a check and compilation failure if the addresses are not aligned. Stay vigilant and be mindful of these technical considerations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tragically1969</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ongzy shared a helpful tip: To adjust the CheckAddressBoundary parameter in Citect Project Editor, navigate to Computer Setup Editor in the bottom right corner. Set the value to 0, click Add, and save your changes. Remember to back up your citect.ini file before making any modifications. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ARAVIND A M</span></li>
            </ul>
        </div>
        
    </div>
    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
</div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1. How can I disable address boundary checking in Citect Vijeo Compiler?</h4>
<p class='text-muted'><strong>Answer:</strong> - To disable address boundary checking in Citect Vijeo Compiler, you can edit the .ini file and change the value from 1 (default) to 0 (disable checking).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What error message will be displayed if the address of a long or real variable is not correctly aligned in Citect Vijeo Compiler?</h4>
<p class='text-muted'><strong>Answer:</strong> - The error message "Address on bad boundary" will be shown by the Vijeo Citect compiler in such cases.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Where can I find the .ini file to adjust the address boundary checking setting in Citect Vijeo Compiler?</h4>
<p class='text-muted'><strong>Answer:</strong> - The .ini file where you can edit the address boundary checking setting in Citect Vijeo Compiler can be found in the installation directory of the software.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

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
