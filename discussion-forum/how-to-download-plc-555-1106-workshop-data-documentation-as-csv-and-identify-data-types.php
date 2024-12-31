
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on a workshop program with a PLC 555-1106 and would like to know how to download the data documentation window as a .csv file. This file is essential for my project as I plan to upload it onto the TOP 6 server to">
    <meta name="keywords" content="plc 555-1106, workshop data documentation, download plc data as .csv, identify data types, top 6 server, plc tags, data types identification, address data types, data documentation window, data type tool, data type display">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-download-plc-555-1106-workshop-data-documentation-as-csv-and-identify-data-types">
    <title>How to Download PLC 555-1106 Workshop Data Documentation as .csv and Identify Data Types | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Download PLC 555-1106 Workshop Data Documentation as .csv and Identify Data Types | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on a workshop program with a PLC 555-1106 and would like to know how to download the data documentation window as a .csv file. This file is essential for my project as I plan to upload it onto the TOP 6 server to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-download-plc-555-1106-workshop-data-documentation-as-csv-and-identify-data-types">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Download PLC 555-1106 Workshop Data Documentation as .csv and Identify Data Types | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on a workshop program with a PLC 555-1106 and would like to know how to download the data documentation window as a .csv file. This file is essential for my project as I plan to upload it onto the TOP 6 server to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-download-plc-555-1106-workshop-data-documentation-as-csv-and-identify-data-types"
      },
      "headline": "How to Download PLC 555-1106 Workshop Data Documentation as .csv and Identify Data Types",
      "description": "Hello everyone, I am currently working on a workshop program with a PLC 555-1106 and would like to know how to download the data documentation window as a .csv file. This file is essential for my project as I plan to upload it onto the TOP 6 server to",
      "author": {
        "@type": "Person",
        "name": "aaronblake"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-23",
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
                <h1 class="text-white">How to Download PLC 555-1106 Workshop Data Documentation as .csv and Identify Data Types</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>aaronblake</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">553</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">107</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on a workshop program with a PLC 555-1106 and would like to know how to download the data documentation window as a .csv file. This file is essential for my project as I plan to upload it onto the TOP 6 server to access the tags. Can anyone assist me with this? Additionally, I am seeking information on how to quickly identify the data types of each address. Is there a specific tool or window that displays the data type of each address in one go, rather than manually checking each one individually? Your help is greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Within the file menu, there is an option for exporting data in comma-separated values (CSV) format. C registers represent bits, while V registers represent integers. Additionally, floating-point numbers can also be stored in V registers, although they require two V registers for storage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RET</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to RET, there is an export function available in the file menu that allows you to save data as a csv file by selecting comma-separated values. In this system, C registers represent bits while V registers represent integers. Floating points are also considered V registers, but they can require two V registers for identification. After trying this export function, a csv file was successfully generated. However, there is confusion regarding how the data types are assigned to certain tags such as C45, K50, V1, WX1, WY1, X17, and Y17. Can you clarify which data types are associated with these tags?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aaronblake</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cs are Boolean memory, Ks are 16-bit constant integers that can be signed or unsigned (ranging from 0 to 65536 or -32678 to 32767). Vs are 16-bit integers that can also be signed or unsigned (ranging from 0 to 65536 or -32678 to 32767). V represents a float, with V1 being a real number stored in IEEE format. WYs are 16-bit analog output addresses mapped to modules, typically ranging from 0 to 32000. WXs are 16-bit analog input addresses also mapped to modules, typically ranging from 0 to 32000. Xs are discrete inputs mapped to input modules, while Ys are discrete outputs mapped to output modules. It is important to note that X and Ys share memory, making X1 equivalent to Y1, whereas WX and WY are unique memory locations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The incorporation of floating point V memory support is uncertain as it is not clear when it was introduced. Older firmware versions primarily support integers, but later versions may include support for bits of V memory like V100.2, with bit numbering ranging from 1 to 16 instead of the common 0-15. It is important to note that bit 1 typically represents the sign bit in a signed integer. It is not confirmed if Siemens ever implemented this feature.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Since the early 1990s, I have experience with the TI 500 and 505 models. Back then, these models supported float and a bit of word. The T305, which came before, may not have had these features. I still have one of those running in a plant for a glue gun. It is worth noting that the TI models used a Motorola chipset instead of Intel, causing the LSB to MSB inversion and starting with .1 instead of .0.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The outdated TI-565 calculator lacked support for floating point numbers or V-bit processing. It appears that the TI-535 model shared the same limitations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a statement by Robertmee, Cs are defined as Boolean memory, Ks as 16-bit constant integers that can be signed or unsigned (ranging from 0 to 65536 or -32678 to 32767), Vs as 16-bit integers that can also be signed or unsigned, and V. denotes a float value. WYs are 16-bit analog output addresses linked to modules with an integer range typically between 0 and 32000. Similarly, WXs are 16-bit analog input addresses correlated with modules, also with an integer range commonly between 0 and 32000. Xs represent discrete inputs while Ys stand for discrete outputs, both paired with input and output modules, respectively. It is important to note that X and Ys share memory, making X1 equivalent to Y1, while WX and WY are unique memory locations. Additionally, the mention of MCR, TCC, and TCP raises further questions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aaronblake</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Master control relays (MCRs) play a crucial role in programming by deactivating specific code blocks. In programming, TCC (timer/counter current value) and TCP (timer/counter preset value) are essential integers that can vary in value depending on the context. For instance, a timer can be set to have a resolution of either 0.1s or 0.001s. To illustrate, a 5-second timer with 0.1s resolution would have a TCP value of 50, while a timer with 0.001s resolution would have a TCP value of 5000.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee explains that MCRs, or master control relays, are used to disable a block of code. TCC refers to the timer/counter current value, while TCP stands for the timer/counter preset value. Both of these values are integers, but their significance can vary depending on the context in which they are used. For instance, a timer can be set to have a resolution of either .1s or .001s. For a 5-second timer with a resolution of .1s, the TCP value would be 50, while for a .001s timer, the TCP value would be 5000.

When choosing data types for the associated tags, MCR and TCP are not options on the list provided. Could you assist me in determining which data type best corresponds to MCR and TCP from the available options on the provided list? The available options are as follows:</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aaronblake</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The MCR instruction is a boolean operation that simply enables or disables a specific function, similar to a "JMP" instruction. In my experience, there is no tag or address associated with the MCR instruction. I am unsure how TI signals the end of the MCR zone. Is there an equivalent "ENDMCR" instruction? TCP, as mentioned by robertmee, is represented as an integer. Since "Integer" is not an option in the provided list, selecting "Word" would indicate an unsigned integer. Timer and counter presets are typically set as positive values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Steve Bailey, the MCR instruction functions as a boolean operation. In my experience, the MCR instruction does not require a tag or specific address, only a boolean value for activation or deactivation. It can be likened to a "JMP" instruction in its function. I am uncertain how TI signals the conclusion of the MCR zone - is there an "ENDMCR" command? On the other hand, TCP is considered an integer, as noted by robertmee in the referenced post. While "Integer" may not be an option in the provided list, I would opt for "Word" as it typically represents an unsigned integer value. When setting timer and counter presets, it is important to note that they are typically set as positive values. The MCRE instruction marks the end of an MCR zone in programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I download the data documentation window as a .csv file for a PLC 555-1106 workshop program?
- To download the data documentation window as a .csv file, you can usually look for an option within the software or tool you are using for programming the PLC. It is essential for projects where you need to access tags on a server.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a way to identify the data types of each address quickly in a PLC 555-1106 program?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, there might be a specific tool or window available in the programming software that displays the data type of each address at once. This can save time compared to manually checking each address individually, making your project more efficient.</p>
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
