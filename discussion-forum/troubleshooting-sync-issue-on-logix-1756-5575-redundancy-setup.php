
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I need urgent assistance with our Logic 5575 system set up in hot standby mode. We are facing an issue where the primary unit is unable to sync with the secondary unit. The synchronization process starts but gets stuck at 54% consistently. We have attempted to resolve">
    <meta name="keywords" content="logix 1756 5575, redundancy setup, troubleshooting sync issue, hot standby mode, primary unit, secondary unit, synchronization process, stuck at 54%, rebooting secondary chassis, cpu replacement">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-sync-issue-on-logix-1756-5575-redundancy-setup">
    <title>Troubleshooting Sync Issue on Logix 1756 5575 Redundancy Setup | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Sync Issue on Logix 1756 5575 Redundancy Setup | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I need urgent assistance with our Logic 5575 system set up in hot standby mode. We are facing an issue where the primary unit is unable to sync with the secondary unit. The synchronization process starts but gets stuck at 54% consistently. We have attempted to resolve">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-sync-issue-on-logix-1756-5575-redundancy-setup">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Sync Issue on Logix 1756 5575 Redundancy Setup | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I need urgent assistance with our Logic 5575 system set up in hot standby mode. We are facing an issue where the primary unit is unable to sync with the secondary unit. The synchronization process starts but gets stuck at 54% consistently. We have attempted to resolve">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-sync-issue-on-logix-1756-5575-redundancy-setup"
      },
      "headline": "Troubleshooting Sync Issue on Logix 1756 5575 Redundancy Setup",
      "description": "Hello everyone, I need urgent assistance with our Logic 5575 system set up in hot standby mode. We are facing an issue where the primary unit is unable to sync with the secondary unit. The synchronization process starts but gets stuck at 54% consistently. We have attempted to resolve",
      "author": {
        "@type": "Person",
        "name": "QasimFSH"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-23",
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
                <h1 class="text-white">Troubleshooting Sync Issue on Logix 1756 5575 Redundancy Setup</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>QasimFSH</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">508</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">24</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I need urgent assistance with our Logic 5575 system set up in hot standby mode. We are facing an issue where the primary unit is unable to sync with the secondary unit. The synchronization process starts but gets stuck at 54% consistently. We have attempted to resolve the issue by rebooting the secondary chassis, replacing the CPUs, and changing the RM module. Despite these efforts, we are still unable to determine the root cause of the problem, especially considering the system was functioning smoothly until now. If anyone has any insights or suggestions, please share them as soon as possible.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you checked the Redundancy Configuration Tool in the event logs? Are both processors connected in a DLR ring? Make sure to monitor the DLR's health in this case.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, the PLC pairs are functioning properly here. However, we also have other PLC pairs in operation that are performing well. Is it possible that there is still a problem with the DLR?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>QasimFSH</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>QasimFSH mentioned the possibility of issues with a DLR affecting synchronization. It is important to monitor the health of the DLR to prevent any hang-ups in the synchronization process. Despite this, other PLC pairs are still working fine. It is recommended to check the event logs in the configurator for further insights. Furthermore, losing one leg of the DLR can impact the redundancy synchronization process, so it is crucial to address any potential issues promptly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you please provide me with the tech note ID so I can review it? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asenior</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The last time I encountered a similar issue, it was due to a malfunctioning EN2TR component in one of the equipment racks. This issue can often be attributed to faulty hardware.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The sole issue recorded in the Event Log is the occurrence of an error.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>QasimFSH</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dalporto shared: The last time I encountered a situation like that, it turned out to be a faulty EN2TR in one of the racks. How did you pinpoint the issue? I am currently working on fixing it, so any assistance at this point would be very helpful.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>QasimFSH</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover more about troubleshooting errors with the 1756-RM/RM2 Redundancy Module in this technical note. Explore solutions for the COMM ERR PRT and COMM RSRC ERR PRT errors that may be affecting your system. Visit rockwellautomation.custhelp.com for detailed information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tarik1978 suggested referring to a technical document with the ID BF28577, accessible to all users, regarding troubleshooting the "COMM ERR PRT" and "COMM RSRC ERR PRT" errors on the 1756-RM/RM2 Redundancy Module. For more information, visit rockwellautomation.custhelp.com. I will look into this. Thanks for the recommendation!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>QasimFSH</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Despite trying various troubleshooting methods, the issue persisted until we eventually decided to reboot the primary PLC. This decision was made after setting up the secondary PLC as the primary one. As of now, we are still uncertain about the underlying cause of this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>QasimFSH</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the primary unit unable to sync with the secondary unit in the Logix 1756 5575 redundancy setup?</h4>
<p class='text-muted'><strong>Answer:</strong> -  The synchronization process getting stuck at 54% could indicate a potential issue with the communication or configuration between the primary and secondary units.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What steps have been taken to troubleshoot the sync issue in the Logix 1756 5575 redundancy setup?</h4>
<p class='text-muted'><strong>Answer:</strong> -  The user mentioned attempting to resolve the problem by rebooting the secondary chassis, replacing the CPUs, and changing the RM module. These are common troubleshooting steps to address synchronization issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What could be the possible root cause of the synchronization problem in the Logic 5575 system set up in hot standby mode?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Determining the root cause of the issue may require further investigation into the network configuration, firmware compatibility, software settings, or potential hardware failures that could be affecting the sync process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can one ensure the Logix 1756 5575 system functions smoothly in a redundancy setup?</h4>
<p class='text-muted'><strong>Answer:</strong> -  To ensure smooth operation in a redundancy setup, it is essential to regularly monitor system performance, conduct routine maintenance checks, and promptly address any synchronization issues as they arise to prevent system downtime.</p>
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
