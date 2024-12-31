
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently utilizing a system with an Rx3i CRU320 redundant CPU paired with Proficy Machine Edition Software. Within the hardware configuration of each CPU module, the transfer list tab specifies the following settings for both PLCs: %I Reference: %I00001, Length: 4 and %AI Reference: %AI00001, Length: 4. However,">
    <meta name="keywords" content="rx3i plc, proficy machine edition software, address configuration, length configuration, transfer list tab, cpu module, %i reference, %ai reference, io card channels, rack.slot.channel, plc configuration, address format, ai card, slot">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-determine-address-and-length-configuration-in-rx3i-plc-with-proficy-machine-edition-software">
    <title>How to Determine Address and Length Configuration in Rx3i PLC with Proficy Machine Edition Software | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Determine Address and Length Configuration in Rx3i PLC with Proficy Machine Edition Software | Oxmaint Community">
    <meta property="og:description" content="I am currently utilizing a system with an Rx3i CRU320 redundant CPU paired with Proficy Machine Edition Software. Within the hardware configuration of each CPU module, the transfer list tab specifies the following settings for both PLCs: %I Reference: %I00001, Length: 4 and %AI Reference: %AI00001, Length: 4. However,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-determine-address-and-length-configuration-in-rx3i-plc-with-proficy-machine-edition-software">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Determine Address and Length Configuration in Rx3i PLC with Proficy Machine Edition Software | Oxmaint Community">
    <meta name="twitter:description" content="I am currently utilizing a system with an Rx3i CRU320 redundant CPU paired with Proficy Machine Edition Software. Within the hardware configuration of each CPU module, the transfer list tab specifies the following settings for both PLCs: %I Reference: %I00001, Length: 4 and %AI Reference: %AI00001, Length: 4. However,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-determine-address-and-length-configuration-in-rx3i-plc-with-proficy-machine-edition-software"
      },
      "headline": "How to Determine Address and Length Configuration in Rx3i PLC with Proficy Machine Edition Software",
      "description": "I am currently utilizing a system with an Rx3i CRU320 redundant CPU paired with Proficy Machine Edition Software. Within the hardware configuration of each CPU module, the transfer list tab specifies the following settings for both PLCs: %I Reference: %I00001, Length: 4 and %AI Reference: %AI00001, Length: 4. However,",
      "author": {
        "@type": "Person",
        "name": "IAR86"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-05",
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
                <h1 class="text-white">How to Determine Address and Length Configuration in Rx3i PLC with Proficy Machine Edition Software</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>IAR86</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">570</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">48</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently utilizing a system with an Rx3i CRU320 redundant CPU paired with Proficy Machine Edition Software. Within the hardware configuration of each CPU module, the transfer list tab specifies the following settings for both PLCs: %I Reference: %I00001, Length: 4 and %AI Reference: %AI00001, Length: 4. However, I believe this configuration may be incorrect and in need of updating. When examining the IO card channels, the format is provided as "Rack.slot.channel" (e.g. %IW0.8.0.1 for the 1st channel of the AI card in slot 8). I was anticipating an address format like %AI0001 for easier understanding if it is shared between PLCs using the transfer list configuration. Could someone please clarify how to determine the address and length required for configuration in the transfer list?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Which version of GE Machine Edition PLC software are you using? When I recently added an ALG608 module offline to an existing target, version 9.5 automatically assigned it an %AI address. I am unfamiliar with the rack.slot.channel format in a GE PLC. Are you referring to the hardware configuration for the module or the variable table?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey inquired about the specific version of Machine Edition being used. He recently integrated an ALG608 module offline into an established target with version 9.5, which was assigned an %AI address. The rack.slot.channel format in a GE PLC is unfamiliar to him. Are you examining the hardware configuration or the variable table? Feel free to expand on your response.
Hello Steve, appreciate your input. I'm currently utilizing Machine Edition 9.0 and focusing on the hardware configuration. Please refer to the attached image for more details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IAR86</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you please share a screenshot? I have been attempting to set up rack.slot.channel addressing for an AI module without success and would appreciate guidance on how to do it correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey requested a screen shot for assistance in assigning rack.slot.channel addressing to an AI module. He has been unsuccessful in this task and is eager to learn the correct method. For further details, please refer to the attached document.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IAR86</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to use a %AIxxxx address in place of TEST1 in the variable field? This query pertains to the compatibility of %AIxxxx addresses in the variable field.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
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
            <p>Steve Bailey inquired about the possibility of using a %AIxxxx address instead of "TEST1" in the variable field. When %AI0001 was entered in the inspector window for TEST1, it was accepted. However, upon checking the hardware configuration, the TEST1 variable was removed from channel IW1. Upon reselecting the TEST1 variable, the address reverted to %IW0.14.0.1 on IW1. In summary, it is not possible to assign the address %AI0001 to channel IW1.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IAR86</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When I add a module to the View Control target instead of a PLC target, the screen shot appears similar. Can you offer a comprehensive overview of the system architecture as a whole?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When adding a module to a View Control target instead of a PLC target, the screen shot may resemble what Steve Bailey experienced. It would be helpful to have an overview of the entire system architecture to better understand the issue. Unfortunately, I am more knowledgeable about Proficy Machine Edition software. The hardware configuration screenshot I have attached shows that we have two CPUs operating in hot standby redundancy mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IAR86</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By accessing the Inspector and adjusting the Hardware Configuration settings to switch the Default Variable Mode from False to True, you activate I/O Variables. Enabling these variables links the addresses to the hardware components, allowing for the identification of specific rack, slot, and channel addresses. This functionality is crucial for efficient hardware management and troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dYoast</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Yoast, by accessing the Inspector and adjusting the Hardware Configuration to change the Default Variable Mode from False to True, you can enable I/O Variables. Enabling this feature links the addresses to the hardware and generates the rack.slot.channel addresses. Thanks to Yoast for the insight. With the "default variable mode" set to false and when adding a new module, the address appears as %AI00001. When the default variable mode is set to true, you can utilize the transfer list tab in hardware config to share variables between two CPUs. To determine the starting address and length for the transfer list configuration, consider the rack.slot.channel addresses that are displayed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IAR86</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The hardware configuration transfer list tab is primarily utilized for CPU memory segments. It appears that when the variable mode property is enabled for a module (as is the case in my software), the Input/output transfer list must be enabled for each variable separately in the inspector window.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IAR86</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am grateful to dYoast for that helpful suggestion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What are the benefits of using rack.slot.channel addresses (I/O variables) in your system? According to Machine Edition companion, the Hardware Configuration Node Properties play a key role in PACSystems or VersaMax controller rack systems. Specifically, the Default Variable Mode setting for PACSystems targets is significant. This setting determines whether I/O variables are enabled or disabled for new modules or Genius buses added to the target. With the True option, I/O variables are enabled for every new module or Genius bus, unless the module does not support them. In this case, the Variable Mode property is set to False and remains read-only. Conversely, selecting False disables I/O variables for new additions, allowing users to manually enable or disable them for specific modules or Genius buses.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>NetNathan inquired about the use of rack.slot.channel addresses, also known as I/O variables, as mentioned in the Machine Edition companion guide. This feature is specific to PACSystems or VersaMax controller rack systems and can be configured in the Hardware Configuration Node Properties.

One important property to note is the Default Variable Mode for PACSystems targets. By enabling this setting, I/O variables will be enabled for any new module or Genius bus added to the target, unless the module does not support I/O variables. On the other hand, disabling this setting will prevent I/O variables from being added to new modules or Genius busses.

In the context of an existing software utilizing rack.slot.channel addresses, it is important to review and update the transfer list for resolving issues and adding new instruments. To configure the transfer list, individual variables must be set rather than using the transfer list tab in the hardware configuration. This tab is specifically designed for transferring CPU memory segments, while I/O variables require a different approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IAR86</span></li>
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
<h4 class='text-dark'>FAQ: 1. How do I determine the correct address and length configuration for Rx3i PLCs with Proficy Machine Edition Software?</h4>
<p class='text-muted'><strong>Answer:</strong> - To determine the correct address and length configuration, you should refer to the hardware configuration of each CPU module in the transfer list tab. Make sure to check the %I Reference, %AI Reference, and their corresponding lengths specified for each PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the significance of the address format like "%IW0.8.0.1" in Rx3i PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> - The address format "%IW0.8.0.1" refers to the 1st channel of the AI card in slot 8. This format provides detailed information about the rack, slot, and channel of the IO card, aiding in precise configuration within the Proficy Machine Edition Software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I ensure the accuracy of my address configuration to avoid errors in PLC communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is crucial to follow the recommended address and length configurations specified in the hardware configuration of each CPU module. Double-checking the settings and referencing the correct format, such as "%IW0.8.0.1", can help prevent errors and ensure seamless communication between PLCs.</p>
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
