
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently troubleshooting a Compact GuardLogix 5380 CPU [5069-L306ERS2] installation facing a unique issue that is new to me. This CPU is overseeing a network of 8 nodes, a setup commonly found in various fields with minor differences. Recently, we upgraded from Kinetix 300 drives to Kinetix5100. The">
    <meta name="keywords" content="compact guardlogix 5380 cpu troubleshooting, auto-reboot issue in guardlogix cpu, recurring auto-reboot problem in compact guardlogix, guardlogix 5380 cpu error troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-recurring-auto-reboot-issue-in-compact-guardlogix-cpu">
    <title>Troubleshooting Recurring Auto-Reboot Issue in Compact GuardLogix CPU | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Recurring Auto-Reboot Issue in Compact GuardLogix CPU | Oxmaint Community">
    <meta property="og:description" content="I am currently troubleshooting a Compact GuardLogix 5380 CPU [5069-L306ERS2] installation facing a unique issue that is new to me. This CPU is overseeing a network of 8 nodes, a setup commonly found in various fields with minor differences. Recently, we upgraded from Kinetix 300 drives to Kinetix5100. The">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-recurring-auto-reboot-issue-in-compact-guardlogix-cpu">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Recurring Auto-Reboot Issue in Compact GuardLogix CPU | Oxmaint Community">
    <meta name="twitter:description" content="I am currently troubleshooting a Compact GuardLogix 5380 CPU [5069-L306ERS2] installation facing a unique issue that is new to me. This CPU is overseeing a network of 8 nodes, a setup commonly found in various fields with minor differences. Recently, we upgraded from Kinetix 300 drives to Kinetix5100. The">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-recurring-auto-reboot-issue-in-compact-guardlogix-cpu"
      },
      "headline": "Troubleshooting Recurring Auto-Reboot Issue in Compact GuardLogix CPU",
      "description": "I am currently troubleshooting a Compact GuardLogix 5380 CPU [5069-L306ERS2] installation facing a unique issue that is new to me. This CPU is overseeing a network of 8 nodes, a setup commonly found in various fields with minor differences. Recently, we upgraded from Kinetix 300 drives to Kinetix5100. The",
      "author": {
        "@type": "Person",
        "name": "DamianInRochester"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-24",
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
                <h1 class="text-white">Troubleshooting Recurring Auto-Reboot Issue in Compact GuardLogix CPU</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>DamianInRochester</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3340</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">267</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently troubleshooting a Compact GuardLogix 5380 CPU [5069-L306ERS2] installation facing a unique issue that is new to me. This CPU is overseeing a network of 8 nodes, a setup commonly found in various fields with minor differences. Recently, we upgraded from Kinetix 300 drives to Kinetix5100. The problem arises when the CPU runs for approximately 5 minutes, triggering an error that turns the OK led red and disrupts ethernet communication. The error lasts a few minutes before the system automatically recovers, resumes operation, only to repeat this cycle continuously. During the error, all nodes on the network respond to pings except the CPU. Although no ethernet errors are recorded when the CPU is online, no significant or minor faults are logged either. I attempted logging faults in the controller fault handler, but all values show zero once communication is restored. I am remotely diagnosing the issue through a secure Tosibox tunnel, ensuring the network remains isolated from external connections. Does anyone have suggestions on how I can identify the root cause of this recurring fault?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Diagnosing issues remotely can pose challenges. Is there anyone available on-site who can provide assistance? If I were there with a managed switch, I would configure port mirroring to analyze traffic with Wireshark directed to the controller. This way, we can investigate if the issue is consistently triggered by a specific packet.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When dealing with remote diagnostics, the lack of on-site support can pose challenges. If someone is available locally, could they offer assistance? If I were present with a managed switch, I would suggest setting up port mirroring to analyze traffic to the controller using Wireshark. This could help determine if a specific packet is consistently causing the issue.

Unfortunately, the site currently utilizes unmanaged Stratix 2000 [1783-US8T] switches, limiting diagnostic capabilities. It is uncertain whether the problem stems from an Ethernet issue or an error within the CPU preventing communication during errors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DamianInRochester</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could a corrupt SD card be causing the program to fail to load, resulting in the controller crashing? It's possible that you're unable to access fault information if the program is constantly being reloaded from the SD card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder inquired if an SD card is set up to reload the program in case of corrupted memory. It is possible that the controller crashes, making it difficult to access fault information as the program is reloaded from the SD card. The first thought is that the controller may be resetting for unknown reasons, as indicated by the red OK LED during power-up diagnostics.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I suspect the issue may be related to power, although I have limited experience with Compact GuardLogix systems (my first one is currently unopened). I conducted a power cycle test with my 5370 (1769-L33ER) and observed all LEDs turning off immediately, with the OK light briefly flashing red. Once power is restored, the OK light turns red while the system reboots. During this process, the system is inaccessible and cannot be pinged until it fully boots up. Once booted, the system functions as intended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The controller is not configured to reload the program from the SD card. A video provided by the customer shows the CPU encountering a fault condition, which does not seem to be caused by a power interruption but rather by internal diagnostics leading to the solid red OK light. Additionally, the customer is using a second CPU and has received a preloaded replacement for the PLC CPU, which did not resolve the issue. The customer also attempted to install a larger power supply independently, but this did not result in any changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DamianInRochester</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there a local rack with 5069-OW16 cards installed? I experienced a similar issue where auto-recovery did not always occur with a non-safety PLC, and the culprit turned out to be related to this specific type of card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Etter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The rack layout consists of the following modules: 5069-L306ERS, 5069-IB16, 5069-OB16, 5069-IB16, 5069-OB16, 5069-IB16, and 5069-OBV8.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DamianInRochester</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there a connection between MOD and SA power sources, or are they distinct entities? And if they are separate, do they share any commonalities?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Etter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Etter asked if the MOD and SA power sources are the same or different, and if they are connected in any way. Click to find out if they share a common source.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DamianInRochester</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>My next move would involve separating them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Etter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What are the potential reasons for the CPU fault and the red OK light, despite no major or minor faults showing in the log?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DamianInRochester</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like the startup process for a Programmable Logic Controller (PLC). This is why Steve recommended separating the power for the MOD and SA to ensure no power supply issues. Is your equipment exposed to high levels of vibration, like in a press? Make sure all connections are secure and properly plugged into the terminal strips. A few years ago, we had a similar issue with a piece of equipment. After closer inspection, we found a wire that appeared connected but was actually broken inside the insulation, resulting in poor contact with the remote IO block.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeyN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The act of disconnecting the power did not have any impact. I have recorded video evidence of the issue occurring, which did not resolve itself upon restarting the system. I am currently at the location and have carefully adjusted and checked all connections. If the problem lies with a loose connection on a connector or backplane, it should have caused the issue to reoccur.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DamianInRochester</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The issue I encountered was determined to be caused by switching noise from an inductive load, as stated by AB. The problem specifically affected 5069-OW16, 5069-OW4I, and 5069-OX4I modules, ultimately resulting in processor faults. I cannot be certain if a fault was logged in the PLC. To address this issue, it is recommended to use snubbers or suppressors for inductive loads. If the problem persists, try disconnecting all wiring terminals from the I/O modules and observe if it has an impact. This troubleshooting method may help in resolving the frequent occurrences of the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Etter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can you please share the solution to this issue? I am facing the same problem and would appreciate your help.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>slroti</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the Compact GuardLogix 5380 CPU to repeatedly auto-reboot after running for 5 minutes?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue causing the auto-reboot could be related to a fault triggered in the system that disrupts ethernet communication, leading to the red LED error on the CPU. It is essential to investigate potential causes such as network configuration issues, firmware compatibility with the upgraded Kinetix5100 drives, or any hardware malfunctions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the recurring auto-reboot issue in a Compact GuardLogix CPU overseeing a network of 8 nodes?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot the issue, you can start by checking the network setup, firmware versions, and hardware compatibility. It is recommended to analyze any error logs, review network communication settings, and ensure proper isolation of the network during diagnostics to identify the root cause of the fault.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why does the error in the Compact GuardLogix CPU cause disruption in ethernet communication and trigger the red OK LED?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error causing the disruption in ethernet communication and the red LED on the CPU could be a critical fault that temporarily halts operations. This could be due to software issues, hardware malfunctions, network configuration problems, or compatibility issues between the CPU and the Kinetix5100 drives. Further investigation and troubleshooting are necessary to pinpoint the exact cause.</p>
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
