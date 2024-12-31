
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ways to generate value without using the Compute Instruction">
    <meta name="keywords" content="rslogix 500 lite, value creation, compute instruction alternatives, rslogix programming tips, plc software tips, automation value generation, rslogix 500 lite tricks, programming without compute instruction, rslogix value creation methods, plc software">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-create-value-in-rslogix-500-lite-without-using-compute-instruction">
    <title>How to Create Value in RSLogix 500 Lite without Using Compute Instruction | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Create Value in RSLogix 500 Lite without Using Compute Instruction | Oxmaint Community">
    <meta property="og:description" content="Ways to generate value without using the Compute Instruction">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-create-value-in-rslogix-500-lite-without-using-compute-instruction">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Create Value in RSLogix 500 Lite without Using Compute Instruction | Oxmaint Community">
    <meta name="twitter:description" content="Ways to generate value without using the Compute Instruction">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-create-value-in-rslogix-500-lite-without-using-compute-instruction"
      },
      "headline": "How to Create Value in RSLogix 500 Lite without Using Compute Instruction",
      "description": "Ways to generate value without using the Compute Instruction",
      "author": {
        "@type": "Person",
        "name": "Rlarios"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-01",
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
                <h1 class="text-white">How to Create Value in RSLogix 500 Lite without Using Compute Instruction</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Rlarios</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">381</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">49</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Ways to generate value without using the Compute Instruction</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the forum! In order to assist you better, it would be helpful to know which PLC you are using. I am not familiar with the "lite" version of the RSLogix 500 software, but according to a quick Google search, the free version of this software is only compatible with Micro 1000 or Micro 1100 PLCs. Please note that the Compute Instruction is not supported on Micrologix PLCs, with the exception of the 1400 series.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ianingram</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Improve your computing efficiency by utilizing distinct instructions on individual or diverging rungs with intermediate registers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Initially, I considered using the SCP instruction, however, it is only compatible with SLC 5/03 and higher, as well as ML 1200/1400/1500 PLCs, not with ML1000/1100. The traditional method for analog scaling, similar to what the SCP accomplishes, involves utilizing the standard slope-intercept form of a linear equation: y=mx+b. Interestingly, the SCP feature has been eliminated from the Logix 5000 series (CompactLogix and ControlLogix). While they offer an Add-On Instruction (AOI) for these PLCs, I opted to create my own solution. If you require assistance in implementing y=mx+b in your PLC using specific math instructions, please feel free to reach out.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you need help with computing equations and managing math statements in your code? Make sure to include branching statements to handle overflow and underflow errors, especially after the multiply and divide operations. Limit the number of branching levels to 8 to optimize your code. Let me know if you need further assistance. - James</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello and welcome to the forum! To better assist you with your issue, it would be helpful to know what type of PLC you are using. After doing some research, I discovered that the free version of RSLogix 500 software is limited to use with Micro 1000 or Micro 1100 PLCs. Unfortunately, the Compute Instruction is not compatible with Micrologix PLCs, with the exception of the 1400 model. It appears that the compute function is not available for the Micro 1100 PLC, so I am now focusing on learning about the SCP instruction instead. Thank you for your input.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rlarios</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Based on the documentation, it appears that the SCP feature is not supported on the ML1100 model.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Based on the help documentation, the ML1100 does not seem to support SCP. However, the processor does. It is uncertain if the lite software is compatible with it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mickey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Wow, that's intriguing! The online documentation for version 12 seems to contradict this information. However, a brief experiment in RSLogix can confirm it. Unfortunately, I don't have an 1100 PLC available for testing, but it's valuable information to keep in mind.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The PDF file I shared is from the ML1100 instruction set manual, showcasing an interesting method of sending output to a "Binary" word file. This example may seem unconventional to some.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mickey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If OP can find a way to utilize it but still struggles to comprehend the instruction's purpose, imagine incorporating a Balluff LVDT, which stands for Low Voltage Distance Transducer. This LVDT is capable of outputting a range of 0-10vdc and has a stroke measurement of 225mm. With an input minimum of 0, input maximum of 10, scaled minimum of 0, and scaled maximum of 225, it is easy to interpret the signals. A 0vdc signal indicates 0mm of stroke, while a 10vdc signal signifies 225mm, with values in between corresponding to varying distances. The formula y=mx+b is the driving force behind these calculations, although instructions on executing mathematical functions in RS500 are beyond my scope of knowledge.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jawilli91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mickey noted that the PDF shared is from the ML1100 instruction set manual, featuring an unusual example of sending output to a "Binary" word file. In my opinion, this discrepancy is peculiar. It's even more surprising that the user manual and instruction help contradict each other so drastically.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Question: What are some alternative methods to create value in RSLogix 500 Lite without using the Compute Instruction?
   Answer: Some alternative methods include using math instructions like ADD, SUB, MUL, DIV, and using data manipulation instructions like MOV, COP, and FLL.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can I perform calculations in RSLogix 500 Lite without using the Compute Instruction?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can perform calculations by utilizing the available math instructions and data manipulation instructions in RSLogix 500 Lite.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Are there limitations to using alternative methods instead of the Compute Instruction in RSLogix 500 Lite?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While alternative methods can be used effectively, they may have limitations in terms of complexity and ease of use compared to the Compute Instruction.</p>
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
