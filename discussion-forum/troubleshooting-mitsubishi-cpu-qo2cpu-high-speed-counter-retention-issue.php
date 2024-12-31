
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, Im Sri and I have some queries regarding my Mitsubishi CPU-QO2CPU. I recently transferred a program from a previous CPU to a new one. While the high-speed counter value was retained in the old CPU, it is not holding in the new CPU. Can you please provide a">
    <meta name="keywords" content="mitsubishi cpu-qo2cpu, high-speed counter, retention issue, troubleshooting, program transfer, counter value, cpu problem, solution, mitsubishi plc, plc programming, cpu retention, technical support, mitsubishi cpu issue, cpu">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-cpu-qo2cpu-high-speed-counter-retention-issue">
    <title>Troubleshooting Mitsubishi CPU-QO2CPU High-Speed Counter Retention Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Mitsubishi CPU-QO2CPU High-Speed Counter Retention Issue | Oxmaint Community">
    <meta property="og:description" content="Hello, Im Sri and I have some queries regarding my Mitsubishi CPU-QO2CPU. I recently transferred a program from a previous CPU to a new one. While the high-speed counter value was retained in the old CPU, it is not holding in the new CPU. Can you please provide a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-cpu-qo2cpu-high-speed-counter-retention-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Mitsubishi CPU-QO2CPU High-Speed Counter Retention Issue | Oxmaint Community">
    <meta name="twitter:description" content="Hello, Im Sri and I have some queries regarding my Mitsubishi CPU-QO2CPU. I recently transferred a program from a previous CPU to a new one. While the high-speed counter value was retained in the old CPU, it is not holding in the new CPU. Can you please provide a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-cpu-qo2cpu-high-speed-counter-retention-issue"
      },
      "headline": "Troubleshooting Mitsubishi CPU-QO2CPU High-Speed Counter Retention Issue",
      "description": "Hello, Im Sri and I have some queries regarding my Mitsubishi CPU-QO2CPU. I recently transferred a program from a previous CPU to a new one. While the high-speed counter value was retained in the old CPU, it is not holding in the new CPU. Can you please provide a",
      "author": {
        "@type": "Person",
        "name": "srini6816"
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
                <h1 class="text-white">Troubleshooting Mitsubishi CPU-QO2CPU High-Speed Counter Retention Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>srini6816</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">109</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">381</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I'm Sri and I have some queries regarding my Mitsubishi CPU-QO2CPU. I recently transferred a program from a previous CPU to a new one. While the high-speed counter value was retained in the old CPU, it is not holding in the new CPU. Can you please provide a solution for this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure accuracy, check the auto refresh settings and locate the parameter for latch count registers. This is crucial for configuring the count correctly. Keep in mind that each channel requires 2 16-bit registers within the 32-bit registers. For example, for channel 1 use D600 and for channel 2 use D602. Avoid errors by configuring the second channel as D610. If you're having trouble reading settings from the upload, refer to another post addressing the same issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the high-speed counter value not being retained in my new Mitsubishi CPU-QO2CPU after transferring the program?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When transferring a program to a new CPU, ensure that the relevant settings and parameters for the high-speed counter are correctly configured in the new CPU. Checking the programming logic and comparing it with the previous CPU settings may help identify any discrepancies causing the retention issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the high-speed counter retention issue in my Mitsubishi CPU-QO2CPU?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Start by verifying the configuration settings for the high-speed counter in the new CPU. Check for any differences between the old and new CPU settings that could be impacting the retention. Additionally, reviewing the program logic and ensuring proper addressing of the high-speed counter can help in troubleshooting the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there specific steps or considerations to keep in mind when transferring a program involving high-speed counters to a new Mitsubishi CPU?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When transferring a program with high-speed counters to a new CPU, double-check the configuration settings, data registers, and programming logic to ensure a smooth transition. It is crucial to validate the retention of high-speed counter values during the transfer process and adjust any settings as needed to maintain functionality.</p>
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
