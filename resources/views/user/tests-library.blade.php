@extends('layouts.user')
@section('content')
<div class="content-header pb-0 gray-bg">
  <div class="container pb-0">
    <div class="row">
      <div class="col-12 col-md-3 order-md-2">
       <div class="user-target-info-box">
          <div class="user-target-user">
            <div>
              <span class="account-profile-img md">
               <img src="/static/img/user_icon.png" alt="tadat216">
             </span>
            </div>
            <div class="text-center">
              tadat216
            </div>
          </div>
          <div class="divider sm"></div>
          <div class="user-target-info">
           <p class="user-target-text-sm">
              <span class="far fa-exclamation-circle"></span>
              <i>Bạn chưa tạo mục tiêu cho quá trình luyện thi của mình.
                <a data-toggle="modal" data-target="#site-modal-md"
                  onclick="window.load_jqhtml(this, '#site-modal-md-content')" href=""
                  data-href="/targetscore/add/?view=clean">Tạo ngay</a>.
              </i>
            </p>
           <div class="mt-3">
              <a class="btn btn-sm btn-block btn-round btn-sky" href="/tests/analytics/">
                <span class="far fa-analytics mr-1"></span>
                Thống kê kết quả
              </a>
            </div>
         </div>
        </div>
        <br>
     </div>
     <div class="col-12 col-md-9 order-md-1">
        <h1 id="thư-viện-đề-thi">
          Thư viện đề thi
       </h1>
       <br>
       <!-- <div class="test-exams">
          <ul class="nav nav-pills flex-wrap">
            <li class="nav-item w-auto">
              <a class="nav-link active" href="/tests/">Tất cả</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/ielts/">IELTS Academic</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/ielts-general/">IELTS General</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/toeic/">TOEIC</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/hsk-1/">HSK 1</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/hsk-2/">HSK 2</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/hsk-3/">HSK 3</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/hsk-4/">HSK 4</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/hsk-5/">HSK 5</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/hsk-6/">HSK 6</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/topik-i/">TOPIK I</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/topik-ii/">TOPIK II</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/toan-thptqg/">Toán THPTQG</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/tieng-anh-thptqg/">Tiếng Anh THPTQG</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/sinh-hoc-thptqg/">Sinh học THPTQG</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/hoa-hoc-thptqg/">Hóa học THPTQG</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/vat-ly-thptqg/">Vật lý THPTQG</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/sat/">NEW SAT</a>
            </li>
           <li class="nav-item w-auto">
              <a class="nav-link " href="/tests/act/">ACT</a>
            </li>
         </ul>
        </div> -->
        <div class="test-exams">
          <ul class="nav nav-pills flex-wrap">
            <li class="nav-item w-auto">
              <a class="nav-link active" href="/tests/">Tất cả</a>
            </li>
            @foreach ($examTypes as $examType)
              <li class="nav-item w-auto">
                <a class="nav-link " href="#">{{$examType->name}}</a>
              </li>
            @endforeach
         </ul>
        </div>
       <br>
       <form method="GET">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <div class="input-addon inner-addon right-addon">
                  <span class="fas fa-search"></span>
                  <input type="text" class="form-control" enterkeyhint="done"
                    placeholder="Nhập từ khoá bạn muốn tìm kiếm: tên sách, dạng câu hỏi ..." name="term" value="">
                </div>
              </div>
            </div>
          </div>
         <div>
            <button class="btn btn-primary">Tìm kiếm</button>
          </div>
        </form>
        <br>
      </div>
    </div>
   <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="/tests/">Tất cả</a>
      </li>
     <li class="nav-item">
        <a class="nav-link " href="/tests/mini/">Đề rút gọn</a>
      </li>
    </ul>
  </div>
</div>
<div class="modal" id="exam-top-modal" tabindex="-1" aria-labelledby="exam-top-modal" aria-hidden="true"
  data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <div class="modal-body" id="exam-top-modal-content"></div>
    </div>
  </div>
