<?php

namespace App\Http\Controllers;
use App\Repositories\AboutReponsitory;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private AboutReponsitory $aboutReponsitory;

    public function __construct(AboutReponsitory $aboutReponsitory){
        $this->aboutReponsitory = $aboutReponsitory;
    }

    public function index(){
        $about = $this->aboutReponsitory->all();
        return view('pages.about_us.index', compact('about'));
    }

    public function getListAbout(){
        $about = $this->aboutReponsitory->all();
        return view('admin.about.index', ['about' => $about]);
    }

    public function getAboutById($id){
        $about = $this->aboutReponsitory->findById($id);
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, $id){
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
            $data['image'] = $file;
        }
        $about = $this->aboutReponsitory->update($data, $id);
        return redirect()->route('admin.about.list')->with('message', 'Chỉnh sửa thành công !!!');
    }

    public function create(Request $request){

        $type = $request->type;
        return view('admin.about.create', compact('type'));
    }

    public function store(Request $request){

        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
            $data['image'] = $file;
        }
        $about = $this->aboutReponsitory->store($data);
        return redirect()->route('admin.about.list')->with('message', 'Thêm giới thiệu thành công !!!');
    }
    public function delete($id){
        $post = $this->aboutReponsitory->delete($id);
        return redirect()->route('admin.about.list')->with('message', 'Xóa nội dung giới thiệu thành công !!!');
    }
}
