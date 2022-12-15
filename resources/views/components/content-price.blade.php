<link rel="stylesheet" href="../front/css/content-price.css">

<!-- Pricing -->
<div id="pricing" class="container-fluid content-price mb-xl-0 mb-lg-0 mb-md-0 mb-2">
    <div class="container p-xl-4 p-lg-4 p-md-4 p-0 py-3">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">{{ isset($template->section_four_title) ? $template->section_four_title : '' }}
                </h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                @if (isset($plans))

                    @foreach ($plans as $plan)
                        <!-- Card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">{{ $plan->title }}</div>
                                <div class="price"><span
                                        class="value">{{ formatNumberWithCurrSymbol($plan->cost) }}</span></div>
                                <div class="frequency">{{ $plan->recurring_type }}</div>
                                <div class="divider"></div>
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-check"></i>
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
                                        <i class="fas fa-check"></i>
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
                                        <i class="fas fa-check"></i>
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
                                        <i class="fas fa-check"></i>
                                        <div class="media-body">
                                            {{ trans('layout.unlimited_support') }}
                                        </div>
                                    </li>

                                </ul>
                                <div class="button-wrapper">
                                    <a class="btn-solid-reg page-scroll"
                                        href="{{ route('registration', ['plan' => $plan->id]) }}">{{ trans('layout.join') }}</a>
                                </div>
                            </div>
                        </div> <!-- end of card -->
                        <!-- end of card -->
                    @endforeach
                @endif
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of pricing -->

<div class="container-fluid content-price mb-xl-0 mb-lg-0 mb-md-0 mb-2">
    <div class="container p-xl-4 p-lg-4 p-md-4 p-0 py-3">
        <div class="row g-4">
            <div class="d-grid col-xl-3 col-lg-3 col-md-6 col-12">
                <a href="{{ route('content-price') }}" class="d-grid">
                    <div class="card border-0 wow fadeInRight" data-wow-delay="0.2s">
                        <img src="uploads/img-price-1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Increase Your Revenue More Than 30%</h5>
                            <p class="card-text">
                            <ul>
                                <li>Increased Table Turnover</li>
                                <li>Increased Ticket Sizes</li>
                                <li>Increased Tips</li>
                            </ul>
                            </p>
                        </div>
                    </div>
            </div></a>
            <div class="d-grid col-xl-3 col-lg-3 col-md-6 col-12">
                <a href="{{ route('content-price') }}" class="d-grid">
                    <div class="card border-0 bg-color wow fadeInRight" data-wow-delay="0.3s">
                        <img src="uploads/img-price-2.png" class="card-img-top" alt="...">
                        <div class="card-body text-white">
                            <h5 class="card-title">Decrease Operational Costs by 30%</h5>
                            <p class="card-text">
                            <ul>
                                <li>Eliminate Human Errors</li>
                                <li>Increased Labor Productivity</li>
                                <li>Low Maintenance Cost</li>
                            </ul>
                            </p>
                        </div>
                    </div>
            </div></a>

            <div class="d-grid col-xl-3 col-lg-3 col-md-6 col-12">
                <a href="{{ route('content-price') }}" class="d-grid">
                    <div class="card border-0 wow fadeInRight" data-wow-delay="0.4s">
                        <img src="uploads/img-price-3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gain More Control Over Your Business</h5>
                            <p class="card-text">
                            <ul>
                                <li>Real-Time Data</li>
                                <li>Data Analytics for Smarter Decisions</li>
                                <li>Update with One Clickt</li>
                            </ul>
                            </p>
                        </div>
                    </div>
            </div></a>
            <div class="d-grid col-xl-3 col-lg-3 col-md-6 col-12">
                <a href="{{ route('content-price') }}" class="d-grid">
                    <div class="card border-0 bg-color wow fadeInRight" data-wow-delay="0.5s">
                        <img src="uploads/img-price-2.png" class="card-img-top" alt="...">
                        <div class="card-body text-white">
                            <h5 class="card-title">Decrease Operational Costs by 30%</h5>
                            <p class="card-text">
                            <ul>
                                <li>Eliminate Human Errors</li>
                                <li>Increased Labor Productivity</li>
                                <li>Low Maintenance Cost</li>
                            </ul>
                            </p>
                        </div>
                    </div>
            </div></a>
        </div>
    </div>
</div>
