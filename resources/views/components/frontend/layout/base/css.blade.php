@php
        use hahaha\function_base as hahaha_function_base;

        $hahaha_function_base = hahaha_function_base::instance();

        // echo $hahaha_function_base->Css($hahaha_function_base->Url_Plugin('\jquery\dist\jquery.js'));
        // echo $hahaha_function_base->Css($hahaha_function_base->Url_Plugin('\bootstrap\dist\css\bootstrap.css'));
        // echo $hahaha_function_base->Css($hahaha_function_base->Url_Plugin('\sweetalert2\dist\sweetalert2.css'));

        // echo $hahaha_function_base->Css($hahaha_function_base->Url_Plugin('font-awesome\css\font-awesome.css'));
@endphp
@php
        echo $hahaha_function_base->Css($hahaha_function_base->Url_Plugin('\bootstrap\dist\css\bootstrap.css'));
        // <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
@endphp
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
@php
        echo $hahaha_function_base->Css($hahaha_function_base->Url_Asset('css/main.css'));
@endphp
