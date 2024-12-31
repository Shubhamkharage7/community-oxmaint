
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, A User Defined Type (UDT) consists of 100 bytes, while a dedicated datablock contains 200 arrays of UDT. How can I calculate the total sum of the 50th byte from each UDT array?Thank you!">
    <meta name="keywords" content="udt, user defined type, 50th byte, datablock, array, calculate, sum, total, 200 arrays, 100 bytes, calculation method, data structure, byte calculation, udt array sum, programming, automation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/calculating-sum-of-50th-byte-from-udt-array">
    <title>Calculating Sum of 50th Byte from UDT Array | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Calculating Sum of 50th Byte from UDT Array | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, A User Defined Type (UDT) consists of 100 bytes, while a dedicated datablock contains 200 arrays of UDT. How can I calculate the total sum of the 50th byte from each UDT array?Thank you!">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/calculating-sum-of-50th-byte-from-udt-array">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Calculating Sum of 50th Byte from UDT Array | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, A User Defined Type (UDT) consists of 100 bytes, while a dedicated datablock contains 200 arrays of UDT. How can I calculate the total sum of the 50th byte from each UDT array?Thank you!">
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
        "@id": "https://community.oxmaint.com/discussion-forum/calculating-sum-of-50th-byte-from-udt-array"
      },
      "headline": "Calculating Sum of 50th Byte from UDT Array",
      "description": "Greetings everyone, A User Defined Type (UDT) consists of 100 bytes, while a dedicated datablock contains 200 arrays of UDT. How can I calculate the total sum of the 50th byte from each UDT array?Thank you!",
      "author": {
        "@type": "Person",
        "name": "umencho"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-23",
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
                <h1 class="text-white">Calculating Sum of 50th Byte from UDT Array</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>umencho</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">356</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">120</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone, A User Defined Type (UDT) consists of 100 bytes, while a dedicated datablock contains 200 arrays of UDT. How can I calculate the total sum of the 50th byte from each UDT array?Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for information about PLCs? What manufacturer, model, software, and programming language is best for your needs?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Siemens plc programming in S7-400 for various industries and applications. Explore the possibilities of programming in any language with Siemens technology.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>umencho</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do the bytes in this data set have unsigned values ranging from 0 to 255?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In essence, bytes can be seen as whole numbers within a range of 0 to 10000.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>umencho</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Bytes consist of 8 bits and have a range of 0 to 255. Please provide more specific details about your issue. Are you referring to the 50th byte, a particular integer within the 50th byte, or something else entirely?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Assume we have a total of 100 bytes comprising 50 INT values within a UDT structure. This data block consists of an ARRAY[0..199] with the same UDT structure (100 bytes, 50 integer values). The goal is to calculate the sum of the 24th integer value from the first ARRAY UDT (at datablock address 48) + the 24th integer value from the second ARRAY UDT (at datablock address 148) + ... + the 24th integer value from the 199th ARRAY UDT (at datablock address 19948). Does this explanation clarify the objective effectively?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>umencho</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>umencho proposed an example where a datablock consists of 50 INT values stored in a UDT structure totaling 100 bytes. The datablock has an ARRAY structure of the same UDT repeated 199 times. The goal is to sum the 24th INT values from each ARRAY UDT starting from address 48 up to address 19948.

Do you understand the task described above? Have I effectively communicated the objective? Are the members of your UDT individual bytes or INTs? While the UDT itself is 100 bytes, is each member an INT or a series of consecutive bytes representing an INT?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I understand your point that all UDT members are of type INT. However, I have encountered a different scenario where not all UDT members are of type INT. Let's consider a case where all UDT members are of type INT, such as when reading a weight value in kilograms.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>umencho</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When sharing the UDT as source code, specify if it is an array consisting of 50 integers or 50 named integers. This distinction determines if the elements to be summed can be accessed symbolically, allowing for the use of SCL code to achieve the desired outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Sample code showcasing two distinct User-Defined Types (UDTs):

UDT1 Definition:
TYPE UDT1
    STRUCT
    aData:ARRAY[1..100] OF INT;
    END_STRUCT
END_TYPE

UDT2 Definition:
TYPE UDT2
    STRUCT
    iData1:INT;
    iData2:INT;
    iData3:INT;
    // Additional fields up to iData50
    iData50:INT;    
    END_STRUCT
END_TYPE

Within the DATA_BLOCK DB1, there are arrays of UDT1 and UDT2:

DATA_BLOCK DB1
    STRUCT
    aUDT1:ARRAY[0..199] OF UDT1;
    aUDT2:ARRAY[0..199] OF UDT2;
    END_STRUCT
BEGIN

END_DATA_BLOCK

The function FC1 calculates the sum of specific elements in the UDT arrays:

FUNCTION FC1 : Void
VAR_TEMP
    j:INT;
    Sum1:DINT;
    Sum2:DINT;
END_VAR

Sum1:=0;
Sum2:=0;
FOR j:=0 TO 199 DO    
 Sum1:=Sum1 + DB1.aUDT1[j].aData[24];    
 Sum2:=Sum2 + DB1.aUDT2[j].iData24;    
END_FOR;
   
END_FUNCTION</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A new form of access has been incorporated into the system using unique numeric identifiers. This code snippet showcases the addition of a third type of access through the use of "magic" numbers. The function FC1 now includes variables for j, index, Sum1, Sum2, and Sum3. Starting with initialized values, the function iterates through a loop from 0 to 199, incrementing the index by 400 in each iteration. This allows for the accumulation of Sum1, Sum2, and Sum3 by accessing specific data elements within the database. This enhancement provides a more efficient and optimized way to retrieve and process information using distinct numeric references.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear [Name], you truly worked your magic with those 'magical' numbers! Thank you to everyone involved!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>umencho</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I calculate the total sum of the 50th byte from each UDT array in a datablock?
   Answer: To calculate the total sum of the 50th byte from each UDT array in a datablock, you can iterate through each UDT array and sum up the 50th byte from each array.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a specific formula or method to compute the sum of the 50th byte from multiple UDT arrays?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: There is no specific formula, but you can loop through each UDT array in the datablock and add up the 50th byte from each array to get the total sum.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can you provide an example code snippet to demonstrate how to calculate the sum of the 50th byte from UDT arrays?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Sure, here is a basic example in pseudocode:
   
   total_sum = 0
   for each UDT_array in datablock:
       total_sum += UDT_array[49]  // 49 represents the 50th byte index (0-based)
   
   This loop iterates through each UDT array in the datablock and adds up the 50th byte from each array to the total sum.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I efficiently calculate the sum of the 50th byte from UDT arrays in a large datablock?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To efficiently calculate the sum of the 50th byte from UDT arrays in a large datablock,</p>
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
