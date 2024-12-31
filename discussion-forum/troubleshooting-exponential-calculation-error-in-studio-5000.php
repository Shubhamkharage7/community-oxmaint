
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! Its been a while since I last posted here, but Im in need of some assistance. Im working on a differential pressure calculation in a L27ERM CompactLogix controller, which involves calculating the viscosity of water based on temperature. Im using the CPT instruction to input values for">
    <meta name="keywords" content="exponential calculation error, troubleshooting studio 5000 errors, differential pressure calculation, viscosity of water calculation, l27erm compactlogix controller, cpt instruction in studio">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-exponential-calculation-error-in-studio-5000">
    <title>Troubleshooting Exponential Calculation Error in Studio 5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Exponential Calculation Error in Studio 5000 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! Its been a while since I last posted here, but Im in need of some assistance. Im working on a differential pressure calculation in a L27ERM CompactLogix controller, which involves calculating the viscosity of water based on temperature. Im using the CPT instruction to input values for">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-exponential-calculation-error-in-studio-5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Exponential Calculation Error in Studio 5000 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! Its been a while since I last posted here, but Im in need of some assistance. Im working on a differential pressure calculation in a L27ERM CompactLogix controller, which involves calculating the viscosity of water based on temperature. Im using the CPT instruction to input values for">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-exponential-calculation-error-in-studio-5000"
      },
      "headline": "Troubleshooting Exponential Calculation Error in Studio 5000",
      "description": "Hello everyone! Its been a while since I last posted here, but Im in need of some assistance. Im working on a differential pressure calculation in a L27ERM CompactLogix controller, which involves calculating the viscosity of water based on temperature. Im using the CPT instruction to input values for",
      "author": {
        "@type": "Person",
        "name": "Dave Steer"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">Troubleshooting Exponential Calculation Error in Studio 5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Dave Steer</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">784</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">57</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! It's been a while since I last posted here, but I'm in need of some assistance. I'm working on a differential pressure calculation in a L27ERM CompactLogix controller, which involves calculating the viscosity of water based on temperature. I'm using the CPT instruction to input values for A, B, C, and D. While I successfully obtained the correct exponential value for A, B, and C, I'm struggling with D. Instead of getting the expected value of -0.000005723952, I'm only getting the value I input. I suspect that the REAL value may not be of sufficient resolution. I even attempted this in structured text but encountered the same issue. Despite trying different methods, including using a constant value for D, I'm still unable to get the desired result. Any suggestions on what might be causing this issue and how to resolve it would be greatly appreciated. Thank you in advance. - Dave</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Dave Steer inquired about the specifics of entering and obtaining values in the Studio 5000 IDE. Are you experiencing issues with entering a value and receiving a different value? It is important to clarify where you are inputting these values and where you are obtaining them from. Is the IDE currently in offline or online mode? Are the values displayed in the CPT instruction's expression parameter in offline mode, or are they the result of the CPT instruction's calculation in run mode?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy inquired about the discrepancy between the values entered and obtained during programming in Studio 5000 IDE. He asked whether the IDE was in offline or online mode when entering and retrieving values. Additionally, he sought clarification on whether the values displayed were retrieved from the CPT instruction expression parameter in offline mode or from the calculation result in run mode.

Apologizing for the confusion, drbitboy explained that he was working online with the processor in run mode, referencing calculations provided in an Excel spreadsheet. By using CPT instructions, he inputted specific expressions to obtain desired values. While most values aligned with the spreadsheet, one value D resulted in an incorrect calculation due to a decimal resolution issue. Attempting to adjust the decimal places, drbitboy encountered challenges in maintaining accuracy for the final equation, potentially attributed to a lack of resolution in the PLC system's decimal handling.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dave Steer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies, it is indeed Studio5000.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dave Steer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you suggesting that the value -5.723952E-06 differs from -5.72395220E-006, causing the issue you're facing?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to drbitboy, are you suggesting that there is a discrepancy between -5.723952E-06 and -5.72395220E-006? The issue at hand seems to be related to the output, as -5.723952E-06 should translate to -0.000005723952.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dave Steer</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In a statement by Dave Steer, the value of -5.723952E-06 should be displayed as -0.000005723952. Is there a difference between the two representations of the same value? Click to expand for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Dave Steer, the number -5.723952E-06 is equivalent to -0.000005723952. This is simply the same figure represented in scientific notation. If you're encountering a problem, it's unlikely to be related to this specific number. Feel free to click to expand for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For those unfamiliar with scientific notation, it is a method used to represent real numbers in a standardized format using an "E" code to signify multiplication by powers of ten. Any real number can be expressed in scientific notation, with the decimal point shifting based on the exponent. For example, multiplying by 10^1 moves the decimal one place to the left, while multiplying by 10^(-1) moves it one place to the right. The value -0.000005723952 can be written in various forms while representing the same value. Studio 5000 may convert numbers with many zeros to scientific notation for a more concise display, although the actual value remains unchanged. This formatting rule ensures that there is a nonzero digit to the left of the decimal point, with the rest following to the right.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The IEEE floating point format operates by converting base 10 numbers to base 2, shifting the radix point a certain number of times to have one significant binary digit before the point. The value of the shift is then encoded as the exponent section according to Wikipedia. It may seem complex at first glance, but delving into the details can be essential. Through manual conversions, it becomes clear why certain rational decimal numbers become irrational in binary form, leading to display discrepancies caused by rounding errors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When the number -5.723952E-06 is displayed as -0.000005723952, it may be due to Studio 5000's default number display width. The PLC-internal value remains the same, regardless of the format. Studio 5000 opts for the shorter exponential form to prevent unnecessarily long displayed text caused by leading zeros. For instance, if the value was 5.7E-20, displaying nineteen leading zeros would not be practical.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this comparison between LibreOffice and Excel, we can see a display of three cells (A1, A2, A3) on the left with their respective values, along with the corresponding formulas shown on the right. The formatting of cell A2 is fixed-point with 12 decimal places, while cell A1 uses the default "General" numeric format that allows exponential display.

This demonstration highlights the difference between the numeric value -5.7...E-06 and -0.00000057..., showcasing how the same numeric value can be represented differently. It is important to note that the value in cell A1 is a string, not a number, and it is in cell A2 where the string "-5.723952E-06" is converted into a numeric value. Explore this visual representation to understand the nuances of data manipulation in spreadsheet software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To improve efficiency and reduce rounding errors, consider replacing the denominator with (T*(T*D+C)). This approach requires one less multiplication operation. Additionally, it is beneficial to examine how RSLogix calculates T^2; ideally, it should use T*T rather than a POW(T) function internally. For more information on this technique, refer to Horner's Method, which involves "Hornerizing" polynomials. Horner's Method is a computational algorithm used to efficiently evaluate polynomials. To learn more about this method, visit the Horner's Method Wikipedia page.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>1. Avoid overestimating the precision of your temperature measurements with a PLC, as achieving 7 significant figures would require a 20-bit ADC.2. While it's rare for temperatures to drop below 50 kelvin, it's important to safeguard your calculations against low inputs.3. Simplify your computation by using the formula: exp(ln A + ((1/T + B) / (C + DT))), which reduces the number of operations needed and may eliminate the need for the final exponentiation step due to the function's one-to-one nature.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An even more efficient code solution can be achieved by using the formula A multiplied by the exponential of (1.0 or T) plus B, then all of it is bitwise OR-ed with the sum of C and D multiplied by T. (@Cheeseface was quick to beat me to this update!)</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I estimated the blow up temperature to be around 200 Kelvins. I also agree that there are too many significant digits in those constants. The precision of the constants is typically around 1 part in 10 million, but this decreases due to the opposite signs in the numerator and denominator. The accuracy of the temperature measurement is generally within 1 part in half a million. Other measurements, such as pressure (dP), are typically accurate to 1 part in 0.016 million at best, or more commonly 1 part in 0.004 million. In reality, it is rare to measure anything with an accuracy better than 1% in practice, which translates to 1 part in 0.0001 million.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I wanted to thank everyone for their responses. Scientific notation is a new concept for me, as I usually deal more with servos. It's reassuring to know that the PLC was correct and I was mistaken. Thank you once again.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dave Steer</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I experiencing an error when calculating the exponential value for parameter D in my differential pressure calculation?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue you are facing with parameter D could be related to the resolution of the REAL value. It is possible that the precision of the REAL data type is affecting your calculation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the discrepancy in obtaining the expected exponential value for parameter D in my calculation?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot this issue, you can try verifying the data types and resolutions being used in your calculation. Additionally, double-check the input values for parameter D and ensure they are correctly assigned in your program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there any specific considerations to keep in mind when working with exponential calculations in Studio 5000 or CompactLogix controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When working with exponential calculations in Studio 5000 or CompactLogix controllers, it is important to pay attention to the precision and resolution of your data types, especially when dealing with small exponential values like -0.000005723952. Ensuring proper data type handling and precision can help prevent calculation errors.</p>
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
