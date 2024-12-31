
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone. I am currently developing a system that requires two alarm banners with different event subscriptions: one for a specific area known as SpecialArea and another for the entire plant excluding SpecialArea. The second banner is already in place at the plant, but it is currently reading all">
    <meta name="keywords" content="alarm event banners, ftview alarm configuration, specialarea exclusion in alarm banners, configuring plant alarm subscriptions, ftview alarm system setup, alarm event filtering in ftview, optim">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/configuring-alarm-event-banners-in-ftview-excluding-specialarea-subscription">
    <title>Configuring Alarm Event Banners in FTView: Excluding SpecialArea Subscription | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Configuring Alarm Event Banners in FTView: Excluding SpecialArea Subscription | Oxmaint Community">
    <meta property="og:description" content="Hello everyone. I am currently developing a system that requires two alarm banners with different event subscriptions: one for a specific area known as SpecialArea and another for the entire plant excluding SpecialArea. The second banner is already in place at the plant, but it is currently reading all">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/configuring-alarm-event-banners-in-ftview-excluding-specialarea-subscription">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Configuring Alarm Event Banners in FTView: Excluding SpecialArea Subscription | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone. I am currently developing a system that requires two alarm banners with different event subscriptions: one for a specific area known as SpecialArea and another for the entire plant excluding SpecialArea. The second banner is already in place at the plant, but it is currently reading all">
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
        "@id": "https://community.oxmaint.com/discussion-forum/configuring-alarm-event-banners-in-ftview-excluding-specialarea-subscription"
      },
      "headline": "Configuring Alarm Event Banners in FTView: Excluding SpecialArea Subscription",
      "description": "Hello everyone. I am currently developing a system that requires two alarm banners with different event subscriptions: one for a specific area known as SpecialArea and another for the entire plant excluding SpecialArea. The second banner is already in place at the plant, but it is currently reading all",
      "author": {
        "@type": "Person",
        "name": "Revnus"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-30",
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
                <h1 class="text-white">Configuring Alarm Event Banners in FTView: Excluding SpecialArea Subscription</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">413</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">464</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone. I am currently developing a system that requires two alarm banners with different event subscriptions: one for a specific area known as "SpecialArea" and another for the entire plant excluding "SpecialArea". The second banner is already in place at the plant, but it is currently reading all alarms due to the lack of a configured subscription. I am aware that it is possible to manually configure a subscription for this second banner by selecting everything except for the "SpecialArea". However, I am hesitant to do this as it would require constant updates whenever new alarms or data shortcuts are created by plant engineers. Therefore, I am looking for a solution where the subscription excludes "SpecialArea". Is this feasible?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Can someone provide assistance?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the difference between ME and SE? Understanding the distinctions between ME (Myalgic Encephalomyelitis) and SE (Systematic Exertion) can help in accurately diagnosing and treating these conditions. Let's delve into the characteristics and symptoms of each to shed light on their unique attributes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface asked: "Is it ME or SE?" Click to learn more about SEO (Search Engine Optimization).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance your alarm system, simply add another alarm server. In the "Event Subscriptions" tab of the alarm banner, utilize the "Scope" button to select the server that contains the desired events. Customize your alarms by placing them in the server of your choice. Easily transfer alarms from one server to another by using the export function. This streamlined process ensures seamless management of your alarm system across multiple servers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Cheeseface's suggestion to add another alarm server and utilize the "Scope" button in the "Event Subscriptions" tab to select the desired events, you can easily transfer alarms between servers using the export function. While this solution seems promising, there may be concerns about the potential impact of adding a second alarm server. Will this affect communication or require additional services on the host machine? It's essential to consider any potential interference with the existing alarm server. Thank you for the helpful advice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Revnus</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When multiple alarm servers are located on the same machine, they operate within a single Windows service. This setup allows for centralized management and efficient monitoring of alarms across the network. By consolidating multiple servers under one service, IT administrators can streamline operations and improve system performance. The shared service configuration simplifies maintenance and troubleshooting tasks while ensuring consistent functionality and reliability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Is it possible to configure an alarm event banner in FTView that excludes a specific area such as "SpecialArea"?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to configure the alarm event banner to exclude a specific area like "SpecialArea" by setting up a subscription that filters out alarms from that area.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I set up a subscription for the alarm event banner to exclude "SpecialArea" without the need for constant manual updates?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One approach to avoid constant manual updates is to create a dynamic subscription that automatically excludes alarms from "SpecialArea" as they are created or modified by plant engineers.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What are the potential challenges of manually configuring a subscription for the alarm event banner to exclude "SpecialArea"?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Manually configuring a subscription may require continuous monitoring and updating whenever new alarms or data shortcuts are added, which can be time-consuming and prone to errors.</p>
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
