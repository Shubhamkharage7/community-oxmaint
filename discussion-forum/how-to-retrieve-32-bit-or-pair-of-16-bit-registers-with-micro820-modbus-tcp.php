
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am faced with a situation where I need to retrieve data from a device that can send registers either as 32 bits or a pair of 16 bits. However, it seems that the microcontroller can only read a single 16-bit register, and the only format supported in the">
    <meta name="keywords" content="retrieve 32-bit, pair of 16-bit registers, micro820, modbus tcp, data retrieval, microcontroller, 16-bit register, modbus instruction block, word format, compatibility solution, functional solution, device data, reading registers">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-retrieve-32-bit-or-pair-of-16-bit-registers-with-micro820-modbus-tcp">
    <title>How to Retrieve 32-bit or Pair of 16-bit Registers with Micro820 Modbus TCP | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Retrieve 32-bit or Pair of 16-bit Registers with Micro820 Modbus TCP | Oxmaint Community">
    <meta property="og:description" content="I am faced with a situation where I need to retrieve data from a device that can send registers either as 32 bits or a pair of 16 bits. However, it seems that the microcontroller can only read a single 16-bit register, and the only format supported in the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-retrieve-32-bit-or-pair-of-16-bit-registers-with-micro820-modbus-tcp">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Retrieve 32-bit or Pair of 16-bit Registers with Micro820 Modbus TCP | Oxmaint Community">
    <meta name="twitter:description" content="I am faced with a situation where I need to retrieve data from a device that can send registers either as 32 bits or a pair of 16 bits. However, it seems that the microcontroller can only read a single 16-bit register, and the only format supported in the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-retrieve-32-bit-or-pair-of-16-bit-registers-with-micro820-modbus-tcp"
      },
      "headline": "How to Retrieve 32-bit or Pair of 16-bit Registers with Micro820 Modbus TCP",
      "description": "I am faced with a situation where I need to retrieve data from a device that can send registers either as 32 bits or a pair of 16 bits. However, it seems that the microcontroller can only read a single 16-bit register, and the only format supported in the",
      "author": {
        "@type": "Person",
        "name": "CProv"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-09",
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
                <h1 class="text-white">How to Retrieve 32-bit or Pair of 16-bit Registers with Micro820 Modbus TCP</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>CProv</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>25 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1391</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">413</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am faced with a situation where I need to retrieve data from a device that can send registers either as 32 bits or a pair of 16 bits. However, it seems that the microcontroller can only read a single 16-bit register, and the only format supported in the modbus instruction block is a WORD. Is there a solution to make this compatible and functional?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>For the Rockwell Automation Micro820, the manual provides detailed information on using DINT (Signed 32-bit integer value) or UDINT (Unsigned 32-bit integer value) variables, as seen on page 49. The manual even includes an example of a UDINT being used, showing that it is indeed possible. Additionally, the manual demonstrates the loading of a Modbus message into a UDT on page 19. Based on this PLC perspective, it appears that there are no issues on this end. What devices or software are you utilizing on the other end?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rootboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was working with the Totalflow XFC system and attempting to utilize the Modbus TCP function block. However, I understand your point about the CIP points you mentioned. It seems that in the MSG_MODBUS2 block, the local address array only accepts a WORD from what I can gather.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CProv</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I may have to consider utilizing consecutive numbering to improve efficiency and organization.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CProv</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to a question by CProv, it was suggested that using serial communication may not be necessary if Modbus TCP is functioning correctly, as both methods transfer the same data. 
1) Are you successfully receiving data, even if it is in the form of 16-bit Words, from the Modbus Slave device (Totalflow XFC)?
2) If so, 
2.1) What are the values of the 16-bit Words being received by the Micro820 PLC?
2.2) What are the values of the 32-bit integers (or REALs) that you are expecting to form from each pair of 16-bit words?
3) Can you provide a link to the manual for the Totalflow XFC that includes the addresses of the Input or Holding Registers for further reference?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Great news for those who appreciate the classics! Unfortunately, the XFC/XRC Series does not support Modbus TCP and requires the use of serial communication. The "XFC/XRC Series Start-Up Guide" provides limited information on Modbus, emphasizing the use of either ASCII or RTU protocols. To establish communication, consider using RS485 with a USB to RS485 converter and a Master/Slave program like "Modbus Poll." One option is the free Rilheva Modbus Poll, which can be downloaded in exchange for an email address. Keep in mind that data formatting can vary, potentially involving nibble swapping at the byte level as per Modbus standards. As for standards, Modbus lacks a clear-cut definition, leading to various approaches and variations. When working with PLCs, organize your data into 32-bit data structures for efficiency. It's worth noting that the XFC supports the ASCII version of Modbus, adding a cool factor to the mix.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rootboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When utilizing Modbus TCP, the data being transferred remains consistent. Are you successfully receiving 16-bit Words data from the Modbus Slave device, Totalflow XFC, onto the Micro820 PLC? If so, what are the values of these 16-bit Words on the Micro820, and what 32-bit integers or REALs are you aiming to derive from each pair of 16-bit words? Additionally, do you have access to the Totalflow XFC manual detailing the addresses of the Input or Holding Registers? 

