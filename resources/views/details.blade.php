<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royal Terroir - Product</title>
    <link rel="icon" href="{{ asset('images/3.png') }}">
    @vite('resources/css/app.css')
</head>
<body class="font-['Rajdhani']">
@include('navigation')
<section>
    <div class="relative">
        <img
            src="https://img.freepik.com/free-photo/blurred-photo-supermarket-your-advertising_185193-110570.jpg?w=1380&t=st=1703433583~exp=1703434183~hmac=9cf00d044a8068aaac9a017aa25a817ab717fa54ba569358e0d78bc7d8b4e756"
            class="h-40 w-full object-center" alt="">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white">
            <div class="grid grid-cols-2 lg:space-x-60 min-[300px]:space-x-14">
                <div class="flex-1 text-2xl font-bold text-white">{{$wine->name}}</div>
                <div
                    class="flex-1 text-2xl font-bold text-white w-full bg-gray-50 bg-opacity-25 rounded-full text-center">
                    <a href="{{route('home')}}">Home > {{$wine->name}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-gray-600 body-font overflow-hidden flex items-center justify-center min-h-screen lg:ms-30">
    <div class="container px-5 py-24 mx-auto flex justify-center">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="ecommerce" class="lg:w-1/6  min-[300px]:mx-auto lg:h-auto h-64 object-cover object-center rounded"
                 src="{{$wine->picture}}">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">Royal Terroir</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$wine->name}}</h1>
                <div class="flex mb-4 text-xl font-bold ">
                    ${{$wine->price}}
                </div>
                <p class="leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, dicta
                    ea ipsam maiores minima nesciunt non numquam quas? Adipisci atque blanditiis consequatur cumque
                    dolor itaque neque optio quae quam qui quibusdam quo sequi, voluptas! Architecto dignissimos iste
                    sed. Beatae commodi, cum deserunt earum esse est fuga illo itaque iusto magni perspiciatis, placeat
                    provident quo reprehenderit temporibus tenetur voluptate voluptatibus. Aliquam aliquid amet beatae,
                    corporis culpa doloremque ducimus, et excepturi harum impedit inventore laborum necessitatibus nihil
                    quod reiciendis repellat rerum sapiente sequi tenetur totam voluptas voluptate voluptates? Cumque,
                    cupiditate distinctio doloribus exercitationem expedita, harum hic neque quas quo reiciendis sequi
                    ullam!</p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                </div>
                <div class="flex">
                    <input type="text" name="" id="" value="1" class="border border-gray-900 rounded py-2 px-3 w-20">
                    <button
                        class="flex ml-auto text-white bg-[#b5a46d] border-0 py-2 px-6 focus:outline-none hover:bg-gray-900 rounded transition-all duration-300 font-bold text-center"
                        style="border-radius: 20px 0">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
        <div class="border border-gray-300 h-1/2 bg-gray-white shadow-xl w-1/6 rounded">
            <div class="text-center">
                <h1 class="text-2xl font-bold my-3">Country</h1>
                @foreach($countries as $country)
                    <div
                        class="font-bold bg-[#b5a46d] w-1/3 text-center mt-2 hover:bg-gray-500 hover:text-white transition-all duration-300 hover:cursor-pointer mx-auto"
                        style="border-radius: 20px 0;">
                        <a href="{{ route('country.show', $country->country) }}">{{ $country->country }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
</body>
</html>
