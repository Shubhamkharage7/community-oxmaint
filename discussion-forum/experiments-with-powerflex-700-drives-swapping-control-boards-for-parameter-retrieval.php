
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am on my way to the workshop now to conduct an experiment involving the PowerFlex 700s. I am curious to see if these drives can swap control boards and successfully power up in order to access parameters from a different board. While we have managed to do this">
    <meta name="keywords" content="powerflex 700 drives, control board swapping, parameter retrieval, drive experiment, powerflex 700 parameters, drive control boards, powerflex drive compatibility">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/experiments-with-powerflex-700-drives-swapping-control-boards-for-parameter-retrieval">
    <title>Experiments with PowerFlex 700 Drives: Swapping Control Boards for Parameter Retrieval | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Experiments with PowerFlex 700 Drives: Swapping Control Boards for Parameter Retrieval | Oxmaint Community">
    <meta property="og:description" content="I am on my way to the workshop now to conduct an experiment involving the PowerFlex 700s. I am curious to see if these drives can swap control boards and successfully power up in order to access parameters from a different board. While we have managed to do this">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/experiments-with-powerflex-700-drives-swapping-control-boards-for-parameter-retrieval">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Experiments with PowerFlex 700 Drives: Swapping Control Boards for Parameter Retrieval | Oxmaint Community">
    <meta name="twitter:description" content="I am on my way to the workshop now to conduct an experiment involving the PowerFlex 700s. I am curious to see if these drives can swap control boards and successfully power up in order to access parameters from a different board. While we have managed to do this">
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
        "@id": "https://community.oxmaint.com/discussion-forum/experiments-with-powerflex-700-drives-swapping-control-boards-for-parameter-retrieval"
      },
      "headline": "Experiments with PowerFlex 700 Drives: Swapping Control Boards for Parameter Retrieval",
      "description": "I am on my way to the workshop now to conduct an experiment involving the PowerFlex 700s. I am curious to see if these drives can swap control boards and successfully power up in order to access parameters from a different board. While we have managed to do this",
      "author": {
        "@type": "Person",
        "name": "AutomationTechBrian"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-30",
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
                <h1 class="text-white">Experiments with PowerFlex 700 Drives: Swapping Control Boards for Parameter Retrieval</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2995</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">310</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am on my way to the workshop now to conduct an experiment involving the PowerFlex 700s. I am curious to see if these drives can swap control boards and successfully power up in order to access parameters from a different board. While we have managed to do this with other brands in the past, some drives prove to be less cooperative due to being specifically matched to their own boards. For instance, my colleague mentioned that Schneider Electric (Square D) drives exhibit this behavior and the parameters are reset to default settings. If anyone has insights or experience with this issue, please share them. It will take some time to get everything set up, especially since the drives are slightly different sizes. However, these drives are ones that have been replaced and are kept for experimental purposes. I will share the results of the experiment once it is completed.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have recently set up several PF700 drives. If you have the PF700 with ADC (Ethernet)/ADR (DeviceNet) selected in your IO config tree, the parameters will automatically download upon powering up. This option can be found in the configuration tab within the IO config tree. It should be compatible with CCW, where you save the drive parameters in a file during commissioning. However, this process is a one-time deal where you connect to the drive, upload the parameters, and replace the drive. When replacing the drive, go online with CCW and download the parameters once the connection is established.

One potential issue arises when using parameters from a drive with a different firmware revision. To address this, consider back flashing the new drive to the old drive firmware to download the old parameter set. Otherwise, compare the old non-default parameter set to the new set and adjust the parameters on the new drive accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jim3846</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jim3846 mentioned that he has successfully started up a few PF700 drives. If you have the PF700 with ADC (Ethernet)/ADR (DeviceNet) selected in your IO configuration tree, the parameters will automatically download upon power up. This feature can be found in the configuration tab of the IO config tree. It should also work with CCW, where you can store the drive parameters in a file during commissioning. However, this process is a one-time deal where you upload the parameters from the drive once commissioning is complete. When replacing the drive, go online with CCW and download the parameters after establishing a connection.

One issue that may arise is when the parameters are from a drive with a different firmware revision. In this case, you may need to back flash the new drive to the old drive firmware in order to download the old parameter set. Otherwise, you will need to compare the old parameter set that is not default with the new parameter set to identify matching parameters and make the necessary changes on the new drive.

According to my research, the auto download feature started with RSLogix 5000 version 18. I am currently working with version 17. I often get called in when a customer's drive needs to be replaced due to failure. In most cases, I can set up simple parameters based on backup drives or similar application drives. However, sometimes I encounter unique applications like a customer's centrifuge that communicates over Ethernet IP and requires pre-setup parameters from the manufacturer. Alternatively, there are many legacy machines out there without any known backup files, posing a challenge.

In a recent instance with a customer, the VFD's outputs were damaged due to water exposure, resulting in blown output IGBTs. I am looking to retrieve the speed control PID tuning parameters to configure the new drive. There is also a complication with VFD firmware versions between the old drive and the replacement. For now, I will focus on addressing these issues step by step.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After conducting a test with two different drives - one with 408v and 15 HP, firmware version 10.00, and the other with 480v and 25 HP, firmware version 4.00 - I decided to swap the firmware from version 10 into the version 4 drive. Upon power-up, no issues were encountered. The keypad prompted me to select a setup method, and after choosing to abort and connect to CCW, I noticed that the non-default parameters had disappeared. While further testing may be necessary, it appears that this behavior is similar to Square D drives where swapping the control board resets the parameters to default settings. It is uncertain if this holds true in all scenarios, especially if the drives are the same size and firmware. To clarify this, I may need to consult AB for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By the way, that was a typographical error. Both drives operate at 480 volts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently created a video showcasing an experiment I conducted in the hopes of achieving success. While it may not be highly polished, I wanted to have something to share with my colleagues if it turned out well. You can view the video on YouTube by following this link: https://youtu.be/uVj-BQe0Nrw.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It's important to proceed with caution when dealing with the 700 series drives due to the numerous variations, even within the same base model number. Utilizing Drive Executive to store parameters on key laptops and the network is advisable. The parameters can vary from 1200 to 2300 variables depending on the specific tasks and unit. To streamline the process, consider using the HIMM module to store parameters and transfer them to the new unit. - James</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A popular technique known as a "HIM copy cat" involves saving the programming in the HIM before replacing the old board and then transferring it to the new one. It is important to note that this process is not automated and requires manual action. Detailed instructions can be found in the HIM manual, not the drive manual.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jraef</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I am currently at another job site, I want to address a crucial issue as you provide your input. The challenge we are faced with is resolving issues with Legacy equipment, specifically when the VFD has malfunctioned and the drive parameters were not saved. This is a common problem that requires skillful handling and expertise to rectify effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>My drive experienced a catastrophic failure, preventing me from safely powering it up. I have a replacement drive with the same model number, but I need to retrieve the parameters from the old drive without actually powering it up. Is there a way to accomplish this for a PowerFlex 700 Series B drive?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ROBVIC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In an experiment conducted in my workshop, I attempted to swap control boards between two distinct powerflex drives to determine if the saved parameters would transfer. A video documenting this experiment is available on YouTube. Unfortunately, I was unable to find a method to access parameters stored in a control board. During testing, all parameters reverted to their default settings. If there exists a solution to this issue, it remains unknown to me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response. I will share my findings if I come across another answer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ROBVIC</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can PowerFlex 700 drives swap control boards and still power up successfully?</h4>
<p class='text-muted'><strong>Answer:</strong> - The experiment aims to determine if PowerFlex 700 drives can swap control boards to access parameters from a different board.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Have other brands of drives shown issues with swapping control boards?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, some drives from other brands like Schneider Electric (Square D) may exhibit behavior where parameters are reset to default settings when control boards are swapped.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What challenges are expected when swapping control boards on the PowerFlex 700 drives?</h4>
<p class='text-muted'><strong>Answer:</strong> - Challenges such as drives being specifically matched to their own boards and differences in sizes may be encountered during the experiment setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Why are the drives being swapped for this experiment?</h4>
<p class='text-muted'><strong>Answer:</strong> - The drives being used for the experiment are ones that have been replaced and are kept for experimental purposes to test their behavior when control boards are swapped.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. When will the results of the experiment be shared?</h4>
<p class='text-muted'><strong>Answer:</strong> - The results of the experiment will be shared once it is completed and the data is collected from the PowerFlex 700 drives.</p>
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
