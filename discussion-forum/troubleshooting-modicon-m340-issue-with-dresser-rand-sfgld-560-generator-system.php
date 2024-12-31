
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently facing an issue with the Modicon System that operates our Generator System, specifically the Dresser-Rand SFGLD 560. The problem lies with the analog Output Module BMXAMO0410, which unexpectedly malfunctions and causes the Generators to trip. One of the channels on this module is responsible">
    <meta name="keywords" content="modicon m340, dresser-rand sfgld 560, generator system, analog output module, bmxamo0410, voltage via avr, green status led, power recycle, unity pro, external fault, power supply fault">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modicon-m340-issue-with-dresser-rand-sfgld-560-generator-system">
    <title>Troubleshooting Modicon M340 Issue with Dresser-Rand SFGLD 560 Generator System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Modicon M340 Issue with Dresser-Rand SFGLD 560 Generator System | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently facing an issue with the Modicon System that operates our Generator System, specifically the Dresser-Rand SFGLD 560. The problem lies with the analog Output Module BMXAMO0410, which unexpectedly malfunctions and causes the Generators to trip. One of the channels on this module is responsible">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modicon-m340-issue-with-dresser-rand-sfgld-560-generator-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Modicon M340 Issue with Dresser-Rand SFGLD 560 Generator System | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently facing an issue with the Modicon System that operates our Generator System, specifically the Dresser-Rand SFGLD 560. The problem lies with the analog Output Module BMXAMO0410, which unexpectedly malfunctions and causes the Generators to trip. One of the channels on this module is responsible">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modicon-m340-issue-with-dresser-rand-sfgld-560-generator-system"
      },
      "headline": "Troubleshooting Modicon M340 Issue with Dresser-Rand SFGLD 560 Generator System",
      "description": "Hello everyone, I am currently facing an issue with the Modicon System that operates our Generator System, specifically the Dresser-Rand SFGLD 560. The problem lies with the analog Output Module BMXAMO0410, which unexpectedly malfunctions and causes the Generators to trip. One of the channels on this module is responsible",
      "author": {
        "@type": "Person",
        "name": "Aazim Raza"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-28",
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
                <h1 class="text-white">Troubleshooting Modicon M340 Issue with Dresser-Rand SFGLD 560 Generator System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Aazim Raza</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2883</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">239</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently facing an issue with the Modicon System that operates our Generator System, specifically the Dresser-Rand SFGLD 560. The problem lies with the analog Output Module BMXAMO0410, which unexpectedly malfunctions and causes the Generators to trip. One of the channels on this module is responsible for maintaining and controlling Voltage via AvR. When the issue occurs, all 4 channels in the module stop functioning and only 1 green status LED remains stable. We have to power recycle the rack to normalize the module, but the problem resurfaces almost every week. We tried replacing the Analog Output Module, which temporarily solved the problem. However, after 3 to 4 months, the same issue reappeared and we are at a loss. We also checked the debug option from Unity Pro for the module and it indicated External Fault - Power Supply Fault, Internal Fault - Module Unserviceable, and Other Fault - Application Fault. These faults reset after power recycling. If anyone has any insights on resolving this issue, please let me know.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To troubleshoot, start by inspecting the wiring. Check if the outputs are fused at the panel and if the fuses are the right size. Consider the distance between the control card and the final device. It appears there may be a short circuit or excessive load causing the entire card to fail.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chud</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I haven't utilized Modicon before, I have encountered similar faults in a few PLCs. These issues are often caused by loose or broken wiring within the outer coating, which can make a connection when moved. Poor contacts or dry joints on the backplane connectors are also common culprits. I recently fixed a similar issue with an SLC500 PLC by cleaning the backplane connectors and re-soldering all the connections. It may be beneficial to investigate these areas if you are experiencing a similar problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When troubleshooting an electrical issue, it is important to first check the wiring. Ensure that the outputs are properly fused before exiting the panel, and that the fuses are the correct size. Also, consider the distance between the control card and the final device to identify any potential short circuits or excessive loads that may be causing the card to fail. In this case, the wiring has been inspected and no fuses are installed between the panel and the final device. The distance is relatively short, about 50 to 60 meters. Isolation and loop testing have been conducted on the cable with no issues found. The cable has been thoroughly inspected and no damage to the wires has been detected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aazim Raza</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky mentioned that, while they have not used Modicon PLCs, they have encountered similar faults in a few PLCs in the past. The most common causes of these faults were found to be issues with wiring, such as loose connections or broken wires within the insulation that could make contact when moved. They also noted that poor contacts on the backplane or dry joints could be contributing factors. In a previous experience with an SLC500 PLC, cleaning the backplane connectors and re-soldering all the connectors resolved the issue.

I, too, am considering the possibility that the issue is related to the backplane. However, the programming software is also indicating a problem with the Power Supply. With this in mind, I decided to replace both the Power Supply and the Backplane today and put the machine back into operation. Hopefully, this will resolve the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aazim Raza</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Troubleshooting Communication Issue between M340 PLC and PRA 0100

Greetings, I am currently facing a challenge with the communication link between an M340 PLC and a PRA 0100 device. While controlling a critical process, the process suddenly halts without any apparent faults in either the PLC or the PRA. Upon closer examination, it was noted that a specific input module intermittently flashes before the process comes to a stop, resembling a manual stop command being triggered – despite no such action being taken. I am inclined to suspect that the issue may stem from a potential backplane problem or a defective module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jorge?07</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Having trouble with the BMXAMO0802 analog output card? Despite setting a fixed value, encountering discrepancies between the displayed value in the function block and the actual value to the PCV? A series of troubleshooting steps have been taken, including testing the PCV controller for 4-20mA, checking loop wiring, verifying channel status, and confirming that the function block output is functioning properly. Seeking advice and assistance on resolving this issue. Thank you, RL.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>reimonl</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing the malfunction of the analog Output Module BMXAMO0410 in the Modicon System controlling the Dresser-Rand SFGLD 560 Generator System?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue could be related to the External Fault - Power Supply Fault, Internal Fault - Module Unserviceable, and Other Fault - Application Fault detected by the debug option in Unity Pro. These faults reset after power recycling, indicating a recurring problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can the problem of all 4 channels in the analog Output Module failing be resolved?</h4>
<p class='text-muted'><strong>Answer:</strong> - Power recycling the rack temporarily normalizes the module, but the issue resurfaces almost every week. This suggests a persistent underlying problem that needs to be identified and addressed to prevent frequent failures.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps have been taken to troubleshoot the issue with the Modicon System and Dresser-Rand SFGLD 560 Generator System?</h4>
<p class='text-muted'><strong>Answer:</strong> - The user mentioned replacing the Analog Output Module, which initially solved the problem but recurred after a few months. Checking the debug option in Unity Pro provided insights into the faults detected, but a lasting solution is still needed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific maintenance procedures or checks recommended to prevent the analog Output Module malfunction in the future?</h4>
<p class='text-muted'><strong>Answer:</strong> - Regular maintenance checks, monitoring of error logs, and conducting thorough diagnostic tests on the analog Output Module could help identify any potential issues before they escalate into full-blown malfunctions causing the Generators to trip.</p>
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
