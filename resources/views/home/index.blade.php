@extends('index')

@section('content')

<div class="dashboard">
    <div class="dashboard-header">Dashboard</div>
    <div class="dashboard-body">
        <div class="row">
            <div class="col-lg-12 col-xs-12 dashboard-sub-header">
                Stocks
            </div>
            @foreach($stocks as $stock)
                <div class="col-lg-3 col-xs-3">
                    <div class="showcase @if($stock['sum'] < $stock_alerts[$stock['unit']]) showcase-danger @endif">
                        <div class="showcase-header">
                            {{ $stock->categories['name'] }}
                        </div>
                        <div class="showcase-body">
                            <span>
                                {{ $stock['sum'] }}
                            </span>
                            {{ $stock['unit'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.showcase-body span').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 2000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    })
    
</script>
    
@endsection