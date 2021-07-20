<div class="shadow card row m-2">
    <div class="card-inner">
    <img src="{{ $service->image->path }}" class="card-img thumbnail" alt="Image">
        <add-to-cart :service-object="{
            id: {{ $service->id }},
            title: '{{ $service->title }}',
            price: {{ $service->price }},
            image: '{{ $service->image->path }}'
            }">
        </add-to-cart>
        <div class="title-description">
            <a href="{{ route('services.show', ['service' => $service->id]) }}">
                <h3 class="font-weight-semibold">{{ $service->title }}</h>
            </a>
            <h6 class="text-muted font-weight-light">
                {!! Str::limit($service->description, 28) !!}
            </h6>
        </div>
        <div class="price-schedule">
            <h5>${{ $service->price }}</h5>
            @include('scheduleButton')
        </div>
        @include('scheduleModal')
    </div>
</div>
