<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Wine;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            $recentOrders = Order::latest()->take(10)->get();
            $products = Wine::paginate(10);
            $userStatistics = User::count();

            return view('admin.dashboard', compact('recentOrders', 'products', 'userStatistics'));
        }
    }

    public function showUsers()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            $users = User::paginate(10);
            return view('admin.users', compact('users'));
        }
    }

    public function showProduct()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            $products = Wine::paginate(10);
            return view('admin.products', compact('products'));
        }
    }

    public function addProduct()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            return view('admin.add-product');
        }
    }

    public function handleAddProduct(Request $request)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            $data = $request->validate([
                'name' => 'required',
                'price' => 'required',
                'region' => 'required',
                'grapes' => 'required',
                'country' => 'required',
                'description' => 'required',
                'year' => 'required',
                'picture' => 'required',
            ]);

            $wine = Wine::create([
                'name' => $data['name'],
                'price' => $data['price'],
                'region' => $data['region'],
                'grapes' => $data['grapes'],
                'country' => $data['country'],
                'description' => $data['description'],
                'year' => $data['year'],
                'picture' => $data['picture'],
            ]);

            return redirect()->back()->with('success', 'Product added successfully!');
        }
    }

    public function editProduct($id) {
        if(auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            $wine = Wine::findOrfail($id);
            return view('admin.edit-product', compact('wine'));
        }
    }

    public function handleEditProduct (Request $request, $id) {
        if(auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            $data = $request->validate([
                'name' => 'required',
                'price' => 'required',
                'region' => 'required',
                'grapes' => 'required',
                'country' => 'required',
                'description' => 'required',
                'year' => 'required',
                'picture' => 'required',
            ]);

            $wine = Wine::findOrfail($id);
            $wine->update([
                'name' => $data['name'],
                'price' => $data['price'],
                'region' => $data['region'],
                'grapes' => $data['grapes'],
                'country' => $data['country'],
                'description' => $data['description'],
                'year' => $data['year'],
                'picture' => $data['picture'],
            ]);
        }
        return redirect()->back()->with('success', 'Product updated successfully!');
    }

    public function deleteProduct($id) {
        if(auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            $product = Wine::findOrfail($id);
            $product->delete();
            return redirect()->back()->with('success', 'Product deleted successfully!');
        }
    }

    public function addUser() {
        if(auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            return view('admin.add-user');
        }
    }

    public function handleAddUser(Request $request) {
        if(auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        }
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => $data['role'],
        ]);

        return redirect()->back()->with('success', 'User added successfully!');
    }

    public function editUser($id) {
        if(auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            $user = User::findOrfail($id);
            return view('admin.edit-user', compact('user'));
        }
    }

    public function handleEditUser(Request $request, $id) {
        if(auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            $user = User::findOrfail($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
            ]);
            return redirect()->back()->with('success', 'User updated successfully!');
        }
    }

    public function deleteUser($id) {
        if(auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            $user = User::findOrfail($id);
            $user->delete();
            return redirect()->back()->with('success', 'User deleted successfully!');
        }
    }

    public function showOrders() {
        if(auth()->user()->role !== 'admin') {
            return redirect()->back()->with('error', 'You do not have access to this page!');
        } else {
            $orders = Order::paginate(10);
            return view('admin.orders', compact('orders'));
        }
    }
}
