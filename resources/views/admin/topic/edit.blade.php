@extends('layouts.admin_master')

@section('course_page')
    active show-sub
@endsection
@section('topic_course')
    active
@endsection

@section('admin_content')

<div class="wrapper">
    <div id="content-page" class="content-page">
       <div class="container-fluid">
          <div class="row">
             <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                   <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                         <h4 class="card-title">COURSE  LEARN TABLE</h4>
                      </div>
                   </div>
                </div>
                <div class="iq-card">
                   <div class="iq-card-body">
                    <form action="{{ route('topic.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $topicEdit->id }}">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label">topic_heading_one : <span class="tx-danger">*</span></label>
                                  <input type="text" class="form-control" name="topic_heading_one" value="{{ $topicEdit->topic_heading_one }}">
                                </div>
                                @error('topic_heading_one')
                                <strong class="text-danger">{{ $message }}</strong>
                               @enderror
                            </div><!-- col-4 -->
                              <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label">topic_description_one : <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="topic_description_one">{{ $topicEdit->topic_description_one }}</textarea>
                                  </div>
                                  @error('topic_description_one')
                                  <strong class="text-danger">{{ $message }}</strong>
                                 @enderror
                                </div><!-- col-4 -->

                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label">topic_heading_two: <span class="tx-danger">*</span></label>
                                  <input type="text" class="form-control" name="topic_heading_two" value="{{ $topicEdit->topic_heading_two }}">
                                </div>
                                @error('topic_heading_two')
                                <strong class="text-danger">{{ $message }}</strong>
                               @enderror
                              </div><!-- col-4 -->
                              <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label">topic_description_two : <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="topic_description_two">{{ $topicEdit->topic_description_two }}</textarea>
                                  </div>
                                  @error('topic_description_two')
                                  <strong class="text-danger">{{ $message }}</strong>
                                 @enderror
                                </div><!-- col-4 -->
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label">topic_heading_three: <span class="tx-danger">*</span></label>
                                    <input type="text" class="form-control" name="topic_heading_three" value="{{ $topicEdit->topic_heading_three }}">
                                  </div>
                                  @error('topic_heading_three')
                                  <strong class="text-danger">{{ $message }}</strong>
                                 @enderror
                                </div><!-- col-4 -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">topic_description_three : <span class="tx-danger">*</span></label>
                                        <textarea class="form-control" name="topic_description_three" value="{{ old('topic_description_three') }}">{{ $topicEdit->topic_description_three }}</textarea>
                                    </div>
                                    @error('topic_description_three')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                    </div><!-- col-4 -->

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-control-label">topic_heading_four: <span class="tx-danger">*</span></label>
                                    <input type="text" class="form-control" name="topic_heading_four" value="{{ $topicEdit->topic_heading_four }}">
                                    </div>
                                    @error('topic_heading_four')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div><!-- col-4 -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">topic_description_four : <span class="tx-danger">*</span></label>
                                        <textarea class="form-control" name="topic_description_four" value="{{ old('topic_description_four') }}">{{ $topicEdit->topic_description_four }}</textarea>
                                    </div>
                                    @error('topic_description_four')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                    </div><!-- col-4 -->

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-control-label">topic_heading_five: <span class="tx-danger">*</span></label>
                                    <input type="text" class="form-control" name="topic_heading_five" value="{{ $topicEdit->topic_heading_five }}">
                                    </div>
                                    @error('topic_heading_five')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div><!-- col-4 -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">topic_description_five : <span class="tx-danger">*</span></label>
                                        <textarea class="form-control" name="topic_description_five" value="{{ old('topic_description_five') }}">{{ $topicEdit->topic_description_five }}</textarea>
                                    </div>
                                    @error('topic_description_five')
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                    </div><!-- col-4 -->

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="form-control-label">topic_heading_six: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="topic_heading_six" value="{{ $topicEdit->topic_heading_six }}">
                                        </div>
                                        @error('topic_heading_six')
                                        <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div><!-- col-4 -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label class="form-control-label">topic_description_six : <span class="tx-danger">*</span></label>
                                        <textarea class="form-control" name="topic_description_six" value="{{ old('topic_description_six') }}">{{ $topicEdit->topic_description_six }}</textarea>
                                        </div>
                                        @error('topic_description_six')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                    </div><!-- col-4 -->
                                    <div class="form-layout-footer">
                                    <button type="submit" class="btn btn-success mg-r-5" style="font-size: 20px">UPDATE DATA</button>
                                    </div><!-- form-layout-footer -->
                                    </div>
                                </form>
                </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

    {{-- <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item" href="{{ url('admin/home') }}">HOME</a>
          <span class="breadcrumb-item active">Topics Table</span>
        </nav>
        <div class="sl-pagebody">
          <div class="sl-page-title">
          </div><!-- sl-page-title -->

          <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title"></h6>
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="form-layout">
                <form action="{{ route('topic.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $topicEdit->id }}">
            <div class="row mg-b-25">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">topic_heading_one : <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" name="topic_heading_one" value="{{ $topicEdit->topic_heading_one }}">
                  </div>
                  @error('topic_heading_one')
                  <strong class="text-danger">{{ $message }}</strong>
                 @enderror
                </div><!-- col-4 -->
                <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">topic_description_one : <span class="tx-danger">*</span></label>
                      <textarea class="form-control" name="topic_description_one">{{ $topicEdit->topic_description_one }}</textarea>
                    </div>
                    @error('topic_description_one')
                    <strong class="text-danger">{{ $message }}</strong>
                   @enderror
                  </div><!-- col-4 -->

                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">topic_heading_two: <span class="tx-danger">*</span></label>
                    <input type="text" class="form-control" name="topic_heading_two" value="{{ $topicEdit->topic_heading_two }}">
                  </div>
                  @error('topic_heading_two')
                  <strong class="text-danger">{{ $message }}</strong>
                 @enderror
                </div><!-- col-4 -->
                <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">topic_description_two : <span class="tx-danger">*</span></label>
                      <textarea class="form-control" name="topic_description_two">{{ $topicEdit->topic_description_two }}</textarea>
                    </div>
                    @error('topic_description_two')
                    <strong class="text-danger">{{ $message }}</strong>
                   @enderror
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">topic_heading_three: <span class="tx-danger">*</span></label>
                      <input type="text" class="form-control" name="topic_heading_three" value="{{ $topicEdit->topic_heading_three }}">
                    </div>
                    @error('topic_heading_three')
                    <strong class="text-danger">{{ $message }}</strong>
                   @enderror
                  </div><!-- col-4 -->
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">topic_description_three : <span class="tx-danger">*</span></label>
                        <textarea class="form-control" name="topic_description_three" value="{{ old('topic_description_three') }}">{{ $topicEdit->topic_description_three }}</textarea>
                      </div>
                      @error('topic_description_three')
                      <strong class="text-danger">{{ $message }}</strong>
                     @enderror
                    </div><!-- col-4 -->

                    <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label">topic_heading_four: <span class="tx-danger">*</span></label>
                          <input type="text" class="form-control" name="topic_heading_four" value="{{ $topicEdit->topic_heading_four }}">
                        </div>
                        @error('topic_heading_four')
                        <strong class="text-danger">{{ $message }}</strong>
                       @enderror
                      </div><!-- col-4 -->
                      <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label">topic_description_four : <span class="tx-danger">*</span></label>
                            <textarea class="form-control" name="topic_description_four" value="{{ old('topic_description_four') }}">{{ $topicEdit->topic_description_four }}</textarea>
                          </div>
                          @error('topic_description_four')
                          <strong class="text-danger">{{ $message }}</strong>
                         @enderror
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label">topic_heading_five: <span class="tx-danger">*</span></label>
                              <input type="text" class="form-control" name="topic_heading_five" value="{{ $topicEdit->topic_heading_five }}">
                            </div>
                            @error('topic_heading_five')
                            <strong class="text-danger">{{ $message }}</strong>
                           @enderror
                          </div><!-- col-4 -->
                          <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label">topic_description_five : <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="topic_description_five" value="{{ old('topic_description_five') }}">{{ $topicEdit->topic_description_five }}</textarea>
                              </div>
                              @error('topic_description_five')
                              <strong class="text-danger">{{ $message }}</strong>
                             @enderror
                            </div><!-- col-4 -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label">topic_heading_six: <span class="tx-danger">*</span></label>
                                  <input type="text" class="form-control" name="topic_heading_six" value="{{ $topicEdit->topic_heading_six }}">
                                </div>
                                @error('topic_heading_six')
                                <strong class="text-danger">{{ $message }}</strong>
                               @enderror
                              </div><!-- col-4 -->
                              <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label">topic_description_six : <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="topic_description_six" value="{{ old('topic_description_six') }}">{{ $topicEdit->topic_description_six }}</textarea>
                                  </div>
                                  @error('topic_description_six')
                                  <strong class="text-danger">{{ $message }}</strong>
                                 @enderror
                                </div><!-- col-4 -->
                         </div><!-- row -->
                    <div class="form-layout-footer">
                    <button type="submit" class="btn btn-info mg-r-5">UPDATE</button>
                </div><!-- form-layout-footer -->
            </form>
            </div><!-- form-layout -->
        </div><!-- card --> --}}
@endsection

