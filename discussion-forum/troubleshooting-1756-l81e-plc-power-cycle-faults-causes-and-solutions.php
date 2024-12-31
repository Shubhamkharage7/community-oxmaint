
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am experiencing a peculiar problem with a 1756-L81E PLC that faults and loses its program upon power cycle. This happens regardless of whether the power is cycled from the main 24VDC power supply or the Allen-Bradley chassis power supply. The specific faults I am encountering are Type">
    <meta name="keywords" content="1756-l81e plc, power cycle faults, troubleshooting plc faults, 1756-pa75/b power supply, 1756-pb75/b power supply, type 01 power-up fault, code 61 non-re">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-1756-l81e-plc-power-cycle-faults-causes-and-solutions">
    <title>Troubleshooting 1756-L81E PLC Power Cycle Faults: Causes and Solutions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 1756-L81E PLC Power Cycle Faults: Causes and Solutions | Oxmaint Community">
    <meta property="og:description" content="Hello, I am experiencing a peculiar problem with a 1756-L81E PLC that faults and loses its program upon power cycle. This happens regardless of whether the power is cycled from the main 24VDC power supply or the Allen-Bradley chassis power supply. The specific faults I am encountering are Type">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-1756-l81e-plc-power-cycle-faults-causes-and-solutions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 1756-L81E PLC Power Cycle Faults: Causes and Solutions | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am experiencing a peculiar problem with a 1756-L81E PLC that faults and loses its program upon power cycle. This happens regardless of whether the power is cycled from the main 24VDC power supply or the Allen-Bradley chassis power supply. The specific faults I am encountering are Type">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-1756-l81e-plc-power-cycle-faults-causes-and-solutions"
      },
      "headline": "Troubleshooting 1756-L81E PLC Power Cycle Faults: Causes and Solutions",
      "description": "Hello, I am experiencing a peculiar problem with a 1756-L81E PLC that faults and loses its program upon power cycle. This happens regardless of whether the power is cycled from the main 24VDC power supply or the Allen-Bradley chassis power supply. The specific faults I am encountering are Type",
      "author": {
        "@type": "Person",
        "name": "scantime"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-28",
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
                <h1 class="text-white">Troubleshooting 1756-L81E PLC Power Cycle Faults: Causes and Solutions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>scantime</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">421</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">89</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am experiencing a peculiar problem with a 1756-L81E PLC that faults and loses its program upon power cycle. This happens regardless of whether the power is cycled from the main 24VDC power supply or the Allen-Bradley chassis power supply. The specific faults I am encountering are "Type 01 Power-up Fault" and "Code 61 Non-recoverable Fault with saved Diagnostic Information". After conducting tests, I have observed some interesting results:1. Despite changing the firmware revision from 32.014 to 32.012, the PLC still faults and loses its program.2. Swapping the power supply with a different model (1756-PB75/B) also resulted in the PLC faulting and losing its program.3. Interestingly, removing the PLC from the rack and reinserting it without cycling the power allowed the PLC to retain its program without faulting.4. When testing the PLC on a different rack with a 110v power supply (1756-PA75/B), the PLC did not fault.5. Switching the PA75 supply with the PB75 power supply at the test rack also did not result in any faults. It is worth noting that even powering off the PB75 supply and then turning it back on with the PA75 supply still resulted in a fault. The only reliable way to prevent the fault is to power down and back up using the PA75 (110vac) supply.6. My next step is to test the PA75 supply in the field rack. I am curious if anyone else has experienced this issue and if it could be related to firmware (as updating beyond v32 is a daunting task) or if it is definitively a power supply issue. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Losing the program can typically be attributed to either a malfunctioning ESM or power issues with the controller, particularly through the backplane during shutdown. While my experience is mainly with SLC, similar causes are likely for CLogix systems. The culprit could be the power supply, chassis, controller itself, or another module in the rack. It's also possible that the incoming power to the power supply is contaminated. Firmware issues are unlikely in this scenario, and having two faulty power supplies is highly improbable. If the problem persists when testing with the PB75, it's worth examining the power source for the power supply in both the test and operational racks to identify the root cause.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plvlce mentioned that if a program is lost, it could be due to a faulty ESM or power issue affecting the controller during shutdown. This issue is commonly seen with SLC, but similar issues may occur with CLogix. Possible causes include the power supply, chassis, controller, or other modules in the rack. It is unlikely to be a firmware problem. If the issue persists, it is recommended to check the incoming power to the power supply. It is important to note that pulling power during shutdown may contribute to the problem. When troubleshooting, consider the source of power for the power supply in both the test rack and the operational rack. In this context, ESM refers to the Electronic Software Management system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>scantime</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When mentioning ESM, I am referring to the Energy Storage Module used in L8 processors, which do not have a battery backup. The L8 detects power loss in the logix rack and writes the program to the ESM before capacitors discharge. If the ESM or capacitor integrity is compromised, the processor may encounter faults upon reactivation. Removing the processor from the rack while live prevents the detection of backplane power loss and the triggering of ESM write, allowing the last ESM write to remain intact. It is unclear why there is a difference between the A and B PS, but it is recommended to replace the processor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After considering the opinions of others, if your processor is out of warranty but still has an SD card inserted, you can attempt the following workaround: 
1. Access the Controller Properties in 5000
2. Navigate to the Non-Volatile Memory tab
3. Place the processor in Program mode
4. Open Load / Store
5. Choose Load Image: On Uninitialized Memory
6. Select Load Mode: Run (Remote Only)
7. Click on Store and confirm
By following these steps, the project will be saved to the SD card, allowing the controller to boot from it each time. Keep in mind that this process will need to be repeated for any new program modifications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During a recent project, we encountered a common issue that can easily be prevented with proper precautions. While inspecting the system, I discovered a contractor had installed a new conduit directly above the controller in the NEMA 4 box. As a result, metal filings contaminated the backplane, causing potential damage to the electronic components. To avoid similar issues, it is crucial to protect electronic components with masking tape during construction or modifications to a control box. This simple step can prevent costly repairs and downtime in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DaDaDadeo</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Why don't PLC manufacturers opt for conformal coating on all components instead of charging a hefty premium for coated versions? Many challenges could be easily resolved with this simple solution. I have personally applied conformal coating to brand new PLCs and cards, resulting in years of reliable operation. For example, a card from Siemens' SIPLUS line may cost 800€ compared to around 250€ for the non-coated version.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tdoa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TDOA questioned why PLC manufacturers don't simply apply conformal coating to their products instead of charging double for the coated versions. Many common issues could be easily resolved by this single step. TDOA has personally coated brand new PLCs and cards with conformal coating, reassembled them, and they have functioned flawlessly for years. SIPLUS, Siemens' version of the same card, costs around 800€ compared to the standard 250€. Despite the higher cost, there is a demand for the 'K' variants.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JeremyM concurs with the suggestions made by others regarding troubleshooting a processor beyond warranty with an SD card present. To attempt a workaround, follow these steps: access the Controller Properties in 5000, navigate to the Non-Volatile Memory tab, switch the processor into Program mode, open Load / Store, choose Load Image: On Uninitialized Memory, select Load Mode: Run (Remote Only), click on Store, and confirm. This process will save the project to the SD card, restart the controller, and load the project from the SD card upon each boot. Keep in mind that any new program changes will require repeating these steps.

After testing this method, the controller retains the program after power-up, eliminating the need to download a fresh copy each time. Additionally, the controller can now be restored to a running state by utilizing the keyswitch (switching between program and run modes). This workaround should suffice until a new PLC can be obtained, ideally without encountering the same issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>scantime</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to scantime's comment, I would like to express gratitude for trying out the suggested solution, which seems to have partially resolved the issue with the controller. Despite the controller still experiencing faults, it now boots up with a program already loaded instead of requiring a fresh download. Additionally, the controller can now be restored to a functional state by toggling the keyswitch between program and run modes. This temporary fix should suffice until a replacement PLC can be acquired to avoid encountering the same problem. If there is no warranty or exchange option available, I am willing to cover the shipping costs to take the controller off your hands and make an attempt at repairing it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TDOA questioned why PLC manufacturers do not opt for conformal coating as a standard practice instead of charging significantly more for it. Many challenges could easily be addressed with this simple solution. TDOA has firsthand experience of successfully disassembling and coating new PLCs and cards with conformal coating, resulting in years of functionality. However, opting for the SIPLUS line from Siemens, for instance, can increase costs from around 250€ to 800€. On the other hand, Rockwell's KB faces issues with excessive conformal coating causing failures in certain areas. TDOA encountered this issue firsthand during a startup project where a Kinetix P070 power supply failed to boot due to lacquer coating residue on the pins. Despite being under warranty, Rockwell advised against using aggressive solvents for cleaning, leaving the issue unresolved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why does my 1756-L81E PLC fault and lose its program upon power cycle?</h4>
<p class='text-muted'><strong>Answer:</strong> - The PLC is experiencing a "Type 01 Power-up Fault" and "Code 61 Non-recoverable Fault with saved Diagnostic Information" regardless of the power supply used.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What troubleshooting steps have been taken to address the PLC power cycle faults?</h4>
<p class='text-muted'><strong>Answer:</strong> - Tests have been conducted, including changing firmware revisions, swapping power supplies, and observing behavior on different racks with varying power supplies.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why does removing and reinserting the PLC without power cycling prevent faults?</h4>
<p class='text-muted'><strong>Answer:</strong> - Reinserting the PLC without power cycling allows it to retain its program without faulting, indicating a potential workaround for the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Why does the PLC not fault when tested on a rack with a 110v power supply?</h4>
<p class='text-muted'><strong>Answer:</strong> - Testing the PLC on a different rack with a 110v power supply did not result in faults, suggesting a possible correlation between the power supply type and the fault occurrence.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What is the significance of using the PA75 supply to prevent faults?</h4>
<p class='text-muted'><strong>Answer:</strong> - Powering down and back up using the PA75 (110vac) supply has been identified as a reliable way to prevent faults, raising questions about the role of different power supplies in the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 6. Is the firmware version potentially linked to the PLC power cycle faults?</h4>
<p class='text-muted'><strong>Answer:</strong> - Further investigation is needed to determine if the issue could be related to firmware, as updating beyond v32 is considered a challenging task.</p>
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
