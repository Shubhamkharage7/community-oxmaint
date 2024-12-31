
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am working on integrating a Yokogawa Hart pressure Transmitter and a Rosemount Temp Transmitter with a 1769-IF4 module on an L33ERM CompactLogix. Currently, the transmitters are not displaying any readings and the module is showing an Undervalue error code. I have programmed the transmitters to scale between">
    <meta name="keywords" content="yokogawa hart pressure transmitter, rosemount temp transmitter, 1769-if4 module, l33erm compactlogix, undervalue error code, 4-20ma scaling, 250 ohm resistor, hart">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-yokogawa-hart-and-rosemount-temp-transmitters-on-1769-if4-module-in-compactlogix">
    <title>Troubleshooting Yokogawa Hart and Rosemount Temp Transmitters on 1769-IF4 Module in CompactLogix | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Yokogawa Hart and Rosemount Temp Transmitters on 1769-IF4 Module in CompactLogix | Oxmaint Community">
    <meta property="og:description" content="Hello, I am working on integrating a Yokogawa Hart pressure Transmitter and a Rosemount Temp Transmitter with a 1769-IF4 module on an L33ERM CompactLogix. Currently, the transmitters are not displaying any readings and the module is showing an Undervalue error code. I have programmed the transmitters to scale between">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-yokogawa-hart-and-rosemount-temp-transmitters-on-1769-if4-module-in-compactlogix">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Yokogawa Hart and Rosemount Temp Transmitters on 1769-IF4 Module in CompactLogix | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am working on integrating a Yokogawa Hart pressure Transmitter and a Rosemount Temp Transmitter with a 1769-IF4 module on an L33ERM CompactLogix. Currently, the transmitters are not displaying any readings and the module is showing an Undervalue error code. I have programmed the transmitters to scale between">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-yokogawa-hart-and-rosemount-temp-transmitters-on-1769-if4-module-in-compactlogix"
      },
      "headline": "Troubleshooting Yokogawa Hart and Rosemount Temp Transmitters on 1769-IF4 Module in CompactLogix",
      "description": "Hello, I am working on integrating a Yokogawa Hart pressure Transmitter and a Rosemount Temp Transmitter with a 1769-IF4 module on an L33ERM CompactLogix. Currently, the transmitters are not displaying any readings and the module is showing an Undervalue error code. I have programmed the transmitters to scale between",
      "author": {
        "@type": "Person",
        "name": "KochTech"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-17",
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
                <h1 class="text-white">Troubleshooting Yokogawa Hart and Rosemount Temp Transmitters on 1769-IF4 Module in CompactLogix</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>KochTech</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">495</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">76</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am working on integrating a Yokogawa Hart pressure Transmitter and a Rosemount Temp Transmitter with a 1769-IF4 module on an L33ERM CompactLogix. Currently, the transmitters are not displaying any readings and the module is showing an "Undervalue" error code. I have programmed the transmitters to scale between 4-20mA within the specified process values. Despite trying a 250 ohm resistor in series on each polarity side during testing, I have not seen any improvement in the values. While I am aware that these cards do not natively support Hart communication, I am curious if there are any innovative solutions to establish a connection. Any advice would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The 250 ohm resistor is not necessary as the module already includes the load. Refer to the PDFs for different wiring options and information on input load impedance. How is your setup currently wired?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mickey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Hart protocol transmitters feature a low pass capacitor that needs 250 ohms of resistance. While the 1769-IF8H cards typically require this, the specific model I have does not. Make sure to connect "V/I 0-" to the Transmitter terminal and "I in 0+" to the + Transmitter terminal for proper functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KochTech</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for the source of the 24Vdc power supply for the field transmitters? Check out Mickey's second attachment, which features a diagram of the DC power supply and wiring of the 2-wire transmitters. The first attachment also confirms that the module offers an input impedance of 250 Ohms.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Initially, I supplied power to the transmitters using the 24v provided by the card. Subsequently, I attempted to power them with a 24v Sola DC power supply after switching the power supply setting on the IF4 card to "external power source". Unfortunately, this adjustment did not yield any noticeable changes in the operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KochTech</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are utilizing the transmitter in a 4-20mA setup without requiring the Hart protocol, you can easily use any 4-20mA input card without the need for additional circuitry. The Hart protocol essentially adds frequency modulation to the 4-20mA signal. According to KochTech, the lack of display activation on the transmitters indicates a lack of 24V supply. KochTech also mentioned programming the transmitters/sensors to calibrate 4-20mA within specified process values. How this was accomplished without a functioning display remains a mystery. To troubleshoot, first check if there is a 24V supply to the transmitter. If confirmed, proceed to measure with a standard DC ammeter to ensure a signal falls within 4-20mA range. The presence or absence of a working mA signal can help identify whether the issue lies with the transmitter or the PLC. Provide the precise type numbers of the transmitters for further assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>KochTech mentioned that they initially powered the transmitters using the 24v supplied by the card, but then attempted to use a 24v Sola dc power supply after switching the power supply switch on the IF4 card to "external power source". Unfortunately, this change did not make any difference. To better visualize the connections, consider creating a small sketch of your connection diagram both with and without the external power supply. Don't forget to connect the ground from the external power supply. For troubleshooting purposes, try bypassing the PLC and directly connecting to the transmitters. Use an ammeter to measure the output on the transmitter to the ground on the power supply.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP mentioned that if you are using a 4-20mA transmitter without the need for the Hart protocol, you can utilize any 4-20mA input card without requiring any special circuitry. The Hart protocol functions as frequency modulation on top of the 4-20mA signal, indicating a lack of 24V supply to the transmitters. To troubleshoot this, check if there is a 24V supply to the transmitter and use a regular DC ammeter to measure the signal, which should fall within the 4-20mA range. This will help determine if the issue lies with the transmitter or the PLC. Provide the specific transmitter model numbers for further assistance.

KochTech is seeking guidance on connecting a Yokogawa Hart pressure Transmitter and a Rosemount Temp Transmitter to a 1769-IF4 module on an L33ERM CompactLogix. Despite programming the transmitters/sensors to scale 4-20mA within the desired process values, the displays do not activate, and the card displays "Undervalue." While these cards do not inherently support Hart communication, there may be unique methods to establish a connection. 

One solution involves connecting +24V (from Sola) to the Transmitter, +/- 24V (from Sola) to 1769-IF4, and jumpering V/I in 0 - Anlg Com to V/I in 0.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KochTech</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>"Convert -24 V (Sola) to 1769-IF4 V/I within the range of 0+"</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TWS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are using a 250 ohm resistor with a 4-20 mA input, you can accurately measure voltage between 1 to 5 volts. If the voltage falls outside of this range, it indicates a potential issue. Make sure to verify that your wiring matches the diagram provided by Mickey for proper installation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>He successfully identified the issue - it seems that there was a mistake in how the power supply was connected. The analog PLC card requires an external power source to function properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why are my Yokogawa Hart and Rosemount Temp Transmitters not displaying any readings on the 1769-IF4 module in CompactLogix?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The "Undervalue" error code indicates an issue with the readings. Ensure that the transmitters are programmed correctly to scale between 4-20mA within the specified process values.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be the reason for not seeing any improvement in values despite using a 250 ohm resistor in series on each polarity side during testing?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the values are not improving with the resistors, there may be other underlying issues affecting the communication between the transmitters and the module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a way to establish a connection with Yokogawa Hart and Rosemount Temp Transmitters on a 1769-IF4 module, even though they do not natively support Hart communication?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While the module may not natively support Hart communication, there might be innovative solutions or workarounds available to establish a connection. Consulting the manufacturers or seeking expert advice could help in finding alternative methods.</p>
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
