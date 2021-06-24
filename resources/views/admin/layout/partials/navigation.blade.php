<div class="container-fluid">


    <!-- Navigation start -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#WafiAdminNavbar"
            aria-controls="WafiAdminNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="WafiAdminNavbar">
            <ul class="navbar-nav">
                @foreach(\Illuminate\Support\Facades\Config::get('navigation.items') as $item)
                    @if(isset( $item["subs"] ) )
                        @if((isset($item["permission"]) and can($item["permission"])) or ! isset($item["permission"]))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="{{$item["icon"]}}"></i>
                                {{$item["title"]}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="appsDropdown">
                                @foreach($item["subs"] as $sub)
                                    @if((isset($sub["permission"]) and can($sub["permission"])) or ! isset($sub["permission"]))
                                        <li>
                                            <a class="dropdown-item" href="{{url($sub["url"])}}">{{$sub["title"]}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        @endif
                    @else
                        @if((isset($item["permission"]) and can($item["permission"])) or ! isset($item["permission"]))
                            <li class="nav-item">
                                <a class="nav-link " href="{{url($item["url"])}}"  >
                                    <i class="{{$item["icon"]}}"></i>
                                    {{$item["title"]}}
                                </a>
                            </li>
                        @endif
                    @endif
                @endforeach
            </ul>
        </div>
    </nav>
</div>
