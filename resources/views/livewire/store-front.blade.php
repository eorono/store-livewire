<div class="grid grid-cols-4 gap-4 mt-12">
    @foreach($this->products as $products)
       <div>
            <img src="{{ $products->image }}" alt="">
            <h2 class="font-medium text-lg">{{$products->name}}</h2>
            <span class="text-gray-700 text-sm">{{$products->price}}</span>
        </div>
    @endforeach
</div>
