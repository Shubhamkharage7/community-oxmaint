
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I have moderate experience in automation. Recently, our factory experienced a power outage, causing a SCADA condition to remain at 0 regardless of changes. Upon investigating the issue in Studio 5000, I discovered an error. Is there a method to avoid this error in the future? Additionally, is">
    <meta name="keywords" content="scada automation, studio 5000 error prevention, #qnan error, scada condition 0, power outage impact, code error identification, factory automation, prevent scada errors, studio 5000 troubleshooting, automation best practices, scada">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-prevent-qnan-error-in-scada-automation-with-studio-5000">
    <title>How to Prevent #QNAN Error in SCADA Automation with Studio 5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Prevent #QNAN Error in SCADA Automation with Studio 5000 | Oxmaint Community">
    <meta property="og:description" content="Greetings, I have moderate experience in automation. Recently, our factory experienced a power outage, causing a SCADA condition to remain at 0 regardless of changes. Upon investigating the issue in Studio 5000, I discovered an error. Is there a method to avoid this error in the future? Additionally, is">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-prevent-qnan-error-in-scada-automation-with-studio-5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Prevent #QNAN Error in SCADA Automation with Studio 5000 | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I have moderate experience in automation. Recently, our factory experienced a power outage, causing a SCADA condition to remain at 0 regardless of changes. Upon investigating the issue in Studio 5000, I discovered an error. Is there a method to avoid this error in the future? Additionally, is">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-prevent-qnan-error-in-scada-automation-with-studio-5000"
      },
      "headline": "How to Prevent #QNAN Error in SCADA Automation with Studio 5000",
      "description": "Greetings, I have moderate experience in automation. Recently, our factory experienced a power outage, causing a SCADA condition to remain at 0 regardless of changes. Upon investigating the issue in Studio 5000, I discovered an error. Is there a method to avoid this error in the future? Additionally, is",
      "author": {
        "@type": "Person",
        "name": "Zoyalan"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-10",
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
                <h1 class="text-white">How to Prevent #QNAN Error in SCADA Automation with Studio 5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Zoyalan</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1134</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">332</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I have moderate experience in automation. Recently, our factory experienced a power outage, causing a SCADA condition to remain at 0 regardless of changes. Upon investigating the issue in Studio 5000, I discovered an error. Is there a method to avoid this error in the future? Additionally, is there a way to identify similar errors in my code? I have included a visual aid for reference.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're encountering the NaN tag receiving an incorrect value, it's important to conduct a thorough cross-reference to identify any instances where it is marked as 'Destructive' or improperly written. The NaN error, which stands for "Not a Number," typically occurs when the data in a tag does not adhere to the IEEE 754 standard for floating point numbers. This complex data type allows computers to process numerical values accurately. Unfortunately, the current data in the tag is non-compliant and cannot be understood by the PLC program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To troubleshoot a floating-point variable issue, first, ensure that only floating-point data is being written to it. Non-floating-point data may not be compatible with a floating-point format. Next, review the values used in calculating the problematic value, as NaN (Not a Number) is typically not generated in floating-point calculations. Start by investigating the first possibility mentioned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The term NAN typically refers to a situation where the data is corrupt or the format is incorrect. This issue is commonly seen in modbus, where bytes or words may be swapped, or there may be an offset in the registers when reading a float. Understanding the MB protocol is crucial in identifying whether the offset is either 0 or 1.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey suggested two steps to address the issue at hand. Firstly, ensure that non-floating point data is not being written to a floating point variable, as this could cause errors. Secondly, review the values used in calculating the problematic variable to rule out any potential issues. It is unlikely that a NaN would be generated in a floating point calculation, so focusing on the first step is recommended. This error may arise in large programs like the one controlling the entire production line. Is it feasible to address this issue considering the scale of the program, and is it common to encounter this error during line shutdown?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zoyalan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Achieving this task is achievable by following the steps outlined by others. Firstly, click on the tag OT3801_Right.EWMA and then press Ctrl+E to view the address usage. Pay attention to the 'Destructive' column as recommended by IO Rack, and double click on items marked with 'Y'. This will update the tag values, which may have been affected by an illegal mathematical operation such as division by zero. Edit the rung to prevent the execution of the operation in cases where the dividend is greater than zero.这样做是可行的。按照其他人提到的做法。1. 点击标签OT3801_Right.EWMA，然后按Ctrl + E。【这显示地址使用情况】2.在弹出的窗口中查看“Destructive”列，如IO Rack建议的那样。双击各个项目上标明“Y”的项3.标签值在那里被更改/更新。很可能发生了非法的数学运算，比如被“零”除4.编辑横梁，并防止它执行该横梁——例如被除数大于零。感谢。</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chavak</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are experiencing issues with receiving a bad value in OT3801_Right.EWMA (Non Floating Point or Non REAL), it is crucial to identify the source of this problematic data. To do so, simply right click on the OT3801_Right.EWMA tag and select "Cross Reference". Within the Cross Reference window, look for an item marked with a "Y" in the Destructive column - this is where the incorrect data is likely originating from. This task is what Peter and I are requesting you to focus on. Utilizing these tools can greatly assist you in troubleshooting issues, especially with larger programs. While it is not a normal occurrence, the issue does not lie with the PLC itself but rather with the system, details of which are currently unknown. Is this a positional problem or related to a motion controller? Feel free to share the program for further analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Identifying and addressing destructive instances of a specific HTML tag is crucial for website functionality. This issue is often caused by faulty code attempting to divide by zero. To fix this error, always ensure that DIV or CPT statements are preceded by a comparison that the numerator is not equal to zero.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When dividing by zero, does it result in a divide-by-zero fault rather than a NaN error? One would expect PLCs to have an error log that provides insights into the cause of such faults. Fortunately, we have this feature available for our motion controller.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about the occurrence of a divide by zero fault rather than a NaN when dividing by zero, Peter Nachtwey suggests that PLCs should have an error log to identify the root cause of the fault. This feature is available for their motion controller, where the processor logs it as a minor fault but results in a NaN value. Consider checking out our tech note for further information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When encountering the NAN error message, it typically indicates a problem with the data's integrity or format. This issue is commonly seen in modbus communication, where bytes or words may be swapped, leading to the error. Additionally, some modbus devices have a register offset when reading floats, which could be either 0 or 1. Understanding the MB protocol is crucial in resolving this issue. Click to learn more about what MB stands for in modbus communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zoyalan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Zoyalan inquired about the meaning of MB, and it appears that ModBus is the intended definition. Click to find out more about ModBus and its significance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I always ensure to condition a DIV statement that the divisor is not equal to zero to prevent getting a QNAN result. When my calculations result in a QNAN, it is usually because the number has exceeded a certain threshold. The concept of dividing by zero is akin to reaching an infinite value, but the PLC system prevents this from happening.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, kekrahulik mentioned the issue of obtaining QNAN when dividing by zero. To avoid this, he always conditions a DIV statement by ensuring the divisor is not equal to zero. He shared that encountering QNAN occurs when the math computation results in an excessively large number, signifying a divide by zero situation. While the PLC system may limit it from reaching infinity, QNAN was previously observed as the outcome. The newer studio now displays 1.$ instead of QNAN. However, KB mentions that when dividing by zero, the result may show as a non-numeric value like -1.# QNAN, 1.$, 1.IND, or another alphanumeric representation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe there is more to -1.$ than simply replacing QNAN in code. This is why I am here searching for clarification and understanding the distinction between the two. While I am familiar with QNAN as the outcome of dividing by 0, the significance of -1.$ eludes me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CleanCodeSaneSoul</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After encountering discrepancies between QNAN and -1.$ in my code, I sought clarification here. By extracting the REAL bits to a 32-bit integer (or two 16-bit integers), it becomes possible to understand the meaning of 1.$, as detailed here. The presence of a sign suggests it may represent infinity, though the use of 1.#INF remains unclear to me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In many Programmable Logic Controllers (PLCs), the term "NAN" signifies an unrecognized number, indicating that the bit pattern does not represent a valid numerical value. I have encountered this issue multiple times in PLCs but have successfully resolved it by converting it into a recognizable number (based on the format) and restarting the PLC. By forcing the corrupted tag into a value, the problem was promptly solved. Despite not knowing how the tag became corrupted, the issue did not reoccur on that specific system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I prevent the QNAN error in SCADA automation using Studio 5000?
- To prevent the QNAN error in SCADA automation with Studio 5000, it is important to ensure proper handling of power outages and unexpected interruptions. Implementing error-handling routines and backup systems can help mitigate such issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I identify errors like the one mentioned in the discussion thread within my code?</h4>
<p class='text-muted'><strong>Answer:</strong> - To identify errors similar to the one described in the discussion thread, regularly check for anomalies in SCADA conditions and monitor for unexpected behavior. Utilizing debugging tools and reviewing logs can help pinpoint and address potential errors in your automation code.</p>
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
