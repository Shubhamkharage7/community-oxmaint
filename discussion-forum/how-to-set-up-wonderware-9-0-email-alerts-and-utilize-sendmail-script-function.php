
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently in the process of setting up email alerts for a Wonderware 9.0 application but am struggling to find a viable solution. I have downloaded and installed the WWTSup71 dll add-ons.zip file as recommended. To make this work, I have been advised to utilize the SendMail script">
    <meta name="keywords" content="wonderware 0, email alerts, sendmail script function, wwtsup71 dll add-ons, wonderware email configuration, wonderware technical notes, wonderware forum, wonderware email setup, wonderware email notifications, wonderware email">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-set-up-wonderware-9-0-email-alerts-and-utilize-sendmail-script-function">
    <title>How to set up Wonderware 9.0 email alerts and utilize SendMail script function | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to set up Wonderware 9.0 email alerts and utilize SendMail script function | Oxmaint Community">
    <meta property="og:description" content="I am currently in the process of setting up email alerts for a Wonderware 9.0 application but am struggling to find a viable solution. I have downloaded and installed the WWTSup71 dll add-ons.zip file as recommended. To make this work, I have been advised to utilize the SendMail script">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-set-up-wonderware-9-0-email-alerts-and-utilize-sendmail-script-function">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to set up Wonderware 9.0 email alerts and utilize SendMail script function | Oxmaint Community">
    <meta name="twitter:description" content="I am currently in the process of setting up email alerts for a Wonderware 9.0 application but am struggling to find a viable solution. I have downloaded and installed the WWTSup71 dll add-ons.zip file as recommended. To make this work, I have been advised to utilize the SendMail script">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-set-up-wonderware-9-0-email-alerts-and-utilize-sendmail-script-function"
      },
      "headline": "How to set up Wonderware 9.0 email alerts and utilize SendMail script function",
      "description": "I am currently in the process of setting up email alerts for a Wonderware 9.0 application but am struggling to find a viable solution. I have downloaded and installed the WWTSup71 dll add-ons.zip file as recommended. To make this work, I have been advised to utilize the SendMail script",
      "author": {
        "@type": "Person",
        "name": "PLBoudette"
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
                <h1 class="text-white">How to set up Wonderware 9.0 email alerts and utilize SendMail script function</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PLBoudette</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2903</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">247</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently in the process of setting up email alerts for a Wonderware 9.0 application but am struggling to find a viable solution. I have downloaded and installed the "WWTSup71 dll add-ons.zip" file as recommended. To make this work, I have been advised to utilize the SendMail script function. However, the technical notes provided on the Wonderware website were unclear to me, and my search on the forum did not yield any useful information. If anyone has successfully implemented this feature, I would greatly appreciate a detailed explanation or guidance on how to proceed. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you curious if Wonderware has the capability to automatically send emails triggered by specific events, such as when a designated tag reaches a set value?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>iLikeWaffles</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have a similar query regarding sending automated email messages based on a Boolean tag in Wonderware InTouch. Can anyone provide suggestions on how to set this up? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tavortiz87</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PLBoudette mentioned that they are currently struggling to configure email alerts within a Wonderware 9.0 application. Despite downloading and installing the "WWTSup71 dll add-ons.zip" file, they are still facing difficulties in setting up the SendMail script function as suggested. The Tech Notes from the Wonderware website were not helpful, and the forum search did not provide any useful information. If anyone has successfully set up email alerts on Wonderware 9.0 and can provide detailed guidance or point in the right direction, it would be greatly appreciated. Any updates on this issue are welcome. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tavortiz87</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the benefits of Win911, a vital solution for various industrial plants. This innovative software seamlessly integrates with Wonderware, enhancing efficiency and ensuring smooth operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While Win911 offers extensive capabilities, it may currently be more than what my application requires. Is it feasible to have Wonderware Intouch directly trigger an email when an alarm is activated? I simply need one alarm to prompt the sending of one email. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tavortiz87</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Tavortiz87 mentioned that while Win911 is very versatile and has many capabilities, it may be too advanced for their current application needs. They are wondering if it is possible to set up Wonderware Intouch to send an email directly triggered by an alarm, as they only need one alarm to trigger one email. In older versions of Intouch, like Intouch 9.0 from around 2003, sending emails was not a common feature. However, later versions on System Platform did have mechanisms in place to send SMTP messages. Thank you for any assistance with this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I set up email alerts in Wonderware 9.0 using the "WWTSup71 dll add-ons.zip" file?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set up email alerts in Wonderware 9.0 using the "WWTSup71 dll add-ons.zip" file, you can utilize the SendMail script function. This function allows you to send email notifications based on certain triggers or conditions within your application.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the SendMail script function in Wonderware 9.0?</h4>
<p class='text-muted'><strong>Answer:</strong> - The SendMail script function in Wonderware 9.0 enables users to send email notifications from their applications. By using this function, you can configure your system to automatically send emails when specific events occur, such as alarms or critical alerts.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Where can I find detailed guidance on implementing email alerts in Wonderware 9.0?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are looking for detailed guidance on implementing email alerts in Wonderware 9.0, you may refer to technical notes provided on the Wonderware website. Additionally, you can seek help from experienced users or forums dedicated to Wonderware applications for step-by-step instructions and best practices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What should I do if I find the technical notes on the Wonderware website unclear?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you find the technical notes on the Wonderware website unclear, you can reach out to the Wonderware support team for further clarification. They can provide you with additional resources or assist you in understanding the implementation process better.</p>
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
