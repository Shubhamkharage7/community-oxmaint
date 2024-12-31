
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone. I encountered an issue where a machine was running smoothly until the power was turned off for the weekend by the client. Upon restarting the machine on Monday, its no longer functioning properly. I have checked the hardware and program, and the BATT LED is on, indicating">
    <meta name="keywords" content="ge fanuc 90-30 cpu 350, troubleshooting, run enabled, program not executing, batt led, overridden values, plc run led, stop controls, status, diogo cd, machine issue, hardware check">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-fanuc-90-30-cpu-350-issue-run-enabled-but-program-not-executing">
    <title>Troubleshooting GE Fanuc 90-30 CPU 350 Issue: Run Enabled but Program Not Executing | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting GE Fanuc 90-30 CPU 350 Issue: Run Enabled but Program Not Executing | Oxmaint Community">
    <meta property="og:description" content="Hello everyone. I encountered an issue where a machine was running smoothly until the power was turned off for the weekend by the client. Upon restarting the machine on Monday, its no longer functioning properly. I have checked the hardware and program, and the BATT LED is on, indicating">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-fanuc-90-30-cpu-350-issue-run-enabled-but-program-not-executing">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting GE Fanuc 90-30 CPU 350 Issue: Run Enabled but Program Not Executing | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone. I encountered an issue where a machine was running smoothly until the power was turned off for the weekend by the client. Upon restarting the machine on Monday, its no longer functioning properly. I have checked the hardware and program, and the BATT LED is on, indicating">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ge-fanuc-90-30-cpu-350-issue-run-enabled-but-program-not-executing"
      },
      "headline": "Troubleshooting GE Fanuc 90-30 CPU 350 Issue: Run Enabled but Program Not Executing",
      "description": "Hello everyone. I encountered an issue where a machine was running smoothly until the power was turned off for the weekend by the client. Upon restarting the machine on Monday, its no longer functioning properly. I have checked the hardware and program, and the BATT LED is on, indicating",
      "author": {
        "@type": "Person",
        "name": "DiogoCD"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-22",
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
                <h1 class="text-white">Troubleshooting GE Fanuc 90-30 CPU 350 Issue: Run Enabled but Program Not Executing</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>DiogoCD</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">399</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">49</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone. I encountered an issue where a machine was running smoothly until the power was turned off for the weekend by the client. Upon restarting the machine on Monday, it's no longer functioning properly. I have checked the hardware and program, and the BATT LED is on, indicating no issues. I also found some Overridden values which I cleared. The PLC RUN LED responds to the run and stop controls, and the status shows Run Enabled, but the program is not being executed. As I am not experienced with PLCs, I am unsure if there are any other troubleshooting steps I can take before considering replacing the CPU. Your suggestions would be greatly appreciated. Thank you. - Diogo CD</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If the BATT LED is illuminated, it signifies that the battery is unable to retain RAM during a power outage. Your CPU may be set up to recover from the program stored in flash memory when it restarts with the RAM memory wiped. Consequently, the initial values of certain variables might differ from what was used previously. Additionally, there could be discrepancies between the saved version in flash memory and the actual running program. The screenshot you posted could result from the variable being written to a different location in the program or being part of a subroutine that was not activated during the screenshot capture.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the past, I have encountered problems with the 90-30 system where outputs would become disabled during powerdown or powerup events. Although I cannot pinpoint the exact location in the menus, look for an option in the top menu bar related to activating outputs. This issue is commonly searched by users of the 90-30 system as they try to troubleshoot problems with output functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When the BATT LED on a programmable logic controller (PLC) is illuminated, it indicates that the battery is unable to maintain RAM during a power outage. In this situation, the CPU may be set up to reboot using the program stored in flash memory, resulting in the RAM memory being cleared. Consequently, there is a possibility that the initial values of certain variables differ from those used previously. It is also possible that the data saved in flash memory may not perfectly match the previous operational state. The displayed screenshot may result from variables being written elsewhere in the program or from a subroutine that was not activated during the screenshot. Despite checking for any hardware or program loss, the issue persists. This discrepancy serves as an example of the PLC malfunctioning, as the variable is exclusively written in a specific block that is indeed being accessed. Additionally, the timers are not functioning, suggesting that the CPU is not executing the program properly, even though the RUN LED is illuminated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DiogoCD</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In previous experiences, users have encountered problems with the 90-30 system where outputs would become disabled during power cycles. While it may vary in location within the menus, look for an option in the top menu bar related to re-enabling outputs. When connected online, it should display "RUN Enabled" status.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DiogoCD</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have never faced this type of failure before, but we cannot dismiss the possibility of a faulty CPU. Have you checked the CPU fault table for any entries? Are all coil instructions affected, including both %M and %Q addresses? When researching other uses of the %M address linked to the malfunctioning coils, did you conduct a thorough search? This could reveal hidden usages within MOVE instructions that include the specific address you are seeking. Have you attempted toggling the %M or %Q bits on and off? If you can change a bit's state regardless of the logic preceding the coil instruction, it suggests the program is not running properly. If you cannot alter its state, something may be keeping it in its current state. Try the same approach with the malfunctioning timer. Changing the %R address for the timer instruction can indicate if the program is not assessing the rung with the timer instruction correctly. Verify the hardware configuration to ensure it is set to retrieve program and register memory from flash. If it is not, you may have reverted to an older setup that was controlling the machine before.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize performance and avoid issues, try resetting the CPU and reloading the backup data. Don't forget to inspect the fault table. Which software are you utilizing - LM90, Versapro, or Proficy Cimplicity? This step can greatly improve system reliability and efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>zahidj</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am utilizing the Versapro software for my PLC system. The fault table is pointing to a battery issue, and despite attempting various troubleshooting steps such as resetting the PLC and reloading the software, the problem persists. Even flashing the program did not yield any results, as the PLC remains in RUN mode without executing the program. The customer is now inquiring about the cost of replacing the PLC, which I believe may be the ultimate solution to this issue. Thank you for your assistance and support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DiogoCD</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am intrigued by the idea of your program causing a CPU failure as I have never witnessed that before. Would you be open to sharing a copy of your program with me? I am curious to test it on my CPU351 and replicate the behavior. If you're interested, feel free to send me a private message and I'll share my email address with you for easy communication. Let's investigate this surprising phenomenon together.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be the possible reasons for a GE Fanuc 90-30 CPU 350 showing Run Enabled but not executing the program after a power cycle?</h4>
<p class='text-muted'><strong>Answer:</strong> Possible reasons could include overridden values, program errors, communication issues, or hardware malfunctions related to the CPU.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot a GE Fanuc 90-30 CPU 350 when the PLC shows Run Enabled but the program is not executing?</h4>
<p class='text-muted'><strong>Answer:</strong> You can start by checking for any overridden values, verifying the program logic, ensuring proper communication setup, and inspecting the hardware components for any faults.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What does it mean if the BATT LED is on in a GE Fanuc 90-30 CPU 350 system?</h4>
<p class='text-muted'><strong>Answer:</strong> The BATT LED being on indicates that there are no issues with the battery backup system, which helps retain memory and settings during power loss.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I clear overridden values in a GE Fanuc 90-30 CPU 350 system?</h4>
<p class='text-muted'><strong>Answer:</strong> You can typically clear overridden values through the programming software by identifying and resetting any manual overrides that may be affecting the program execution.</p>
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
