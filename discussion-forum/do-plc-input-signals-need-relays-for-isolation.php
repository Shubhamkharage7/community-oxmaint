
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In the realm of PLC outputs, relays are commonly utilized even without the need for signal conversion. However, when it comes to 24vdc input signals, the scenario is different. In my experience, there is typically no signal isolation for 24v discrete input signals into PLC cards. Recently, I was">
    <meta name="keywords" content="plc input signals, relays for isolation, 24vdc input signals, signal conversion, 24v discrete input signals, plc cards, panel replacement, 120vac relays, input signal conversion, signal isolation, input card amps">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/do-plc-input-signals-need-relays-for-isolation">
    <title>Do PLC input signals need relays for isolation? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Do PLC input signals need relays for isolation? | Oxmaint Community">
    <meta property="og:description" content="In the realm of PLC outputs, relays are commonly utilized even without the need for signal conversion. However, when it comes to 24vdc input signals, the scenario is different. In my experience, there is typically no signal isolation for 24v discrete input signals into PLC cards. Recently, I was">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/do-plc-input-signals-need-relays-for-isolation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Do PLC input signals need relays for isolation? | Oxmaint Community">
    <meta name="twitter:description" content="In the realm of PLC outputs, relays are commonly utilized even without the need for signal conversion. However, when it comes to 24vdc input signals, the scenario is different. In my experience, there is typically no signal isolation for 24v discrete input signals into PLC cards. Recently, I was">
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
        "@id": "https://community.oxmaint.com/discussion-forum/do-plc-input-signals-need-relays-for-isolation"
      },
      "headline": "Do PLC input signals need relays for isolation?",
      "description": "In the realm of PLC outputs, relays are commonly utilized even without the need for signal conversion. However, when it comes to 24vdc input signals, the scenario is different. In my experience, there is typically no signal isolation for 24v discrete input signals into PLC cards. Recently, I was",
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
      "datePublished": "2024-09-27",
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
                <h1 class="text-white">Do PLC input signals need relays for isolation?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>15 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1220</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">89</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In the realm of PLC outputs, relays are commonly utilized even without the need for signal conversion. However, when it comes to 24vdc input signals, the scenario is different. In my experience, there is typically no signal isolation for 24v discrete input signals into PLC cards. Recently, I was discussing a project with an application engineer where my customer was replacing a panel. The integrators sent a panel with 120vac relays to convert the input signals, assuming they were 120vac when they were actually 24vdc. The previous setup had the 24v input signals directly going into the PLC without a relay.

When I decided to switch out the 120vac relays for the 24v input signals, I didn't see the necessity for using a relay for signal isolation. I believed that the input card didn't draw enough amps to warrant a relay, and saw relays as potential points of failure. However, the engineer expressed concerns about burnt-out inputs and disclaimed responsibility for such outcomes. I have not encountered many burnt-out inputs in the past, if any. What are your thoughts on using relays for input cards in situations like this?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If there isn't a shared network, utilize a relay for communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent conversation with an application engineer, AutomationTechBrian discussed the use of relays for PLC outputs and 24vdc input signals. While relays are commonly used for PLC outputs, there is often no signal isolation for 24v discrete input signals into PLC cards. A customer was replacing a panel, and integrators mistakenly sent a panel with 120vac relays to convert the input signals for the 24vdc PLC input card. These input signals were actually 24v, not 120vac, as previously thought. The legacy panel being replaced had the 24v input signals going straight into the PLC without a relay. It is important to note that relays can be an additional point of failure, and it may be necessary to add interposing relays for dedicated IO to prevent issues. As long as the circuitry and devices are properly sized, this should not be a problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Swapping out a burnt-out relay is a quicker and more cost-effective solution than replacing an entire I/O card. Save time and money by opting for this simple fix.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ojz0r</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ojz0r mentioned that it is quicker and more cost-effective to swap out a faulty relay rather than replacing an entire I/O card. This approach can save time and money, especially if you can pinpoint the component that has malfunctioned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Incorporating relays into PLC inputs may compromise reliability if the input consumes minimal current (just a few milliamps) below the relay's minimum current rating.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jaden</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering the operation and release times of relays, it is important to factor in the inherent delays they add to the input signal. Relay designs can vary, with some having as little as a 3ms delay and others as much as 50ms. It is uncommon to see relays used with common 24VDC inputs, as most input modules are well protected against shorts. However, when applying 120VAC to a 24VDC input, there is a higher level of uncertainty involved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of industrial automation, the debate over the necessity of relays for PLC input signals continues. While relays are commonly used for PLC outputs, the question arises: what about 24vdc input signals? Many professionals, including myself, have encountered situations where 24v discrete input signals are fed directly into PLC cards without the need for signal conversion. 

Recently, I found myself in a discussion with an application engineer regarding a customer's panel replacement project. The integrators mistakenly included 120vac relays in the new panel to convert the 24v input signals for the PLC input card, despite the input signals being 24vdc. The original legacy panel had the 24v input signals connected directly to the PLC, bypassing the use of relays. 

