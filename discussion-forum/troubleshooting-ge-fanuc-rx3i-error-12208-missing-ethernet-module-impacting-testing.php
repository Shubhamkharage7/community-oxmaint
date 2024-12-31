
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am unable to proceed with testing the RX3i PLC due to the absence of the required Ethernet module. Error 12208 states that a PACSystems RX3i Ethernet NIU (IC695NIU001) must have an IC695ETM001 module in the same rack in order to function properly.">
    <meta name="keywords" content="ge-fanuc rx3i, error 12208, troubleshooting, missing ethernet module, impacting testing, rx3i plc, pacsystems, ethernet niu, ic695niu001, ic695etm001 module">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-fanuc-rx3i-error-12208-missing-ethernet-module-impacting-testing">
    <title>Troubleshooting GE-FANUC RX3i Error 12208: Missing Ethernet Module Impacting Testing | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting GE-FANUC RX3i Error 12208: Missing Ethernet Module Impacting Testing | Oxmaint Community">
    <meta property="og:description" content="I am unable to proceed with testing the RX3i PLC due to the absence of the required Ethernet module. Error 12208 states that a PACSystems RX3i Ethernet NIU (IC695NIU001) must have an IC695ETM001 module in the same rack in order to function properly.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-fanuc-rx3i-error-12208-missing-ethernet-module-impacting-testing">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting GE-FANUC RX3i Error 12208: Missing Ethernet Module Impacting Testing | Oxmaint Community">
    <meta name="twitter:description" content="I am unable to proceed with testing the RX3i PLC due to the absence of the required Ethernet module. Error 12208 states that a PACSystems RX3i Ethernet NIU (IC695NIU001) must have an IC695ETM001 module in the same rack in order to function properly.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ge-fanuc-rx3i-error-12208-missing-ethernet-module-impacting-testing"
      },
      "headline": "Troubleshooting GE-FANUC RX3i Error 12208: Missing Ethernet Module Impacting Testing",
      "description": "I am unable to proceed with testing the RX3i PLC due to the absence of the required Ethernet module. Error 12208 states that a PACSystems RX3i Ethernet NIU (IC695NIU001) must have an IC695ETM001 module in the same rack in order to function properly.",
      "author": {
        "@type": "Person",
        "name": "loka9"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-15",
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
                <h1 class="text-white">Troubleshooting GE-FANUC RX3i Error 12208: Missing Ethernet Module Impacting Testing</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>loka9</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">573</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">85</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am unable to proceed with testing the RX3i PLC due to the absence of the required Ethernet module. Error 12208 states that a PACSystems RX3i Ethernet NIU (IC695NIU001) must have an IC695ETM001 module in the same rack in order to function properly.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>While I haven't personally tried it, it is possible to add the ETM001 module(s) to the hardware configuration even if you do not currently have the ETM module(s). This can be done by simply downloading the hardware configuration to the NIU001. Keep in mind that missing modules may result in diagnostic errors rather than fatal ones. If you are unable to communicate between the remote rack and the host PLC, what specific testing needs to be carried out?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to properly test it, you will need an ETM001 module from Emerson's website. A complete RX3i Ethernet NIU station includes components such as the RX3i Universal Backplane (IC695CHS0xx), RX3i power supply (IC695PSxxxx), RX3i Ethernet NIU (IC695NIU001), multiple RX3i Ethernet modules (IC695ETM001), specialized software, and optional Series 90-30 expansion backplanes. The station also requires PACSystems RX3i and/or Series 90-30 modules, depending on the specific application.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have a backplane, power supply, and ETM001, but I am missing the NIU001, preventing me from conducting any tests. When setting up a new remote I/O target in Machine Edition 9.5, it automatically adds two ETM001 modules to the baseplate. The target can be validated as long as the ETM001 modules have valid IP addresses. If the modules are deleted, an error similar to the one mentioned by the OP will occur during validation. It is assumed that a validated target file can be downloaded to the NIU001. Typically, if modules are included in the hardware configuration but not physically installed in the backplane, a "Missing module" fault will be triggered, though this is non-fatal. The key question here is what the OP hopes to achieve with the NIU001, as its main purpose is to convert an Rx3i baseplate into a remote ethernet I/O extension for a host PLC, which requires communication with the host PLC to function properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey suggested considering including the ETM001 module in the hardware configuration, even if the ETM module is not currently available. By downloading the hardware configuration to the NIU001, missing modules will only result in diagnostic errors, rather than fatal issues. It is important to identify the specific testing needs that require communication between the remote rack and the host PLC. Additionally, please note that the NIU001 features a com port.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>loka9</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>NetNathan emphasized the essential need for an ETM001 module in testing. According to information from Emerson's website, an RX3i Ethernet NIU station comprises various components such as an RX3i Universal Backplane (IC695CHS0xx), an RX3i power supply (IC695PSxxxx), the RX3i Ethernet NIU (IC695NIU001), and one or more RX3i Ethernet modules (IC695ETM001). Additionally, it includes proprietary application software, optional Series 90-30 expansion backplanes, and PACSystems RX3i and/or Series 90-30 modules tailored to the application. However, without the ETM001 module, testing becomes impossible. Unfortunately, GE Fanuc lacks a simulator, leaving aspiring GE Fanuc PLC programmers at a standstill, unable to proceed without this crucial module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>loka9</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Learning GE Fanuc PLC programming can be challenging without a simulator. However, attempting to use a remote I/O interface as a PLC CPU may also present obstacles. The NIU001 does offer the capability for local logic, so it is worth trying to download the hardware configuration and default program via the serial port to test its functionality. Ensure that the configuration includes the ETM001 module for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to the suggestion from Steve Bailey, it appears that utilizing a remote I/O interface as a PLC CPU may be the issue at hand. However, there is potential for local logic within the NIU001. To troubleshoot, have you attempted downloading the hardware configuration and default program via the serial port to test its functionality? It's important to ensure that the configuration includes the ETM001 module. One setback is the absence of an ERM001 module for building the solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>loka9</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems we may have a misunderstanding in our communication. It appears that you are interested in learning how to program Emerson Rx3i using the NIU001 device. While the NIU is not a complete PLC, it does allow for some local logic. I have not personally worked with one before, so I can't say for certain if it will meet your needs.

It seems that you are facing a challenge in validating and downloading a project file without an ETM001 module, which you do not currently have. My suggestion is to create a project file with the ETM001 module included in the hardware configuration, even if it is not physically present. You may then be able to download this project file to the NIU001 using the serial port. By doing this, you might be able to execute your local logic without any fatal errors, as a module listed in the hardware configuration file but not physically connected does not typically cause issues in a standard PLC CPU.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey pointed out that there may be a misunderstanding regarding their suggestions or goals. It seems like the goal is to learn Emerson Rx3i programming using the NIU001 device, which although not a full-fledged PLC, does allow for some local logic. Although Steve has not personally used the device, they believe it may be possible to achieve what is desired.

A challenge seems to arise when attempting to validate and download a project file that lacks an ETM001 module, which is not currently available. Steve recommends creating a project file with the ETM001 module included in the hardware configuration, even if the module is not physically present. This file can then be downloaded to the NIU001 using the serial port.

By following these steps, it may be possible to run local logic on the device without generating a fatal error, as a missing module in the hardware configuration does not typically cause issues with a standard PLC CPU. The individual who received the advice expressed gratitude for Steve's assistance and mentioned encountering an error during the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>loka9</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are experiencing issues, it is advisable to consult the fault tables in the NIU001 for relevant information before clearing any faults and attempting to reconnect. Additionally, consider uploading from the NIU001 to Machine Edition as a troubleshooting step. However, it is important to note that the NIU001 functions as a remote I/O interface rather than a PLC, which may limit its capabilities for certain tasks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to troubleshoot the issue, I recommend checking the fault tables in the NIU001 for any helpful information before clearing the faults and trying again. Additionally, consider uploading from the NIU001 to Machine Edition and creating small LD programs to practice using GE Fanuc PLC, Proficy Machine Edition, and Cimplicity SCADA. While these software programs do not have simulators like Siemens PLCSIM and WinccSiemens, using a real PLC can facilitate communication between Cimplicity and the PLC. I have experience with Siemens and Schneider automation, but am currently focused on GE Fanuc PLCs, specifically the RX3i and RX7i models, with Cimplicity for SCADA.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>loka9</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What made you decide to learn with the NIU001 instead of a conventional CPU? Learning from a regular CPU may have been more straightforward.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I anticipate that he had an extra one just sitting idle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What is GE-FANUC RX3i Error 12208?
- Error 12208 is a message indicating that a PACSystems RX3i PLC requires the presence of an IC695ETM001 Ethernet module in the same rack as the Ethernet NIU module (IC695NIU001) for proper functionality.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can I proceed with testing the RX3i PLC without the Ethernet module?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, you cannot proceed with testing the RX3i PLC if the required IC695ETM001 Ethernet module is missing. The PLC functionality is dependent on the presence of this module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Where can I obtain the IC695ETM001 Ethernet module for the RX3i PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - The IC695ETM001 Ethernet module for the RX3i PLC can be obtained through authorized GE-FANUC distributors or suppliers. It is essential to ensure compatibility with the RX3i system before purchasing.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What are the implications of not having the IC695ETM001 module in the RX3i PLC rack?</h4>
<p class='text-muted'><strong>Answer:</strong> - Without the IC695ETM001 Ethernet module in the same rack as the NIU module, the PLC will encounter Error 12208 and may not function properly. It is crucial to have both modules present for seamless operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Is there a workaround or alternative solution if the IC695ETM001 module is not available?</h4>
<p class='text-muted'><strong>Answer:</strong> - Unfortunately, there is no workaround or alternative solution to bypass the requirement of the IC695ETM001</p>
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
