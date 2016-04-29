

@section('page_title')
    <h2>'BasicTheme' 테마 설정</h2>
@stop

@section('page_description')
    테마를 설정합니다.
@stop

<form role="form" action="{{ route('mytheme::theme.config') }}" method="post" id="_theme" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel-group">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">기본설정</h3>
                        </div>
                        <div class="pull-right">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="btn-link panel-toggle pull-right"><i class="xi-angle-down"></i><i class="xi-angle-up"></i><span class="sr-only">{{xe_trans('xe::close')}}</span></a>
                        </div>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    {!! uio('formText', ['name' => 'logoTitle', 'label' => '로고 제목', 'value' => $config->get('logoTitle')]) !!}
                                </div>
                                <div class="col-sm-12">
                                    {!! uio('formImage', ['name' => 'logoImage', 'label' => '로고 이미지', 'description' => '로고 이미지', 'image' => $config->get('logoImagePath'), 'types' => ['jpg', 'gif', 'png', 'jpeg'], 'width' => 204, 'height' => 96 ]) !!}
                                </div>
                                <div class="col-sm-12">
                                    {!! uio('formSelect', ['name' => 'sidebar', 'label' => '사이드바', 'options'=>['sub no_lnb'=>'없음', 'sub' => '왼쪽', 'sub right'=> '오른쪽'], 'selected'=>$config->get('sidebar', 'snb no_lnb')]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary"><i class="xi-download"></i>{{xe_trans('xe::save')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

