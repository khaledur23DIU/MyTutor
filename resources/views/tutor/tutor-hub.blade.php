@extends('layouts.frontend.app', ['activePage' => 'tutorHub', 'titlePage' => __('TUTORS HUB')])

@push('css')

@endpush

@section('content')

<div class="tutor-hub-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tutor-search">
                    <h3>Tutor Search <i class="fas fa-angle-down"></i></h3>
                    <div class="ts-f">
                        <label for="">Within</label>
                        <select name="" id="">
                            <option value="1">1 KM</option>
                            <option value="2">2 KM</option>
                            <option value="3">3 KM</option>
                            <option value="4">4 KM</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="tutor-filter">
                    <ul class="tf-list">
                        <li>
                            <a href="#">City</a>
                        </li>
                        <li>
                            <a href="#">Location</a>
                        </li>
                        <li>
                            <a href="#">University</a>
                        </li>
                        <li>
                            <a href="#">Department</a>
                        </li>
                        <li>
                            <select name="" id="">
                                <option value="Gender">Gender</option>
                                <option value="any">Any</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </li>
                        <li>
                            <a href="#">Curriculum</a>
                        </li>
                        <li>
                            <a href="#">Classe</a>
                        </li>
                        <li>
                            <a href="#">Tutor ID</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tutors-list">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-tutors">
                        <div class="st-img">
                            <img src="https://via.placeholder.com/80" alt="">
                        </div>
                        <div class="st-text">
                            <a href="#">Najmus Sakib</a>
                            <p>Ispahani Public School & College</p>
                            <p>Cumilla Victoria Govt. College</p>
                            <span>With 2 Years of Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tutors">
                        <div class="st-img">
                            <img src="https://via.placeholder.com/80" alt="">
                        </div>
                        <div class="st-text">
                            <a href="#">Najmus Sakib</a>
                            <p>Ispahani Public School & College</p>
                            <p>Cumilla Victoria Govt. College</p>
                            <span>With 2 Years of Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tutors">
                        <div class="st-img">
                            <img src="https://via.placeholder.com/80" alt="">
                        </div>
                        <div class="st-text">
                            <a href="#">Najmus Sakib</a>
                            <p>Ispahani Public School & College</p>
                            <p>Cumilla Victoria Govt. College</p>
                            <span>With 2 Years of Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tutors">
                        <div class="st-img">
                            <img src="https://via.placeholder.com/80" alt="">
                        </div>
                        <div class="st-text">
                            <a href="#">Najmus Sakib</a>
                            <p>Ispahani Public School & College</p>
                            <p>Cumilla Victoria Govt. College</p>
                            <span>With 2 Years of Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tutors">
                        <div class="st-img">
                            <img src="https://via.placeholder.com/80" alt="">
                        </div>
                        <div class="st-text">
                            <a href="#">Najmus Sakib</a>
                            <p>Ispahani Public School & College</p>
                            <p>Cumilla Victoria Govt. College</p>
                            <span>With 2 Years of Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tutors">
                        <div class="st-img">
                            <img src="https://via.placeholder.com/80" alt="">
                        </div>
                        <div class="st-text">
                            <a href="#">Najmus Sakib</a>
                            <p>Ispahani Public School & College</p>
                            <p>Cumilla Victoria Govt. College</p>
                            <span>With 2 Years of Experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
  {{-- expr --}}
@endpush
