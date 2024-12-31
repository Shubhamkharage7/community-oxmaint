
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on integrating Endress Hauser flowmeter and AB PLC with two items. The flow meter being used is the Promass 300 (order code: 8P3B50-1EH9/0) and the PLC spec is ControlLogix 1756-L3. Communication between the two devices is done via ethernet/IP communication. I am facing">
    <meta name="keywords" content="endress hauser flowmeter, promass 300 eh, ab plc integration, ethernet/ip communication, data discrepancy, troubleshooting, controllogix 1756-l3, process_variable_totalizer_value_1, liquid measurement, data display, h">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-data-discrepancy-between-endress-hauser-flowmeter-promass-300-eh-and-ab-plc-integration-via-ethernet-ip-communication">
    <title>Troubleshooting Data Discrepancy between Endress Hauser Flowmeter Promass 300 EH and AB PLC Integration via Ethernet/IP Communication | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Data Discrepancy between Endress Hauser Flowmeter Promass 300 EH and AB PLC Integration via Ethernet/IP Communication | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on integrating Endress Hauser flowmeter and AB PLC with two items. The flow meter being used is the Promass 300 (order code: 8P3B50-1EH9/0) and the PLC spec is ControlLogix 1756-L3. Communication between the two devices is done via ethernet/IP communication. I am facing">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-data-discrepancy-between-endress-hauser-flowmeter-promass-300-eh-and-ab-plc-integration-via-ethernet-ip-communication">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Data Discrepancy between Endress Hauser Flowmeter Promass 300 EH and AB PLC Integration via Ethernet/IP Communication | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on integrating Endress Hauser flowmeter and AB PLC with two items. The flow meter being used is the Promass 300 (order code: 8P3B50-1EH9/0) and the PLC spec is ControlLogix 1756-L3. Communication between the two devices is done via ethernet/IP communication. I am facing">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-data-discrepancy-between-endress-hauser-flowmeter-promass-300-eh-and-ab-plc-integration-via-ethernet-ip-communication"
      },
      "headline": "Troubleshooting Data Discrepancy between Endress Hauser Flowmeter Promass 300 EH and AB PLC Integration via Ethernet/IP Communication",
      "description": "Hello everyone, I am currently working on integrating Endress Hauser flowmeter and AB PLC with two items. The flow meter being used is the Promass 300 (order code: 8P3B50-1EH9/0) and the PLC spec is ControlLogix 1756-L3. Communication between the two devices is done via ethernet/IP communication. I am facing",
      "author": {
        "@type": "Person",
        "name": "zai_jnr"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-10",
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
                <h1 class="text-white">Troubleshooting Data Discrepancy between Endress Hauser Flowmeter Promass 300 EH and AB PLC Integration via Ethernet/IP Communication</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>zai_jnr</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">404</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">95</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on integrating Endress Hauser flowmeter and AB PLC with two items. The flow meter being used is the Promass 300 (order code: 8P3B50-1EH9/0) and the PLC spec is ControlLogix 1756-L3. Communication between the two devices is done via ethernet/IP communication. I am facing an issue where the display on the flow meter is showing different data than what the PLC is receiving. Currently, I am using the data Process_variable_Totalizer_value_1 to display on our onsite HMI. The flow meter is measuring liquid type medium. Please refer to the attached file for a review of the display data on the flow meter and PLC display. Any advice would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In this discussion thread, I delved into challenges associated with integrating an analog signal over time. While I focused on alternative integration methods instead of using the built-in totalizer function of a different PLC, the issues discussed remain largely similar. Exploring ladder logic flow integration, I addressed concerns surrounding accuracy and reliability when integrating the signal from an analog flow sensor to calculate total volume. Some suggestions were made, including utilizing the pulse output option of the flow meter for improved accuracy. Visit www.plctalk.net for more insights on integration strategies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring for advice on the totalizer readings: what is the rate of change per increment, the approximate volume or mass flow rate, and the sample period? Is there an issue with the PLC-derived totalizer reading being 7% higher than the E&H instrument value? Additionally, the attachment to zai_jnr's response is no longer visible.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Steve Bailey, for resolving that issue!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm a bit unsure about the term 'integrate' in this discussion - was it intended to mean 'totalize' or to refer to 'enabling communication between two entities'? The Promass features efficient built-in totalization functions that are applicable for a wide range of purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Corsair</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Corsair expressed confusion regarding the use of the term 'integrate' in this discussion, questioning if it was meant to refer to 'totalize' or to establish communication between two entities. The Promass device features built-in totalization functions suitable for various applications. However, configuring Messaging and HART may be necessary unless a field protocol is in place. Rockwell offers a TOTALIZER instruction for this purpose, and PlantPAX V4.10 can be downloaded from their website to observe their internal processes. It is uncertain if the PlantPAX instruction will be compatible with an L3 system, but further investigation is recommended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>By utilizing Ethernet/IP connectivity, a separate totalizer and related issues should not be necessary. Upon reviewing the pdf, it is evident that the values do not align. This discrepancy may be attributed to differences in data types, word order, or units for the flow meter display compared to what is transmitted via the protocol. The latter is likely the main culprit, as word order and data types are typically clearly defined within the Ethernet IP protocol. Any discrepancies may stem from a mismatch between the flowmeter and the AOI/AOP/UDT utilized with it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is there a data discrepancy between the Endress Hauser flowmeter and the AB PLC integration via Ethernet/IP communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - The data discrepancy could be a result of communication errors, configuration settings mismatch, or data interpretation issues between the flowmeter and the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the data inconsistency issue between the flow meter and the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot the issue, you can check the communication settings, verify the data mapping between the devices, ensure proper data scaling, and confirm that the data types are matching between the flowmeter and the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Which specific parameters should I focus on to ensure accurate data transmission between the flow meter and the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Focus on parameters such as Process_variable_Totalizer_value_1, communication protocol settings, network configuration, data formats, and any potential signal interference that may affect data accuracy.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps can I take to synchronize the data displayed on the flow meter with the data received by the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can review the configuration settings on both devices, calibrate the flow meter if necessary, troubleshoot the communication network for any issues, and ensure that the data transmission protocols are correctly set up for accurate data synchronization.</p>
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
