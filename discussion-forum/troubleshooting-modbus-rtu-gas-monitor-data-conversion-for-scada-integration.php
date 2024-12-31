
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently facing a challenge and would appreciate some assistance. I am working with an Allen Bradley Compact Logix PLC (5069-L320ER) and am utilizing a Prosoft Gateway (PLX31-EIP-MBS) to read Modbus RTU data from a gas monitor (RKI 410A). The gas monitors manual specifies that the gas">
    <meta name="keywords" content="modbus rtu, gas monitor, data conversion, scada integration, allen bradley compact logix plc, prosoft gateway, rki 410a, oxygen registers, dint tag, ascii characters, decimal value, igs driver, sc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-rtu-gas-monitor-data-conversion-for-scada-integration">
    <title>Troubleshooting Modbus RTU Gas Monitor Data Conversion for SCADA Integration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Modbus RTU Gas Monitor Data Conversion for SCADA Integration | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently facing a challenge and would appreciate some assistance. I am working with an Allen Bradley Compact Logix PLC (5069-L320ER) and am utilizing a Prosoft Gateway (PLX31-EIP-MBS) to read Modbus RTU data from a gas monitor (RKI 410A). The gas monitors manual specifies that the gas">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-rtu-gas-monitor-data-conversion-for-scada-integration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Modbus RTU Gas Monitor Data Conversion for SCADA Integration | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently facing a challenge and would appreciate some assistance. I am working with an Allen Bradley Compact Logix PLC (5069-L320ER) and am utilizing a Prosoft Gateway (PLX31-EIP-MBS) to read Modbus RTU data from a gas monitor (RKI 410A). The gas monitors manual specifies that the gas">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-rtu-gas-monitor-data-conversion-for-scada-integration"
      },
      "headline": "Troubleshooting Modbus RTU Gas Monitor Data Conversion for SCADA Integration",
      "description": "Hello, I am currently facing a challenge and would appreciate some assistance. I am working with an Allen Bradley Compact Logix PLC (5069-L320ER) and am utilizing a Prosoft Gateway (PLX31-EIP-MBS) to read Modbus RTU data from a gas monitor (RKI 410A). The gas monitors manual specifies that the gas",
      "author": {
        "@type": "Person",
        "name": "Leeisfishing"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-12",
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
                <h1 class="text-white">Troubleshooting Modbus RTU Gas Monitor Data Conversion for SCADA Integration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Leeisfishing</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">442</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">290</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently facing a challenge and would appreciate some assistance. I am working with an Allen Bradley Compact Logix PLC (5069-L320ER) and am utilizing a Prosoft Gateway (PLX31-EIP-MBS) to read Modbus RTU data from a gas monitor (RKI 410A). The gas monitor's manual specifies that the gas reading channel is in ASCII characters.

Specifically, I am extracting 2 Oxygen registers from the RKI 410A and merging them into a DINT tag named O2_PCT within the PLC. Initially, when I set the style for the O2_PCT tag in the PLC to ASCII, I am able to read the accurate value of 20.9. Everything appears to be functioning correctly at this point.

However, when attempting to transfer this value to the SCADA iFix database through the IGS driver, the decimal value of 842018361 is being displayed instead of 20.9. I am seeking guidance on how to convert the PLC value of 842018361 so that the SCADA system can interpret it as 20.9. After using an online Decimal to ASCII converter, it suggested that 50484657 represents 20.9, leaving me a bit perplexed.

Any insights on this matter would be greatly appreciated. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Understanding the ASCII characters, bytes, and integer values is essential in various applications. For instance, the ASCII string "20.9" is made up of four characters: '2', '0', '.', and '9'. These characters correspond to specific decimal and hexadecimal values. When converted, the integer value 842018361 in decimal translates to 32302E39 in hexadecimal. By separating each byte, you can observe the hexadecimal representation of the string as 32 30 2E 39. Converting these bytes back to decimal yields 50 48 46 57. 

Regardless of the scenario, the byte-wise values remain the same, highlighting the importance of correctly interpreting them. If you're dealing with ASCII data like an O2_PCT tag, ensuring that the SCADA system interprets it as ASCII is crucial. Alternatively, you may need to convert ASCII values from devices like pressure sensors into readable formats like floating point numbers or scaled integers. A helpful resource on converting ASCII to decimal can be found in a discussion on plctalk.net, where a user details converting a pressure sensor's HEX ASCII output into a readable pressure value like 26 PSI. This conversion was achieved using SLC 500, showcasing the versatility and importance of understanding ASCII conversions in various engineering and data interpretation tasks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jschulze</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Furthermore, as stated in the RKI Instruments Beacon 410A Operator's Manual, the gas reading in ASCII format is distributed across three registers. For instance, the gas reading is located in Registers 40011 to 40013, where six bytes (characters) house the channel gas reading in ASCII characters. For more information, you can refer to the manual here: https://www.instrumart.com/assets/RKI-Instruments-Beacon-410A-Manual.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jschulze</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to the 410A's Operator's Manual, the gas reading in ASCII format is spread across 3 registers. The interpretation involves understanding the ASCII characters, corresponding bytes, and integer values. For example, the ASCII string "20.9" consists of the characters '2', '0', '.', and '9'. These characters correspond to specific decimal and hexadecimal values. When converted, the integer value 842018361 in decimal becomes 32302E39 in hexadecimal. By separating each byte and converting them back to decimal, you get 50, 48, 46, 57. This process remains consistent byte-wise regardless of interpretation methods. To force the interpretation of values as ASCII instead of integer, adjustments may need to be made in the SCADA system or on the PLC side. Utilizing ladder logic or custom tagging within the IGS driver can facilitate this conversion process. Explore more on this topic in the following link: Converting ASCII to Decimal.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Leeisfishing</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Leeisfishing mentioned that the third register (40013) is identified as '%V' in ASCII format, which is unnecessary for SCADA purposes. Make sure that you are not encountering the common "off by 1" register addressing problem in Modbus. For more information on Modbus Register Numbering and how it varies among vendors, refer to this informative post on control.com.

Referencing the 410A manual, the following two registers after the gas reading pertain to the units, specifically registers 40014 and 40015. These registers store the channel gas units in ASCII characters within 4 bytes.

It is important to note that when reading three registers with included units, you could be accessing registers 40012 - 40014 (combining gas reading and units) instead of registers 40011 - 40013 (solely for gas reading). If the ProSoft gateway adopts 0-based Modbus register addressing, ensure to access holding registers 10 - 13 to correspond with the reference register numbers 40011 - 40013.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jschulze</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Did you check if you are encountering the common "off by 1" register addressing issue in Modbus protocol? Visit this informative post on Modbus Register Numbering to understand more about this recurring topic. Different Modbus vendors use varied numbering schemes in their documentation, so it's crucial to recognize and interpret them correctly. In the 410A manual, it is stated that the unit registers follow the gas reading registers. When reading three registers, you might be actually accessing registers 40012 - 40014 (gas reading and units), not 40011 - 40013 (gas reading only). If your ProSoft gateway uses 0-based Modbus register addressing, you should access holding registers 10 - 13, corresponding to register numbers 40011 - 40013. Keep in mind to be cautious of this issue, as it has been observed with other Prosoft gateways before.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Leeisfishing</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of SCADA systems, there is a possibility to create a custom tag in the IGS driver that can view PLC tags as ASCII instead of decimal format. It is important to note that data received from a Modbus slave is in the form of 16-bit integers. Each 16-bit integer consists of two 8-bit integers, which represent ASCII codes for the characters making up the numerical value in decimal form (e.g. "20.9"). One way to handle this is by interpreting the numerical value while building each 8-bit integer. Alternatively, you can extract and transfer the 8-bit integers into the elements of the .DATA[] SINT array attribute of a Logic to STRING object. You can find an example of this process in the Logic instruction set manual (1756-rm001...pdf), as well as set the length attribute of the string object.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Code initialization begins with setting the result to zero and defining the shift divider. The code then calculates the mask, decimal scale, and decimal multiplier. 

The program continues by processing the next character, manipulating the ASCII code, adjusting the shift and mask values accordingly. If the character is a decimal point with an ASCII code of 46, the decimal multiplier is set to 0.1. If the character is not a decimal point, the code interprets it as a decimal digit and performs the necessary calculations to update the result, decimal scale, and decimal multiplier.

These steps are repeated multiple times to handle subsequent characters. Finally, the code applies the decimal point by multiplying the result by the decimal scale.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of Modbus communications, the primary data type extracted from a slave device is the 16-bit integer. Within this integer, two individual 8-bit integers are encoded representing ASCII characters that form a decimal string such as "20.9." One method involves constructing the numerical value by interpreting each 8-bit integer. Alternatively, you can extract and transfer the 8-bit integers into the elements of the .DATA[] SINT array attribute of a Logic to STRING object. For more guidance on this process, refer to the Logic instruction set manual (1756-rm001...pdf) where an example can be found. Don't forget to also set the length attribute, .LEN, of the same string object for proper operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Leeisfishing</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The FD-4A 4 Gas Monitor is a durable and high-quality multigas detector designed for various applications, including confined spaces, marine environments, and agriculture. With its digital Modbus RTU communication, the FD-4A offers a more seamless integration with Allen Bradley Compact Logix PLC systems compared to other gas detectors on the market. This 4-gas monitor provides direct access to gas concentration values through its Modbus registers, eliminating the need for manual data conversion. Its factory-calibrated design and 1-year warranty ensure reliable performance, while its digital interface simplifies integration with SCADA systems using the IGS driver. By choosing the FD-4A from FORENSICS DETECTORS, you can streamline your gas detection processes and focus on efficiently incorporating monitoring into your control infrastructure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bryonycannon</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the decimal value of 842018361 being displayed in the SCADA system instead of the expected value of 20.9 for the gas monitor data?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discrepancy in values could be due to a conversion issue between ASCII characters and decimal values during data transfer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I convert the PLC value of 842018361 to be correctly interpreted as 20.9 in the SCADA system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve this issue, you may need to implement a proper conversion method, possibly involving converting ASCII characters to decimal values before transferring the data to the SCADA system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What is the significance of the online Decimal to ASCII converter suggesting that 50484657 represents 20.9 in relation to the gas monitor data integration?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The suggested value of 50484657 as representing 20.9 may indicate a potential clue for understanding the conversion process needed to accurately display the gas monitor data in the SCADA system. Further investigation and testing may be required to confirm this conversion method.</p>
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
