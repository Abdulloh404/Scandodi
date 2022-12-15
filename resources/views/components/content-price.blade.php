<link rel="stylesheet" href="../front/css/content-price.css">

<div class="container-fluid content-price mb-xl-0 mb-lg-0 mb-md-0 mb-2">
    <div class="container p-xl-4 p-lg-4 p-md-4 p-0 py-3">
        <div class="row g-4 d-flex justify-content-around flex-warp">
            @if (isset($plans))
                @foreach ($plans as $plan)
                    <!-- Card-->
                    <div class="card border-0 bg-color wow fadeInRight" data-wow-delay="0.3s"
                        style="height: 400px; width:300px;">
                        <img src="uploads/img-price-2.png" class="card-img-top" alt="...">
                        <div class="card-body text-white">
                            <div class="card-title">
                                {{ $plan->title }}
                            </div>
                            <div class="price"><span
                                    class="value">{{ formatNumberWithCurrSymbol($plan->cost) }}</span></div>
                            <div class="frequency">{{ $plan->recurring_type }}</div>
                            <div class="divider"></div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    {{-- <i class="fas fa-check"></i> --}}
                                    <div class="media-body">
                                        @if ($plan->item_unlimited == 'yes')
                                            {{ trans('layout.unlimited_items') }}
                                        @else
                                            <strong>{{ $plan->item_limit }}</strong>
                                            {{ trans('layout.item_limit') }}
                                        @endif
                                    </div>
                                </li>
                                <li class="media">
                                    {{-- <i class="fas fa-check"></i> --}}
                                    <div class="media-body">
                                        @if ($plan->table_unlimited == 'yes')
                                            {{ trans('layout.unlimited_tables') }}
                                        @else
                                            <strong>{{ $plan->table_limit }}</strong>
                                            {{ trans('layout.table_limit') }}
                                        @endif
                                    </div>
                                </li>
                                <li class="media">
                                    {{-- <i class="fas fa-check"></i> --}}
                                    <div class="media-body">
                                        @if ($plan->restaurant_unlimited == 'yes')
                                            {{ trans('layout.unlimited_restaurants') }}
                                        @else
                                            <strong>{{ $plan->restaurant_limit }}</strong>
                                            {{ trans('layout.restaurant_limit') }}
                                        @endif
                                    </div>
                                </li>
                                <li class="media">
                                    {{-- <i class="fas fa-check"></i> --}}
                                    <div class="media-body">
                                        {{ trans('layout.unlimited_support') }}
                                    </div>
                                </li>

                            </ul>
                            <div class="button-wrapper">
                                <a class="btn btn-light center"
                                    href="{{ route('registration', ['plan' => $plan->id]) }}">{{ trans('layout.join') }}</a>
                            </div>
                        </div>
                    </div>
                    <!--End card-->
                @endforeach
            @endif
        </div>
    </div>
</div>
