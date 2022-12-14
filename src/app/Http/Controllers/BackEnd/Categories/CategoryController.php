<?php

namespace App\Http\Controllers\BackEnd\Categories;

use App\Http\Requests\category\CreateCategoryRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use JavaScript;
use App\Core\ApiResponser;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     use ApiResponser;

    private $category;
    private $limit = 10;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->paginate($this->limit);
        $view = view('backend.categories.index');
        JavaScript::put([
             'categories' => $categories,
             'url_delete_category' => route('backend.category.delete'),
             'url_create_category' => route('backend.category.create'),
             'url_show_category' => route('backend.category.show'),
             'url_update_category' => route('backend.category.update'),
         ]);
        $view->with('categories', $categories);
        return $view;
    }

    public function show(){
        $id = request('id');
        $category = $this->category->find($id);
        return $this->success($category);
    }

    public function create(CreateCategoryRequest $request)
    {
        $name = $request->name;
        $data = [
            'name' => $name,
            'slug' => create_slug($name)
        ];
        $check = $this->category->where('name', $name)->first();
        if ($check) {
            return $this->success('Thể loại đã tồn tại');
        }
        $result = $this->category->create($data);
        return $this->success($data);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $category = $this->category->where('id', $id)->update([ 'name' => $name, 'slug' => create_slug($name) ]);
        if ($category){
            return $this->success(['success' => 'Cập nhật thành công' ], 200);
        }
        return $this->success(['error' => 'Cập nhật không thành công' ], 400);
    }

    public function delete(){
        $id = request('id');
        if ($this->category->find($id)->delete()) {
            return $this->success('Thành công', 200);
        }
        return $this->success('Thất bại', 400);
    }

}
