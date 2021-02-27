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
                    <form action="{{ route('topic.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label">topic_heading_one : <span class="tx-danger">*</span></label>
                                  <input type="text" class="form-control" name="topic_heading_one" value="{{ old('topic_heading_one') }}" placeholder="topic_heading_one">
                                </div>
                                @error('topic_heading_one')
                                <strong class="text-danger">{{ $message }}</strong>
                               @enderror
                              </div><!-- col-4 -->
                              <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label">topic_description_one : <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="topic_description_one" value="{{ old('topic_description_one') }}" placeholder="topic_description_one"></textarea>
                                  </div>
                                  @error('topic_description_one')
                                  <strong class="text-danger">{{ $message }}</strong>
                                 @enderror
                                </div><!-- col-4 -->

                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label class="form-control-label">topic_heading_two: <span class="tx-danger">*</span></label>
                                  <input type="text" class="form-control" name="topic_heading_two" value="{{ old('topic_heading_two') }}" placeholder=" topic_heading_two">
                                </div>
                                @error('topic_heading_two')
                                <strong class="text-danger">{{ $message }}</strong>
                               @enderror
                              </div><!-- col-4 -->
                              <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label">topic_description_two : <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="topic_description_two" value="{{ old('topic_description_two') }}" placeholder="topic_description_two"></textarea>
                                  </div>
                                  @error('topic_description_two')
                                  <strong class="text-danger">{{ $message }}</strong>
                                 @enderror
                                </div><!-- col-4 -->
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <label class="form-control-label">topic_heading_three: <span class="tx-danger">*</span></label>
                                    <input type="text" class="form-control" name="topic_heading_three" value="{{ old('topic_heading_three') }}" placeholder=" topic_heading_three">
                                  </div>
                                  @error('topic_heading_three')
                                  <strong class="text-danger">{{ $message }}</strong>
                                 @enderror
                                </div><!-- col-4 -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                      <label class="form-control-label">topic_description_three : <span class="tx-danger">*</span></label>
                                      <textarea class="form-control" name="topic_description_three" value="{{ old('topic_description_three') }}" placeholder="topic_description_three"></textarea>
                                    </div>
                                    @error('topic_description_three')
                                    <strong class="text-danger">{{ $message }}</strong>
                                   @enderror
                                  </div><!-- col-4 -->

                                  <div class="col-lg-6">
                                      <div class="form-group">
                                        <label class="form-control-label">topic_heading_four: <span class="tx-danger">*</span></label>
                                        <input type="text" class="form-control" name="topic_heading_four" value="{{ old('topic_heading_four') }}" placeholder=" topic_heading_four">
                                      </div>
                                      @error('topic_heading_four')
                                      <strong class="text-danger">{{ $message }}</strong>
                                     @enderror
                                    </div><!-- col-4 -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                          <label class="form-control-label">topic_description_four : <span class="tx-danger">*</span></label>
                                          <textarea class="form-control" name="topic_description_four" value="{{ old('topic_description_four') }}" placeholder="topic_description_four"></textarea>
                                        </div>
                                        @error('topic_description_four')
                                        <strong class="text-danger">{{ $message }}</strong>
                                       @enderror
                                      </div><!-- col-4 -->

                                      <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label">topic_heading_five: <span class="tx-danger">*</span></label>
                                            <input type="text" class="form-control" name="topic_heading_five" value="{{ old('topic_heading_five') }}" placeholder=" topic_heading_five">
                                          </div>
                                          @error('topic_heading_five')
                                          <strong class="text-danger">{{ $message }}</strong>
                                         @enderror
                                        </div><!-- col-4 -->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                              <label class="form-control-label">topic_description_five : <span class="tx-danger">*</span></label>
                                              <textarea class="form-control" name="topic_description_five" value="{{ old('topic_description_five') }}" placeholder="topic_description_five"></textarea>
                                            </div>
                                            @error('topic_description_five')
                                            <strong class="text-danger">{{ $message }}</strong>
                                           @enderror
                                          </div><!-- col-4 -->

                                          <div class="col-lg-6">
                                              <div class="form-group">
                                                <label class="form-control-label">topic_heading_six: <span class="tx-danger">*</span></label>
                                                <input type="text" class="form-control" name="topic_heading_six" value="{{ old('topic_heading_six') }}" placeholder=" topic_heading_six">
                                              </div>
                                              @error('topic_heading_six')
                                              <strong class="text-danger">{{ $message }}</strong>
                                             @enderror
                                            </div><!-- col-4 -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                  <label class="form-control-label">topic_description_six : <span class="tx-danger">*</span></label>
                                                  <textarea class="form-control" name="topic_description_six" value="{{ old('topic_description_six') }}" placeholder="topic_description_six"></textarea>
                                                </div>
                                                @error('topic_description_six')
                                                <strong class="text-danger">{{ $message }}</strong>
                                               @enderror
                                              </div><!-- col-4 -->
                                        </div>
                                        <div class="form-layout-footer">
                                            <button type="submit" class="btn btn-success mr-5" style="font-size: 20px;">ADD</button>
                                            <a href="{{ route('manage.topic') }}" class="btn btn-primary mg-r-5" style="font-size: 20px;">TOPIC MANAGE</a>
                                        </div><!-- form-layout-footer -->
                                    </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
@endsection

