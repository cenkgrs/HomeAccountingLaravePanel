@extends('index')

@section('content')

<div class="dashboard">
    <div class="dashboard-header">Dashboard</div>
    <div class="dashboard-body">
        <div class="row">
            <div class="col-lg-12 col-xs-12 dashboard-sub-header">
                Genel Bilgi
            </div>

            <div class="col-lg-3 col-xs-3">
                <div class="showcase">
                    <div class="showcase-header">
                        Toplam Bütçe
                    </div>
                    <div class="showcase-body">
                        <span>
                            {{ $total_budget }}
                        </span>
                    </div>
                </div>
            </div>
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