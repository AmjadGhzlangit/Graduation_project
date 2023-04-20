<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic elections</title>
    
    <!-- normalize File  -->
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css'); }}">
    <!-- Font Awsome File -->
    <link rel="stylesheet" href="{{ URL::asset('css/all.min.css'); }} ">
    <!-- Main Css File  -->
    <link rel="stylesheet" href="{{ URL::asset('css/test.css'); }} ">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- Start Header Section  -->
    @include('layouts.navigation')
    <!-- End Header Section  -->
    
    <!-- Start Landing section  -->
    <div class="landing">
        <div class="container">
            <div class="text">
                <h1>Welcome, To Elections World</h1>
                <!-- <p>Welcome to our Elections website! Here, you can find all the information you need about the upcoming elections,
                    including registration, candidates, and voting. Our goal is to provide a user-friendly platform that allows you to
                    easily participate in the democratic process. Stay informed and get ready to cast your vote!</p> -->
                <p>مرحبًا بكم في موقعنا الإلكتروني الخاص بالانتخابات! هنا ، يمكنك العثور على جميع المعلومات التي تحتاجها
                    حول الانتخابات
                    القادمة ، بما في ذلك التسجيل والمرشحين والتصويت. هدفنا هو توفير منصة سهلة الاستخدام تتيح لك المشاركة
                    بسهولة في العملية
                    الديمقراطية. ابق على اطلاع واستعد للإدلاء بصوتك!</p>
            </div>
            <div class="image">
                <img src="/images/about.png" alt="">
            </div>
        </div>
        <!-- here will be the arrow to move me to next section  -->
        <div class="go-down">
            <a href="#about"><i class="fas fa-angle-double-down fa-2x"></i></a>
        </div>
    </div>
    <!-- End Landing section  -->

    <!-- Start About Us Section  -->
    <div class="about_us" id="about">
        <h2 class="main-title">من نحن</h2>
        <div class="container">
            <div class="image">
                <img src="{{ URL::asset('images/about_2.png'); }}" alt="">
            </div>

            <div class="text">
                <h1>من نحن</h1>
                <p>مرحبًا بك في موقعنا الانتخابي الذي يوفر لك فرصة المشاركة في الانتخابات القادمة. يهدف موقعنا إلى تسهيل
                    عملية التصويت
                    لجميع المواطنين والمقيمين في الدولة، وتوفير المعلومات اللازمة حول الانتخابات والمرشحين وكيفية
                    التسجيل والتصويت.

                    يتميز موقعنا بواجهة سهلة الاستخدام ومعلومات دقيقة ومحدثة عن المرشحين والانتخابات. يتم تحديث الموقع
                    بشكل منتظم لضمان
                    توفير أحدث المعلومات حول المرشحين والاستعدادات الانتخابية.

                    ومن خلال موقعنا، يمكنك التعرف على كيفية التسجيل للتصويت، والشروط اللازمة للتصويت، والمواعيد القادمة
                    للانتخابات، وغير ذلك
                    الكثير. كما يمكنك الاطلاع على آخر الأخبار والتطورات المتعلقة بالانتخابات والمرشحين، والتواصل مع فريق
                    الدعم الفني للحصول
                    على المساعدة والدعم اللازم.

                    يسعدنا أن نقدم لك خدمة تجربة تصويت سلسة وسهلة عبر موقعنا، ونأمل أن يكون موقعنا هو الخيار الأفضل لك
                    للمشاركة في
                    الانتخابات القادم</p>
            </div>

        </div>
        <!-- here will be the arrow to move me to next section  -->
        <div class="go-down">
            <a href="#latest-news"><i class="fas fa-angle-double-down fa-2x"></i></a>
        </div>
    </div>
    <!-- End About Us Section  -->

    <!-- Start latest-news section  -->

    <div class="latest-news" id="latest-news">
        <h2 class="main-title">الاخبار</h2>
        <div class="text">
            <h1>آخر الأخبار</h1>
            <p>سنعلن قريباً عن المواعيد القادمة للانتخابات. يرجى الاطلاع على هذه الصفحة بانتظام للحصول على التحديثات.
            </p>
        </div>
        <div class="container">
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-01.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-02.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-02.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-04.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-05.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-06.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-07.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-08.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="spikes"></div>
    <!-- End latest-news section  -->
    <!-- Start Candidates section  -->

    <div class="latest-news" id="candidates">
        <h2 class="main-title">ساحة الانتخابات</h2>
        <div class="text">
            <h1>المرشحين</h1>
            <p>سنعلن قريباً عن المواعيد القادمة للانتخابات. يرجى الاطلاع على هذه الصفحة بانتظام للحصول على التحديثات.
            </p>
        </div>
        <div class="container">
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-01.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-02.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-02.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-04.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-05.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-06.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-07.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="{{ URL::asset('images/cat-08.jpg'); }}" alt="" />
                <div class="content">
                    <h3>Test Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="spikes"></div>
    <!-- End Candidates section  -->

    <!-- Start Events -->
