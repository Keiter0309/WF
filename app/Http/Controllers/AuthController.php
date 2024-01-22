<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wine;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required', 'min:8', 'max:30', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'confirm_password' => 'required'
        ],
            [
                'name.required' => 'Please enter your name',
                'email.required' => 'Please enter your email',
                'password.required' => 'Please enter your password',
                'confirm_password.required' => 'Please confirm your password'
            ]);

        try {
            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => bcrypt($input['password']),
                'confirm_password' => bcrypt($input['confirm_password'])
            ]);
            $token = $user->createToken('auth_token')->plainTextToken;
            auth()->login($user);

            return back()->with([
                'status_code' => 200,
                'message' => 'User created successfully',
                'token' => $token
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in signup',
                'error' => $error
            ]);
        }
    }

    public function login(Request $request)
    {
        $input = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
            [
                'email.required' => 'Please enter your email',
                'password.required' => 'Please enter your password'
            ]);

        try {
            $user = User::where('email', $input['email'])->first();
            if (!$user || !\Hash::check($input['password'], $user->password)) {
                return back()->with([
                    'status_code' => 401,
                    'error' => 'Incorrect email or password'
                ]);
            }
            $token = $user->createToken('auth_token')->plainTextToken;
            auth()->login($user);
            return redirect('/')->with([
                'status_code' => 200,
                'message' => 'User logged in successfully',
                'token' => $token,
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in login',
                'error' => $error
            ]);
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        session()->forget('cart');
        return redirect('/login');
    }
    public function index() {
        $wines = Wine::all();
        return view('demo', compact('wines'));
    }

    public function wineCart() {

        return view('cart');
    }

    public function addToCart($id) {
        $wine = Wine::findOrfail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }else {
            $cart[$id] = [
                'name' => $wine->name,
                'quantity' => 1,
                'price' => $wine->price,
                'picture' => $wine->picture,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Wine added to cart successfully!');
    }

    public function updateCart(Request $request) {
        $cart = session()->get('cart');
        $total = 0;
        foreach($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }
        return response()->json(['total' => $total]);
    }

    public function removeFromCart($id) {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Wine removed from cart successfully!');
    }

    public function getCartDetails () {
        $cart = session()-get('cart', []);
        $totalPrice = 0;
        $totalItems = 0;

        foreach($cart as $id => $details) {
            $totalPrice += $details['price'] * $details['quantity'];
            $totalItems += $details['quantity'];
        }

        return ['totalPrice' => $totalPrice, 'totalItems' => $totalItems];
    }
}
