
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am interested in understanding the Failure Finding Interval concept specifically in relation to Hidden failures, as discussed in John Moubrays RCM2 methodology. Moubray mentions that in order to determine the probability of a multiple failure, one must calculate the average unavailability of the protective device (Probability">
    <meta name="keywords" content="failure finding interval, rcm2 methodology, hidden failures, protective device availability, probability of failure, unavailability calculation, multiple failure probability, protective device standby mode, uptime and downtime, availability assessment, failure finding alternative methods">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-failure-finding-interval-in-rcm2-methodology-hidden-failures-and-protective-device-availability">
    <title>Understanding Failure Finding Interval in RCM2 Methodology: Hidden Failures and Protective Device Availability | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding Failure Finding Interval in RCM2 Methodology: Hidden Failures and Protective Device Availability | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am interested in understanding the Failure Finding Interval concept specifically in relation to Hidden failures, as discussed in John Moubrays RCM2 methodology. Moubray mentions that in order to determine the probability of a multiple failure, one must calculate the average unavailability of the protective device (Probability">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-failure-finding-interval-in-rcm2-methodology-hidden-failures-and-protective-device-availability">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding Failure Finding Interval in RCM2 Methodology: Hidden Failures and Protective Device Availability | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am interested in understanding the Failure Finding Interval concept specifically in relation to Hidden failures, as discussed in John Moubrays RCM2 methodology. Moubray mentions that in order to determine the probability of a multiple failure, one must calculate the average unavailability of the protective device (Probability">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-failure-finding-interval-in-rcm2-methodology-hidden-failures-and-protective-device-availability"
      },
      "headline": "Understanding Failure Finding Interval in RCM2 Methodology: Hidden Failures and Protective Device Availability",
      "description": "Hello everyone! I am interested in understanding the Failure Finding Interval concept specifically in relation to Hidden failures, as discussed in John Moubrays RCM2 methodology. Moubray mentions that in order to determine the probability of a multiple failure, one must calculate the average unavailability of the protective device (Probability",
      "author": {
        "@type": "Person",
        "name": "Jeong-Rok Choi"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-20",
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
                <h1 class="text-white">Understanding Failure Finding Interval in RCM2 Methodology: Hidden Failures and Protective Device Availability</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jeong-Rok Choi</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1969</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">368</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am interested in understanding the Failure Finding Interval concept specifically in relation to Hidden failures, as discussed in John Moubray's RCM2 methodology. Moubray mentions that in order to determine the probability of a multiple failure, one must calculate the average unavailability of the protective device (Probability of a multiple failure = Probability of failure of the protected function * Average unavailability of the protective device). But how can one accurately estimate or calculate the unavailability of the protective device? It may seem challenging since the protective device is typically in standby mode while the protected device is active or inactive. Is there a way to determine the Uptime and Downtime of the protective device to assess its availability? Additionally, are there alternative methods to identify the Failure Finding Interval aside from Moubray's approach? Thank you for your insights.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, the underlying mathematical concepts may require a more in-depth exploration beyond the scope of this forum. For a comprehensive explanation on how to calculate confidence intervals, please refer to chapter 3 of my book. Thank you. V.Narayan.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tara Anderson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hi Vee, I've received your book and I've just completed Chapter 3. This chapter serves as a valuable guide to recognizing failure trends and establishing inspection schedules for covert malfunctions. While data may not always be easily accessible, the concepts of T/MTBF and availability correlation will be extremely beneficial. I can't wait to delve into the remaining chapters of your book!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kelly Hughes</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear Shelley, I'm pleased that you found the chapter helpful. When it comes to data, it's important to remember that the relationship is logarithmic, so the testing intervals are not overly sensitive to the accuracy of failure data. Published data sources are usually sufficient for most needs, serving as a solid starting point. Surprisingly, operators and maintainers can provide a wealth of useful data if prompted with the right questions. I firmly believe that the claim of 'unavailable data' or worse, 'impossible data availability,' is unfounded - there is always a way to find the necessary information. Don't hesitate to reach out for assistance if needed. Best regards, V. Narayan.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Diana Spencer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I completely agree with you, Vee. While data may not always be easily accessible, valuable information is always within reach. As a matter of fact, information is the powerful combination of knowledge and data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ethan Wright</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can one accurately estimate or calculate the unavailability of the protective device in RCM2 methodology?</h4>
<p class='text-muted'><strong>Answer:</strong> - The unavailability of the protective device can be calculated by considering factors such as uptime, downtime, maintenance activities, and historical performance data.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a way to determine the uptime and downtime of the protective device to assess its availability?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, uptime and downtime of the protective device can be determined by analyzing operational data, maintenance records, and conducting reliability studies.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there alternative methods to identify the Failure Finding Interval apart from John Moubray's RCM2 approach?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, there are alternative methods to identify the Failure Finding Interval, such as Reliability Centered Maintenance (RCM), Failure Modes and Effects Analysis (FMEA), and Fault Tree Analysis (FTA). Each method offers unique perspectives on failure analysis and maintenance strategies.</p>
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
