
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="After carefully reviewing previous posts, we have extensive experience in safety design. In the past, we collaborated with Pilz, who informed us that driving an expansion relay (with K1 and K2) from a single safety output, with feedback into the safety PLC, would achieve Category 3. However, most Rockwell">
    <meta name="keywords" content="safety plc, safety hardware, safety design, pilz collaboration, expansion relay, safety output, category 3, category 2, rockwell literature, safety contactor, feedback loop, safety input, automotive systems, pld, rockwell l">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/comparison-of-safety-plc-hardware-categories-achieving-category-3-or-category-2">
    <title>Comparison of Safety PLC/Hardware Categories: Achieving Category 3 or Category 2 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Comparison of Safety PLC/Hardware Categories: Achieving Category 3 or Category 2 | Oxmaint Community">
    <meta property="og:description" content="After carefully reviewing previous posts, we have extensive experience in safety design. In the past, we collaborated with Pilz, who informed us that driving an expansion relay (with K1 and K2) from a single safety output, with feedback into the safety PLC, would achieve Category 3. However, most Rockwell">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/comparison-of-safety-plc-hardware-categories-achieving-category-3-or-category-2">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Comparison of Safety PLC/Hardware Categories: Achieving Category 3 or Category 2 | Oxmaint Community">
    <meta name="twitter:description" content="After carefully reviewing previous posts, we have extensive experience in safety design. In the past, we collaborated with Pilz, who informed us that driving an expansion relay (with K1 and K2) from a single safety output, with feedback into the safety PLC, would achieve Category 3. However, most Rockwell">
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
        "@id": "https://community.oxmaint.com/discussion-forum/comparison-of-safety-plc-hardware-categories-achieving-category-3-or-category-2"
      },
      "headline": "Comparison of Safety PLC/Hardware Categories: Achieving Category 3 or Category 2",
      "description": "After carefully reviewing previous posts, we have extensive experience in safety design. In the past, we collaborated with Pilz, who informed us that driving an expansion relay (with K1 and K2) from a single safety output, with feedback into the safety PLC, would achieve Category 3. However, most Rockwell",
      "author": {
        "@type": "Person",
        "name": "chris_p"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-16",
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
                <h1 class="text-white">Comparison of Safety PLC/Hardware Categories: Achieving Category 3 or Category 2</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>chris_p</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1448</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">261</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>After carefully reviewing previous posts, we have extensive experience in safety design. In the past, we collaborated with Pilz, who informed us that driving an expansion relay (with K1 & K2) from a single safety output, with feedback into the safety PLC, would achieve Category 3. However, most Rockwell literature suggests that using a single output to a single safety contactor only achieves Cat 2, without showing feedback of the contactor to a safety input. This has sparked debate in our office as we have been unable to find any documentation supporting a Category 3 rating for this circuit. Is this subject open to interpretation or is there solid evidence available? 

In automotive systems, most are Category 3 (PLd) at best. The Rockwell L80 Safety Partner is essential for reaching PLe, but the importance of a system relies on its weakest rated device/circuit. Nevertheless, customers prefer the safety partner despite the PLd rating. I invite a general discussion and welcome feedback with any reference materials to share. Thank you for your contributions!Chris.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to safety functions, having only one point of failure at Cat 2 or below can compromise the system. If multiple force-guided contactors are controlled by a single output and that output fails in the ON position, the safety function is lost when a demand is placed on the system. However, using two outputs to drive multiple contactors provides redundancy, so if one output fails ON, the safety function remains intact, achieving a Cat 3 level of safety.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeffKiper</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The effectiveness of the safety output in a safety PLC may be contingent on its redundancy and monitoring capabilities. If the output is equipped with internal redundancies and monitoring features, then it may be deemed satisfactory.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to standard outputs, they can pose a single point of failure. Safety outputs, on the other hand, are inherently redundant, making them suitable for SIL3/PLe systems, whether they are controlling contactors or devices directly. Siemens offers both PP and PM failsafe outputs, with PP breaking the output twice before the signal can return anywhere, while PM breaks the output once at the output and once at the return, requiring it to be returned to the module. PM has the advantage of being able to detect cross circuit errors, offering an additional layer of safety compared to PP. Siemens manuals also suggest the option of driving 2 relays/contactors from a single failsafe output, leveraging the built-in redundancy of the safe output and the redundant nature of having 2 contactors. This setup can ensure an added layer of safety and reliability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Achieving SIL 3 certification requires more than just a single safety output connected to a contactor with feedback. While a safety output monitors the channel's output status and a safety input monitors the feedback input status, the safety PLC and safety IO modules play a crucial role in ensuring safety integrity. Proper coding, such as ensuring a safe state before energizing and using feedback signals, is essential for achieving SIL 2 compliance. However, a simple short to 24VDC or a bridged contact on the output wire to a single contactor can compromise the system's safety. While a safety output and input provide some integrity, they are not a foolproof solution to prevent a single point of failure. Without redundant measures to cut power from a device, SIL 3 certification cannot be attained in its strictest sense. Manufacturers may claim their single-channel relay is SIL 3 rated due to included diagnostics, similar to a properly wired single-channel Rockwell input/output. However, as demonstrated by potential single failure points, the overall system may not meet the SIL 3 criteria. It is important to note that SIL ratings are based on probability and failure rates, which is why literature may not explicitly mention the need for redundancy to achieve SIL 3 certification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Machinery safety standards, such as ISO 13849-1 and AS4024.1503, establish important guidelines for Category Architecture and PL/SIL levels. In the realm of machine safety, it is crucial to distinguish between Category and PL/SIL standards. There appears to be some confusion surrounding this distinction, as some systems classified as PLd are also Category 3, utilizing a dual channel architecture. It is worth noting that achieving PLd is also possible with Category 2, a single channel architecture, given that MTTF and DC meet certain criteria. Clarity on these concepts is essential to ensure the safety and effectiveness of machine operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe in a combination of the CAT&PL versus SIL approach, blending physical design with calculated failure rates (MTFD). It is possible to achieve PLd in a Cat 2 system, in my opinion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeffKiper</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I cannot disclose specific standards, obtaining information on machine safety can be a challenging task. Various vendors offer resources based on these standards, which are easily accessible to the public. Throughout the years, I have come across several useful resources that may be of interest: Rockwell SafeBook 5, SICK's Guide For Safe Machinery, PILZ's The Safety Compendium, Wieland's Safety Manual, Schneider's Safe Machinery Handbook, Siemens' Introduction and Terminology for Functional Safety of Machines and Systems, SMC's Safety In Focus, FESTO's Guideline For Functional Safety, SISTEMA's Cookbook 1, and Parker's comprehensive Guide To Machine Safety. Please be aware that not all information provided may be up to date according to current standards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the ongoing debate regarding single points of failure, the importance of safety functions cannot be overlooked. One viewpoint expressed is that a safety function is compromised if a single point of failure occurs with a Category 2 or lower system. Conversely, utilizing two outputs to drive multiple contactors can elevate the system to a Category 3 level, safeguarding against the loss of safety functionality in case of an output failure. It is essential to consider the implementation of adequate safety logic to mitigate risks. By incorporating a channel fault into the output configuration, a single shorted output can trigger a response that disables the output, requiring a dual failure scenario - a shorted output and a feedback circuit failure simultaneously - to pose a hazard. This emphasizes the need for thorough technical validation of safety systems post-installation. Your input on this matter is highly valuable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chris_p</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the discussion about potential points of failure, it has been suggested that if an output shorts and causes a hazard, having adequate safety logic in place is crucial. By programming a channel fault into the output configuration, a single output short results in the driven relay activating and a channel fault in the PLC, disabling the output. This means that two failures would need to occur simultaneously to pose a hazard: a shorted output and a feedback circuit failure. However, in the scenario where the output to a single contactor is shorted to the supply voltage external to the PLC, neither feedback nor safety logic can prevent the connected motor from running. This situation highlights the importance of thorough technical validation of safety systems post-installation to ensure proper functioning and avoid potential hazards. Let's explore this further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the difference between achieving Category 3 and Category 2 in safety PLC/hardware design?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Category 3 indicates a higher level of safety integrity compared to Category 2. Category 3 typically requires redundancy and diagnostic coverage to meet the necessary safety performance levels.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Can driving an expansion relay from a single safety output, with feedback into the safety PLC, achieve Category 3 as suggested by Pilz?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discussion highlights differing viewpoints, with Rockwell literature suggesting that using a single output to a single safety contactor may only achieve Category 2. Further clarification or evidence may be needed to confirm the Category 3 rating for this circuit.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How important is feedback from safety devices like contactors to safety inputs in achieving higher safety categories?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Feedback from safety devices to safety inputs plays a crucial role in achieving higher safety categories like Category 3. It ensures that the safety system can detect faults and maintain the required safety integrity level.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What role does the Rockwell L80 Safety Partner play in achieving higher safety levels like PLe?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Rockwell L80 Safety Partner is mentioned as essential for reaching PLe, a higher safety level. However, it is noted that the overall safety of a system is determined by its weakest rated device or circuit, highlighting the importance of assessing the entire safety system for compliance.</p>
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
