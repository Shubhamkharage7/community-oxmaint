
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently working on implementing a real-time indication system on SCADA to monitor the operation of a pump within its performance curve. This data will eventually be used to evaluate the wire to water efficiency of a hydropneumatic booster in a municipal distribution system. The suction pressure is">
    <meta name="keywords" content="interpreting pump curves, efficient operation, real-time indication system, scada monitoring, hydropneumatic booster, municipal distribution system, suction pressure, discharge pressure, wire to water efficiency, effective pressure, pump efficiency, gpm rating">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/interpreting-pump-curves-for-efficient-operation">
    <title>Interpreting Pump Curves for Efficient Operation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Interpreting Pump Curves for Efficient Operation | Oxmaint Community">
    <meta property="og:description" content="I am currently working on implementing a real-time indication system on SCADA to monitor the operation of a pump within its performance curve. This data will eventually be used to evaluate the wire to water efficiency of a hydropneumatic booster in a municipal distribution system. The suction pressure is">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/interpreting-pump-curves-for-efficient-operation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Interpreting Pump Curves for Efficient Operation | Oxmaint Community">
    <meta name="twitter:description" content="I am currently working on implementing a real-time indication system on SCADA to monitor the operation of a pump within its performance curve. This data will eventually be used to evaluate the wire to water efficiency of a hydropneumatic booster in a municipal distribution system. The suction pressure is">
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
        "@id": "https://community.oxmaint.com/discussion-forum/interpreting-pump-curves-for-efficient-operation"
      },
      "headline": "Interpreting Pump Curves for Efficient Operation",
      "description": "I am currently working on implementing a real-time indication system on SCADA to monitor the operation of a pump within its performance curve. This data will eventually be used to evaluate the wire to water efficiency of a hydropneumatic booster in a municipal distribution system. The suction pressure is",
      "author": {
        "@type": "Person",
        "name": "TheWaterboy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-09",
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
                <h1 class="text-white">Interpreting Pump Curves for Efficient Operation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">645</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">245</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently working on implementing a real-time indication system on SCADA to monitor the operation of a pump within its performance curve. This data will eventually be used to evaluate the wire to water efficiency of a hydropneumatic booster in a municipal distribution system. The suction pressure is maintained around 45-50 PSI, while the pumps increase the effective pressure (EFF) to 110 PSI when it drops to 80 PSI.

Typically, I would just turn the pumps on without considering pump curves, but now I realize the importance of understanding them better. It seems crucial to observe the difference between suction and discharge pressure in relation to flow, with the delta reflecting a range of numbers from 67 to 74. However, despite my calculations, I am only seeing a boost of about 60-70 PSI at full flow, not the expected range.

Although the pumps are able to deliver their full GPM rating to an open hydrant, the EFF pressure remains significantly lower. This prompts the question of whether the pump is operating within its performance curve or if there is a misinterpretation of the data displayed on the chart.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>For inquiries like this, visit the enig-tips.com website.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you clear on your objective? The series of numbers ranging from 67 to 74 likely represent efficiencies, while the U-shaped contours are known as "iso-efficiencies," indicating the operating points at adjacent efficiencies at the end of each contour. The dotted contours labeled with hp refer to "iso-power" lines - by multiplying the flow by the head and dividing it by the efficiency at the intersection of a power contour and an efficiency contour, you will get consistent results. The vertical axis represents the [discharge minus suction] pressure rise (head) across the pump, while the horizontal axis signifies the flow. Knowing the flow and pressure rise at a given moment determines the operating point, allowing you to derive the power and efficiency from the curve.

NPSH, or Net Positive Suction Head, plays a crucial role in preventing cavitation by maintaining the inlet pressure above the liquid's vaporization point. To prevent cavitation, ensure the NPSH is higher than the vapor pressure of the liquid at the pump inlet. For more detailed information, refer to Perry's Handbook. As it has been several years since I last delved into this field regularly, hopefully@Tom Jenkinsor someone more up-to-date can provide further insights or rectify any inaccuracies in my explanation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When examining the data sheet, it is evident that the pump has a maximum pressure rating of 65.24 psi, equivalent to 150 ft H2O, aligning with the curve lines and your observed discharge pressure of 60-70 PSI. If the goal is to increase the discharge pressure beyond 80 PSI, there may be an issue with the application. Many of us are eagerly anticipating Tom J's input on this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>clintm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am hopeful that Tom will also join the discussion. Keeping up with his detailed responses is a challenge, but I remain determined to learn from him. My current project involves analyzing the performance of pump stations in the city. Over the years, the distribution pipelines have changed, impacting the efficiency of the pumps. I am focused on understanding the effects of these changes on the pump curve, as it seems that no one else is paying enough attention to this issue.

The pump station I am currently working on is new, and I have meticulously documented its performance. I am particularly interested in ensuring that the pump is operating within the specified parameters. Presently, I have observed a suction pressure of 47psi and a discharge pressure of 110psi, resulting in a boost of 63psi. The flow rate started at 441 GPM at 90psi pressure, but gradually decreased to 254 GPM upon reaching the set pressure of 110psi.

By calculating the pressure delta of 63psi and converting it to head, I determined that the pump is operating at a lower flow rate than expected. The data suggests that the pump is not performing optimally, falling short of the expected "System Curve #1." My analysis indicates that there should be a higher flow rate based on the given parameters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The system curve represents the pressure drops (vertical axis) from the pump discharge pressure to the downstream reservoir pressure at different flow rates (horizontal axis). In contrast, the pump curves show pressure rise, with "0" indicating the pump suction head, typically around 47PSI. The system curve, on the other hand, signifies pressure drop, with "0" being the downstream reservoir pressure where water is delivered.

When plotting "System Curve #1," it's assumed that the pump suction pressure and the downstream reservoir pressure are equal. However, if the reservoir pressure is, for example, 110PSI, the starting pressure on the system curve will be higher than the pump suction pressure at zero flow. This means the system curve's starting point won't align with the pump curve's unless the reservoir pressure matches the pump suction pressure.

To ensure both the pump and system curves are comparable on the plot's ordinate scale, we may need to adjust the starting point of the system curve relative to the 47PSI pump suction pressure as the reservoir pressure changes. Remember, in this context, "head" and "pressure" are used interchangeably.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Below is a visual representation attempting to illustrate the concept discussed in my previous post. It's important to note that this diagram is not a traditional "plot." The horizontal axis does not represent a specific measurement such as flow rate or a linear scale. Instead, it serves as a conceptual position within the system. This distinction is crucial to understanding the system dynamics accurately.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Another important factor to consider is static head, which refers to the constant gauge pressure (PSIG) differences caused by variations in elevation within the system. The current modeling assumes a uniform height for all components (such as an infinitely wide reservoir with zero height). While slight differences in elevation may not have a major impact, in systems operating at the lower end of the system curve (< 5ft pressure drop), even a small discrepancy in height between the pressure measurement point in the reservoir and the water discharge point could greatly affect the model's accuracy. This highlights the significance of accounting for static head in hydraulic system analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Disclaimer: It is important to note that the following analysis is based on my interpretation of the process described by TheWaterboy (OP) in this thread, as they have not explicitly mentioned a pressurized reservoir. In the image below, I have provided annotations in red to illustrate what I believe is happening in this process. 

It is crucial to understand that "PSI" alone is a unit of pressure that requires a reference point for context. In this case, I have used two references: PSIG, which denotes gauge pressure relative to atmospheric pressure, and PSID, which represents the differential pressure in comparison to pump suction pressure. 

The original "System Curve #1" showcases the pump's performance delivering 2250GPM at 130ft of head above suction pressure. However, it appears that the pump is sending water to a reservoir at a pressure much higher than the suction pressure, resulting in a pressure drop along the system. 

I propose the existence of an "Actual" system curve (highlighted in red) that depicts the pump's performance under different scenarios. One curve shows the pump delivering 254GPM to a reservoir at 106PSIG (59PSID), while another curve represents 441GPM being sent to a reservoir at 90PSIG (43PSID). It is worth noting that the discrepancy in pressure readings could be attributed to factors such as pump speed variations. 

Although my interpretation may not be definitive, I believe it offers a plausible explanation for the observed data. The actual system curve appears to be steeper than the originally assumed "System Curve #1," indicating potential factors such as longer pipe runs or smaller pipe diameters at play. 

Furthermore, we are still awaiting input from Tom Jenkins on this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to clarify that we currently lack sufficient information to address the original poster's query. However, based on the available information, this is the conclusion that I have reached.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently reviewing your responses, and it is important to note that this system is pressurized with a significant surge tank to maintain pressure during pump cycles. It is not an open system connected to a reservoir. I am researching the intended design pressure at the highest point, as I believe this will be crucial. Is there any other information you need from me?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Waterboy stated that he is currently analyzing the responses received. It is important to note that the system in question is pressurized and includes a large surge tank to maintain pressure between pump cycles, rather than flowing into an open reservoir. The intended design pressure at the highest endpoint is being researched, as it is expected to be significant. Please provide any additional information needed for a comprehensive analysis. When referring to a "reservoir," it should be understood as a pressurized reservoir that stores both pressure and water volume, similar to a Well Pressure Tank in a residential well system. To provide a comprehensive description of the system, be sure to include the elevations of the different components as previously mentioned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I can't believe I made such a silly mistake... When you showed me the curve you drew in Red, it really helped me understand why the design seemed off. After reaching out to the supplier, I realized that the pump data I provided was actually from a different pump, not the one specified in the sheet. The pump intended for Fire flows and open hydrants, not normal daily pressure maintenance, which explains why it was running outside design parameters. Here is the correct curve for the pump the data actually came from, with the red zone aligning much closer to the desired specifications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy mentioned the pump curve and how the red zone aligns closely with the actual data points. While we don't have a definite solution yet, we are making progress towards it. One issue we are facing is the application of the system curve, which is only accurate when starting to fill the pressure reservoir from zero head. By adjusting the system curve to correspond to reservoir pressures of 90PSIG and 110PSIG, we anticipate that the curve might intersect the 12.10" impeller at flow rates of 441GPM and 234GPM. This adjustment could account for any unknown elevations. This information should provide a good starting point for further analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is it important to monitor a pump's operation within its performance curve?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Monitoring a pump within its performance curve is essential for ensuring efficient operation, maximizing energy efficiency, and preventing potential issues such as cavitation or overload.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can the difference between suction and discharge pressure help evaluate pump performance?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The difference between suction and discharge pressure, along with the flow rate, provides valuable information on the pump's efficiency and whether it is operating within its designed parameters.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What could cause the observed discrepancy between expected and actual pressure boost at full flow?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The observed discrepancy could be due to various factors such as incorrect pump selection, system design issues, or misinterpretation of data, highlighting the importance of thorough analysis and troubleshooting.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can one determine if a pump is operating within its performance curve?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To determine if a pump is operating within its performance curve, it is crucial to compare the actual operating data, including pressure and flow rates, with the manufacturer's pump curve specifications to identify any deviations or inefficiencies.</p>
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
