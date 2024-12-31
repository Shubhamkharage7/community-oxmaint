
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, according to the specifications, there are two pumps designated as Duty / Standby, with their operation based on the water level. However, in a unique scenario where the water level is very high, they want both pumps to run simultaneously to quickly lower the water level. Typically,">
    <meta name="keywords" content="activate both pumps, duty standby, lead lag approach, water level control, pump operation, exceptional scenario, high water level, pump engagement, immediate action, duty pump, standby pump, lead pump, lag pump, pump activation point, high-high level">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/when-to-activate-both-pumps-duty-standby-vs-lead-lag-approach">
    <title>When to Activate Both Pumps: Duty / Standby vs. Lead / Lag Approach | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="When to Activate Both Pumps: Duty / Standby vs. Lead / Lag Approach | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, according to the specifications, there are two pumps designated as Duty / Standby, with their operation based on the water level. However, in a unique scenario where the water level is very high, they want both pumps to run simultaneously to quickly lower the water level. Typically,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/when-to-activate-both-pumps-duty-standby-vs-lead-lag-approach">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="When to Activate Both Pumps: Duty / Standby vs. Lead / Lag Approach | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, according to the specifications, there are two pumps designated as Duty / Standby, with their operation based on the water level. However, in a unique scenario where the water level is very high, they want both pumps to run simultaneously to quickly lower the water level. Typically,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/when-to-activate-both-pumps-duty-standby-vs-lead-lag-approach"
      },
      "headline": "When to Activate Both Pumps: Duty / Standby vs. Lead / Lag Approach",
      "description": "Hello everyone, according to the specifications, there are two pumps designated as Duty / Standby, with their operation based on the water level. However, in a unique scenario where the water level is very high, they want both pumps to run simultaneously to quickly lower the water level. Typically,",
      "author": {
        "@type": "Person",
        "name": "slick_william"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-24",
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
                <h1 class="text-white">When to Activate Both Pumps: Duty / Standby vs. Lead / Lag Approach</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>slick_william</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">751</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">226</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, according to the specifications, there are two pumps designated as Duty / Standby, with their operation based on the water level. However, in a unique scenario where the water level is very high, they want both pumps to run simultaneously to quickly lower the water level. Typically, "Duty / Standby" means one pump is active while the other remains inactive. This exceptional situation calls for both pumps to be engaged for immediate action. 
Has anyone encountered this situation before? Is "Duty / Standby" still the most logical choice here? Personally, I would refer to this setup as "Lead / Lag," where the Lag pump's activation point matches the high-high level, even if it is usually inactive. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In my experience working with lead/lag logic, I have found that most facilities utilize an alternating system to ensure each pump has equal runtime hours. While one pump is in lead service, the other acts as a lag pump and will kick in during high-demand situations. This setup is commonly seen in water utilities, especially for underdrain, sump, and disinfection pumps. These systems are typically controlled by relay logic and a mechanical alternator that feeds information into a PLC5. I encountered many of these setups during my time in the water utility industry in the early 2000s. Hope this information proves useful to you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>saultgeorge</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up multiple pumps in a sump, labeling them as Pump 1 and Pump 2 can simplify control. Adding a 3 position switch to each pump with markings for Hand, Off, and Auto, and then connecting them with a three position switch labeled Pump 1, Auto, Pump 2, allows for flexibility in operation. With both pump switches set to "Auto", the third switch offers the option of Pump 1 leading, Pump 2 leading, or alternating between the two. This setup provides customizable control over the pumps' performance. Feel free to give your system a unique name or designation for easy reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zimmer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Primary vs. Secondary Education: Understanding the Difference and Importance</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a plant distribution network, it is common to implement a duty/standby arrangement to maintain consistent pressure levels. When pressure falls below a certain threshold (X), a second pump automatically activates until the pressure rises above a specified level (Y) and then shuts down. This setup ensures uninterrupted operation and provides redundancy in case one pump is unable to meet the demand. Having a standby pump ready to take over when needed is crucial for maintaining system efficiency and reliability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The setup of wastewater duplex pump stations commonly includes a feature where the pumps operate at maximum capacity during rainstorms or snow melting to avoid sewage overflow into residential basements. This arrangement is crucial for preventing potential damage and health hazards caused by sewer backups.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Running all your pumps for the same amount of time is a common mistake that can lead to overlapping failures when you need them most. To prevent this, stagger the run times of your pumps to avoid this issue. Maintaining a proper run sequence is crucial to ensure the efficiency and effectiveness of your pumps. This practice can prevent potential failures and keep your equipment running smoothly when it is needed the most. I have witnessed this mistake occur on multiple occasions and it can easily be avoided with a simple adjustment in scheduling.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The frequency of usage for each pump is a topic of frequent discussion among experts. Personally, I believe in utilizing them equally to ensure balanced wear and tear. However, it's important to note that simply basing the usage on hours can be misleading. For instance, if a pump is replaced and its hours are reset, the new pump may end up running significantly less for a long period of time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rupej</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In 2006, the pumps in a utility I was working for were set up in a duty/standby configuration, where one pump would only run if the other failed. However, this setup did not guarantee that both pumps would always be in optimal condition when needed. Often, the standby pump would experience issues from sitting idle for extended periods. To address this issue, I implemented a new system of alternation or sequencing alternation for multiple pumps to evenly distribute wear and prevent issues caused by inactivity. While there is logic behind the concern of having pumps with uneven hours, in practice, it has not proven to be a significant factor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>GaryS advised against running all pumps for the same duration, suggesting that staggering their run times can prevent overlapping failures. This will ensure that the pumps are operational when needed the most, maintaining the efficiency of the run sequence. It is crucial to avoid running all pumps simultaneously to prevent potential issues. Consider scheduling pumps to run on a 70/30 basis to enhance overall performance and avoid common pitfalls.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cardosocea suggested that setting up pumps to run on a 70/30 split can provide benefits from both strategies, whether it's on weekdays or weekends. The transition code for this setup will be an intriguing aspect to explore.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy noted the stark contrast between weekday and weekend tasks. It's evident that you may not have had the experience of working in a maintenance role before.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1.  What is the difference between Duty / Standby and Lead / Lag pump operation approaches?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Duty / Standby entails one pump being active while the other remains inactive, typically used for backup purposes. On the other hand, Lead / Lag involves alternating pump operation based on specific criteria, with the Lag pump activated when certain conditions are met.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  When should both pumps be activated simultaneously in a Duty / Standby setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Both pumps may be simultaneously activated in unique scenarios where immediate action is required, such as lowering water levels quickly during exceptional high water level situations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can the Lead / Lag approach be beneficial in managing water levels?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Lead / Lag approach allows for more flexibility in pump operation, enabling pumps to switch roles based on specific conditions like high water levels, ensuring efficient water management.</p>
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
