
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I utilize eWON for my OPCUA to back up data from my PLC system (BandR X20). Each time eWON undergoes maintenance updates, I find it necessary to reboot it to ensure my PLC continues its backup process. Currently, this rebooting process involves power cycling the machine, which">
    <meta name="keywords" content="plc reboot, ewon if2 port, trigger reboot from ewon, soft reset ewon, opcua data backup, b&r x20 plc, ewon maintenance updates, power cycling machine, remote machine reboot, communication">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-trigger-plc-reboot-from-ewon-using-if2-port">
    <title>How to Trigger PLC Reboot from eWON Using IF2 Port | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Trigger PLC Reboot from eWON Using IF2 Port | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I utilize eWON for my OPCUA to back up data from my PLC system (BandR X20). Each time eWON undergoes maintenance updates, I find it necessary to reboot it to ensure my PLC continues its backup process. Currently, this rebooting process involves power cycling the machine, which">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-trigger-plc-reboot-from-ewon-using-if2-port">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Trigger PLC Reboot from eWON Using IF2 Port | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I utilize eWON for my OPCUA to back up data from my PLC system (BandR X20). Each time eWON undergoes maintenance updates, I find it necessary to reboot it to ensure my PLC continues its backup process. Currently, this rebooting process involves power cycling the machine, which">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-trigger-plc-reboot-from-ewon-using-if2-port"
      },
      "headline": "How to Trigger PLC Reboot from eWON Using IF2 Port",
      "description": "Hello everyone, I utilize eWON for my OPCUA to back up data from my PLC system (BandR X20). Each time eWON undergoes maintenance updates, I find it necessary to reboot it to ensure my PLC continues its backup process. Currently, this rebooting process involves power cycling the machine, which",
      "author": {
        "@type": "Person",
        "name": "afm"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-08",
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
                <h1 class="text-white">How to Trigger PLC Reboot from eWON Using IF2 Port</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>afm</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">598</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">322</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I utilize eWON for my OPCUA to back up data from my PLC system (B&R X20). Each time eWON undergoes maintenance updates, I find it necessary to reboot it to ensure my PLC continues its backup process. Currently, this rebooting process involves power cycling the machine, which can be challenging when dealing with multiple machines in various locations. I am interested in exploring the possibility of triggering a reboot or soft reset through the communication interface between my PLC and eWON using the IF2 port. Has anyone encountered similar situations or have any insights on this? Thank you! (Note: I apologize for the censorship error in my initial post)</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I am not familiar with this specific issue, the solution may vary depending on the type of e-won device you have. Certain models come equipped with a scripting language, including a "REBOOT" command that can be triggered in multiple ways. You can refer to the code provided in the following link for more information: https://developer.example.biz/system/files_force/rg-0006-01-en-basic-programming.pdf. I am curious about the context in which you mentioned needing to reboot the e-won after a maintenance update. Some devices have IO capabilities that allow you to control different functions, but the effectiveness of a reboot depends on the specific issue at hand. If you are unsure, it is advisable to seek assistance from technical support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>How frequently does this happen? Can a relay be utilized to supply power to the E1 device controlled by the PLC and reset it after a certain number of days? How does the device receive updates? It is recommended that all PLCs are disconnected from the internet and secured with a firewall for access control. Best regards, James.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can I trigger a PLC reboot from eWON using the IF2 port?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to trigger a PLC reboot or soft reset through the communication interface between your PLC and eWON using the IF2 port.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is it necessary to reboot eWON after maintenance updates for the PLC backup process?</h4>
<p class='text-muted'><strong>Answer:</strong> - Rebooting eWON after maintenance updates ensures the continuity of the PLC backup process and helps in maintaining system reliability.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the challenges of power cycling machines for PLC reboot in multiple locations?</h4>
<p class='text-muted'><strong>Answer:</strong> - Power cycling machines for PLC reboot in multiple locations can be challenging in terms of time consumption, coordination efforts, and potential disruptions to operations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Has anyone in the community encountered similar situations with eWON and PLC systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - Other users in the community may have encountered similar situations and could provide insights or solutions based on their experiences.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How can I implement a trigger for PLC reboot or soft reset through the IF2 port between eWON and PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - You may need to configure communication protocols and commands between eWON and the PLC system to enable the triggering of a reboot or soft reset through the IF2 port.</p>
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
