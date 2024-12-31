
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! I am a member of an automation company specializing in connecting our Kuka robot to a lathe machine via a Profibus communication interface. The lathe machine features a Mitsubishi Q26UDH PLC integrated into a Mazak SmoothG CNC controller. While I am new to working with this PLC, I">
    <meta name="keywords" content="mitsubishi q26udh plc, profibus communication interface, connecting kuka robot to lathe machine, mazak smoothg cnc controller, numeric data transmission, input and output signals, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-read-write-numeric-data-with-mitsubishi-q26udh-plc">
    <title>How to Read/Write Numeric Data with Mitsubishi Q26UDH PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Read/Write Numeric Data with Mitsubishi Q26UDH PLC | Oxmaint Community">
    <meta property="og:description" content="Greetings! I am a member of an automation company specializing in connecting our Kuka robot to a lathe machine via a Profibus communication interface. The lathe machine features a Mitsubishi Q26UDH PLC integrated into a Mazak SmoothG CNC controller. While I am new to working with this PLC, I">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-read-write-numeric-data-with-mitsubishi-q26udh-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Read/Write Numeric Data with Mitsubishi Q26UDH PLC | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! I am a member of an automation company specializing in connecting our Kuka robot to a lathe machine via a Profibus communication interface. The lathe machine features a Mitsubishi Q26UDH PLC integrated into a Mazak SmoothG CNC controller. While I am new to working with this PLC, I">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-read-write-numeric-data-with-mitsubishi-q26udh-plc"
      },
      "headline": "How to Read/Write Numeric Data with Mitsubishi Q26UDH PLC",
      "description": "Greetings! I am a member of an automation company specializing in connecting our Kuka robot to a lathe machine via a Profibus communication interface. The lathe machine features a Mitsubishi Q26UDH PLC integrated into a Mazak SmoothG CNC controller. While I am new to working with this PLC, I",
      "author": {
        "@type": "Person",
        "name": "bezi"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-17",
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
                <h1 class="text-white">How to Read/Write Numeric Data with Mitsubishi Q26UDH PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bezi</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">159</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">178</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! I am a member of an automation company specializing in connecting our Kuka robot to a lathe machine via a Profibus communication interface. The lathe machine features a Mitsubishi Q26UDH PLC integrated into a Mazak SmoothG CNC controller. While I am new to working with this PLC, I am eager to learn and apologize in advance for any beginner questions. 

The basic input and output signals are functioning properly, and Profibus-DP communication has been successfully established. Our customer has now requested the installation of a special feature for cutting around 800 different workpieces (bars). They need to send data containing decimal numbers, such as the length and diameter of the bars, through Profibus DP to specific registers for the NC to access after the robot controller sends the information.

The customer requires access to 12 different registers, with each register containing 2 bytes/16 bits and following a numeric format ranging from 0001 to 9999. I have consulted the MELSEC-Q/L Programming Manual (Common Instruction) for guidance, but unfortunately, the EMOV instruction I initially attempted to use is not supported by this PLC. 

I have reached out to the Mazak factory in the UK, who informed me that only their latest Smooth Ai controller is capable of handling such data. As I am inexperienced with Mitsubishi PLCs, I am seeking advice from anyone who may have suggestions on how to proceed. Your help and insights are greatly appreciated. Thank you. - Gabor</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the forum! If you're looking to transfer data from one register to another in a Programmable Logic Controller (PLC), you can use the MOVE(_E) instruction. This will allow you to control when the data transfer takes place. Let me know if you need further clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sczot</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with floating point data in your programming, it's important to choose the right instruction. If you are working with integer values (16 or 32 bit), use MOV or MOV_E. However, if you are dealing with floating point numbers, you must use EMOV and ensure the data is in the correct format, such as 123.23. This instruction utilizes two 16-bit registers, like D100 and D101.

If your data ranges from 1 to 9999, it is most likely a 16-bit integer. If the data includes decimal points (e.g. 1.0 to 9999.0), then you should use floats. To convert between floats and integers, utilize functions like INT_TO_REAL or REAL_TO_INT. Additionally, there is a function called FLT which specifically converts an integer to float.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the forum sczot. To clarify, a customer needs to cut around 800 different workpieces (bars) with slight variations in dimensions. Instead of creating 800 unique machining programs, the idea is to define them using 10-12 parameters that the robot will send to the controller. These parameters consist of numerical data with a maximum of 4 characters. The goal is for the robot's controller to input a value, like "16387", into a register that can be accessed directly from the NC program. This approach simplifies the process and avoids the need for multiple programs. Thank you for your assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bezi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky explained that EMOV is meant for floating point numbers, while MOV or MOV_E should be used for integers (16 or 32 bit). If you need to move float data, it must be done with EMOV and in floating point format, such as 123.23, utilizing two 16 bit registers like D100 + D101. If your values range from 1 to 9999, it is likely a 16 bit integer; otherwise, it should be in the format of 1.0 to 9999.0 for floats. To convert between floats and integers, the PLC requires the use of INT_TO_Real or REAL_TO_INT functions, although there is a function called FLT for converting integers to floats. Unfortunately, these commands are not supported by the lathe's PLC, which could be due to specific Mazak-Mitsubishi specifications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bezi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Move instructions for Q/L CPUs are fundamental and essential in CNC programming. Both single-word (MOV) and double-word (DMOV) moves are enabled, with the option to use a one-shot move by adding a 'P' at the end of the instruction (MOVP). Therefore, executing [MOVP S D] will smoothly transfer the value of S to register D.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sergey Borchshev</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The Q26UDH PLC boasts an extensive range of programming functions, such as MOV and EMOVE, totaling over 200 in all. Despite this, it falls short of being a genuine Mitsubishi series. I have prior experience working at Mazak in Worcester, United Kingdom, adding to my expertise in the industry.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're aiming to program numerous Job profile files or recipes, I recommend using distinct registers for each parameter such as Length (Dn) and Diameter (Dn+1). This way, you'll have organized blocks of data for each recipe, making it easier to manage. Plus, you'll have a plethora of registers at your disposal.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sergey Borchshev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Be sure to utilize registers within the latch range to prevent data loss in the event of a power outage. It is important to choose registers with a latching range to safeguard your data during power shutdowns.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sergey Borchshev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Parky, the Q26UDH PLC offers support for a wide range of functions, such as MOV and EMOVE commands. However, it falls short of being a genuine Mitsubishi PLC series. Having previously worked at Mazak in Worcester, UK, I can attest to this. The SmoothG controller, including EMOV NG, is highlighted in a video on YouTube. Worcester support has confirmed that these commands are compatible with the SmoothAi system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bezi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky pointed out that the Q26UDH offers a wide range of functions, such as MOV and EMOVE, totaling over 200 options. Despite its impressive capabilities, it lacks the necessary features to be considered a genuine Mitsubishi series PLC. Interestingly, Parky has previous experience working at Mazak in Worcester, UK. To further explore the topic, check out another video demonstrating the MOV function on www.youtube.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bezi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>However, if your data consists of integer numbers, MOV should suffice for your needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sergey Borchshev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Sergey Borchshev, using the MOV function should work well with integer data. I appreciate the helpful information and will be testing it out tomorrow. Stay connected! - Gabor</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bezi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As mentioned before, when working with EMOV, it is important to use integers. If you are dealing with a 32-bit integer number, DMOV would be the correct choice. The older ladder in Mitsubishi can be a bit confusing, but this issue has been resolved in the FBD language. When using GCIEC Developer or GXWorks, you can easily configure symbols instead of actual addresses. For instance, an integer constant can be represented as K1234, while a constant float would be shown as E123.45. For example, you can configure a symbol like My_Integer to represent D100 as an integer (16-bit signed/unsigned). Similarly, a double would be represented the same way, but it would occupy two registers like D100 and D101. This is useful for dealing with floating point or real numbers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I send decimal number data through Profibus DP to specific registers in a Mitsubishi Q26UDH PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To send decimal number data through Profibus DP to specific registers in a Mitsubishi Q26UDH PLC, you can utilize the appropriate data conversion techniques or instructions supported by the PLC, as the EMOV instruction may not be compatible. Consult the PLC's documentation or seek advice from experienced users for alternative methods.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How many registers can be accessed for data storage in a Mitsubishi Q26UDH PLC, and what is the format of each register?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In a Mitsubishi Q26UDH PLC, you can access 12 different registers, each containing 2 bytes/16 bits and following a numeric format ranging from 0001 to 9999. These registers can be used to store and retrieve data efficiently for various automation tasks.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What should I do if the EMOV instruction is not supported by the Mitsubishi Q26UDH PLC for data transfer?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the EMOV instruction is not supported by the Mitsubishi Q26UDH PLC for data transfer, consider exploring alternative instructions or methods provided in the PLC's programming manual. You may also consult forums, user groups, or Mitsubishi support for guidance on how to achieve the desired data transfer functionality.</p>
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
