
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Currently, I am tasked with a project involving a Mitsubishi Q series PLC, a system I am unfamiliar with. I am curious about the distinction between D Register and W Register within this PLC. Unfortunately, my search for documentation explaining the functions of these memory locations has been unfruitful.">
    <meta name="keywords" content="mitsubishi q series plc, d register, w register, plc memory locations, mitsubishi q series functions, mitsubishi plc project, understanding d and w registers, mitsubishi plc documentation, mitsubishi q series memory, plc memory types, mitsubishi plc system, d">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/mitsubishi-q-series-plc-exploring-the-functions-of-d-and-w-registers">
    <title>Mitsubishi Q Series PLC: Exploring the Functions of D and W Registers | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Mitsubishi Q Series PLC: Exploring the Functions of D and W Registers | Oxmaint Community">
    <meta property="og:description" content="Currently, I am tasked with a project involving a Mitsubishi Q series PLC, a system I am unfamiliar with. I am curious about the distinction between D Register and W Register within this PLC. Unfortunately, my search for documentation explaining the functions of these memory locations has been unfruitful.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/mitsubishi-q-series-plc-exploring-the-functions-of-d-and-w-registers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mitsubishi Q Series PLC: Exploring the Functions of D and W Registers | Oxmaint Community">
    <meta name="twitter:description" content="Currently, I am tasked with a project involving a Mitsubishi Q series PLC, a system I am unfamiliar with. I am curious about the distinction between D Register and W Register within this PLC. Unfortunately, my search for documentation explaining the functions of these memory locations has been unfruitful.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/mitsubishi-q-series-plc-exploring-the-functions-of-d-and-w-registers"
      },
      "headline": "Mitsubishi Q Series PLC: Exploring the Functions of D and W Registers",
      "description": "Currently, I am tasked with a project involving a Mitsubishi Q series PLC, a system I am unfamiliar with. I am curious about the distinction between D Register and W Register within this PLC. Unfortunately, my search for documentation explaining the functions of these memory locations has been unfruitful.",
      "author": {
        "@type": "Person",
        "name": "Bobbias"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-20",
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
                <h1 class="text-white">Mitsubishi Q Series PLC: Exploring the Functions of D and W Registers</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Bobbias</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5329</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">145</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Currently, I am tasked with a project involving a Mitsubishi Q series PLC, a system I am unfamiliar with. I am curious about the distinction between D Register and W Register within this PLC. Unfortunately, my search for documentation explaining the functions of these memory locations has been unfruitful.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings,

According to the manual, data registers are memory components that hold numerical data within the range of -32768 to 32767 (0000H to FFFFH). A link register, on the other hand, is a memory unit within the CPU module that updates the CPU module with data sourced from the link registers (LW) of intelligent function modules such as the MELSECNET/H network module. This process helps ensure smooth communication and data exchange within the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mark-</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If there are no intelligent function modules utilizing them, are the W registers essentially equivalent to D registers in terms of functionality? Also, can anyone specify the specific manual from Mitsubishi to reference, considering the vast selection available?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bobbias</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, it is possible that alternative instructions have not been utilized, such as those that do not access the link registers. Upon further review, it is noted that in many instances within the manual, where D registers are utilized, L registers can also be a suitable option. Is your system experiencing a shortage of available D registers?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mark-</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was simply curious about the usage of remote registers with the AJ61QBT11 CC-Link module to connect to an FR-E700. A colleague mentioned that when utilizing remote registers, it is best to use D registers instead of W registers due to potential conflicting uses by customers. However, since we will not be using remote registers for this module, it likely won't impact our project. Thank you for the prompt responses.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bobbias</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello! The manuals can really help you become an excellent investigator. This information can be found in the QCPU User's Manual (SH(NA)-080484ENG-M), specifically in section 10.2.13.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mark-</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When comparing the functionality of "W" and "D", there is no practical difference between them. The main distinction lies in the addressing system used. 
"W" represents values in hexadecimal format, such as 01, 02, 0E, 0F, 10, 11, and so on. 
On the other hand, "D" represents values in decimal format, like 01, 02, 09, 10, 11, and so forth. 
In the context of registers, "W" is commonly referred to as a "Link register" while "D" is known as a "Data register". 
Similarly, the distinction between "B" and "M" lies in their roles as relay types. 
"B" is associated with a "Link relay" while "M" is linked to an "Internal relay". 
In my experience with programming software like GX developer or GX IEC Developer, I have consistently used "D" for internal registers and "W" for communication with external devices such as HMIs, SCADA systems, or networked PLCs. 
By assigning specific "W" (and "B") ranges across multiple PLCs, it streamlines the data exchange process and promotes efficiency in non-deterministic scenarios.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chris Taylor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>W registers are essential components when working with the AJ61QBT11 CC-link module and similar devices. When utilizing a CC-link connected AD module, the data values are transferred back to the PLC CPU through the W registers. This process remains consistent even when employing multiple CPUs, such as the Q series servo CPU, as all information is communicated through these registers. If you need further assistance, don't hesitate to reach out.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>muttleydoo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, Chris Taylor pointed out that there is no functional difference between a "W" and a "D" in programming. The main distinction lies in their addressing formats, with "W" representing values in hexadecimal (01, 02, 0E, 0F, 10, 11, etc.) and "D" in decimal (01, 02, 09, 10, 11, etc.). In programming languages like GX Developer or GX IEC Developer, "W" is commonly used for link registers while "D" is preferred for data registers. Similarly, the use of "B" as a link relay and "M" as an internal relay follows a consistent pattern. When working with multiple PLCs, Chris sets the "W" and "B" ranges for easy data exchange, especially for HMI and SCADA systems. This approach simplifies non-deterministic data transfers across the network. Thank you for the helpful explanation, Chris!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>J Lazo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unlike D registers, W registers in PLC Parameters are not retentive. For example, the D register latch can be set to a range such as D100-D400, but W registers are typically reserved for special cards like NETH for data transfer between PLCs. Additionally, there are R registers which function as file registers that can be configured to be stored in either Ram or on a memory card. These R registers are retentive, allowing for data to be saved even after power is lost.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the difference between D Register and W Register in a Mitsubishi Q series PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The D Registers in a Mitsubishi Q series PLC are 32-bit data registers that can store values for various purposes, while the W Registers are 16-bit word registers used for specific functions within the PLC system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How are D Registers and W Registers utilized in programming tasks for Mitsubishi Q series PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: D Registers are commonly used for storing data values, counters, timers, and other variables, while W Registers are often employed for specific mathematical operations, data handling, or communication tasks within the PLC program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can you provide examples of typical applications where D Registers and W Registers are used effectively in Mitsubishi Q series PLC projects?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: D Registers may be used for tasks such as storing sensor readings, tracking production counts, or maintaining system states, while W Registers could be utilized for calculating process variables, managing communication protocols, or implementing control algorithms in the PLC program.</p>
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
