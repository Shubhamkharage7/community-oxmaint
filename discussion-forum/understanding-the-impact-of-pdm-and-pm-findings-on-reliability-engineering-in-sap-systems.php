
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I work as a reliability engineer and I have a query regarding PdM and PM findings in our companys SAP system. We classify maintenance requests as M1 and M2, with M2 being for repairing assets in case of an unreliability event like a trip, failure, or asset">
    <meta name="keywords" content="reliability engineering in sap systems, pdm and pm findings impact, maintenance requests classification m1 m2, asset repair in sap systems, proactive maintenance in reliability engineering, pm corrective">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-the-impact-of-pdm-and-pm-findings-on-reliability-engineering-in-sap-systems">
    <title>Understanding the Impact of PdM and PM Findings on Reliability Engineering in SAP Systems | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding the Impact of PdM and PM Findings on Reliability Engineering in SAP Systems | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I work as a reliability engineer and I have a query regarding PdM and PM findings in our companys SAP system. We classify maintenance requests as M1 and M2, with M2 being for repairing assets in case of an unreliability event like a trip, failure, or asset">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-the-impact-of-pdm-and-pm-findings-on-reliability-engineering-in-sap-systems">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding the Impact of PdM and PM Findings on Reliability Engineering in SAP Systems | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I work as a reliability engineer and I have a query regarding PdM and PM findings in our companys SAP system. We classify maintenance requests as M1 and M2, with M2 being for repairing assets in case of an unreliability event like a trip, failure, or asset">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-the-impact-of-pdm-and-pm-findings-on-reliability-engineering-in-sap-systems"
      },
      "headline": "Understanding the Impact of PdM and PM Findings on Reliability Engineering in SAP Systems",
      "description": "Hello everyone, I work as a reliability engineer and I have a query regarding PdM and PM findings in our companys SAP system. We classify maintenance requests as M1 and M2, with M2 being for repairing assets in case of an unreliability event like a trip, failure, or asset",
      "author": {
        "@type": "Person",
        "name": "Abid Saood"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-01",
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
                <h1 class="text-white">Understanding the Impact of PdM and PM Findings on Reliability Engineering in SAP Systems</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Abid Saood</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4796</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">398</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I work as a reliability engineer and I have a query regarding PdM & PM findings in our company's SAP system. We classify maintenance requests as M1 & M2, with M2 being for repairing assets in case of an unreliability event like a trip, failure, or asset not functioning as intended. All M2 requests must be investigated. 
My question is: if a problem is identified during PM that requires fixing, is this considered an unreliability event? In my opinion, any corrective action resulting from PM or PdM should be seen as proactive work and not classified as an unreliability event, excluding it from MTBF calculations. Can you please provide guidance on this matter?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Determining the expected life of assets is a crucial aspect of asset management. MTBF, which stands for Mean Time Between Failures, is specifically designed for non-repairable assets to calculate their expected lifespan and ensure overall reliability across the asset population. This calculation can be applied at the component level, focusing on a single failure mode of a specific component type, such as pump seals. By analyzing factors like installation practices, the medium being pumped, and duty cycle, MTBF provides insight into the life expectancy of assets under current operating conditions.

On the other hand, MTTR, or Mean Time To Repair, is tailored for repairable assets that can be restored to their base condition. When using MTTR, it is important to include all corrective interventions, even those identified before catastrophic failure, to determine the frequency of asset maintenance beyond standard inspections.

Proactive inspections play a key role in identifying asset issues, with SAP PM offering a task type to differentiate work identified during PM or condition monitoring orders. This helps evaluate the effectiveness of the maintenance program, with a recommended ratio of 4 or 5:1 corrective tasks for every set of PMs executed.

When addressing the need for investigative actions, it is essential to consider the recurring nature of events and adjust criteria accordingly. Not all issues may warrant in-depth investigations, especially if they involve expected wear components that are reaching the end of their life expectancy. Understanding the context of asset management, risk tolerance, and trigger criteria is vital in determining the appropriate course of action to optimize asset reliability and performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jessica Freeman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>George, I appreciate your detailed response. I face challenges with the corporate maintenance department regarding the investigation of reported M2 events. Let me provide some context. The operations team categorizes all issues, big or small, as unreliability events (M2) to streamline material orders. However, the SAP system automatically flags M2 events as failures and calculates MTBF. Simultaneously, reliability requests are initiated to investigate these unreliability events using the 5-whys approach through the FRACAS system. This process has resulted in an overwhelming 500-600 notifications in just 6 months, many of which are minor issues like "small oil leak" or "fix pump packing." To complicate matters, the corporate maintenance department has set a KPI target of investigating 85% of these notifications to remain compliant. These notifications fall into different categories: IA for issues found during PM, 1B for those discovered during PdM, and 1C for unplanned failures, drips, or defects. I propose focusing on investigating only the 1C category, while the others should not be classified as unreliability events. My suggested procedure is to issue a minor maintenance ticket for any incidents to determine if they are genuine failures or minor issues that can be easily resolved within a limited budget. Only escalate to M2 with the 1C category if further investigation is warranted. Additionally, incidents discovered during PM or PdM should not be classified as failures, as they are part of routine maintenance. I find it unrealistic for a company to investigate 500-600 failures in 6 months. What are your thoughts on this matter?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nina Sanders</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Managing a high volume of issues can be overwhelming, even when using a simple technique like the 5 Whys. It is important to establish clear criteria for triggering a Root Cause Analysis (RCA), which may evolve as you address larger and more critical events. By reviewing the 500-600 collected issues for commonalities, you can narrow them down to a more manageable number, such as 50. Develop criteria to only investigate these 50 issues, presenting this approach to management for prioritization. As you address and resolve these issues, gradually adjust the criteria to include slightly smaller incidents. A strong Root Cause Analysis process should result in fewer than 50 issues on the list over time. Once this occurs, consider revising the criteria further. The goal is to maintain a manageable list of investigations while making progress towards improvement.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Xander Cooper</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Before diving into Predictive Maintenance (PdM) or Preventive Maintenance (PM), it's essential to consider the industry you're working in, such as oil & gas or petrochemical. I am well-versed in both of these industries, so I can confidently say that if you implement PdM, PM may not be necessary. This not only helps save on PM costs, but also ensures that all PdM findings are addressed promptly. By gradually reducing our PM schedule, our plant now relies heavily on PdM. For example, if a small oil leak is detected during PdM, we schedule a repair date alongside a major overhaul, which is determined by the results of PdM analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nathan Scott</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How are maintenance requests classified in the SAP system mentioned in the discussion?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Maintenance requests are classified as M1 and M2, with M2 being for repairing assets in case of unreliability events such as trips, failures, or assets not functioning as intended.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: Should problems identified during preventive maintenance (PM) that require fixing be considered as unreliability events?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The opinion expressed is that any corrective action resulting from PM or Predictive Maintenance (PdM) should be viewed as proactive work and not classified as an unreliability event, hence excluding it from Mean Time Between Failures (MTBF) calculations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Are all M2 requests required to be investigated in the company's SAP system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, all M2 requests for repairing assets in case of unreliability events like trips, failures, or assets not functioning as intended must be investigated.</p>
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