Regarding the data retrieval process, I am indeed receiving the expected pairs of 16-bit words. For instance, the decimal value of 25.5 is being translated to 16844 as a 32-bit integer for the first word. With the flexibility to customize the register mapping according to my requirements, the issue seems to lie in the lack of appropriate storage space for reading 32-bit data accurately.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CProv</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>rootboy expressed excitement for the "old skool" XFC/XRC Series, but noted that it does not natively support Modbus TCP. The recommended method is to use either ASCII or RTU protocols via serial communication. To integrate Modbus, a gateway with RS485 connection and a USB to RS485 converter are suggested. Utilizing a Master/Slave program like "Modbus Poll" can facilitate communication between the XFC and the PLC. A free option for Modbus Poll is Rilheva Modbus Poll, which requires only an email address for access. 

Data formatting can be tricky, as Modbus standards vary and there is no clear universal guideline. When working with PLCs, structuring data to accommodate 32-bit data types is advised. Despite challenges, it is noted that XFC supports the ASCII version of Modbus. Overall, the process can be complex, but achievable with the right tools and techniques.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CProv</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I double-checked to make sure I had the correct manual by searching for "TCP" since it is a crucial component of the protocol. Tim Wilborne, a knowledgeable source on this topic, has informative YouTube videos available. One helpful video demonstrates how to configure an Allen Bradley Micro820 PLC as a Modbus TCP Server in Rockwell Automation's Connected Components Workbench. By following his guidance, you can successfully integrate Modbus data into an array of SINTs and map a User-Defined Type (UDT) to that array. Make sure to explore his other Modbus-related content to further enhance your understanding.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rootboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When accessing data, CProv discovered that the 16-bit pairs were coming out correctly. Specifically, for the decimal value 25.5, the first word in 32-bit form resulted in 16844. By customizing the register mapping, CProv was able to manipulate the data according to their needs. The issue seemed to be related to the lack of space available to read 32 bits. To resolve this, try using the IEEE-754 Floating Point Converter tool. Enter 25.5 in the "Decimal Representation" field and extract the first 16 bits from the binary output to confirm the 16844 result. To obtain a 32-bit result, consider multiplying 16844 by 65536 or performing a left shift by 16.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rootboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To maximize efficiency, it's essential to not just perform a simple bit shift but to also combine it with an "OR" operation on the additional 16-bit word. This concept is further highlighted by using a number with a more extensive mantissa to emphasize the necessity of both shifting and performing the OR operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rootboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the IEEE-754 single-precision floating-point value 25.5, the high two bytes (16 bits) are represented by the number 16844. This can be achieved in Python using the struct module, as shown below:

Code:
>>> struct.unpack('f',struct.pack('HH',0,16844))
(25.5,)

To replicate this process, you can copy the bits (not the values) of the 16-bit word pair from the Modbus TCP transfer into a REAL tag. It may be necessary to reverse the word order before copying the bits, but there is no need to swap the byte order within the words. This method allows you to combine the 16-bit (Half-)words 0 and 16844 in a similar manner as demonstrated in Python.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Find the COP instruction on your computer by searching for it here or clicking on this link.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Encountered an issue with signing in - error code 6. Need help troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CProv</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are facing error 6 while using the COP status codes (Sts), it may be due to the source data size being too small for copy. Ensure that the Src input parameter for the COP instruction consists of at least 2 elements and that the Length input parameter is set to 1 for each REAL and for every 2 Src Words that will be copied. Pay attention to items (i) and (vii) mentioned in the table describing COP status codes. For more information, please refer to the link provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Making progress! Struggling to achieve precise measurements. Slightly off target, possibly beyond my understanding. Attempted to calibrate but unsuccessful.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CProv</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In terms of CPU architecture, the Modbus slave operates on a LSByte-first basis, while the Micro820 CPU architecture is MSByte-first. It is important to ensure that the SrcOffset is set to 0 instead of 1, and that the 16-bit Wordsla[0] and la[1] need to be swapped in the PLC code. Keep in mind that the byte order within the words does not need to be swapped. This is all part of the bit manipulation process in the realm of data management.

