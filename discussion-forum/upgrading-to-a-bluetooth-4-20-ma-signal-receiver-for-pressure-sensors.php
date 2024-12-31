
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In the process of upgrading a 4-20 ma system, we are transitioning from a traditional circular paper chart recorder to a modern Bluetooth receiver for the 4-20 signal. This Bluetooth receiver effectively transmits the 4-20 ma input data to the cloud via the internet. Aside from configuring the receiver">
    <meta name="keywords" content="bluetooth 4-20 ma signal receiver, pressure sensors, upgrading system, circular paper chart recorder, modern technology, internet transmission, configuring receiver, input range, impedance, current leg, integration, calibration, setup, iot devices, sensor data transmission">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/upgrading-to-a-bluetooth-4-20-ma-signal-receiver-for-pressure-sensors">
    <title>Upgrading to a Bluetooth 4-20 mA Signal Receiver for Pressure Sensors | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Upgrading to a Bluetooth 4-20 mA Signal Receiver for Pressure Sensors | Oxmaint Community">
    <meta property="og:description" content="In the process of upgrading a 4-20 ma system, we are transitioning from a traditional circular paper chart recorder to a modern Bluetooth receiver for the 4-20 signal. This Bluetooth receiver effectively transmits the 4-20 ma input data to the cloud via the internet. Aside from configuring the receiver">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/upgrading-to-a-bluetooth-4-20-ma-signal-receiver-for-pressure-sensors">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Upgrading to a Bluetooth 4-20 mA Signal Receiver for Pressure Sensors | Oxmaint Community">
    <meta name="twitter:description" content="In the process of upgrading a 4-20 ma system, we are transitioning from a traditional circular paper chart recorder to a modern Bluetooth receiver for the 4-20 signal. This Bluetooth receiver effectively transmits the 4-20 ma input data to the cloud via the internet. Aside from configuring the receiver">
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
        "@id": "https://community.oxmaint.com/discussion-forum/upgrading-to-a-bluetooth-4-20-ma-signal-receiver-for-pressure-sensors"
      },
      "headline": "Upgrading to a Bluetooth 4-20 mA Signal Receiver for Pressure Sensors",
      "description": "In the process of upgrading a 4-20 ma system, we are transitioning from a traditional circular paper chart recorder to a modern Bluetooth receiver for the 4-20 signal. This Bluetooth receiver effectively transmits the 4-20 ma input data to the cloud via the internet. Aside from configuring the receiver",
      "author": {
        "@type": "Person",
        "name": "Barry Busey"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-18",
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
                <h1 class="text-white">Upgrading to a Bluetooth 4-20 mA Signal Receiver for Pressure Sensors</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Barry Busey</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1863</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">493</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In the process of upgrading a 4-20 ma system, we are transitioning from a traditional circular paper chart recorder to a modern Bluetooth receiver for the 4-20 signal. This Bluetooth receiver effectively transmits the 4-20 ma input data to the cloud via the internet. Aside from configuring the receiver for a 4-20 ma input range (4 ma minimum and 20 ma maximum), are there other factors to consider such as the impedance of the current leg? Can the new receiver be integrated in series with the existing system? Will any additional calibration be necessary for this setup?----------------------------------- Barry -----------------------------------</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Barry, In response to your query: Numerous Industrial Process Transmitters (4-20mA) have a maximum loop resistance of around 750 ohms. It is permissible to connect additional devices within this loop, provided that the transmitter's loop resistance limit is not exceeded. This information can typically be located on the Transmitter dataplate or in the Manufacturer's Manual. I trust this information proves helpful. Best regards, Charles Palmer. If you are retrofitting a 4-20 mA system to replace a circular paper chart recorder with a Bluetooth receiver for the 4-20 signal, there are factors to consider. Besides configuring the receiver to support a 4-20 ma input and stream data to the cloud via the internet, you should also take into account the impedance of the current leg. Additionally, it may be feasible to integrate the new receiver and the current system in series, but be sure to check if different calibration is necessary. Thank you for your inquiry. 

(Keywords: Industrial Process Transmitters, 4-20mA system, loop resistance limit, Manufacturer's Manual, impedance, calibration)</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nina Sanders</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In addition to my earlier response, Barry, it is important to note that a 4-20mA transmitter is typically powered by a 24v DC source (such as a PLC or DCS) with a 250 ohm resistor across the input terminals. This resistor converts the current signal (4-20mA) into a voltage signal (1-5V) for the PLC or DCS. It is crucial to factor in this resistance along with other devices in the loop to calculate the total loop resistance effectively.

Regarding your inquiry about retrofitting a 4-20 mA system with a Bluetooth receiver, it is essential to consider the impedance of the current leg. While setting the receiver to 4-20 0 (4mA minimum and 20mA maximum) is necessary, you may also need to ensure proper calibration when integrating the new receiver with the current system in series.

------------------------------ 
Charles Palmer</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Heather Coleman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After gaining a better understanding of how it functions, I now see that the sensor will transmit a 4-20mA signal irrespective of the input voltage as long as it provides enough power to overcome the impedance of the connected parts. In response to the previous message regarding the 4-20 MA Pressure Sensor, keep in mind that a 24v DC source typically powers the 4-20mA transmitter, incorporating a 250 ohm resistor across the input terminals to convert the current to a 1-5V voltage signal for the PLC or DCS. To calculate the total loop resistance, one must consider this added resistance along with that of all other devices in the loop. When setting up a Bluetooth receiver for the 4-20 signal to replace the paper chart recorder, aside from configuring the receiver to accept 4-20mA input, you should also take into account the impedance of the current path. It may be possible to connect the new receiver and the existing system in series, but calibration adjustments may be necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gavin Russell</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, that is accurate. When powered by 24v DC, the transmitter generates a current that represents the Process Measured variable and flows through the circuit. One potential issue could arise if the 24v DC supply is below normal and the resistance is near the 750 ohm limit. In such a scenario, there might not be enough Voltage force for the current to flow properly, leading to a lower reading on the receiver (PLC or DCS) than the actual value. These factors can be easily confirmed using a Digital Multimeter if any errors are suspected. Trust this information proves beneficial. Thank you, Charles.

Charles Palmer

Barry Busey

Regarding the use of a 4-20 mA Pressure Sensor, it is crucial to understand that the 4-20mA transmitter typically operates on a 24v DC supply (PLC, DCS, etc.) with a 250 ohm resistor connected across the input terminals. This resistor converts the current range (4-20mA) into a Voltage signal range (1-5 V) for input to the PLC or DCS. Therefore, the overall loop resistance includes this resistance along with that of other devices in the loop. This knowledge is essential for accurate operation and calibration of the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Erik Rivera</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Definitely, thank you once again! Barry Busey here checking in. I wanted to confirm the details about the 4-20 MA Pressure Sensor. When the transmitter is powered by 24v DC, it generates a current that represents the Process Measured variable and flows through the circuit. One issue that may arise is if the 24v DC supply is lower than normal and the resistance is near the 750-ohm limit, there might not be enough voltage for the current to flow properly, resulting in a lower reading on the receiver (PLC or DCS) than the actual value. You can easily verify all these parameters using a Digital Multimeter if needed. I hope this information is helpful. Best regards, Charles Palmer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mason Rogers</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What Bluetooth receiver do you use for retrofitting a 4-20 mA system and eliminating the traditional circular paper chart recorder? The Bluetooth receiver is specifically engineered to convert a 4-20 mA signal into digital data and transmit it to the cloud via the internet. In addition to configuring the receiver for the 4-20 mA range (4 mA to 20 mA), are there any other factors to consider, such as the impedance of the current loop? Can the new receiver be integrated into the existing system in series, and will it necessitate recalibration? Share your thoughts and recommendations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Wesley Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for a Bluetooth 4-20mA Sensor for LVDT, Pressure, and Level Sensors? Check out the ERBESSD INSTRUMENTS EPH-G61 Bluetooth 4-20mA Sensor. This sensor allows you to monitor the output of any 4-20mA transducer with Modbus Protocol available. Are you retrofitting a system and need a Bluetooth receiver for your 4-20 mA signal? The Bluetooth receiver from ERBESSD INSTRUMENTS is designed to transmit your signal to the cloud via the internet. When setting up the receiver, ensure it is calibrated to receive a 4-20 mA signal correctly. Are you wondering about impedance considerations or if the new receiver can be installed in series with your current system? Reach out to ERBESSD INSTRUMENTS for more information and calibration guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Brenda Green</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Barry, implementing Bluetooth 4-20mA Converters can be seen as a temporary solution during the upgrade of a plant equipped with outdated measurement and control devices. However, I would suggest considering a more long-term approach. By replacing legacy 4-20mA transmitters with modern 'Smart' wireless transmitters, you can take advantage of advanced analytics and data analysis capabilities. This upgrade can significantly enhance your plant's efficiency and safety measures, especially when using SIL compliant devices. Feel free to reach out if you have any queries. Best regards, Charles.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Helen Diaz</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the key considerations when upgrading to a Bluetooth 4-20 mA signal receiver for pressure sensors?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When upgrading, it is essential to configure the receiver for the 4-20 mA input range and consider factors like the impedance of the current leg. Integration with the existing system and the need for additional calibration should also be taken into account.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How does the Bluetooth receiver transmit the 4-20 mA input data to the cloud?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Bluetooth receiver effectively transmits the 4-20 mA input data to the cloud via the internet, enabling remote monitoring and data storage.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can the new Bluetooth receiver be integrated in series with the existing system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is important to ensure that the new Bluetooth receiver can be seamlessly integrated in series with the existing system to maintain functionality and compatibility.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Is additional calibration required when upgrading to a Bluetooth 4-20 mA signal receiver?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Depending on the specific setup and requirements, additional calibration may be necessary to ensure accurate and reliable data transmission and monitoring.</p>
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
