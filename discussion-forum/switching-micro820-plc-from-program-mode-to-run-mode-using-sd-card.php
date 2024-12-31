
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am utilizing an AB Micro820 PLC and I am looking to update the PLC program via the SD card. Initially, I saved a backup of the program from another 820 by creating a text file on the SD card named ConfigMeFirst.txt. I then modified the ConfigMeFirst.txt file">
    <meta name="keywords" content="switching micro820 plc, program mode, run mode, sd card, ab micro820 plc, plc program update, backup program, configmefirst.txt, ip address settings, green run led, blinking led, power cycles, ip address change">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/switching-micro820-plc-from-program-mode-to-run-mode-using-sd-card">
    <title>Switching Micro820 PLC from Program Mode to Run Mode using SD card | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Switching Micro820 PLC from Program Mode to Run Mode using SD card | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am utilizing an AB Micro820 PLC and I am looking to update the PLC program via the SD card. Initially, I saved a backup of the program from another 820 by creating a text file on the SD card named ConfigMeFirst.txt. I then modified the ConfigMeFirst.txt file">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/switching-micro820-plc-from-program-mode-to-run-mode-using-sd-card">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Switching Micro820 PLC from Program Mode to Run Mode using SD card | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am utilizing an AB Micro820 PLC and I am looking to update the PLC program via the SD card. Initially, I saved a backup of the program from another 820 by creating a text file on the SD card named ConfigMeFirst.txt. I then modified the ConfigMeFirst.txt file">
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
        "@id": "https://community.oxmaint.com/discussion-forum/switching-micro820-plc-from-program-mode-to-run-mode-using-sd-card"
      },
      "headline": "Switching Micro820 PLC from Program Mode to Run Mode using SD card",
      "description": "Greetings, I am utilizing an AB Micro820 PLC and I am looking to update the PLC program via the SD card. Initially, I saved a backup of the program from another 820 by creating a text file on the SD card named ConfigMeFirst.txt. I then modified the ConfigMeFirst.txt file",
      "author": {
        "@type": "Person",
        "name": "MauritsKoppe"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-21",
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
                <h1 class="text-white">Switching Micro820 PLC from Program Mode to Run Mode using SD card</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MauritsKoppe</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">504</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">170</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am utilizing an AB Micro820 PLC and I am looking to update the PLC program via the SD card. Initially, I saved a backup of the program from another 820 by creating a text file on the SD card named ConfigMeFirst.txt. I then modified the ConfigMeFirst.txt file with the following settings: [IPA = 192.168.1.40] [SNM = 255.255.255.0] [GWA = 192.168.1.1] [RSD = Micro820QWB] [END]. After inserting the SD card into a new 820, I believe the programming was executed properly. However, I am facing an issue where the 820 remains in Program Mode, even after multiple power cycles - the green Run LED continues blinking, indicating Program Mode status. Although the IP address has been successfully changed to the specified one. How can I switch the 820 back to Run Mode? Thank you for any guidance provided.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>For more information on the configuration and use of the Allen-Bradley 2080SD2GB Micro SD card, check out the helpful guides at the following links:
- https://www.plctalk.net/qanda/showthread.php?t=110987
- https://www.plccable.com/blog/configuration-and-use-of-the-allen-bradley-2080sd2gb-micro-sd-card/
- https://rockwellautomation.custhelp.com/app/answers/answer_view/a_id/725310

These resources can provide valuable insights for setting up and utilizing this specific Micro SD card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your response, and I am pleased to report that the issue has been resolved. The new units now come in program mode by default, which is a logical setting. To ensure they start in Run mode after a power cycle, you can switch the unit to Run mode in CCW or select Remote Run Mode in Mode Behavior. Moving forward, I will always opt for Remote Run Mode to streamline the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MauritsKoppe</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I switch my Micro820 PLC from Program Mode to Run Mode using an SD card?</h4>
<p class='text-muted'><strong>Answer:</strong> To switch your Micro820 PLC from Program Mode to Run Mode using an SD card, you can follow these steps:
   - Save a backup of the program on the SD card.
   - Modify the settings in the text file on the SD card.
   - Insert the SD card into the new PLC.
   - If the PLC remains in Program Mode, try power cycling it and ensure the settings are correct.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: To troubleshoot the issue of your Micro820 PLC remaining in Program Mode with the green Run LED blinking, you can:</h4>
<p class='text-muted'><strong>Answer:</strong> - Check the settings in the text file on the SD card.
   - Ensure the SD card is inserted properly.
   - Verify the power source and try power cycling the PLC.
   - Contact technical support for further assistance if the issue persists.</p>
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