<div class="events" id="events">
    <div class="dots dots-up"></div>
    <div class="dots dots-down"></div>
    <h2 class="main-title">اخر الاحداث</h2>
    <div class="container">
        <img src="{{ URL::asset('images/events.png'); }}" alt="" />
        
        <div class="info">
            <h2 class="title"> انتهاء الانتخابات خلال </h2>
            <div class="time">
                <div class="unit">
                    <span class="days">15</span>
                    <span>Days</span>
                </div>
                <div class="unit">
                    <span class="hours">08</span>
                    <span>Hours</span>
                </div>
                <div class="unit">
                    <span class="minutes">45</span>
                    <span>Minutes</span>
                </div>
                <div class="unit">
                    <span class="seconds">55</span>
                    <span>Seconds</span>
                </div>
            </div>
            <p class="description">
                نحن في انتظار الانتهاء من العد وإعلان النتائج الرسمية للانتخابات. من المهم أن نتذكر أن الانتخابات هي عملية ديمقراطية
                حيوية ومهمة، وعلينا جميعًا احترام النتائج النهائية والعمل معًا كمواطنين لبناء مستقبل أفضل لبلدنا. سواء كنتم فائزين أو
                خاسرين في هذه الانتخابات، يجب علينا جميعًا التفكير في المصلحة العامة والعمل معًا لتحقيق التغيير والتحسين في مجتمعنا.

            </p>
        </div>
    </div>
</div>
    <!-- End Events -->

    <!-- Start Support Section -->
    <div class="discount" id="discount">
    <div class="image">
        <div class="content">
        <h2>الدعم الفني</h2>
        <p>
نحن نحرص على تقديم خدمة عملاء ممتازة لزوارنا الكرام. إذا كان لديك أي استفسارات أو مشاكل تواجهك أثناء تصفح الموقع
الانتخابي، يرجى عدم التردد في الاتصال بنا عبر نموذج الاتصال المتاح في صفحة "تواصل معنا". سيتم الرد عليك في أسرع وقت
ممكن. شكرًا لاهتمامك بموقعنا الانتخابي.
        </p>
        <img src="{{ URL::asset('images/problem.png'); }}" alt="" />
        </div>
    </div>
    <div class="form">
        <div class="content">
        <h2>تواصل معنا</h2>
        <form action="">
            <input class="input" type="text" placeholder="Your Name" name="name" />
            <input class="input" type="email" placeholder="Your Email" name="email" />
            <input class="input" type="text" placeholder="Your Phone" name="mobile" />
            <textarea class="input" placeholder="Tell Us About Your Needs" name="message"></textarea>
            <input type="submit" value="Send" />
        </form>
        </div>
    </div>
    </div>
        <!-- End Support Section -->

    <!-- Start footer section  -->
    @include('layouts.footer')
    <!-- End footer section  -->

    <script src={{ asset('js/main.js') }}></script>
</body>

</html>