
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Struggling with a basic Logic5000 equation? Trying to convert a 4-20mA input to its engineering equivalent using a 1769-IF8 input module and L35E processor? Set your scaling to 4mA=4000 and 20mA=20000. Take X as the real Analog input, assume it to be 12000 for simpler calculations. Let URV (Upper">
    <meta name="keywords" content="logic5000 equation troubleshooting, 4-20ma conversion issues, 1769-if8 input module, l35e processor, scaling equation, engineering equivalent, analog input conversion, urv value, process equation, simplifying equations, equation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-logic5000-equation-conversion-issues">
    <title>Troubleshooting Logic5000 Equation Conversion Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Logic5000 Equation Conversion Issues | Oxmaint Community">
    <meta property="og:description" content="Struggling with a basic Logic5000 equation? Trying to convert a 4-20mA input to its engineering equivalent using a 1769-IF8 input module and L35E processor? Set your scaling to 4mA=4000 and 20mA=20000. Take X as the real Analog input, assume it to be 12000 for simpler calculations. Let URV (Upper">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-logic5000-equation-conversion-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Logic5000 Equation Conversion Issues | Oxmaint Community">
    <meta name="twitter:description" content="Struggling with a basic Logic5000 equation? Trying to convert a 4-20mA input to its engineering equivalent using a 1769-IF8 input module and L35E processor? Set your scaling to 4mA=4000 and 20mA=20000. Take X as the real Analog input, assume it to be 12000 for simpler calculations. Let URV (Upper">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-logic5000-equation-conversion-issues"
      },
      "headline": "Troubleshooting Logic5000 Equation Conversion Issues",
      "description": "Struggling with a basic Logic5000 equation? Trying to convert a 4-20mA input to its engineering equivalent using a 1769-IF8 input module and L35E processor? Set your scaling to 4mA=4000 and 20mA=20000. Take X as the real Analog input, assume it to be 12000 for simpler calculations. Let URV (Upper",
      "author": {
        "@type": "Person",
        "name": "Coles"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-16",
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
                <h1 class="text-white">Troubleshooting Logic5000 Equation Conversion Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Coles</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2440</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">9</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Struggling with a basic Logic5000 equation? Trying to convert a 4-20mA input to its engineering equivalent using a 1769-IF8 input module and L35E processor? Set your scaling to 4mA=4000 and 20mA=20000. Take X as the real Analog input, assume it to be 12000 for simpler calculations. Let URV (Upper Range Value of process) be 2700 ft^3. Your formula should look like this: ((X-4000)/16000)*URV. The desired output is ((12000-4000)/16000)*2700=1350. However, you may encounter issues where the result remains zero. To fix this, try simplifying the equation by removing the -4000. Update the equation accordingly to resolve the issue.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After entering the equation you gave into a CPT statement on my L35, the result I get is 1350. It seems like there may be an issue with the CPT statement assuming all values need to be integers when X is an integer, resulting in the loss of decimal values (8000/16000 = 0.5). Try including a .0 after each value to indicate the use of floating point math instead of integer math: ((X-4000.0)/16000.0)*URV. In this equation, X can be either an INT or DINT, while URV should be a Real or Floating Point number.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CowDung</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although CowDung already touched upon this topic, I want to reiterate the importance of considering the data type of the destination tag to prevent any truncation issues during computations. If the destination tag is not set as real, there is a risk of data being truncated midway through calculations. Let's break it down step by step: 

1. Subtract 4000 from 12000 to get 8000.
2. Divide 8000 by 16000 to get 0.5, which may actually truncate to 0.
3. Multiply 0 by 2700 to get 0.

To avoid truncation, consider changing the destination tag type to real or adjust the equation as follows: ((12000-4000)*2700/16000)=1350.

1. Subtract 4000 from 12000 to get 8000.
2. Multiply 8000 by 2700 to get 21600000.
3. Divide 21600000 by 16000 to get 1350.

Keep in mind not to exceed the maximum value of 2,147,483,647 during any point of the computation to avoid inaccuracies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gmferg</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This is the formula I typically use to calculate temperature conversions: (RawData-RawMin)*(EUMax-EUMin)/(RawMax-RawMin)+EUMin. It's especially useful for dealing with unusual ranges, such as -50 to 150 degrees Celsius. In the specific example provided, the formula translates to: (X-4000)*(2700-0)/(20000-4000)+0. I agree with Cowdung's analysis and believe that integer conversion is the key factor here.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mellis</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I agree with gmferg's assessment that the issue likely lies with the data type of the destination. When using a DINT or INT data type, the value returned is 0, while a Floating Point data type will result in a value of 1350. This distinction is crucial when programming PLCs efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CowDung</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>gmfergandcowdung have a valid point. I recently encountered a similar issue with data types and syntax while working on a CPT project, where I had to adjust the output reference for compatibility with PowerFlex scaling.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>The issue was with the CptTag type, but after changing it to the real type, the problem was resolved. Grateful for the assistance provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Coles</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Learn how to create a computational formula to determine the motor speed percentage, denoted as N12[25]. The input range is from 4000 (N12[21]) to 20000 (N12[22]), with a scaled range from 0 (N12[23]) to 100 (N12[24]). The current motor speed is recorded as 16800 (N12[20]) in mA.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hareeshmarpuri</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Calculate the speed of a process using the formula: ((ma - 4000)/16000)*100. Ensure the speed value is between 0 and 100, especially if the ma signal falls below 4000 or exceeds 20000. Alternatively, utilize a scale block for accurate measurements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How do I troubleshoot Logic5000 equation conversion issues?
- To troubleshoot Logic5000 equation conversion issues, make sure your scaling is set correctly and simplify the equation if needed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the formula for converting a 4-20mA input to its engineering equivalent using a 1769-IF8 input module and L35E processor?</h4>
<p class='text-muted'><strong>Answer:</strong> - The formula for converting a 4-20mA input to its engineering equivalent is ((X-4000)/16000)URV, where X is the real Analog input and URV is the Upper Range Value of the process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why might the result of the equation remain zero when converting a 4-20mA input to its engineering equivalent?</h4>
<p class='text-muted'><strong>Answer:</strong> - The result may remain zero due to issues in the equation. Try simplifying the equation by removing the -4000 to resolve this issue.</p>
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
