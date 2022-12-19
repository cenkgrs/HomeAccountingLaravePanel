<!DOCTYPE html>
<html lang="en">
    @include('common.header')

    <body>  

        <div class="row">
            <div class="col-lg-2">
                @include('common.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="right-screen mt-5">
                    @include('partials.messages')
                    
                    @yield('content')
                </div>
            </div>
        </div>

    </body>

    @include('common.footer')
</html>