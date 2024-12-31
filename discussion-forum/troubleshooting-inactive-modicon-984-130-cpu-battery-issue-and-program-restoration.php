
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Today, I will be examining a customers Modicon PLC that has been inactive for a few months. Upon starting it up, the customer noticed that nothing happened and the battery light on the CPU was illuminated. This indicates a potential issue with the battery. This will only be my">
    <meta name="keywords" content="modicon plc, modicon 984 130 cpu, battery issue, program restoration, inactive plc, cpu battery, output lights, program loss, backup file, dot-matrix printout, ladder program, plc workshop, fastrack">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-inactive-modicon-984-130-cpu-battery-issue-and-program-restoration">
    <title>Troubleshooting Inactive Modicon 984 130 CPU: Battery Issue and Program Restoration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Inactive Modicon 984 130 CPU: Battery Issue and Program Restoration | Oxmaint Community">
    <meta property="og:description" content="Today, I will be examining a customers Modicon PLC that has been inactive for a few months. Upon starting it up, the customer noticed that nothing happened and the battery light on the CPU was illuminated. This indicates a potential issue with the battery. This will only be my">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-inactive-modicon-984-130-cpu-battery-issue-and-program-restoration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Inactive Modicon 984 130 CPU: Battery Issue and Program Restoration | Oxmaint Community">
    <meta name="twitter:description" content="Today, I will be examining a customers Modicon PLC that has been inactive for a few months. Upon starting it up, the customer noticed that nothing happened and the battery light on the CPU was illuminated. This indicates a potential issue with the battery. This will only be my">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-inactive-modicon-984-130-cpu-battery-issue-and-program-restoration"
      },
      "headline": "Troubleshooting Inactive Modicon 984 130 CPU: Battery Issue and Program Restoration",
      "description": "Today, I will be examining a customers Modicon PLC that has been inactive for a few months. Upon starting it up, the customer noticed that nothing happened and the battery light on the CPU was illuminated. This indicates a potential issue with the battery. This will only be my",
      "author": {
        "@type": "Person",
        "name": "AutomationTechBrian"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-30",
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
                <h1 class="text-white">Troubleshooting Inactive Modicon 984 130 CPU: Battery Issue and Program Restoration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">180</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">7</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Today, I will be examining a customer's Modicon PLC that has been inactive for a few months. Upon starting it up, the customer noticed that nothing happened and the battery light on the CPU was illuminated. This indicates a potential issue with the battery. This will only be my second encounter with a Modicon PLC in the field, so I have a lot to learn. I will power it on and assess if any of the output lights on the cards are working. If the program is lost, I will need to determine the importance of restoring it for the customer. Unfortunately, they do not have a backup of the program file and the previous technician is no longer available. However, they do have a dot-matrix printout of the ladder program dated 4/15/1998. If a new project needs to be initiated, I will need to evaluate if it is worth pursuing.

In my research, I came across a third-party programming software solution called PLC Workshop by FasTrack SoftWorks. Although pricing information is not available on their website, it seems like a viable option for recreating the program. However, I would appreciate insights from someone experienced in this area. The customer has provided me with some pictures for reference, and I am open to any thoughts or feedback from individuals knowledgeable about Modicon PLCs.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to programming, it is essential to use Lmodsoft, a software developed in the mid-80s. Fastrack also released its own Windows-compatible version after realizing that Lmodsoft did not work on Windows systems. Additionally, Schneider offered proWORX software for Windows, though it is uncertain if it supported the same PLCs. While Schneider no longer sells licenses for these programs, it may be possible to obtain programming software through them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be the potential issue if a Modicon PLC has been inactive for a few months and the battery light on the CPU is illuminated?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The illuminated battery light on the CPU indicates a potential issue with the battery, which may have drained or failed due to prolonged inactivity.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can one assess if the program is lost on a Modicon PLC and determine the importance of restoring it for the customer?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: By powering on the PLC and checking if any of the output lights on the cards are working, one can assess if the program is lost. The importance of restoring it for the customer depends on the criticality of the program in the PLC's operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What options are available if a Modicon PLC's program is lost and there is no backup file available?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the program is lost and no backup file is available, one option could be to recreate the program using a dot-matrix printout of the ladder program or third-party programming software solutions like PLC Workshop by FasTrack SoftWorks.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can one recreate a lost program for a Modicon PLC with the help of a dot-matrix printout of the ladder program dated 4/15/1998?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Recreating the lost program from a dot-matrix printout involves manually inputting the ladder logic based on the provided printout. This process requires careful attention to detail and verification</p>
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
