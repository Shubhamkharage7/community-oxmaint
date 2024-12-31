
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In a critical environment, I have a redundant L82 system set up and need to download numerous programs without compromising functionality. Could someone guide me on the proper process for this? I am unsure which system to download to first as I lack experience with redundancy. Additionally, how should">
    <meta name="keywords" content="download programs, redundant controllogix system, l82 system, program download process, redundancy experience, module firmware update, control system redundancy, redundant system functionality, redundant system setup, redundant">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-download-programs-to-a-redundant-controllogix-system">
    <title>How to Download Programs to a Redundant ControlLogix System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Download Programs to a Redundant ControlLogix System | Oxmaint Community">
    <meta property="og:description" content="In a critical environment, I have a redundant L82 system set up and need to download numerous programs without compromising functionality. Could someone guide me on the proper process for this? I am unsure which system to download to first as I lack experience with redundancy. Additionally, how should">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-download-programs-to-a-redundant-controllogix-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Download Programs to a Redundant ControlLogix System | Oxmaint Community">
    <meta name="twitter:description" content="In a critical environment, I have a redundant L82 system set up and need to download numerous programs without compromising functionality. Could someone guide me on the proper process for this? I am unsure which system to download to first as I lack experience with redundancy. Additionally, how should">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-download-programs-to-a-redundant-controllogix-system"
      },
      "headline": "How to Download Programs to a Redundant ControlLogix System",
      "description": "In a critical environment, I have a redundant L82 system set up and need to download numerous programs without compromising functionality. Could someone guide me on the proper process for this? I am unsure which system to download to first as I lack experience with redundancy. Additionally, how should",
      "author": {
        "@type": "Person",
        "name": "Tim Ganz"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-13",
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
                <h1 class="text-white">How to Download Programs to a Redundant ControlLogix System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Tim Ganz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">594</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">96</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In a critical environment, I have a redundant L82 system set up and need to download numerous programs without compromising functionality. Could someone guide me on the proper process for this? I am unsure which system to download to first as I lack experience with redundancy. Additionally, how should I approach updating module firmware in this setup? Are there any specific considerations I should be aware of?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have extensively researched redundancy setup, but I am still unclear on the download process. The instructions state to treat the primary rack/processor as a single non-redundant system in RS Logix. Does this mean that when I download to it, my process will stop as usual, or will the secondary rack seamlessly take over? How smooth will this transition be?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tim Ganz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When transferring a program to the Logix Redundancy, a bumpless transfer is not possible. The process will come to a halt during the download.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking to effortlessly incorporate a new routine into your schedule without any disruptions?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Moore asked if it is possible to add a routine without pausing and the answer is yes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>muusic_man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You can make online edits and import Routines, AOIs, and rungs without interrupting operations. However, downloading updates is not possible while the program is running.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Contr_Conn mentioned that it is possible to make online edits and import Routines, AOIs, and rungs without halting the system. However, downloading is not possible while the system is running. After downloading, it is recommended to wait for synchronization before putting the system back online or switching it to Run Mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tim Ganz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When downloading new content, is it necessary to wait for synchronization before going back online or entering Run Mode? In my experience, if the controller was synchronized prior to the download, it should remain synchronized both during and after the download process. However, if there are any issues with your program changes, synchronization may be lost after the download. Keep in mind that the amount of downtime needed before the download may vary depending on your setup and application. If downtime is not acceptable, consider using a partial import instead of starting the download immediately.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you ever experienced long download times for programs, taking hours or even days? This may be due to the redundancy setup in place. Despite having large programs, such as L85's, which are nearly full, downloads typically only take about 20 minutes. If you're unfamiliar with how partial imports work, you're not alone. This feature may be reminiscent of RS Logix 5, but many struggle to fully grasp its functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tim Ganz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to downloading files, redundancy may take slightly longer than non-redundant downloads, requiring some extra cross-loading time. However, this does not necessarily mean that your program will not function as intended, as redundancy ensures a more reliable outcome. Be prepared for a potential shutdown, but if you're lucky, the process will go smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Tim Ganz mentioned that he is unfamiliar with the concept of partial import, recalling a similar feature in RS Logix 5 but never fully grasping it or having the opportunity to test it out. Partial import is actually quite user-friendly and can be easily implemented. To achieve "Bumpless operation" with a new routine, follow these steps: 

1) Import the new routine with program changes in the PLC task without adding a JSR to it yet, keeping the code inactive on the processor.
2) In online edit mode, create a new boolean variable "EnableNewRoutine" and set it to 0.
3) Modify the call to the affected code in the main program of your task as shown below:
4) When prepared, switch EnableNewRoutine to ON.
5) Conduct any necessary troubleshooting to activate new sections of the code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PreLC</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Which system should I download programs to first in a redundant ControlLogix system?
   - It is recommended to download the programs to the primary system first in a redundant setup, ensuring that both systems are in sync to maintain functionality.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How should I approach updating module firmware in a redundant ControlLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - When updating module firmware in a redundant system, it is crucial to follow the manufacturer's guidelines and ensure that the firmware updates are applied consistently across both primary and secondary systems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What considerations should I be aware of when downloading programs to a redundant ControlLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some considerations to keep in mind include ensuring proper synchronization between the primary and secondary systems, verifying program compatibility, and testing functionality post-download to avoid any disruptions in the critical environment.</p>
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
