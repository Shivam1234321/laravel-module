<?php

namespace Modules\Products\Repositories;

use App\Repositories\BaseRepository;
use Modules\Products\Entities\Product;

class ProductRepository extends BaseRepository{
 
    const MODEL = Product::class;


    public function getAll(){
        return $this->query()->get();
    }

    public function create($data){
        return Product::create($data);
    }

    public function update($data, $id){
        return Product::find($id)->update($data);
    }

}

?>