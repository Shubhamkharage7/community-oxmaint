
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone. I have a specific program in my PLC routine that involves storing position registers and then utilizing them with the Case operand. I am unsure if it is feasible, but I am interested in being able to position the robot along the Y and Z axes, press">
    <meta name="keywords" content="encoder values, logix designer, plc routine, position registers, case operand, robot positioning, y axis, z axis, panelview button, load encoder values, ycmd register, zcmd register, temporary storage, positional movements, desired position">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-save-encoder-values-to-specific-cases-in-logix-designer">
    <title>How to Save Encoder Values to Specific Cases in Logix Designer | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Save Encoder Values to Specific Cases in Logix Designer | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone. I have a specific program in my PLC routine that involves storing position registers and then utilizing them with the Case operand. I am unsure if it is feasible, but I am interested in being able to position the robot along the Y and Z axes, press">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-save-encoder-values-to-specific-cases-in-logix-designer">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Save Encoder Values to Specific Cases in Logix Designer | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone. I have a specific program in my PLC routine that involves storing position registers and then utilizing them with the Case operand. I am unsure if it is feasible, but I am interested in being able to position the robot along the Y and Z axes, press">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-save-encoder-values-to-specific-cases-in-logix-designer"
      },
      "headline": "How to Save Encoder Values to Specific Cases in Logix Designer",
      "description": "Greetings everyone. I have a specific program in my PLC routine that involves storing position registers and then utilizing them with the Case operand. I am unsure if it is feasible, but I am interested in being able to position the robot along the Y and Z axes, press",
      "author": {
        "@type": "Person",
        "name": "ceilingwalker"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-03",
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
                <h1 class="text-white">How to Save Encoder Values to Specific Cases in Logix Designer</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ceilingwalker</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">332</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">354</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone. I have a specific program in my PLC routine that involves storing position registers and then utilizing them with the Case operand. I am unsure if it is feasible, but I am interested in being able to position the robot along the Y and Z axes, press a button on the panelview, and automatically load the current encoder values to these registers. Is there a solution to achieve this considering that Ycmd and Zcmd are temporary storage registers that are manipulated in the PLC program for positional movements? For instance, I envision a scenario where I move the robot to a desired position, press a button, and have it load, let's say, Case 2: Ycmd and Zcmd registers with the current encoder position. I am struggling to come up with a method to instruct the system to save these two registers within a specific case. I hope this explanation is clear. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Convert Ysave and Zsave into global arrays. Transfer the Yencoder and Zencoder values to Ysave[0] and Zsave[0] when button "0" is pressed. Repeat this process for buttons "1," "2," and so on. Update the Ncode to the following format: 

Code:
IF N is between -1 and Ncountmax THEN
    Ycmd will equal Ysave[N]
    Zcmd will equal Zsave[N]
    COP(RobotTextMessages[N-1], HMI.RobotPosString, 1)
END_IF</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for responding. I was wondering if the case number can function as a tag on its own, but upon reflection, I realize it may not be the most thoughtful question. It could lead to confusion, especially if another case operand is used in a different routine, causing uncertainty about which case is being referenced.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ceilingwalker</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy recommended transforming Ysave and Zsave into global arrays for better accessibility. When button "0" is pressed, the current Yencoder and Zencoder input values should be transferred to Ysave[0] and Zsave[0], respectively. This process should be repeated for buttons "1," "2," and so on. This adjustment will simplify the code structure. For instance, the following code snippet indicates that if N is within a certain range, Ycmd and Zcmd will be assigned values from Ysave[N] and Zsave[N] respectively. Additionally, a conditional statement is used instead of a CASE statement for increased efficiency. This modification also allows for the utilization of the placeholder "N" in place of specific tags.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ceilingwalker</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I save encoder values to specific cases in Logix Designer?</h4>
<p class='text-muted'><strong>Answer:</strong> - To save encoder values to specific cases in Logix Designer, you can utilize the Case operand in your PLC program. By defining the logic to store the current encoder values into designated registers when a specific condition is met, you can achieve the functionality you described.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to automatically load encoder values to position registers upon pressing a button on the panelview?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is feasible to automatically load encoder values to position registers upon pressing a button on the panelview by implementing the necessary logic in your PLC program. You can define the sequence of actions to capture and store the encoder values when the button is pressed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I store encoder values within specific cases for positional movements in a robot system?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can store encoder values within specific cases for positional movements in a robot system by designing your PLC program to handle the capture and storage of encoder values based on predefined conditions or triggers. By associating the encoder values with the desired cases, you can achieve the functionality you are looking for.</p>
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
