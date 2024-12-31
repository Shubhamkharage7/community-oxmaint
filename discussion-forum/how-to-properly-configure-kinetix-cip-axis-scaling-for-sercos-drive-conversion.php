
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am in the process of converting SERCOS drives to Kinetix CIP and need to properly configure the scaling. While I dont have the mechanical coupling details, I do have information from the old axis including Drive Resolution, Feedback Resolution, Conversion Constant, and Position Unwind. It seems">
    <meta name="keywords" content="kinetix cip, axis scaling, sercos drive conversion, configure scaling, drive resolution, feedback resolution, conversion constant, position unwind, direct scaling factor entry, from calculator mode, mechanical coupling, axis configuration, motion resolution">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-properly-configure-kinetix-cip-axis-scaling-for-sercos-drive-conversion">
    <title>How to Properly Configure Kinetix CIP Axis Scaling for SERCOS Drive Conversion | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Properly Configure Kinetix CIP Axis Scaling for SERCOS Drive Conversion | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am in the process of converting SERCOS drives to Kinetix CIP and need to properly configure the scaling. While I dont have the mechanical coupling details, I do have information from the old axis including Drive Resolution, Feedback Resolution, Conversion Constant, and Position Unwind. It seems">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-properly-configure-kinetix-cip-axis-scaling-for-sercos-drive-conversion">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Properly Configure Kinetix CIP Axis Scaling for SERCOS Drive Conversion | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am in the process of converting SERCOS drives to Kinetix CIP and need to properly configure the scaling. While I dont have the mechanical coupling details, I do have information from the old axis including Drive Resolution, Feedback Resolution, Conversion Constant, and Position Unwind. It seems">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-properly-configure-kinetix-cip-axis-scaling-for-sercos-drive-conversion"
      },
      "headline": "How to Properly Configure Kinetix CIP Axis Scaling for SERCOS Drive Conversion",
      "description": "Hello everyone, I am in the process of converting SERCOS drives to Kinetix CIP and need to properly configure the scaling. While I dont have the mechanical coupling details, I do have information from the old axis including Drive Resolution, Feedback Resolution, Conversion Constant, and Position Unwind. It seems",
      "author": {
        "@type": "Person",
        "name": "Fredk"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-16",
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
                <h1 class="text-white">How to Properly Configure Kinetix CIP Axis Scaling for SERCOS Drive Conversion</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Fredk</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">494</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">166</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am in the process of converting SERCOS drives to Kinetix CIP and need to properly configure the scaling. While I don't have the mechanical coupling details, I do have information from the old axis including Drive Resolution, Feedback Resolution, Conversion Constant, and Position Unwind. It seems like this information should be sufficient to configure the CIP axis scaling, particularly if I utilize the Direct Scaling Factor Entry mode instead of the From Calculator mode which relies on all mechanical coupling inputs for value calculation.

The comparison between the old and new configurations, shown in the attached image, reveals that the Feedback Resolution for the new CIP axis is now double what it used to be (highlighted in green). My interpretation is that I will now receive twice the counts for a given movement. Therefore, I am considering simply multiplying my three values in the CIP scaling (Conversion Constant, Motion Resolution, Position Unwind) by 2 to align with this change.

Overall, I would appreciate any insights on whether my understanding and approach are correct. Thank you for any assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I initially believed I had a proper understanding of the configuration provided above, but upon commissioning it, I realized it is not functioning correctly for the linear axes. This issue cannot be simply attributed to a 2x factor. I am currently trying to decipher how the three values within the Sercos configuration below can be translated into actual inches per motor revolution: Drive Resolution: 2000000 (drive counts per motor rev), Feedback resolution: 1048576 (feedback counts per rev), Conversion constant: 252111 (drive counts per 1 inch). 

The axis in question differs from my previous post as it involves a direct drive draw roll with an approximate circumference of 7.875 inches. Consequently, it should equate to 7.875 inches per motor rev. However, the numbers in the Sercos config do not align with this, leaving me puzzled. I aim to make sense of the original Sercos values with this uncomplicated axis so I can then apply the logic to other linear axes facing similar issues (which are characterized by intricate mechanical ratios I am attempting to circumvent by utilizing information from the initial Sercos config). 

In an attempt to derive a ratio from the provided values, I divided 1048576 (feedback counts per rev) by 252111 (drive counts per 1 inch), yielding 4.1592 inches per motor rev. Nonetheless, this figure does not correspond to the actual 7.875 inches per motor rev experienced in reality. Additionally, I am perplexed by the conflicting information stating both 1048576 (feedback counts per rev) and 2000000 (drive counts per motor rev). I am uncertain which count per revolution figure I should use for ratio calculations. 

Interestingly, the rotary axes I previously tested performed flawlessly (360-degree commands resulted in actual 360-degree motion) using the method outlined in my initial post. This issue solely pertains to the linear axes. Any assistance provided would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fredk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance precision and accuracy, drive counts are divided by inch/Rev, resulting in 7.933 inches per revolution. The axis is then scaled accordingly by these drive counts. The feedback counts, determined by the pulses per revolution, are utilized internally by the drive for calculating drive counts effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As I was typing out the calculations above, it suddenly clicked for me. By dividing 252111 by 2000000, I arrived at a ratio of 7.933, which closely aligns with my manual measurement of 7.875. This ratio will now be used to calculate the ratios for the other axes. However, I am still puzzled by the feedback resolution of 1048576 counts per revolution. The drive resolution is 2000000 counts per motor revolution, while the feedback resolution is 1048576 counts per revolution. The conversion constant is 252111 counts per inch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fredk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Robertmee's advice, the drive counts should be divided by inch/Rev, resulting in 7.933 inches per revolution. The axis scaling is based on these drive counts, while the feedback counts are calculated from pulses per revolution and used internally by the drive for determining drive counts. Thank you, Robert, for clarifying this point. It seems that the feedback resolution is primarily an internal value and may not affect ratio calculations. Moving forward, I may not need to focus on it as much, but I'm still unsure about the distinction between drive and feedback resolution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Fredk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am intrigued by the discovery that the kinetix 6300/6500 series has been discontinued, adding to the list of obsolete products alongside our existing kinetix 6000 collection. This has prompted me to delve deeper into researching viable alternatives tonight. On a side note, I find the axis configuration of the newer models much more visually appealing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Patrickmoneyy expressed his surprise at discovering that the popular Kinetix 6000 series has been discontinued, including the 6300/6500 models. This has sparked his interest in researching the latest options available. He noted a preference for the design of the axis config and mentioned the Kinetix 5700 as a superior replacement for the 6500 series. The Kinetix 5700 offers advancements in CIP Safety, load observer adaptive tuning, and other features, making it a preferred choice. Having worked with various Kinetics models, including the 6000, 6500, and now the 5700, Patrickmoneyy highly recommends the 5700 for its enhanced feature set.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1. What information is essential for configuring Kinetix CIP axis scaling for SERCOS drive conversion?</h4>
<p class='text-muted'><strong>Answer:</strong> - Essential information includes Drive Resolution, Feedback Resolution, Conversion Constant, and Position Unwind.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the difference between Direct Scaling Factor Entry mode and From Calculator mode for configuring CIP axis scaling?</h4>
<p class='text-muted'><strong>Answer:</strong> - Direct Scaling Factor Entry mode allows manual input of scaling values, while From Calculator mode calculates values based on mechanical coupling inputs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How does the Feedback Resolution change when converting from SERCOS to Kinetix CIP?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Feedback Resolution for the new CIP axis is typically double what it used to be, resulting in receiving twice the counts for a given movement.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can one adjust the CIP scaling values to align with the change in Feedback Resolution?</h4>
<p class='text-muted'><strong>Answer:</strong> - To align with the doubled Feedback Resolution, one can consider multiplying the values in the CIP scaling (Conversion Constant, Motion Resolution, Position Unwind) by 2.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Is it necessary to have all mechanical coupling inputs to configure CIP axis scaling in Direct Scaling Factor Entry mode?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, in Direct Scaling Factor Entry mode, having all mechanical coupling inputs is not necessary as manual input is allowed for configuring the scaling values.</p>
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
