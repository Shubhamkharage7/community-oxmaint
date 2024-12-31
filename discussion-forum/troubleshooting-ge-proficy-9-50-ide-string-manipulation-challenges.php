
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I have been tasked with using a GE SCE330 Processor for a customer project. I am facing challenges while working with the new GE Proficy 9.50 IDE, particularly with string manipulation tasks. I need to create a string constant of 16 characters and combine it with a">
    <meta name="keywords" content="ge proficy 50 ide, string manipulation, ge sce330 processor, string constant, plc, profinet, ld instructions, stl instructions, concatenate strings, string data access, integer array, laser marker, part data">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-proficy-9-50-ide-string-manipulation-challenges">
    <title>Troubleshooting GE Proficy 9.50 IDE String Manipulation Challenges | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting GE Proficy 9.50 IDE String Manipulation Challenges | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I have been tasked with using a GE SCE330 Processor for a customer project. I am facing challenges while working with the new GE Proficy 9.50 IDE, particularly with string manipulation tasks. I need to create a string constant of 16 characters and combine it with a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-proficy-9-50-ide-string-manipulation-challenges">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting GE Proficy 9.50 IDE String Manipulation Challenges | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I have been tasked with using a GE SCE330 Processor for a customer project. I am facing challenges while working with the new GE Proficy 9.50 IDE, particularly with string manipulation tasks. I need to create a string constant of 16 characters and combine it with a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ge-proficy-9-50-ide-string-manipulation-challenges"
      },
      "headline": "Troubleshooting GE Proficy 9.50 IDE String Manipulation Challenges",
      "description": "Hello everyone, I have been tasked with using a GE SCE330 Processor for a customer project. I am facing challenges while working with the new GE Proficy 9.50 IDE, particularly with string manipulation tasks. I need to create a string constant of 16 characters and combine it with a",
      "author": {
        "@type": "Person",
        "name": "timryder"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-12",
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
                <h1 class="text-white">Troubleshooting GE Proficy 9.50 IDE String Manipulation Challenges</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>timryder</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3461</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">9</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I have been tasked with using a GE SCE330 Processor for a customer project. I am facing challenges while working with the new GE Proficy 9.50 IDE, particularly with string manipulation tasks. 

I need to create a string constant of 16 characters and combine it with a string received from the customer's Conveyor Line PLC via ProfiNET. I am unable to find any LD or STL string manipulation instructions in the IDE. Although I can create a string, I am unsure how to access the data within the string or how to concatenate it with another string.

After concatenating the strings, I need to transfer the complete string into an integer array for transmission to a Laser Marker for updating part data. 

I have a few questions: 
1. Does the GE PLC offer string manipulation instructions that I may be overlooking? 
2. How can I merge two strings and where should I store the combined result? 
3. Which instruction should I utilize to transfer the string into an Integer array?

Thank you for your assistance. I am currently encountering difficulties with GE products.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Question 1: While the PLC does not directly support string handling, you can utilize subroutines written in C to achieve this functionality. If your project involves a GE HMI, it offers a limited set of string handling instructions that can be leveraged. By creating a script in the HMI that reads data from the PLC, performs necessary string manipulations, and writes the results back to the PLC, you can achieve the desired outcome.

For Questions 2 and 3: It is recommended to utilize addressed memory for your string variables. The starting address of the incoming string via Profinet is typically one higher than the address of the last two characters of the string. Strings are stored as two ASCII characters per 16-bit address. To manipulate the string, such as swapping the high and low bytes, consider creating an INT variable array that shares the same address range as your string.

If you are facing challenges with GE products, it's important to adapt to their behavior rather than trying to force them to mimic another brand's PLC. This approach can help mitigate frustration and ensure smoother operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Manipulating strings becomes simple when you view each character as a byte and organize them into arrays. Utilize the "ARRAY" handling function blocks or custom function blocks to easily split or combine strings as required. Each software provider has their own unique strengths and weaknesses. Avoid trying to make new software operate like your outdated system. Instead, embrace its features and leverage them to optimize your workflow.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have a user-defined type (UDT) with various elements, including real, bool, and a need for a String. When I tried to create an array variable using the UDT, I encountered an issue when attempting to write data from another variable into a specific index of the array. The problem arose when I used a for loop with the loop index in a variable, as PME flagged an error stating that a string array requires a constant index value and cannot accept a variable index. Do you have any suggestions on how to resolve this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeandreC</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Does the GE PLC offer string manipulation instructions that I may be overlooking?
   - The GE Proficy 9.50 IDE may not have explicit LD or STL string manipulation instructions, but there are alternative methods to perform string operations using other available functions or programming techniques.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I merge two strings and where should I store the combined result?</h4>
<p class='text-muted'><strong>Answer:</strong> - To merge two strings in GE Proficy 9.50 IDE, you can create a new string variable and use assignment operations or functions to concatenate the strings. The combined result can be stored in a designated string variable for further processing.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Which instruction should I utilize to transfer the string into an Integer array?</h4>
<p class='text-muted'><strong>Answer:</strong> - To transfer a string into an Integer array in GE Proficy 9.50 IDE, you can convert the string into its corresponding ASCII values and then store these values in an Integer array for transmission to the Laser Marker for updating part data.</p>
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
