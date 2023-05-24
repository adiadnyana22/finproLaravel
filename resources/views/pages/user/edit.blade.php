@extends('template.template')

@section('title', 'Edit Product')

@section('content')
    <section class="flex justify-center items-center h-full">
        <div class="border border-cyan-500 rounded-xl shadow-lg p-5 lg:p-10 w-full lg:w-3/4 mx-2">
            <div class="mb-5 flex justify-between">
                <a href="{{ route('manageProduct') }}" class="py-2 px-5 rounded bg-gray-500 text-white flex items-center gap-2"><i class='bx bx-chevron-left' ></i>Back</a>
                <h1 class="font-bold text-center text-3xl">Add Product</h1>
            </div>
            <form action="{{ route('editProductMethod', $product->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="lg:flex lg:gap-5">
                    <div class="mb-5 basis-1/2">
                        <label class="block mb-1" for="name">Name :</label>
                        <input type="text" placeholder="Enter product name" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500" name="name" id="name" required value="{{ $product->name }}">
                        @error('name')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div class="mb-5 basis-1/2">
                        <label class="block mb-1" for="category">Category :</label>
                        <select required name="category" id="category" class="bg-gray-200 block w-full py-3 px-5 rounded outline-cyan-500">
                            <option value="" disabled selected hidden>Select a category</option>
                            @foreach($dropdown as $category)
                                <option value="{{ $category->id }}" {{ $product->category->id == $category->id ? "selected" : "" }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
                <div class="mb-5">
                    <label class="block mb-1" for="detail">Detail :</label>
                    <textarea class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500" placeholder="Enter product detail" name="detail" id="detail">{{ $product->detail }}</textarea>
                    @error('detail')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                </div>
                <div class="lg:flex lg:gap-5">
                    <div class="mb-5 basis-1/2">
                        <label class="block mb-1" for="price">Price :</label>
                        <input type="number" placeholder="Enter product price" min="0" max="100000000" step="1" pattern="\d*" class="bg-gray-200 w-full block py-3 px-5 rounded outline-cyan-500" name="price" id="price" required value="{{ $product->price }}">
                        @error('price')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                    </div>
                    <div class="mb-5 basis-1/2">
                        <label class="block mb-1" for="photo">Photo : <span class="text-gray-400 mt-1 text-sm">(Leave blank if you don't want to change the photo)</span></label>
                        <input type="file" class="bg-gray-200 w-full block py-2.5 px-5 rounded outline-cyan-500" name="photo" id="photo" accept=".png,.jpg,.jpeg">
                        <input type="hidden" name="oldPhoto" value="{{ $product->photo }}">
                        @error('photo')<p class="text-red-400 mt-1">{{ $message }}</p>@enderror
                    </div>
                </div>
                <button type="submit" class="block w-full bg-cyan-500 rounded border border-cyan-500 text-white p-3 font-bold transition hover:bg-transparent hover:text-cyan-500">Edit Product</button>
            </form>

            <script>
                const price = document.getElementById('price');
                price.addEventListener('change', () => {
                    price.value = (price.value < 0) ? 0 : parseInt(price.value);
                })
            </script>
        </div>
    </section>
@endsection
