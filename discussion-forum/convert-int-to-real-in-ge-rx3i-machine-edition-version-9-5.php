
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am inputting two integers (Low and High) and need to switch their positions and convert them to REAL in Machine Edition version 9.5. I am currently facing a challenge in converting the integers to REAL due to validation issues when using Move Int to Real. Here is the">
    <meta name="keywords" content="ge rx3i machine edition version 5, convert int to real, switch positions of integers, move int to real validation issues, converting integers to real, input">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/convert-int-to-real-in-ge-rx3i-machine-edition-version-9-5">
    <title>Convert INT to REAL in GE RX3i Machine Edition Version 9.5 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Convert INT to REAL in GE RX3i Machine Edition Version 9.5 | Oxmaint Community">
    <meta property="og:description" content="I am inputting two integers (Low and High) and need to switch their positions and convert them to REAL in Machine Edition version 9.5. I am currently facing a challenge in converting the integers to REAL due to validation issues when using Move Int to Real. Here is the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/convert-int-to-real-in-ge-rx3i-machine-edition-version-9-5">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Convert INT to REAL in GE RX3i Machine Edition Version 9.5 | Oxmaint Community">
    <meta name="twitter:description" content="I am inputting two integers (Low and High) and need to switch their positions and convert them to REAL in Machine Edition version 9.5. I am currently facing a challenge in converting the integers to REAL due to validation issues when using Move Int to Real. Here is the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/convert-int-to-real-in-ge-rx3i-machine-edition-version-9-5"
      },
      "headline": "Convert INT to REAL in GE RX3i Machine Edition Version 9.5",
      "description": "I am inputting two integers (Low and High) and need to switch their positions and convert them to REAL in Machine Edition version 9.5. I am currently facing a challenge in converting the integers to REAL due to validation issues when using Move Int to Real. Here is the",
      "author": {
        "@type": "Person",
        "name": "NetNathan"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-05",
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
                <h1 class="text-white">Convert INT to REAL in GE RX3i Machine Edition Version 9.5</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3758</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">60</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am inputting two integers (Low and High) and need to switch their positions and convert them to REAL in Machine Edition version 9.5. I am currently facing a challenge in converting the integers to REAL due to validation issues when using "Move Int" to Real. 

Here is the current process:
- Input data as R1 (Low) and R2 (High)
- Move R2 to R3
- Move R1 to R4

Now the integers are in the correct order with R3 as High and R4 as Low. To convert them to REAL, should I first convert them to DINT? Any suggestions on how to achieve this in Machine Edition?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Within the function set, there are two essential SWAP instructions available. SWAP_WORD is designed to switch the bytes within a 16-bit WORD, while SWAP_DWORD is meant for interchanging the words within a 32-bit DWORD. If you find yourself facing difficulties reaching a floating-point number, consider whether you need to perform a SWAP operation after reading two INTs in the incorrect sequence. Following the SWAP, convert the result into a REAL variable. In cases where the 16-bit entities are meant to be interpreted as floating point but are not in the right order, utilize the SWAP instruction with a DWORD variable as an output. Additionally, it is crucial to create another REAL variable with the same address as the DWORD output from the SWAP operation to correctly interpret the bits as per IEEE-754 floating point format.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After completing my work, I require precision with Real data analysis beyond the decimal point. I almost overlooked the importance of SWAP_DWORD, but I will make sure to include it. In the GE environment, do Word and Integer carry the same weight at 16 bits? It can be quite perplexing when working with Word and Integer commands.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the process for merging two integers to create a DINT or REAL data type?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with GE PLCs, it's important to understand the difference between INT and WORD data types. An INT is signed and has a range of values from -32768 to +32767, while a WORD is unsigned and ranges from 0 to 65535. But how can you combine two integers to create a DINT or REAL value?

There are a couple of scenarios to consider. If you have a DINT value of 12345678 and two INTs with values of 1234 and 5678, the simplest solution is to convert both INTs to DINT or REAL. Then, multiply the INT with a value of 1234 by 10,000 and add the second INT to the result.

It's important to note that the INT_TO_DINT instruction is only available in the Rx series of PLCs. However, the 90 series offers INT_TO_REAL and REAL_TO_DINT instructions as alternatives.

In another scenario, if your DINT value of 12345678 is split between a low word value of 24,910 and a high word value of 188, you can easily create a DINT variable with the same address as the low word to handle this situation efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for explaining the concepts of INT and WORD. I am currently using an RX3i system. I will experiment with the suggestions you provided. Let's see how they work out.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve, I attempted to implement some of your suggestions, but unfortunately encountered some issues. The program I initially created involves using a "MOVE INT" command to transfer a value of 2 into a REAL variable. However, I am facing a "type mismatch" error during validation for the final "MOVE INT" command in each segment, even though the program still functions correctly. I have attached the UDFB that I developed, which can be easily imported. This UDFB is designed to work with Profinet data from an ABB Variable Frequency Drive (VFD), and I am utilizing the same logic for converting values such as Volts, Amps, Power, RPM, and Hz.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This is an example of the concept I had proposed. Although I do not have an Rx3i, I was able to achieve a similar result using a 9030 CPU374 by utilizing the MOVE_INT instructions. The content of %R103 and %R104 represents a REAL value of 123.456. When interpreted as 16-bit INT, %R103 shows -5767 and %R104 shows 17142. It is important to note that %R103 houses two different variables - one being an INT and the other a REAL. By ensuring that the correct variable is chosen in subsequent calculations, accurate results can be obtained.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, Steve Bailey demonstrated a workaround for those without an Rx3i unit to use the SWAP instruction. By utilizing the MOVE_INT instruction on a 9030 CPU374, he successfully stored a REAL value of 123.456 in %R103 and %R104. Interestingly, while %R103 showed -5767 as a 16-bit INT, %R104 displayed 17142. This scenario showcases the importance of selecting the right variable type for accurate calculations. However, it's worth noting that RX3i doesn't allow the same address for two variables, posing a potential challenge when dealing with INT and REAL values. Currently, all variables except "P" are of type INT in use.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>With the Rx3i, you can easily define two variables at the same address by adjusting settings in the setup menu. Simply navigate to Controller/General/Duplicate Addresses. Here, you have the options to Ignore, Warn, or Prevent duplicate addresses, with Prevent being the default setting. This feature allows for efficient management of variables within the Rx3i system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>NetNathan mentioned to Steve that he tried implementing some of his suggested ideas but encountered difficulty. He provided an example of his work involving a "MOVE INT" of 2 into a REAL, which resulted in a "type mismatch" error during validation. Despite this issue, the UDFB attached was successfully constructed and could be imported for use. This UDFB is designed for handling Profinet data from an ABB VFD, facilitating conversions for Volts, Amps, Power, RPM, and Hz. Would you kindly share the UDFB once more? This would greatly assist with my current project modifications involving Rx3i's and ABB VFD's, utilizing Modbus TCP and Profinet technologies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>EAndersontxfl</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey explained that in GE systems, the term INT refers to a signed 16-bit value while WORD represents an unsigned 16-bit value. This means that INTs have a range of -32768 to +32767, while WORDs have a range of 0 to 65535. When dealing with conversions, there are a few scenarios to consider.

Firstly, if you have a DINT value of 12345678 and two INTs with values of 1234 and 5678, the recommended approach is to convert both INTs to DINT or REAL. Then, multiply the INT with a value of 1234 by 10,000 and add the result to the second INT. It's important to note that the INT_TO_DINT instruction is only available in the Rx series, while the 90 series offers INT_TO_REAL and REAL_TO_DINT instructions.

Secondly, if the DINT value 12345678 translates to 24,910 in the low word and 188 in the high word, simply create a DINT variable with the same address as the low word to handle this situation.

Additionally, for configuring PM710 meter for PM2120 (Schneider) MODBUS communication, where PM710 uses INT at address 4000 and PM2120 requires FLOAT at address 3000, you will need to perform the necessary conversion in Machine Edition.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rodrigoscheid</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How can I switch the positions of two integers (Low and High) and convert them to REAL in GE RX3i Machine Edition Version 9.5?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To switch the positions of the integers and convert them to REAL in Machine Edition, you can follow a process such as inputting data as R1 (Low) and R2 (High), moving R2 to R3, and moving R1 to R4. Then, R3 will be High and R4 will be Low. To convert them to REAL, you may need to consider converting them to DINT first.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: Why am I facing validation issues when using "Move Int" to Real in GE RX3i Machine Edition Version 9.5?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Validation issues when using "Move Int" to Real in Machine Edition may occur due to data type mismatches or incorrect conversion processes. Ensure that the data types are compatible and consider converting the integers to an appropriate format before converting them to REAL.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Are there any suggestions on how to convert integers to REAL in GE RX3i Machine Edition?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To convert integers to REAL in Machine Edition, consider switching the positions of the integers and then converting them to an intermediate data type like DINT before converting to REAL. Ensure that the conversion processes are done correctly to avoid validation issues.</p>
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
