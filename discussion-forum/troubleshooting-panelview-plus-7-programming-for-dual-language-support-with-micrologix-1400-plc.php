
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am facing a few challenges while programming a Panel View Plus 7 HMI to communicate with a MicroLogix 1400 PLC and implement dual language support in English and Spanish. While I have experience programming similar projects in English with a CompactLogix PLC, I am unsure about">
    <meta name="keywords" content="panelview plus 7, micrologix 1400, dual language support, programming, hmi, plc, factory talk view me v12, tags, connectivity, multilingual, application development, c-more, language switching, trou">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-panelview-plus-7-programming-for-dual-language-support-with-micrologix-1400-plc">
    <title>Troubleshooting PanelView Plus 7 Programming for Dual Language Support with MicroLogix 1400 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PanelView Plus 7 Programming for Dual Language Support with MicroLogix 1400 PLC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am facing a few challenges while programming a Panel View Plus 7 HMI to communicate with a MicroLogix 1400 PLC and implement dual language support in English and Spanish. While I have experience programming similar projects in English with a CompactLogix PLC, I am unsure about">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-panelview-plus-7-programming-for-dual-language-support-with-micrologix-1400-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PanelView Plus 7 Programming for Dual Language Support with MicroLogix 1400 PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am facing a few challenges while programming a Panel View Plus 7 HMI to communicate with a MicroLogix 1400 PLC and implement dual language support in English and Spanish. While I have experience programming similar projects in English with a CompactLogix PLC, I am unsure about">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-panelview-plus-7-programming-for-dual-language-support-with-micrologix-1400-plc"
      },
      "headline": "Troubleshooting PanelView Plus 7 Programming for Dual Language Support with MicroLogix 1400 PLC",
      "description": "Hello everyone! I am facing a few challenges while programming a Panel View Plus 7 HMI to communicate with a MicroLogix 1400 PLC and implement dual language support in English and Spanish. While I have experience programming similar projects in English with a CompactLogix PLC, I am unsure about",
      "author": {
        "@type": "Person",
        "name": "MikeVT"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-13",
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
                <h1 class="text-white">Troubleshooting PanelView Plus 7 Programming for Dual Language Support with MicroLogix 1400 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MikeVT</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">173</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">134</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am facing a few challenges while programming a Panel View Plus 7 HMI to communicate with a MicroLogix 1400 PLC and implement dual language support in English and Spanish. While I have experience programming similar projects in English with a CompactLogix PLC, I am unsure about how to set up tags to connect to the ML1400 using Factory Talk View ME V12. Additionally, I am wondering if I need to develop two separate applications to achieve a dual language setup. I have expertise in using C-More products, where switching between languages is straightforward. Your guidance on these issues would be greatly appreciated. Thank you, Mike.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Visit the following link to access valuable literature on Industrial Automation from Rockwell Automation: https://literature.rockwellautomation.com/idc/groups/literature/documents/at/iasimp-at001_-en-p.pdf. This comprehensive resource provides essential information for those looking to enhance their understanding of Industrial Automation processes and technologies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RAYBRITO</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently revisited an older virtual machine running v5.1 software and opened an outdated PV+ program that communicated with a PLC5. The syntax remains unchanged. To establish connections to memory addresses (integer and binary), refer to the examples below. In the Communication Setup section of FactoryTalk Linx in the Application Explorer, the device shortcut is named "PLC540B." For language switching guidance, explore the resources provided by @RAYBRITO. I have yet to try this with the PV+ myself, so I will also be following along with the instructions or conducting my own experiments.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to browsing tags in a programmable logic controller (PLC) system, the ability to do so offline is limited to Logix 5000 controllers (.ACD file). However, for older PLCs, browsing online to a connected MicroLogix is still possible, though browsing offline is not an option. Offline browsing is only necessary when unable to connect to a live controller during development, as browsing online with a live controller is sufficient.

To enable offline browsing, RSLinx Classic software (licensed version) can be utilized to create OPC topics, similar to creating a device shortcut in FactoryTalk Linx. By setting up a topic and assigning a "symbol" file, such as an offline MicroLogix file, through RSLinx Classic, users can then add an OPC server in FactoryTalk Studio to browse tags online and offline. It should be noted that access to offline browsing through RSLinx Classic requires a paid version of the software.

Regarding language configuration, displaying text in multiple languages for user interaction can be achieved by initially setting up the system in a preferred language. An easy method involves completing the setup in the preferred language, then adding a second language through the Tools menu and exporting the text items to an Excel spreadsheet. Translations for the second language can be inputted for each text item before importing them back into the system.

Creating language switch buttons for each language allows users to toggle between languages while viewing the application. To make changes in a specific language, simply open the project in that language and make the necessary edits without having to reimport the translations. Display settings can also be adjusted to show default language text instead of a question mark for untranslated items.

For further guidance on setting up multiple languages in an application, refer to page 9 of the provided document, which outlines the steps for running an application with multiple languages. It is recommended to follow the instructions starting from page 9 for setting up and using multiple languages effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I set up tags to connect a Panel View Plus 7 HMI to a MicroLogix 1400 PLC using Factory Talk View ME V12?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To set up tags for communication between the Panel View Plus 7 HMI and MicroLogix 1400 PLC in Factory Talk View ME V12, you will need to configure the communication path in the HMI software. This involves defining the driver and setting up the appropriate tags in the HMI project to read and write data to the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Do I need to develop two separate applications to achieve dual language support in English and Spanish on the Panel View Plus 7 HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: No, you typically do not need to develop two separate applications for dual language support on the Panel View Plus 7 HMI. Instead, you can implement language switching within a single application by utilizing language-specific text strings and configuring the HMI to display the appropriate language based on user selection or system settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is switching between languages on the Panel View Plus 7 HMI similar to the process in C-More products?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While the process may have similarities, the specific steps for switching between languages on the Panel View Plus 7 HMI may vary based on the software and features available in Factory Talk View ME V12. It's recommended to refer to the software documentation or seek guidance from Rockwell Automation support for detailed instructions on implementing</p>
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
