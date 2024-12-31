
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently utilizing the MobusFB library in order for Codesys to function as the client for a Mobdus TCP server. I have successfully tested the Mobdus TCP server using MBPOLL, for which I have obtained a license and verified the servers functionality. However, I am encountering an">
    <meta name="keywords" content="modbusfb, codesys, troubleshooting, modbus tcp server, mbpoll, holding registers, eerrorid, request not processed, license, usb dongle, modbus queries, wireshark, socket connection, examples">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modbusfb-in-codesys-request-not-processed-issue">
    <title>Troubleshooting ModbusFB in CODESYS: Request Not Processed Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting ModbusFB in CODESYS: Request Not Processed Issue | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently utilizing the MobusFB library in order for Codesys to function as the client for a Mobdus TCP server. I have successfully tested the Mobdus TCP server using MBPOLL, for which I have obtained a license and verified the servers functionality. However, I am encountering an">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modbusfb-in-codesys-request-not-processed-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting ModbusFB in CODESYS: Request Not Processed Issue | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently utilizing the MobusFB library in order for Codesys to function as the client for a Mobdus TCP server. I have successfully tested the Mobdus TCP server using MBPOLL, for which I have obtained a license and verified the servers functionality. However, I am encountering an">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modbusfb-in-codesys-request-not-processed-issue"
      },
      "headline": "Troubleshooting ModbusFB in CODESYS: Request Not Processed Issue",
      "description": "Hello, I am currently utilizing the MobusFB library in order for Codesys to function as the client for a Mobdus TCP server. I have successfully tested the Mobdus TCP server using MBPOLL, for which I have obtained a license and verified the servers functionality. However, I am encountering an",
      "author": {
        "@type": "Person",
        "name": "AlfredoQuintero"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-15",
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
                <h1 class="text-white">Troubleshooting ModbusFB in CODESYS: Request Not Processed Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">675</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">179</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently utilizing the MobusFB library in order for Codesys to function as the client for a Mobdus TCP server. I have successfully tested the Mobdus TCP server using MBPOLL, for which I have obtained a license and verified the server's functionality. However, I am encountering an issue while attempting to read holding registers, as the eErrorID displays "Request not processed." I am curious as to why this is happening. Could it be necessary to activate an additional license on the USB dongle for this library to operate correctly? Upon monitoring in Wireshark, I can observe the CODESYS program establishing and maintaining the socket connection, yet no Modbus queries are being sent out to the network. Although I have been referring to examples provided by CODESYS, I find that they lack the necessary comments and guidance for someone new to this technology. Thank you for your assistance. Alfredo</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it necessary for the CODESYS Modbus function to have a rising edge in order to initiate the query, and if so, are you able to provide it?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Brian, for your comments and concern. I appreciate the feedback. I have attached a screenshot of my program, as requested. I am currently experiencing issues with the detection of licenses in my CODESYS program, which is installed on a PC with a USB dongle. Despite this, the program is not functioning in demo mode. Can you offer any suggestions on how to troubleshoot this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Check out this helpful resource on CODESYS Forge for resolving issues with Modbus Client requests. Visit the CODESYS Forge Engineering forum for more information on Modbus Client Request troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Parky, for your forum entry. I have gained some insights and will continue exploring further tomorrow. It's getting late here, so I'll pick up where I left off in the morning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Brian and Parky! I successfully converted a structured text sample program from Codesys' examples into ladder logic. Interestingly, there are not as many ladder examples available. I was able to make it work, although I had to incorporate a structured text box as I couldn't achieve the same functionality using ladder logic alone. I am eager to understand how to overcome this challenge. Feel free to take a look at the explanation below, and the project is attached for your review.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not very familiar with CODESYS, but it seems like it may involve in-line Structured Text (ST) coding. Usually, in most Integrated Development Environments (IDEs), you would create a Function Block (FB) or function that appears in the user functions or FB's. Have you checked if there is a function named something like "cliRecPtr" or if it could be a move function? It appears to be setting a pointer to the rClient that contains the pointer to clientTcp1. While I have not used in-line ST before, it seems like this is how CODESYS can execute in-line ST. I apologize for not being able to offer more assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you so much for the parky experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Alfredo,

As demonstrated in your example, CliRecPtr is a function pointer of type ModBusFb.ClientRequest. Specifically, it is initialized with the address of a specific instance: CliReqHolReq. The input to this function block is a variable named "clientTCP1."

This functionality is possible due to the following explanation found in the documentation: 

"FUNCTION_BLOCK ABSTRACTClientRequestReadRegisters EXTENDS ClientRequestRead FUNCTION_BLOCK ClientRequestReadHoldingRegisters EXTENDS ClientRequestReadRegisters"

I recommend calling this in LAD as depicted in the attached file. I also tested this with a simple linear transformation function block for comparison, which is shown in the attached image.

Please test it out and inform me of the results. Feel free to try both versions to ensure they produce the same outputs for the same inputs. Let me know if you have any questions or issues.

Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Pandiani: Hi there! Your assistance really made my day. I was adjusting the xExectute bit and other parameters in the client request instance, thinking it was necessary. However, I realized that the function is already pre-configured and now it's working smoothly without the execute block! It's clear that I still have a lot to learn about CODESYS. Thank you once again for your help.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Alfredo, thank you for your assistance. If you have a moment, could you please provide the final test project along with detailed instructions on how to utilize it? I am planning to work on a project involving Modbus communication in the near future, and this example could serve as a valuable resource for getting started. Your project demonstrates the use of Modbus as a client and a Modbus TCP server, which requires a third-party software that may require an additional license for usage. Did you need to purchase a license from Codesys to use the Modbus client functionality? Sharing this information would greatly benefit not only myself but also other members of this community. Thank you for your help in advance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Pandiani, I am more than willing to assist with your request. Although it is currently late and I have a busy week ahead, I plan on dedicating some time over the weekend to make some updates on the program. I will include comments, create a simple technote in PDF format, and share it so that you and others can easily utilize the program and avoid any difficulties. In the meantime, I will address any questions you may have.

This program operates using CODESYS as a Modbus TCP client. I am utilizing the standard runtime license, which does not require any additional licenses. However, it is important to have a license as CODESYS will revert to demo mode after 1 hour or 90 minutes. I personally prefer licensed versions. While I have not tested it on RaspberryPi, I am confident it will function effectively. I will also include a screenshot on RaspberryPi in the technote. The current screenshot showcases a dongle with an EtherNet/IP adapter, which I occasionally use with CODESYS. However, it is not necessary for Modbus FBs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you so much for your generosity!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Pandiani expressed his gratitude to Alfredo and requested that he attach the final test project with instructions on how to use it. He mentioned his upcoming project involving Modbus communication, which he is unfamiliar with, and believes Alfredo's example could serve as a valuable GettingStarted guide. The example project utilizes Modbus as a client and Modbus TCP server, requiring additional third-party software that may need a separate license. Pandiani inquired if a license from Codesys is necessary to use the Modbus client. He believes this information would be helpful not just for himself but for other forum members as well. It's recommended to easily integrate a Modbus TCP Master or Slave under the Ethernet Device in the tree without the need for additional programming. However, there may be limitations to consider in certain situations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>durallymax suggested that it is more convenient to incorporate a Modbus TCP Master or Slave within the Ethernet Device in the tree, eliminating the need for additional logic. However, there are situations where this may not be the best option or may not be supported. Hello durallymax, thank you for your input. I attempted this method but was unable to make it work or locate an example. Although I believe this would be a superior solution, I am perplexed as to why CODESYS does not offer a sample for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Pandiani expressed gratitude to Alfredo and requested the submission of a final test project with additional guidance on its usage. As Pandiani plans to work on a project involving Modbus communication, the provided example could serve as a helpful GettingStarted reference, considering Pandiani's lack of familiarity with Modbus. The example project showcases Modbus usage as a client and Modbus TCP server, with the latter requiring a separate license from a third-party software provider. Pandiani inquired about the necessity of purchasing a Codesys license for using Modbus as a client. This information would not only benefit Pandiani but also other forum members. Alfredo responded by incorporating requested comments and removing unnecessary variables from the project. This revised document aims to be informative for Pandiani and all those interested in Modbus implementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Alfredo! I am grateful for your help and am confident that the tools you provided will greatly increase my efficiency when starting my projects. Best regards!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pandiani</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I receiving the "Request not processed" error when trying to read holding registers using ModbusFB in CODESYS?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The "Request not processed" error could indicate various issues such as incorrect configuration settings, communication problems, or licensing issues. It is essential to troubleshoot each of these potential causes to identify the root of the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Do I need to activate an additional license on the USB dongle for the ModbusFB library to operate correctly in CODESYS?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Activating an additional license on the USB dongle may or may not be necessary for the proper operation of the ModbusFB library. It is recommended to check the licensing requirements for the library and ensure that all necessary licenses are in place.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why are no Modbus queries being sent out to the network even though the CODESYS program establishes and maintains the socket connection?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The lack of Modbus queries being sent out to the network could be due to configuration errors, communication settings, or other issues within the CODESYS program. It is advisable to review the program logic, network settings, and communication parameters to identify the cause of this issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I find more guidance and comments on using the ModbusFB library in CODESYS, especially for beginners?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the provided examples by CODESYS lack the necessary comments and guidance for beginners, you may consider referring to additional resources such</p>
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
