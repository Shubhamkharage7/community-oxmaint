
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I come from a programming background but have yet to work with a PLC before. I have a straightforward automation project in mind, but I am unsure about the best controller to use - whether a PLC or an ARDUINO. The project involves measuring the positions of">
    <meta name="keywords" content="plc vs arduino, lever position measurement, solenoid activation, analog component, dial input sensitivity, automation project, lever travel distance, lever position monitoring, solenoid control, lever position detection, plc programming, arduino project, controller comparison">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/best-controller-for-measuring-lever-positions-and-activating-solenoid-plc-or-arduino">
    <title>Best Controller for Measuring Lever Positions and Activating Solenoid: PLC or Arduino? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Best Controller for Measuring Lever Positions and Activating Solenoid: PLC or Arduino? | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I come from a programming background but have yet to work with a PLC before. I have a straightforward automation project in mind, but I am unsure about the best controller to use - whether a PLC or an ARDUINO. The project involves measuring the positions of">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/best-controller-for-measuring-lever-positions-and-activating-solenoid-plc-or-arduino">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Controller for Measuring Lever Positions and Activating Solenoid: PLC or Arduino? | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I come from a programming background but have yet to work with a PLC before. I have a straightforward automation project in mind, but I am unsure about the best controller to use - whether a PLC or an ARDUINO. The project involves measuring the positions of">
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
        "@id": "https://community.oxmaint.com/discussion-forum/best-controller-for-measuring-lever-positions-and-activating-solenoid-plc-or-arduino"
      },
      "headline": "Best Controller for Measuring Lever Positions and Activating Solenoid: PLC or Arduino?",
      "description": "Hello everyone, I come from a programming background but have yet to work with a PLC before. I have a straightforward automation project in mind, but I am unsure about the best controller to use - whether a PLC or an ARDUINO. The project involves measuring the positions of",
      "author": {
        "@type": "Person",
        "name": "Jeffro67"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-31",
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
                <h1 class="text-white">Best Controller for Measuring Lever Positions and Activating Solenoid: PLC or Arduino?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jeffro67</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>19 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2111</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">42</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I come from a programming background but have yet to work with a PLC before. I have a straightforward automation project in mind, but I am unsure about the best controller to use - whether a PLC or an ARDUINO. The project involves measuring the positions of 3 levers, each with a travel distance of about 30mm. Based on the lever positions and travel speed, I need to activate a solenoid. It is essential for the component to be analog so that we can accurately determine the lever positions. Additionally, there will be a dial or knob that will serve as an input to adjust the sensitivity of the solenoid activation.

The custom program that I plan to write will continuously monitor the lever positions and the dial input in order to activate the solenoid when necessary. My question is, would a simple and affordable PLC be the most suitable tool for this project? What are the key components needed for this setup? Is it possible to outsource the construction and programming of this device? Your advice and suggestions would be greatly appreciated. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are looking to install a system in an industrial setting, consider options like Logo, S7-1200, or a Click instead of Arduino.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Siemens Logo controller offers a user-friendly solution for automation tasks, supporting up to 4 analog inputs without the need for extra components. To set up, all you need is an enclosure and a 24v DC power supply for the sensors to operate smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Puddle</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Arduino is a versatile tool for hobbyists and makers, but may not be suitable for industrial applications due to its lack of industrial hardening.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BobB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are seeking specific features such as programming in PLC languages like LAD, FB, ST, or GRAPH, live program monitoring, online changes without downtime, built-in diagnostics, industrial-grade durability, and long-term hardware and software availability, then a Programmable Logic Controller (PLC) is what you need. PLCs offer reliable hardware and software, with extensive support and a track record of over 15 years in the industry.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP suggested that if you are in need of specific requirements such as online monitoring, online changes without shutdown, and built-in diagnostics, then a Programmable Logic Controller (PLC) would be the ideal solution. A PLC allows programming in various languages like LAD, FB, ST, and GRAPH, ensuring reliability and industrial hardening for use in industrial applications. It offers both hardware and software reliability, with long-term availability and proper support. One recommended option is Beckhoff, which provides a PC-based solution with Windows, BSD, or Linux OS options. Beckhoff offers free engineering software and the runtime can be renewed every 7 days for testing and debugging. Feel free to message for more information on this solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>busarider29</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Cardosocea raised a question about the installation location, suggesting that Arduino may not be suitable for industrial settings. Instead, they recommended considering Logo, S7-1200, or Click PLCs. 

In this case, the equipment will be installed in the cabin of a race car, requiring durability to withstand vibrations and other challenging conditions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeffro67</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Puddle inquired about options for using a Siemens Logo controller in a car, which typically only has 12V power readily available. The Siemens Logo controller is known for its simplicity and ability to support up to 4 analog inputs without the need for additional parts. While a 24V DC power supply is typically recommended for the sensors, Puddle wondered if there are any 12V options available for installation in a car.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeffro67</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are in need of hardware that is compatible with skids/trucks and can handle varying voltage levels, Horner may have the solution you're looking for. Consider exploring their product lineup to see if it meets your specific requirements. While other manufacturers may also provide a "down to 12V" option, my experience lies exclusively with Horner. Additionally, Horner's pricing is competitive and reasonable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to reducing vibration, consider installing rubber mounts to minimize it effectively with any preferred hardware or brand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jeffro67 inquired about the availability of 12V options for car installations, as only 12V is easily accessible in vehicles. One possible solution is using a step-up converter to convert 12vdc to 24vdc. These converters are compact and cost-effective, expanding the possibilities for implementing a PLC system in cars.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you in need of precise proportional control for your solenoids, or are they currently limited to a simple on/off operation? Many automotive solenoid applications benefit from utilizing PWM outputs to enhance the solenoid's performance and adjust pressures. Have you had any hands-on experience with soldering or working with various electronic components such as resistors, transistors, and capacitors?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jds8086</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Seeking advice from various experts in this forum is akin to having a variety of tools at your disposal - each with its own unique strengths. While a microcontroller or Arduino could be a suitable option for your project, considering your programming skills and knack for durable construction, it's worth noting that these choices offer space and power efficiency. However, complexities may arise if you require visualization beyond LEDs, making testing and troubleshooting more challenging. On the other hand, PLCs offer a plethora of plug-and-play options for analog devices, eliminating the need for additional electronic components to process analog signals. They also provide easier troubleshooting and online signal monitoring. Although finding a 12V PLC may be tricky, utilizing a DC to DC converter can effectively overcome this limitation. Regardless of your choice between PLC or microcontroller, having measurement devices such as linear encoders or potentiometers is essential for successful implementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Siemens Logo offers a versatile 12/24VDC model with 8 digital inputs (including 4 analog inputs) and 4 digital outputs (relay). This programmable logic controller (PLC) can be easily expanded with additional modules as needed. Explore more details and options at the official Siemens website.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sigmadelta</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP emphasized the importance of meeting specific requirements when considering whether a PLC is necessary. Key factors include programming in a PLC language (such as LAD, FB, ST, GRAPH), real-time online program viewing, seamless online changes, integrated diagnostics, industrial-grade durability, and long-term hardware and software reliability. Opt for a reputable PLC brand with strong local support for better long-term performance in industrial applications. Avoid the pitfalls of using Arduinos for industrial projects and prioritize longevity and stability in your automation solutions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>WhinnieThePooh</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jeffro67 inquired about the possibility of outsourcing the construction and programming of a device. While we are happy to assist those in the Midwest, unfortunately, we do not offer services outside of Wisconsin. Thank you in advance for your understanding.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>WhinnieThePooh</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>IO_Rack pointed out that seeking advice from a variety of perspectives in this forum is like asking for input from different tools for a project that appears to be a nail. Personally, I have experience in automating with arduino and similar devices, understanding that not every project requires longevity on industrial settings. However, I have successfully created arduino-based solutions for large machine tools.

For the Original Poster (OP) who has a programming background, working with C/C++/Python on an arduino or a compatible device may be more straightforward than navigating PLC ladder logic. In cases where durability and robustness are necessary, there are options available with isolated inputs and high current/relay outputs.

While this forum may not be the ideal platform for in-depth discussions, feel free to reach out via Private Message for further exploration. We can discuss potential solutions I can help build for you, or I can provide guidance for those opting for a do-it-yourself approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lyndon A</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are looking for a fun project and have experience in C/C++, an Arduino would be a great choice. However, if you need high reliability for mass production, consider investing in a mobile machine controller from a reputable supplier like ifm or TTC. These controllers are compatible with Codesys or C programming and are more suitable for interfacing with mobile equipment compared to traditional industrial PLCs. While they may be a bit more complex to work with due to additional wiring requirements, they are the preferred solution for products intended for sale in industrial environments as they do not require additional enclosures.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Lococube Mini PLC from Barth Elektronik checks off all the necessary features, including 12V compatibility, free software, immunity to vibration, compact size, and no need for an enclosure. This device even comes equipped with holes for easy cable tie installation, making it ideal for automotive applications. I have personally used one of these mini PLCs in a tractor with great success. The software for this device can be found here: https://micon-l.de/support-4976.html?file=files/miCon-L/miCon-L Installationen/miCon-L_EN_V3.8.1.zip. Additionally, it is possible to program these mini PLCs using C, although I have only used the provided software mentioned above.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zimmer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Zimmer expressed enthusiasm about the cutting-edge technology of the Lococube Mini PLCs offered by Barth Elektronik. One crucial aspect that has not been addressed is the necessity of velocity along with position, indicating the need for real-time or pseudo real-time capabilities for integrating position over time. Response times must also be considered in this discussion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manglemender</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the main considerations when choosing between a PLC and an Arduino for a project involving measuring lever positions and activating a solenoid?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The choice between a PLC and an Arduino depends on factors such as complexity of the project, required precision, scalability, ease of programming, and budget.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are the advantages of using a PLC over an Arduino for this automation project?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: PLCs are designed for industrial automation applications, offer better reliability, have built-in analog input capabilities for precise measurements, and are well-suited for real-time control tasks.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What components are essential for setting up a system to measure lever positions and activate a solenoid using a PLC or Arduino?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Essential components may include sensors to measure lever positions, a solenoid for actuation, necessary wiring, and the controller (PLC or Arduino) itself along with any required interface modules.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Is it possible to outsource the construction and programming of a device for this automation project?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to outsource the construction and programming of the device to professionals or companies specializing in industrial automation or electronic prototyping.</p>
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
