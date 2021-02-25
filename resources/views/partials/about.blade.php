<!-- ======= About Section ======= -->
<section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>{{$aboutTitle[0]->title}}</h2>
        <p>{{$aboutTitle[0]->para}}</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{asset($aboutMeImg[0]->src)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$aboutMeContent[0]->title}}</h3>
          <p class="font-italic">{{$aboutMeContent[0]->description}}</p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                @foreach ($aboutMeInfos as $info)
                  <li><i class="{{$info->icon}}"></i> <strong>{{$info->title}}</strong> {{$info->text}}</li>
                  <span style="display: none">{{$infoCount++}}</span>
                  @if ($loop->iteration %4 == 0)
                    </ul>
                  </div>
                    @if ($infoCount<8)
                    <div class="col-lg-6">
                      <ul>
                    @endif
                  @endif
                @endforeach
            {{-- </div> --}}
          </div>
          <p>{{$aboutMeContent[0]->text}}</p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        @foreach ($aboutCounts as $count)
          <div class="col-lg-3 col-md-6 {{$count->divColClass}}">
            <div class="count-box">
              <i class="{{$count->iClass}}"></i>
              <span data-toggle="counter-up">{{$count->number}}</span>
              <p>{{$count->description}}</p>
            </div>
          </div>
        @endforeach

      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>{{$aboutTitle[1]->title}}</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          @foreach ($aboutSkills as $skill)
            <div class="progress">
              <span class="skill">{{$skill->skill}} <i class="val">{{$skill->iValue}}</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->ariaValue}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <span style="display: none">{{$skillcount++}}</span>

            @if ($loop->iteration %3 == 0)
              </div>
              @if ($skillcount<6)
                <div class="col-lg-6">
              @endif  
            @endif
          @endforeach

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>{{$aboutTitle[2]->title}}</h2>
      </div>

      <div class="row">
        @foreach ($aboutInterests as $interest)
          <div class="col-lg-3 col-md-4 {{$interest->divColClass}}">
            <div class="icon-box">
              <i class="{{$interest->iClass}}" style="{{$interest->iColor}}"></i>
              <h3>{{$interest->description}}</h3>
            </div>
          </div>
        @endforeach

        {{-- <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3>Lorem Ipsum</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>Dolor Sitema</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3>Sed perspiciatis</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3>Magni Dolores</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3>Nemo Enim</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3>Eiusmod Tempor</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3>Midela Teren</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3>Pira Neve</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3>Dirada Pack</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <h3>Moton Ideal</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3>Verdo Park</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3>Flavor Nivelanda</h3>
          </div>
        </div> --}}

      </div>

    </div><!-- End Interests -->

    
</section><!-- End About Section -->