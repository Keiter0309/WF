<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Wine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WineController extends Controller
{
    public function index()
    {
        $orderedWineIds = Order::pluck('name');
        $wines = Wine::whereNotIn('name', $orderedWineIds)->paginate(8);
        return view('home', compact('wines'));
    }

    public function wineCart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        if (Auth::check()) {
            $wine = Wine::findOrfail($id);
            $cart = session()->get('cart', []);

            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    'name' => $wine->name,
                    'quantity' => 1,
                    'price' => $wine->price,
                    'picture' => $wine->picture,
                ];
            }
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Wine added to cart successfully!');
        } else {
            return redirect()->back()->with('error', 'Please login to add wine to cart!');
        }
    }


    public function updateCart(Request $request)
    {
        $cart = session()->get('cart');
        $total = 0;
        foreach ($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }
        return response()->json(['total' => $total]);
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Wine removed from cart successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $wines = Wine::where('name', 'like', "%{$query}%")->get();

        return view('search-results', [
            'wines' => $wines,
            'query' => $query
        ]);
    }

    public function detailsProduct($id)
    {
        $wine = Wine::findOrfail($id);
        $countries = Wine::distinct('country')->get('country');
        return view('details', compact('wine', 'countries'));
    }

    public function showByCountry($country)
    {
        $wines = Wine::where('country', $country)->get();
        return view('country-wines', compact('wines'));
    }

    public function showCheckout(Request $request)
    {
        $cart = session()->get('cart', []);

        $total = 0;
        foreach ($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }

        return view('checkout', ['cart' => $cart, 'total' => $total]);
    }

    public function handleCheckout(Request $request)
{
    $cart = session()->get('cart', []);
    $total = 0;
    foreach ($cart as $id => $details) {
        $total += $details['price'] * $details['quantity'];

        $wine = Wine::find($id);
        if (!$wine) {
            return redirect()->back()->with('error', 'Wine not found in the database');
        }
    }
    $data = $request->validate([
        'name' => 'required',
        'address' => 'required',
        'email' => 'required',
        'zip' => 'required',
        'phone' => 'required',
    ]);

    $order = new Order();
    $order->user_id = Auth::id();
    $order->total = $total;
    $order->wine_name = $wine->name;
    $order->name = $data['name']; // Add user's name to the order
    $order->address = $data['address']; // Add user's address to the order
    $order->email = $data['email']; // Add user's email to the order
    $order->zip = $data['zip']; // Add user's zip code to the order
    $order->phone = $data['phone']; // Add user's phone number to the order
    $order->save();

    foreach ($cart as $id => $details) {
        $order->wine()->create([
            'wines_id' => $id,
            'wine_name' => $details['name'],
            'quantity' => $details['quantity'],
            'price' => $details['price'],
        ]);
    }

    session()->forget('cart');

    return redirect()->route('order.success', $order->id);
}

    public function orderSuccess()
    {
        return view('order.success');
    }

    public function viewCheckout($id)
    {
        $wine = Wine::findOrFail($id);

        if (!$wine) {
            return redirect()->back()->with('error', 'Wine not found');
        }

        return view('checkout', ['wine' => $wine]);
    }

    public function getCartDetails () {
        $cart = session()->get('cart', []);
        $totalPrice = 0;
        $totalItems = 0;

        foreach ($cart as $id => $details) {
            $totalPrice += $details['price'] * $details['quantity'];
            $totalItems += $details['quantity'];
        }

        return ['totalPrice' => $totalPrice, 'totalItems' => $totalItems];
    }
}