To summarize, the data stored in the Modbus registers includes the float values 21.35 and 0.0 at the register addresses [0,1] and [2,3]. When transferred, the 16-bit register values are in LSWord-first order. These values are then moved to the Micro820 array elements la[0..3]. The COP instruction handles the transfer of bits from one 16-bit value to another, making adjustments based on the specified SrcOffset.

Using Python, the packing and unpacking of the float values into 16-bit register words is evident. The Modbus protocol ensures the correction of byte order within the words during transfer. Additionally, the COP instruction manages the movement of bits between different 16-bit values.

In conclusion, understanding the interplay between different CPU architectures and data transfer processes is crucial in ensuring seamless communication and manipulation of data within a system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To demonstrate the process, let's examine how the numeric value 1351.0 was converted to 1344.0 through the utilization of coding. By using the struct module in Python, the value was altered with the following steps: struct.unpack('>HfH',struct.pack('>HHHH',*struct.unpack('HHHH',struct.pack('ff',1351.0,0.0)))) Resulting in the output: (57344, 1344.0, 0). This showcases the manipulation of numerical data through code parsing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yesterday, drbitboy discussed using Python's struct module to combine 16-bit (Half-)words 0 and 16844. To achieve this, you can copy the bits (not the values) of the 16-bit word pair (two adjacent elements of the Modbus TCP transfer array) into a REAL tag. It may be necessary to reverse the word order before copying, but there is no need to swap the byte order within the words. Click to view the red highlighted notes from yesterday's discussion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To witness a hilarious outcome, retain the current code without making any alterations (SrcOffset=1). Set 42.70 (or 10.675) as Float-1 on the Modbus slave, resulting in 21.35 appearing as Analograw. While the code remains incorrect, understanding the reason behind the correct output will prevent similar instances from being too complex in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent forum post, drbitboy highlighted certain notes in red from the previous day. He mentioned a challenge he faced when trying to swap words, which resulted in confusion. While he understood the concept to some extent, he was uncertain about what to do next if the word swap did not yield the desired results. Additionally, he discussed the functionality of the slave device in selecting the order for sending words.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CProv</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>CProv mentioned an attempt to switch words yesterday that didn't go as planned. While there is some understanding of the process, uncertainties arise when the word swap proves unsuccessful. The ability of the slave device to determine the order of word transmission is acknowledged. Despite a lack of coding knowledge, Python is on the list of future goals, with recent exploration into introductory material. The process of modifying code in programs is yet to be understood, but this project serves as a valuable learning experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CProv</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>CProv mentioned an attempt at word swapping yesterday that didn't quite go as planned. While they understand the concept to a certain extent, they are unsure of what to do if the word swap doesn't yield the desired results. The slave device provides the option to choose the order in which the words are sent. Reflecting on the situation, CProv realized that the offset may have been incorrect during the previous word swap attempt.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CProv</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reflecting on it, I realized my mistake in setting the offset during the word swap process. This likely caused the issue. If you copy the first 16-bit word with a value of 16810 and the second 16-bit word with a value of 52429 into a 32-bit REAL, the resulting value will be 25.35. This error was probably due to the incorrect offset configuration during the word swap.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent thread, drbitboy suggested a solution that worked perfectly: when copying two 16-bit words with specific values to a 32-bit REAL, the result was a precise value of 25.35. This experience has been incredibly enlightening, and I'm eager to continue learning and understanding these concepts further. Would it be okay to reach out to you via PM for any future questions on similar topics? Your insight has been invaluable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CProv</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>CProv expressed gratitude: "Thank you for the assistance - I still have much to learn, but it's beginning to make sense. Can I reach out to you via PM for future questions on this topic?" It may be beneficial to keep the conversation here, as there are others who can also provide insight on this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Q: How can I retrieve 32-bit or a pair of 16-bit registers with a Micro820 using Modbus TCP?
    The Micro820 microcontroller can only read single 16-bit registers, but there are solutions to handle 32-bit or paired 16-bit registers. You may need to manipulate the data received from the device to combine two 16-bit registers into a 32-bit value.
   
2. Q: What format is supported in the Modbus instruction block for the Micro820?
    The supported format in the Modbus instruction block for the Micro820 is a WORD, which represents a 16-bit register.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a way to make the retrieval of 32-bit or paired 16-bit registers compatible and functional with the Micro820?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, you can make the retrieval of 32-bit or paired 16-bit registers compatible and functional with the Micro820 by implementing custom logic to handle the data conversion and merging of two 16-bit registers into a 32-bit value.</p>
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
