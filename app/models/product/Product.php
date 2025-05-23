<?php

namespace App\models\product;

use Illuminate\Database\Eloquent\Model;
use App\models\language\Language;
use Image,Auth;
use App\Customer;
use App\models\product\Category;
use App\models\product\TypeProduct;
use  App\models\product\TypeProductTwo;
use App\models\VariantSkuValue;
use App\models\website\Partner ;
use DB;
class Product extends Model
{
    protected $table = "products";
    public function rule()
    {
        return [
            // 'name'  =>   'unique:products,name'
        ];
    }
    public function customer()
    {
        return $this->hasOne(Customer::class,'id','author');
    }
    public function cate()
    {
        return $this->hasOne(Category::class,'id','category');
    }
    public function thuonghieu()
{
    return $this->belongsTo(Partner::class, 'thuonghieu_id');
}
    public function typecate()
    {
        return $this->hasOne(TypeProduct::class,'id','type_cate');
    }
    public function VariantSkuValue()
    {
        return $this->hasMany(VariantSkuValue::class,'id','product_id');
    }

    public function createOrEdit($request)
    {
        $cat = Category::where('id',$request->category)->first('slug');
        $typecat = TypeProduct::where('id',$request->type_cate)->first('slug');
        $typetwo = TypeProductTwo::where('id',$request->type_two)->first('slug');
        $id = $request->id;
        DB::beginTransaction();
        try {
            if ($id) {
                $query = Product::find($id);
                if($query){
                    $query->name = ($request->name);
                    $query->slug = to_slug($request->name);
                    $query->price = $request->price != null ? $request->price : 0;
                    $query->discount = $request->discount != null ? $request->discount : 0;
                    $query->images = json_encode($request->images);
                    $query->description = json_encode($request->description);
                    $query->km = json_encode($request->km);
                    $query->content = json_encode($request->content);
                    $query->size = json_encode($request->size);
                    $query->variant = json_encode($request->variant);
                    $query->thuonghieu_id = $request->thuonghieu_id;
                    $query->category = $request->category;
                    $query->type_two = $request->type_two;
                    $query->preserve = json_encode($request->preserve);
                    $query->tags = json_encode($request->tags);
                    $query->cate_slug = $cat ? $cat->slug : '';
                    $query->type_slug = $typecat ? $typecat->slug : '';
                    $query->type_two_slug = $typetwo ? $typetwo->slug : '';
                    $query->ingredient = $request->ingredient;
                    $query->type_cate = $request->type_cate;
                    // $query->species = json_encode($request->species);
                    $query->origin = $request->origin;
                    $query->thickness = $request->thickness;
                    $query->status_variant = $request->status_variant;
                    $query->hang_muc = $request->hang_muc;
                    $query->status = $request->status;
                    $query->discountStatus = $request->discountStatus;
                    $query->home_status = $request->home_status;
                    $query->cate_build_pc = $request->cate_build_pc;
                    $query->service_id = $request->service_id;
                    $query->save();
                    if($request->status_variant == 1){
                        // dd($request->lungtung);
                        VariantSkuValue::where('product_id',$query->id)->delete();
                        foreach ($request->lungtung as $key => $val) {
                            $data = new VariantSkuValue();
                            $data->product_id = $query->id;
                            $data->version = $val['version'];
                            $data->price = $val['price'];
                            $data->qty = $val['qty'];
                            $data->sku = $query->slug.rand();
                            $data->save();
                        }
                    }
                    
                }
            }else{
                $query = new Product();
                $query->name = ($request->name);
                $query->slug = to_slug($request->name);
                $query->price = $request->price != null ? $request->price : 0;
                $query->discount = $request->discount != null ? $request->discount : 0;
                $query->images = json_encode($request->images);
                $query->description = json_encode($request->description);
                $query->content = json_encode($request->content);
                $query->size = json_encode($request->size);
                $query->km = json_encode($request->km);
                $query->category = $request->category;
                $query->tags = json_encode($request->tags);
                $query->type_two = $request->type_two;
                $query->preserve = json_encode($request->preserve);
                $query->variant = json_encode($request->variant);
                $query->cate_slug = $cat ? $cat->slug : '';
                $query->type_slug = $typecat ? $typecat->slug : '';
                $query->type_two_slug = $typetwo ? $typetwo->slug : '';
                $query->ingredient = $request->ingredient;
                $query->type_cate = $request->type_cate;
                $query->thuonghieu_id = $request->thuonghieu_id;
                $query->species = json_encode($request->species);
                $query->origin = $request->origin;
                $query->thickness = $request->thickness;
                $query->status_variant = $request->status_variant;
                $query->hang_muc = $request->hang_muc;
                $query->status = $request->status;
                $query->discountStatus = $request->discountStatus;
                $query->home_status = $request->home_status;
                $query->service_id = $request->service_id;
                $query->save();
                if($request->status_variant == 1){
                foreach ($request->lungtung as $key => $val) {
                    $data = new VariantSkuValue();
                    $data->product_id = $query->id;
                    $data->version = $val['version'];
                    $data->price = $val['price'];
                    $data->qty = $val['qty'];
                    $data->sku = $query->slug.rand();
                    $data->save();
                }
                }
            }
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
        return $query;
    }
    public function createClient($request)
    {
        $images = $request->file('images');
        $images_data = [];
        $query = new Product();
        $query->name = toArrayLanguage($request->name);
        $query->slug = to_slug($request->name[0]['content']);
        $query->km = toArrayLanguage($request->km);
        $query->description = toArrayLanguage($request->description);
        $query->uses = toArrayLanguage($request->uses);
        $query->relationship = $request->relationship;
        $query->category = $request->category;
        $query->type_cate = $request->type_cate;
        $query->management_costs = $request->management_costs;
        $query->address = $request->address; 
        $query->district = $request->district;
        $query->author = Auth::guard('customer')->user()->id;
        $query->content = toArrayLanguage($request->content); 
        
        $query->status = $request->status; //0-Sẵn sàng giao dịch 1-Ngừng giao dịch
        $query->acreage = $request->acreage;
        
        
       
        $query->percent_yourself = $request->percent_yourself; 
        $query->cost_investment = $request->cost_investment; 
        $query->video = $request->video;
        if($request->hasFile('images')){
            foreach($images as $image){
                $name=time().$image->getClientOriginalName();
                $destinationPath = 'uploads/real_estate/' . $name;
                $img = Image::make($image->getRealPath());
                $img->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save('uploads/real_estate/'.$name);
                $images_data[] = $name;
            }
        }
        $query->images=json_encode($images_data);
        $query->save();
        return $query;
    }
}
