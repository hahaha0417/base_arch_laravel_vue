@php
        use hahaha\function_base as hahaha_function_base;

        $hahaha_function_base = hahaha_function_base::instance();
@endphp
        <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>

@php
        echo $hahaha_function_base->Js($hahaha_function_base->Url_Plugin('\jquery\dist\jquery.js'));
        echo $hahaha_function_base->Js($hahaha_function_base->Url_Plugin('\bootstrap\dist\js\bootstrap.bundle.js'));
        // echo $hahaha_function_base->Js($hahaha_function_base->Url_Plugin('\sweetalert2\dist\sweetalert2.js'));

@endphp
