
<div id="breadcrumbs">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <?php $i = 1; ?>
                @foreach($data as $d)

                    @if($i != count($data))
                        <li class="{{$d['class']}}">
                            <a href="{{$d['link']}}">{!! $d['title'] !!}</a>
                        </li>
                        @if($separator['enable'] === true)
                            <li class="separator {{$separator['class']}}">{!! $separator['content'] !!}</li>
                        @endif
                    @else
                        <li>
                            <a class="active">{!! $d['title'] !!}</a>
                        </li>
                    @endif

                    <?php $i++; ?>
                @endforeach
            </ol>
        </div>
    </div>
</div>