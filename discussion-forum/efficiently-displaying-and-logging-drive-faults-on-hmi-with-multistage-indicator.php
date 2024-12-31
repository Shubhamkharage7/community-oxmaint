
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am receiving multiple fault words (as a DINT) from a Drive to a Compactlogix L33ER controller. These errors need to be displayed on a PanelView Plus 600 HMI and logged in an automation system. To efficiently show the status of error messages on the HMI, a multistage indicator">
    <meta name="keywords" content="efficiently displaying, logging drive faults, hmi, multistage indicator, fault words, dint, compactlogix l33er, controller, panelview plus 600, error messages, multistage indicator, software fault">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/efficiently-displaying-and-logging-drive-faults-on-hmi-with-multistage-indicator">
    <title>Efficiently Displaying and Logging Drive Faults on HMI with Multistage Indicator | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Efficiently Displaying and Logging Drive Faults on HMI with Multistage Indicator | Oxmaint Community">
    <meta property="og:description" content="I am receiving multiple fault words (as a DINT) from a Drive to a Compactlogix L33ER controller. These errors need to be displayed on a PanelView Plus 600 HMI and logged in an automation system. To efficiently show the status of error messages on the HMI, a multistage indicator">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/efficiently-displaying-and-logging-drive-faults-on-hmi-with-multistage-indicator">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Efficiently Displaying and Logging Drive Faults on HMI with Multistage Indicator | Oxmaint Community">
    <meta name="twitter:description" content="I am receiving multiple fault words (as a DINT) from a Drive to a Compactlogix L33ER controller. These errors need to be displayed on a PanelView Plus 600 HMI and logged in an automation system. To efficiently show the status of error messages on the HMI, a multistage indicator">
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
        "@id": "https://community.oxmaint.com/discussion-forum/efficiently-displaying-and-logging-drive-faults-on-hmi-with-multistage-indicator"
      },
      "headline": "Efficiently Displaying and Logging Drive Faults on HMI with Multistage Indicator",
      "description": "I am receiving multiple fault words (as a DINT) from a Drive to a Compactlogix L33ER controller. These errors need to be displayed on a PanelView Plus 600 HMI and logged in an automation system. To efficiently show the status of error messages on the HMI, a multistage indicator",
      "author": {
        "@type": "Person",
        "name": "bgtorque"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-01",
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
                <h1 class="text-white">Efficiently Displaying and Logging Drive Faults on HMI with Multistage Indicator</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bgtorque</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1429</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">278</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am receiving multiple fault words (as a DINT) from a Drive to a Compactlogix L33ER controller. These errors need to be displayed on a PanelView Plus 600 HMI and logged in an automation system. To efficiently show the status of error messages on the HMI, a multistage indicator can be utilized as each bit represents a different issue. However, multiple faults can occur simultaneously within each fault word, leading to several bits being high at the same time.

For example, a Software Fault word of 33088 indicates that Bits 6, 8, and 15 are high, which corresponds to EtherCAT, U+ gate driver, and lem2 issues. To display the specific errors or statuses, a code must be implemented on the small HMI screens to show the relevant information. Furthermore, the DINT value of 33088 will be passed to the automation system for logging, requiring a simple VB decoder to interpret the information.

In summary, the challenge lies in efficiently coding the HMI to display the error statuses given the limited screen space, while also ensuring the faults are accurately logged in the automation system for future analysis.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To determine if the sixth bit of the Fault_Word_DINT is set, a Boolean variable named Bit6 is assigned the result of the operation (Fault_Word_DINT AND 64) being not equal to zero.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you looking for a screen that allows you to specify descriptions for each bit and assign a corresponding icon that can be animated based on its value?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance the functionality of the HMI display, I recommend implementing a method where the PLC scans through alarm bits to determine active alarms. By assigning corresponding alarm text to the displayed tag, users can easily identify alarms. For instance, using an array like INT[3] can efficiently manage up to 48 alarms. Each alarm message is displayed for a brief 1-second period before transitioning to the next. For simplified implementation, consider consolidating alarms into a single DINT and adjusting loop index limits accordingly. This eliminates the need for MOD instruction and streamlines the process. Just update the loop index range to 0-31 as mentioned in the code snippet "Alarms_TopStop_Index_Bit".</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An effective method to achieve this is by setting the multistate indicator in LSB mode, focusing on the least significant bit to prioritize error display. By organizing the bits in order of severity, you can ensure that all errors are visible. Alternatively, creating a block with 32 small indicators can provide a comprehensive overview, allowing users to click on the block for more detailed information. 

Another strategy involves utilizing PLC logic to rotate values using a timer, with a local message display or multistate indicator then showcasing the decoded error in real-time. This approach offers a dynamic and efficient solution for error monitoring and management.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why are you hesitant to utilize the alarm object in PvP matches? - Keith</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The alarm banner on the PV+ becomes difficult to read on smaller displays, especially on the 400s where it is completely illegible. It can be frustrating when the alarm banner pops up and covers the entire screen, disrupting your work. While this is the common practice, I believe a scrolling display at the bottom would be more convenient, allowing for uninterrupted access to other controls while managing new messages.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Joseph_e2 pointed out that the built-in alarm banner on the PV+ can be difficult to read on smaller displays, especially on the 400s model. Additionally, the pop-up nature of the alarm banner can be disruptive while working. While this is a common approach, Joseph_e2 prefers a scrolling display at the bottom of the screen to keep other controls visible and accessible. Increasing font size may help, but limitations due to screen size remain. 

Joseph_e2 agrees with the suggestion to improve the alarm system. Their team utilizes the Alarm Setup feature and has created a page with an Alarm Status List to view all current alarms simultaneously. They have replaced the default banner with a message display on each screen that cycles through current alarms, similar to the method shared.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>@joeseph_e2 I found your alarm display sequencer interesting, but I am having trouble locating where you are setting this bit. My guess is that it is being set at the end of the rung above it, possibly while the timer is in operation. However, not being able to spot it there has me a bit puzzled.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The level above has followed NEQ guidelines for every DINT in the array.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was just checking to see if there was one available. Found it. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In certain instances, the HMI may briefly display the most recent active alarm alongside a new alarm to ensure real-time updates. This feature also dictates the visibility of the alarm banner; when deactivated, the banner vanishes to reveal a green box with a message such as "No top stop alarms". This dual function acts as an extra precaution to ensure accuracy and efficiency in alarm monitoring.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I think it's a great idea to implement this in a DINT[4] array. Currently, my ST script is counting the set bits in the alarm array, which I plan to replace the NEQ with. I am also considering incorporating a priority integer array to enhance the text coloring in the animation. However, I am still unsure about this addition due to potential scope creep.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I efficiently display multiple drive faults on an HMI with a multistage indicator?
- To efficiently display multiple drive faults on an HMI, you can utilize a multistage indicator where each bit represents a different fault. This allows for a clear visualization of the various error statuses.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I log drive faults from a Compactlogix controller to an automation system?</h4>
<p class='text-muted'><strong>Answer:</strong> - To log drive faults from a Compactlogix controller to an automation system, you can pass the fault words as DINT values to the automation system. A simple VB decoder can then be implemented to interpret and log the specific fault information.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What should I do if multiple faults occur simultaneously within a fault word?</h4>
<p class='text-muted'><strong>Answer:</strong> - If multiple faults occur simultaneously within a fault word, you can implement a code on the HMI screens to display the relevant error information. By using a multistage indicator and decoding the DINT value, you can accurately display and log the specific fault statuses.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I handle limited screen space on the HMI while displaying drive fault statuses?</h4>
<p class='text-muted'><strong>Answer:</strong> - To handle limited screen space on the HMI while displaying drive fault statuses, consider using concise codes or symbols to represent different faults. Utilizing a multistage indicator and implementing a clear error code system can help efficiently convey the relevant information within the space constraints.</p>
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
