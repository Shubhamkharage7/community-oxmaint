
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently utilizing Studio 5000 Professional and exploring the implementation of structured text. In my current situation, an operator scans a barcode which is then processed, prompting the PLC to search an array for the corresponding part number. If the number is found, the PLC will retrieve">
    <meta name="keywords" content="studio 5000 professional structured text, plc barcode processing, removing initial letter from string, array search in plc, duplicate tag prevention, plc tag creation, structured text programming">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-remove-initial-letter-from-string-in-studio-5000-professional">
    <title>How to Remove Initial Letter from String in Studio 5000 Professional | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Remove Initial Letter from String in Studio 5000 Professional | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently utilizing Studio 5000 Professional and exploring the implementation of structured text. In my current situation, an operator scans a barcode which is then processed, prompting the PLC to search an array for the corresponding part number. If the number is found, the PLC will retrieve">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-remove-initial-letter-from-string-in-studio-5000-professional">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Remove Initial Letter from String in Studio 5000 Professional | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently utilizing Studio 5000 Professional and exploring the implementation of structured text. In my current situation, an operator scans a barcode which is then processed, prompting the PLC to search an array for the corresponding part number. If the number is found, the PLC will retrieve">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-remove-initial-letter-from-string-in-studio-5000-professional"
      },
      "headline": "How to Remove Initial Letter from String in Studio 5000 Professional",
      "description": "Hello, I am currently utilizing Studio 5000 Professional and exploring the implementation of structured text. In my current situation, an operator scans a barcode which is then processed, prompting the PLC to search an array for the corresponding part number. If the number is found, the PLC will retrieve",
      "author": {
        "@type": "Person",
        "name": "painterman"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-07",
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
                <h1 class="text-white">How to Remove Initial Letter from String in Studio 5000 Professional</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>painterman</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>15 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">703</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">194</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently utilizing Studio 5000 Professional and exploring the implementation of structured text. In my current situation, an operator scans a barcode which is then processed, prompting the PLC to search an array for the corresponding part number. If the number is found, the PLC will retrieve the associated elements in the subtag. However, if the part number is not found, a new subtag with the necessary elements will be created. 

The challenge arises when some part numbers are identical, with the only variation being the presence of a "P" at the beginning. For instance, the tag array may list a number as 11223344, but the operator scans a barcode labeled as "P11223344", resulting in the creation of a new tag. As a result, I have encountered over 90 duplicate tags caused solely by this added letter. 

I am seeking a solution to remove the initial letter from the string only if it is a "P". Initially, I believed structured text was the best approach for this task, but I am open to exploring alternative methods. This issue has been puzzling me for some time now, and I would appreciate any guidance on how to resolve it effectively.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Achieving this task in Ladder logic may require approximately 2 instructions. Use the EQU instruction on the initial element of the .DATA section within the string tag to check for the presence of the letter "P", followed by a MID instruction to extract the remaining value to a different location or back to the original one.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the confusion, it requires 3 steps: Keep in mind that 80 represents the ASCII value for the letter "P". If needed, you can switch the EQU to LIM to enable the removal of non-numeric characters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Presenting the code in Structured Text (ST), potentially marking the debut of my first ST script created solely in Allen-Bradley (AB) programming language.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When analyzing Scan_PNUM.DATA[0], it reveals the presence of the letter "P". I will utilize the barcode scanner to convert the ASCII to Allen Bradley format. I have a query - If I decrease the value by 1 in Scan_PNUM.len, will it affect the front end or the backend? I aim to prevent any leading empty space within the string. Thanks for the guidance on configuring it to examine the .DATA[] segment of the tag.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>painterman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, joseph_e2 explained that instead of using three instructions, users can optimize their code by reducing it to just two instructions. By swapping out the MID instruction for the more efficient DELETE instruction, users can streamline their code for better performance. Click to expand to learn more about this optimization tip.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The Painterman asked whether reducing the length of Scan_PNUM.len would eliminate characters from the beginning or end of the string. He expressed concern about avoiding empty spaces at the start of the string. 

In actuality, decreasing .LEN will trim characters from the end of the string. Conversely, increasing it will append characters (potentially blank spaces unless alterations have been made to the .DATA[] values). 

Utilize the built-in commands, such as DELETE or MID, to remove characters, and the length will be automatically adjusted to accommodate the changes. This will ensure a seamless adjustment without any unwanted empty spaces.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The painterman noted that in Scan_PNUM.DATA[0], the letter "P" is displayed. To convert the ASCII to Allen-Bradley, the barcode scanner can be utilized. If 1 is removed from Scan_PNUM.len, it is important to determine whether this change will occur at the front end or the back end to avoid an empty space at the beginning of the string. Grateful for the advice received, incorporating a setup to examine the .DATA[] part of the tag was not initially considered.

The MID instruction, suggested by @joseph_e2, sets a Start parameter value of 2, extracting string data starting from the second character (ScanString.DATA[1] since ScanString.DATA[0] represents the first character). The DELETE instruction effectively removes data based on the Qty and Start input parameters, subsequently adjusting the string length.

Alternatively, the COP instruction could be used as follows:
EQU ScanString.DATA[0] 80
COP ScanString.Data[1] ScanString[0] 80
SUB ScanString.LEN 1
ScanString.LEN

However, it is recommended to utilize the built-in string handlers for better results. Additionally, considering adding a test for a zero-length string may be beneficial.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy explained the functionality of the MID instruction suggested by @joseph_e2, which has a Start parameter set to 2. This means that it will extract the string data starting from the second character of the string, specifically from ScanString.DATA[1], as the first character is at ScanString.DATA[0]. The DELETE instruction, on the other hand, removes data based on the Qty and Start input parameters, adjusting the string length accordingly.

Alternatively, the COP instruction can achieve a similar outcome, though it is recommended to utilize the built-in string handlers for better results. It is also advisable to include a test for zero-length strings.

When using the DELETE instruction, it will remove .DATA[0] entirely and shift all subsequent .DATA[#] values up, effectively turning DATA[1] into DATA[0]. Additionally, if the string is replaced back into itself, there may be a repetition of the last character since the new string is one character shorter.

The trigger for this process revolves around checking if the string length is not equal to zero.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>painterman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Using the DELETE instruction proved to be a wise decision due to its speed and efficiency. I conducted a test by deleting a copy of the string and replacing it with itself. Although the trailing character remained in the .DATA array, the .LEN was appropriately shortened. This means that the character only shows up when directly viewing the SINT array. An important observation from the test was that even though .DATA[9] extended beyond the new 9-character string, it retained its original value of '9' instead of being replaced by '$00'.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, joseph_e2 pointed out the efficiency of using the DELETE instruction for removing characters from a string. After running a test with the DELETE instruction, it was observed that while the trailing character remains in the .DATA array, the .LEN is shortened, making it visible only when directly looking at the SINT array.View attachment 69643The outcome of the test can be seen here:View attachment 69644It is worth noting that .DATA[9] retains its value even though it is located past the end of the newly formed 9-character string. Considering this, it is possible to utilize another delete function to specifically remove the last character based on the original length of the string.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>painterman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The painter mentioned using another delete function to remove the last character based on the original length of the string. However, this approach is incorrect. Once the length of the string changes, the character at the original last position becomes irrelevant. This is because it is no longer considered part of the string, even though it was at the ninth position based on the original length.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, drbitboy highlighted that changing the length of a string can impact the characters at specific positions. For example, if the length is adjusted from 9 to 8, the character at the ninth position becomes irrelevant. This is important to consider when working with strings in a PLC, especially when searching for an exact match as it may include the last character despite the change in length. It's essential to understand how these adjustments affect the overall functionality of the code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>painterman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently delved into string manipulation and discovered a common issue with residual characters, such as COP, being left behind after using instructions like DELETE or MID to shorten a string. Although the LEN parameter adjusts accordingly, the SINT array retains the original characters beyond the new string length. This can result in only the "legit" portion of the string being visible online, unless you expand the .DATA tag to reveal the additional characters. While built-in comparison instructions like EQU only focus on the "legit" characters, direct manipulation of the SINT array may necessitate some cleanup. For example, our Maple Systems HMI disregards the .LEN tag and instead relies on the first '$00' as the string terminator.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When comparing string data types, whether using a basic EQU comparison or a custom comparison that iterates over the .DATA[] SINT array while utilizing the .LEN attribute of the SYRING data type, the elements beyond .DATA[.LEN] are not relevant. Modifying the .LEN parameter after reducing it by 1 using the DELETE instruction is an error. Even if you overwrite the final "duplicate" character's value, simply removing the excessive 'P' will leave the string unchanged as if the barcode initially arrived on the serial line without the prefix. Remember that the replacement value may not necessarily be an improvement over the duplicated value. As @joseph_e2 previously mentioned, eliminating two instructions and any leading 'P' will result in the same string without altering its essence.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this experiment, we will be demonstrating the process of manipulating string tags in a PLC program. Three string tags will be created and initialized as follows: 'four' as '4', 'ScanSim' as 'P1234', and 'ScanString' as '$00$00$00$00$00$00$00$00'.

The program will consist of the following rungs:
- MOV ScanSim ScanString (simulating a barcode read)
- Performing operations to manipulate the ScanString tag to extract specific values
- MOV -99 result to ensure proper execution of the next command
- Using the FIND command to search for the sub-string 'four' within ScanString

By running this program, we will be able to verify that the '4' value within ScanString is not part of the actual string tag but rather a SINT value represented as 52 decimal (34H).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How can I remove the initial letter from a string in Studio 5000 Professional, specifically if it is a "P"?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One approach to achieve this is by using structured text programming in Studio 5000 Professional. You can write logic to check if the first character of the string is a "P" and then remove it if the condition is met.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: What can I do to prevent the creation of duplicate tags caused by variations in part numbers like "P11223344" and "11223344" in Studio 5000 Professional?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To prevent the creation of duplicate tags, you can implement a validation step in your PLC program to check for such variations in part numbers. By detecting and handling cases where the only difference is the initial "P", you can avoid creating unnecessary tags.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Are there alternative methods to address the challenge of removing the initial letter from a string in Studio 5000 Professional other than using structured text?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While structured text may be a suitable approach for this task, you can also explore other methods such as using string manipulation functions or creating custom user-defined functions in ladder logic to achieve the desired outcome. Experimenting with different techniques can help you find the most efficient solution for your specific scenario.</p>
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
