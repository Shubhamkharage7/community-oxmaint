
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have a structured text routine in a Logix controller with an expression that involves multiplying and dividing several DINT data type variables. The calculation always results in a number in the thousands, and decimal accuracy is not crucial. My concern lies in the fact that one of the">
    <meta name="keywords" content="plc division calculations, dint data types in logix controller, multiplication and division in plc, integer data types in plc, truncation vs. rounding in plc calculations, logix">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-plc-handling-of-division-calculations-with-dint-data-types-in-logix-controller">
    <title>Understanding PLC handling of division calculations with DINT data types in Logix controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding PLC handling of division calculations with DINT data types in Logix controller | Oxmaint Community">
    <meta property="og:description" content="I have a structured text routine in a Logix controller with an expression that involves multiplying and dividing several DINT data type variables. The calculation always results in a number in the thousands, and decimal accuracy is not crucial. My concern lies in the fact that one of the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-plc-handling-of-division-calculations-with-dint-data-types-in-logix-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding PLC handling of division calculations with DINT data types in Logix controller | Oxmaint Community">
    <meta name="twitter:description" content="I have a structured text routine in a Logix controller with an expression that involves multiplying and dividing several DINT data type variables. The calculation always results in a number in the thousands, and decimal accuracy is not crucial. My concern lies in the fact that one of the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-plc-handling-of-division-calculations-with-dint-data-types-in-logix-controller"
      },
      "headline": "Understanding PLC handling of division calculations with DINT data types in Logix controller",
      "description": "I have a structured text routine in a Logix controller with an expression that involves multiplying and dividing several DINT data type variables. The calculation always results in a number in the thousands, and decimal accuracy is not crucial. My concern lies in the fact that one of the",
      "author": {
        "@type": "Person",
        "name": "ASF"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-02",
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
                <h1 class="text-white">Understanding PLC handling of division calculations with DINT data types in Logix controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">852</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">133</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have a structured text routine in a Logix controller with an expression that involves multiplying and dividing several DINT data type variables. The calculation always results in a number in the thousands, and decimal accuracy is not crucial. My concern lies in the fact that one of the variables, Integer5, will always be greater than Integer4. This means that the initial division calculation, Integer4 / Integer5, will yield a number less than 1. To ensure the calculation is done correctly, I need to know how the PLC handles truncation or rounding in such scenarios. Can someone direct me to the relevant documentation for a better understanding of this process? Thanks!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you familiar with the concept of zero division in programming? To avoid this issue, ensure that the result of dividing Integer4 by Integer5 is not zero. It is advisable to use a floating point data type for the entire calculation. If the decimal part of the result is not necessary, you can round it at the end of the calculation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ojz0r</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this calculation, it is essential that none of the values are zero. While I am open to using floating point if necessary, I would like clarification on whether it is required.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If your calculation consistently results in zero, consider using floating point numbers to address the issue. Alternatively, break down the calculation into smaller steps to identify and troubleshoot any errors. This approach can help pinpoint where exactly the calculation is failing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ojz0r</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to understand how calculations are performed in PLCs, it is important to refer to the relevant documentation. Without specifying the exact make and model of the PLC, it can be challenging to point to the correct manual. The Logix manual can be a helpful resource, as well as the IEC-61131 standard which covers integer division behavior.

To determine the behavior of the expression in question, it may be necessary to empirically test by inputting various values into the PLC. Care should be taken as this could potentially cause processor faults and PLC halts. 

It is important to note that in computer programming languages, a divide operation with two integers typically returns an integer result with any remainder discarded. This can lead to divide-by-0 errors if the divisor is 0. Some PLCs may round the result, while others may not.

To prevent overflow in calculations, it may be beneficial to convert the arguments to floating-point numbers and then back to integers. This approach can help ensure accurate results without the risk of overflow.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The calculation in question requires values other than zero to be utilized. While floating point may be necessary, clarification is sought regarding its use. When Integer5 is double the size of Integer4, the quotient of Integer4 divided by Integer5 will be rounded down to zero. Each aspect of the equation must be computed with integer rounding and truncation. It is advisable to convert integers to REALs, conduct calculations using floating point arithmetic, and then convert the result back to Integer afterwards. It is important to note that REALs come with their own set of limitations. Take the time to study different data types and learn how to select and manipulate them effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In a practical sense, although the outcomes may differ, the following calculations are equivalent: 

Code:
ResultInteger := (Integer1 * Integer2 * Integer3 * Integer5) / Integer4;

ResultInteger := Integer1 * Integer2 * Integer3 * (Integer5 / Integer4);
This arithmetical operation does not result in a divide-by-zero error if Integer4 is smaller than either Integer5 or less than half of Integer5 (depending on the PLC). However, there is a risk of overflow in the first option due to the parentheses. The second option also carries the possibility of overflow.

Both methods have their benefits and drawbacks. Multiplying four integers increases the risk of overflow. Using floating point math can help avoid some pitfalls, but it is still possible to encounter issues if not used correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you heard of zero division errors? To avoid this issue, always ensure that the result of (Integer4 / Integer5) is not zero. It is recommended to use a floating point data type for the entire calculation and round the result if the mantissa is not needed. Checking that Integer4 is not zero is a precautionary measure to prevent potential problems that may arise in programs when such values are turned into zeros.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mad4x4</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to prioritize multiplications before divisions to optimize calculations and prevent overflow or underflow issues, especially when dealing with signed integers. Additionally, understanding the maximum values involved is crucial for accuracy. In repetitive calculations like incrementing or decrementing values, saving the remainder of the division and adding it in the next repetition can greatly enhance precision.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you to everyone for your input. I am familiar with the complexities of integer versus floating point calculations, including their strengths, limitations, and potential pitfalls. While I have delved into this topic in ladder logic and understand how it works in a CPT instruction, I have limited experience with ST programming. Currently, I do not have access to a PLC to conduct tests, but I am eager to learn the theoretical aspects first to prepare myself for when I do have the opportunity to test. The manual shared by @drbitboy briefly mentions the possibility of "mixing data types, which could lead to loss of accuracy and rounding errors." However, this vague statement does not provide specific details on where these issues may arise. Therefore, I am seeking to explore where rounding errors may occur.

If anyone using a Logix PLC is available and willing to assist, I would appreciate seeing the outcomes of the following calculations:
- RealResult = Integer1 * Integer2 / (Integer3 / Integer4)
- IntResult = Integer1 * Integer2 / (Real3 / Integer4)
- IntResult = Integer1 * Integer2 / (Integer3 / Real4)
- IntResult = Integer1 * Integer2 / (Real3 / Real4)
- IntResult = Real1 * Real2 / (Real3 / Real4)
- RealResult = Real1 * Real2 / (Real3 / Real4)

Please note that accuracy is not a critical factor in these calculations, as the results are expected to fall within the range of 1000-6000 with an acceptable margin of error of +/-5. Additionally, the input data for these calculations is estimated and speculative in nature.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In Logix, memory costs are low. For optimal accuracy, perform a precise floating-point calculation and convert the result to a DINT data type. This ensures maximum precision in your calculations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>IEC compliant PLCs may offer more explicitly specified data types for various operations, adding an extra layer of complexity. Different versions of instructions, such as ADD for int, uint, dint, udint, real, etc., may require type conversion instructions to handle mixing types effectively. The Schneider compiler includes a setting that allows for more flexibility in handling types without excessive conversions, although some prefer to precisely specify types and operations.

The military's emphasis on data types in the ADA programming language, requiring an 'act of Congress' for a CAST type conversion, highlights the value of strict type declaration. In contrast, JavaScript appears to take a different approach. A lack of strong data typing requirements in AB systems raises concerns, with some considering Schneider too rigid and AB too lenient in this regard.

The June 1996 Ariane 5 rocket explosion and the Feb 25, 1991 Patriot missile failure serve as cautionary tales in discussions about data type capacities and the importance of using the right data types for the job. It's essential not to rely solely on reals for solving all numeric problems, as demonstrated by historical incidents in the field.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Corsair</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to remember that in any division operation, if the divisor is zero, it will result in an error. It is advisable to use floats and then convert the final result to an integer or double integer to avoid this issue. Additionally, for added precaution, it is recommended to split the calculation into two parts and include a zero check. While it may not happen immediately, there is a possibility of encountering errors in the future, leading to inconvenient situations such as receiving unexpected calls late at night about issues with the PLC. Prioritizing the functionality and stability of your code is crucial to prevent such occurrences.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A 32-bit float is capable of retaining about 7 significant decimal digits, meaning any calculations that do not impact these digits will not produce a noticeable change. For instance, adding 1 to 10,000,000 will not result in a different outcome. When it comes to multiplications and divisions, utilizing floats is recommended for optimal precision.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How does a Logix controller handle division calculations with DINT data types when one variable is greater than the other?
- Answer: When dividing two DINT data type variables where one is greater than the other, the result will be truncated to an integer value, discarding any decimal places.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is decimal accuracy important in division calculations involving DINT data types in a Logix controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: In scenarios where DINT variables are being divided in a Logix controller, decimal accuracy is not crucial as the result will be an integer value.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Where can I find documentation to better understand how a PLC handles truncation or rounding in division calculations?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: You can refer to the relevant documentation provided by the manufacturer of the Logix controller for detailed information on how division calculations are handled, especially in cases where truncation or rounding may occur.</p>
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
