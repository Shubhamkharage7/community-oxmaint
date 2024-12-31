
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Do you have a seal-in circuit that seals in the OTE pump in the auto mode, with a parallel branch referencing the same tag? This is a common setup, but I have encountered a problem where the motor switches from auto to manual on power cycle. This may be">
    <meta name="keywords" content="seal-in circuits, troubleshooting, compactlogix systems, ote pump, auto mode, parallel branch, tag referencing, motor switching, manual mode, power cycle, outputs set to zero, first scan, seal-in condition">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-seal-in-circuits-for-compactlogix-systems">
    <title>Troubleshooting Seal-In Circuits for Compactlogix Systems | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Seal-In Circuits for Compactlogix Systems | Oxmaint Community">
    <meta property="og:description" content="Do you have a seal-in circuit that seals in the OTE pump in the auto mode, with a parallel branch referencing the same tag? This is a common setup, but I have encountered a problem where the motor switches from auto to manual on power cycle. This may be">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-seal-in-circuits-for-compactlogix-systems">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Seal-In Circuits for Compactlogix Systems | Oxmaint Community">
    <meta name="twitter:description" content="Do you have a seal-in circuit that seals in the OTE pump in the auto mode, with a parallel branch referencing the same tag? This is a common setup, but I have encountered a problem where the motor switches from auto to manual on power cycle. This may be">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-seal-in-circuits-for-compactlogix-systems"
      },
      "headline": "Troubleshooting Seal-In Circuits for Compactlogix Systems",
      "description": "Do you have a seal-in circuit that seals in the OTE pump in the auto mode, with a parallel branch referencing the same tag? This is a common setup, but I have encountered a problem where the motor switches from auto to manual on power cycle. This may be",
      "author": {
        "@type": "Person",
        "name": "desertsurf520"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-17",
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
                <h1 class="text-white">Troubleshooting Seal-In Circuits for Compactlogix Systems</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>desertsurf520</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">398</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">279</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Do you have a seal-in circuit that seals in the OTE pump in the auto mode, with a parallel branch referencing the same tag? This is a common setup, but I have encountered a problem where the motor switches from auto to manual on power cycle. This may be due to all outputs being set to zero until after the first scan, causing the seal-in condition to be zero as well. Consider MOVING a 1 into this after the first scan to resolve the issue. Have you experienced something similar?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to programming basics, it's important to avoid using seals in to ensure retention after a power cycle. Instead, utilize two rungs: Xic auto PB OTL AutoXic man PB OTU Auto. By following this method, the automation system will maintain a state of 1 during power cycles.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider utilizing a first scan set to true or employing OTL/OTU, as recommended by robertmee. To understand why OTL/OTU is effective while OTE with a hold in coil is not, research the prescan operation for further insights.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I haven't worked with RW in a while, but in many Programmable Logic Controllers (PLCs), it is common to utilize retain bits that preserve their status even when the system is stopped or powered off.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Avoid using latches to control physical outputs as it can be dangerous in case of power outages or emergency stops. Overusing latches and OTL/OTU instructions in a program can make debugging a frustrating task for maintenance personnel. It is recommended to use caution and consider safety implications when designing control systems for machinery or equipment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to a query by jstolaruk, it is advised not to use latches for controlling physical outputs as it can pose a safety risk during power outages or emergency stop situations. Overusing latches and OTL/OTU instructions can make debugging complex for maintenance personnel. While OTL/OTU are suitable for persistent mode control in Auto mode, caution is necessary for critical equipment to ensure safe operation after power disruptions. Agitators in remote Tank farms, heating control loops, lubrication pump circuits, etc., should restart immediately upon power restoration with Auto mode persistence. It is recommended to organize OTL/OTU pairs within a few rungs to streamline programming and avoid unnecessary duplication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When the risk assessment indicates that it is safe, then it is considered acceptable. This ensures that all necessary precautions have been taken, giving peace of mind to individuals and businesses alike.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky mentioned that in most PLCs, retain bits are used to maintain their state during a stop or power down. In a Rockwell PLC, all bits/tags are retentive, but some are altered before the first scan by the Prescan operation, depending on the user program.

Jstolaruk advises against using latches to control physical outputs, as it can be dangerous in case of a power outage or emergency stop. Overusing latches and OTL/OTU instructions can make debugging difficult for maintenance personnel.

Robertmee points out that while it's common practice to use OTL/OTU for persistent mode control in auto mode, it's crucial to have multiple permissives on critical equipment for safety reasons. In cases like sealed agitators or heating control loops, immediate restart upon power restoration is necessary, along with persistent auto mode.

It is essential to organize OTL/OTU pairs within a few rungs and avoid unnecessary duplication. Using OTL/OTU for auto/manual mode control is recommended, but not for motor run outputs. There are more instances where using OTL/OTU is not advisable, but there are a few good applications for these instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why not simplify the control of Auto/Manual with a two-state switch that toggles between the two modes? This approach ensures consistency in the physical inputs even after a power cycle. Alternatively, a single input could be utilized, with ON activating Auto mode and OFF triggering Manual mode. This streamlined system offers increased efficiency and ease of use.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bernie_carlton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to bernie_carlton, it may be more efficient to use a two-state switch for controlling the Auto/Manual function with consistent physical inputs after a power cycle. Simplifying to a single input where ON represents Auto and OFF represents Manual could streamline the process. These inputs are originated from an HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Why does the motor switch from auto to manual mode on power cycle in a seal-in circuit setup for OTE pump?
- The issue may arise due to all outputs being set to zero until after the first scan, causing the seal-in condition to be zero as well. Moving a 1 into this after the first scan can resolve the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it common to have a seal-in circuit that seals in the OTE pump in auto mode with a parallel branch referencing the same tag?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is a common setup to have a seal-in circuit for the OTE pump in auto mode with a parallel branch referencing the same tag.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I prevent the motor from switching modes in a Compactlogix system seal-in circuit setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - Moving a 1 into the seal-in condition after the first scan can help prevent the motor from switching modes during power cycles.</p>
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
