<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;
use Auth;

class WishlistController extends Controller
{
    public function wishlist(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->first();
        
        if (empty($product)) {
            request()->session()->flash('error', 'Sản phẩm không tồn tại');
            return back();
        }

        $already_wishlist = Wishlist::where('user_id', auth()->user()->id)
                                    ->where('product_id', $product->id)
                                    ->first();

        if ($already_wishlist) {
            request()->session()->flash('error', 'Sản phẩm đã có trong danh sách yêu thích');
            return back();
        } else {
            $wishlist = new Wishlist;
            $wishlist->user_id = auth()->user()->id;
            $wishlist->product_id = $product->id;
            $wishlist->price = ($product->price - ($product->price * $product->discount) / 100);
            $wishlist->quantity = 1;
            $wishlist->amount = $wishlist->price * $wishlist->quantity;
            
            if ($wishlist->save()) {
                request()->session()->flash('success', 'Sản phẩm đã được thêm vào danh sách yêu thích');
                return back();
            }
        }
        
        request()->session()->flash('error', 'Có lỗi xảy ra, vui lòng thử lại');
        return back();
    }

    public function wishlistDelete(Request $request, $id)
    {
        $wishlist = Wishlist::find($id);
        
        if ($wishlist) {
            if ($wishlist->user_id == auth()->user()->id) {
                $wishlist->delete();
                request()->session()->flash('success', 'Đã xóa sản phẩm khỏi danh sách yêu thích');
                return back();
            }
        }
        
        request()->session()->flash('error', 'Có lỗi xảy ra');
        return back();
    }
}
