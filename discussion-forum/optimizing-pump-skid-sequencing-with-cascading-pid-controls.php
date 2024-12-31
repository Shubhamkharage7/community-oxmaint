
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This topic aligns with the thread discussed by Robert, but here I am, ready to tackle the challenge. I am tasked with programming a unique pump skid that features 5 pumps of varying capacities, each equipped with VFDs, all feeding into a common pressure header. Unlike my previous projects">
    <meta name="keywords" content="pump skid sequencing, cascading pid controls, vfd pumps, pressure header system, pump skid programming, pump skid activation, varying pump capacities">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-pump-skid-sequencing-with-cascading-pid-controls">
    <title>Optimizing Pump Skid Sequencing with Cascading PID Controls | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing Pump Skid Sequencing with Cascading PID Controls | Oxmaint Community">
    <meta property="og:description" content="This topic aligns with the thread discussed by Robert, but here I am, ready to tackle the challenge. I am tasked with programming a unique pump skid that features 5 pumps of varying capacities, each equipped with VFDs, all feeding into a common pressure header. Unlike my previous projects">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-pump-skid-sequencing-with-cascading-pid-controls">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing Pump Skid Sequencing with Cascading PID Controls | Oxmaint Community">
    <meta name="twitter:description" content="This topic aligns with the thread discussed by Robert, but here I am, ready to tackle the challenge. I am tasked with programming a unique pump skid that features 5 pumps of varying capacities, each equipped with VFDs, all feeding into a common pressure header. Unlike my previous projects">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-pump-skid-sequencing-with-cascading-pid-controls"
      },
      "headline": "Optimizing Pump Skid Sequencing with Cascading PID Controls",
      "description": "This topic aligns with the thread discussed by Robert, but here I am, ready to tackle the challenge. I am tasked with programming a unique pump skid that features 5 pumps of varying capacities, each equipped with VFDs, all feeding into a common pressure header. Unlike my previous projects",
      "author": {
        "@type": "Person",
        "name": "TheWaterboy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-20",
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
                <h1 class="text-white">Optimizing Pump Skid Sequencing with Cascading PID Controls</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>26 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">917</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">347</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>This topic aligns with the thread discussed by Robert, but here I am, ready to tackle the challenge. I am tasked with programming a unique pump skid that features 5 pumps of varying capacities, each equipped with VFDs, all feeding into a common pressure header. Unlike my previous projects with VFDs on a single pump, this one requires a different approach. I aim to sequentially activate the pumps, starting the next one once the previous reaches 100% capacity. Additionally, I plan to rotate the 'first' pump in the series to ensure all pumps are exercised. Is there a more sophisticated solution than implementing complex PID control methods? Could cascading PID control be the answer, where the second PID kicks in once the first maxes out? How should I approach this challenging task effectively?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When designing a pump control system, consider running a single PID controller to regulate the pumps' speed based on system capacity. Distribute the load among the 5 pumps with varying capacities to achieve optimal performance. Handle sequencing separately for efficiency. For example, if pump capacities are 30, 30, 20, 20, and 20, and the system requires 55% capacity, adjust the pump speeds accordingly. Keep in mind that this is a simplified approach and may need adjustments based on pressure variations. Consider starting the second pump when the first reaches 80-90% capacity. Implementing a Variable Frequency Drive (VFD) for cost savings by optimizing pump performance is a common practice. Experiment with adjusting pump speeds and valve positions to achieve energy savings and improve system efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Running multiple pumps at half speed was once thought to be more energy efficient due to the inverse square law, but newer drives have dispelled this idea. However, running all five pumps at once is not ideal for energy efficiency. The situation you are encountering is similar to what I have been managing for years, but now with all VFDs. Grundfos offers a system with an integrated controller that effectively controls multiple VFD pumps. They showcase their pump control capabilities by demonstrating a floating ball moving in a circle on the jets of multiple VFD pumps, which is quite impressive.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's late in my time zone and I've had a rough day, but it seems like your skid is designed to only require 2 large pumps and one small pump, which simplifies things to some extent. I might follow your suggestion and aim to maintain pressure with the large pumps (either 2 or 1) and then use the small pump as needed. Incorporating joseph's PID idea seems effective, or you could adjust your current strategy. Are there any resources available on the energy consumption comparison between using two pumps versus one? While considering pump wear and potential failures, I am curious to see any energy calculations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The two large pumps are designated for emergency situations, although they are seldom utilized. However, it is crucial that they remain operational as the other three pumps may not suffice in such cases. To ensure their functionality, I intermittently rotate them and utilize their capacity. While the specifics are hazy, the concept of reducing motor speed by 10% leading to a 20% decrease in energy consumption was discussed. Although these numbers are approximate, the underlying principle remains the same. In one instance, when a bypass relay was activated at maximum speed and the VFD was not in use, the system did not perform as effectively, indicating a potential issue originating from earlier configurations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy expressed his thoughts on a topic raised by @robertmeetalks, highlighting a unique challenge he is facing. He is tasked with programming a pump skid, a task unfamiliar to him as it involves multiple pumps of varying capacities controlled by VFDs towards a common pressure header. Unlike his previous projects with a single pump and VFD, the complexity of this skid requires a different approach. He aims to sequentially activate the pumps, one by one, and rotate the "first" pump in the series to ensure all are functioning properly. The question arises whether cascading a PID control is a more elegant solution than intricate programming to achieve this. By having the second PID aware of the first one's maxed-out status, a smoother operation can be achieved. The challenge lies in implementing this approach effectively. The familiarity with the term PID showcases expertise in control systems, distinguishing one from being a novice in the field.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee pointed out that being familiar with the abbreviation PID may exclude you from being considered a novice. Are you referring to Pelvic Inflammatory Disease?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy mentioned Pelvic Inflammatory Disease, indicating a potential concern depending on your circumstances. It's hard to say without knowing the kind of people you associate with. Click to read more about PID.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A few years back, I participated in a project with similarities to this one, but it had only moderate success. This particular project involved multiple steam boilers connected to a common header. During operation, only one boiler would adjust its firing rate to maintain the header pressure, with the next boiler in line igniting as the previous one reached maximum capacity. This system worked effectively if all boilers were similar in size, but struggled with significant variations in capacity. The PID gains that were ideal for larger boilers proved inadequate for smaller ones. Additionally, the lack of a demand sensor meant that sudden changes in demand could destabilize the system, as it took time for a boiler to start up. I will attempt to locate the project files, although my old laptop - which served as my main tool during that time - has since ceased to function.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I stumbled upon a recommendation to utilize a single PID controller for regulating multiple pumps connected to a shared output. While the concept seems straightforward initially, I began contemplating the necessary adjustments to the PID parameters when dealing with various pump configurations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>(1) How many pumps are typically under feedback control for process measurement, such as pressure, even if they are not actively running? (2) How would you categorize the pumps in terms of size, such as "big," "small," or another classification like 2 big and 3 small? (3) What is the expected distribution of pump sizes to meet the requirements of feedback control for process measurement? (4) In a scenario of emergency flow, is feedback control necessary, or are a specific number of pumps of a certain size running at a certain percentage?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy mentioned receiving a recommendation to utilize a single PID to regulate multiple pumps connected to a shared output. Although initially straightforward, thinking about how the PID parameters may need adjustment with various pump configurations raised some questions. This is essentially the topic I am exploring with these inquiries.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy questioned if cascading a PID control involves a certain concept. However, it was clarified that cascading pumps are a different concept, not related to PID instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Waterboy recommended using a single PID to regulate multiple pumps connected to a shared output. While this concept may seem straightforward, the adjustments needed for the PID terms with varying pump combinations can be complex. Do you know how to determine the operating point based on the system curve (showing flow versus pressure drop) and pump curves (showing flow versus pressure rise)? Managing two pumps of different sizes can add a layer of complication, but it serves as a good starting point for control. Which process measurement needs to be monitored and controlled in this setup?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about the number of pumps that will be controlled by feedback for process measurement, drbitboy asked for clarification on the sizes and distribution of the pumps to fulfill this requirement. The discussion also revolved around determining the operating point based on system and pump curves, particularly focusing on maintaining pressure at 105 PSI with the assistance of a large bladder tank. With plans for system expansion and replacement, including backup larger pumps for emergency flow, the challenge lies in managing the different pump sizes effectively. Despite the complexity introduced by the larger pumps, the rotation strategy aims to prevent pump failure and maintain consistent pressure levels during operation. Future considerations include further refining the hydraulic model to optimize pump performance in the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently learned that centrifugal pumps operating at various speeds can result in varying pressures, so I can't just start them up individually. This revelation has simplified my decision-making process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why bother implementing PID control when a bladder tank is present? A simple bang-bang control system, also known as a Start/Stop circuit pattern, could be sufficient for the job.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After a revelation, TheWaterboy realized that centrifugal pumps operating at various speeds will yield different pressures, making it necessary to adjust them collectively. This simplifies the decision-making process. The pumps will move along their flow vs. pressure performance graphs, adjusting their speeds to match the system curve until they reach the same output pressure. This process is distinct from creating varying pressures. If the deadhead (zero-flow) pressure of pump A at speed speedA is lower than the pressure produced by pump B at speed speedB, the fluid may flow in reverse through pump A.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To start off, it is essential to understand pump curves and system curves to identify the operating point where they intersect. By utilizing the system curve and pump performance curve, you can effectively choose the most suitable pump for a specific application. This knowledge is crucial for optimal pump selection and functionality. I acquired this understanding during my nuclear power training more than 45 years ago, particularly in the context of nuclear submarines that had redundant pumps operating in parallel with dual coolant loops. Mechanical engineers should closely consider these principles for efficient and reliable pump systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey expressed astonishment at the lack of interest from mechanical engineers in this topic. He suggested that they should be more involved. He pointed out that having a chemical engineer on board would significantly enhance the project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy questioned the necessity of using PID control when a bladder tank is already in place, suggesting that a simple bang-bang control method could suffice. However, due to the need for immediate testing, bang-bang control will be implemented for now. Nevertheless, once all necessary information is obtained, efforts will be made to optimize the control system further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this scenario, TheWaterboy is being blamed for the situation. It would have been beneficial to request pump and systems curves to determine the operating point. TheWaterboy cannot control the system curve, which affects how the operating point moves along with pump flow. The interaction between the pumps is an unknown factor, as well as the presence of check valves at the pump outputs. The bladder functions as an accumulator, although its effectiveness may be limited. In the past, pump curves were used in the nuclear industry, with different curves for one pump and two pumps operating at high and low speeds. While Chemical Engineering may be more challenging than mechanical engineering, it is important to seek documentation to avoid problems with fluid systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy stated that they need to make adjustments for testing today, so they will make it work with bang-bang controls. However, they aim to improve the setup once they gather the necessary information. Good job in addressing the issue promptly. The code involves monitoring pressure levels and pump operations to ensure smooth performance. The optional use of the XIO RunBigPump system comes into play when the small pump struggles to keep up, allowing the big pump to take over. This prevents the small pump from overheating due to zero flow. Keep in mind that this system operates separately from emergency flow scenarios and the active/spare pumps' functions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey inquired about obtaining pump and systems curves. How can one generate or obtain system curves for a system in operation since 1961, with numerous changes over the years and ongoing modifications? Is there a method to achieve stability, introduce a pump speed change, and record the pressure response? I support the idea of establishing an accurate system model before attempting to regulate it, but what steps can be taken if such a model is not accessible?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Share the pump performance curves as soon as you receive them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TWS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I envisioned developing a real-time monitor to visually indicate the operating point of the pump on the performance curve. This feature would be particularly useful in various applications I work on. In one specific instance, there were three 100 HP pumps at a single location, and one of them was underperforming without anyone noticing for 20 years due to their identical appearance. As a result, the overall performance of all three pumps was affected, leading to disappointment. It was an interesting experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If one pump generates more pressure than the others, it can disrupt the flow of water. In the past with two-speed pumps, combining high and low speeds was possible by using check valves to prevent water from being forced back through the slower pump. This can be compared to a common emitter circuit in electronics, where two transistors attempt to push current through one resistor (similar to piping in this scenario). 
Do all the pumps have the same capacity for head? It's important to note that doubling the speed of a pump results in a significant increase in power requirements, with an eightfold rise in energy consumption.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the challenge in optimizing pump skid sequencing with cascading PID controls?</h4>
<p class='text-muted'><strong>Answer:</strong> - The challenge lies in programming a unique pump skid with 5 pumps of varying capacities, each equipped with VFDs, to sequentially activate the pumps and rotate the 'first' pump in the series to ensure all pumps are exercised.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a more sophisticated solution than complex PID control methods for this task?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, one potential solution could be implementing cascading PID control, where the second PID controller kicks in once the first pump reaches 100% capacity.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can cascading PID controls be applied to optimize pump skid sequencing effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> - Cascading PID controls can be applied by setting up a control scheme where the second PID controller activates once the first pump reaches its maximum capacity, ensuring efficient operation of the pump skid system.</p>
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
