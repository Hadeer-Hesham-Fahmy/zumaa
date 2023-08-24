<p class="text-xl font-semibold">{{ __('Order Details') }}</p>
@if (!empty($selectedModel) )
@switch($selectedModel->order_type)
@case("package")
@include('livewire.order.package_order_details')
@break
@case("parcel")
@include('livewire.order.package_order_details')
@break
@case("service")
@include('livewire.order.service_order_details')
@break
@case("taxi")
@include('livewire.order.taxi_order_details')
@break

@default
@include('livewire.order.regular_order_details')
@break
@endswitch
@endif
