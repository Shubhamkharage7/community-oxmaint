
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Our CNC milling machine equipped with Siemens 611 drive units is experiencing faults on the spindle and Z axis control slice, displaying error codes EA039 and Eb039. The XandY axis control slice is functioning properly and in the RUN state. Following a recent refurbishment and return due to a">
    <meta name="keywords" content="siemens 611 drive units, ea039 error code, eb039 error code, cnc milling machine, spindle control, z axis control, x axis control, y axis control, run state, refurbishment, malfunction, power up, troubleshooting, siemens">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-611-drive-unit-errors-ea039-and-eb039">
    <title>Troubleshooting Siemens 611 Drive Unit Errors EA039 and Eb039 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Siemens 611 Drive Unit Errors EA039 and Eb039 | Oxmaint Community">
    <meta property="og:description" content="Our CNC milling machine equipped with Siemens 611 drive units is experiencing faults on the spindle and Z axis control slice, displaying error codes EA039 and Eb039. The XandY axis control slice is functioning properly and in the RUN state. Following a recent refurbishment and return due to a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-611-drive-unit-errors-ea039-and-eb039">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Siemens 611 Drive Unit Errors EA039 and Eb039 | Oxmaint Community">
    <meta name="twitter:description" content="Our CNC milling machine equipped with Siemens 611 drive units is experiencing faults on the spindle and Z axis control slice, displaying error codes EA039 and Eb039. The XandY axis control slice is functioning properly and in the RUN state. Following a recent refurbishment and return due to a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-611-drive-unit-errors-ea039-and-eb039"
      },
      "headline": "Troubleshooting Siemens 611 Drive Unit Errors EA039 and Eb039",
      "description": "Our CNC milling machine equipped with Siemens 611 drive units is experiencing faults on the spindle and Z axis control slice, displaying error codes EA039 and Eb039. The XandY axis control slice is functioning properly and in the RUN state. Following a recent refurbishment and return due to a",
      "author": {
        "@type": "Person",
        "name": "maggi66"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-21",
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
                <h1 class="text-white">Troubleshooting Siemens 611 Drive Unit Errors EA039 and Eb039</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>maggi66</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">374</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">307</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Our CNC milling machine equipped with Siemens 611 drive units is experiencing faults on the spindle and Z axis control slice, displaying error codes EA039 & Eb039. The X&Y axis control slice is functioning properly and in the RUN state. Following a recent refurbishment and return due to a malfunction, the faults resurfaced upon re-installation and power up. Any assistance or guidance on resolving these issues would be greatly valued.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Error encountered during power section detection. Additional details: Code: 0x100000 - Multiple power section types detected. Code: 0x200000 - Failure to detect power section type. Code: 0x30xxxx - Discrepancy in identified power module (P1106). Input the identified PM code here. Code: 0x400000 - Conflicting power section codes for 2-axis module. Solution: Perform RESET or POWER ON procedures. Ensure proper insertion of control module into power module. Try removing and reinserting the card in the LT module. Check for correct placement of control card pins in the female flat connector of the LT module. Reconfigure or remove this specific axis using Simocom u for troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your response. After verifying the card connection, it seems to be in the correct position. Since I do not have access to Simocom U software, I wonder if it is feasible to adjust the P1106 parameter using the + P & - keys directly. I attempted to make changes but did not see any updates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>maggi66</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensure that parameter P0651 (write protection) is configured to a value of 4. You can download Somocom u from the following link: SIOSsupport.industry.siemens.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I successfully accessed the parameters and confirmed that the P1106 parameters were correctly assigned. In an attempt to troubleshoot, I exchanged the Z & Spindle control module with the X & Y control module, which are identical. Despite correctly assigning the P1106 to the appropriate power module, the issue persisted with the Z & Spindle unit. Reverting the modules back did not resolve the problem. It appears that the problem lies with the Z & Spindle power module and not the control module cards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>maggi66</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems that the issue lies within the power module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What do error codes EA039 and Eb039 indicate on Siemens 611 drive units?
- Error codes EA039 and Eb039 on Siemens 611 drive units typically relate to faults in the spindle and Z axis control slice.
  
2. Why are the X&Y axis control slices functioning properly while the spindle and Z axis are displaying errors?
- The X&Y axis control slices may be functioning properly due to separate circuitry or components, while the spindle and Z axis control slices are affected by specific issues causing errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot and resolve errors EA039 and Eb039 on Siemens 611 drive units?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshooting steps may include checking connections, inspecting for damaged components, reviewing recent refurbishment work, and consulting Siemens' documentation for error code specifics.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is it common for faults like EA039 and Eb039 to resurface after a machine refurbishment?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is possible for faults to reappear after refurbishment if underlying issues were not fully addressed or if new problems were introduced during the refurbishment process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What should be done if errors EA039 and Eb039 persist after re-installation and power up?</h4>
<p class='text-muted'><strong>Answer:</strong> - If errors EA039 and Eb039 persist after re-installation, it may be necessary to consult with a Siemens technician or specialist for advanced troubleshooting and resolution steps.</p>
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
