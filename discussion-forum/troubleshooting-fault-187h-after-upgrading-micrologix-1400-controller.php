
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I recently upgraded a faulty micrologix 1400 1766-L32BWAA series A with a Series C model, which includes an expansion card 1762-IF4 Analog module. After downloading the same program that was running on the Series C controller, I encountered fault 187h I/O configuration mismatch. I realized that none">
    <meta name="keywords" content="troubleshooting fault 187h, micrologix 1400 controller, 1766-l32bwaa, 1762-if4 analog module, i/o configuration mismatch, faulty module, series c controller, analog module lights">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-fault-187h-after-upgrading-micrologix-1400-controller">
    <title>Troubleshooting Fault 187h After Upgrading MicroLogix 1400 Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Fault 187h After Upgrading MicroLogix 1400 Controller | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I recently upgraded a faulty micrologix 1400 1766-L32BWAA series A with a Series C model, which includes an expansion card 1762-IF4 Analog module. After downloading the same program that was running on the Series C controller, I encountered fault 187h I/O configuration mismatch. I realized that none">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-fault-187h-after-upgrading-micrologix-1400-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Fault 187h After Upgrading MicroLogix 1400 Controller | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I recently upgraded a faulty micrologix 1400 1766-L32BWAA series A with a Series C model, which includes an expansion card 1762-IF4 Analog module. After downloading the same program that was running on the Series C controller, I encountered fault 187h I/O configuration mismatch. I realized that none">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-fault-187h-after-upgrading-micrologix-1400-controller"
      },
      "headline": "Troubleshooting Fault 187h After Upgrading MicroLogix 1400 Controller",
      "description": "Hello everyone! I recently upgraded a faulty micrologix 1400 1766-L32BWAA series A with a Series C model, which includes an expansion card 1762-IF4 Analog module. After downloading the same program that was running on the Series C controller, I encountered fault 187h I/O configuration mismatch. I realized that none",
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
      "datePublished": "2024-07-29",
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
                <h1 class="text-white">Troubleshooting Fault 187h After Upgrading MicroLogix 1400 Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>erock21</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">211</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">178</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I recently upgraded a faulty micrologix 1400 1766-L32BWAA series A with a Series C model, which includes an expansion card 1762-IF4 Analog module. After downloading the same program that was running on the Series C controller, I encountered fault 187h "I/O configuration mismatch." I realized that none of the lights on the Analog module were on, even though signals were being applied to all four inputs. Could this indicate another faulty module, or is there additional configuration required? Given that the previous 1400 controller failed, I am inclined to suspect a faulty module, but I would appreciate a professional opinion on the matter. Thank you for your assistance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>For troubleshooting programming issues, try making a quick change, saving it, then undoing the change and recompiling to see if the download and functionality work. Verify if the signal analog card matches the configuration in the program. These steps can help identify any potential issues. - James</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Would you be able to send over your program file (please zip it first)? The error code indicates a configuration mismatch in slot 1. It is important to ensure that your program's I/O configuration has the appropriate module for slot 1. In some cases, a new setup may encounter this error when an analog card is placed in slot 1. If reseating connectors and powering down does not resolve the issue, try downloading the program again. While the true root cause may remain unknown, overcoming this error will allow you to proceed to the next task smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey everyone, it's fascinating how your suggestions actually helped me out. I followed the steps of powering down, resetting the card, and redownloading, but still encountered errors. Then I decided to tweak the 'Processor Type' setting in the 'Controller Properties' of my original file to "Micrologix 1400 series C" before redownloading. This caused the program to glitch, prompting me to Ctrl, Alt, Delete it. I reverted back to my original unchanged file, redownloaded it, and voila, it started working. What a strange turn of events! Many thanks to OkiePC and James Mcquade for their assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. FAQ: What does fault 187h "I/O configuration mismatch" indicate on a MicroLogix 1400 controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Fault 187h indicates an I/O configuration mismatch on the MicroLogix 1400 controller, typically caused by discrepancies between the programmed I/O configuration and the actual hardware setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. FAQ: Why might the Analog module (1762-IF4) not be functioning properly after upgrading the MicroLogix 1400 controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Analog module may not be functioning properly due to a faulty module or additional configuration requirements after upgrading the MicroLogix 1400 controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. FAQ: How can I troubleshoot the issue of none of the lights on the Analog module being on, despite signals being applied to all four inputs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Troubleshooting steps may include checking for correct wiring connections, verifying power supply to the Analog module, and ensuring that the module is properly configured in the program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. FAQ: Should I suspect a faulty module if the previous 1400 controller failed, and now I am experiencing issues with the Analog module on the upgraded controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While a faulty module is a possibility, it is also important to consider if there are any configuration differences or setup requirements for the Analog module on the new controller that need to be addressed. Consulting a professional for an expert opinion is recommended.</p>
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
