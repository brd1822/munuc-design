@extends('layouts.master')
@section('title',"Reviews") 
@section('content')
<div class="section section-padding pt-4">
   <div class="container">
   <div class="col-md-12 mb-3">
        <h2 class="title text-uppercase text-center">Customer Reviews</h2>
    </div>
    <div class=" mt-3 mb-4">
        <div class="col wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".6s" style="visibility: visible; animation-duration: 3s; animation-delay: 0.6s; animation-name: fadeInLeft;">
            <div class="testimonial">
                <div class="author">
                    <img class="lazyload" data-src="{{ asset('assets-front/reviewimages/1.jpg') }}" alt="">
                    <div class="content">
                    <h6 class="name">Maria from Spain</h6>
                    </div>
                </div>
            <p>
                "Absolutely thrilled with the quality of the bedsheets and towels! The luxurious feel is unmatched, and the pricing is surprisingly reasonable. Trustworthy company, will order again!"
            </p>
        </div>
    </div>
    <div class="col wow fadeInDown" data-wow-duration="4s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 4s; animation-delay: 0.7s; animation-name: fadeInDown;">
        <div class="testimonial">
            <div class="author">
                <img class="lazyload" data-src="{{ asset('assets-front/reviewimages/2.jpg') }}" alt="">
                <div class="content">
                <h6 class="name">Asir from kenya</h6>
                </div>
            </div>
            <p>
                "Impressed with the durability of the bedsheets and towels. The pricing is fair, and delivery was prompt. Trust this brand for consistent quality."
            </p>
            
        </div>
    </div>
    <div class="col wow fadeInRight" data-wow-duration="5s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 5s; animation-delay: 0.8s; animation-name: fadeInRight;">
        <div class="testimonial">
            <div class="author">
                <img class="lazyload" data-src="{{ asset('assets-front/reviewimages/3.jpg') }}" alt="">
                <div class="content">
                <h6 class="name">Elena from Russia</h6>
                </div>
            </div>
            <p>
                "Highly reliable! The bedding and towels are top-notch. The pricing is competitive, making it a great choice for quality products. Will recommend to friends!"
            </p>
            
        </div>
    </div>
    <div class="col">
        <div class="testimonial">
            <div class="author">
                <img class="lazyload" data-src="{{ asset('assets-front/reviewimages/4.jpg') }}" alt="">
                <div class="content">
                <h6 class="name">Carlos from Mexico</h6>
                </div>
            </div>
            <p>
                "Excelente calidad y precio justo! (Excellent quality and fair pricing!) Trustworthy supplier for bulk orders. Very satisfied with the bedsheets and towels."
            </p>
            
        </div>
    </div>
    <div class="col">
        <div class="testimonial">
            <div class="author">
                <img class="lazyload" data-src="{{ asset('assets-front/reviewimages/5.jpg') }}" alt="">
                <div class="content">
                <h6 class="name">Yuki from Japan</h6>
                </div>
            </div>
            <p>
                "信頼性抜群！(Reliability is outstanding!) Japanese buyers appreciate the top-quality bedsheets and towels. Fair pricing makes it a preferred choice."
            </p>
            
        </div>
    </div>
    <div class="col">
        <div class="testimonial">
            <div class="author">
                <img class="lazyload" data-src="{{ asset('assets-front/reviewimages/6.jpg') }}" alt="">
                <div class="content">
                <h6 class="name">Sophie from France</h6>
                </div>
            </div>
            <p>
                "Exquisite! The bedsheets and towels are of exceptional quality. Trustworthy service with reasonable prices. A favorite among French buyers."
            </p>
            
        </div>
    </div>
    <div class="col">
        <div class="testimonial">
            <div class="author">
                <img class="lazyload" data-src="{{ asset('assets-front/reviewimages/7.jpg') }}" alt="">
                <div class="content">
                <h6 class="name">Ahmed from Egypt</h6>
                </div>
            </div>
            <p>
            "منتجات عالية الجودة وأسعار معقولة (High-quality products and reasonable prices) Trustworthy supplier for bed linens and towels. Recommended for bulk purchases!"
            </p>
            
        </div>
    </div>
    <div class="col">
        <div class="testimonial">
            <div class="author">
                <img class="lazyload" data-src="{{ asset('assets-front/reviewimages/8.jpg') }}" alt="">
                <div class="content">
                <h6 class="name">Anita from Brazil</h6>
                </div>
            </div>
            <p>
                "Maravilhoso! (Wonderful!) The bedsheets and towels are fantastic, and the pricing is fair. Trustworthy supplier that meets our high standards. Obrigada!"
            </p>
            
        </div>
    </div>
    <div class="col">
        <div class="testimonial">
            <div class="author">
                <img class="lazyload" data-src="{{ asset('assets-front/reviewimages/9.jpg') }}" alt="">
                <div class="content">
                <h6 class="name">Ken from the USA</h6>
                </div>
            </div>
            <p>
                "Exceptional quality! The bedsheets and towels are soft and durable. Trust and reasonable pricing make this supplier stand out. Repeat customer here!"
            </p>
            
        </div>
    </div>
    <div class="col">
        <div class="testimonial">
            <div class="author">
                <img class="lazyload" data-src="{{ asset('assets-front/reviewimages/10.jpg') }}" alt="">
                <div class="content">
                <h6 class="name">Lily from Australia</h6>
                </div>
            </div>
            <p>
                "Outstanding service! The bedsheets and towels are top-grade. Fair pricing and reliability set this company apart. A go-to for bulk orders Down Under!"
            </p>
        </div>
    </div>
    </div>
   </div>
</div>
@endsection