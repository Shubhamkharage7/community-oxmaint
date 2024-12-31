
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, if you are experiencing issues with Kepware or Linkmaster not returning accurate values (Unknown Quality) for certain tags from the OPC DA Client, you are not alone. Some values may be displaying as bad quality or bad vartype, with only certain values not being read. Despite being from">
    <meta name="keywords" content="kepware troubleshooting, linkmaster issues, opc da client problems, bad vartype solutions, unknown quality error, opc tags not reading, dcom configuration, quick client success, opc da troubleshooting, bad quality values, opc troubleshooting tips, fix">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-kepware-and-linkmaster-fixing-bad-vartype-issues-in-opc-da-client">
    <title>Troubleshooting Kepware and Linkmaster: Fixing Bad Vartype Issues in OPC DA Client | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Kepware and Linkmaster: Fixing Bad Vartype Issues in OPC DA Client | Oxmaint Community">
    <meta property="og:description" content="Hello, if you are experiencing issues with Kepware or Linkmaster not returning accurate values (Unknown Quality) for certain tags from the OPC DA Client, you are not alone. Some values may be displaying as bad quality or bad vartype, with only certain values not being read. Despite being from">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-kepware-and-linkmaster-fixing-bad-vartype-issues-in-opc-da-client">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Kepware and Linkmaster: Fixing Bad Vartype Issues in OPC DA Client | Oxmaint Community">
    <meta name="twitter:description" content="Hello, if you are experiencing issues with Kepware or Linkmaster not returning accurate values (Unknown Quality) for certain tags from the OPC DA Client, you are not alone. Some values may be displaying as bad quality or bad vartype, with only certain values not being read. Despite being from">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-kepware-and-linkmaster-fixing-bad-vartype-issues-in-opc-da-client"
      },
      "headline": "Troubleshooting Kepware and Linkmaster: Fixing Bad Vartype Issues in OPC DA Client",
      "description": "Hello, if you are experiencing issues with Kepware or Linkmaster not returning accurate values (Unknown Quality) for certain tags from the OPC DA Client, you are not alone. Some values may be displaying as bad quality or bad vartype, with only certain values not being read. Despite being from",
      "author": {
        "@type": "Person",
        "name": "Johnveloc"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-28",
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
                <h1 class="text-white">Troubleshooting Kepware and Linkmaster: Fixing Bad Vartype Issues in OPC DA Client</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Johnveloc</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1019</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">422</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, if you are experiencing issues with Kepware or Linkmaster not returning accurate values (Unknown Quality) for certain tags from the OPC DA Client, you are not alone. Some values may be displaying as bad quality or bad vartype, with only certain values not being read. Despite being from the same OPC, other tags may be functioning correctly. As this is a local OPC, DCOMs are not the root of the issue. Do you have any suggestions on how to resolve this? These tags are being read properly in Quick Client.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Johnveloc inquired if anyone has experienced issues with Kepware or Linkmaster not returning accurate values (Unknown Quality) for certain tags from an OPC DA Client. Some values are displaying as bad quality or bad vartype, with only some values not being read. However, other tags from the same OPC are functioning correctly. As it is a local OPC, DCOM is not the cause of the problem. Any suggestions on resolving this issue? The tags are reading fine in Quick Client. What specific values are you attempting to read, and what protocol are you using (e.g., modbus tcp)? Typically, if the values can be read in the quick client but not from the other device, there may be a setup issue with the other device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dale87</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Which kepware software version is better: Enterprise V5 or EX V6?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dale87</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for responding about the latest version of KepwareEX 6.xx. We are working on connecting SQL data from SCADA software using OPC DA. While we attempted OPC UA, it did not integrate properly with Kepware. The OPC Quick Client is able to retrieve data with a Native Type, likely LLong. I will confirm the protocol specifics later, but the data originates from a Windfarm, suggesting it may use industry-specific protocols similar to those utilized by Vestas.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Johnveloc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response regarding the latest version of KepwareEX 6.xx. We are attempting to connect SQL data from SCADA software through OPC DA. While we tried using OPC UA, we encountered compatibility issues with Kepware. The OPC Quick Client was able to successfully read data with the Native Type, possibly LLong. I will confirm the protocol specifics later, but the data source is from a Windfarm, likely utilizing industry-specific protocols similar to those used by Vestas.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Johnveloc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the past, I encountered a similar issue and, although I don't recall the exact solution, it appears that the problem may have been related to using a Double instead of an LLong datatype. If I do recall the solution, I will certainly share it with you. I have found that Enterprise software tends to be more reliable than EX, particularly when utilized with panelviews.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dale87</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your assistance. I have experimented with various data types to no avail. I plan to contact Kepware with relevant screenshots in the hopes that they can provide me with the necessary support to resolve this issue promptly. It is crucial for me to get this resolved as soon as possible.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Johnveloc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you discovered the solution to this mystery?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dale87</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Why are some values in Kepware or Linkmaster showing as bad quality or bad vartype in the OPC DA Client?
- Some values displaying as bad quality or bad vartype in Kepware or Linkmaster could be due to issues with certain tags not being read accurately.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot Kepware or Linkmaster when only specific tags are not returning accurate values?</h4>
<p class='text-muted'><strong>Answer:</strong> - If only certain tags are not functioning correctly in Kepware or Linkmaster, it may be helpful to troubleshoot by checking the settings and configurations specific to those tags.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why are tags being read properly in Quick Client but not in Kepware or Linkmaster?</h4>
<p class='text-muted'><strong>Answer:</strong> - The discrepancy in tag readings between Quick Client and Kepware or Linkmaster could indicate a possible issue within the configuration or communication settings of the OPC DA Client software.</p>
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
