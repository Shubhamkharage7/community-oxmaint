
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, I am seeking insights into a recent issue I encountered with my system. The setup includes 4 CompactLogix 5069-L310ER CPUs - one Supervisory and three remote units connected via their own 4G ethernet router. Communication is established through CIP reads in both directions, with the Supervisory reading">
    <meta name="keywords" content="compactlogix plcs, communication loss, firmware upgrade, troubleshooting, impact, v29, v34, cip reads, ethernet router, connection failure, remote units, supervisory cpu, 4g communication, message instructions, connected">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-loss-in-compactlogix-plcs-impact-of-firmware-upgrade">
    <title>Troubleshooting Communication Loss in CompactLogix PLCs: Impact of Firmware Upgrade | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Loss in CompactLogix PLCs: Impact of Firmware Upgrade | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, I am seeking insights into a recent issue I encountered with my system. The setup includes 4 CompactLogix 5069-L310ER CPUs - one Supervisory and three remote units connected via their own 4G ethernet router. Communication is established through CIP reads in both directions, with the Supervisory reading">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-loss-in-compactlogix-plcs-impact-of-firmware-upgrade">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Loss in CompactLogix PLCs: Impact of Firmware Upgrade | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, I am seeking insights into a recent issue I encountered with my system. The setup includes 4 CompactLogix 5069-L310ER CPUs - one Supervisory and three remote units connected via their own 4G ethernet router. Communication is established through CIP reads in both directions, with the Supervisory reading">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-loss-in-compactlogix-plcs-impact-of-firmware-upgrade"
      },
      "headline": "Troubleshooting Communication Loss in CompactLogix PLCs: Impact of Firmware Upgrade",
      "description": "Greetings everyone, I am seeking insights into a recent issue I encountered with my system. The setup includes 4 CompactLogix 5069-L310ER CPUs - one Supervisory and three remote units connected via their own 4G ethernet router. Communication is established through CIP reads in both directions, with the Supervisory reading",
      "author": {
        "@type": "Person",
        "name": "elfrider"
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
                <h1 class="text-white">Troubleshooting Communication Loss in CompactLogix PLCs: Impact of Firmware Upgrade</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>elfrider</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">267</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">448</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone, I am seeking insights into a recent issue I encountered with my system. The setup includes 4 CompactLogix 5069-L310ER CPUs - one Supervisory and three remote units connected via their own 4G ethernet router. Communication is established through CIP reads in both directions, with the Supervisory reading the remote sites and vice versa. Despite functioning smoothly for years, a firmware upgrade from V29 to V34 on the Supervisory PLC caused a loss of communication with the remote PLCs. Surprisingly, the Supervisory could still read the remote PLCs, but the reverse was not possible.

After troubleshooting and experimentation, I discovered that unchecking the "Connected" option within the message instructions of the remote sites resolved the issue. This raised questions about the significance of this setting change, especially since it worked fine with firmware V29. The error received was a "Connection Failure #0000_0125" without any clear explanation.

While my understanding of the "Connected" option is limited, I typically leave it enabled as recommended. This unique issue post-firmware upgrade has led me to consider the impact of slower 4G communication on the system. Any insights or advice on this matter would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Due to the previous connection and caching of the MSG instruction, it was skipping the unconnected message buffer upon initial connection. This led to an error once the processor was changed. In order to resolve this issue, you must untick the connected box to establish a new connection through an unconnected buffer. Once this is done, you should be able to confirm that the connection is both connected and cached.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee noted that the MSG instruction was causing errors because it was connected and cached, bypassing the unconnected message buffer. To resolve this issue, the connection needed to be broken by unticking the connected box and establishing a new connection through an unconnected buffer. Despite re-establishing the connection, attempting to re-tick the "Connected" box resulted in immediate errors. This problem had not occurred with other message instructions until now, despite power cycles and firmware updates on the PLCs. The cause of this sudden issue remains unclear.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>elfrider</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why did a firmware upgrade from V29 to V34 on the Supervisory PLC cause a loss of communication with the remote PLCs in the CompactLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The firmware upgrade may have introduced changes that affected the communication settings or protocols between the Supervisory and remote PLCs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What does the "Connected" option within message instructions of the remote sites do in the CompactLogix PLC setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - The "Connected" option in message instructions determines whether the PLC should establish and maintain a connection with the remote devices for communication. Unchecking this option may have resolved the communication issue post-firmware upgrade.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why did unchecking the "Connected" option within the message instructions of the remote sites resolve the communication issue after the firmware upgrade?</h4>
<p class='text-muted'><strong>Answer:</strong> - Disabling the "Connected" option may have helped bypass a potential issue in the communication setup that arose due to the firmware upgrade, allowing the Supervisory PLC to read the remote PLCs successfully.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What could be the impact of slower 4G communication on the CompactLogix PLC system, especially post-firmware upgrade?</h4>
<p class='text-muted'><strong>Answer:</strong> - Slower 4G communication speed may have contributed to communication failures or delays in data exchange between the Supervisory and remote PLCs after the firmware upgrade. It could be a factor to consider when troubleshooting communication issues in the system.</p>
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
