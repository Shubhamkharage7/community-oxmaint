
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, We are currently experiencing issues with our PanelView Plus 7 device. Upon booting the panel, an error message appears stating Could not set FactoryTalk Linx data server configuration. Do you wish to continue? If you select yes, the application appears to load but remains stalled without any">
    <meta name="keywords" content="panelview plus 7, troubleshooting error message, factorytalk linx data server, backup procedure, restore procedure, load application, terminal settings, reset, factorytalk view me application manager, plc connection issue, hmi reset, ip addressing configuration">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-error-message-on-panelview-plus-7-backup-and-restore-procedure-needed">
    <title>Troubleshooting Error Message on PanelView Plus 7: Backup and Restore Procedure Needed | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Error Message on PanelView Plus 7: Backup and Restore Procedure Needed | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, We are currently experiencing issues with our PanelView Plus 7 device. Upon booting the panel, an error message appears stating Could not set FactoryTalk Linx data server configuration. Do you wish to continue? If you select yes, the application appears to load but remains stalled without any">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-error-message-on-panelview-plus-7-backup-and-restore-procedure-needed">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Error Message on PanelView Plus 7: Backup and Restore Procedure Needed | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, We are currently experiencing issues with our PanelView Plus 7 device. Upon booting the panel, an error message appears stating Could not set FactoryTalk Linx data server configuration. Do you wish to continue? If you select yes, the application appears to load but remains stalled without any">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-error-message-on-panelview-plus-7-backup-and-restore-procedure-needed"
      },
      "headline": "Troubleshooting Error Message on PanelView Plus 7: Backup and Restore Procedure Needed",
      "description": "Greetings everyone, We are currently experiencing issues with our PanelView Plus 7 device. Upon booting the panel, an error message appears stating Could not set FactoryTalk Linx data server configuration. Do you wish to continue? If you select yes, the application appears to load but remains stalled without any",
      "author": {
        "@type": "Person",
        "name": "Bering C Sparky"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-04",
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
                <h1 class="text-white">Troubleshooting Error Message on PanelView Plus 7: Backup and Restore Procedure Needed</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Bering C Sparky</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">200</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">469</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone,

We are currently experiencing issues with our PanelView Plus 7 device. Upon booting the panel, an error message appears stating "Could not set FactoryTalk Linx data server configuration. Do you wish to continue?" If you select yes, the application appears to load but remains stalled without any progress. Choosing no gives you the options of Load Application, Terminal Settings, or Reset.

After attempting to Load Application and still encountering the same error message, we reached out to the company that installed the equipment for assistance. They initially suggested a potential PLC issue, but I mentioned that the PanelView application should still load even without a PLC connection, albeit without any data. They recommended backing up the PanelView, resetting it, and reloading the application file. If the issue persists, replacing the PanelView may be necessary.

To address this issue, I plan to backup the application using FactoryTalk View ME Application Manager, reset the HMI, reconfigure the correct IP addressing, and then restore the application. However, I am uncertain if additional steps are required for the "Runtime" component. I vaguely remember the use of .apa and .mer files for backup and restore procedures, but I lack confidence in the exact process after a long period of not working with PanelViews.

Research on forums and the Rockwell website has been inconclusive, especially since most information pertains to different models than the PVP7. As we are currently in the Bering Sea, I want to ensure I am following the correct procedure before proceeding.

If anyone could provide a brief refresher on the correct backup and restore procedure for the PV7 PanelView, I would greatly appreciate it.

Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I found the relevant information comparing APA and MLA styles. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bering C Sparky</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: What does the error message "Could not set FactoryTalk Linx data server configuration. Do you wish to continue?" indicate on the PanelView Plus 7 device?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This error message typically appears when there is an issue with the FactoryTalk Linx data server configuration on the PanelView Plus 7 device.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can I resolve the issue of the application stalling after encountering the error message on the PanelView Plus 7?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One approach to resolving this issue is by backing up the PanelView application, resetting the HMI, reconfiguring the correct IP addressing, and then restoring the application file.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: What are the recommended steps for backing up and restoring the application on a PanelView Plus 7 device?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The recommended steps include using FactoryTalk View ME Application Manager to backup the application, resetting the HMI, reconfiguring IP addressing, and then restoring the application. It is essential to ensure the correct backup and restore procedures are followed to avoid any data loss or application malfunction.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: Are there specific file formats or components to consider when performing a backup and restore procedure on a PanelView Plus 7 device?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When backing up and restoring applications on a PanelView Plus 7 device, you may encounter .apa and .mer files. These files are commonly used in the backup and restore process, but it is important to follow the correct procedure for</p>
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
