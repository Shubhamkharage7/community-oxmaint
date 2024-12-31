
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I need to accurately measure the tank level and transmit the sensor data to the PLC. The tank has a height of 0-3m, with the sensor placed 0.2m above the tank bottom and the transmitter positioned at the tank top. The maximum allowable level for the tank is 2.6m.">
    <meta name="keywords" content="tank level measurement, tank level sensor, plc sensor data transmission, tank setup details, accurate tank level reading, sensor offset, tank height measurement, transmitter position, maximum tank level, sensor calibration, tank level formula, sensor placement, tank level accuracy">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-accurately-measure-and-transmit-tank-level-data-to-a-plc-with-sensor-offset-tank-setup-details-included">
    <title>How to accurately measure and transmit tank level data to a PLC with sensor offset - Tank setup details included | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to accurately measure and transmit tank level data to a PLC with sensor offset - Tank setup details included | Oxmaint Community">
    <meta property="og:description" content="I need to accurately measure the tank level and transmit the sensor data to the PLC. The tank has a height of 0-3m, with the sensor placed 0.2m above the tank bottom and the transmitter positioned at the tank top. The maximum allowable level for the tank is 2.6m.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-accurately-measure-and-transmit-tank-level-data-to-a-plc-with-sensor-offset-tank-setup-details-included">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to accurately measure and transmit tank level data to a PLC with sensor offset - Tank setup details included | Oxmaint Community">
    <meta name="twitter:description" content="I need to accurately measure the tank level and transmit the sensor data to the PLC. The tank has a height of 0-3m, with the sensor placed 0.2m above the tank bottom and the transmitter positioned at the tank top. The maximum allowable level for the tank is 2.6m.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-accurately-measure-and-transmit-tank-level-data-to-a-plc-with-sensor-offset-tank-setup-details-included"
      },
      "headline": "How to accurately measure and transmit tank level data to a PLC with sensor offset - Tank setup details included",
      "description": "I need to accurately measure the tank level and transmit the sensor data to the PLC. The tank has a height of 0-3m, with the sensor placed 0.2m above the tank bottom and the transmitter positioned at the tank top. The maximum allowable level for the tank is 2.6m.",
      "author": {
        "@type": "Person",
        "name": "colesha"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-05",
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
                <h1 class="text-white">How to accurately measure and transmit tank level data to a PLC with sensor offset - Tank setup details included</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>colesha</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>15 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1320</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">444</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I need to accurately measure the tank level and transmit the sensor data to the PLC. The tank has a height of 0-3m, with the sensor placed 0.2m above the tank bottom and the transmitter positioned at the tank top. The maximum allowable level for the tank is 2.6m. How can I ensure an accurate tank level reading with the sensor offset starting at 0.2m? I am utilizing the formula Output=LRV+(Input−LRV/URV−LRV)×(URV−LRV) for this purpose. See below for the tank setup details.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Colesha inquired about achieving precise tank-level readings despite sensor offsets. Could you provide information on the units and range of the transmitter input? In the formula mentioned, the expression (URV - LRV) seems to cancel out. What values do LRV and URV represent? Is LRV possibly 0.2m, the lowest transmitter input level, while URV could be around 2.6m or higher? How does the range of the transmitter input factor into the formula? Additionally, do we have details on whether the transmitter response to input levels is linear or non-linear?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello drbitboy, I apologize for any confusion. Here is additional information regarding the transmitter range, which is from 0 to 5 meters with an output of 4-20mA. The formula used for analog scaling is a linear one commonly employed in such situations. For example, determining the mA reading corresponding to 1 meter involves using the upper range value (URV) and lower range value (LRV). 

My concern lies in whether using 0.2m as the LRV will provide an accurate representation of the actual tank level. For instance, if the sensor measures a current of 10mA, with a sensor input and span of 4-20mA, and a measuring range of 0.2m - 2.6m, the calculated level comes out to be 1.1m. However, given the offset of 0.2m, I question the accuracy of this reading.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>colesha</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Calculating the level using the formula provided by formulacolesha, it can be determined that the signal will reach 20mA when the level is at 2.6m from the bottom of the tank. However, if the Transmitter signal range is set at 4-20mA for a level range of 0-5m in the transmitter, then 20mA indicates a depth of 5m in the transmitter, equivalent to 5.2m (5.0m + 0.2m) in the tank. 

With a signal of 4mA symbolizing 0m on the sensor dip tube and 20mA representing 5m on the dip tube, each additional mA corresponds to 0.3125m on the dip tube. Therefore, a signal of 10mA would indicate a level of 1.875m (0.3125m/mA x 6mA) on the dip tube, or 2.075m (1.875m + 0.2m) in the tank. 

In a broader context, the formula for calculating the level can be expressed as Level = 0.2 m + ((InputSignal_mA - 4mA) / (20mA - 4mA)) * (5m - 0m). It's important to note that the range of the transmitter (5m - 0m) can be substituted with the tank range (5.2m - 0.2m) without affecting the outcome. 

By applying the formula, the level at 10mA can be calculated as Level = 0.2m + ((10mA - 4mA) / (20mA - 4mA)) * (5m - 0m) = 2.075m.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What kind of sensor is this? Simply calibrate it to its full sensor range, perform calculations post-installation, select your reference points, and you're all set.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Determining the shape of the tank is crucial for accurate tank capacity measurements. Is the tank square or circular? This information is essential for calculating the actual volume of liquid it can hold, not just the level reading. Without knowing the tank's shape, it is impossible to determine the true percentage of liquid inside. This would require a mathematical function to accurately calculate the percentage based on the tank's shape.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're not getting the readings you need, it could be due to incorrect configuration. Many level transmitters can be customized to send analog signals based on "strapping tables" within their settings. For instance, you can adjust the transmitter to send 5.23 mA when the water level is slightly above the tip (assuming the tip is 0.2m high) and 18 mA when the water is at 2.6m. It can even be set to send 4 mA if water is at or below the tip. While your equation may be correct, make sure to use the appropriate values like 5.23 and 18 instead of 4 and 20. At 3m, the transmitter could send slightly over 20 mA, but most AI cards are capable of reading up to 21 mA for accurate measurements at higher levels.

Without the probe reaching lower depths, you won't get precise readings, but the displayed tank level will decrease from 0.2m to 0.0m, which is more accurate than showing 0.2m when the tank is empty. Remember, just because you can work around a design issue doesn't mean you should. Take a closer look at the transmitter's capabilities before making changes to the PLC code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Before programming anything, it's crucial to address the underlying design issue you're facing. It seems like you're using a Guided Wave Radar (cable or rod) in a tank, which may lead to inaccuracies below 0.2m due to the sensor no longer touching the product. Understanding how the sensor/transmitter is set up is key, as guided wave radars are typically installed in a bridle on the side of a vessel/tank.

If your process can maintain at least 0.2m of product, the application should work fine. However, calibrating the sensor to detect product when it's not in direct contact is possible but may not be very accurate. Working closely with the customer to understand the design and process can help alleviate uncertainties.

In situations where a tank is constantly filled and emptied, it's important to ensure the product level doesn't drop too low to prevent pump damage. If the product goes below the 0.2m mark, indicating an "invalid" level and alerting the operator can be a solution. Consider using a through-air radar for better accuracy, depending on the tank's contents and the customer's budget constraints.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nicherbert</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the device in question is radar or another transmitter-based distance measuring tool, it raises the possibility that a 0m (equivalent to a 4mA signal) reading indicates the level being at the level of the transmitter. In contrast, a 0.2m tank level corresponds to a 2.8m (3m - 0.2m) reading, and a 5m (equivalent to a 20mA signal) reading would imply the level is 5m below the transmitter, which is not feasible in the current setup. My query pertains to how a device with a 2.8m sensor has a measurement range of 0-5m. The simplest and most intuitive formula for linear measurement is (InputSignal - LowLevelSignal) / (HighLevelSignal - LowLevelSignal) = (MeasuredLevel - LowLevel) / (HighLevel - LowLevel), which highlights the linear relationship between input signals and measured levels within their specified bounds. This equation can be rearranged to solve for the measured level based on the input signal, resulting in the formula provided in the initial post (InputSignal - LowLevelSignal) / (HighLevelSignal - LowLevelSignal) x (HighLevel - LowLevel) = MeasuredLevel + LowLevel.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Monitoring tank levels using pressure transmitters is a common practice in various industries. When dealing with submersible transmitters, it is advisable to position them a few inches above the tank bottom to prevent interference from any settled debris. To achieve accurate measurements, I calibrate the sensor to its full range in engineering units and adjust for the offset corresponding to the sensor's distance from the tank bottom. In the case of water tanks, this offset may be a negative value if the sensor is installed in a pipe within a vault situated several feet below the tank floor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize sensor performance, adjust the upper range to 3.0 meters, lower range to 0.0 meters, and offset to 0.2 meters. The input should range from 4mA to 20mA between 0.0 meters and 3.0 meters. Implement an alarm or control mechanism to alert or prohibit filling beyond 2.6 meters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robb B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to understand the situation accurately, it is crucial to be physically present onsite, in front of the tank, to take measurements and observe real-time activities. Speculation without firsthand experience can lead to inaccuracies. While your efforts are commendable, being physically present is essential for a comprehensive understanding.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is quite common for a lower signal to perform better than a higher one, especially when the concept of unity is not fully understood. Instead of simply solving the issue, this situation presents an opportunity to educate and enlighten the original poster. By gaining a better sense of proportion, they can likely resolve the problem on their own.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your advice and input. The tank's shape is not round, and the sensor being used is a submersible pressure sensor, as mentioned by OkiePC. In order to calculate the measured level, I convert the sensor readings to engineering units, adjust for the sensor's location relative to the tank's bottom, and then use a formula incorporating the sensor's low and high level signals. Is this the process you were referring to, OkiePC?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>colesha</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When dealing with in-ground clearwells, a common practice is to utilize a submersible 10psi transmitter with a 4 to 20mA output. The transmitter is scaled linearly in the PLC, where 4mA corresponds to 0 and 20mA corresponds to a specific measurement in feet. For instance, at 20mA, there would be 23.1 feet of water above the sensor, even if the clearwell itself is only 14 feet deep. It is crucial to regularly check the analog signal for any out-of-range conditions and promptly address them to avoid any potential issues.

One key tip is to set the lower alarm limit to a value slightly below 4.0 mA, such as 3.8 mA, to allow for a margin of error during normal operation while still being able to detect any malfunctions or sensor failures. By setting up the PLC scaling for the maximum range of the sensor, it simplifies the replacement process in case a sensor needs to be swapped out. Furthermore, incorporating a variable offset that can be easily adjusted can help fine-tune the measurements for greater accuracy.

For those already working with sensor ranges in meters, scaling it appropriately in the PLC and adding a customizable offset can streamline the process further. It is also recommended to fill the tank to the overflow level periodically to verify and adjust the offset as needed, ensuring precise measurements and efficient operation of the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey there, members! Just a quick update - I will be stopping by the site next week to conduct the evaluation, as well as the installation and calibration process. Looking forward to getting everything set up and running smoothly!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>colesha</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I accurately measure and transmit tank level data to a PLC with a sensor offset?</h4>
<p class='text-muted'><strong>Answer:</strong> To ensure accurate tank level readings with a sensor offset, you can use the formula Output=LRV+(Input−LRV/URV−LRV)×(URV−LRV) in your setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are the tank setup details for measuring tank level accurately?</h4>
<p class='text-muted'><strong>Answer:</strong> The tank has a height of 0-3m, with the sensor placed 0.2m above the tank bottom and the transmitter positioned at the tank top. The maximum allowable level for the tank is 2.6m.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How do I account for the sensor offset in measuring tank level accurately?</h4>
<p class='text-muted'><strong>Answer:</strong> By adjusting the sensor offset in your calculations according to the formula provided, you can ensure accurate tank level readings despite the offset starting at 0.2m above the tank bottom.</p>
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
