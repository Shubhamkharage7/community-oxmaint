
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="How can I run code stored in initialization Function Block (FB) when the PLC first starts up, similar to OB100 in Siemens PLC? I need to set the var_init variable to TRUE to execute the initialization FB, then set it to FALSE once done. In Siemens projects, OB100 is">
    <meta name="keywords" content="plc startup, initialization function block, codesys, ob100, siemens plc, var_init variable, true, false, execute fb, ob100 equivalent, codesys projects, initialization task, programming, automation, industrial control, plc programming, automation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/executing-initialization-function-block-on-plc-startup-in-codesys">
    <title>Executing Initialization Function Block on PLC Startup in CodeSys | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Executing Initialization Function Block on PLC Startup in CodeSys | Oxmaint Community">
    <meta property="og:description" content="How can I run code stored in initialization Function Block (FB) when the PLC first starts up, similar to OB100 in Siemens PLC? I need to set the var_init variable to TRUE to execute the initialization FB, then set it to FALSE once done. In Siemens projects, OB100 is">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/executing-initialization-function-block-on-plc-startup-in-codesys">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Executing Initialization Function Block on PLC Startup in CodeSys | Oxmaint Community">
    <meta name="twitter:description" content="How can I run code stored in initialization Function Block (FB) when the PLC first starts up, similar to OB100 in Siemens PLC? I need to set the var_init variable to TRUE to execute the initialization FB, then set it to FALSE once done. In Siemens projects, OB100 is">
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
        "@id": "https://community.oxmaint.com/discussion-forum/executing-initialization-function-block-on-plc-startup-in-codesys"
      },
      "headline": "Executing Initialization Function Block on PLC Startup in CodeSys",
      "description": "How can I run code stored in initialization Function Block (FB) when the PLC first starts up, similar to OB100 in Siemens PLC? I need to set the var_init variable to TRUE to execute the initialization FB, then set it to FALSE once done. In Siemens projects, OB100 is",
      "author": {
        "@type": "Person",
        "name": "mikas_m"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-09",
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
                <h1 class="text-white">Executing Initialization Function Block on PLC Startup in CodeSys</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mikas_m</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">425</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">379</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>How can I run code stored in initialization Function Block (FB) when the PLC first starts up, similar to OB100 in Siemens PLC? I need to set the var_init variable to TRUE to execute the initialization FB, then set it to FALSE once done. In Siemens projects, OB100 is commonly used for this task. What is the best way to achieve this in CodeSys? Thank you for your help!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Contact and Coil on Preventing Multiple Engagements
To prevent multiple engagements in a PLC program, it is crucial to ensure that the FB is activated during the first scan cycle after the PLC transitions from PROGRAM mode or after a power cycle into RUN mode. This "first-pass/-scan" Boolean option can be utilized to seal in the coil effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mikas_m inquired about executing code stored in the initialization function block on the initial startup of the PLC, similar to OB100 in Siemens PLC systems. The goal is to set the var_init variable to TRUE to trigger the execution of the initialization function block, and then set it to false once completed. In CodeSys, the recommended approach for achieving this is to use a boolean variable like Oneshot_Occurred to ensure the code is executed only once during initialization. This simple yet effective method ensures that the initialization code runs smoothly and efficiently. It is important to note that this approach is implemented within the main loop and should not require redeclaration or redefinition of the variable. Further exploration into the characteristics of POU calling may provide additional insights for optimizing the code structure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cm-nonwov</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To improve your productivity, I recommend reviewing TASKS & EVENTS. Please refer to the attached screenshot for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your feedback! In the main program PLC_PRG, I utilized a function block (FB), while in the init function block (FB), I used structured text (ST). Take a look at the screenshot for reference. To ensure the init FB is executed only once, I had to use a one_shot variable both as an enable and an input. There might be a more efficient approach to achieve this. Additionally, I observed a discrepancy between the output of the ADD block and the value_int variable. I have configured the cyclic task to run every 2 seconds, incrementing the value_int variable from an initial value. When checking in online mode, I noticed a difference, which I believe is normal as the output of the ADD block is only assigned to the value_int variable at the end of the cycle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikas_m</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This procedure seems overly complex. Instead of complicating things, why not simply assign a value in the initialization step of FB, like this: Code: out_var_INT := 12;? This will streamline the process. In the main program, you can then utilize the one_shot variable linked to the enable input. This simplified approach may improve efficiency and clarity in your programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, you are correct. It appears that a more straightforward solution is at hand. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikas_m</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I execute initialization Function Block (FB) code on PLC startup in CodeSys?
- In CodeSys, you can achieve this by setting a specific variable, like var_init, to TRUE initially to trigger the execution of the initialization FB, and then set it to FALSE once the initialization is complete.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there an equivalent of OB100 in Siemens PLC for executing initialization code in CodeSys?</h4>
<p class='text-muted'><strong>Answer:</strong> - While OB100 is commonly used in Siemens PLC for startup tasks, in CodeSys, you can use a similar approach by utilizing a variable and the initialization Function Block to execute necessary code on PLC startup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the recommended method to run initialization code on PLC startup in CodeSys?</h4>
<p class='text-muted'><strong>Answer:</strong> - The best way to run initialization code on PLC startup in CodeSys is to set a variable to TRUE to trigger the execution of the initialization Function Block, and then set the variable to FALSE once the initialization process is finished.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can you provide guidance on implementing startup tasks in CodeSys similar to OB100 in Siemens PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To replicate the functionality of OB100 in Siemens PLC in CodeSys, you can use a variable (e.g., var_init) to control the execution of initialization code within a Function Block at PLC startup. Set the variable to TRUE to initiate the initialization process and set it to FALSE when the initialization is complete.</p>
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
