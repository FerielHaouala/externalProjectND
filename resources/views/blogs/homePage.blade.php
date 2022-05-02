@extends('blogs.secondHeader')



@section('title','News & Blogs')
@section('body')
<div class="wrapper Blog_list">

    <div class="item-bg" style="height: 0px; width: 0px;"></div>

    <div class="news-slider">
        <div class="detail-box">
            <div class="row">
                <div class="column col-md-8">
                    <h1>
                        News & Blogs </h1>
                </div>
                <div class="column col-md-3">
                    <form action="" class="search-bar">
                        <input type="search" name="search" pattern=".*\S.*" required>
                        <button class="search-btn" type="submit">
                            <span>Search</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>



        <div class="row">

            <div class="articles-list col-md-8 ">

                @foreach($blogs as $blog)

                <article>
                    <div class="image">
                        <img src="/{{$blog->image}}" alt="" />
                    </div>
                    <div class="content">
                        <h2 class="h2content">{{$blog->title}}</h2>
                        <div class="blogContent">{!! $blog->content !!}</div>
                        <div class="industry ">

                            <span style="display:inline;text-align: left;"><i class="fa-solid fa-industry"> </i> {{$blog->industry_option}}</span>

                        </div>
                        <div class="time">
                            <span style="display:inline;text-align: left;"><i class="fa fa-calendar-o"></i> {{$blog->updated_at}}</span>
                        </div>
                        <button class="fill header List">
                            <A href="/show/{{$blog->id}}">Read article ></a></button>
                    </div>
                </article>
                @endforeach
                {{ $blogs->links() }}


            </div>
            <div class="categories col-md-3">

                <h4> Categories</h4>
                <button class="fill Blog">Blogs</button>
                <button class="fill Blog">Papers</button>

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
        </div>

    </div>
</div>

@endsection