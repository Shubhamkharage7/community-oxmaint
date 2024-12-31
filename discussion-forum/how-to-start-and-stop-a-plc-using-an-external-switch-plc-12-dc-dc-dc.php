
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Is it possible to control a PLC by stopping and starting it using an external switch? If so, how can I configure the switch for this purpose?">
    <meta name="keywords" content="plc control, external switch, start and stop plc, plc configuration, plc 12, dc/dc/dc, switch configuration, control external switch, plc switch setup, plc starting, plc stopping, plc control methods, plc external control">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-start-and-stop-a-plc-using-an-external-switch-plc-12-dc-dc-dc">
    <title>How to Start and Stop a PLC Using an External Switch: PLC 12(DC/DC/DC) | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Start and Stop a PLC Using an External Switch: PLC 12(DC/DC/DC) | Oxmaint Community">
    <meta property="og:description" content="Is it possible to control a PLC by stopping and starting it using an external switch? If so, how can I configure the switch for this purpose?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-start-and-stop-a-plc-using-an-external-switch-plc-12-dc-dc-dc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Start and Stop a PLC Using an External Switch: PLC 12(DC/DC/DC) | Oxmaint Community">
    <meta name="twitter:description" content="Is it possible to control a PLC by stopping and starting it using an external switch? If so, how can I configure the switch for this purpose?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-start-and-stop-a-plc-using-an-external-switch-plc-12-dc-dc-dc"
      },
      "headline": "How to Start and Stop a PLC Using an External Switch: PLC 12(DC/DC/DC)",
      "description": "Is it possible to control a PLC by stopping and starting it using an external switch? If so, how can I configure the switch for this purpose?",
      "author": {
        "@type": "Person",
        "name": "Vishnu244"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-04",
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
                <h1 class="text-white">How to Start and Stop a PLC Using an External Switch: PLC 12(DC/DC/DC)</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Vishnu244</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">179</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">281</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Is it possible to control a PLC by stopping and starting it using an external switch? If so, how can I configure the switch for this purpose?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What does it mean to stop? Is it the same as powering off or simply not running any code?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you wondering how to achieve your goals with your PLC system? If you need to stop the PLC from running, simply use a switch to disconnect it from power. To prevent specific code from running, use an input to control that section of code. For the S7-1200 PLC, you can set it to go into Run mode on power up by accessing Device Configuration, selecting Startup, and choosing 'Warm restart - RUN'. In a different discussion, you asked about HMI Scripting language without specifying the HMI or scripting language. To receive effective assistance, provide necessary details for others to help you effectively. Otherwise, you may risk frustrating members and losing their support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One way to enhance the functionality of your programmable logic controller (PLC) is to develop a subroutine that is triggered only when the external switch is in the correct position. While this method does not completely halt the PLC's program execution, it can help achieve the desired outcomes. Certain PLC models have a run/stop switch which can be modified by linking the contacts of the switch to an external device, though this may void the PLC's warranty.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to achieve the desired results, consider placing all of your logic in a subroutine that is triggered only when the external switch is in the correct position. While this method doesn't completely halt the PLC's program execution, it can still deliver the outcomes you seek. Some PLC models from certain brands come with a run/stop switch, which could potentially be rewired to an external device, though this may void the warranty. Be cautious when disabling a subroutine as it may result in the logic remaining in its last state, including analog outputs, and not necessarily causing a complete global stop, but rather more of a pause in operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robert made a valid observation regarding the presence of the "Master Control Relay" feature in certain PLC models. This function is designed to deactivate all outputs, providing an added layer of control and safety.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to achieve the desired results, one option is to consolidate all of the logic into a subroutine that is only triggered when the external switch is in the correct position. This approach may not completely halt the PLC's program execution, but it could help attain the desired outcome.

Some PLC models come equipped with a run/stop switch, allowing users to easily control the device's operation. However, if your PLC lacks this feature, you might consider modifying it by connecting the contacts of an external switch to the device, although this could potentially void the warranty.

Unfortunately, the 1200 model does not include a run/stop switch, posing a challenge for users in need of this functionality. Changing the default behavior to power up in run mode would require adjustment through the programming software, an alternative to physical toggling. The reasoning behind this limitation is a point worth pondering.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Can a PLC be controlled by starting and stopping it using an external switch?
   - Yes, it is possible to control a PLC by starting and stopping it using an external switch.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I configure an external switch to start and stop a PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To configure an external switch to start and stop a PLC, you can connect the switch to the appropriate input terminals on the PLC and then program the PLC to respond to the signals from the switch accordingly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any specific considerations to keep in mind when setting up an external switch to control a PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - When setting up an external switch to control a PLC, make sure to properly wire the switch to the PLC input terminals and ensure that the PLC program is configured to handle the start and stop signals from the switch accurately and safely.</p>
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
