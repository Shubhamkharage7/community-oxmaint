
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Our system is equipped with two L71s (ver24) running redundantly, with a 10 slot chassis for remote I/O. After adding an IF16 to slot 7, we encountered a fault (16#0002) Resources Unavailable. Further investigation led us to suspect the 1756-EN2TR card connecting the RIO to the PLC chassis. Monitoring">
    <meta name="keywords" content="troubleshooting, fault 16#0002, resources unavailable, en2tr card overload, l71, 1756-en2tr, if16, plc chassis, remote i/o, linx, resource rejects">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-fault-16-0002-resources-unavailable-tips-for-en2tr-card-overload-situation">
    <title>Troubleshooting Fault 16#0002: Resources Unavailable - Tips for EN2TR Card Overload Situation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Fault 16#0002: Resources Unavailable - Tips for EN2TR Card Overload Situation | Oxmaint Community">
    <meta property="og:description" content="Our system is equipped with two L71s (ver24) running redundantly, with a 10 slot chassis for remote I/O. After adding an IF16 to slot 7, we encountered a fault (16#0002) Resources Unavailable. Further investigation led us to suspect the 1756-EN2TR card connecting the RIO to the PLC chassis. Monitoring">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-fault-16-0002-resources-unavailable-tips-for-en2tr-card-overload-situation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Fault 16#0002: Resources Unavailable - Tips for EN2TR Card Overload Situation | Oxmaint Community">
    <meta name="twitter:description" content="Our system is equipped with two L71s (ver24) running redundantly, with a 10 slot chassis for remote I/O. After adding an IF16 to slot 7, we encountered a fault (16#0002) Resources Unavailable. Further investigation led us to suspect the 1756-EN2TR card connecting the RIO to the PLC chassis. Monitoring">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-fault-16-0002-resources-unavailable-tips-for-en2tr-card-overload-situation"
      },
      "headline": "Troubleshooting Fault 16#0002: Resources Unavailable - Tips for EN2TR Card Overload Situation",
      "description": "Our system is equipped with two L71s (ver24) running redundantly, with a 10 slot chassis for remote I/O. After adding an IF16 to slot 7, we encountered a fault (16#0002) Resources Unavailable. Further investigation led us to suspect the 1756-EN2TR card connecting the RIO to the PLC chassis. Monitoring",
      "author": {
        "@type": "Person",
        "name": "stretch_af"
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
                <h1 class="text-white">Troubleshooting Fault 16#0002: Resources Unavailable - Tips for EN2TR Card Overload Situation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>stretch_af</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">167</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">225</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Our system is equipped with two L71's (ver24) running redundantly, with a 10 slot chassis for remote I/O. After adding an IF16 to slot 7, we encountered a fault "(16#0002) Resources Unavailable". Further investigation led us to suspect the 1756-EN2TR card connecting the RIO to the PLC chassis. Monitoring the EN2TR card through Linx revealed a continuous increase in "Resource Rejects" until we inhibited the IF16. Could the EN2TR card be overloaded? I captured screenshots of its web page, but I am unsure how to interpret the data. Any advice would be appreciated. - Justin</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I find it hard to believe that the entrance in the remote rack has reached its buffer capacity with only 10 slots in use. The real question is, how many nodes are linked to the main rack that is supporting this remote rack?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1. What does fault 160002: Resources Unavailable indicate in a PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> - This fault typically indicates that the system resources required by a specific component are not available, leading to a disruption in operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot fault 160002 in a PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot this fault, you can start by investigating the components involved, such as checking the connections, monitoring resource usage, and analyzing any error logs or diagnostic information available.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What could cause the EN2TR card to be overloaded in a PLC setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - Overloading of the EN2TR card can occur due to excessive data traffic, configuration issues, or limitations in the card's processing capabilities.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I interpret the data captured from the EN2TR card's web page to identify the issue?</h4>
<p class='text-muted'><strong>Answer:</strong> - When analyzing data from the EN2TR card's web page, focus on parameters like resource rejects, network traffic, and any error messages displayed to understand the card's performance and potential overload issues.</p>
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
