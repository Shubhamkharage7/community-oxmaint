
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently exploring the feasibility of utilizing a 1756-IB16I (or a similar dc input module) to accommodate a 24vdc input pulse frequency of 80 pulses per second for a flow application. The system involves seven (7) pulse meters generating 1600 pulses per gallon at a flow rate of">
    <meta name="keywords" content="1756-ib16i module, pulse frequency application, flow measurement solution, 80 pulses per second, 24vdc input module, flow rate monitoring, pulse meter">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/utilize-1756-ib16i-module-for-80-pulse-second-flow-application">
    <title>Utilize 1756-IB16I Module for 80 Pulse/Second Flow Application | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Utilize 1756-IB16I Module for 80 Pulse/Second Flow Application | Oxmaint Community">
    <meta property="og:description" content="I am currently exploring the feasibility of utilizing a 1756-IB16I (or a similar dc input module) to accommodate a 24vdc input pulse frequency of 80 pulses per second for a flow application. The system involves seven (7) pulse meters generating 1600 pulses per gallon at a flow rate of">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/utilize-1756-ib16i-module-for-80-pulse-second-flow-application">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Utilize 1756-IB16I Module for 80 Pulse/Second Flow Application | Oxmaint Community">
    <meta name="twitter:description" content="I am currently exploring the feasibility of utilizing a 1756-IB16I (or a similar dc input module) to accommodate a 24vdc input pulse frequency of 80 pulses per second for a flow application. The system involves seven (7) pulse meters generating 1600 pulses per gallon at a flow rate of">
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
        "@id": "https://community.oxmaint.com/discussion-forum/utilize-1756-ib16i-module-for-80-pulse-second-flow-application"
      },
      "headline": "Utilize 1756-IB16I Module for 80 Pulse/Second Flow Application",
      "description": "I am currently exploring the feasibility of utilizing a 1756-IB16I (or a similar dc input module) to accommodate a 24vdc input pulse frequency of 80 pulses per second for a flow application. The system involves seven (7) pulse meters generating 1600 pulses per gallon at a flow rate of",
      "author": {
        "@type": "Person",
        "name": "tlona"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-20",
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
                <h1 class="text-white">Utilize 1756-IB16I Module for 80 Pulse/Second Flow Application</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tlona</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>15 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1266</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">47</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently exploring the feasibility of utilizing a 1756-IB16I (or a similar dc input module) to accommodate a 24vdc input pulse frequency of 80 pulses per second for a flow application. The system involves seven (7) pulse meters generating 1600 pulses per gallon at a flow rate of 3 gallons per minute (gpm). To handle this setup, I will require eight (4) 1756-HSC modules as the HSC module only supports two inputs. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I possess an outdated specification sheet indicating that the input delay time should not exceed 1ms, along with filter times of 0ms, 1ms, or 2ms. It is essential to take into account your module's Requested Packet Interval (RPI) and the Programmable Logic Controller's (PLC) scan time. With 80 pulses per second, an edge occurs approximately every 6ms, allowing a swift timed interrupt to capture it if your RPI is set at a minimal value, such as 1ms. Alternatively, you may consider exploring the capabilities of the 1756-IB16IF, a high-speed input module. Although I do not have the datasheet readily available, it should be easily accessible on RA's website. To effectively utilize this module, you will still require a rapid timed interrupt and appropriate RPI settings, unless the module already incorporates high-speed counter functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For those looking to reduce expenses, consider exploring the ADAM-6151EI-AE - a 16-channel Isolated DI Ethernet/IP Module. This model offers high-speed performance and cost savings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you interested in the 1756-LSC8xIB8I counter module, which comes equipped with 8 channels?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>That is a unique find that I haven't come across yet.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jstolaruk mentioned that they haven't seen this particular low-speed counter before. They used it over a decade ago and are surprised that it is not more well-known. This type of counter is far superior to a standard input for counting purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Contr_Conn mentioned a 1756-LSC8xIB8I counter module with 8 channels. This is new information to me, thank you for sharing!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ceilingwalker</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, joseph_e2 noted that an old spec sheet mentions an input delay time of a maximum of 1ms plus filter time, which can range from 0ms to 2ms. To optimize performance, it is essential to consider the module's RPI (Requested Packet Interval) and the PLC's scan time. With 80 pulses/sec, an edge occurs approximately every 6ms, allowing for a fast timed interrupt to capture it when the RPI is kept small, around 1ms. The question arises on how 80Hz translates to a 6ms "edge".</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sergei Troizky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you ever wondered how 80Hz became equated with a 6ms "edge"? When we break it down, 80 cycles per second translates to .0125 seconds per cycle. Keep in mind that each cycle consists of two 'edges' - a rising edge and a falling edge. When we look at a square wave, these edges happen one half cycle apart, approximately resulting in "an edge about every 6ms".</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe the flow meters do not require quadrature counters, therefore a 12ms period is the ideal setting that I am considering.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sergei Troizky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Sergei Troizky stated that flow meters do not require quadrature counters, with a 12ms period in mind. The main issue lies in the detection of pulses by the PLC. To accurately count pulses, the PLC must detect both the 1 and 0 signals of the pulse. Missing the 0 signal between two successive 1s will result in a missed count. Therefore, the PLC should have a scan cycle of at least 61.25ms, and ideally more frequently to adhere to Nyquist principles.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Quadrature counters are not necessary for the flow meters, with a 12ms period being the ideal choice. While you have the option to only count on the rising edge, it's important to be aware of the occurrence of the falling edge.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the valuable information and suggestions on recommended modules. I am not familiar with them either. The meters in question are Mcnaught (MX09)PD meters equipped with 2-wire pulsers and do not have quadrature capabilities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlona</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that production of these flowmeters may have ceased, but if you own one equipped with a reed switch, you should consider using a counter card to effectively manage the incoming signal. Despite manufacturers' claims, it is inevitable that the reed switch will fail over time, depending on how frequently they are utilized. I faced complications due to the McNaught flowmeter also serving as a restriction plate. However, properly sized flowmeters with reed switches still encountered issues eventually. It is important to note that the McNaught flowmeter itself was highly accurate and well-constructed. This commentary is focused on the limitations of reed switches, not a criticism of McNaught.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for sharing your knowledge about the reed switch. The meters are currently being produced, with two output options available: a 2-wire magnetic sensor or NPN with a 3.1kΩ pull-up resistor. Cost and space limitations are important factors to consider. The 1756-LSC8xIB8I appears to be the optimal choice over the 1756-IB16IF due to its potential cost savings and space efficiency. However, either option should suffice for the job at hand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlona</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The 1756-LSC8xIB8I module offers 8 counters and 8 isolated inputs, which can be utilized for various tasks such as monitoring direction or as general DC inputs. While I haven't used this module in over a decade, it still remains a versatile tool for automation and control systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can the 1756-IB16I module accommodate a 24vdc input pulse frequency of 80 pulses per second for a flow application?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the 1756-IB16I module (or a similar dc input module) can handle a 24vdc input pulse frequency of 80 pulses per second for a flow application.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How many pulse meters are involved in the system, and what is the pulse rate per gallon?</h4>
<p class='text-muted'><strong>Answer:</strong> - The system involves seven (7) pulse meters generating 1600 pulses per gallon.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the flow rate of the system in gallons per minute (gpm)?</h4>
<p class='text-muted'><strong>Answer:</strong> - The flow rate of the system is 3 gallons per minute (gpm).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Why is it necessary to use eight (4) 1756-HSC modules for this setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is required to use eight (4) 1756-HSC modules because each HSC module supports only two inputs, and in this setup, multiple inputs need to be handled.</p>
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
