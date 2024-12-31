
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Are you looking for a way to clear a string tag in RSLogix5000? I attempted using COP with a zero value as the source and the string tag as the destination, but encountered an error message stating COP, Operand 0: Invalid kind of operand. I also tried MOV with">
    <meta name="keywords" content="rslogix5000, clear string tag, cop error rslogix5000, mov error rslogix5000, del string tag rslogix5000, rslogix5000 string tag clear solution, rslogix5000">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-effectively-clear-a-string-tag-in-rslogix5000">
    <title>How to Effectively Clear a String Tag in RSLogix5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Effectively Clear a String Tag in RSLogix5000 | Oxmaint Community">
    <meta property="og:description" content="Are you looking for a way to clear a string tag in RSLogix5000? I attempted using COP with a zero value as the source and the string tag as the destination, but encountered an error message stating COP, Operand 0: Invalid kind of operand. I also tried MOV with">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-effectively-clear-a-string-tag-in-rslogix5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Effectively Clear a String Tag in RSLogix5000 | Oxmaint Community">
    <meta name="twitter:description" content="Are you looking for a way to clear a string tag in RSLogix5000? I attempted using COP with a zero value as the source and the string tag as the destination, but encountered an error message stating COP, Operand 0: Invalid kind of operand. I also tried MOV with">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-effectively-clear-a-string-tag-in-rslogix5000"
      },
      "headline": "How to Effectively Clear a String Tag in RSLogix5000",
      "description": "Are you looking for a way to clear a string tag in RSLogix5000? I attempted using COP with a zero value as the source and the string tag as the destination, but encountered an error message stating COP, Operand 0: Invalid kind of operand. I also tried MOV with",
      "author": {
        "@type": "Person",
        "name": "recondaddy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-15",
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
                <h1 class="text-white">How to Effectively Clear a String Tag in RSLogix5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>recondaddy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>21 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">17742</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">170</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Are you looking for a way to clear a string tag in RSLogix5000? I attempted using COP with a zero value as the source and the string tag as the destination, but encountered an error message stating "COP, Operand 0: Invalid kind of operand." I also tried MOV with a zero value as the source, but received an error stating "MOV, Operand 1: Invalid type." Unfortunately, using DEL is not feasible as the exact length of the string is unknown. Do you have any suggestions or guidance on how to clear a string tag effectively in RSLogix5000?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Experiment with CLR (clear command) by using the syntax CLR my_string.DATA[0]. This command provides clear instructions for resetting specific data elements within a string.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamalaitounejjar</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, I was able to solve the issue. It turns out that adding a zero to the .DATA[0] element of the string tag is necessary. The correct syntax is: MOV Source: 0 Dest: MyString[1].DATA[0]. Alternatively, using CLR would also be effective in this case. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>recondaddy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One user, recondaddy, encountered an error message when attempting to use MOV with a numeric value as the source and a string tag as the destination. The error message stated "MOV, Operand 1: Invalid type," indicating the issue of trying to move a numeric value into a string. To resolve this issue, it is suggested to use a null string (string = "") as operand 1 instead. This adjustment is likely to work correctly in this scenario.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Doug-P</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you want to erase all characters from a string, use the FLL function instead of CLR or MOV. FLL effectively clears the entire string by setting its length to 0. Just pass in the appropriate parameters: FLL, 0, string_tag.data[0], x, where "x" represents the length of the string. This method ensures a complete deletion of all characters within the string.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gerry</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Doug-P pointed out the error message "MOV, Operand 1: Invalid type," indicating that a numeric value should not be moved into a string. To resolve this issue, consider using a null string (string = ""). But how can one obtain a null string if there are no String Literals? Just a string that has not been assigned any value. On a side note, IEC61113-3 is preferred over AB, despite having to use ABI. The hatred for ABI dates back to high school when this thread was initiated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>theColonel26</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Gerry explained the use of FLL with 0 as the source, the STRING as the destination, and 1 as the length to set the LEN and every SINT with 0. This will clear the entire string. Regarding getting a null string without string literals, theColonel26 questioned how it can be achieved. The solution is to create a blank string by defining gsBlank as a STRING, keeping it empty, and then converting it into a constant if necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In addition, you have the option to utilize FLL with a source of 0, a destination of STRING, and a length of 1. It's a facepalm moment realizing I've been taking the "hard" approach for decades by addressing both LEN and DATA. This week seems to have more zombie threads than usual, but hey, it's never too late to learn something new.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For literally decades, Ken Roach has been manually addressing both the LEN and DATA in his work, a process he considers as the "hard" way. Through multiple serialization projects in recent years, he has found himself routinely performing tasks with strings that a PLC should not have to handle. This experience has become a norm for him in the world of databases, Industry 4.0, and Big Data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I consistently maintained an empty string with the tag name "empty_string" and copied it to the target with a length of 1 character.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bernie_carlton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I support Bernie and rely on a blank string with COP for efficient memory usage. While it may not be the most memory-efficient option, it's simple to use and memory costs are low.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeffKiper</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It has been discovered that in version 30 and above, RS 5000 supports string literals. This renders previous hacks obsolete and opens up new possibilities for utilizing this feature effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>theColonel26</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When clearing other User Defined Types (UDTs), I employ a similar approach by retaining a duplicate with suitable initialization values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bernie_carlton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to programming in C#, clearing a string array may seem simple, but clearing an entire array of strings can be a bit more challenging. For helpful tips on how to clear an array of strings, visit the AdvancedHMI forum discussion on this topic: https://www.advancedhmi.com/forum/index.php?topic=2584.msg15541#msg15541.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post by BachPhi, the task of clearing one string is described as relatively simple. However, clearing an array of strings presents a greater challenge. The process is detailed in the following link: https://www.advancedhmi.com/forum/index.php?topic=2584.msg15541#msg15541. This method still applies and can be applied to Structures and UDT's as well. The command FLL 0 ARRAY 1 can be used to achieve this task efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>theColonel26 mentioned that in versions 30 and above, string literals are valid in RS 5000. This renders previous hacks unnecessary, as the processors in the L8x models have added features for string manipulation. Which model processor are you referring to?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jkerekes</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>5380 L306er is a a popular and sought-after item.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>theColonel26</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User theColonel26 mentioned: 5380 L306er. It seems like this capability might vary depending on the controller. Currently, the L33ER I'm using doesn't support this feature on v30.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Jeev, it appears that the ability to perform the action is dependent on the controller being used. Currently, I am using the L33ER model, which does not support this function on version 30. This information is valuable to keep in mind.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>theColonel26</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In addition to that, Jeev suggested utilizing FLL with 0 as the starting point and the destination as STRING with a length of 1. This action will populate the LEN and every SINT with 0, essentially clearing out the entire set of data. Can this method be effective for accomplishing the task? The command used is "FLL 0 Intake_TimeStampArray[0] 12" for the variable named Intake_TimeStampArray with a data type of STRING[12].</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AgroCheese</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The technique I employ involves copying _NULL to YourTag. This method is commonly utilized in various scenarios for efficient data management.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alfonsocareaga</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AgroCheese inquired about the functionality of a code snippet, asking, "Will this code work: FLL 0 Intake_TimeStampArray[0] 12"? The data type is STRING[12]. Click to expand to see more details. Yes, this code will work as intended. You can also perform partial clears by adjusting the value of Length accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I clear a string tag effectively in RSLogix5000?
- One way to clear a string tag in RSLogix5000 is to use the FLL instruction. By setting the length of the string to zero, you can effectively clear the contents of the string tag.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why am I encountering errors when trying to clear a string tag using COP or MOV instructions in RSLogix5000?</h4>
<p class='text-muted'><strong>Answer:</strong> - The errors you are encountering with the COP and MOV instructions may be due to incorrect operand types or kinds. Make sure you are using the correct data types and operand configurations to clear a string tag successfully.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there an alternative method to clear a string tag in RSLogix5000 if the string length is unknown?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the exact length of the string tag is unknown, using the FLL instruction with a length of zero can still effectively clear the string contents without needing to know the exact length in advance.</p>
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
