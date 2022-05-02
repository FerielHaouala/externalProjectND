@extends('blogs.secondHeader')

@section('title')
{{$blog->title}}

@endsection
@section('body')

<div class="blog">

    <div class="blog_test"><img class="img_blog" src="/{{$blog->image}}" alt=""></div>
    <div class="container blog">
        <div class="row d-flex">
            <div class="col-md-1">
            </div>
            <div class="col-md-3">

                <div class="row">
                    <div class="sidebar-categories-top">
                        <h4> Published</h4>
                        <span style="display:inline;"><i class="fa fa-calendar-o"></i> {{$blog->updated_at}}</span>
                    </div>
                </div>
                <div class="sidebar-categories-top">
                    <h4 class="sidebar-categories"> Categories</h4>

                    <button class="fill Blog">Blogs</button>
                    <button class="fill Blog">Papers</button>
                </div>
                <div class="sidebar-categories-top">
                    <h4>Latest Research Papers</h4>
                    <ul>
                        <li class="latestPosts">
                            <a class="links" href="https://www.instadeep.com/research/paper/diversity-policy-gradient-for-sample-efficient-quality-diversity-optimization/">Diversity Policy Gradient for Sample Efficient Quality-Diversity Optimization</a>
                            <br>
                            <div class="post-date"> <span class="post-date">April 28, 2022</span>
                            </div>
                        </li>
                        <li class="latestPosts">
                            <a class="links" href="https://www.instadeep.com/research/paper/autoregressive-neural-network-wavefunctions-for-ab-initio-quantum-chemistry/">Autoregressive neural-network wavefunctions for ab initio quantum chemistry</a>
                            <br>
                            <div class="post-date"> <span class="post-date">April 6, 2022</span>
                            </div>
                        </li>
                        <li class="latestPosts">
                            <a class="links" href="https://www.instadeep.com/research/paper/robust-and-scalable-sde-learning-a-functional-perspective/">Robust and Scalable SDE Learning: a Functional Perspective</a>
                            <br>
                            <div class="post-date"> <span class="post-date">January 24, 2022</span>
                            </div>
                        </li>
                        <li class="latestPosts">
                            <a class="links" href="https://www.instadeep.com/research/paper/one-step-at-a-time-pros-and-cons-of-multi-step-meta-gradient-reinforcement-learning/">One Step at a Time: Pros and Cons of Multi-Step Meta-Gradient Reinforcement Learning</a>
                            <br>
                            <div class="post-date"> <span class="post-date">December 6, 2021</span>
                            </div>
                        </li>
                        <li class="latestPosts">
                            <a class="links" href="https://www.instadeep.com/research/paper/on-pseudo-absence-generation-and-machine-learning-for-locust-breeding-ground-prediction-in-africa/">On pseudo-absence generation and machine learning for locust breeding ground prediction in Africa</a>
                            <br>
                            <div class="post-date"> <span class="post-date">December 6, 2021</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-categories-top">
                    <h4> Latest Posts</h4>
                    <ul>
                        <li class="latestPosts">
                            <a class="links" href="https://www.instadeep.com/research/paper/diversity-policy-gradient-for-sample-efficient-quality-diversity-optimization/">Diversity Policy Gradient for Sample Efficient Quality-Diversity Optimization</a>
                            <br>
                            <div class="post-date"> <span class="post-date">April 28, 2022</span>
                            </div>
                        </li>
                        <li class="latestPosts">
                            <a class="links" href="https://www.instadeep.com/research/paper/autoregressive-neural-network-wavefunctions-for-ab-initio-quantum-chemistry/">Autoregressive neural-network wavefunctions for ab initio quantum chemistry</a>
                            <br>
                            <div class="post-date"> <span class="post-date">April 6, 2022</span>
                            </div>
                        </li>
                        <li class="latestPosts">
                            <a class="links" href="https://www.instadeep.com/research/paper/robust-and-scalable-sde-learning-a-functional-perspective/">Robust and Scalable SDE Learning: a Functional Perspective</a>
                            <br>
                            <div class="post-date"> <span class="post-date">January 24, 2022</span>
                            </div>
                        </li>
                        <li class="latestPosts">
                            <a class="links" href="https://www.instadeep.com/research/paper/one-step-at-a-time-pros-and-cons-of-multi-step-meta-gradient-reinforcement-learning/">One Step at a Time: Pros and Cons of Multi-Step Meta-Gradient Reinforcement Learning</a>
                            <br>
                            <div class="post-date"> <span class="post-date">December 6, 2021</span>
                            </div>
                        </li>
                        <li class="latestPosts">
                            <a class="links" href="https://www.instadeep.com/research/paper/on-pseudo-absence-generation-and-machine-learning-for-locust-breeding-ground-prediction-in-africa/">On pseudo-absence generation and machine learning for locust breeding ground prediction in Africa</a>
                            <br>
                            <div class="post-date"> <span class="post-date">December 6, 2021</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-categories-top">
                    <h4 class="sidebar-categories"> Leave a Feedback </h4>
                    <div id="footer-social-buttons">
                        <img src="https://img.icons8.com/ios-filled/25/999999/facebook--v1.png" />
                        <img src="https://img.icons8.com/ios-filled/25/999999/instagram--v1.png" />
                        <img src="/assets/img/icons8-twitter-32.png" />
                        <img src="/assets/img/icons8-linkedin-32.png" />
                    </div>
                </div>
            </div>
            <div class="col-md-8 blog_content1">
                <div class="my-4">
                    <h1>{{$blog->title}}</h1>
                </div>
                <div class="blog-content">

                    {!! $blog->content !!}

                </div>


            </div>

        </div>
    </div>

</div>

@endsection