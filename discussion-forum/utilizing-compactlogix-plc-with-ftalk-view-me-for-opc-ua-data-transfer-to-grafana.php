
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am currently utilizing a compact logic 1769-L18 PLC with FTalk View ME for visualization purposes. While considering options for visualization on Grafana, I initially planned to use MySQL. However, ME does not support MySQL, leading me to explore alternative solutions. My current plan involves sending data from">
    <meta name="keywords" content="compactlogix plc, ftalk view me, opc-ua data transfer, grafana visualization, mysql compatibility, influxdb integration, opc server support, 1769-l18 plc, data storage solutions, data visualization options, industrial automation, plc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/utilizing-compactlogix-plc-with-ftalk-view-me-for-opc-ua-data-transfer-to-grafana">
    <title>Utilizing CompactLogix PLC with FTalk View ME for OPC-UA data transfer to Grafana | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Utilizing CompactLogix PLC with FTalk View ME for OPC-UA data transfer to Grafana | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am currently utilizing a compact logic 1769-L18 PLC with FTalk View ME for visualization purposes. While considering options for visualization on Grafana, I initially planned to use MySQL. However, ME does not support MySQL, leading me to explore alternative solutions. My current plan involves sending data from">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/utilizing-compactlogix-plc-with-ftalk-view-me-for-opc-ua-data-transfer-to-grafana">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Utilizing CompactLogix PLC with FTalk View ME for OPC-UA data transfer to Grafana | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am currently utilizing a compact logic 1769-L18 PLC with FTalk View ME for visualization purposes. While considering options for visualization on Grafana, I initially planned to use MySQL. However, ME does not support MySQL, leading me to explore alternative solutions. My current plan involves sending data from">
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
        "@id": "https://community.oxmaint.com/discussion-forum/utilizing-compactlogix-plc-with-ftalk-view-me-for-opc-ua-data-transfer-to-grafana"
      },
      "headline": "Utilizing CompactLogix PLC with FTalk View ME for OPC-UA data transfer to Grafana",
      "description": "Greetings, I am currently utilizing a compact logic 1769-L18 PLC with FTalk View ME for visualization purposes. While considering options for visualization on Grafana, I initially planned to use MySQL. However, ME does not support MySQL, leading me to explore alternative solutions. My current plan involves sending data from",
      "author": {
        "@type": "Person",
        "name": "hafizzz_ahmad"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-22",
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
                <h1 class="text-white">Utilizing CompactLogix PLC with FTalk View ME for OPC-UA data transfer to Grafana</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>hafizzz_ahmad</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">281</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">244</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am currently utilizing a compact logic 1769-L18 PLC with FTalk View ME for visualization purposes. While considering options for visualization on Grafana, I initially planned to use MySQL. However, ME does not support MySQL, leading me to explore alternative solutions. My current plan involves sending data from the PLC via OPC-UA, storing the data in InfluxDB, and having Grafana retrieve and display the data. Unfortunately, the 1769-L18 does not have OPC server support. Does anyone have suggestions on how to proceed with this setup?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have Grafana installed on one of your devices, you can utilize Pylogix to extract data from your PLC and store it in a database, especially if you have experience with Python programming. This integration allows for seamless communication between your industrial equipment and database systems through automation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you come across this thread in the future, I successfully sent and visualized data on Grafana by using Compactlogix, Node-Red, InfluxDB, and Grafana in my setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hafizzz_ahmad</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can CompactLogix PLCs be used with FTalk View ME for OPC-UA data transfer to Grafana?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to utilize a CompactLogix 1769-L18 PLC with FTalk View ME for OPC-UA data transfer to Grafana.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is MySQL not supported by FTalk View ME for visualization purposes?</h4>
<p class='text-muted'><strong>Answer:</strong> - FTalk View ME does not support MySQL, which may require exploring alternative solutions for data transfer and visualization.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can data from a PLC be sent to Grafana if the 1769-L18 does not have OPC server support?</h4>
<p class='text-muted'><strong>Answer:</strong> - One approach is to send data from the PLC via OPC-UA, store it in InfluxDB, and then have Grafana retrieve and display the data.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any suggestions on how to proceed with setting up OPC-UA data transfer with a PLC that lacks OPC server support?</h4>
<p class='text-muted'><strong>Answer:</strong> - Seeking advice from experts or exploring alternative communication protocols may help in setting up OPC-UA data transfer with a PLC that lacks OPC server support.</p>
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
