
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently facing a perplexing issue and urgently seeking a solution. Our organization utilizes separate rbm databases for different regions. However, we are encountering a strange problem with a specific database. When we transfer data from CSI 2130 to Machinery Health Manager, only the overall trend">
    <meta name="keywords" content="troubleshooting issue, data transfer, spectrums, twfs, csi 2130, mhm 41, rbm databases, route summary, route management, waveform storage settings, spectra storage settings, bad data">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issue-data-transfer-of-spectrums-and-twfs-from-csi-2130-to-mhm-5-41">
    <title>Troubleshooting Issue: Data Transfer of Spectrums and TWFs from CSI 2130 to MHM 5.41 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Issue: Data Transfer of Spectrums and TWFs from CSI 2130 to MHM 5.41 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently facing a perplexing issue and urgently seeking a solution. Our organization utilizes separate rbm databases for different regions. However, we are encountering a strange problem with a specific database. When we transfer data from CSI 2130 to Machinery Health Manager, only the overall trend">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issue-data-transfer-of-spectrums-and-twfs-from-csi-2130-to-mhm-5-41">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Issue: Data Transfer of Spectrums and TWFs from CSI 2130 to MHM 5.41 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently facing a perplexing issue and urgently seeking a solution. Our organization utilizes separate rbm databases for different regions. However, we are encountering a strange problem with a specific database. When we transfer data from CSI 2130 to Machinery Health Manager, only the overall trend">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issue-data-transfer-of-spectrums-and-twfs-from-csi-2130-to-mhm-5-41"
      },
      "headline": "Troubleshooting Issue: Data Transfer of Spectrums and TWFs from CSI 2130 to MHM 5.41",
      "description": "Hello everyone, I am currently facing a perplexing issue and urgently seeking a solution. Our organization utilizes separate rbm databases for different regions. However, we are encountering a strange problem with a specific database. When we transfer data from CSI 2130 to Machinery Health Manager, only the overall trend",
      "author": {
        "@type": "Person",
        "name": "Balasubramanian Kumaran"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-31",
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
                <h1 class="text-white">Troubleshooting Issue: Data Transfer of Spectrums and TWFs from CSI 2130 to MHM 5.41</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Balasubramanian Kumaran</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4943</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">329</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently facing a perplexing issue and urgently seeking a solution. Our organization utilizes separate rbm databases for different regions. However, we are encountering a strange problem with a specific database. When we transfer data from CSI 2130 to Machinery Health Manager, only the overall trend is being transferred, rather than the spectrums and Time wave forms. This is a new issue for us, and despite conducting thorough checks, we have not been able to resolve it. 

We have confirmed the following: 
1. The Route Summary in Route Management indicates that waveform and spectra storage settings are correct. 
2. We can view the collected data (Spectrums and TWFs) in CSI 2130. 
3. There are no bad data flags on the points in the 2130 device. 
4. Data dump settings in Data Transfer are configured to store everything and save bad data. We have also scanned for errors using the database utility program, which returned no issues.

Despite attempting data transfer with different collectors, the outcome remains consistent. Given that we do not have support from CSI, our options for assistance are limited. We are currently using MHM version 5.41. Any prompt suggestions on how to address this issue would be greatly valued. Thank you in advance for your input.

Warm regards,
Bala K</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I am excited to share that the issue has been successfully resolved. The database size had exceeded 2GB, causing it to no longer accept new data. By removing some old data, we were able to resolve the issue and upload all the necessary information. Best regards, Bala K.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ruby Cooper</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
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
<h4 class='text-dark'>FAQ: 1. Question: Why is only the overall trend being transferred from CSI 2130 to Machinery Health Manager, instead of the spectrums and Time Waveforms?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This issue could be due to various reasons such as incorrect settings, data dump configurations, or potential errors in the data transfer process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: What steps have been taken to troubleshoot the issue of missing spectrums and Time Waveforms during data transfer?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The user has confirmed correct waveform and spectra storage settings in Route Management, verified the data in CSI 2130, checked for bad data flags, configured data dump settings, and scanned for errors using the database utility program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Are there any known compatibility issues between CSI 2130 and Machinery Health Manager version 5.41?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: There could be compatibility issues between the devices or software versions, which may require updates or patches to resolve the data transfer problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: What are the available options for resolving the data transfer issue if support from CSI is not accessible?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In the absence of CSI support, the user can explore community forums, online resources, or consult with colleagues who may have faced similar challenges to find a resolution to the problem.</p>
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
