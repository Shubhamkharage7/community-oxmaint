
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently involved in multiple similar projects spanning various locations where existing PLCs are being replaced, primarily with Rockwell ControlLogix. The main reason for choosing this platform is because most OEMs for the associated machinery are willing to support code reviews and commissioning with Rockwell hardware. We have">
    <meta name="keywords" content="controllogix, plc replacement, rockwell hardware, code reviews, commissioning, io type preferences, traditional io, flex io, point io, technical justification, en2t module, prosoft modbus, 4-20/1-">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/best-io-type-preferences-for-controllogix-explained-by-experts">
    <title>Best IO Type Preferences for ControlLogix: Explained by Experts | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Best IO Type Preferences for ControlLogix: Explained by Experts | Oxmaint Community">
    <meta property="og:description" content="I am currently involved in multiple similar projects spanning various locations where existing PLCs are being replaced, primarily with Rockwell ControlLogix. The main reason for choosing this platform is because most OEMs for the associated machinery are willing to support code reviews and commissioning with Rockwell hardware. We have">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/best-io-type-preferences-for-controllogix-explained-by-experts">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best IO Type Preferences for ControlLogix: Explained by Experts | Oxmaint Community">
    <meta name="twitter:description" content="I am currently involved in multiple similar projects spanning various locations where existing PLCs are being replaced, primarily with Rockwell ControlLogix. The main reason for choosing this platform is because most OEMs for the associated machinery are willing to support code reviews and commissioning with Rockwell hardware. We have">
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
        "@id": "https://community.oxmaint.com/discussion-forum/best-io-type-preferences-for-controllogix-explained-by-experts"
      },
      "headline": "Best IO Type Preferences for ControlLogix: Explained by Experts",
      "description": "I am currently involved in multiple similar projects spanning various locations where existing PLCs are being replaced, primarily with Rockwell ControlLogix. The main reason for choosing this platform is because most OEMs for the associated machinery are willing to support code reviews and commissioning with Rockwell hardware. We have",
      "author": {
        "@type": "Person",
        "name": "UhOhNotAgain"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-20",
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
                <h1 class="text-white">Best IO Type Preferences for ControlLogix: Explained by Experts</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>UhOhNotAgain</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>38 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2065</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">75</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently involved in multiple similar projects spanning various locations where existing PLCs are being replaced, primarily with Rockwell ControlLogix. The main reason for choosing this platform is because most OEMs for the associated machinery are willing to support code reviews and commissioning with Rockwell hardware. 

We have engaged multiple contractors for the initial project stages, each proposing different approaches such as in-chassis traditional IO, Flex IO, or Point IO. However, I am struggling to receive a clear technical justification from any contractor on why they prefer a specific IO type.

The IO is centralized in the same cabinets/bays as the CPUs, with the first chassis likely to include EN2T and Prosoft Modbus serial modules. The IO includes traditional types like 4-20/1-5V, DI, proximities, and maybe some TCs or RTDs. Output consists of simple DO and 4-20s, with a processing speed of 50mS IO update and scan being acceptable. 

While a colleague shared some Rockwell presentations and documents on different IO types, there is still no comprehensive comparison addressing density, speed, reliability, or cost. I would appreciate input from those with unbiased opinions, not just those looking to reuse past project documentation or maximize profits.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>PointIO is a crucial tool in our operations, allowing for easy setup and expandability. Adding new cards to the PointIO chassis is a breeze. While I have come across FlexIO options from Rockwell, they do not align with my preferences. It is worth noting that the PointIO chassis bus uses DeviceNet operating at 1MBps. I highly recommend utilizing PointIO for your industrial needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I have yet to use them, opting for a remote 5069 rack appears to be a reliable choice for those seeking dense and flexible IO options. Utilizing 2 port AEN2TR modules can facilitate setting up DLR if desired, but please note that this rack is only compatible with newer 5580 or 5380 controllers. Another similar option is the Flex 5000, limited to 5380, 5480, and 5580 controllers, which offers increased connectivity compared to the 5069 rack and supports hot swapping. Alternatively, PointIO is a solid choice with great reliability and few issues reported. Additionally, FlexIO is a viable option with a well-established controller ecosystem. However, for small machines with short wire runs, standard rack IO may be sufficient. Remote terminal blocks are highly beneficial for troubleshooting dense input and output cards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I highly recommend the point IO system for industrial automation purposes. Having utilized various models such as 1756, 1746, 1794, 1769, 1732, 5094, and 1734, I can attest to the effectiveness of point IO. In the past, 1734 was the go-to choice for safety applications until the introduction of the flex and 1756 product lines. If space efficiency is a concern, the flex 5000 series is worth considering, as I have recently implemented them extensively. I would advise against using 1794 or 1746 for new projects, unless they are already in place. The 1732 armor block is particularly useful for modular assemblies, especially in repetitive motion applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the responses. It seems that there is a trend towards favoring Point IO over Flex IO, and that the 1756 IO in-chassis option remains widely accepted. Is there a preference based on product lifecycle? My assumption is that the large existing 1756 user base may result in longer support compared to Point or Flex IO, where future products may require the entire module to be replaced. I am eager to hear differing opinions on this topic.

I am curious about the advantages of your preferred choice compared to the alternatives. Are people choosing Point IO over Flex IO due to factors such as size, ease of setup, adaptability, or something else? Let's discuss the reasons behind these preferences further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>UhOhNotAgain</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Flex IO is only utilized in one area of my facility, while Point IO is scattered throughout. Recently, new OEM machinery was installed featuring a Compact GuardLogix control system exclusively using Point IO modules. Ultimately, the decision to opt for Point IO over CompactLogix modules was driven by ease of sourcing and cost-effectiveness.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dummy_bit</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>dummy_bit mentioned that in their facility, Flex IO is only used in one specific location, while Point IO is utilized extensively throughout. Recently, a new OEM equipment was integrated with a Compact GuardLogix control system, opting for Point IO modules due to cost-effectiveness. This trend of choosing Point IO over CompactLogix modules is also seen in other equipment suppliers who prioritize cost and adaptability to user preferences. On the other hand, non-OEM designers favor chassis IO for brownfield changeouts. Encouraging the use of Point IO for machine level controllers and reserving chassis IO for plant level controllers seems to be the preferred approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>UhOhNotAgain</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am perplexed by the enthusiasm surrounding Point I/O recommendations. While the cards may be significantly cheaper, they also have a lower point density compared to 1756 I/O, which means you may not actually be saving money. Additionally, adding Point I/O (as well as old Flex I/O, with the exception of Flex 5000) is not as seamless of a process as with 1756 I/O. Furthermore, incorporating a variety of I/O types in a project will result in the need for more spare parts at the plant and require future plant technicians to learn a wider array of skills. This ultimately increases maintenance costs and operational complexity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>UhOhNotAgain mentioned his gratitude for the answers received, noting that there seems to be a preference towards Point IO over Flex IO among people. Additionally, the in-chassis 1756 IO option is still widely accepted. Is there a preference based on lifecycle considerations? The suspicion is that the large installed base of the 1756 IO may result in longer support compared to Point or Flex IO. Keen to hear different perspectives on this matter. The interest lies in understanding the advantages of the preferred option compared to alternatives. Is the preference for Point IO over Flex IO due to factors like footprint, ease of configuration, flexibility, or something else? It's important not to confuse 1794 Flex I/O with the newer Flex 5000 I/O, with the advice being to avoid using 1794 moving forward.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>lmscar12 pointed out that there are some considerations to keep in mind when choosing between Point I/O and 1756 I/O for distributed applications. While Point I/O cards may be cheaper, their point density is lower compared to 1756 I/O, potentially negating any cost savings. Additionally, adding Point I/O online is not as seamless as with 1756 I/O. 

In terms of cost, using 1756 racks with ENXT modules can be more expensive than using AENT modules and Point I/O Racks. The panel space required for 1756 I/O should also be taken into account when considering overall expenses. However, having a modular approach to segregating I/O into smaller chunks can offer benefits in terms of maintenance and troubleshooting, as a single 8 channel module failure would only affect 8 I/O points, as opposed to 32. Ultimately, the choice between Point I/O and 1756 I/O depends on the specific project requirements and considerations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>lmscar12 mentioned that while Point I/O modules may be cheaper upfront, their point density is lower compared to 1756 I/O cards. This could result in the need for more spares and additional training for plant technicians. However, Point I/O's smaller size allows for a more distributed system of I/O panels, reducing wiring costs and making troubleshooting easier. It's important to consider the overall cost of the system, including development, installation, and maintenance, rather than just focusing on the initial module expenses. Neglecting these factors can lead to higher long-term costs and potential issues with employee turnover.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Throughout my years in the industry, I have yet to come across Point IO in real-world applications. In my previous workplace, we relied on the dependable Flex IO, a reliable option that served us well for decades. We did face a challenge with the firmware on some older series units that were new-old-stock from discontinued projects when integrating them into a new system. However, a firmware update resolved the issue, despite not being officially supported.

When evaluating different IO options, including Point, Flex 5000, and CompactLogix chassis IO (1769 and 5069), cost per point was a key factor. Although I don't recall the exact winner in terms of cost, a fresh comparison using current prices would be necessary. Overall, I am confident in the reliability of these platforms for new installations.

However, complexities can arise when needing to compare pricing and lead times of modules from various families, such as safety, analog, digital, and temperature modules. It can be challenging if one type of module is out of stock in one family but has a long lead time in another. In such cases, a combination of in-chassis and remote modules may be necessary, despite not being the ideal solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee inquired about the use of 1756 racks with ENXT modules for distributed I/O, compared to the more cost-effective AENT modules and Point I/O Racks. The EN2TR vs AENTR price difference is about 5x, and the panel space required for 1756 I/O should also be taken into consideration. While having 1756 I/O in a local rack with the processor is acceptable, until recently, point I/O for IBxS and OBxS modules was still necessary. 

In terms of density, I prefer a modular approach where a single 8 channel module failure only affects 8 I/O points, rather than 32. By segregating I/O into smaller chunks, it can be seen as a benefit rather than a drawback.

The IO is centralized in the same cabinets/bays as the CPUs, with the first chassis likely carrying EN2T and Prosoft Modbus serial modules. Each cabinet appears to have its own CPU, leading to the suggestion that the entire setup should use CompactLogix 5069 processors and IO. While the 5069 processors may not cover every type of IO yet, the 1756 setup still seems feasible, especially with up to 17 slots available in the local chassis.

There is no indication of a need for safety modules in this project, but if required, it could alter the setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are considering making real-time adjustments (either due to uncertainty about requirements or difficulty in finding downtime for future changes), Flex5000 is a fantastic option. It offers significantly more online capabilities compared to PointIO, and eliminates the need for VTM or CTM cards. 

One drawback of Flex5000 is the large vents located on the top of the cards, making it easy for conductive items (such as stranded cable whiskers) to fall in and cause a short circuit, potentially damaging the card. During a recent project, we observed a 5% attrition rate due to this issue. 

In the case of a large panel, it is advisable to either remove the cards or cover the vents until the wiring is complete. It is crucial not to use 1756 IO without a breakout board, as the terminals are extremely densely packed, making wiring a nightmare and causing frustration for electricians and technicians.

PointIO, on the other hand, is a well-developed system that may be preferred for certain applications. While it may be difficult to modify online, the spring terminals can be beneficial in environments with vibrations.

It is worth noting that other options, such as 1746, are outdated, and some, like 1732, are more suited for specialized use cases. Ultimately, Flex5000 stands out for its versatility and online capabilities, making it a strong choice for various industrial settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JLand pointed out a significant issue with the Flex5000 system - the placement of vents on the top of the cards makes it easy for conductive materials to accidentally fall in and cause short circuits, leading to card malfunctions. This flaw resulted in a 5% attrition rate during a recent project. While electricians may not be entirely at fault, the design oversight should have been addressed either in the card design or during panel construction.

In essence, the Flex5000 system offers versatility in mounting orientation - it supports both vertical and horizontal configurations and can even be inverted. This flexibility allows for adjusting panel layouts to minimize the risk of accidents with conductive materials.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Uncertain why Point IO is popular despite numerous failures reported. Online integration limitations pose a significant challenge. Opting for the 5000 series IO is the way to go. Stay tuned for the upcoming release of the Point 5000 IO. The Flex 5000 IO offers the option to be vertically mounted, ideal for maximizing space in tall, narrow cabinets. In comparison, the Compact 5000 IO is only slightly larger than the previous Point IO model but boasts improved features and enhanced reliability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>lmscar12 mentioned that the Flex 5000 supports both vertical and horizontal mounting orientations, and can even be inverted. This flexibility allows for different panel layouts to address potential issues effectively. Recently, we installed a panel with vertical Flex 5000 and it performed seamlessly without any significant problems. It's always good to explore different mounting options to optimize performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tlf30 mentioned concerns about the Point IO, citing numerous failures and limitations in online add-on capabilities. However, the 5000 series IO is being praised as the way forward, offering improved features and reliability. The upcoming Point 5000 IO release is highly anticipated. The Flex 5000 IO, with its vertical mounting option, is ideal for maximizing space in slim cabinets. Additionally, the Compact 5000 IO provides similar functionality to the old Point IO but with enhanced features and reliability. For more information on the Point 5000, users are curious about the potential combination of PointIO form factor and Flex5000 flexibility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unable to provide detailed information as most of it is confidential. However, consider the impact that the 5000 upgrade had on Compact IO and FLEX IO systems. Explore the enhancements and improvements brought about by the upgrade for these IO systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can the size of the Flex5000 and Compact 5000 remote IO modules be adjusted remotely while they are online?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User patrickmoneyy inquired about the capability of modifying the size of Flex5000 and Compact 5000 remote IO devices online. The Flex5000 can have its size adjusted online, and it is likely that the Compact5000 can as well. Unlike PointIO, the 5000 series does not require setting the chassis size.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JLand confirmed their approval of the Flex5000 and believes the Compact5000 is also a great choice. Unlike PointIO, the 5000 series doesn't require configuring the chassis size. This flexibility is a major advantage, especially with the various online changes available. The potential addition of the Point 5000 would be a game-changer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One major disadvantage of the 1734 system is its limited thermocouple modules, as they only offer 2 channels and come at a steep price. In comparison, the 5069 system proves to be more cost-effective when using 4 thermocouples, even when factoring in additional components like AENTR, bases, and terminal blocks. Surprisingly, the 5069 system remains the more affordable option even when you only require 6 channels, despite it offering 8 channels in total.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recall how the previous model of Flex IO came with labels that covered the vents and needed to be peeled off after wiring. It seems like they have discontinued this feature with the Flex 5000. While this may be disappointing, it shouldn't deter you from using it, especially considering that Point IO cannot be added online. This limitation is quite significant. As someone who hasn't used it before, I was unaware of this restriction. I will certainly be considering the Flex 5000 for my next project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with 1756 IO, it is crucial to utilize a breakout board to avoid dealing with the dense terminals that can be a wiring nightmare. Neglecting this step can lead to frustrations for electricians and technicians, as well as potential damage to the equipment. My past experience with ControlLogix has taught me the importance of using term boards and removable cables/cordsets for 1756 IO modules.

It is important to note that dropping something conductive, like a cable whisker, into the card can result in shorting out the equipment. This issue has been observed on a different, more expensive platform, where a single strand caused a major outage costing millions. To prevent such incidents, each cabinet/machine should have its own processor with all IO housed within it.

In order to minimize the need for online additions post-installation, it is recommended to have a significant spare capacity wired out in advance. This includes having at least one full spare module and a minimum of 20% spare capacity per IO type. While online module additions should be rare, having hot swap capability is beneficial.

Safety measures should be independent and isolated, using systems like Guardlogix, Schneider M580 Safety, or S7-1500F. These systems may have a Modbus data link back to the ControlLogix for communication purposes. Thank you to everyone for sharing your insights, as it has provided valuable information for consideration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>UhOhNotAgain</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface pointed out a major issue with the 1734 system - its thermocouple modules are limited to only 2 channels and come with a hefty price tag. For instance, when factoring in AENTR, bases, and terminal blocks, utilizing 4 thermocouples will end up being more costly with the 1734 system compared to the 5069 system. This cost difference remains even when needing only 6 channels, as the 5069 system offers 8 channels. Who still deals with running thermocouple wire these days? It seems like the trend now is towards thermocouples/RTDs with integrated 4-20m transmitters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee mentioned the shift from using thermocouple wire to utilizing thermocouples/RTDs with integrated 4-20m transmitters. In general process applications, temperature transmitters are now the go-to choice. However, for machines with numerous monitoring points, thermocouples and RTDs are still commonly wired back. The adoption of remote IO technology is gradually increasing in the field, providing more flexibility in monitoring temperature.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>UhOhNotAgain</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In many industrial facilities, large motors often come with integrated RTDs in their windings. It is not unusual for these motors to have three or more RTDs installed. Some older facilities still have numerous outdated RTDs in operation, making it essential for control upgrades to include RTD-capable cards with high density. Utilizing RTDs is a cost-effective alternative to full transmitters, with some vendors incorporating them to lower costs in the sale of skids and packaged systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee mentioned the shift away from using thermocouple wire, as thermocouples/RTDs with built-in 4-20m transmitters have become more common. In a previous project upgrading from a SLC to a ControLogix system, a temperature analog input card was required for the thermocouples. Unfortunately, the CJC jumper was overlooked when ordering the necessary components, but it did not involve running new thermocouple wire.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mylespetro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my experience, the Flex5000 system truly stands out as a top choice, but be sure to take caution if you're working with a large panel - it's best to either leave the cards out or cover the vents until the wiring is complete. Personally, I've been critical of Rockwell Automation's products in the past, but the Flex5000 has won me over as my favorite. One important tip is to always remove the stickers before inserting the cards to avoid damaging them - I learned this the hard way when an apprentice accidentally broke two cards due to not removing the stickers and bending the pins. I also have high praise for the 1719 Intrinsically Safe IO modules, although they have a very strict error detection system in place for the analog channels. Even a slight deviation like 3.9999999999999 can trigger a channel failure, which can become frustrating quickly. On a positive note, the HART interface on these modules is quite impressive, offering advanced functionality for those in need of it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cardosocea, a Rockwell kit critic, has expressed strong opinions about their Flex range of IO, but surprisingly, the Flex5000 has become a favorite. It is crucial to remove the stickers before inserting the cards to avoid damage, as illustrated by an apprentice's mistake that resulted in broken pins. Another standout from Rockwell is the 1719 Intrinsically Safe IO modules, although they have a strict error detection system in the analog channels. On the positive side, the HART interface offers great functionality. In the case of the 1719 ExIO, it is vital to operate within the normal design limits, especially in explosive environments. Constantly operating below 4mA may indicate a mismatch between the sensor and the job requirements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have been utilizing PointI/O - 5069 for my latest project and found it to be excellent for remote cabinet-based IO. One of the standout features is the ability to mix both normal and safety IO modules with guardlogix PLC, which offers great flexibility. However, one drawback is that their safety Input cards do not support OSSD, requiring the configuration of a hardwire filter on the card and potentially a firmware upgrade. For non-cabinet remote IO, we use SMC EX600 (similar to Festo), which is cost-effective and highly reliable. Using connectors like M8 or M12 means we can eliminate the need for a cabinet and incorporate pneumatics on the same chassis. Our choice of CompactLogix (or guardLogix) L300 series has proven to be incredibly fast, allowing us to consolidate multiple skids onto one centralized PLC instead of using multiple PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>creativepaper</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I highly recommend the SMC EX600 series for networked valve control systems. When considering options for our previous project, we compared SMC and Festo. SMC stood out because their local representative provided a sample for testing before making a purchase, unlike Festo. Additionally, we experienced reliability issues with Festo bus modules on Profibus and faced lead time problems. The SMC system has been running smoothly for over 10 years now. Currently, we have 3 EX600s in operation, soon to be 4. The only issue we encountered was a failure in a 24VDC digital input module due to a shorted sensor cable, which was promptly replaced under warranty. Despite this, I would confidently choose SMC for any future valve bank needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Creativepaper mentioned that they have had a positive experience using PointI/O - 5069 for their last project, particularly for remote cabinet-based IO. This system allows for a mix of normal and safety IO modules, especially when using a GuardLogix PLC. However, one drawback is that their safety Input cards do not support OSSD, requiring a hardwire filter configuration on the card or potentially a firmware upgrade.

For non-cabinet remote IO, Creativepaper recommends using SMC EX600 or similar products from Festo. These options are cost-effective and reliable, especially when utilizing connectors like M8 or M12, which eliminate the need for a separate cabinet and allow for pneumatics on the same chassis.

They have found success using CompactLogix (or GuardLogix) L300 series PLCs due to their speed, enabling multiple skids to be controlled by a single centralized PLC instead of multiple separate ones. Creativepaper also mentioned that lack of an embedded dual channel OSSD on safety inputs is not a significant issue for them, as they prefer configuring all safeties as singles and using appropriate safety instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my opinion, not having an embedded dual channel OSSD on safety inputs is not a limitation. I have not utilized that feature in safety applications since its inception. It is more effective to configure all safety inputs as singles and utilize the appropriate safety instructions.
We recently encountered an issue with a Rockwell safety switch that offers single or dual OSSD outputs. The built-in Rockwell safety functions would fault out when a brief blip occurred. Rockwell addressed this issue with a firmware upgrade and the option to incorporate a 10ms filter to eliminate the blip.
While Rockwell's CR30 programmable safety relay is compatible with OSSD, their 5069-Point IO safety input is not. Despite this limitation, I appreciate the guardlogix for applications that require more than just a relay.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>creativepaper</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When operating in a hazardous environment, it is crucial to stay within the designated design limits of the hardware. If the sensor is consistently operating below 4mA, even by a slight amount, it may not be the right fit for the job. What are the normal operation design limits for the hardware being used - is it the card or IO point? How does operating below 4mA affect the intrinsic safety of the circuitry? It is essential to have a calibration certificate from reputable companies like Rockwell or P+F to ensure precision up to 5 femtoamps. Adjusting the temperature transmitter within the range of -5 to 125 may seem like a quick fix, but it is important to address any issues with hysteresis on the card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Our experience with the 1794 Flex has been mixed - it works well until it suddenly stops functioning, leading to downtime while we replace cards and backplanes. The 1734 Pt IO is our go-to choice for safety cards, requiring offline configuration with a download to install. On the other hand, the 1756 has proven to be reliable with the added convenience of online additions and removals. We often use IFM wiring modules for our cards, including the 1756-IB16S and 1756-OBV8S for safety applications. However, we faced an issue with the 1756-OBV8S not being able to pull in the contact relays we use throughout the plant, leading to frustration. The 1734 PT IO had no problem with this, making us question the design of the latest 1756 card. Due to this limitation, we are hesitant to use more 1756 safety cards. While we have not yet used the 5000 series, we are intrigued by its features and will need to further explore its capabilities, especially in terms of safety applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cardosocea asked about the typical operational design limits for hardware, specifically in terms of cards and IO points. How does dropping below 4mA affect the intrinsic safety of the circuitry? And where can a Rockwell or P+F calibration certificate be found with precision to 5 femtoamps? It can be frustrating to deal with a lack of hysteresis on the card when calibrating a temperature transmitter between -5 and 125.

In hazardous environments, it is important to stay within the specified design specifications of a device, even if it seems okay. For a 4-20mA device, the normal design limits are typically within the range of the process variable scaling from 4mA to 20mA. If a pressure transmitter with a range of 0-150psig exceeds those limits, it would be considered outside of the device's design specifications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JLand emphasized the importance of adhering to a device's design specifications, especially in hazardous environments, even if it may seem safe to do otherwise. This underscores the significance of I.S. circuit certificates and the X condition for any deviations from the norm.

In the context of a 4-20mA device, staying within the specified process conditions is crucial. For instance, if a pressure transmitter meant for 0-150psig range starts operating below 0psig or above 150psig, it is deemed to be operating outside its intended design parameters.

Have you ever experienced noise interference or erratic readings on a flowmeter when dealing with high flow rates? While recalibrating may be a minor inconvenience, it's a necessary step to ensure accuracy in industrial settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are the different IO types that contractors may propose for a ControlLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Contractors may propose in-chassis traditional IO, Flex IO, or Point IO for a ControlLogix system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What factors should be considered when selecting an IO type for a ControlLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Factors to consider include density, speed, reliability, and cost of the IO types being proposed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the typical IO configuration for a ControlLogix system with centralized IO in the same cabinets as the CPUs?</h4>
<p class='text-muted'><strong>Answer:</strong> - The IO configuration may include traditional types like 4-20/1-5V, DI, proximities, and possibly TCs or RTDs, along with simple DO and 4-20s for output.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can one ensure a clear technical justification for selecting a specific IO type for a ControlLogix system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Request unbiased input from experts who can provide a comprehensive comparison addressing density, speed, reliability, and cost of different IO types available for ControlLogix systems.</p>
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
