<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Address;
use App\Model\Order;
use App\Model\OrderDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function orders()
    {

        $order = Auth::user()->orders;


        return view('frontend/pages/account-orders', compact('order'));
    }

    public function order_details(Request $request)
    {
        $order_id = $request->id;
        $order_details= OrderDetail::where('order_id',$order_id)->get();
//        dd($order_details);

        return view('frontend/order_details_modal', compact('order_details'));


    }

    public function address(Request $request)
    {
        if ($request->isMethod('get')) {
            $address = Address::all();
            return view('frontend/pages/account-address', compact('address'));
        }

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'country' => 'required',
                'city' => 'required',
                'zip_code' => 'required',
                'address1' => 'required',
                'address2' => 'required',
            ])->validate();
            $address = new Address();
            $address->user_id = $request->user_id;
            $address->first_name = $request->first_name;
            $address->last_name = $request->last_name;
            $address->company = $request->company;
            $address->country = $request->country;
            $address->city = $request->city;
            $address->zip_code = $request->zip_code;
            $address->address1 = $request->address1;
            $address->address2 = $request->address2;
            if ($request->is_primary) {
                $address->is_primary = 1;
            }
            $address->save();
            return redirect()->back()->with('success', 'Address Saved');

        }
        return false;
    }

    public function user_profile(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('frontend/pages/account-profile');
        }
        if ($request->isMethod('post')) {
            $id = $request->user_id;
            $find = User::find($id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'roles' => 'user',
            ]);
        }
        if ($find) {
            return redirect()->back()->with('success', 'User profile updated');

        }
    }


    public function password_recovery()
    {
        return view('frontend/pages/account-password-recovery');
    }

    public function change_password(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('frontend/pages/change_password');
        }
        if ($request->ajax()) {

            $messages = [
                'old_password.required' => 'Please Enter Old Password',
                'new_password.required' => 'Please Enter New Password',
                'confirm_password.required' => 'Please Enter The New Password Again',
            ];

            $validatedData = Validator::make($request->all(), [
                'old_password' => 'required',
                'new_password' => 'required_with:confirm_password|same:confirm_password',
                'confirm_password' => 'required',
            ], $messages);
            if ($validatedData->fails()) {
                return response()->json(['errors' => $validatedData->errors()->all()], 406);
            }

            if (!Hash::check($request->old_password, Auth::user()->password)) {
                return response()->json(['errors' => 'Old Password not match'], 401);

            }
            $user = Auth::user();
            $user->password = bcrypt($request->new_password);
            $user->save();
            return response()->json(['success' => 'Password changed'], 200);
        }

    }
}
