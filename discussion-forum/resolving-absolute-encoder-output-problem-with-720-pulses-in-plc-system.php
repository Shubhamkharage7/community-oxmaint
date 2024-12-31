
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am in the process of reprogramming a German machine, for which I have some but not all necessary information. The Absolute Encoder I am working with is no longer in production, but the company behind it is known for their quality products. The encoder sends 9 bits of">
    <meta name="keywords" content="absolute encoder troubleshooting, plc system problem solving, resolving encoder output discrepancy, absolute encoder programming tips, correcting encoder pulse count, fixing absolute encoder data issue, german machine re">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/resolving-absolute-encoder-output-problem-with-720-pulses-in-plc-system">
    <title>Resolving Absolute Encoder Output Problem with 720 Pulses in PLC System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Resolving Absolute Encoder Output Problem with 720 Pulses in PLC System | Oxmaint Community">
    <meta property="og:description" content="I am in the process of reprogramming a German machine, for which I have some but not all necessary information. The Absolute Encoder I am working with is no longer in production, but the company behind it is known for their quality products. The encoder sends 9 bits of">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/resolving-absolute-encoder-output-problem-with-720-pulses-in-plc-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Resolving Absolute Encoder Output Problem with 720 Pulses in PLC System | Oxmaint Community">
    <meta name="twitter:description" content="I am in the process of reprogramming a German machine, for which I have some but not all necessary information. The Absolute Encoder I am working with is no longer in production, but the company behind it is known for their quality products. The encoder sends 9 bits of">
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
        "@id": "https://community.oxmaint.com/discussion-forum/resolving-absolute-encoder-output-problem-with-720-pulses-in-plc-system"
      },
      "headline": "Resolving Absolute Encoder Output Problem with 720 Pulses in PLC System",
      "description": "I am in the process of reprogramming a German machine, for which I have some but not all necessary information. The Absolute Encoder I am working with is no longer in production, but the company behind it is known for their quality products. The encoder sends 9 bits of",
      "author": {
        "@type": "Person",
        "name": "BBarnhart1"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-23",
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
                <h1 class="text-white">Resolving Absolute Encoder Output Problem with 720 Pulses in PLC System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BBarnhart1</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>18 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">483</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">291</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am in the process of reprogramming a German machine, for which I have some but not all necessary information. The Absolute Encoder I am working with is no longer in production, but the company behind it is known for their quality products. The encoder sends 9 bits of data to the PLC, corresponding to 360 pulses. However, I have observed that the encoder actually outputs 720 pulses during a full revolution, which seems incorrect.

After consulting a German technical manual, I came across a solution to this issue involving converting negative numbers to positive values. The manual references KF 360 (Siemens S5) as a relevant point of interest. Despite using a "FLOATING POINT" setting on my HMI, I am not seeing negative numbers displayed. The 9 wires from the encoder feed into the "Digital Inputs" of the PLC, specifically a Productivity 2000 with an 'ABSE' card which handles the data. 

Upon my return to the factory tomorrow, I plan to adjust the output of the ABSE to have 360 added to it, effectively transforming the input pulses to the correct range. By adding 360 to the float output, I aim to convert the existing 720 pulses to 360 positive pulses, resolving the issue of the encoder outputting from 360 to 0 to 360.

To summarize, the machine utilizes a 720 pulse absolute encoder with 9 bits of data input to the PLC. While a new encoder could be ordered, my priority is to solve the issue and be able to return home tomorrow.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am confident that the solution provided will work effectively, especially when dealing with negative numbers. Although they may appear to run backwards, they should still be recognized and processed correctly. Speed should not pose a problem, as there should be ample time for the necessary calculations to take place without impacting the operation. It is worth noting that a similar approach was successfully implemented by German engineers two decades ago using an old Siemens model, showing that it is achievable. I consider myself to be both creative and highly intelligent, but I would appreciate it if you could explain things in a way that is easy for me to understand. This will help me troubleshoot the issue or determine if a solution has already been found.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BBarnhart1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to PLCs, it is crucial to have 9 bits of input data. In the case of a 9-bit 360 Pulses absolute encoder using discrete I/O, it most likely operates on either natural Binary or Gray Code. Typically, 8 of the inputs are used to represent the position, while the remaining input serves as a Clock signal for the connected PLC to interpret the bit statuses. Interestingly, Gray Code is named after the American mathematician Frank Gray, making it easy to distinguish from the English spelling "Grey". It is worth noting that the encoder's readings cycle from 360 to 0 and back to 360 during a full revolution. As for the Productivity 2000 'ABSE' card, can you provide more information about this module? If you are upgrading a system that previously utilized an old German encoder and PLC to a Productivity 2000 system, it would be beneficial to understand the specifics of this transition.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the German code distinguishes between "negative" and "positive" numbers and utilizes 360 twice, resulting in 720 pulses per revolution. I am unsure how this applies to my cam settings, but I notice that some are active from 330 to 0, while others function between 120 and 180. If my calculations are correct, I will switch to a straightforward 720 pulses per revolution and adjust all cam values to range from 0 to 720. This differs from the German method of using 360 to 0 for the first half of the rotation and 0 to 360 for the second half. Does any of this seem logical to you?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BBarnhart1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon further consideration, it appears that using natural binary and Gray code may not be the most efficient methods for communicating digital values. A 9-bit code in either of these formats can only count up to 512. If you are working with a 360 degree/revolution encoder, it is possible that it is utilizing "excess Gray codes". Are you utilizing a "MATH" instruction, a "GRAY" instruction, or another method to maximize productivity in your operations?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach mentioned that after further consideration, he realizes that natural binary and Gray code may not be the most efficient methods for transmitting digital values. With a 9-bit code of either type, the range is limited to only counting from 0 to 512. It is possible that a 360-degree/revolution encoder may be utilizing "excess Gray codes." Are you using a "MATH" or "GRAY" instruction in your Productivity system, or perhaps something else? Within the Productivity 2000, I am utilizing a Gray Code "output" that offers limited but sensible selections. With a 9-bit 360 pulse selection, we can accurately read a full revolution with 9 input "wires." While translating the German instructions, it became apparent that the binary Ladder Logic incorporates considerations for both the positive and negative sides. Despite my limited expertise in this area, it seems that this design is intentional. Despite attempting different mathematical approaches, the values still follow a top-down-back-up pattern. However, some functions on the machine seem to be working correctly. I am currently investigating whether certain functions should be activated at specific degrees and deactivated at others. It seems that the bits remain on as they pass the first 20 degrees and turn off as they go past the second 20 degrees. Instead of turning off before reaching zero, they turn off after passing the second 20 degrees. I am also examining whether all "starts" are on the negative side of 0 and all "stops" are on the reverse side of 360. Any insights or suggestions would be appreciated, and I will provide updates as soon as the issue is resolved. It may simply be a matter of adjusting the cam settings, even though the system may seem unconventional.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BBarnhart1</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If the Encoder manufacturer has gone out of business, you still have a high likelihood of locating specifications and manuals for it online. What specific brand and model is the Encoder you are referring to?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP mentioned that even if the manufacturer of the Encoder is no longer in business, there is a high probability of finding specifications and manuals for it online. The specific brand and type of the Encoder should be identified for further investigation. After conducting research, I was able to retrieve the basic specifications and even communicate with a representative from the American office of the German company. While some numbers remain "proprietary," I have determined that it requires 720 pulses for one complete revolution. It is crucial to disregard the initial 360 pulses, which decrement from 360 to zero, and only focus on the latter half from zero to 360. The instruction from the German coding suggests to "Ignore negative numbers." This design choice may be attributed to the diverse configurations of the machines where the same power and plc components were used, activating only specific features as needed. It is possible that other machines utilize the first half and interpret negative numbers in binary. Upon analyzing the output from the Productivityh suite, I observed a reverse running pattern, rather than negative numbers. Is there a method to program the code to overlook reversed numbers? If not, I will explore the option of incorporating a CAM to trigger and disregard the initial half revolution of the encoder. This mechanical solution or adjustment in the plc programming will prevent the initial half from being activated or detected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BBarnhart1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you in possession of the authentic S5 code? Sharing a section or picture may provide valuable insights into the functionality of the original system. Explore the original S5 code for a better understanding of its operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manglemender</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User BBarnhart1 mentioned that while the exact numbers are confidential, it has been determined that 720 pulses are needed for one full revolution. It is believed that there are actually 360 absolute encoder bit patterns per revolution. Analyzing the data from the Productivity suite, no negative values are observed; instead, it is seen as running in reverse.

In the case of 16 PPR, as referenced by Ken Roach, specific value pairs with a sum of 15 have identical lower three bits. By utilizing only these lower three bits as Gray codes, the interpreted values start at 0, increase by 1 up to 7, reset to 7, then decrement by 1 back to 0 in subsequent sections. The potential for negative values arises when encoding 720 positions (representing one degree increments for two full rotations), with a potential range from -360 to +359.

BBarnhart1 inquired about implementing a code that disregards values in the reverse direction or a mechanism that ignores the first half of the encoder's revolution. The absence of the 10th bit complicates matters for the PLC user program. One suggested approach is to monitor the direction of movement and adjust values accordingly, converting negative readings into positive values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Brent, a user on the forum, shared his experience reprogramming a German machine with an absolute encoder. The encoder, although no longer manufactured, is reliable with 9 bits entering the PLC and producing 360 pulses. However, an issue arose where the encoder was registering 720 pulses instead of the expected 360. Upon consulting the manufacturer's documentation, Brent discovered a reference to correcting negative numbers to positive values, specifically mentioning KF 360 (Siemens S5). Despite the HMI not displaying negative numbers, the data is being handled by a 'ABSE' card on a Productivity 2000 controller, outputting to "32 Float."

Brent plans to adjust the output float by adding 360 to the existing values to correct the pulse count, ultimately achieving 360 positive pulses from 0 to 360 degrees. He suspects that the encoder is actually using 8 bits for pulses encoding with one bit for direction, resulting in a step of 1.4 degrees per pulse. This understanding will hopefully allow Brent to resolve the issue without needing to order a new encoder, as he is eager to complete the reprogramming and go home.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sergey Borchshev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the encoder system capable of accurately capturing the complete 360-degree rotation from zero to 360 and back in a single revolution, or does it require two revolutions to record the entire downward-to-upward sequence? There seems to be a discrepancy in the output of the system when analyzing the nine discrete inputs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe it may be gray code, although I haven't had the chance to delve into it further. However, I did come across some information on this topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky mentioned that he suspects the issue lies in Gray code, although he hasn't delved into it further. However, a peculiar behavior of 360=>0=>360 is still unexplained.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have never been a fan of Absolute encoders due to their frequent issues. In the past, they were suitable for slow-moving machinery, having 7 sensors and inputs. If one fails, the position could be incorrect without detection. Instead, I recommend switching to an incremental encoder with 5000 PPR Quad Output for a High Speed counter input. This would provide 20,000 increments per revolution for more accuracy. Only a single homing sensor input would be required. This setup is sufficient for most applications, with easily accessible and universal parts if replacements are needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>GaryS expressed his dislike for Absolute encoders due to the numerous issues associated with them. However, the key lies in understanding how to properly utilize them and choosing the right absolute encoders. Absolute encoders should ideally rollover when the count surpasses a binary limit, not necessarily at 360 or 3600. For instance, a 9-bit encoder counting from 0-511 that rolls over should be shifted left by 7 bits to make it appear as though it counts from 0 to 65536 in 64-bit increments. Similarly, 10-bit encoders should be shifted by 6 bits, and 13-bit encoders by 3 bits. Once these adjustments are made, all encoders will appear similar, with the only difference being the resolution. By applying a count offset and scaling, absolute encoders can be effectively normalized. To convert this normalized data to degrees, it can be multiplied by 360 after being represented in 16 bits. The upper 16 bits will indicate the degrees, while the lower 16 bits will show a fraction of a degree, making the conversion process relatively simple.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During my time working on German machines from the 80's and 90's, I came across Gray encoders quite frequently. One memorable instance was when I was called in to assist with a valve seat dressing grinder that had been refurbished by a company using Siemens drives. The original PLC had been upgraded to an S7300 from either an S5-95U or S100, with new unsecured add-on FB's. The programmer had trouble converting the control software from S5 to S7, as the standard add-on FB's for bit sequence control did not transfer over. I had to write my own sequence for the drives, noticing the presence of grey encoders at the bottom of the panel with approximately 12 wires. Despite being offered a permanent position with the company, I declined due to concerns about safety precautions. In my experience, German machine manufacturers often utilized Gray encoders in their equipment. This observation aligns with the mention of 9-bit data in the original post.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An encoder should ideally have a binary range based on the number of bits it uses, such as 0-511 for 9 bits. BBarnhart1 noted that using a Gray Code output within the Productivity 2000 provides limited but logical selections. With a 9-bit 360 pulse selection, it accurately reads a full revolution with 9 inputs. However, the issue arises when the encoder output fluctuates from 360 to 0 and back to 360, reflecting a possible configuration error or unexpected behavior. Monitoring the encoder block output trends can help identify any defects in the system. It would be helpful to share the raw bit patterns and details of the encoder brand and model, even if it is discontinued, as information can still be sourced.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is unnatural for an encoder to have a value range of 360 to 0 to 360, as mentioned by JesperMP. Is it possible to track the output trend of the encoder block over time? Additionally, could you provide the raw bit patterns from the encoder, either as a group of 9 bits or as an integer, binary HEX format, along with time-coincident outputs from the encoder decoding block. OP (@BBarnhart1), this discussion seems to drag on for a simple topic. Kindly address these requests or proceed to a new discussion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is the Absolute Encoder outputting 720 pulses instead of 360 as expected?</h4>
<p class='text-muted'><strong>Answer:</strong> - The encoder is sending 9 bits of data to the PLC, which should correspond to 360 pulses, but it actually outputs 720 pulses during a full revolution. This discrepancy can be resolved by adjusting the output in the PLC system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can negative numbers be converted to positive values in the PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> - A solution involves referencing KF 360 (Siemens S5) in a German technical manual and adjusting the output of the ABSE card in the PLC to add 360 to the float output. This conversion will transform the 720 pulses to 360 positive pulses, correcting the encoder output range.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Which PLC system and card are involved in handling the encoder data?</h4>
<p class='text-muted'><strong>Answer:</strong> - The encoder's 9 wires feed into the "Digital Inputs" of the PLC, specifically a Productivity 2000 with an 'ABSE' card responsible for processing the data and outputting pulses. Adjusting the settings on this card can help resolve the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is ordering a new encoder the only solution to the problem?</h4>
<p class='text-muted'><strong>Answer:</strong> - While a new encoder could be ordered, the immediate priority is to solve the issue with the existing encoder. By adjusting the output in the PLC system, specifically adding 360 to the float output, the problem of incorrect pulse output range can be resolved without the need for a new encoder.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
