
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am seeking assistance with a current issue I am facing concerning an ABB drive. The problem I am encountering is that the ABB drive supplying power to a large fan is unable to reach 100% speed without tripping due to supply loss, even though there is no fault">
    <meta name="keywords" content="abb acs800-07 vsd, troubleshooting abb drive, ramping to 100% speed issue, large fan power supply, supply loss tripping, fault indication, spec fans, drive inactivity, code traps, abb service support">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-abb-acs800-07-vsd-issue-on-ramping-to-100-speed">
    <title>Troubleshooting ABB ACS800-07 VSD: Issue on ramping to 100% speed | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting ABB ACS800-07 VSD: Issue on ramping to 100% speed | Oxmaint Community">
    <meta property="og:description" content="I am seeking assistance with a current issue I am facing concerning an ABB drive. The problem I am encountering is that the ABB drive supplying power to a large fan is unable to reach 100% speed without tripping due to supply loss, even though there is no fault">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-abb-acs800-07-vsd-issue-on-ramping-to-100-speed">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting ABB ACS800-07 VSD: Issue on ramping to 100% speed | Oxmaint Community">
    <meta name="twitter:description" content="I am seeking assistance with a current issue I am facing concerning an ABB drive. The problem I am encountering is that the ABB drive supplying power to a large fan is unable to reach 100% speed without tripping due to supply loss, even though there is no fault">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-abb-acs800-07-vsd-issue-on-ramping-to-100-speed"
      },
      "headline": "Troubleshooting ABB ACS800-07 VSD: Issue on ramping to 100% speed",
      "description": "I am seeking assistance with a current issue I am facing concerning an ABB drive. The problem I am encountering is that the ABB drive supplying power to a large fan is unable to reach 100% speed without tripping due to supply loss, even though there is no fault",
      "author": {
        "@type": "Person",
        "name": "Ralphs_coal"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-21",
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
                <h1 class="text-white">Troubleshooting ABB ACS800-07 VSD: Issue on ramping to 100% speed</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Ralphs_coal</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">374</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">497</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am seeking assistance with a current issue I am facing concerning an ABB drive. The problem I am encountering is that the ABB drive supplying power to a large fan is unable to reach 100% speed without tripping due to supply loss, even though there is no fault indication. I have two drives operating the exact same spec fans, but I only experience issues with one drive when it has been inactive for extended periods. When ramping from 98-100% speed, the drive will trip. I have attempted various solutions such as code traps, reaching out to ABB service support, and changing hardware. Occasionally, the drive will inconsistently reach 100% speed, but once it does, it remains stable until the next maintenance outage. Currently, I am running the drive at 98% after the maintenance period. I am seeking expert assistance to address this persistent issue. Any help would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After reaching optimal temperature, could you please restore it to its full capacity of 100%? This is quite unusual...</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, the system did not function properly, running at 95% for 24 hours before attempting to ramp up to 100%, but encountering the same issue. It is indeed a peculiar situation, with no response from the ABB service team.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ralphs_coal</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can you provide additional information such as the VFD's nominal power, nominal input voltage, power supply type (direct to grid/transformer, etc), and acceleration ramp time? What is the motor's nominal power and nominal speed? In what scenarios does the VFD decrease output voltage without notification, particularly when attempting to exceed 95% of the nominal motor speed, maximum reference frequency set on the VFD, or another speed parameter?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>iop95</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If your centrifugal fan is experiencing power loss, it is likely due to a drop in its power supply. As fan speed increases by just 2%, the drive will require significantly more power. For a detailed explanation, refer to the Third Fan Law found in the link below: Understanding the Basic Fan Laws - Axair Fans. Gain insight into pressure, power, and air volume with our practical examples. Visit our website for more information. Remember to monitor supply voltage across the fan speed spectrum.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my ABB ACS800-07 VSD tripping when ramping to 100% speed?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to supply loss during the ramp-up process, especially after extended periods of inactivity. It's recommended to investigate the power supply stability and potential voltage fluctuations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are some troubleshooting steps to resolve the issue of the drive tripping during ramping?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Some suggested troubleshooting steps include checking the power supply quality, reviewing the drive's configuration and settings, ensuring proper ventilation and cooling for the drive, and examining the motor and fan system for any anomalies.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why does the drive inconsistently reach 100% speed and remain stable after doing so?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The intermittent success in reaching and maintaining 100% speed could be due to various factors, such as temporary improvements in power supply conditions or other external influences. It's important to investigate these instances further to identify the root cause.</p>
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
