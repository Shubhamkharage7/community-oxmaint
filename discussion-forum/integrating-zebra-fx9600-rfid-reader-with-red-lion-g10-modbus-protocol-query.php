
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am new to the community and looking to integrate a Zebra FX9600 RFID reader with a Red Lion G10 using Modbus protocol. The Zebra Modbus documentation indicates that the register should be 40100, which I believe translates to 400100 on the Red Lion device. The Start">
    <meta name="keywords" content="zebra fx9600, rfid reader, red lion g10, modbus protocol, modbus documentation, register 40100, register 400100, start inventory command, byte type, data block, word-size blocks, 400100 register">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/integrating-zebra-fx9600-rfid-reader-with-red-lion-g10-modbus-protocol-query">
    <title>Integrating Zebra FX9600 RFID Reader with Red Lion G10: Modbus Protocol Query | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Integrating Zebra FX9600 RFID Reader with Red Lion G10: Modbus Protocol Query | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am new to the community and looking to integrate a Zebra FX9600 RFID reader with a Red Lion G10 using Modbus protocol. The Zebra Modbus documentation indicates that the register should be 40100, which I believe translates to 400100 on the Red Lion device. The Start">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/integrating-zebra-fx9600-rfid-reader-with-red-lion-g10-modbus-protocol-query">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Integrating Zebra FX9600 RFID Reader with Red Lion G10: Modbus Protocol Query | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am new to the community and looking to integrate a Zebra FX9600 RFID reader with a Red Lion G10 using Modbus protocol. The Zebra Modbus documentation indicates that the register should be 40100, which I believe translates to 400100 on the Red Lion device. The Start">
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
        "@id": "https://community.oxmaint.com/discussion-forum/integrating-zebra-fx9600-rfid-reader-with-red-lion-g10-modbus-protocol-query"
      },
      "headline": "Integrating Zebra FX9600 RFID Reader with Red Lion G10: Modbus Protocol Query",
      "description": "Hello everyone, I am new to the community and looking to integrate a Zebra FX9600 RFID reader with a Red Lion G10 using Modbus protocol. The Zebra Modbus documentation indicates that the register should be 40100, which I believe translates to 400100 on the Red Lion device. The Start",
      "author": {
        "@type": "Person",
        "name": "bschuhma"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-16",
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
                <h1 class="text-white">Integrating Zebra FX9600 RFID Reader with Red Lion G10: Modbus Protocol Query</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bschuhma</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">228</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">308</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am new to the community and looking to integrate a Zebra FX9600 RFID reader with a Red Lion G10 using Modbus protocol. The Zebra Modbus documentation indicates that the register should be 40100, which I believe translates to 400100 on the Red Lion device. The "Start Inventory" command is a byte type located at offset 0. Since the Red Lion only supports word-size blocks, I created a data block starting at 400100 with a length of 4 words. 

My question is whether the start inventory command (either 1 or 2) should be placed in the 0th bit of register 400100 and the Handshake value in bit 8 of the same register. Alternatively, should the entire 400100 register (16 bits, 1 word, 2 bytes) hold the Inventory command and the Handshake be located in register 400101? 

I have tried various combinations, even setting the start register to 400099 and 400101, as it seems the Red Lion shifts registers by 1 due to zero-based indexing. Any insights, suggestions, or corrections on my understanding of Modbus would be appreciated. Thank you, Bret.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance your understanding of Modbus, I recommend exploring the Modbus technical documentation accessible on modbus.org. While Modbus is straightforward and clearly defined on the protocol side, there are various interpretations regarding its implementation, particularly in relation to memory models. One key area of ambiguity revolves around the memory models, including the 0-based "on-the-wire" and the 1- or 0-based interfaces. This may be a familiar concept to you.

It is worth noting that the leading "4" in the address 40100 may not necessarily be part of the formal address but rather a redundant reference to the Holding registers. These registers are typically accessed through function codes 03 for reading and 16 for writing, among others. Essentially, when working with the memory starting at Holding Register "address" 100, it could be either a 0-based offset or a 1-based ordinal index.

In the realm of Modbus, values are transmitted as 16-bit (2-byte) words. According to the Modbus protocol specification on modbus.org, the byte order within words is typically MSB-first on the wire (with minimal exceptions). This means that each Modbus driver must consider the CPU architecture of the device to ensure proper communication.

While the Zebra document may not explicitly mention the byte order within words on the device, certain parameter sets describe 2-byte millisecond fields that appear to follow the MSB-first byte order convention. It is important to acknowledge that some Modbus drivers may reverse the byte order, although this practice is limited to situations where the drivers communicate exclusively with each other or with a configurable driver that can accommodate byte order reversal on the wire.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using function code 3 to read holding registers, some clients automatically add a 4 to the value. If not, simply input "40100" as the register address.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up my data block, I began at address 400100 with a length of 4 words. This raises the question of whether the start inventory command (either 1 or 2) should be located in the 0th bit of register 400100, while the Handshake value should be at bit 8 of the same register. Alternatively, is the entire 400100 register (16 bits, 1 word, 2 bytes) dedicated solely to the Inventory command, with Handshake stored in register 400101?

The Modbus parameter description for Holding register 100 (40100) indicates 4 bytes and a single 4-byte DINT, totaling 8 bytes or 64 bits, noted as 4 words. Assuming a word is 16 bits, the four words indeed add up to 64 bits. This aligns with the definition of a Modbus "word," which brings a dual response - yes and no - to the initial query, and a negative response to the latter.

Consequently, the Command and Handshake bytes are consolidated into the first Modbus word, while EnablePreFilter and EnablePostFilter bytes occupy the second word. The AntennaMask's four bytes (32-bit DINT) span across the third and fourth words. However, the exact allocation within the word for Command and Handshake bytes remains uncertain, indicating the need to experiment with various combinations.

A suggested approach involves using 1 for both Command and Handshake when Command is Start (2), and employing 2 for both when Command is Stop (2). This method ensures compatibility and minimizes potential discrepancies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your responses, everyone! Brian, your explanation has clarified my main concern - the 2-byte word is utilized for both storing 8 bits of the Inventory command and 8 bits of the Handshake. Despite switching their positions, placing the Inventory command at the 0th bit and the Handshake at the 8th bit, I did not observe any changes. Unfortunately, I did not receive the Inventory Response at 400200. However, the answer to my initial question regarding the usage of words in different contexts may influence the specific registers and bytes I should monitor for the response. The protocol may seem straightforward, but differences in how each vendor implements it can lead to various uncertainties. I will continue experimenting. Thank you, Bret.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bschuhma</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>bschuhma expressed gratitude for the responses received and noted Brian's explanation regarding the utilization of the 2-byte word for both Inventory command and Handshake in a Modbus operation. Despite switching the positions of the Inventory command and Handshake within the word, no significant impact was observed. The lack of response from the Inventory Response at address 400200 suggests that reevaluating the usage of words in different ways may influence the selection of registers and bytes to monitor for a response. It is evident that while the protocol is straightforward, each vendor's implementation introduces complexities.

Furthermore, referencing the Zebra RFID - Modbus TCP manual revealed that the FX9600 Reader follows a Big-Endian Data format, meaning the high byte (bits [15:8]) will be the first of the two consecutive characters (bytes) in a word.

Additionally, it is assumed that the Modbus Software (Server?) has been installed on the RFID device. Noteworthy is the difference in address conventions between the Zebra manual and the Red Lion interface, where the former uses a 0-based holding register address with a prepended 4, while the latter uses a 1-based holding register address with a prepended 4. For interfacing with Red Lion, inputting a 1-based ordinal address of 101 (or potentially 100) in the Elementtext box is recommended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
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
            <p>Dealing with Modbus communication protocol can be difficult at times. To troubleshoot, it helps to simplify by focusing on basic principles. Start by identifying a single known value that you are confident is correct. By converting this value to hexadecimal using a Windows calculator set to Programmer mode, you can compare it to the Modbus registers surrounding it. Look for patterns in the hexadecimal representations to identify any possible matches. The order of bytes or words may be different than expected, but a pattern should still emerge. Once you identify the pattern, you can adjust the settings in the HMI software accordingly.

Using hexadecimal values is beneficial in this process. For example, the value DB in hexadecimal is equivalent to 239 in decimal, while BD is 189. The pattern may not be as obvious in decimal, but in hexadecimal, it becomes more apparent. By utilizing hexadecimal values, you can better analyze and interpret the data in the Modbus communication and make necessary adjustments to ensure proper functioning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the Zebra RFID - Modbus TCP manual, it is stated that the FX9600 Reader supports Big-Endian Data format for all Modbus operations. This means that the high byte, bits [15:8], will be the first of two consecutive characters (bytes) in a word. It is important to ensure that the Modbus Software (Server) is loaded onto the RFID device. 

Additionally, the Zebra manual convention prefaces the 4 for 0-based holding register addresses, while the Red Lion interface convention prefaces the 4 for 1-based holding register addresses. Therefore, when inputting the Elementtext box in Red Lion, it is recommended to use a 1-based ordinal address of 101.

Note 1: It may also be possible to use 100, but this is doubtful. It is important to note that the feature is documented at register 40100, and while Red Lion adds an extra "0" in the register, it is likely done to allow access to all 65,536 values.

Overall, it is crucial to have the correct settings in place for successful communication. In Red Lion, configuring the Zebra as Modbus TCP Slave is essential for proper functionality. The Zebra Modbus documentation states that the FX9600 can support one MASTER, indicating that the Red Lion must act as the MASTER and the Zebra as the SLAVE. Setting up a Modbus TCP SLAVE configuration for the Zebra would be the logical step. Thank you for your time and assistance in this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bschuhma</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>BryanG's insight on Modbus difficulties is spot on. Returning to basics is key - having just one correct value can unlock the system. By setting the Windows calculator to Programmer mode and entering the known decimal value, the corresponding Hex representation can be revealed. Comparing Modbus registers and adjacent values also in Hex can expose patterns that indicate a match. Recognizing how the data differs from expectations allows for adjustments in the HMI software. Understanding the significance of Hex is crucial, as it highlights patterns that may not be as apparent in Decimal. Bret, thank you for the feedback and I look forward to trying out these debugging strategies!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bschuhma</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize Modbus communication between Zebra and Red Lion devices, ensure that the Zebra device is set as the Modbus Slave/Server and the Red Lion devices are configured as the Modbus Master/Client. It is crucial to input the Zebra device's IP address when setting up the Modbus Master/Client device on the Red Lion. If you cannot find a field for the target IP address in the Red Lion Modbus configuration, you may inadvertently be configuring the Red Lion as a Slave/Server.

The Zebra manual indicates that it can only communicate with one Master. To troubleshoot any communication issues, consider using a PC program with Modbus Master/Client capabilities and extensive diagnostic features. By successfully establishing communication between the PC program and the Zebra device, configuring the Red Lion device should become more straightforward. Avoid wasting time on deciphering cryptic Red Lion error messages by taking a proactive approach to problem-solving.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Zebra device should act as the Modbus Slave/Server, while the Red Lion devices should function as the Modbus Master/Client. When setting up the Modbus Master/Client device on the Red Lion, make sure to input the Zebra device's IP address. If there is no section in the Red Lion Modbus settings to input the target IP address, it may be configured as a Slave/Server. 

If the Red Lion is set as the SLAVE, this could be the reason why there is no IP address required (as it is localhost) and the connection appears to be working fine. The lack of register changes when searching for the EPC ID (tag id) in 400200 registers could also indicate that the Red Lion is functioning as the SLAVE.

The Zebra manual states that the Zebra can only communicate with one Master. Instead of adjusting the Red Lion settings and trying to decipher error messages, consider using a PC program that supports Modbus Master/Client communication and provides extensive diagnostics. Once you establish communication with the Zebra through Modbus using the PC program, configuring the Red Lion should become easier.

Simplifying the troubleshooting process by using a PC program sounds like a good approach. Good luck with your setup!

Thank you,
Bret</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bschuhma</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the recommended register configuration for integrating a Zebra FX9600 RFID reader with a Red Lion G10 using Modbus protocol?</h4>
<p class='text-muted'><strong>Answer:</strong> - The recommended register configuration for this integration involves placing the start inventory command and Handshake value in specific registers. It can be either in the 0th bit of register 400100 and bit 8 for Handshake, or the entire 400100 register for Inventory command and Handshake in register 400101.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How should the data blocks be set up on the Red Lion G10 for communication with the Zebra FX9600 RFID reader?</h4>
<p class='text-muted'><strong>Answer:</strong> - Since the Red Lion G10 supports word-size blocks, it is advisable to create a data block starting at 400100 with a length of 4 words for smooth communication with the Zebra FX9600 RFID reader.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are some common pitfalls or misconceptions when configuring Modbus protocol for device integration?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some common pitfalls include incorrect register configuration due to zero-based indexing, misunderstanding of where specific commands should be placed within registers, and overlooking the word-size block limitations of certain devices like the Red Lion G10. It's essential to have a clear understanding of Modbus protocol specifications to avoid such issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I ensure proper communication and data exchange between the Zebra FX9600 RFID reader and the Red Lion G10 using Modbus protocol?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure proper communication and data exchange, it is crucial to follow the recommended register configuration guidelines, address</p>
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
