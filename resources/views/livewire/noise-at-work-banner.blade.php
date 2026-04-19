@if($data)
    <div>

        <section class="page_banner text-center"
            style="
                background-image: url('{{ $data->image }}');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                width: 100%;
            ">

            <div class="container decoration_wrap">

                <h1 class="page_title"
                    style="color:white; text-shadow:0px 0px 20px #060606;">
                    {{ $data->heading }}
                </h1>

                <ul class="breadcrumb_nav unordered_list_center">

                    <li>
                        <a href="{{ route('home') }}"
                           style="color:white; text-shadow:0px 0px 20px #060606;">
                            Home
                        </a>
                    </li>

                    <li style="color:white;">
                        {{ $data->title }}
                    </li>

                </ul>

            </div>

        </section>

    </div>
@endif