
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am new to CTI PLCs and currently working with a CTI 2500 PLC connected to an LED Display/Marquee. The PLC uses a specific command, SF, to display text on the sign. The code for displaying the time and date message is K201 % 2 STW141 :TIME  ">
    <meta name="keywords" content="cti 2500 plc led sign, simatic 505 command, display date and time, plc led display, cti plc programming, led marquee sign, date and">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-display-date-and-time-on-cti-2500-plc-led-sign-with-simatic-505-command">
    <title>How to Display Date and Time on CTI 2500 PLC LED Sign with Simatic 505 Command | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Display Date and Time on CTI 2500 PLC LED Sign with Simatic 505 Command | Oxmaint Community">
    <meta property="og:description" content="I am new to CTI PLCs and currently working with a CTI 2500 PLC connected to an LED Display/Marquee. The PLC uses a specific command, SF, to display text on the sign. The code for displaying the time and date message is K201 % 2 STW141 :TIME  ">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-display-date-and-time-on-cti-2500-plc-led-sign-with-simatic-505-command">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Display Date and Time on CTI 2500 PLC LED Sign with Simatic 505 Command | Oxmaint Community">
    <meta name="twitter:description" content="I am new to CTI PLCs and currently working with a CTI 2500 PLC connected to an LED Display/Marquee. The PLC uses a specific command, SF, to display text on the sign. The code for displaying the time and date message is K201 % 2 STW141 :TIME  ">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-display-date-and-time-on-cti-2500-plc-led-sign-with-simatic-505-command"
      },
      "headline": "How to Display Date and Time on CTI 2500 PLC LED Sign with Simatic 505 Command",
      "description": "I am new to CTI PLCs and currently working with a CTI 2500 PLC connected to an LED Display/Marquee. The PLC uses a specific command, SF, to display text on the sign. The code for displaying the time and date message is K201 % 2 STW141 :TIME  ",
      "author": {
        "@type": "Person",
        "name": "ekztal"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-17",
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
                <h1 class="text-white">How to Display Date and Time on CTI 2500 PLC LED Sign with Simatic 505 Command</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ekztal</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">397</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">53</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am new to CTI PLCs and currently working with a CTI 2500 PLC connected to an LED Display/Marquee. The PLC uses a specific command, SF, to display text on the sign. The code for displaying the time and date message is K201 % 2 STW141 :TIME "    " STW141 :DATE K202 % 2. Currently, the date is displayed in the default format YY/MM/DD (e.g. 24/05/30). Is there a way to change this to dd/mm/yy format? Unfortunately, the CTI Programming Reference Manual does not provide information on date formatting. Despite claims from colleagues that it used to display in DD/MM/YY format, my attempts to manually format the date using variables (K201 % 2 STW141 :TIME " " V2125 V2126%2 V2127 V2128%2 V2129 K202 % 2) have been unsuccessful. Instead of the expected "12:00:00    D/MM/YY", the output shows "30    /24      /5" with no time displayed.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Ekztal,

According to the CTI manual, the TIME DATE print statement displays the date in the format YY/MM/DD, which may appear different to others. I have not personally used these statements and am unsure if they only function with status words. However, as the date and time are stored in STW141-STW144, you could attempt using Vmemory instead of the STWs. You can fill the first Vmemory with DD/MM, the second Vmemory with YY/HH, the third Vmemory with MM/SS (similar to STW143), and the fourth Vmemory with ms/weekday (similar to STW144). Please refer to the screenshot for further guidance.

If this method does not work, you may need to create a date time message as you have already attempted. Please note that you are unable to merge parts of these two instructions. 

Kind regards,
Henny</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Henny</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unclear about the new CTI instruction set. Can you explain the significance of the % 2 in the first two bytes?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>2. To start with, print out the two characters stored in K201 from the example.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Henny</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Moore asks about the new CTI instruction set and the significance of the % 2 indication in the first two bytes. In my Programmable Logic Controller (PLC), the addresses K201 and K202 store the ASCII characters STX and EOT. These messages are transmitted to the LED sign via the RS-232 serial port, with each message starting and ending with STX and EOT.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ekztal</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Henny mentioned that the TIME DATE print statement in the CTI manual displays the date in YY/MM/DD format, which may appear differently to other users. If the standard STW addresses are not working for you, consider using Vmemory addresses instead. You can try filling the Vmemory addresses with the following combinations: DD/MM for the first, YY/HH for the second, MM/SS for the third (similar to STW143), and ms/weekday for the fourth (similar to STW144). If this method doesn't work, you may need to create a date time message using a different approach. For example, combining V addresses like K201 % 2 STW141 : TIME " " V2125 V2126%2 V2127 V2128%2 V2129 K202 % 2. However, be mindful that each address may contain blank spaces when displayed. If you're looking to extract only the last two characters from an address like V2125, consider exploring other coding options.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ekztal</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey everyone, I successfully displayed the Time and Date in the preferred MM/DD/YY format by utilizing the Time of Day SF and converting address values to binary values for 2 ASCII characters representing the month, day, or year. For example, if V2125 equals 1, then I set V2125 as 00110000 00110001, which corresponds to the ASCII characters for 01. This can be added to the print message string for the month.

In the code snippet below, the program "DDMMYY" is set to continue on error with a normal program type and an enabled status. It compiles successfully.

It seems that CTI PLC's only support dates up to the year 2036, suggesting that it might be time for my company to start transitioning them out by then.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ekztal</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Ekztal, you have the option to use the code shown in the images as an alternative to your case statements. If V2125, V2127, and V2129 are solely for displaying messages, this code may be a more concise solution. It's great that you have already successfully implemented it. Regards, Henny.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Henny</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Henny suggested an alternative method for implementing code based on the screenshots provided. Assuming that only the variables V2125, V2127, and V2129 are utilized to display messages, this approach is more concise. It's great that you have already achieved success with it. Looking forward to trying it out tomorrow. Could you please clarify the functions of MOD 10 and 0H3030? Thanks once again for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ekztal</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings Ekztal! The process involves extracting the tens digit from an integer and shifting it 8 places to the left, corresponding to the tens character's position. The decimal numbers 1-9 are equivalent to their hexadecimal counterparts. For example, 30 in hexadecimal is represented as ASCII 0, 3030 is ASCII 00, 3031 is ASCII 01, 3132 is ASCII 12, and 3230 is ASCII 20. For a more in-depth explanation of how the MOD function (Modulo) operates, you can refer to the Wikipedia page on Modulo. I trust that this clarifies how I arrived at the solution. Best regards, Henny</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Henny</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I change the date format displayed on the CTI 2500 PLC LED sign from YY/MM/DD to dd/mm/yy?</h4>
<p class='text-muted'><strong>Answer:</strong> - Unfortunately, the CTI Programming Reference Manual does not provide information on date formatting. Some attempts to manually format the date using variables have been unsuccessful.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is the date not displaying correctly when trying to format it manually on the CTI PLC connected to the LED Display/Marquee?</h4>
<p class='text-muted'><strong>Answer:</strong> - The provided code for formatting the date and time message might not be correct. It seems like the output is not as expected and does not display the time correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a specific command or syntax to correctly format the date and time message on the CTI 2500 PLC using the SF command?</h4>
<p class='text-muted'><strong>Answer:</strong> - It appears that the current code (K201 % 2 STW141 :TIME " " V2125 V2126%2 V2127 V2128%2 V2129 K202 % 2) for formatting the date and time might need adjustments to display the desired format of "12:00:00    D/MM/YY".</p>
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
