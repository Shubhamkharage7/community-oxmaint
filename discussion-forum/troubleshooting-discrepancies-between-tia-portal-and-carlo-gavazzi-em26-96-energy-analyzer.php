
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! I have successfully established a connection in TIA Portal with a Carlo Gavazzi EM26-96 energy analyzer using Modbus RTU protocol. My main goal is to retrieve the total kWh data, which is located at modicon address 300063 according to the manual. In the MB_Master client, I have been">
    <meta name="keywords" content="tia portal, carlo gavazzi em26-96, energy analyzer, modbus rtu protocol, kwh data, mb_master client, address 400064, discrepancies, values, em screen, code, hourly kwh">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-discrepancies-between-tia-portal-and-carlo-gavazzi-em26-96-energy-analyzer">
    <title>Troubleshooting Discrepancies Between TIA Portal and Carlo Gavazzi EM26-96 Energy Analyzer | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Discrepancies Between TIA Portal and Carlo Gavazzi EM26-96 Energy Analyzer | Oxmaint Community">
    <meta property="og:description" content="Greetings! I have successfully established a connection in TIA Portal with a Carlo Gavazzi EM26-96 energy analyzer using Modbus RTU protocol. My main goal is to retrieve the total kWh data, which is located at modicon address 300063 according to the manual. In the MB_Master client, I have been">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-discrepancies-between-tia-portal-and-carlo-gavazzi-em26-96-energy-analyzer">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Discrepancies Between TIA Portal and Carlo Gavazzi EM26-96 Energy Analyzer | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! I have successfully established a connection in TIA Portal with a Carlo Gavazzi EM26-96 energy analyzer using Modbus RTU protocol. My main goal is to retrieve the total kWh data, which is located at modicon address 300063 according to the manual. In the MB_Master client, I have been">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-discrepancies-between-tia-portal-and-carlo-gavazzi-em26-96-energy-analyzer"
      },
      "headline": "Troubleshooting Discrepancies Between TIA Portal and Carlo Gavazzi EM26-96 Energy Analyzer",
      "description": "Greetings! I have successfully established a connection in TIA Portal with a Carlo Gavazzi EM26-96 energy analyzer using Modbus RTU protocol. My main goal is to retrieve the total kWh data, which is located at modicon address 300063 according to the manual. In the MB_Master client, I have been",
      "author": {
        "@type": "Person",
        "name": "AutoStudent88"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-24",
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
                <h1 class="text-white">Troubleshooting Discrepancies Between TIA Portal and Carlo Gavazzi EM26-96 Energy Analyzer</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AutoStudent88</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1019</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">242</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! I have successfully established a connection in TIA Portal with a Carlo Gavazzi EM26-96 energy analyzer using Modbus RTU protocol. My main goal is to retrieve the total kWh data, which is located at modicon address 300063 according to the manual. In the MB_Master client, I have been using address 400064 after several attempts, and it seems to be the correct address.

However, I am encountering a discrepancy between the values displayed on the EM screen and in TIA Portal. Despite this, I have created a simple code to calculate hourly kWh using the data fetched from TIA, yielding approximately 40 kWh/hr. On the other hand, the EM screen displays a value of around 103 kWh/hr.

I have noticed that when I use certain addresses, such as 400002 for V L1 and 400004 for V L2, everything seems to align properly. However, address 400006 does not provide V L3 as expected but instead shows V L1-L2. This discrepancy leads me to suspect that there may be a misalignment in the V L numbers.

Additionally, the values for kWh (+) L3 remain stagnant and have not incremented for the past two weeks, unlike L1 and L2 which continue to increase. Moreover, the kWh total and kWh partial addresses show identical values, which raises some concerns.

Could the DMD functionality and phase configurations of the energy analyzer be influencing the data interpretation in TIA Portal? I am seeking assistance in understanding why these discrepancies are occurring and if there are any solutions available from someone who may have encountered similar issues.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to access voltage values at addresses 400001, 400003, and 400005, as well as the counter value at address 400063, it is important to consider the format of Cavazzi registers. Make sure to read the Dint length when working with these registers. If you are reading in int format, be aware that the MSB value of the Dint may be missing. To address any byte swap issues, check readings at addresses 400002 and 400004, as there may be a problem with the byte order on the Siemens side. Please note that the byte order for Dint format can vary between manufacturers, potentially leading to incorrect byte ordering.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you reading register 400064 instead of 300063 as specified in the manual? Registers starting with 40* are Holding Registers while those starting with 30* are Analog Inputs. Is your Modbus client unable to read Analog Inputs?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For proper Modbus register mapping, either [3]xxxxx (Analog Inputs) or [4]xxxxx (Holding Registers) can be used effectively (refer to page 9, section 2.3). It is important to note that ODD 1-based Modbus addresses must be passed. For example, the 32-bit value representing 10*V L1-N includes the two 16-bit Holding Registers [4]00001 & [4]00002 (or [3]00001 and [3]00002).

When reading 32-bits starting at [4]00002, you are essentially reading the upper half (MSWord) of 10*V L1-N, and the lower half (LSWord) of 10*V L2-N. The maximum value for either of these values is 4850 (485 * 10), making the upper 16 bits 0, and the lower word non-zero. It is easy to mistakenly mix up the two halves if not careful.

When transferring data into a Siemens PLC like an S7-1200, which follows MSByte- and MSWord-first format, ensure to adjust for the LSWords-first format of devices like EM26-96. It is important to correctly interpret the data to avoid discrepancies in the values obtained.

To rectify LSWord-first Registers to MSWord-first, refer to the recommended approaches below. It is worth noting that byte order within register words is not significant, as Siemens and Carlo Gavazzi have properly implemented their Modbus drivers to handle the conversion seamlessly.

The provided Modbus Server and TIA Modbus Client code can be used to swap register words and reassemble them into 32-bit DWords. Different approaches may be applied depending on the desired outcome, with some requiring fewer instructions for efficient execution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you so much for the responses received! I am truly grateful for the assistance provided. I want to clarify that I am utilizing DINT as the data format according to the manual. I have set the data length to 10 in order to display 5 DINT addresses ahead. Therefore, when I read address 400001, the values displayed should be 40000-1/3/5/7/9, correct? The physical screen shows fluctuating values such as V L1-N 236.7, V L2-N 236.2, V L3-N 239.5, V L1-L2 409.1, V L2-L3 408.9, and V L3-L1 409.3. Despite the constant slight fluctuations, the values are relatively close when divided by 10. Should I consider reading it as a Dword and experimenting with byte swapping to analyze the data further, or could there be another factor at play here? Your input is greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutoStudent88</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There seems to be some byte swapping happening in that data. It appears that you are interested in extracting the first and fourth bytes, which equate to 273770031. This puts you within 3.9kWh of the meter reading, assuming the final digit represents a decimal point.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Puddle</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Converting data to hexadecimal format can make comparisons easier. Simply paste the hex value into an online converter or calculator to determine which bytes are swapped. Typically, the least significant 3 and 1 bytes are swapped, resulting in a close but not exact match.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of PLC programming, there is a significant difference between how Allen-Bradley and Siemens handle register word swapping. While Allen-Bradley can achieve this in just two efficient instructions, Siemens often requires six overly-complicated steps due to a tendency towards unnecessary complexity. However, a more streamlined method involving an additional instruction can be implemented. By utilizing the "at slicing command" within an FC block, byte swapping can be accomplished without the need for an extra DB-memory area. This approach offers a more concise and efficient solution for engineers and programmers working with Siemens PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare mentioned that Byte swapping can also be done using the "at slicing command" within the FC block. While another DB-memory area is still required, only two instructions are necessary. Word slicing serves as an intriguing alternative to A-B's BTD, offering a solution that is suitable for various applications. In this case, Wordswapping is essential, not Byteswapping, as the Byte swapping process is handled by the Modbus drivers. Through slicing, there is no need for a DB-memory area, allowing direct writing to the high and low words of the 32-bit integer TheTag using the syntax TheTag.%W1 and TheTag.%W0.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using SCL in PLC programming, there are various options available for the swap function such as swap_word() and swap_dint(). It is uncertain if these equivalent instructions are also available in LAD programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rob...</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AutoStudent88 mentioned that they are reading DINT data format in the manual. They have set the data length to 10 so they can view 5 addresses of DINT ahead. When reading 400001, it should display 40000-1/3/5/7/9. The data displays all the bits of each pair ([400001,400002], [400003,400004[, etc.), but due to word swapping, the interpreted value from the bits is incorrect.

AutoStudent88 pointed out that when dividing the value from TIA by 10, it is close to the expected value. However, users should be cautious as they might be misled by values that appear close to the expected ones. This is because they are using the upper half of one 32-bit integer with the lower half of an unrelated 32-bit integer.

To clarify, all INT32s in EM26-96 start on odd values of MB_DATA_ADDR, and any values derived from [even-first, odd-second] register pairs are irrelevant. AutoStudent88 questioned whether they should read it as Dword and try swapping around words to see the results.

It is suggested to swap the words, not the bytes, and read it as words to make swapping easier. The attached image demonstrates the correct retrieval of 16-bit words from registers 400063 and 400064, but in a reversed order.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AutoStudent88 expressed gratitude for the helpful responses received. The readings from address 400001 indicate the following voltage values on the physical screen: V L1-N 236.7V, V L2-N 236.2V, and V L3-N 239.5V. The values are fluctuating slightly. When reading address 400063, the displayed values on the physical screen also vary. By dividing the values from TIA by 10, a close approximation is obtained. It is suggested to consider reading it as Dword and experimenting with swapping bytes to determine the accurate readings. The value on register 400063, when converted to hexadecimal and back to decimal, equates to 273,765,860. Similarly, for register 400001, the value converts to 235.9V after swapping bytes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy acknowledged his error and expressed humility, realizing that only two instructions are needed after all. Word slicing presents an intriguing alternative to A-B's BTD and is suitable for government applications. The essential tool needed by the OP is Word swapping, not Byte swapping, as Byte swapping is handled by the Modbus drivers. The use of TheTag.%W1 and TheTag.%W0 allows for direct writing to the high and low words of the 32-bit integer TheTag without the need for a DB-memory area. As shown in the link provided, AT overlay variables on FC/FB blocks can be used for both input and output parameters. This method is similar to using .%W0 and %W1, but still requires two move blocks for conversion within the FC block. AT overlaying involves using a different type and symbol name for the original variable, while %W follows a more traditional addressing method. For more information, refer to the link: https://support.industry.siemens.com/cs/af/en/view/57132240.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Once again, I was able to make it work with your assistance. Thank you for all your help!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutoStudent88</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the discrepancies between the values displayed on the Carlo Gavazzi EM26-96 energy analyzer screen and in TIA Portal?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discrepancies could be due to misalignment in the addressing used in TIA Portal compared to the Modbus addresses mentioned in the manual for the energy analyzer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I ensure the correct Modbus addresses are used for retrieving data from the Carlo Gavazzi EM26-96 energy analyzer in TIA Portal?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Double-check the Modbus addresses specified in the manual of the energy analyzer and ensure they align correctly with the addresses being used in TIA Portal for data retrieval.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why do some addresses in TIA Portal provide unexpected data, such as 400006 showing V L1-L2 instead of V L3?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The unexpected data could be a result of misconfigured addressing or potential issues with the interpretation of phase configurations in the energy analyzer, impacting the data fetched in TIA Portal.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What could be the reason behind stagnant kWh values for L3 while L1 and L2 continue to increment?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The stagnant kWh values for L3 could be influenced by the DMD functionality or phase configurations of the energy analyzer, potentially causing discrepancies in data interpretation between TIA Portal and the actual readings on the energy analyzer screen.</p>
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
