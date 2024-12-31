
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am new to this topic so please be patient with me. I have been researching and experimenting with different methods, as some aspects are unfamiliar to me. I am currently working with a CompactLogix device running version 32, connected to an ethernet device with an EDS file.">
    <meta name="keywords" content="converting sint to float, troubleshooting sint to float, compactlogix sint conversion, ethernet device sint to float, eds file sint conversion, sint to int to real conversion, btd function for s">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/converting-two-sint-values-to-float-troubleshooting-methods-and-approaches">
    <title>Converting Two SINT Values to Float: Troubleshooting Methods and Approaches | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Converting Two SINT Values to Float: Troubleshooting Methods and Approaches | Oxmaint Community">
    <meta property="og:description" content="Hello, I am new to this topic so please be patient with me. I have been researching and experimenting with different methods, as some aspects are unfamiliar to me. I am currently working with a CompactLogix device running version 32, connected to an ethernet device with an EDS file.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/converting-two-sint-values-to-float-troubleshooting-methods-and-approaches">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Converting Two SINT Values to Float: Troubleshooting Methods and Approaches | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am new to this topic so please be patient with me. I have been researching and experimenting with different methods, as some aspects are unfamiliar to me. I am currently working with a CompactLogix device running version 32, connected to an ethernet device with an EDS file.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/converting-two-sint-values-to-float-troubleshooting-methods-and-approaches"
      },
      "headline": "Converting Two SINT Values to Float: Troubleshooting Methods and Approaches",
      "description": "Hello, I am new to this topic so please be patient with me. I have been researching and experimenting with different methods, as some aspects are unfamiliar to me. I am currently working with a CompactLogix device running version 32, connected to an ethernet device with an EDS file.",
      "author": {
        "@type": "Person",
        "name": "BigTallJV"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-15",
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
                <h1 class="text-white">Converting Two SINT Values to Float: Troubleshooting Methods and Approaches</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BigTallJV</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">397</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">332</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am new to this topic so please be patient with me. I have been researching and experimenting with different methods, as some aspects are unfamiliar to me. I am currently working with a CompactLogix device running version 32, connected to an ethernet device with an EDS file. This setup generates SINT input and output arrays, including MSB and LSB pairs, whole numbers, and two-digit decimal numbers ranging from 0.00 to 100.00%. I have attempted various approaches, such as transferring the SINT values to an INT and then to a REAL, but have not found the correct solution yet. I also explored the BTD function to manipulate bits, but I am unsure if that is the right approach. Another method I tried was using a CPT block to calculate SINT[1] + (SINT[2]/100) to achieve the desired outcome, although I am uncertain if this is the most effective method. Additionally, I am working with three SINT numbers, but I am unsure of their arrangement, with one representing revolutions and another representing hours. Thank you for your understanding.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for documentation for the "ethernet device" with the EDS file, that would be a great starting point. It may seem unconventional to store whole percent and fractional percents in two SINTs, but if it works for you, then "if it ain't broke, don't fix it!" What led you to use the CPT statement initially? Have you checked for external sources to confirm the accuracy of the result?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I possess the documentation for a Blue White Industries Peristaltic pump, according to the label. I have assumed that the offsets correspond to the SINT array, but I have not yet connected any pumps for testing. The use of CPT was a result of my laziness and lack of expertise in adding decimal points between numbers. Additionally, I struggled with manipulating bits due to my unfamiliarity with the process. There are a few other numbers that I am uncertain how to integrate into the overall setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BigTallJV</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The four-byte numbers found in Tube Revolutions (offsets 16-19) and Tube Hours (offsets 20-23) may require a conversion to DINT, UDINT, or possibly REAL data types. It is important to note that byte order issues may potentially arise during this process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When analyzing the document provided, it is noted that one SINT corresponds to a value of 50, while another SINT represents a value of 34, resulting in a total of 50.34 for Motor Percent. To accurately calculate the real value, a CPT of REAL = MSB + LSB/100 can be performed. It is important to combine the 4 SINTs into a DINT using a BITD to prevent potential byte order complications. It is likely that the MSB and LSB pair constitute a DINT, rather than a float, especially when dealing with counters. This approach will help avoid any issues related to byte order, as mentioned by Drbitboy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee mentioned that based on the provided document, one SINT equals 50 and the other equals 34, making the total value 50.34 for Motor Percent. To calculate the real value, perform a CPT with REAL = MSB + LSB/100. In the event of a MSB and LSB pair, combine the 4 SINTs into a DINT to prevent byte order issues. For converting a human-entered number like 12.34 into separate SINTs, consider using MOD to separate the decimal and then performing multiplication and subtraction. If the digits represent parts of a larger number, a simple formula like (SINT[1]*1000)+(SINT[2]*100)+(SINT[3]*10)+SINT[4] could be used, as long as the numbers in the hundreds, tens, and ones digits are below 10.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BigTallJV</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>One way to input quantities is to have the user enter them separately, as shown: ▢.▢ Another option is to convert the decimal number into an integer, where the integer part is represented by int(x) and the decimal part is represented by 100*(x - int(x)). This can help streamline data entry and calculations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: What is the purpose of converting two SINT values to a float in this scenario?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The purpose of converting two SINT values to a float is to manipulate and process input and output data in a CompactLogix setup, particularly for values ranging from 0.00 to 100.00% in this case.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: What methods have been attempted to convert the SINT values to a float?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Various methods have been explored, including transferring SINT values to an INT and then to a REAL, using the BTD function to manipulate bits, and employing a CPT block to calculate a specific formula to achieve the desired outcome.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Are there any specific challenges faced when converting SINT values to a float in CompactLogix devices?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Challenges may include determining the correct approach for conversion, understanding the arrangement of multiple SINT numbers representing different parameters such as revolutions and hours, and ensuring the accuracy and effectiveness of the chosen method.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: How can one effectively convert SINT values to a float in a CompactLogix setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To effectively convert SINT values to a float in a CompactLogix setup, it is essential to experiment with different methods, consider the data range and precision required, and possibly consult relevant documentation or forums for insights and troubleshooting tips.</p>
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
