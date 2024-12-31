
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my small system, I am using an IC693MDL645D Input card with module addresses starting from %I00081. However, I am trying to change them to start at %I00001 but am unable to do so in the configuration. What other options can I explore to achieve this adjustment?">
    <meta name="keywords" content="ic693mdl645d input card, ge series 90-30 system, adjusting module addresses, ic693mdl645d configuration, input card addressing, %i00081 to %i00001, ge series 90-30">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-adjust-ic693mdl645d-input-card-addressing-in-ge-series-90-30-system">
    <title>How to Adjust IC693MDL645D Input Card Addressing in GE Series 90-30 System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Adjust IC693MDL645D Input Card Addressing in GE Series 90-30 System | Oxmaint Community">
    <meta property="og:description" content="In my small system, I am using an IC693MDL645D Input card with module addresses starting from %I00081. However, I am trying to change them to start at %I00001 but am unable to do so in the configuration. What other options can I explore to achieve this adjustment?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-adjust-ic693mdl645d-input-card-addressing-in-ge-series-90-30-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Adjust IC693MDL645D Input Card Addressing in GE Series 90-30 System | Oxmaint Community">
    <meta name="twitter:description" content="In my small system, I am using an IC693MDL645D Input card with module addresses starting from %I00081. However, I am trying to change them to start at %I00001 but am unable to do so in the configuration. What other options can I explore to achieve this adjustment?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-adjust-ic693mdl645d-input-card-addressing-in-ge-series-90-30-system"
      },
      "headline": "How to Adjust IC693MDL645D Input Card Addressing in GE Series 90-30 System",
      "description": "In my small system, I am using an IC693MDL645D Input card with module addresses starting from %I00081. However, I am trying to change them to start at %I00001 but am unable to do so in the configuration. What other options can I explore to achieve this adjustment?",
      "author": {
        "@type": "Person",
        "name": "Tweeker"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-10",
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
                <h1 class="text-white">How to Adjust IC693MDL645D Input Card Addressing in GE Series 90-30 System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Tweeker</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2968</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">78</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my small system, I am using an IC693MDL645D Input card with module addresses starting from %I00081. However, I am trying to change them to start at %I00001 but am unable to do so in the configuration. What other options can I explore to achieve this adjustment?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is any device utilizing the %I00001 address space, such as an Analog I/O card or Communication module in Proficy ME? The software typically assigns the "next available" address automatically, but you can adjust this configuration offline if needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bjh</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am facing an issue with a rack containing only 3 cards - a processor, one input, and one output card. Despite my attempts to troubleshoot online and offline, including checking for dip switches, I am still confused and unable to understand the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tweeker</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When initializing a new 90-30 project in Proficy, the default CPU374 model with an Ethernet port is selected. The Ethernet port provides 80 %I bits of status data, starting at %I00001. This means that the next available %I address for the MDL645 module is %I00081. It is possible to adjust the starting address for the Ethernet port status bits to make room for the MDL645 module.

It is important to note that the PLC must be stopped in order to download a new hardware configuration. When initiating a download while the PLC is stopped, you will have the option to download the program, configuration, and initial values. However, if the PLC is running during the download process, only the program will be downloaded. Remember to stop the PLC before making any hardware changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While Steve makes a valid point, the starting address may not be as significant as the input's designated "Name" for programming purposes. By assigning each input a unique identifier such as In1, In2, etc., you can streamline the programming process and easily refer to each input as needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response, Steve. As a newcomer to General Electric (GE), I am eager to understand the intricacies of both the software and hardware. RussB, it is crucial for me to grasp the process behind it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tweeker</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Tweeker expressed gratitude for Steve's informative response, as he navigates the complexities of GE software and hardware. RussB, emphasizing the importance of understanding the process, seeks a detailed explanation of how things are done. Perhaps, delving deep into the system to grasp the "how" is more valuable than seeking a fast solution. It could be seen as a shift in mindset across different generations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RussB posited the idea that genuine interest lies in understanding the "how" of a system through careful study rather than seeking a quick answer. He hinted at the possibility that this attitude may vary across generations. Is there a specific reason for this forum's existence?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tweeker</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user, Tweeker, questioned the necessity of the forum, stating that most people already know the answer. In my opinion, the forum serves as a resource for those who may be too lazy to read the manual or online help guides.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When initiating a new 90-30 project in Proficy, an Ethernet port will default to a CPU374 model with 80 %I status bits starting at %I00001. The following %I address available for the MDL645 would be %I00081. It is possible to adjust the starting address of the Ethernet port status bits to make way for the MDL645 address. Keep in mind that the PLC must be stopped to download a new hardware configuration. During a download with the PLC stopped, you can choose to download the program, configuration, and initial values. However, if the PLC is running during a download, only the program will be downloaded. This information was provided by Steve Bailey and proved helpful in a recent project involving the upgrade of a 90-30 PLC to a CPE305 model. By adjusting the Ethernet address starting point to 129, the need to rewrite all variables was eliminated. This experience marked the first time working with a GE PLC, having predominantly worked with Allen Bradley systems throughout my career.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>anthonymiles101</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1. Question: How can I adjust the addressing of an IC693MDL645D Input card in a GE Series 90-30 system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To adjust the addressing of the IC693MDL645D Input card, you can start by accessing the configuration settings of the module in your system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: I am unable to change the module addresses to start at %I00001 for the IC693MDL645D Input card. What should I do?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you are facing difficulties changing the starting address to %I00001, consider checking if there are any restrictions or limitations within the configuration software that prevent this adjustment.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Are there alternative methods to adjust the module addressing for the IC693MDL645D Input card?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If changing the addressing directly in the configuration is not possible, you can explore options such as reconfiguring the hardware setup or consulting the system documentation for any specific guidelines on addressing adjustments.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: What are the implications of adjusting the addressing of the IC693MDL645D Input card in a GE Series 90-30 system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Changing the addressing of the input card may impact the overall system functionality, so it is crucial to ensure that the adjustments are made correctly to avoid any potential errors or disruptions in operation.</p>
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