Upon removing the unnecessary 120vac relays, I hesitated to install relays for the 24v input signal isolation, considering the additional points of failure they introduce. However, the engineer raised concerns about potential burnt-out inputs and shifted responsibility towards me. This situation prompted me to question the necessity of relays on input cards. 

Ultimately, if the engineer approves the removal of relays, it implies that they were not essential in the first place. This raises doubts about the initial design and decision-making process, potentially leading to uncomfortable inquiries. Let's explore this issue further: Do you believe relays are necessary for input cards in PLC systems?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, AutomationTechBrian raised an interesting point about the use of relays for 24vdc input signals in PLC systems. Typically, relays are commonly utilized for PLC outputs, but what about 24vdc input signals? In a scenario where a customer is replacing a panel, integrators mistakenly used 120vac relays instead of 24vdc relays for the input signals. The question arises - is using relays necessary for isolating 24vdc input signals in PLC cards?

While some argue that using relays adds an extra layer of protection against surges and lightning strikes, others like AutomationTechBrian question the need for relays as they may introduce additional points of failure. In this case, the engineer is concerned about burnt-out inputs without relay protection, but AutomationTechBrian has not encountered any issues with burnt-out inputs in the past.

The debate continues on whether relays are essential for input cards, with considerations on the load drawn by resistive elements and the presence of opto-isolators in PLC racks for added protection. Ultimately, the decision to use relays on input cards may vary based on individual experiences and preferences in the field of automation technology.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are important reasons for using a solid state relay block for isolation in this scenario. In my case, I utilize this relay block to isolate the inputs, which are linked to my model railroad layout track for detecting the train's location. This precaution is crucial as, in the event of a derailment, AC power from the transformer might cause feedback into the inputs, leading to potential damage. By employing the isolation relay block, I am able to prevent such issues. If the relay were to fail, I can easily replace it without major hassle. This setup helps ensure the safety and efficiency of my model railroad layout.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikeexplorer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are the devices receiving the 24v input protected by a fuse? This should provide adequate protection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chud</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the feedback. I usually rely on email notifications to keep me updated on replies. However, I did not receive any notifications this time, and with a busy week, I only checked back now. The panel I'm working on is quite unique, as the 24v power does not originate from within it. Despite cutting off the 120v power, the 24v power remains unaffected. This panel has been in operation for over 20 years, with various changes made over time. Some of the 24v input signals do not originate from the +24v distribution terminals in this panel, with some coming from the adjacent panel. While fusing the +24v distribution terminals may not impact all input signals, adding fuses to the distribution blocks could be a good precautionary measure.

After discussing the input relay issue with the engineer, we have decided to use terminal blocks for the inputs. We will ensure that all electronics are properly fused. I have attached a visual of the panel we are replacing. The wires were poorly labeled, making it difficult to trace their connections. Hence, I took this picture while in the process of labeling all wires with shrink-wrap labels, including those not in use. By the way, those are Modicon PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Oh no!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Surprisingly, I ended up being the one to install the new panel instead of the manufacturer. At the moment, I have a significant extruder project with a client that is currently in the testing phase. Luckily, there are some mechanical issues that they can address while I focus on the panel installation. Check out the latest picture showing the conversion of the I/O relays. The input relays have been swapped out for a terminal block, and the bottom two output relay blocks now have 24v wiring in place (colored blue).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>From the perspective of integrators, isolation relays play a crucial role in ensuring system reliability. It is impossible to guarantee complete control over external factors, so investing time in verifying documentation and integrating systems meticulously can be a gamble. Alternatively, incorporating inexpensive isolation relays provides a cost-effective and foolproof solution. These relays safeguard hardware by controlling the flow of electrical signals and preventing damage from outdated equipment. Ultimately, it is advisable to prioritize the installation of isolation relays to safeguard against potential risks and ensure smooth operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to remember that standard relay contacts operating at low currents, such as those found in a 24V DC PLC input, may degrade over time. To prevent this, gold-plated contacts are commonly utilized in such scenarios for increased reliability and longevity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
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
<h4 class='text-dark'>FAQ: 1. Do PLC input signals require relays for isolation?</h4>
<p class='text-muted'><strong>Answer:</strong> - Not necessarily. While relays are commonly used for PLC outputs, they may not be required for 24vdc input signals. It depends on the specific setup and requirements of the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the considerations when deciding to use relays for PLC input signals?</h4>
<p class='text-muted'><strong>Answer:</strong> - Factors to consider include signal conversion needs, signal isolation requirements, current draw of the input card, and the risk of burnt-out inputs. It's important to assess these factors before deciding whether to use relays.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are relays for PLC input signals a common practice?</h4>
<p class='text-muted'><strong>Answer:</strong> - The use of relays for 24vdc input signals in PLC systems can vary based on specific applications and preferences. Some may opt for relays for added protection and isolation, while others may choose to directly connect the signals to the PLC without relays.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What are the potential advantages and disadvantages of using relays for PLC input signals?</h4>
<p class='text-muted'><strong>Answer:</strong> - Advantages of using relays include signal isolation and protection for the input card. However, relays can also introduce additional points of failure and complexity to the system. It's essential to weigh these factors when deciding whether to use relays.</p>
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
