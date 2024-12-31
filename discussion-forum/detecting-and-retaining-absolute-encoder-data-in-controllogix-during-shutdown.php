
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am looking for a solution in ControlLogix to detect when the processor is shutting down. Is there a method to save a bit or value in a tag before the shutdown process? Is there a specific flag or fault code that can be utilized for this purpose?">
    <meta name="keywords" content="controllogix, absolute encoder, retaining data, shutdown detection, processor shutdown, tag value retention, fault code, powerflex system, encoder position loss, dint tag, power-down, reference point, count values, absolute encoder data">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/detecting-and-retaining-absolute-encoder-data-in-controllogix-during-shutdown">
    <title>Detecting and Retaining Absolute Encoder Data in ControlLogix During Shutdown | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Detecting and Retaining Absolute Encoder Data in ControlLogix During Shutdown | Oxmaint Community">
    <meta property="og:description" content="Hello, I am looking for a solution in ControlLogix to detect when the processor is shutting down. Is there a method to save a bit or value in a tag before the shutdown process? Is there a specific flag or fault code that can be utilized for this purpose?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/detecting-and-retaining-absolute-encoder-data-in-controllogix-during-shutdown">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Detecting and Retaining Absolute Encoder Data in ControlLogix During Shutdown | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am looking for a solution in ControlLogix to detect when the processor is shutting down. Is there a method to save a bit or value in a tag before the shutdown process? Is there a specific flag or fault code that can be utilized for this purpose?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/detecting-and-retaining-absolute-encoder-data-in-controllogix-during-shutdown"
      },
      "headline": "Detecting and Retaining Absolute Encoder Data in ControlLogix During Shutdown",
      "description": "Hello, I am looking for a solution in ControlLogix to detect when the processor is shutting down. Is there a method to save a bit or value in a tag before the shutdown process? Is there a specific flag or fault code that can be utilized for this purpose?",
      "author": {
        "@type": "Person",
        "name": "VulcPAC"
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
                <h1 class="text-white">Detecting and Retaining Absolute Encoder Data in ControlLogix During Shutdown</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>VulcPAC</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">374</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">492</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am looking for a solution in ControlLogix to detect when the processor is shutting down. Is there a method to save a bit or value in a tag before the shutdown process? Is there a specific flag or fault code that can be utilized for this purpose? My goal is to retain the count values from an absolute encoder in a DINT tag, specifically in a Powerflex system where the encoder loses its position during power down. By saving this information, I can use it as a reference point during the next power-up cycle. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am curious if it is possible to implement an event task that activates when the processor experiences a power loss but remains operational. This could occur in situations like a minor controller malfunction or when the device briefly switches to battery power before completely powering off. While I am unsure of the specific circumstances, I believe this would be worth exploring.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheRooster</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Save the encoder value in a register during each scan. If the scan time is lengthy, establish a new routine with a 2ms execution time. By doing this, when the PLC loses power, the last encoder position is retained. Keep in mind that there may be slight discrepancies if the encoder has a high level of inertia. Upon restarting the PLC, utilize the first scan bit to transfer the register information to a designated location. One potential issue to consider is the possibility of maintenance moving the shaft connected to the encoder while the PLC is powered down. These are important considerations to keep in mind for optimal system performance and accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>James Mcquade suggests regularly writing the encoder value to a register during each scan period. For longer scan times, consider implementing a new routine with a 2ms execution time. This approach ensures that the last encoder position is saved when the programmable logic controller (PLC) powers down, although there may be slight discrepancies if the encoder has significant inertia. Upon rebooting the PLC, utilize the first scan bit to transfer the register information to a designated location. One drawback to this method is the potential for misalignment if maintenance personnel move the connected shaft while the PLC is offline. In the event of manual adjustment, be sure to jog to a Home position and update the value accordingly to maintain accuracy. Fortunately, the machine automatically de-energizes when the motor stops, mitigating inertia issues. I will test the 2ms solution to address these concerns effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>VulcPAC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>VulcPAC discussed the importance of capturing count values from an absolute encoder in a DINT tag. It's crucial to determine whether the encoder is truly absolute or if it functions as an incremental encoder that needs to be homed after a power cycle. This distinction is key in accurately tracking and recording encoder values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Joseph_e2 questioned the necessity of capturing the value of an absolute encoder. Could it actually be an incremental encoder that requires homing after a power cycle? The routine in the PLC handling the logic of the absolute encoder may be complex and challenging to modify, as it operates with specific values such as position, offset, home, and final position. Therefore, it needs to be referenced again after power up. It's not the encoder itself, but rather the auxiliary values linked to it that require referencing. Regards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>VulcPAC</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking to refine and streamline your code, consider a rewrite to make it more user-friendly and less intimidating. This would be a great learning opportunity for new programmers looking to enhance their skills.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chuck Woodbury</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Is there a way to detect when the ControlLogix processor is shutting down and save data before the shutdown process?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Yes, there are methods available in ControlLogix to detect the processor shutdown and save data before the process. You can save a bit or value in a tag before shutdown.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Can a specific flag or fault code be used to retain encoder data during shutdown in ControlLogix?</h4>
<p class='text-muted'><strong>Answer:</strong> -  While there might not be a specific flag or fault code dedicated to this purpose, you can implement logic to save count values from an absolute encoder in a DINT tag before shutdown.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I retain the count values from an absolute encoder in a Powerflex system during power down in ControlLogix?</h4>
<p class='text-muted'><strong>Answer:</strong> -  You can save the encoder count values in a DINT tag before power down, allowing you to use this information as a reference point during the next power-up cycle. This can help maintain the encoder position data.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What is the benefit of saving absolute encoder data before shutdown in ControlLogix?</h4>
<p class='text-muted'><strong>Answer:</strong> -  By saving absolute encoder data before shutdown, you can retain position information and prevent the loss of count values during power down. This allows for a more seamless operation during the next power-up cycle.</p>
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
