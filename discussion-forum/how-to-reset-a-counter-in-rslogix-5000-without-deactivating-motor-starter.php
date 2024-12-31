
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I have a query regarding the use of Rslogix 5000. I am currently utilizing a counter up bit in conjunction with an analog signal ranging from 0 to 10V. The intention is for the counter to increase when 10V is detected, eventually triggering a motor starter once">
    <meta name="keywords" content="rslogix 5000, counter reset, motor starter, analog signal, 0 to 10v, counter up bit, resetting counter, activating motor starter, rslogix 5000 query, counter increase, voltage detection">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-reset-a-counter-in-rslogix-5000-without-deactivating-motor-starter">
    <title>How to Reset a Counter in Rslogix 5000 without Deactivating Motor Starter | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Reset a Counter in Rslogix 5000 without Deactivating Motor Starter | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I have a query regarding the use of Rslogix 5000. I am currently utilizing a counter up bit in conjunction with an analog signal ranging from 0 to 10V. The intention is for the counter to increase when 10V is detected, eventually triggering a motor starter once">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-reset-a-counter-in-rslogix-5000-without-deactivating-motor-starter">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Reset a Counter in Rslogix 5000 without Deactivating Motor Starter | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I have a query regarding the use of Rslogix 5000. I am currently utilizing a counter up bit in conjunction with an analog signal ranging from 0 to 10V. The intention is for the counter to increase when 10V is detected, eventually triggering a motor starter once">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-reset-a-counter-in-rslogix-5000-without-deactivating-motor-starter"
      },
      "headline": "How to Reset a Counter in Rslogix 5000 without Deactivating Motor Starter",
      "description": "Hello everyone, I have a query regarding the use of Rslogix 5000. I am currently utilizing a counter up bit in conjunction with an analog signal ranging from 0 to 10V. The intention is for the counter to increase when 10V is detected, eventually triggering a motor starter once",
      "author": {
        "@type": "Person",
        "name": "mattyBplic"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-30",
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
                <h1 class="text-white">How to Reset a Counter in Rslogix 5000 without Deactivating Motor Starter</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mattyBplic</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">380</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">383</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I have a query regarding the use of Rslogix 5000. I am currently utilizing a counter up bit in conjunction with an analog signal ranging from 0 to 10V. The intention is for the counter to increase when 10V is detected, eventually triggering a motor starter once it reaches a count of 10.

I am looking for a way to reset the counter while keeping the motor starter activated. Any recommendations or suggestions on how I can achieve this would be greatly appreciated. Thank you in advance for your help!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to optimize your counting process, it is crucial to exclude the motor starter. Instead, utilize a separate ladder featuring an XIC motor starter and RES counter. The initial step may seem repetitive if the RES is already set high, but this is contingent on the specific logic in place and the connection between the counter and reset. To enhance efficiency, consider incorporating a one-shot on the RES to reduce execution times. In this scenario, the NOT motor starter becomes essential in preventing the counter from tallying unnecessarily.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have a programming sequence like this in your system: GEQ AI_zero_to_ten_volts 10 CTU the_counter 10 0? You can enhance it by including this command on the same rung: XIC the_counter.DN CLR the_counter.ACC. This action zeroes out the accumulator value, effectively resetting the counter. This also ensures that the counter's .EN bit remains at 1*, preventing any incorrect counts on the next scan cycle. Keep in mind that using the RESet instruction will set the .EN bit value back to 0.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am looking to gain a better understanding of how ACC bit functions. Can you provide an explanation of its purpose and operation for me?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mattyBplic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mattyBplic inquired about the functionality of ACC bits, acknowledging that the assumption made was correct. However, seeking further explanation to gain a better understanding of its workings. Can anyone elaborate on what ACC bits do?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mattyBplic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The .ACC element is not simply a binary value, but rather an integer value that represents the total count accumulated by the counter. This value plays a crucial role in accurately measuring and tracking counts within the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I reset a counter in Rslogix 5000 without deactivating the motor starter?
   - One way to achieve this is by using a separate reset input for the counter that is independent of the motor starter control. This allows you to reset the counter without affecting the status of the motor starter.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can I reset the counter manually while the motor starter is running?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can configure a manual reset button or input that triggers the counter reset function without interfering with the operation of the motor starter.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it possible to reset the counter automatically based on certain conditions without stopping the motor starter?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, by programming specific logic in Rslogix 5000, you can set conditions for automatic counter reset while ensuring that the motor starter remains activated throughout the process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any considerations or precautions to keep in mind when implementing a counter reset without deactivating the motor starter?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is important to thoroughly test and validate the logic to ensure that the counter reset functionality does not cause any unexpected behavior or safety hazards with the motor starter operation. Regular monitoring and maintenance are also recommended to prevent any issues.</p>
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
