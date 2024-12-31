
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am having issues with bottle rejection when the label fails, specifically at low line speeds. The rejector, which is triggered by a solenoid releasing air, is firing early and missing the product. The rejector is controlled by an encoder, so I am puzzled as to why changing line">
    <meta name="keywords" content="bottle rejection issue, low line speeds, rejector performance, solenoid control, encoder troubleshooting, early firing problem, label detection failure, cognex camera system, logix5000 plc, air release mechanism, line speed impact, reject">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-bottle-rejection-issue-at-low-line-speeds-early-firing-of-rejector-controlled-by-encoder-and-solenoid">
    <title>Troubleshooting Bottle Rejection Issue at Low Line Speeds: Early Firing of Rejector controlled by Encoder and Solenoid | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Bottle Rejection Issue at Low Line Speeds: Early Firing of Rejector controlled by Encoder and Solenoid | Oxmaint Community">
    <meta property="og:description" content="I am having issues with bottle rejection when the label fails, specifically at low line speeds. The rejector, which is triggered by a solenoid releasing air, is firing early and missing the product. The rejector is controlled by an encoder, so I am puzzled as to why changing line">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-bottle-rejection-issue-at-low-line-speeds-early-firing-of-rejector-controlled-by-encoder-and-solenoid">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Bottle Rejection Issue at Low Line Speeds: Early Firing of Rejector controlled by Encoder and Solenoid | Oxmaint Community">
    <meta name="twitter:description" content="I am having issues with bottle rejection when the label fails, specifically at low line speeds. The rejector, which is triggered by a solenoid releasing air, is firing early and missing the product. The rejector is controlled by an encoder, so I am puzzled as to why changing line">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-bottle-rejection-issue-at-low-line-speeds-early-firing-of-rejector-controlled-by-encoder-and-solenoid"
      },
      "headline": "Troubleshooting Bottle Rejection Issue at Low Line Speeds: Early Firing of Rejector controlled by Encoder and Solenoid",
      "description": "I am having issues with bottle rejection when the label fails, specifically at low line speeds. The rejector, which is triggered by a solenoid releasing air, is firing early and missing the product. The rejector is controlled by an encoder, so I am puzzled as to why changing line",
      "author": {
        "@type": "Person",
        "name": "Hershfam"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-28",
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
                <h1 class="text-white">Troubleshooting Bottle Rejection Issue at Low Line Speeds: Early Firing of Rejector controlled by Encoder and Solenoid</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Hershfam</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>35 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1547</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">132</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am having issues with bottle rejection when the label fails, specifically at low line speeds. The rejector, which is triggered by a solenoid releasing air, is firing early and missing the product. The rejector is controlled by an encoder, so I am puzzled as to why changing line speeds has affected its performance. I believe there is a simple solution that I am overlooking and would appreciate assistance. I am utilizing a Cognex camera system to transmit the fail signal to the PLC. My system is running on Logix5000.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In cases where speed is a factor, adjustments may be needed. Regardless of line speed, the solenoid and reject mechanism will always take the same amount of time to deploy. However, it is important to note that bottle travel distance during deployment time will vary depending on the operating speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believed that the encoder pulse rate, impacting the shift rate, would compensate for and accommodate changes in speed across various settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hershfam</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is possible that the timing of the pulse may not be perfectly aligned with the exact central position for rejection. Even if your pulses from the shift register are quick, there will be a slight delay for the reject air shot to activate. Typically, the bit position is set around 3 or 4 bits away from the center of the reject area at high speeds. Therefore, although the bit -x may be true at a fast pace, the PLC and air shot may take some time to reach the correct position. To address this issue, it is recommended to analyze the bit at slower speeds and calculate a delay time based on the conveyor speed. For example, one approach is to adjust the delay timer according to different speeds - perhaps setting it to 110ms at 0% speed and 10ms at 100% speed. By implementing this method, you can effectively time the reject process based on the conveyor speed. It may be necessary to experiment and determine the appropriate delay range for your specific setup. Keep in mind that although the timers are programmed in milliseconds, they operate in 10ms intervals.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I had a brilliant idea for a timer solution and I am excited to implement it today. I will be setting up a program that incorporates timers to adjust the belt speeds. Thank you for the inspiration!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hershfam</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Some PLCs may not activate the timer with a value of 0, so it's recommended to adjust the shift bit slightly earlier and set a minimum time value of 10ms. This ensures that timers will trigger even if they don't respond to a time value of 0 (a common issue with certain PLC models). Keep in mind that most PLC timers operate on a 100ms timebase, though high-speed timers are also available on various PLC types. It's always best to test and adjust settings accordingly to ensure proper functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The encoder pulse rate and shift rate for different speeds are crucial in covering speed changes. When the encoder is connected to the same motor driving the bottles, each pulse indicates the distance traveled by the bottles. It is unlikely that the encoder or the PLC's counting device automatically adjusts for speed variations, requiring manual compensation. If your reject mechanism is activated a set number of encoder counts after a bottle passes a specific point, the trigger point will need to be lowered as the speed of the system increases.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As a newcomer to this field, I have typically relied on PLCs for diagnosing and repairing issues. The encoder is connected to the motor powering the belt. My understanding is that, hypothetically, for a bottle to travel 5 feet, it would require half a rotation and 10 pulses (arbitrary figures for illustration purposes). In any scenario, 10 pulses would consistently represent the same distance traveled, with only the speed at which the pulses occur varying.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hershfam</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hershfam mentioned being new to this aspect of troubleshooting, as they are more accustomed to working with PLCs. In this case, the encoder is positioned on the motor responsible for driving the belt. The concept of the number of pulses required for the bottles to travel a certain distance was discussed, emphasizing that the speed at which these pulses occur may vary.

However, it was noted that the mechanism for rejecting the bottles may have a fixed time delay that remains constant regardless of the machine's speed. This means that timing the reject actuator to coincide with the bottle's movement is essential for proper synchronization.

One effective method for fine-tuning this process involves using a timer instruction to monitor the time taken for the reject mechanism to complete its action once initiated. By calculating the duration required for the bottle to travel from one position to another, adjustments can be made to ensure accurate timing for rejection.

In summary, the key lies in aligning the time delays of both the reject mechanism and the bottle's movement to effectively reject the correct bottle. Adjustments to the time delay may be necessary to account for changes in the machine's speed and the distance traveled by the bottle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This is the process that occurs. Each encoder count signifies an equal distance traveled, regardless of the speed. However, the deployment of the reject mechanism is not immediate. The time it takes from the PLC signaling the solenoid to activate until the burst of air reaches the bottle remains constant in milliseconds, regardless of the production line speed. Nonetheless, the distance covered by the bottle during this deployment period is greater at higher speeds. Similar to aiming at a moving target such as a duck, where you must predict the duck's trajectory and shoot ahead of it to intersect at the same point simultaneously. In the case of shooting a woodcock, you must aim even further ahead due to its faster flight speed. It's important to note that assuming both birds fly in a straight path, especially the woodcock, may not always be accurate.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hershfam highlighted the significance of encoder pulse rate in determining shift rate for different conveyor speeds to accommodate speed changes effectively. When modeling real-world processes in computer programs, the key design factor is the level of fidelity between the model and the actual processes being modeled. We prioritize modeling binary states like pass-fail labels, while disregarding irrelevant details like the color of an operator's socks.

Consider the initial position of a bottle label (P0) when detected by a camera, and the time taken to evaluate the label and signal a failure to the PLC (tdetect). As the bottle moves downstream at a speed (S) on the conveyor, the distance it covers before the failure signal reaches the PLC is Ddetect = S * tdetect. If the conveyor speed varies, so does the distance.

In addition, it takes time (treject) for the rejector to reach the bottle at the reject station from the moment the failure signal is received by the PLC. The distance covered by the bottle during this time is Dreject = S * treject. Understanding these dynamics is crucial when using a shift register to predict when a bottle with a faulty label detected at position P0 will reach the rejector.

For slower conveyors, the variability in the sum of distances (Ddetect + Dreject) may not significantly impact the model's accuracy. However, for high-speed conveyors, this sum can greatly affect the outcome. It is akin to how a quarterback leads a receiver by different distances based on their speed when throwing a pass.

Various solutions have been suggested, such as incorporating timers or adjusting the code to account for the time it takes for the failure signals to reach their respective points. Ultimately, an empirical approach is needed to fine-tune the model and ensure accurate predictions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey explained how encoders work in the reject mechanism process. Each encoder count represents a consistent distance traveled, regardless of the speed. However, there is a delay in the deployment of the reject mechanism. The time it takes for the solenoid to fire and the puff of air to hit the bottle remains constant in milliseconds, regardless of the line speed. The bottle travels a greater distance during deployment at higher speeds. To shoot a moving duck accurately, one must aim ahead of the duck for the shot and the duck to meet at the same point at the same time. Shooting a woodcock requires aiming further ahead, as woodcocks fly faster than ducks. The assumption of straight flight is not always accurate, particularly for woodcocks. Bailey humorously concludes by asking if he looks like a duck.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy jokingly asked if he resembled a duck and wondered if he should duck. Curious about their resemblance to ducks, they pondered the idea of ducking down.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In some PLCs, a value of 0 may not activate the timer, so it's best to test it out. One suggestion is to adjust the shift bit slightly earlier and set a minimum time value of 10ms to ensure the timers trigger correctly. Most PLC timers have a 100ms timebase, but some models offer high-speed timers. For example, Siemens Step 7 IEC type (SFB block) timers like TON, TOF, TP/t#0s are compatible with 3xx and 4xx PLCs. It is believed that Siemens TIA Portal supports 0ms time values as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hershfam shared that they are facing a challenge with rejecting bottles if the label fails. The rejection process is successful at normal line speed, but at low speed, the rejector (which fires air through a solenoid) activates too early and misses the product. The rejector is controlled by an encoder, which is causing confusion as to why the change in line speed is affecting it. Assistance is requested to troubleshoot this issue. A cognex camera system is being used to send the fail signal to the PLC system. Grateful for the helpful insights and creative solutions provided by the community.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hershfam</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize the classic bomb technique for precision targeting in high-speed applications. By releasing the bomb at a faster flying speed, you can increase accuracy and hit the target more effectively. This method is commonly used in dispensing applications for optimal results. To easily reject unwanted items, consider using a variable preset timer adjusted according to your operating speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee discusses the utilization of a classic bomb to target application, where the bomb is released from a flying plane to hit the target at a faster speed. This method is frequently applied in dispensing applications. For a straightforward reject process, consider employing a variable preset timer that adjusts based on the flight speed. In my recent endeavors at this new position, I have successfully calculated the line speed in bottles per minute. Now, I am seeking guidance on determining the appropriate formula for calculating the reject delay. Is it as simple as using a percentage of the maximum reject delay based on the line speed? This marks my first foray into engineering a solution rather than solely relying on PLCs for troubleshooting purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hershfam</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the Hershfam's discussion, it was mentioned that the focus is on implementing a new system. Despite being new to the role, progress has been made in calculating the line speed in bottles per minute. However, there is a query on how to determine the reject delay formula based on a certain percentage of the line speed. 

An effective method suggested is to test and establish the delay parameters at both minimum and maximum speeds. By using a two-point linear equation formula (Y2 = delay max, Y1 = delay min, X2 = speed max, X2= speed min), a solution can be derived. For instance, if the maximum speed is 1000 and the minimum speed is 500 with corresponding delays of 200ms and 400ms respectively, the equation can be calculated as Y = -.4x + 600.

It is important to note that this method assumes a linear relationship between speed and delay. If the relationship is non-linear, creating a lookup table with different equations for each speed segment is recommended for accurate results. This approach ensures efficient problem-solving in speed to delay applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee suggested creating a two-point line equation by testing the delay at minimum and maximum speeds. This equation can be used to determine delays at any given speed. For example, with a max speed of 1000 and min speed of 500, delays were found to be 200ms and 400ms respectively. The formula y=(y2−y1)/(x2−x1)*(x−x1)+y1 can be used to calculate delays at different speeds within this range.

Most speed to delay applications follow a linear function. However, if the relationship is nonlinear, a lookup table can be created with different equations for each segment. For instance, one equation can be used for speeds between 500 and 600, and another for speeds between 600 and 700.

I appreciate the helpful and kind responses so far. I look forward to conducting more tests next week and will provide an update. Thank you all for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hershfam</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hershfam mentioned that this was their first time "engineering" a solution rather than solely relying on using PLCs for troubleshooting purposes. In this context, "engineering" refers to creating a mathematical model of the process. By establishing variables for unknown quantities and determining their values through experimentation, one can effectively model the situation.

While this may seem daunting, tackling problems like calculating the time it takes for a train traveling at 45mph to cover 105 miles can serve as a good foundation. If you can handle such problems, modeling a production line will be a relatively straightforward task.

When it comes to setting the timer based on the fail bit reaching a specific position and adjusting the reject device at timer expiration, it's important to note that the relationship between line speed and delay is not necessarily linear. While a linear characteristic may suffice from 100% speed to 50% speed, it may not accurately represent the actual relationship.

On the other hand, modeling the process can provide insights. Following @Steve Bailey's suggestion to adjust the bit position based on line speed simplifies both the modeling and implementation processes. This adjustment correlates linearly with line speed, making it a more practical approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Additionally, it is important to note that the line speed should be measured in encoder counts per minute or per second, not in units of bottles per minute. This is unless each bottle corresponds to one encoder count due to encoder scaling.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of engineering, the term "modeling" refers to constructing a mathematical representation of a process by assigning variables to unknown quantities and determining their values through experimentation. While this may seem daunting, if you are able to solve problems like "how long will it take a train traveling at 45mph to cover 105 miles?", then modeling a production line should be manageable.

If you plan to initiate the timer when a particular position is reached by the fail bit, which signifies 100% speed and zero delay, and activate the reject device upon timer expiration, the relationship between line speed and delay may not follow a linear pattern. However, modeling the process reveals that adjusting the bit position for fail bit detection, with the adjustment magnitude proportional to line speed, is a simpler and more effective approach.

It is common in speed compensation models for delays to correlate with travel distance in reference to speed. Most high-speed electrocams utilize linear speed compensation for pattern tracking. Shifting the position to trigger the bit stream may not align perfectly with the delay factor, possibly requiring adjustments such as a position and a half.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Two key factors may impact the process. When the pass/fail sensor is positioned more than one bottle width before the reject mechanism, the shift register must be capable of monitoring the quality of bottles moving through the pipeline. Additionally, speed compensation is adjusted to the predetermined time or pulse count between the trigger and reject points to ensure accurate detection and rejection of defective products.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve, you are right. It is ideal to place the sensor in one bottle frame to ensure accuracy at high speeds. It seems that the blast is brief enough to handle two bottles in succession. If moving the reject sensor closer is not feasible, utilizing a secondary reject shift register can be a solution. This method will allow for a timer delay to be executed, likely only requiring a linear timer preset adjustment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of speed comparison models, it is common to encounter linear behaviors. However, it is essential to understand that just because a process is assumed to be linear does not necessarily mean that it is. When evaluating a logical model for the process of camera label inspection to bottle reject station, including previously suggested delays, it is imperative to outline the model assumptions, provide hypothetical values, and calculate timedelays for three different constant line speeds. The calculated delay will not follow a linear pattern in relation to speed, indicating a non-linear characteristic.

It is worth noting that while utilizing a linear model approximation may work in certain scenarios, the line speed versus delay characteristic is inherently non-linear. For instance, when winding web material, using the square root of the length on a roll as an independent variable in a linear model to estimate the roll's diameter as a dependent variable may suffice despite the non-linear relationship due to the non-zero diameter of the core.

Additionally, it is important to consider that the resolution of bit shift may not perfectly align with the delay. In some cases, a position and a half might be necessary for accuracy. It is advisable for the unit length along the conveyor or line to be significantly smaller than the width of a bottle. Any deviation from this could indicate a separate issue with the process design that needs to be addressed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In engineering, assuming linear behavior is essential, although it does not always apply to every process. To demonstrate this concept, we can create a rational model for the camera-label-inspection-to-bottle-reject-station process, considering a proposed delay. By stating our model assumptions, providing hypothetical values, and calculating timedelays for three different constant line speeds, we can see that the calculated delay is not linear with speed.

While a linear model approximation may work for speed vs. delay characteristics, it's important to note that the relationship between line speed and delay is non-linear. For instance, when winding web material, using the square root of length to approximate the diameter of a roll may be sufficient, despite the non-linear nature of the relationship due to the core's non-zero diameter.

In examining the non-linear aspects, let's consider the distance at which detection occurs from rejection, assumed to be 5 inches. As a bottle travels at different speeds, such as 5 inches per second, 10 inches per second, or 20 inches per second, the time it takes to reach the detection point varies. This demonstrates a linear function, with delay being determined by distance divided by speed, with a constant factor.

It's important to distinguish between speed (in/sec) and rate (bottles per sec) in understanding the linear travel of a bottle along the delivery system. While rate affects the density of bottles in the system, the speed of the bottle as it moves from detection to rejection is the critical factor.

Linear speed compensation is commonly used in systems tracking widget movement, pattern stitching, volume dispensing, and more. This compensation is akin to a programmable limit switch application. On the other hand, considerations like diameter compensation in web payoffs or winders pertain to the length versus speed relationship of the mandrel and web, unrelated to the linear travel of a bottle in a delivery system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When calculating velocity using the formula v = d/t, it is important to understand that time to travel a certain distance is not constant with increasing speed. This relationship is better visualized on an exponential graph, where doubling the speed results in halving the time taken to cover a specific distance.

I recently encountered this concept while determining dwell time in a spiral freezer based on belt speed. While the manufacturer traditionally used a linear calculation method, I found that the exponential relationship between speed and time was more accurate. By grasping the non-linear nature of the relationship between distance traveled and speed, I was able to optimize the calculations for better accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a linear relationship, the key factor to consider is the constant distance, rather than speed or time. This means that regardless of changes in speed or time, the relationship between the remaining two parameters remains consistent.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF explained that the key factor to consider is that distance remains constant in a scenario where speed or time are constant. This establishes a linear relationship between the two remaining parameters. Velocity, expressed as distance divided by time (v = d/t), can be rearranged to solve for time as t = d/v, or t=dv^-1 in another representation. This relationship forms an exponential graph, where doubling the speed results in halving the time taken to travel a certain distance.

ASF shared their experience of trying to calculate dwell time in a spiral freezer based on belt speed, compared to the OEM's linear calculation method. While the linear approach was sufficient for practical purposes within a certain range, the non-linear relationship between distance and speed intrigued ASF and led them to delve deeper into understanding the concept.

In hindsight, ASF acknowledged that in real production settings, operations are not conducted at 0 or infinite speed. Reflecting on the initial post and considering the minimum and maximum values, ASF found the topic intriguing and insightful, sparking some late-night contemplation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee asked for an explanation on the non-linearity of a system, using the example of a bottle traveling through a delivery system. The speed at which the bottle moves through the system is crucial, not the rate at which bottles are processed. The shift register in the system represents physical distances, with the speed of the bottle determining the pulse of the shift. Linear speed compensation is used in such systems, similar to a programmable limit switch application.

While most production lines operate within a specific speed range where linear approximation works well, the system can be considered an inverse proportional or decay function across a broader range of speeds. This distinction is important in theoretical terms, highlighting the complexity of the system beyond practical applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The image provided shows encoder pulses being synchronized to a constant time frame at varying line speeds of 16Hz, 8Hz, and 4Hz. These speeds are measured in pulses per second. The process involves the Bit Shift Right (BSR) assumption, where the reject pusher makes contact with the bottle at bit position 0. The distance from the camera to the reject is modeled using 16 encoder pulses. The PLC sets a fail bit at bit position 16, with a pusher delay of 250ms that remains consistent across different line speeds. The PLC must send a reject trigger signal 0.25s before the fail bit reaches bit position 0, ensuring the reject pusher touches the bottle in time. The position at which the PLC triggers the reject is directly proportional to the line speed, calculated as Trigger Position = ΔTreject * speed. Additional delays, such as a 25ms inspection delay between the camera trigger and fail signal received by the PLC, can be factored into the Trigger Position calculation as Trigger Position = (ΔTinspect + ΔTreject) * speed. This information aligns with insights shared by @Steve Bailey in Post #2.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A helpful tip is to reduce speed to a consistent low level when dealing with rejects, before smoothly transitioning back to the regular speed afterwards. This strategy can improve efficiency and reduce downtime.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider reducing the speed to a constant low level when dealing with rejects, then resume to regular speed once the process is completed. However, this suggestion may not be well-received by production teams. The original poster mentioned that reject timing was optimal at regular line speed but premature at lower speeds.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to tarik1978's suggestion, a common approach is to reduce speed during rejection and then resume normal speed afterward. However, as pointed out by @Steve Bailey, this method may not sufficiently address delays caused by inspection processes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee admitted his mistake, joking about the consequences of posting after long days. He acknowledged confusing an inverse proportional function with a linear one, showing how he missed the bigger picture. In practical terms, most production lines operate within a specific speed range where a linear approximation is usually accurate. However, in theory, from 0 to infinity, ASF and Bitboy are correct in stating that it follows a decay function. Mea culpa all around. We've all experienced those lightbulb moments when we realize something we thought was linear is actually more complex. It can be challenging to shift our thinking, but once we do, everything falls into place.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF shared: We can all relate to those moments of realization that can completely perplex us. I remember vividly the day when I discovered that dwell time and speed do not correlate linearly, and it truly challenged my understanding. It consumed my thoughts until I found a way to rewire my brain and make sense of it. It's like untangling a complex puzzle – multiplying by unity is straightforward, but dividing by unity opens up a whole new realm of complexity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the rejector firing early at low line speeds when controlled by an encoder?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to the synchronization between the encoder signal, solenoid release timing, and the actual bottle position. Changes in line speeds may impact this synchronization, causing the rejector to fire prematurely.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the bottle rejection issue caused by early firing of the rejector?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by checking the alignment and calibration of the encoder, ensuring it accurately detects the bottle position. Also, verify the solenoid's response time and adjust it if necessary to match the line speed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How does the Cognex camera system and Logix5000 PLC play a role in this bottle rejection problem?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Cognex camera system is likely responsible for detecting label failures and sending signals to the PLC, which in turn triggers the rejector. Issues in signal transmission or processing between these components could lead to the rejector firing early. Validate the communication and signal integrity between the camera system and PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there specific adjustments or settings that can help resolve the early firing of the rejector issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You may need to fine-tune the parameters in the control system that govern the rejector's operation. This could involve adjusting delay times, response thresholds, or sensitivity levels to ensure the rejector fires at the correct moment</p>
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
