
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, my colleague and I are currently working on synchronizing two ControlLogix racks with 7-slot chassis and identical modules. Despite successfully observing the secondary rack incrementing the IP addresses of its ethernet modules by +1 on each of the last octets, the secondary rack always displays DISQ. This issue">
    <meta name="keywords" content="controllogix redundancy setup, controllogix en2tr module, troubleshooting controllogix racks, controllogix ethernet module configuration, controllogix rack synchronization">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-redundancy-setup-with-en2tr-module">
    <title>Troubleshooting ControlLogix Redundancy Setup with EN2TR Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting ControlLogix Redundancy Setup with EN2TR Module | Oxmaint Community">
    <meta property="og:description" content="Hello, my colleague and I are currently working on synchronizing two ControlLogix racks with 7-slot chassis and identical modules. Despite successfully observing the secondary rack incrementing the IP addresses of its ethernet modules by +1 on each of the last octets, the secondary rack always displays DISQ. This issue">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-redundancy-setup-with-en2tr-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting ControlLogix Redundancy Setup with EN2TR Module | Oxmaint Community">
    <meta name="twitter:description" content="Hello, my colleague and I are currently working on synchronizing two ControlLogix racks with 7-slot chassis and identical modules. Despite successfully observing the secondary rack incrementing the IP addresses of its ethernet modules by +1 on each of the last octets, the secondary rack always displays DISQ. This issue">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-redundancy-setup-with-en2tr-module"
      },
      "headline": "Troubleshooting ControlLogix Redundancy Setup with EN2TR Module",
      "description": "Hello, my colleague and I are currently working on synchronizing two ControlLogix racks with 7-slot chassis and identical modules. Despite successfully observing the secondary rack incrementing the IP addresses of its ethernet modules by +1 on each of the last octets, the secondary rack always displays DISQ. This issue",
      "author": {
        "@type": "Person",
        "name": "slick_william"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-14",
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
                <h1 class="text-white">Troubleshooting ControlLogix Redundancy Setup with EN2TR Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>slick_william</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">553</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">294</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, my colleague and I are currently working on synchronizing two ControlLogix racks with 7-slot chassis and identical modules. Despite successfully observing the secondary rack incrementing the IP addresses of its ethernet modules by +1 on each of the last octets, the secondary rack always displays "DISQ." This issue persists even though we have resolved similar setups in the past without the EN2TR module being involved.

Our setup includes two identical ControlLogix 1756-L82e racks configured as follows:
- Slot 0: 1756-L82e (CPU, v34.014)
- Slot 1: 1756-RM2 (Redundancy module)
- Slot 2: 1756-EN2T (Ethernet module, v11.004)
- Slot 3: 1756-EN2TR (Ethernet module, v11.004)

We have established connections using fiber pairs between the RM2 modules and have also attempted to connect CAT5 cables between the EN2T and EN2TR modules in each rack, yielding similar results.

Initially, we encountered an error indicating that the EN2TR was not configured for IP swapping. This issue was resolved by assigning a different IP address to the EN2TR compared to the EN2T. While there are currently no errors and all connections indicate full compatibility, the status still shows as Disqualified.

If anyone has any tips or suggestions on how to successfully synchronize these racks, we would appreciate the assistance. We have already attempted time synchronization, power cycling, and disconnecting other equipment, but are running out of solutions. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Today, I discovered that the traditional guideline stating that Redundancy bundles must start with subrevision .050 is no longer applicable! Have you connected the Ethernet modules to actual switches to enable communication between them, particularly the matched sets? Is there a specific reason for mixing both 1756-EN2T and 1756-EN2TR modules? Are you utilizing a DLR ring on the 1756-EN2TR's? Typically, the Redundancy Module Configuration Tool provides information on the reason for any qualification failure. Have you checked the event log for any indications of a failure in the qualification process? My assumption is that if you have not installed and configured your switches and are merely linking Ethernet modules together, the issue may be related to CIP Sync and the grandmaster clock selection. However, there should be some indication of this.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach discovered that the old rule stating that Redundancy bundles begin with subrevision .050 is no longer in effect. Are the Ethernet modules connected to switches for communication, especially the matched sets? What is the reason for using a mix of 1756-EN2T and 1756-EN2TR modules? Are DLR rings used on the 1756-EN2TR's? The Redundancy Module Configuration Tool usually provides the reason for qualification failure. If switches are not properly installed and configured, issues with CIP Sync and grandmaster clock selection may arise.

Regarding DLR setups, can only one EN2TR be set as supervisor and still maintain Redundancy? In the event of a rack failure, the other EN2TR would need to take over as the supervisor. It may be necessary to have a stratix function as the supervisor instead of either EN2TR. This setup raises questions about the redundancy protocol and if alternative solutions are available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure proper functionality, it is important to verify that the RM2 firmware matches the revision listed in the redundancy bundle. Next, confirm in the Redundancy Module Configuration Tool (RMCT) that SYNC is set to Always. RMCT can identify any modules causing SYNC issues. In cases where SYNC problems persist, removing both Ethernet modules from the chassis, leaving only the processor and RM2, can help. Additionally, double check the Time Sync settings on the processor and Ethernet modules to ensure they are in sync. It is recommended to keep Time Sync on for both, even if not needed. If RMCT gets stuck at 80%, this may indicate a time sync problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering the DLR supervisor feature, both EN2TRs can be equipped with Supervisor capability, although only one will serve as the Active Supervisor. It is unnecessary to designate another device as the supervisor. In my experience, issues with Supervisor activation are rare, unlike the frequent challenges posed by Time Sync synchronization.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my ControlLogix secondary rack displaying "DISQ" despite successful IP address incrementation?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The "DISQ" status on the secondary rack may persist due to issues related to IP address configuration, network module compatibility, or synchronization settings. Ensure that the EN2TR module is correctly configured for IP swapping and has a unique IP address compared to the EN2T module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be causing the "DISQ" status on my ControlLogix redundancy setup with the EN2TR module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Common reasons for the "DISQ" status include improper fiber pair connections between RM2 modules, incorrect CAT5 cable connections between EN2T and EN2TR modules, synchronization issues, or module compatibility problems. Verify all connections, configurations, and compatibility settings to troubleshoot the "DISQ" status.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I resolve the "DISQ" status issue in my ControlLogix racks with EN2TR modules?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To address the "DISQ" status problem, consider rechecking IP configurations, ensuring proper network module assignments, verifying synchronization processes, and confirming compatibility between modules. Additionally, seek advice from other users who have successfully synchronized similar setups for additional troubleshooting suggestions.</p>
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
