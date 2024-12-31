
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello Members, We are currently encountering a challenge with the PlantPAx 5 PMTR library in our project. Our bidirectional motor has 2 digital inputs for the forward and reverse limits, however, we are unable to find this functionality in the PMTR block. Additionally, we are unable to access the">
    <meta name="keywords" content="plantpax 5 pmtr library, bi-directional motor limits, troubleshooting, digital inputs, forward limit, reverse limit, pmtr block, operator commands, motor control, logic programming, operator mode, motor stopping, automation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-bi-directional-motor-limits-in-plantpax-5-pmtr-library">
    <title>Troubleshooting Bi-Directional Motor Limits in PlantPax 5 PMTR Library | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Bi-Directional Motor Limits in PlantPax 5 PMTR Library | Oxmaint Community">
    <meta property="og:description" content="Hello Members, We are currently encountering a challenge with the PlantPAx 5 PMTR library in our project. Our bidirectional motor has 2 digital inputs for the forward and reverse limits, however, we are unable to find this functionality in the PMTR block. Additionally, we are unable to access the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-bi-directional-motor-limits-in-plantpax-5-pmtr-library">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Bi-Directional Motor Limits in PlantPax 5 PMTR Library | Oxmaint Community">
    <meta name="twitter:description" content="Hello Members, We are currently encountering a challenge with the PlantPAx 5 PMTR library in our project. Our bidirectional motor has 2 digital inputs for the forward and reverse limits, however, we are unable to find this functionality in the PMTR block. Additionally, we are unable to access the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-bi-directional-motor-limits-in-plantpax-5-pmtr-library"
      },
      "headline": "Troubleshooting Bi-Directional Motor Limits in PlantPax 5 PMTR Library",
      "description": "Hello Members, We are currently encountering a challenge with the PlantPAx 5 PMTR library in our project. Our bidirectional motor has 2 digital inputs for the forward and reverse limits, however, we are unable to find this functionality in the PMTR block. Additionally, we are unable to access the",
      "author": {
        "@type": "Person",
        "name": "zainkt"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-11",
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
                <h1 class="text-white">Troubleshooting Bi-Directional Motor Limits in PlantPax 5 PMTR Library</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>zainkt</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">410</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">168</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello Members, 

We are currently encountering a challenge with the PlantPAx 5 PMTR library in our project. Our bidirectional motor has 2 digital inputs for the forward and reverse limits, however, we are unable to find this functionality in the PMTR block. Additionally, we are unable to access the Operator commands for use in our logic. We need to be able to stop the motor at the forward and reverse limits in operator mode. Are there any solutions available for this issue? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have experience with versions 3 and 4, but I am curious if interlocks can be utilized for the limit switches.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface inquired about using interlocks for limit switches in versions 3 & 4. I attempted to implement it, but opted for a one-shot plus approach instead. This decision was made because having interlocks constantly engaged once the limit is reached could potentially lead to the operator restarting the motor prematurely (as it operates on a pulse signal).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>zainkt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, I do not have a P controller to test this out. I am curious about why the interlock block cannot be utilized in this situation. Is it possible to have dual interlocks that combine the forward limit and state with the reverse limit and state using an AND logic gate? This would require the operator to change direction after hitting the interlock, rendering it ineffective. Does this proposal seem reasonable?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like your limit switch may be causing the issue. Why is it acting as a one-shot? If it's still within the set limit, it should remain on. Have you considered latching the limit signals and unlatching them when a reverse motion is detected? As cardosocea recommends, it's beneficial to use separate forward and reverse interlocks. In version 4, utilizing the P_MotorRev with inputs for each direction could be a helpful solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am excited to share a clever solution I discovered! In this setup, test bool and tota serve as simulated limit switches, while tag1 acts as the interlock for a bi-directional motor. This configuration effectively prevents the motor from restarting in the forward direction. I will be conducting further tests with real hardware tomorrow, hoping for successful results. * Keeping my fingers crossed *</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>zainkt</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Operating the motor in this manner will not only be detrimental to its health but also reduce its efficiency. To prevent any damage, consider adding a slight delay to the signal being sent to the output. It seems like this model used to have a direction selection feature along with a start button, which would indicate the selected direction as the interlock input.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I handle bi-directional motor limits in the PlantPAx 5 PMTR library?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The PlantPAx 5 PMTR library may not have built-in functionality for handling bi-directional motor limits with 2 digital inputs for forward and reverse limits. You may need to explore alternative solutions or custom logic to address this issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why can't I find the functionality for forward and reverse limits in the PMTR block of PlantPAx 5?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The PMTR block in the PlantPAx 5 library may not directly support the specific requirements of managing forward and reverse limits for a bidirectional motor. You may need to consider implementing custom logic or seeking assistance from technical support for a workaround.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I access Operator commands to stop the motor at forward and reverse limits in PlantPAx 5 PMTR library?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you are unable to access the Operator commands for stopping the motor at limits in the PlantPAx 5 PMTR library, you may need to explore other function blocks or develop custom logic to incorporate this functionality into your project. Consider reaching out to the Rockwell Automation support team for guidance on implementing the desired behavior.</p>
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
