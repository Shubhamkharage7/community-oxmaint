
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am seeking assistance regarding the Kinetix 5500 S33 Fault. I have a group of three drives configured as follows: 2198-H025-ERS2 Shared AC/DC, 2198-H008-ERS2 Shared DC, and 2198-H008-ERS2 Shared DC. All drives are set to Bus Regulator Action: Shunt Regulator Internal within Group 1. Drive 1 is running">
    <meta name="keywords" content="kinetix 5500 s33 fault, dc bus under voltage issue, troubleshooting kinetix 5500, drive configuration, bus regulator action, studio5000 rev011, firmware 014, firmware">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-kinetix-5500-s33-fault-dc-bus-under-voltage-issue">
    <title>Troubleshooting Kinetix 5500 S33 Fault: DC Bus Under Voltage Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Kinetix 5500 S33 Fault: DC Bus Under Voltage Issue | Oxmaint Community">
    <meta property="og:description" content="Hello, I am seeking assistance regarding the Kinetix 5500 S33 Fault. I have a group of three drives configured as follows: 2198-H025-ERS2 Shared AC/DC, 2198-H008-ERS2 Shared DC, and 2198-H008-ERS2 Shared DC. All drives are set to Bus Regulator Action: Shunt Regulator Internal within Group 1. Drive 1 is running">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-kinetix-5500-s33-fault-dc-bus-under-voltage-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Kinetix 5500 S33 Fault: DC Bus Under Voltage Issue | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am seeking assistance regarding the Kinetix 5500 S33 Fault. I have a group of three drives configured as follows: 2198-H025-ERS2 Shared AC/DC, 2198-H008-ERS2 Shared DC, and 2198-H008-ERS2 Shared DC. All drives are set to Bus Regulator Action: Shunt Regulator Internal within Group 1. Drive 1 is running">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-kinetix-5500-s33-fault-dc-bus-under-voltage-issue"
      },
      "headline": "Troubleshooting Kinetix 5500 S33 Fault: DC Bus Under Voltage Issue",
      "description": "Hello, I am seeking assistance regarding the Kinetix 5500 S33 Fault. I have a group of three drives configured as follows: 2198-H025-ERS2 Shared AC/DC, 2198-H008-ERS2 Shared DC, and 2198-H008-ERS2 Shared DC. All drives are set to Bus Regulator Action: Shunt Regulator Internal within Group 1. Drive 1 is running",
      "author": {
        "@type": "Person",
        "name": "JamesCash"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-12",
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
                <h1 class="text-white">Troubleshooting Kinetix 5500 S33 Fault: DC Bus Under Voltage Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JamesCash</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">386</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">228</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am seeking assistance regarding the Kinetix 5500 S33 Fault. I have a group of three drives configured as follows: 2198-H025-ERS2 Shared AC/DC, 2198-H008-ERS2 Shared DC, and 2198-H008-ERS2 Shared DC. All drives are set to Bus Regulator Action: Shunt Regulator Internal within Group 1. Drive 1 is running FW 7.014 while the two H008 drives are on FW 5.3.7. I am using Studio5000 Rev28.011. The incoming AC voltage measures at a satisfactory 450V, within the 460-3 Phase setup. However, all three drives fault with S33 when the Bus Regulator Action is set to Shunt Regulator Internal for all drives. Interestingly, only the H008 drives fault when this setting is applied to the H025 drive. Any assistance would be greatly appreciated. Thank you, James.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The problem with the DCBusUnderVoltageFactoryLimit tripping was caused by a safety scanner activating, resulting in the contactor in front of the Leading drive dropping out. The intermittent issue was due to the bleed off time of the Kinetix capacitors. The third-party code I am utilizing did not monitor the fault or reset it after the DCBus recharged. This situation reinforces the importance of monitoring and addressing faults promptly. Remember to always track your faults to prevent unexpected shutdowns.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesCash</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The top-mounted STO connector on these drives is likely the recommended method for safety wiring, as opposed to placing the contactor in front of the drive. This configuration ensures optimal safety measures are in place for operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>shilok</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Shilok noted that these drives feature a STO connector on top, making it the preferred method for safety wiring (rather than placing a contactor in front of the leading drive). These drives are ERS2 models, equipped with CIP STO over Ethernet for added safety measures. There is no hardwired STO present in these drives. Thank you for the suggestion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesCash</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to safety PLCs that support CIP safety over Ethernet, utilizing the STO function is a more reliable option compared to dropping line power. While I haven't had the chance to try out the ERS2 drives yet, I'm curious if they only offer CIP STO over Ethernet without the possibility of hard wiring it. Dropping line power can put a strain on the power stage of a drive, potentially leading to premature failure of the bus caps or inrush circuits. The STO function on its own is generally effective up to PLd or CAT 3 safety levels. For higher safety requirements, some users incorporate load side contactors with a short delay before opening to ensure the drive's output stage stops conducting first.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Joseph_e2 mentioned that utilizing the STO function is superior to disconnecting line power if your safety PLC supports CIP safety over Ethernet. While he has not yet worked with ERS2 drives, he inquired whether they exclusively offer CIP STO over Ethernet without the possibility of hard wiring it. Disconnecting line power can strain a drive's power stage, potentially leading to premature failures of the bus caps or inrush circuits. The STO function alone typically meets standards up to PLd or CAT 3, with some instances requiring load side contactors with a short delay to ensure the drive's output stage ceases conducting first.

While agreeing on the importance of an in-line contactor in the power supply, Joseph_e2 noted the limitations when integrating into third-party systems where the original machine design has already been established. Despite personal preferences for a different design approach, his company is adapting the existing process in the opposite direction. Addressing his query, ERS2 drives do support STO over Ethernet and can be linked to Guardlogix processors. The valuable insights provided by others have been greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JamesCash</span></li>
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
<h4 class='text-dark'>FAQ: 1. What does the Kinetix 5500 S33 Fault indicate?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Kinetix 5500 S33 Fault typically indicates a DC Bus Under Voltage issue within the drive system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What drives are involved in the described configuration?</h4>
<p class='text-muted'><strong>Answer:</strong> - The configuration involves three drives: 2198-H025-ERS2 Shared AC/DC, 2198-H008-ERS2 Shared DC, and 2198-H008-ERS2 Shared DC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the Bus Regulator Action set to for all drives in Group 1?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Bus Regulator Action is set to Shunt Regulator Internal for all drives within Group 1.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What firmware versions are the drives running?</h4>
<p class='text-muted'><strong>Answer:</strong> - Drive 1 is running FW 7.014, while the two H008 drives are on FW 5.3.7.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What software version is being used for programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - Studio5000 Rev28.011 is being used for programming the drives.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 6. What is the incoming AC voltage measurement?</h4>
<p class='text-muted'><strong>Answer:</strong> - The incoming AC voltage measures at a satisfactory 450V, within the 460-3 Phase setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 7. Why do the drives fault with S33 when the Bus Regulator Action is set to Shunt Regulator Internal?</h4>
<p class='text-muted'><strong>Answer:</strong> - The drives fault with S33 when the Bus Regulator Action is set to Shunt Regulator Internal due to potential issues related to this configuration.</p>
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
