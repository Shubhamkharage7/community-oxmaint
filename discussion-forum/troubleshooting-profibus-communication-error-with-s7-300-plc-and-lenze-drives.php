
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Our system consists of an S7-300 PLC (6ES7317-2AK14-0AB0) connected to 6 profibus slaves, including 3 Lenze drives and 3 IM modules. The node addresses are 3, 4, and 5 for the Lenze drives, and 10, 20, and 21 for the IM modules. Everything was running smoothly until a sudden">
    <meta name="keywords" content="profibus communication error, s7-300 plc, lenze drives, im modules, troubleshooting profibus, node addresses, communication issues, gsd file, dp slave types, im module configuration, profibus troubleshooting, sudden communication loss">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-profibus-communication-error-with-s7-300-plc-and-lenze-drives">
    <title>Troubleshooting Profibus Communication Error with S7-300 PLC and Lenze Drives | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Profibus Communication Error with S7-300 PLC and Lenze Drives | Oxmaint Community">
    <meta property="og:description" content="Our system consists of an S7-300 PLC (6ES7317-2AK14-0AB0) connected to 6 profibus slaves, including 3 Lenze drives and 3 IM modules. The node addresses are 3, 4, and 5 for the Lenze drives, and 10, 20, and 21 for the IM modules. Everything was running smoothly until a sudden">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-profibus-communication-error-with-s7-300-plc-and-lenze-drives">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Profibus Communication Error with S7-300 PLC and Lenze Drives | Oxmaint Community">
    <meta name="twitter:description" content="Our system consists of an S7-300 PLC (6ES7317-2AK14-0AB0) connected to 6 profibus slaves, including 3 Lenze drives and 3 IM modules. The node addresses are 3, 4, and 5 for the Lenze drives, and 10, 20, and 21 for the IM modules. Everything was running smoothly until a sudden">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-profibus-communication-error-with-s7-300-plc-and-lenze-drives"
      },
      "headline": "Troubleshooting Profibus Communication Error with S7-300 PLC and Lenze Drives",
      "description": "Our system consists of an S7-300 PLC (6ES7317-2AK14-0AB0) connected to 6 profibus slaves, including 3 Lenze drives and 3 IM modules. The node addresses are 3, 4, and 5 for the Lenze drives, and 10, 20, and 21 for the IM modules. Everything was running smoothly until a sudden",
      "author": {
        "@type": "Person",
        "name": "aamirawan91"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-14",
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
                <h1 class="text-white">Troubleshooting Profibus Communication Error with S7-300 PLC and Lenze Drives</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">364</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">53</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Our system consists of an S7-300 PLC (6ES7317-2AK14-0AB0) connected to 6 profibus slaves, including 3 Lenze drives and 3 IM modules. The node addresses are 3, 4, and 5 for the Lenze drives, and 10, 20, and 21 for the IM modules. Everything was running smoothly until a sudden profibus communication error halted operations. Despite efforts to troubleshoot by checking cables, connectors, and replacing components like the IM module and CPU, the issue persists. 

Upon closer inspection, it was discovered that the physical IM modules differ from the ones configured in the uploaded program. This mismatch raises questions about their ability to communicate successfully and raises concerns about the sudden loss of communication with the drives and IM modules. Additionally, discrepancies in the GSD file order numbers and DP slave types further complicate the situation.

This situation presents several challenges: 
1. Can IM modules communicate effectively with a different configured order number than the physical one?
2. If not, why were they able to communicate before the issue occurred?
3. Why did the drives and IM module (node 20) lose communication after downloading the program from the PLC, despite only node 21 experiencing issues previously?

These questions highlight the complexity of the situation and the need for a comprehensive solution to restore seamless communication and functionality within the system.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Most profibus problems are related to cable issues, specifically with the cable ends. Reconnecting the end terminals can often resolve the issue. When you mention that you have "checked" the connection, can you specify what that entails?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During our inspection, we measured the profibus loop resistance, which was determined to be 110 ohms. This measurement was conducted individually at each station and also after isolating a section, revealing a resistance of 220 ohms. Can you provide insight into the potential configuration mismatch causing this discrepancy and explain why the system was still operational?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lack of etiquette can lead to negative outcomes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent inspection, we measured the profibus loop resistance and found it to be 110 ohms. After further testing at each station individually and disconnecting a certain section, we found the resistance to be 220 ohms. This discrepancy may be due to a configuration mismatch, but it's important to note that even with such issues, the system may still function. 

According to Ken, many PROFIBUS problems, especially in older machines, are often caused by faulty media. This can be attributed to an excessive number of terminators, as well as issues with connectors and devices that have built-in resistors. In some cases, nodes in the middle of the segment may become improperly terminated, leading to connectivity issues. 

To troubleshoot this, it's recommended to carefully inspect each PROFIBUS connector to ensure the cable shield is properly connected and that the screws for the red and green lines are securely fastened. Loose connections could result from improper installation or vibrations over time. By addressing these potential issues, you can prevent further disruptions in your system's functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Moore emphasized the importance of good manners leading to positive responses. As a non-native English speaker, I want to clarify that my intention was simply to seek assistance without any rudeness or disrespect. I apologize if my message came across differently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Alfredo Quintero highlighted the common PROFIBUS issues highlighted by Ken, particularly in older machines which are often attributed to poor media quality. One common issue is having too many terminators along the segment. Certain Profibus connectors and devices with built-in resistors may allow nodes in the middle to be terminated, disrupting the segment connectivity. It is crucial to ensure that every PROFIBUS connector is properly checked to confirm that the cable shield is securely connected and that the red and green line screws are tightly fastened. Loose connections could result from improper commissioning or vibration.

Thank you for your input, Alfredo Quintero. Despite thorough checks on the profibus loop and terminators, concerns remain regarding the communication loss with Lenze drives after reprogramming the PLC. It is suspected that the GSD files may have caused this issue, affecting the communication when the program was downloaded back to the PLC. Visual reference to the online status of the drives GSD files in the HW configuration has been attached for further analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the event that the GSD files become mixed up after uploading the program, it poses a separate issue. It is crucial to ensure that the part number on the product label matches the one used in the Simatic 7 program and all modules. Additionally, confirming that the selected firmware version aligns with the device's actual version is essential. When considering if IM modules can communicate with different configured order numbers, it is unlikely. To gain insight into communication issues, accessing information from the diagnostic buffer of the problematic devices is advisable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Problem resolved! Here's the explanation: When the program was uploaded, the gsd files were not installed in the Simatic Manager, causing communication to be lost when the program was downloaded back to the PLC. This happened because the drives were not configured without the necessary gsd files in the new program. By installing the gsd files and manually configuring them, I was able to establish communication with the PLC again. It is essential to ensure the gsd files are installed in your software before downloading any uploaded program. TIA Portal, being advanced software, will provide a warning if the gsd files are missing, unlike Simatic. If you download a program back to the PLC without the required gsd files, you will encounter issues unless you locate and manually configure them in your HW config.

In addition, IM modules do not have to match the exact order number. For example, the 6ES7151-1AA01-0AB0 module can work with order numbers ranging from 1AA01 to 1AA06, which is why they were functioning correctly before.

The root of the problem was identified as a profibus connector in station 20 and a module in station 21.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for sharing your solution to assist others in need. It's important to note that while your approach worked with the IM modules, it may not apply universally to all devices. In some cases, like with certain Profibus devices such as Sinamics drives, exact catalog numbers and even serial numbers may be required. This can lead to complications when trying to replace a faulty drive module, especially if the OEM has not adjusted the default settings. Resolving these issues can be challenging due to software version conflicts, as experienced in this specific situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After experiencing communication issues with a program in our Simatic manager, we discovered that the problem stemmed from not having the necessary gsd files installed. Without these files, downloading the program back to the PLC resulted in lost communication because the drives were not configured correctly. Once we installed the gsd files and manually configured them, we were able to establish communication with the PLC again. To avoid similar issues, ensure that the gsd files are installed in your software before downloading any programs. TIA Portal software provides warnings if gsd files are missing, unlike Simatic. Double-check hardware configurations online to verify all settings are correct before uploading programs to avoid any complications. Consider using the network configuration tool to check settings, especially if using TCP or UDP protocols, to ensure successful communication with the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>aamirawan91 confirmed that the issue has been successfully resolved. See below for the detailed explanation. Click to expand for more information. This development is truly fantastic! We greatly appreciate you for sharing the solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Can IM modules communicate effectively with a different configured order number than the physical one?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: IM modules may face communication issues if the configured order number in the program does not match the physical module. It is essential for proper communication that the configured settings align with the physical setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  If not, why were they able to communicate before the issue occurred?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The successful communication prior to the issue might be due to temporary compatibility or other factors. However, discrepancies in configuration can lead to communication errors, which might explain the sudden halt in operations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why did the drives and IM module (node 20) lose communication after downloading the program from the PLC, despite only node 21 experiencing issues previously?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Changes in the program or configurations during download can impact communication with different nodes. The specific impact on node 20 could be related to how the changes affected the overall network communication setup.</p>
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
