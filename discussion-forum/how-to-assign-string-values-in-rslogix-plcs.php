
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As a newcomer to Logix PLCs, I am in the process of writing Structured Text code for implementation. Unfortunately, I am facing difficulty in assigning a string value to a string tag. After searching for resources, I came across Rockwells Structured Text programming manual online. Surprisingly, the manual only">
    <meta name="keywords" content="rslogix plcs, assign string values, structured text code, string tag, string value assignment, rockwell structured text programming manual, modifying strings, character-by-character string modification, string support in rockwell, logix plcs">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-assign-string-values-in-rslogix-plcs">
    <title>How to Assign String Values in RSLogix PLCs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Assign String Values in RSLogix PLCs | Oxmaint Community">
    <meta property="og:description" content="As a newcomer to Logix PLCs, I am in the process of writing Structured Text code for implementation. Unfortunately, I am facing difficulty in assigning a string value to a string tag. After searching for resources, I came across Rockwells Structured Text programming manual online. Surprisingly, the manual only">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-assign-string-values-in-rslogix-plcs">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Assign String Values in RSLogix PLCs | Oxmaint Community">
    <meta name="twitter:description" content="As a newcomer to Logix PLCs, I am in the process of writing Structured Text code for implementation. Unfortunately, I am facing difficulty in assigning a string value to a string tag. After searching for resources, I came across Rockwells Structured Text programming manual online. Surprisingly, the manual only">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-assign-string-values-in-rslogix-plcs"
      },
      "headline": "How to Assign String Values in RSLogix PLCs",
      "description": "As a newcomer to Logix PLCs, I am in the process of writing Structured Text code for implementation. Unfortunately, I am facing difficulty in assigning a string value to a string tag. After searching for resources, I came across Rockwells Structured Text programming manual online. Surprisingly, the manual only",
      "author": {
        "@type": "Person",
        "name": "SirCumference"
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
                <h1 class="text-white">How to Assign String Values in RSLogix PLCs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>SirCumference</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">14579</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">498</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>As a newcomer to Logix PLCs, I am in the process of writing Structured Text code for implementation. Unfortunately, I am facing difficulty in assigning a string value to a string tag. After searching for resources, I came across Rockwell's Structured Text programming manual online. Surprisingly, the manual only provides two examples on how to achieve this task: Code:string1.DATA[0]:= 65; and Code:string1.DATA[0]:= string2.DATA[0]; Is it truly the case that strings can only be modified one character at a time? I am hoping that there is more to it than what is currently presented. It is frustrating to see Rockwell's lackluster string support.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To learn more about structured text programming for PLCs, refer to the detailed Structured Text Programming Manual available at http://claymore.engineer.gvsu.edu/~jackh/books/plcs/chapters/plc_st.pdf. This guide highlights various string manipulation instructions commonly used in structured text programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danatomega</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the Logix 5000 operating system, there is no provision for using String literals or String constants. This means that you cannot simply assign a literal string to a String datatype tag like 'Twas brillig and the slithy toves.' However, you can still work with arrays of data from the .Data[x] SINT array or input character values into each .Data[x] element individually. While this functionality is present in IEC1131-3 Structured Text for creating variables, it is not supported in Logix 5000. Typically, String tags are created first, followed by manual entry of desired values in the Tag Database editor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize your code and maintain consistency, consider creating a set of constant string tags, such as "Always65String," for frequently used strings. Utilize a function like COP(Always65String, string1, 50) to define the length of the string (50 characters in this example). This approach will streamline your writing and enhance the efficiency of your programming endeavors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aufisherman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To assign a string value to a tag (TAG_1) in RsLogix 5000, you need to have another tag (TAG_2) containing the desired value. Once you have TAG_2 set up, you can use the COP/CPS function to copy the string value into TAG_1. If you need to clear out a string, simply use the FLL function to fill TAG_1 with zeros. In newer versions of RsLogix 5000, such as v31+, you can compare a tag to a literal string using the EQU instruction, for example: EQU(TAG_1, "Test"). Hopefully, this explanation is helpful for your programming needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ohnedich6</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm confident that the original poster has found a solution over the span of five years.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>the_msp</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The_msp pointed out that the original poster probably found a solution after 5 years. It's important to understand that when you seek help on a forum, you are actually browsing through responses to queries made by others.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aufisherman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The_MSP claimed that the original poster likely found a solution after 5 years. Aufisherman pointed out the importance of realizing that when searching the forum for help, you are often looking at answers to other people's questions. I joined the forum seeking assistance and happened to come across a remedy for my issue. I agree that while some may have already found solutions, those searching for answers in the future will still need them. It's crucial to understand that looking for help on forums means tapping into a pool of collective knowledge and solutions from past discussions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jkx</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, you can directly change the value of a string. To better understand this concept, it is important to have a clear understanding of what a string is. Essentially, a string is a collection of ASCII characters, with each character represented by 4 bits. Refer to an ASCII table for more information on character representations.

In Logix5000, the default setup includes a string variable with a length defined as a DINT (Decimal) and data stored in an array of SINT (ASCII) with a maximum capacity of 82 characters. When updating the string data, it is crucial to also adjust the length value to match the number of characters in the updated string. This is because the system reads the number of characters based on the length value.

For example, if your string is "STRING 1" and consists of 8 characters, you must set the length value to 8. The processor will only read data up to the length value. If the length value is set to 0, the string will be empty. On the other hand, if the length value is set to 10, the string will have 2 additional spaces appended at the end.

Understanding these principles may take some time, but mastering them will greatly improve your programming skills.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Will the data be truncated if the .LEN value of the string is shorter than its actual length?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>#1Imposter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The behavior of the .LEN parameter in the STRING tag varies depending on the settings and usage method. When performing tasks within the Logix 5k processor, such as using COP or ASCII instructions, any characters beyond .LEN are typically disregarded. However, external devices may interpret this differently. For instance, a Maple Systems HMI disregards .LEN and focuses only on .DATA, seeking the first occurrence of "0" in the SINT array to denote the end of the string. This disparity can lead to complications when managing tasks simultaneously in the PLC and HMI.

To understand this better, conduct an experiment by creating multiple STRING tags. Populate one tag with a lengthy string and another with a shorter one. Apply a COP instruction to copy the shorter string to the longer one, then review the value of the first tag in the tag database or Watch window. Viewing the tag at the top level will display the expected shorter string. However, delving into the structure and examining the .DATA member array will reveal the lingering characters from the longer string, which are typically disregarded by the PLC. It's crucial to note that other devices may not overlook these characters, as I learned through a challenging experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're still manually inputting strings in Studio 5000 as discussed in this post, it's time for an update. Rockwell now supports string literals, so make sure you're utilizing this feature if you're using a newer firmware version. Don't miss out on this time-saving and efficient method for programming in Studio 5000.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>idiotsecant</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The ability to use string constants is dependent on the hardware being utilized. Currently, only the 5380 CompactLogix and 5580 Control Logix models have the capacity to support string constants. The 5370/5570 hardware, on the other hand, still lacks this capability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Is it possible to assign a full string value to a string tag in RSLogix PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While RSLogix PLCs primarily handle string manipulation at the character level, you can assign a full string value by sequentially assigning characters to the corresponding indices of the string tag.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Are there alternative methods for assigning string values in RSLogix PLCs beyond the examples provided in the Rockwell Structured Text programming manual?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, aside from the examples in the manual, you can implement custom functions or logic to facilitate the assignment of string values more efficiently in RSLogix PLCs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I enhance string manipulation capabilities in RSLogix PLCs beyond what is available in the standard resources?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can explore advanced techniques such as using arrays of strings, custom string manipulation functions, or leveraging structured text programming features to streamline string handling tasks in RSLogix PLCs.</p>
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
