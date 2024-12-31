
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, Im facing an issue while attempting to program in Ladder logic. I need two possible contacts to trigger an output. In the screenshot below, if BOT_EST_ALIM is true, all three outputs should be activated. However, MOT_EST_BALAN and MOT_EST_MIST should only be activated when their specific contacts are true.">
    <meta name="keywords" content="ladder logic programming, troubleshooting ladder logic, output activation in ladder logic, ladder logic contacts, programming issue in ladder logic, multiple contacts in ladder logic">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ladder-logic-programming-issue-multiple-contacts-for-output-activation">
    <title>Troubleshooting Ladder Logic Programming Issue: Multiple Contacts for Output Activation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Ladder Logic Programming Issue: Multiple Contacts for Output Activation | Oxmaint Community">
    <meta property="og:description" content="Hello, Im facing an issue while attempting to program in Ladder logic. I need two possible contacts to trigger an output. In the screenshot below, if BOT_EST_ALIM is true, all three outputs should be activated. However, MOT_EST_BALAN and MOT_EST_MIST should only be activated when their specific contacts are true.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ladder-logic-programming-issue-multiple-contacts-for-output-activation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Ladder Logic Programming Issue: Multiple Contacts for Output Activation | Oxmaint Community">
    <meta name="twitter:description" content="Hello, Im facing an issue while attempting to program in Ladder logic. I need two possible contacts to trigger an output. In the screenshot below, if BOT_EST_ALIM is true, all three outputs should be activated. However, MOT_EST_BALAN and MOT_EST_MIST should only be activated when their specific contacts are true.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ladder-logic-programming-issue-multiple-contacts-for-output-activation"
      },
      "headline": "Troubleshooting Ladder Logic Programming Issue: Multiple Contacts for Output Activation",
      "description": "Hello, Im facing an issue while attempting to program in Ladder logic. I need two possible contacts to trigger an output. In the screenshot below, if BOT_EST_ALIM is true, all three outputs should be activated. However, MOT_EST_BALAN and MOT_EST_MIST should only be activated when their specific contacts are true.",
      "author": {
        "@type": "Person",
        "name": "Mel_"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-08",
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
                <h1 class="text-white">Troubleshooting Ladder Logic Programming Issue: Multiple Contacts for Output Activation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Mel_</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">330</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">242</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I'm facing an issue while attempting to program in Ladder logic. I need two possible contacts to trigger an output. In the screenshot below, if BOT_EST_ALIM is true, all three outputs should be activated. However, MOT_EST_BALAN and MOT_EST_MIST should only be activated when their specific contacts are true. Currently, only the last two outputs are functioning correctly. MOT_EST_BALAN and MOT_EST_MIST in network #1 work as expected only when the last two networks are removed.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In Programmable Logic Controllers (PLCs), it is essential to only designate an output once to avoid conflicting conditions on different rungs. Ensure that the logic is combined effectively to use each output only once, preventing lower rungs from overriding upper ones. This practice optimizes PLC programming and ensures smooth operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jaden</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is unclear what you are using in this setup, but in general, the first rung activates all the coils that will be utilized in the following rungs. The software may vary in its functionality, but typically, each coil is restricted to a particular rung for proper operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Let's give this a shot:

Let's give this a try:

Let's give this a go:

Let's give this a whirl:</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SCADA_Joe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Learn from SCADA Joe's example. The coil instruction in PLC programming always outputs either a 1 or a 0 when its rung is evaluated during the scan cycle. Timing is crucial in PLC programming, as the scan cycle acts as the heartbeat of the system. The timing of events is often more critical than the events themselves. For a deeper understanding of the PLC scan cycle, be sure to check out this informative video series.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mel pointed out that only the final two rungs are functioning correctly. None of the rungs are malfunctioning - they are simply not meeting your expectations because you may have a misconception of how PLCs operate. Click here to learn more about PLC functioning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why are only the last two outputs functioning correctly in the ladder logic programming scenario described?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue may be related to the interaction between the specific contacts for MOT_EST_BALAN and MOT_EST_MIST in network 1 and the configuration of the other networks. Removing the last two networks may have an impact on the correct functioning of these outputs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I ensure that all three outputs are activated when BOT_EST_ALIM is true?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To activate all three outputs when BOT_EST_ALIM is true, the ladder logic programming should be structured in a way that ensures the appropriate contacts are connected to trigger the outputs in the desired manner.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why are MOT_EST_BALAN and MOT_EST_MIST only activated correctly when the last two networks are removed?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue might be related to the sequence or arrangement of the networks in the ladder logic program. Adjusting the connections and conditions in the ladder logic program can help resolve this issue and ensure the correct activation of the outputs.</p>
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
