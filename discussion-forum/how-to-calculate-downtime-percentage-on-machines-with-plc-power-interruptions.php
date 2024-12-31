
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone! Currently, we are in the process of determining the downtime percentage on our machines. However, this calculation is only accurate when the PLC has a constant power supply. The issue arises during our routine 5 to 10-hour preventive maintenance sessions, where we need to factor in the">
    <meta name="keywords" content="plc downtime calculation, machine downtime percentage, preventive maintenance downtime, power interruptions in plc, plc power supply issues, downtime analysis strategy, calculating downtime with plc interruptions">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-calculate-downtime-percentage-on-machines-with-plc-power-interruptions">
    <title>How to Calculate Downtime Percentage on Machines with PLC Power Interruptions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Calculate Downtime Percentage on Machines with PLC Power Interruptions | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone! Currently, we are in the process of determining the downtime percentage on our machines. However, this calculation is only accurate when the PLC has a constant power supply. The issue arises during our routine 5 to 10-hour preventive maintenance sessions, where we need to factor in the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-calculate-downtime-percentage-on-machines-with-plc-power-interruptions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Calculate Downtime Percentage on Machines with PLC Power Interruptions | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone! Currently, we are in the process of determining the downtime percentage on our machines. However, this calculation is only accurate when the PLC has a constant power supply. The issue arises during our routine 5 to 10-hour preventive maintenance sessions, where we need to factor in the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-calculate-downtime-percentage-on-machines-with-plc-power-interruptions"
      },
      "headline": "How to Calculate Downtime Percentage on Machines with PLC Power Interruptions",
      "description": "Greetings everyone! Currently, we are in the process of determining the downtime percentage on our machines. However, this calculation is only accurate when the PLC has a constant power supply. The issue arises during our routine 5 to 10-hour preventive maintenance sessions, where we need to factor in the",
      "author": {
        "@type": "Person",
        "name": "erock21"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-24",
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
                <h1 class="text-white">How to Calculate Downtime Percentage on Machines with PLC Power Interruptions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>erock21</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">293</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">18</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone! Currently, we are in the process of determining the downtime percentage on our machines. However, this calculation is only accurate when the PLC has a constant power supply. The issue arises during our routine 5 to 10-hour preventive maintenance sessions, where we need to factor in the time without power into our downtime percentage calculation.

I am considering a method involving calculating the PLC_Counted_Minutes_Since_Shiftchange (triggered by a specific condition) and subtracting this from the Actual_Minutes_Since_Shiftchange (yet to be determined) in order to incorporate this into our downtime analysis.

Does this approach seem feasible, or is there a more effective strategy to address this issue? I am struggling to devise a logical solution to calculate the Actual_Minutes_Since_Shiftchange following a powerup. Any guidance on this matter would be highly valued! Unfortunately, maintaining a constant power supply to the PLC is not a viable option.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I understand that calculations cannot be done without power, but I am interested in determining the duration of the power outage once our system is back up and running. Despite searching various forums, I have not found a definitive solution to this issue. Additionally, I have real-time clock functions available on this programmable logic controller (PLC) that may help in tracking the outage duration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>erock21</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Instead of counting minutes, utilize timestamps and mathematical calculations to track downtime efficiently. Record the current time in an N file while running, including the hour and minute (and day if necessary for periods longer than 24 hours). Prior to executing the logic in the scan, use the first scan bit as a cue to determine the time difference and save the result. It is advisable to incorporate extra logic to store multiple power-off periods to prevent loss of data in case of multiple power cycles.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Alternatively, you have the option to track the duration of power-on time. This is the approach I typically take.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Setting up a secondary budget PLC, like a micro820, to operate alongside your primary one on a 24-hour basis can be a beneficial strategy. Implementing a UPS for this PLC is recommended, as it will consume minimal power. This secondary PLC will predominantly run timers during times when the plant is without power, allowing you to track downtime by recording it into an array register at regular intervals, whether daily or weekly. I concur with Joseph's viewpoint that having a second PLC in operation can offer advantages, as it ensures that scheduled record intervals remain uninterrupted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the great advice provided by plvlce! I will definitely give it a try and provide feedback on how it worked. Your input is much appreciated!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>erock21</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can downtime percentage be accurately calculated on machines with PLC power interruptions?</h4>
<p class='text-muted'><strong>Answer:</strong> - One method involves calculating the PLC_Counted_Minutes_Since_Shiftchange and subtracting this from the Actual_Minutes_Since_Shiftchange to factor in time without power during preventive maintenance sessions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a more effective strategy to address downtime calculation issues due to power interruptions during preventive maintenance?</h4>
<p class='text-muted'><strong>Answer:</strong> - While maintaining a constant power supply to the PLC is not feasible, exploring alternative methods like the one mentioned above may help in accurate downtime analysis.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can the Actual_Minutes_Since_Shiftchange be determined following a powerup without a constant power supply to the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - By implementing a logical approach that involves tracking specific conditions and calculations, such as the one proposed in the thread, the Actual_Minutes_Since_Shiftchange can be calculated to incorporate power interruptions into downtime analysis.</p>
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
