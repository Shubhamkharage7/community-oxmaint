
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am currently utilizing an Ethernet-controlled Kinetix 5100 in Studio 5000 with the help of Add-On Instructions. At the moment, I am testing a program that involves toggling bits to initiate motor movement. I have noticed that the On and Off functions are working properly, and I am">
    <meta name="keywords" content="kinetix 5100 troubleshooting, studio 5000 errors, stop and jog functionality issues, add-on instructions for kinetix 5100, ethernet-controlled motor troubleshooting, motion control">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-errors-with-kinetix-5100-in-studio-5000-stop-and-jog-functionality-issues">
    <title>Troubleshooting Errors with Kinetix 5100 in Studio 5000: Stop and Jog Functionality Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Errors with Kinetix 5100 in Studio 5000: Stop and Jog Functionality Issues | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am currently utilizing an Ethernet-controlled Kinetix 5100 in Studio 5000 with the help of Add-On Instructions. At the moment, I am testing a program that involves toggling bits to initiate motor movement. I have noticed that the On and Off functions are working properly, and I am">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-errors-with-kinetix-5100-in-studio-5000-stop-and-jog-functionality-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Errors with Kinetix 5100 in Studio 5000: Stop and Jog Functionality Issues | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am currently utilizing an Ethernet-controlled Kinetix 5100 in Studio 5000 with the help of Add-On Instructions. At the moment, I am testing a program that involves toggling bits to initiate motor movement. I have noticed that the On and Off functions are working properly, and I am">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-errors-with-kinetix-5100-in-studio-5000-stop-and-jog-functionality-issues"
      },
      "headline": "Troubleshooting Errors with Kinetix 5100 in Studio 5000: Stop and Jog Functionality Issues",
      "description": "Greetings, I am currently utilizing an Ethernet-controlled Kinetix 5100 in Studio 5000 with the help of Add-On Instructions. At the moment, I am testing a program that involves toggling bits to initiate motor movement. I have noticed that the On and Off functions are working properly, and I am",
      "author": {
        "@type": "Person",
        "name": "PLCDude1994"
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
                <h1 class="text-white">Troubleshooting Errors with Kinetix 5100 in Studio 5000: Stop and Jog Functionality Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PLCDude1994</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">202</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">133</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am currently utilizing an Ethernet-controlled Kinetix 5100 in Studio 5000 with the help of Add-On Instructions. At the moment, I am testing a program that involves toggling bits to initiate motor movement. I have noticed that the On and Off functions are working properly, and I am able to use the Jog feature as well. However, I encounter an error when attempting to use the Stop Add-on instruction, forcing me to stop the Jog using the Off Add-on instruction instead. Subsequently, I am unable to resume jogging as there is now an error. I am employing a One Shot to initiate the jog. The error code I am receiving on the Stop and Jog blocks is 127, indicating that the previous motion has not been completed. Is it necessary for the jog to be "completed" before the stop function can be successfully executed? I am seeking additional information as I am not very familiar with this topic. Any guidance would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>PLCDude1994 recently shared his experience with controlling a Kinetix 5100 via Ethernet in Studio 5000 using Add-On Instructions. Despite successful On and Off functions, he encountered an error with the Stop Add-on when trying to stop the motor after using the Jog function. The error code 127 indicated that the previous motion was not completed. Is it necessary for the jog to be "completed" before using the stop function? One responder suggested that the jog runs indefinitely and pointed out a potential race condition where multiple motion commands may be issued simultaneously. It was advised to double-check the oneshots for duplicates and ensure that none of the motion commands share the same control word.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response. However, I don't believe this is the issue. I have confirmed that this program is only running in one specific location. My testing approach for this motor involves simple logic: an on toggle, an off toggle, a jog toggle, and a stop toggle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCDude1994</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's important to heed Robertmee's advice and ensure that each control word used for commands is unique to avoid encountering strange issues. Avoid using the same control word for multiple commands.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to PLCDude1994, thank you for your input. However, I have confirmed that the program is only running in one specific location. The logic for testing the motor is quite simple - a toggle bit for activation, one for deactivation, another for jogging, and a final one for stopping. It is important to remember that motion instructions require a rising edge, rather than maintained bits. Are you toggling the bits on and off? This could be causing issues with the motor control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Two months ago, I encountered a similar issue while configuring AOIs. I can't recall the exact root cause, but I can share how I configured my job. In my setup, I used a Jog bit XIC and an ONS to activate the jog AOI. In the following rung, I utilized a Jog bit XIO ONS with an indirect tag for the MAS instruction. As robertmee mentioned, these instructions necessitate an ONS preceding them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
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
            <p>On a side note, when adjusting AOI for speed reference midway through a motion, it is necessary to reactivate the ONS to reassess the AOI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
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
<h4 class='text-dark'>FAQ: 1. FAQ: Why am I encountering an error when trying to use the Stop Add-on instruction with Kinetix 5100 in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error code 127 you are receiving indicates that the previous motion has not been completed before attempting to stop the motor. This error may occur if the jog operation has not finished before issuing a stop command.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. FAQ: Can I successfully execute the Stop function even if the jog operation is not completed?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In the case of Kinetix 5100 in Studio 5000, it is necessary for the jog operation to be completed before the stop function can be successfully executed. Attempting to stop the motor before the previous motion completes can lead to errors, such as the one you are experiencing.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. FAQ: How can I resolve the issue of not being able to resume jogging after encountering an error with the Stop Add-on instruction?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resume jogging after encountering an error with the Stop Add-on instruction, you may need to ensure that the previous motion has been completed before attempting to jog again. Proper sequencing of instructions and ensuring completion of one operation before initiating another can help prevent errors and enable smooth functionality.</p>
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
