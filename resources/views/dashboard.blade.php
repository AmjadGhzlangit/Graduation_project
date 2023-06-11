@extends('layouts.app')

@section('content')
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
    <link rel="stylesheet" href="{{ URL::asset('css/all.css'); }} ">
    <!-- Main Css File  -->
    <link rel="stylesheet" href="{{ URL::asset('css/test.css'); }} ">
    {{-- BootStrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet" />
</head>

<body>
    @if(session('success'))
    <div class="alert alert-success text-center">
        <span class="container" >
        {{ session('success') }}
    </span>
    </div>
    @endif

    @if (session('massage'))
    <div class="alert alert-success text-center">
        <span class="container" >
        {{ session('massage') }}
    </span>
    </div>
    @endif
    @if (session('application_message'))
    <div class="alert alert-success text-center">
        <span class="container" >
        {{ session('application_message') }}
    </span>
    </div>
    @endif
    <div class="landing">
        <div class="container">
            <div class="text">
                <h1 class="text-5xl font-bold">Welcome, To Elections World</h1>
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
        <h2 class="font-bold main-title hover:bg-blue-500 ">من نحن</h2>
        <div class="container">
            <div class="image">
                <img src="{{ URL::asset('images/about_2.png'); }}" alt="">
            </div>

            <div class="text">
                <h1 class="font-bold">من نحن</h1>
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
        <h2 class="main-title font-bold  hover:bg-blue-500">الاخبار</h2>
        <div class="text">
            <h1 class="font-bold">آخر الأخبار</h1>
            <p>سنعلن قريباً عن المواعيد القادمة للانتخابات. يرجى الاطلاع على هذه الصفحة بانتظام للحصول على التحديثات.
            </p>
        </div>
        <div class="container mt-5">
            
            @foreach ($news as $one_news )
            <div class="box">
                <img decoding="async" src="{{ asset('app/public/'. $one_news->image_path) }}" alt="" width="100px" height="100px" />
                <div class="content">
                    <h3>{{ $one_news->title }}</h3>
                    <p>{{ $one_news->description }}</p>
                </div>
                <div class="info">
                    <a href="">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            
            @endforeach
            
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
        <h2 class="main-title font-bold  hover:bg-blue-500">ساحة الانتخابات</h2> 
        <ul>
        <li>
            <div class="search-container text-center">
            
            <form action="{{ route('search.index') }}" method="POST">
                @csrf
                <input type="text" name="search" placeholder="البحث عن مرشح او برنامج انتخابي">
                <button type="submit">Search  <i class="fa fa-search search-icon"></i></button>
               
              </form>
          </div></li>
        </ul>
        <div class="text">
            <h1 class="font-bold mb-5">المرشحين</h1>
            <p>سنعلن قريباً عن المواعيد القادمة للانتخابات. يرجى الاطلاع على هذه الصفحة بانتظام للحصول على التحديثات.
            </p>   
        </div>
        <div class="container mt-5"> 
            @foreach($candidacy_applications as $candidacy_application)  
            @if($candidacy_application->status == 1)
            <div class="box">
                <img  src="{{ asset('app/public/'.$candidacy_application->images->font_img)}}" />
                <div class="content">
                    <h3>{{ $candidacy_application->id_information->first_name}} {{ $candidacy_application->id_information->last_name }}</h3>
                    <h6> البرنامج الانتخابي
                    <p> {{ $candidacy_application->election_program }} </p>
                </h6>
                    <h4 class="text-center">   
                    <p> Votes : {{ $candidacy_application->votes}}</p>
                </h4>
                </div>
                <div class="info">
                    <a href="{{ route('show_election',$candidacy_application) }}">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            @endif
        </div> 
            @endforeach          
                  
            
         </div>
    </div>
    <!-- End Candidates section  -->

    <!-- Start Events -->
<div class="events" id="events">
    <div class="dots dots-up"></div>
    <div class="dots dots-down"></div>
    <h2 class="main-title font-bold  hover:bg-blue-500">اخر الاحداث</h2>
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
        <h2 class="font-bold">الدعم الفني</h2>
        
        <p class="mt-3">
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
        <form action="{{ route('messages.store')}}" method="post">
            @csrf
            <input class="input" type="text" placeholder="Your Name" name="name" >
            <input class="input" type="email" placeholder="Your Email" name="email" >
            <textarea class="input" type="text" placeholder="Tell Us About Your Needs" name="message"></textarea>
            <input type="submit" value="Send" >
        </form>
        </div>
    </div>
    </div>
        <!-- End Support Section -->

    <script src="{{asset('js/main.js')}}></script> 
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>


@endsection

