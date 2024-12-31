
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Have you encountered an unexpected Sercos ring fault while working with a CompactLogix L43 and three Kinetix 6000 drives? After running a non-stop process for about 3 hours, a sudden Sercos fault with code 16 #204 occurred, causing two drives to go into state 2 and the third to">
    <meta name="keywords" content="sercos ring fault, compactlogix l43, kinetix 6000 drives, troubleshooting, unexpected fault, code 16 #204, drives state 2, chasing leds, fiber optic cables, backplane communication issue, diagnose">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-unexpected-sercos-ring-fault-with-compactlogix-l43-and-kinetix-6000-drives">
    <title>Troubleshooting Unexpected Sercos Ring Fault with CompactLogix L43 and Kinetix 6000 Drives | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Unexpected Sercos Ring Fault with CompactLogix L43 and Kinetix 6000 Drives | Oxmaint Community">
    <meta property="og:description" content="Have you encountered an unexpected Sercos ring fault while working with a CompactLogix L43 and three Kinetix 6000 drives? After running a non-stop process for about 3 hours, a sudden Sercos fault with code 16 #204 occurred, causing two drives to go into state 2 and the third to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-unexpected-sercos-ring-fault-with-compactlogix-l43-and-kinetix-6000-drives">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Unexpected Sercos Ring Fault with CompactLogix L43 and Kinetix 6000 Drives | Oxmaint Community">
    <meta name="twitter:description" content="Have you encountered an unexpected Sercos ring fault while working with a CompactLogix L43 and three Kinetix 6000 drives? After running a non-stop process for about 3 hours, a sudden Sercos fault with code 16 #204 occurred, causing two drives to go into state 2 and the third to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-unexpected-sercos-ring-fault-with-compactlogix-l43-and-kinetix-6000-drives"
      },
      "headline": "Troubleshooting Unexpected Sercos Ring Fault with CompactLogix L43 and Kinetix 6000 Drives",
      "description": "Have you encountered an unexpected Sercos ring fault while working with a CompactLogix L43 and three Kinetix 6000 drives? After running a non-stop process for about 3 hours, a sudden Sercos fault with code 16 #204 occurred, causing two drives to go into state 2 and the third to",
      "author": {
        "@type": "Person",
        "name": "GHII"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-14",
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
                <h1 class="text-white">Troubleshooting Unexpected Sercos Ring Fault with CompactLogix L43 and Kinetix 6000 Drives</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>GHII</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>15 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">15247</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">118</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Have you encountered an unexpected Sercos ring fault while working with a CompactLogix L43 and three Kinetix 6000 drives? After running a non-stop process for about 3 hours, a sudden Sercos fault with code 16 #204 occurred, causing two drives to go into state 2 and the third to display chasing LEDs. Upon unplugging and re-plugging one of the fiber optic cables, the system was back up and running. However, this solution may not be practical for customers. Technical support suggested a potential backplane communication issue, but provided no concrete steps to diagnose or resolve it.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance your search engine optimization, I recommend reviewing the settings in the module properties, specifically in the connection tab. It's important to understand the RPI and the settings for connection failure. Additionally, consider how you are connecting your devices, including any flex cards in use. Lastly, identify whether the error is occurring on the sercos card or on a specific drive module. This information will help troubleshoot and resolve any issues more efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mtech</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Currently, I am 400 miles away from the processor, leading to the absence of an RPI value in offline mode. Despite not being marked as a major fault, the Sercos card located in the same rack as the processor is connected to the drives via the power bus. While the Sercos card displays no faults, the final drive on the bus is displaying code 16# 204, and attempts to access it result in a "drive not configured" message.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GHII</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is uncertain whether or not the CPX is impacted by this issue. Some CLX processors and network cards manufactured between late 2008 and mid-2009 may have a defective backplane communication chip, which was addressed in a Technical Service Bulletin (TSB). The affected cards may include sercos cards with an Atmel chip ending in *****64. Cards with chips ending in *****65 or from other brands are not affected. If you have a card with the faulty chip, you can get it replaced for free by AB. These chips have been known to cause intermittent communication issues, as experienced by a user trying to connect a nearly new machine to a C# application. Make sure to check for this issue if you encounter any communication problems - it could save you months of frustration. Good luck!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dleakey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The settings appear to be correct. It is common for the drive to not be configured during a connection issue. Have you tried swapping out the drive or backplane with a spare to troubleshoot the problem?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mtech</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can the chip number be found within the serial number on the Sercos card? Unfortunately, I was unable to swap out any components due to being on-site at the customer's plant when this issue arose, and our distributor was located 400 miles away.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GHII</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unsure about the CPX system, but when it comes to CLX, each card has a chip on the PCB that is approximately a 1-inch square. This chip contains valuable information that can be easily accessed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dleakey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am curious if AB is confirming whether it refers to a single slot on the entire chassis backplane. If only one slot is being used, are there any available empty slots for expansion?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mtech</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When a backplane communication fault occurs on a CompactLogix system, it typically indicates a defective card. Unlike traditional backplanes, communication between cards is achieved through ribbon cables. In my experience, when one card experiences communication issues, it can impact the performance of all subsequent cards in the chassis. My experience with the CompactLogix has primarily been with the 1769 bus, but I understand that the L4x and motion cards communicate on the 1768 bus.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dleakey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was instructed to inspect the connecting pins to ensure they were not bent. It's puzzling how this could be the issue, especially since the equipment runs smoothly for hours. Disconnecting and reconnecting one of the fiber optic cables resets everything to level 4, which raises questions. If there were a backplane problem, I would expect to have to power cycle the device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GHII</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The backplane being referenced acts as the power channel connecting the Kinetix drives. It enables seamless communication between the main drive and the two additional drives.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GHII</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During a recent inspection of our Munchskin line, we encountered a problem related to a ground issue caused by inadequate cable shielding attachment. Despite its seemingly trivial nature, this issue was identified by an equipment representative who came to address it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jayare12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have experienced issues with grounding in the past, so I made sure all cables were secure. However, I forgot to check the primary ground connection to the panel.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GHII</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you identified the issue you're experiencing? I'm encountering a similar problem with some of my machines. One of my racks has 2 PLCs and 4 SERCOS (M08se) cards. There is a red light on the "OK" indicator occasionally on one of the SERCOS cards (16#0204 as per online search). The dates mentioned in the technote don't match up (too outdated). We performed a firmware upgrade on both the PLC and SERCOS systems around 3 years ago, which we suspect may be related to the issue. However, two other machines running the same firmware (but more recent) are operating without any problems. The chip in question is an ARM ending with 64, whereas the newer machine has an ARM ending with 65.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Proulxrs</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Experiencing the same problem with servos stuck and Rockwell tech support unable to provide a solution? The first servo is stuck at 2, while the second and third servos are stuck in an endless LED loop. Despite trying everything, the issue remains unresolved. Don't worry, you're not alone in facing this frustrating dilemma!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Beantown</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For anyone still utilizing the Kinetix 6000 system, it's worth checking either the backplane of the drives or the pins on the back of the drive if you encounter issues. In our experience, the backplane was faulty, leading to a broken pin while removing the drives. This resulted in 7 drives being stuck in 2 slots, with one drive experiencing polling issues. We found the faulty connection on the backplane at location 16#0204 in Logix.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hypoxia</span></li>
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
<h4 class='text-dark'>FAQ: What is a Sercos ring fault?</h4>
<p class='text-muted'><strong>Answer:</strong> A Sercos ring fault is an error related to the communication ring in a Sercos network, often causing disruptions in data exchange between devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What could be causing a Sercos ring fault with CompactLogix L43 and Kinetix 6000 drives?</h4>
<p class='text-muted'><strong>Answer:</strong> Possible causes could include issues with the backplane communication, faulty fiber optic cables, or configuration errors in the network setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: How can I troubleshoot a Sercos ring fault in this setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Troubleshooting steps may involve checking the integrity of fiber optic cables, verifying network configurations, examining backplane communication, and ensuring proper grounding and power supply.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What are some practical solutions for resolving a Sercos ring fault in a CompactLogix L43 and Kinetix 6000 setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Practical solutions may include checking and replacing faulty cables, updating firmware, adjusting network settings, verifying device compatibility, and consulting technical support for further guidance.</p>
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
