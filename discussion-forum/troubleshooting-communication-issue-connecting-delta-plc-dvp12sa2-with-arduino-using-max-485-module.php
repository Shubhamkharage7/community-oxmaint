
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When attempting to transmit data to an Arduino using the MODWR function block, I encountered an issue. I utilized code found online for both the PLC and Arduino, as well as the wiring instructions for the MAX485 module. Despite indications that the PLC is communicating correctly (with the COM">
    <meta name="keywords" content="delta plc, dvp12sa2, arduino, max485 module, troubleshooting communication issue, modwr function block, plc communication, arduino code, max485 wiring instructions, data transmission, connection setup, input values, modbus protocol">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-connecting-delta-plc-dvp12sa2-with-arduino-using-max-485-module">
    <title>Troubleshooting Communication Issue: Connecting Delta PLC DVP12SA2 with Arduino Using MAX 485 Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Issue: Connecting Delta PLC DVP12SA2 with Arduino Using MAX 485 Module | Oxmaint Community">
    <meta property="og:description" content="When attempting to transmit data to an Arduino using the MODWR function block, I encountered an issue. I utilized code found online for both the PLC and Arduino, as well as the wiring instructions for the MAX485 module. Despite indications that the PLC is communicating correctly (with the COM">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-connecting-delta-plc-dvp12sa2-with-arduino-using-max-485-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Issue: Connecting Delta PLC DVP12SA2 with Arduino Using MAX 485 Module | Oxmaint Community">
    <meta name="twitter:description" content="When attempting to transmit data to an Arduino using the MODWR function block, I encountered an issue. I utilized code found online for both the PLC and Arduino, as well as the wiring instructions for the MAX485 module. Despite indications that the PLC is communicating correctly (with the COM">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-connecting-delta-plc-dvp12sa2-with-arduino-using-max-485-module"
      },
      "headline": "Troubleshooting Communication Issue: Connecting Delta PLC DVP12SA2 with Arduino Using MAX 485 Module",
      "description": "When attempting to transmit data to an Arduino using the MODWR function block, I encountered an issue. I utilized code found online for both the PLC and Arduino, as well as the wiring instructions for the MAX485 module. Despite indications that the PLC is communicating correctly (with the COM",
      "author": {
        "@type": "Person",
        "name": "yawin"
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
                <h1 class="text-white">Troubleshooting Communication Issue: Connecting Delta PLC DVP12SA2 with Arduino Using MAX 485 Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>yawin</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">488</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">480</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When attempting to transmit data to an Arduino using the MODWR function block, I encountered an issue. I utilized code found online for both the PLC and Arduino, as well as the wiring instructions for the MAX485 module. Despite indications that the PLC is communicating correctly (with the COM 2 LED blinking) and the Arduino code printing '0' in the serial monitor, the data I am sending does not appear to be received by the Arduino as expected. The connection setup is as follows:

- PLC to MAX485:
    + to A
    - to B
    SG to GND
    VCC not connected

- MAX485 to Arduino:
    DI to RX
    RO to TX
    DE, RE to GND (Arduino GND)

The issue I am facing is that the Arduino is not receiving the input values correctly. Any assistance would be greatly appreciated.

Arduino code snippet is as below:

#include <LiquidCrystal.h>
#include <ModbusRtu.h>

#define ID 1
Modbus slave(ID, 0, 0);
int8_t state = 0;
unsigned long tempus;
uint16_t au16data[2];

const int rs = 12, en = 11, d4 = 5, d5 = 4, d6 = 3, d7 = 2;
LiquidCrystal lcd(rs, en, d4, d5, d6, d7);

void setup() {
    slave.begin(19200);
    tempus = millis() + 100;
    digitalWrite(13, HIGH);
    lcd.setCursor(0, 1);
    lcd.print("ValModbus=");
}

void loop() {
    state = slave.poll(au16data, 2);
    Serial.print(au16data[0]);

    if (state > 4) {
        tempus = millis() + 50;
        digitalWrite(13, HIGH);
    }

    if (millis() > tempus) 
        digitalWrite(13, LOW);
        lcd.setCursor(10, 1);
        lcd.print(au16data[0]);
        lcd.print(" ");
}</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Having dealt with numerous individuals encountering difficulties with the MAX485 board, the initial step is to ensure a 5V connection to the VCC terminal block for power supply. Additionally, it may be necessary to eliminate the internal 120 ohm termination resistor (R7) on the MAX485 and disable any termination on the Programmable Logic Controller (PLC). Another option is to implement idle biasing by incorporating resistors (e.g. 470, 560, or 680 ohms) from the + line to 5V and from the - line to GND.

For more insights and solutions, you can refer to discussions on various forums such as the following:

- Troubleshooting low voltage issue on the MAX485 module
- Integrating an ABB inverter (slave) with MAX485 and Arduino (master)

These forums provide valuable information and troubleshooting tips for individuals encountering similar challenges with their MAX485 boards and related applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jschulze</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my experience, I have encountered numerous individuals facing challenges with the MAX485 board. To ensure proper functionality, it is essential to connect a 5V power source to the VCC terminal block. Additionally, it may be necessary to eliminate the built-in 120 ohm termination resistor (R7) on the MAX485 and disable any termination on the PLC. Alternatively, you can implement idle biasing by adding resistors (e.g. 470, 560, or 680 ohms) from + to 5V and from - to GND.

For further insights and troubleshooting, I recommend exploring discussions on various forums, such as the following:

- Troubleshooting the MAX485 module RO pin voltage discrepancies when collecting data from an energy meter via modbus RTU.
- Addressing the "ModbusMaster invalid response slave ID exception" while working on an ABB inverter (PRO-33) with MAX485 and Arduino.

If you are new to this field and seeking comprehensive guidance on establishing connections and configurations, I suggest seeking relevant documentation or a step-by-step guide available online. Your willingness to learn and seek assistance as a beginner will significantly benefit your understanding and progress.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>yawin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are using the MAX485 board, here are some helpful resources for you: The MAX485 TTL to RS-485 Interface Module available at ProtoSupplies enables microcontrollers to utilize robust long-distance serial communications using RS-485 differential signaling. It is important to ensure correct connections when setting up your MAX485 board. Make sure to connect PLC to MAX485 as follows: + to A-, - to B, SG to GND, and connect VCC to a 5VDC power supply. Additionally, connect SG from your PLC and the negative leg of your 5VDC power supply to the MAX485's GND. When connecting the MAX485 to an Arduino, follow the connections: DI to RX, RO to TX, DE and RE to GND (Arduino GND). For two-way communication, tie DE and RE together and connect them to a GPIO pin on the Arduino. Remember to set the GPIO pin (RS-485 data enable) high in your Arduino code while transmitting. Make sure to review and verify your connections to ensure proper functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jschulze</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In case you are using the MAX485 board, here are some essential resources to refer to for better understanding: The MAX485 TTL to RS-485 Interface Module by ProtoSupplies allows microcontrollers to utilize RS-485 differential signaling for reliable long-distance serial communications. When connecting your PLC to the MAX 485 module, make sure to follow the correct wiring instructions as indicated by the colors green (correct), red (incorrect), and orange (requires review). Additionally, ensure that the VCC is connected to a 5VDC power supply for proper functionality. For connecting the MAX 485 to an Arduino, follow the outlined connections for data input (DI), data output (RO), driver enable (DE), and receiver enable (RE). It is important to tie together DE and RE if two-way communication is needed, with both connected to a GPIO pin on the Arduino. Remember to set the GPIO pin high during transmission in your Arduino code. Don't forget to test these connections and functionalities, and feel free to reach out for further assistance. Your feedback is greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>yawin</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Why is the Arduino not receiving the input values correctly when connecting to a Delta PLC DVP12SA2 using a MAX485 module?
- The issue may stem from the wiring connections or the code implementation. Double-check the connections and ensure they match the provided setup. Additionally, review the Modbus communication settings in both the PLC and Arduino code for any discrepancies.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be causing the data transmission issue between the Delta PLC and Arduino via the MAX485 module?</h4>
<p class='text-muted'><strong>Answer:</strong> - Possible reasons for the data transmission problem could include incorrect wiring, mismatched communication protocols, or errors in the code configuration. Verify that the wiring connections are accurate and that the Modbus settings in both devices are correctly configured.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot communication problems between the Delta PLC and Arduino when using the MODWR function block?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot communication problems, start by verifying the physical connections between the PLC, MAX485 module, and Arduino. Then, check the Modbus configuration settings in the PLC and Arduino code. Testing each component individually can help isolate the source of the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps can I take to ensure successful data transmission between the Delta PLC DVP12SA2 and Arduino via the MAX485 module?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure successful data transmission, carefully follow the wiring instructions provided, confirm the Modbus communication settings match between the devices, and thoroughly test the code implementation. Debugging by monitoring the communication indicators and output values can aid in identifying and resolving any issues.</p>
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
