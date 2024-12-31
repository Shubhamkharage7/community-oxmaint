
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Good morning, we are currently in the process of finalizing production for three identical machines. Each machine will have unique tag values stored for global offsets and production metrics, among other purposes. We are exploring ways to efficiently update the machines HMI using a single VPD file. Additionally, we">
    <meta name="keywords" content="efficient machine management, shared acd file benefits, studio 5000 logix designer, studio 5000 view designer, global offsets in studio 5000, unique tag values in production">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/efficiently-managing-multiple-machines-in-studio-5000-with-shared-acd-file">
    <title>Efficiently Managing Multiple Machines in Studio 5000 with Shared ACD File | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Efficiently Managing Multiple Machines in Studio 5000 with Shared ACD File | Oxmaint Community">
    <meta property="og:description" content="Good morning, we are currently in the process of finalizing production for three identical machines. Each machine will have unique tag values stored for global offsets and production metrics, among other purposes. We are exploring ways to efficiently update the machines HMI using a single VPD file. Additionally, we">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/efficiently-managing-multiple-machines-in-studio-5000-with-shared-acd-file">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Efficiently Managing Multiple Machines in Studio 5000 with Shared ACD File | Oxmaint Community">
    <meta name="twitter:description" content="Good morning, we are currently in the process of finalizing production for three identical machines. Each machine will have unique tag values stored for global offsets and production metrics, among other purposes. We are exploring ways to efficiently update the machines HMI using a single VPD file. Additionally, we">
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
        "@id": "https://community.oxmaint.com/discussion-forum/efficiently-managing-multiple-machines-in-studio-5000-with-shared-acd-file"
      },
      "headline": "Efficiently Managing Multiple Machines in Studio 5000 with Shared ACD File",
      "description": "Good morning, we are currently in the process of finalizing production for three identical machines. Each machine will have unique tag values stored for global offsets and production metrics, among other purposes. We are exploring ways to efficiently update the machines HMI using a single VPD file. Additionally, we",
      "author": {
        "@type": "Person",
        "name": "RafaelNY"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-31",
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
                <h1 class="text-white">Efficiently Managing Multiple Machines in Studio 5000 with Shared ACD File</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RafaelNY</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">226</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">475</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Good morning, we are currently in the process of finalizing production for three identical machines. Each machine will have unique tag values stored for global offsets and production metrics, among other purposes. We are exploring ways to efficiently update the machines' HMI using a single VPD file. Additionally, we are seeking a solution to maintain a single ACD file for PLC updates while allowing each machine to retain its individual tag values.

We are working in the following environment: Studio 5000 Logix Designer v34.02 and Studio 5000 View Designer v8.02. Any suggestions or insights on this matter would be greatly valued.

Best regards,
Rafael</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I don't foresee any issues; just ensure that each one has a unique IP address.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Should you use one Human-Machine Interface (HMI) for multiple machines or one HMI for each machine? It's not a significant issue either way.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your input. Each machine is equipped with its own Programmable Logic Controller (PLC) and Human Machine Interface (HMI). When updating the PLC program in the future across all three machines, it will result in overwriting all tag data on each machine. I am seeking a solution to retain the tag data on each machine without the need to maintain multiple ACD files and make redundant program changes in multiple locations. Is there a way to perform a logic-only download for the PLC? It is my understanding that the PLC always writes project tag data during downloads. Does initiating the Go Online function followed by a Download prevent the overwriting of project tag values? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RafaelNY</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are searching for the "Data Preserve Download Tool," it may have been available in earlier versions of Studio 5k, but it seems to be missing from my latest VM that is running v30. It is possible that it is an optional installation that I overlooked. In addition, I recommend periodically backing up ACD files for each machine as a precaution, especially before using the data preserve download feature. It's important to find the right balance between being prepared and being overly cautious.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named RafaelNY inquired about performing a logic-only download for a PLC. To achieve this, access the 'Download' dialogue box and select the 'Preserve online tag values' option under the 'Options' tab. This feature was introduced around version 32 of the software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>@joseph_e2, I completely agree. It's always a good idea to go online and save data for each machine as a backup plan. It seems like the "Data Preserve Download Tool" that @plvlc has mentioned could be integrated into Logix Designer. When I press Download and tab to Options, I see a form where checking 'Preserve online tag values' should prevent project tags from being written. Additionally, selecting Backup to file would generate a CSV file of online tag values for potential future restoration purposes. I'm curious, do you know if the Restore function is able to handle differences between projects? For instance, would it skip tags that have been deleted, created, renamed, or had their types changed in the project? 

Best regards,</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RafaelNY</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to plvlce, for a more efficient download process, make sure to access the 'Options' tab in the 'Download' dialogue box and choose the 'Preserve online tag values' option. This feature was introduced around version 32 and has proven to be a significant improvement. Click to expand and experience the difference!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can we efficiently update the HMIs of multiple machines using a single VPD file in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> To efficiently update the HMIs of multiple machines with unique tag values, you can utilize a single VPD file that contains the necessary information for all machines. This allows for streamlined updates across all HMIs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is it possible to maintain a single ACD file for PLC updates while preserving individual tag values for each machine in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, you can maintain a single ACD file for PLC updates in Studio 5000 while still allowing each machine to retain its unique tag values. By structuring your program logic effectively and utilizing global offsets, you can ensure that changes to the ACD file do not affect the individual tag values of each machine.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What are some suggestions for efficiently managing multiple machines in Studio 5000 with shared ACD files and VPD files?</h4>
<p class='text-muted'><strong>Answer:</strong> Some suggestions for efficiently managing multiple machines include utilizing global offsets and production metrics, structuring your program logic effectively to accommodate individual tag values, and leveraging shared ACD files and VPD files for streamlined updates across all machines.</p>
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