</div>
<div class="content-wrapper">
 <div class="container">
    <div class="row">
      <div class="col-12 col-md-9">
       <div class="testitem-grid row ">
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2010/ielts-simulation-listening-test-1/">
                <h2 class="testitem-title" id="ielts-simulation-listening-test-1">
                 IELTS Simulation Listening test 1
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>40 phút
                     | <span class="far fa-user-edit mr-1"></span>709650
                     | <span class="far fa-comments mr-1"></span>2158
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      4 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Listening</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark"
                  href="/tests/2010/ielts-simulation-listening-test-1/">
               </a><a href="/tests/2010/ielts-simulation-listening-test-1/"
                  class="btn btn-block btn-outline-primary">Chi tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2028/ielts-simulation-listening-test-10/">
                <h2 class="testitem-title" id="ielts-simulation-listening-test-10">
                 IELTS Simulation Listening test 10
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>40 phút
                     | <span class="far fa-user-edit mr-1"></span>227598
                     | <span class="far fa-comments mr-1"></span>603
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      4 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Listening</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark"
                  href="/tests/2028/ielts-simulation-listening-test-10/">
               </a><a href="/tests/2028/ielts-simulation-listening-test-10/"
                  class="btn btn-block btn-outline-primary">Chi tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2012/ielts-simulation-listening-test-2/">
                <h2 class="testitem-title" id="ielts-simulation-listening-test-2">
                 IELTS Simulation Listening test 2
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>40 phút
                     | <span class="far fa-user-edit mr-1"></span>286029
                     | <span class="far fa-comments mr-1"></span>593
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      4 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Listening</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark"
                  href="/tests/2012/ielts-simulation-listening-test-2/">
               </a><a href="/tests/2012/ielts-simulation-listening-test-2/"
                  class="btn btn-block btn-outline-primary">Chi tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2014/ielts-simulation-listening-test-3/">
                <h2 class="testitem-title" id="ielts-simulation-listening-test-3">
                 IELTS Simulation Listening test 3
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>40 phút
                     | <span class="far fa-user-edit mr-1"></span>186006
                     | <span class="far fa-comments mr-1"></span>370
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      4 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Listening</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark"
                  href="/tests/2014/ielts-simulation-listening-test-3/">
               </a><a href="/tests/2014/ielts-simulation-listening-test-3/"
                  class="btn btn-block btn-outline-primary">Chi tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2016/ielts-simulation-listening-test-4/">
                <h2 class="testitem-title" id="ielts-simulation-listening-test-4">
                 IELTS Simulation Listening test 4
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>40 phút
                     | <span class="far fa-user-edit mr-1"></span>144213
                     | <span class="far fa-comments mr-1"></span>347
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      4 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Listening</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark"
                  href="/tests/2016/ielts-simulation-listening-test-4/">
               </a><a href="/tests/2016/ielts-simulation-listening-test-4/"
                  class="btn btn-block btn-outline-primary">Chi tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2018/ielts-simulation-listening-test-5/">
                <h2 class="testitem-title" id="ielts-simulation-listening-test-5">
                 IELTS Simulation Listening test 5
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>40 phút
                     | <span class="far fa-user-edit mr-1"></span>123147
                     | <span class="far fa-comments mr-1"></span>234
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      4 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Listening</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark"
                  href="/tests/2018/ielts-simulation-listening-test-5/">
               </a><a href="/tests/2018/ielts-simulation-listening-test-5/"
                  class="btn btn-block btn-outline-primary">Chi tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2020/ielts-simulation-listening-test-6/">
                <h2 class="testitem-title" id="ielts-simulation-listening-test-6">
                 IELTS Simulation Listening test 6
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>40 phút
                     | <span class="far fa-user-edit mr-1"></span>109767
                     | <span class="far fa-comments mr-1"></span>202
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      4 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Listening</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark"
                  href="/tests/2020/ielts-simulation-listening-test-6/">
               </a><a href="/tests/2020/ielts-simulation-listening-test-6/"
                  class="btn btn-block btn-outline-primary">Chi tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2022/ielts-simulation-listening-test-7/">
                <h2 class="testitem-title" id="ielts-simulation-listening-test-7">
                 IELTS Simulation Listening test 7
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>40 phút
                     | <span class="far fa-user-edit mr-1"></span>78909
                     | <span class="far fa-comments mr-1"></span>169
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      4 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Listening</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark"
                  href="/tests/2022/ielts-simulation-listening-test-7/">
               </a><a href="/tests/2022/ielts-simulation-listening-test-7/"
                  class="btn btn-block btn-outline-primary">Chi tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2024/ielts-simulation-listening-test-8/">
                <h2 class="testitem-title" id="ielts-simulation-listening-test-8">
                 IELTS Simulation Listening test 8
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>40 phút
                     | <span class="far fa-user-edit mr-1"></span>66990
                     | <span class="far fa-comments mr-1"></span>118
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      4 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Listening</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark"
                  href="/tests/2024/ielts-simulation-listening-test-8/">
               </a><a href="/tests/2024/ielts-simulation-listening-test-8/"
                  class="btn btn-block btn-outline-primary">Chi tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2026/ielts-simulation-listening-test-9/">
                <h2 class="testitem-title" id="ielts-simulation-listening-test-9">
                 IELTS Simulation Listening test 9
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>40 phút
                     | <span class="far fa-user-edit mr-1"></span>69648
                     | <span class="far fa-comments mr-1"></span>117
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      4 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Listening</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark"
                  href="/tests/2026/ielts-simulation-listening-test-9/">
               </a><a href="/tests/2026/ielts-simulation-listening-test-9/"
                  class="btn btn-block btn-outline-primary">Chi tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2009/ielts-simulation-reading-test-1/">
                <h2 class="testitem-title" id="ielts-simulation-reading-test-1">
                 IELTS Simulation Reading test 1
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>60 phút
                     | <span class="far fa-user-edit mr-1"></span>335427
                     | <span class="far fa-comments mr-1"></span>917
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      3 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Reading</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark" href="/tests/2009/ielts-simulation-reading-test-1/">
               </a><a href="/tests/2009/ielts-simulation-reading-test-1/" class="btn btn-block btn-outline-primary">Chi
                  tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2027/ielts-simulation-reading-test-10/">
                <h2 class="testitem-title" id="ielts-simulation-reading-test-10">
                 IELTS Simulation Reading test 10
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>60 phút
                     | <span class="far fa-user-edit mr-1"></span>96339
                     | <span class="far fa-comments mr-1"></span>288
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      3 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Reading</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark"
                  href="/tests/2027/ielts-simulation-reading-test-10/">
               </a><a href="/tests/2027/ielts-simulation-reading-test-10/"
                  class="btn btn-block btn-outline-primary">Chi tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2011/ielts-simulation-reading-test-2/">
                <h2 class="testitem-title" id="ielts-simulation-reading-test-2">
                 IELTS Simulation Reading test 2
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>60 phút
                     | <span class="far fa-user-edit mr-1"></span>140922
                     | <span class="far fa-comments mr-1"></span>497
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      3 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Reading</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark" href="/tests/2011/ielts-simulation-reading-test-2/">
               </a><a href="/tests/2011/ielts-simulation-reading-test-2/" class="btn btn-block btn-outline-primary">Chi
                  tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2013/ielts-simulation-reading-test-3/">
                <h2 class="testitem-title" id="ielts-simulation-reading-test-3">
                 IELTS Simulation Reading test 3
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>60 phút
                     | <span class="far fa-user-edit mr-1"></span>101649
                     | <span class="far fa-comments mr-1"></span>322
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      3 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Reading</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark" href="/tests/2013/ielts-simulation-reading-test-3/">
               </a><a href="/tests/2013/ielts-simulation-reading-test-3/" class="btn btn-block btn-outline-primary">Chi
                  tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2015/ielts-simulation-reading-test-4/">
                <h2 class="testitem-title" id="ielts-simulation-reading-test-4">
                 IELTS Simulation Reading test 4
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>60 phút
                     | <span class="far fa-user-edit mr-1"></span>69708
                     | <span class="far fa-comments mr-1"></span>202
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      3 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Reading</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark" href="/tests/2015/ielts-simulation-reading-test-4/">
               </a><a href="/tests/2015/ielts-simulation-reading-test-4/" class="btn btn-block btn-outline-primary">Chi
                  tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2017/ielts-simulation-reading-test-5/">
                <h2 class="testitem-title" id="ielts-simulation-reading-test-5">
                 IELTS Simulation Reading test 5
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>60 phút
                     | <span class="far fa-user-edit mr-1"></span>56982
                     | <span class="far fa-comments mr-1"></span>223
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      3 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Reading</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark" href="/tests/2017/ielts-simulation-reading-test-5/">
               </a><a href="/tests/2017/ielts-simulation-reading-test-5/" class="btn btn-block btn-outline-primary">Chi
                  tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2019/ielts-simulation-reading-test-6/">
                <h2 class="testitem-title" id="ielts-simulation-reading-test-6">
                 IELTS Simulation Reading test 6
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>60 phút
                     | <span class="far fa-user-edit mr-1"></span>61086
                     | <span class="far fa-comments mr-1"></span>202
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      3 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Reading</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark" href="/tests/2019/ielts-simulation-reading-test-6/">
               </a><a href="/tests/2019/ielts-simulation-reading-test-6/" class="btn btn-block btn-outline-primary">Chi
                  tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2021/ielts-simulation-reading-test-7/">
                <h2 class="testitem-title" id="ielts-simulation-reading-test-7">
                 IELTS Simulation Reading test 7
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>60 phút
                     | <span class="far fa-user-edit mr-1"></span>50817
                     | <span class="far fa-comments mr-1"></span>167
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      3 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Reading</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark" href="/tests/2021/ielts-simulation-reading-test-7/">
               </a><a href="/tests/2021/ielts-simulation-reading-test-7/" class="btn btn-block btn-outline-primary">Chi
                  tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2023/ielts-simulation-reading-test-8/">
                <h2 class="testitem-title" id="ielts-simulation-reading-test-8">
                 IELTS Simulation Reading test 8
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>60 phút
                     | <span class="far fa-user-edit mr-1"></span>39843
                     | <span class="far fa-comments mr-1"></span>119
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      3 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Reading</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark" href="/tests/2023/ielts-simulation-reading-test-8/">
               </a><a href="/tests/2023/ielts-simulation-reading-test-8/" class="btn btn-block btn-outline-primary">Chi
                  tiết</a>
             </div>
           </div>
          </div>
         <div class="col-6 col-md-3">
            <div class="testitem-wrapper ">
              <a class="text-dark" href="/tests/2025/ielts-simulation-reading-test-9/">
                <h2 class="testitem-title" id="ielts-simulation-reading-test-9">
                 IELTS Simulation Reading test 9
                </h2>
                <div class="testitem-info-wrapper">
                 <div>
                    <span class="testitem-info">
                      <span class="far fa-clock mr-1"></span>60 phút
                     | <span class="far fa-user-edit mr-1"></span>37887
                     | <span class="far fa-comments mr-1"></span>108
                   </span>
                  </div>
                  <div>
                    <span class="testitem-info">
                      3 phần thi |
                      40 câu hỏi
                    </span>
                  </div>
                </div>
               <div class="testitem-tags mt-2">
                  <span class="tag">IELTS Academic</span>
                  <span class="tag">Reading</span>
                </div>
                <br>
              </a>
              <div class="testitem-start-test"><a class="text-dark" href="/tests/2025/ielts-simulation-reading-test-9/">
               </a><a href="/tests/2025/ielts-simulation-reading-test-9/" class="btn btn-block btn-outline-primary">Chi
                  tiết</a>
             </div>
           </div>
          </div>
       </div>
       <nav class="jqpages">
          <div class="pagination">
           <span class="page-item active">
              <a class="page-link" href="?page=1">1</a>
            </span>
           <span class="page-item ">
              <a class="page-link" href="?page=2">2</a>
            </span>
           <span class="page-item ">
              <a class="page-link" href="?page=3">3</a>
            </span>
           <span class="page-item ">
              <a class="page-link" href="?page=4">4</a>
            </span>
           <span class="page-item ">
              <a class="page-link" href="?page=5">5</a>
            </span>
           <span class="page-item">
              <a class="page-link" href="?page=2"><i class="fas fa-chevron-right"></i></a>
            </span>
         </div>
        </nav>
     </div>
      <div class="col-12 col-md-3">
       <a class="image-wrapper mb-3" href="/courses/series/2/combo-ielts-intensive/">
          <img class="sidebar-banner" src="/media/home/HomeBanner/files/2022/07/06/Learning_English_with.jpg">
        </a>
       <a class="image-wrapper mb-3" href="https://study4.com/tests/ielts/calculator/">
          <img class="sidebar-banner" src="/media/home/HomeBanner/files/2023/03/31/Learning_English_with_1.png">
        </a>
       <a class="image-wrapper mb-3" href="/extension/download/">
          <img class="sidebar-banner" src="/media/home/HomeBanner/files/2021/12/01/download_extension.png">
        </a>
       <h4 id="tham-gia-nhóm-facebook">Tham gia nhóm facebook</h4>
       <div class="image-wrapper fb-group mb-3">
          <a target="_blank" href="https://www.facebook.com/groups/1603927746835185"><img class="sidebar-banner"
              src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXcb-nyj7JgdpDjze01TDO3e0wTOGOH20kLCmwTyWLGoulTXiomKbiTH_KI8wjscRzMg3igTeFnqr4OyAwvIk2yi2NrAKF89sooqNM0LoQYk2vj0jrIlACEK8g_Fynh-HWxfsnZYDE763X35JdesvBXmycM7?key=ezwyDTrTlQ8fa4GAczby1g"></a>
        </div>
       <div class="image-wrapper fb-group mb-3">
          <a target="_blank" href="https://www.facebook.com/groups/517057750992723"><img class="sidebar-banner"
              src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXe6BuinESoVBd4lsp7D2Ng9_TjTMDDijwiTkdji1Y-L04RrggnZoOS8gdSZqD4OqQY3zsBtG_6N0RjvGQRL_85w3nGPp8UsC1QS572qY_Vf0cC8S-eK51DeDWFDSAw4CIZjlQlNrNxp4Vv7sSUVetoyScxn?key=ezwyDTrTlQ8fa4GAczby1g"></a>
        </div>
       <br>
     </div>
    </div>
   <br><br>
    <div class="image-wrapper">
      <a href="/courses/level-test/">
        <img class="lazyel" data-src="/static/img/testonline_banner.jpg">
      </a>
    </div>
  </div>
</div>
@endsection