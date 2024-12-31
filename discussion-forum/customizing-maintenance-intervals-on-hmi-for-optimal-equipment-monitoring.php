
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey there! I am currently working on a project that involves utilizing an Allen-Bradley 1769-L30ER v31 along with a Panelview Plus7 v11. One of the key features of this project is an AOI that monitors the operational time of equipment and sends a notification when a specific maintenance interval">
    <meta name="keywords" content="hmi equipment monitoring, customized maintenance intervals, allen-bradley 1769-l30er v31, panelview plus7 v11, equipment operational time monitoring, aoi notifications">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/customizing-maintenance-intervals-on-hmi-for-optimal-equipment-monitoring">
    <title>Customizing Maintenance Intervals on HMI for Optimal Equipment Monitoring | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Customizing Maintenance Intervals on HMI for Optimal Equipment Monitoring | Oxmaint Community">
    <meta property="og:description" content="Hey there! I am currently working on a project that involves utilizing an Allen-Bradley 1769-L30ER v31 along with a Panelview Plus7 v11. One of the key features of this project is an AOI that monitors the operational time of equipment and sends a notification when a specific maintenance interval">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/customizing-maintenance-intervals-on-hmi-for-optimal-equipment-monitoring">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Customizing Maintenance Intervals on HMI for Optimal Equipment Monitoring | Oxmaint Community">
    <meta name="twitter:description" content="Hey there! I am currently working on a project that involves utilizing an Allen-Bradley 1769-L30ER v31 along with a Panelview Plus7 v11. One of the key features of this project is an AOI that monitors the operational time of equipment and sends a notification when a specific maintenance interval">
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
        "@id": "https://community.oxmaint.com/discussion-forum/customizing-maintenance-intervals-on-hmi-for-optimal-equipment-monitoring"
      },
      "headline": "Customizing Maintenance Intervals on HMI for Optimal Equipment Monitoring",
      "description": "Hey there! I am currently working on a project that involves utilizing an Allen-Bradley 1769-L30ER v31 along with a Panelview Plus7 v11. One of the key features of this project is an AOI that monitors the operational time of equipment and sends a notification when a specific maintenance interval",
      "author": {
        "@type": "Person",
        "name": "Code_E"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-14",
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
                <h1 class="text-white">Customizing Maintenance Intervals on HMI for Optimal Equipment Monitoring</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Code_E</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">282</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">282</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey there! I am currently working on a project that involves utilizing an Allen-Bradley 1769-L30ER v31 along with a Panelview Plus7 v11. One of the key features of this project is an AOI that monitors the operational time of equipment and sends a notification when a specific maintenance interval is reached. To accommodate changes in equipment, I am looking to empower the plant manager to customize the names of these preset maintenance intervals directly on the HMI interface. For instance, they could rename "Grease Bearings" to "Change Gearbox Oil." My concern is whether this customization process is feasible or if it will pose more challenges than benefits. Alternatively, I could assign generic names like "TMR Scheduled Maintenance 1 and 2," but that may require the manager to maintain a separate legend or schedule. (For added context, the project involves a farmer-operated feed mill.) Any advice on this matter would be highly valued.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I may need some clarification on your explanation, but I'd like to offer my input. Are you storing the message in the PLC as a string or using a multi-state indicator to read an integer datatype for the message text? To achieve your goal, consider creating an array in the PLC as shown in attachment 68239. This array can be used by an alarm configuration page on the HMI to display each reason as text, along with a string input box for editing the Maintenance Reason (see attachment 68238). If you need more information or clarification, feel free to ask. Additionally, you can use a similar method to adjust timer values for maintenance alarms, allowing for flexibility in changing equipment and maintenance schedules. By using variables and mathematical conversions, you can easily modify trigger durations and write commands to the PLC for each alarm.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Baxterr</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Baxterr expressed some uncertainty about fully understanding the explanation but offered a contribution. The query was whether the message is stored as a string in the PLC or if a function like a multi-state indicator is used to read an integer data type from the PLC to determine the message text. To achieve the desired outcome, creating an array in the PLC is suggested. This array can be utilized in an HMI alarm configuration page to display each reason in text, along with a string input box for editing the Maintenance Reason. Additionally, a similar process can be applied to adjust timer values that trigger maintenance alarms to accommodate changing equipment and schedules. Using variables in timers instead of fixed numbers, mathematical conversions can be made between milliseconds, seconds, minutes, and hours, with write commands sent to the PLC for each alarm trigger duration adjustment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Baxterr</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to express my gratitude for your suggestion, as it really pinpointed the issue. After running a test application, I was pleased to see that it performed exactly as I had envisioned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Code_E</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We are pleased to provide assistance. It's great to be of help!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Baxterr</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Can I customize maintenance interval names directly on the HMI interface using Allen-Bradley 1769-L30ER v31 and Panelview Plus7 v11?
- Yes, you can empower the plant manager to customize the names of preset maintenance intervals directly on the HMI interface, allowing for flexibility in naming conventions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the benefits of customizing maintenance interval names on the HMI interface?</h4>
<p class='text-muted'><strong>Answer:</strong> - Customizing maintenance interval names enables the plant manager to align the intervals with specific maintenance tasks or equipment requirements, enhancing clarity and ease of monitoring.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any challenges associated with customizing maintenance interval names on the HMI interface?</h4>
<p class='text-muted'><strong>Answer:</strong> - While customization offers flexibility, it is essential to ensure that the process is user-friendly and does not introduce complexities that outweigh the benefits of personalized naming conventions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is it possible to assign generic names to maintenance intervals as an alternative to customization?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, assigning generic names like "TMR Scheduled Maintenance 1 and 2" is an option, but it may require the manager to maintain a separate legend or schedule for clarity and reference.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How can customizing maintenance intervals on the HMI interface benefit a farmer-operated feed mill project?</h4>
<p class='text-muted'><strong>Answer:</strong> - Customizing maintenance intervals can enhance equipment monitoring and maintenance efficiency, empowering the plant manager to tailor maintenance notifications to specific tasks and equipment components in a farmer-operated feed mill setting.</p>
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
