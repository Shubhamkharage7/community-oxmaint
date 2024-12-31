
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am seeking assistance with a DLR issue we have encountered where the DLR fails to work when the supervisor is disconnected from the ring. Our system architecture consists of 126 as the supervisor and 127 and 124 as backup supervisors. Although the ring appears healthy and">
    <meta name="keywords" content="dlr supervisor disconnection problem, troubleshooting dlr issue, dlr ring fault, en2tr card issue, dlr tools problem, supervisor disconnect troubleshoot, backup supervisors fail, dlr architecture error, ring connection fault">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-dlr-supervisor-disconnection-problem">
    <title>Troubleshooting DLR Supervisor Disconnection Problem | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting DLR Supervisor Disconnection Problem | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am seeking assistance with a DLR issue we have encountered where the DLR fails to work when the supervisor is disconnected from the ring. Our system architecture consists of 126 as the supervisor and 127 and 124 as backup supervisors. Although the ring appears healthy and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-dlr-supervisor-disconnection-problem">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting DLR Supervisor Disconnection Problem | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am seeking assistance with a DLR issue we have encountered where the DLR fails to work when the supervisor is disconnected from the ring. Our system architecture consists of 126 as the supervisor and 127 and 124 as backup supervisors. Although the ring appears healthy and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-dlr-supervisor-disconnection-problem"
      },
      "headline": "Troubleshooting DLR Supervisor Disconnection Problem",
      "description": "Hello everyone, I am seeking assistance with a DLR issue we have encountered where the DLR fails to work when the supervisor is disconnected from the ring. Our system architecture consists of 126 as the supervisor and 127 and 124 as backup supervisors. Although the ring appears healthy and",
      "author": {
        "@type": "Person",
        "name": "Bryd29"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-27",
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
                <h1 class="text-white">Troubleshooting DLR Supervisor Disconnection Problem</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Bryd29</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">301</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">260</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am seeking assistance with a DLR issue we have encountered where the DLR fails to work when the supervisor is disconnected from the ring. Our system architecture consists of 126 as the supervisor and 127 and 124 as backup supervisors. Although the ring appears healthy and normal in DLR Tools, an issue arises when both connections to the supervisor EN2TR card are disconnected, resulting in a faulted ring. DLR tools only detect the 127 EN2TR in this scenario. However, when the non-supervisor EN2TR is disconnected, DLR tools are still able to detect the other card. Has anyone else faced this issue before? Any suggestions on how to resolve it would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Bryde29, welcome to the forum. Can you please provide the DLR parameters for the main supervisor and the two DLR supervisors? Have you made any changes to the baud rate and duplex settings? When using DLR, it is recommended to use the automatic setting. Additionally, it is important to ensure that the firmware of all modules in the 1756-ENTR/C is consistent.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the forum, Bryde29! It's great to have you here. Can you please provide the DLR parameters for the main and the two DLR supervisors? Have there been any changes made to the baud rate and duplex settings? It is recommended to use automatic settings for DLR. Additionally, it's important to ensure that the firmware for all 1756-ENTR/C modules is the same. Thank you for your response, Alfredo. All EN2TR modules have the same firmware, and the baud rate and duplex settings are set to auto negotiate for both EN2TR and ETAP.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bryd29</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the main supervisor (.126) is disconnected from both ends, will RSLinx still detect your nodes? If so, it may indicate a problem with the DLR tool.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One potential limitation of the DLR Sign-On and Participant list used by the DLR Tool is that it relies on the DLR Participant list to generate graphics. However, version .127 may not generate a Participant List until it detects a "Normal" (i.e. healthy) ring to transmit a Sign-On message. It is unclear if a manually sent Sign-On message will create a participant list. To confirm this, try bypassing version .126 with a cable jumper to assess if everything returns as expected. This troubleshooting step can help determine if all functions properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why does the DLR fail to work when the supervisor is disconnected from the ring?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue with the DLR failing to work when the supervisor is disconnected may be due to a faulted ring when both connections to the supervisor EN2TR card are disconnected.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the system architecture in this DLR setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - The system architecture consists of 126 as the supervisor and 127 and 124 as backup supervisors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What happens when the non-supervisor EN2TR is disconnected in the DLR setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - When the non-supervisor EN2TR is disconnected, DLR tools are still able to detect the other card.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I troubleshoot the DLR Supervisor Disconnection Problem?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot the DLR Supervisor Disconnection Problem, you can check the health and status of the ring in DLR Tools, investigate any faulted ring conditions, and consider any specific configurations related to supervisor disconnectivity.</p>
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
