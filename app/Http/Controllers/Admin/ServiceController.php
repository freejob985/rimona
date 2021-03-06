<?php

namespace App\Http\Controllers\Admin;

use App\BasicExtended;
use App\Http\Controllers\Controller;
use App\Language;
use App\Scategory;
use App\Service;
use DB;
use Illuminate\Http\Request;
use Session;
use Validator;

class ServiceController extends Controller
{

    public function index(Request $request)
    {
        $lang = Language::where('code', $request->language)->first();

        $lang_id = $lang->id;
        $data['services'] = Service::where('language_id', $lang_id)->orderBy('id', 'DESC')->paginate(10);

        $data['lang_id'] = $lang_id;
        $data['abe'] = BasicExtended::where('language_id', $lang_id)->first();

        return view('admin.service.service.index', $data);
    }

    public function index_sections(Request $request)
    {

        $data['services'] = DB::table('sections')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.service.sections.index', $data);
    }

    public function edit($id)
    {
        $data['service'] = Service::findOrFail($id);
        $data['ascats'] = Scategory::where('status', 1)->where('language_id', $data['service']->language_id)->get();
        $data['abe'] = BasicExtended::where('language_id', $data['service']->language_id)->first();
        return view('admin.service.service.edit', $data);
    }

    public function edit_sections($id)
    {

        $data['service'] = DB::table('sections')->find($id);
        return view('admin.service.sections.edit', $data);
    }

    public function upload(Request $request)
    {
        $img = $request->file('file');
        $allowedExts = array('jpg', 'png', 'jpeg');

        $rules = [
            'file' => [
                function ($attribute, $value, $fail) use ($img, $allowedExts) {
                    if (!empty($img)) {
                        $ext = $img->getClientOriginalExtension();
                        if (!in_array($ext, $allowedExts)) {
                            return $fail("Only png, jpg, jpeg image is allowed");
                        }
                    }
                },
            ],
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $validator->getMessageBag()->add('error', 'true');
            return response()->json(['errors' => $validator->errors(), 'id' => 'service']);
        }

        $filename = time() . '.' . $img->getClientOriginalExtension();
        $request->session()->put('service_image', $filename);
        $request->file('file')->move('assets/front/img/services/', $filename);
        return response()->json(['status' => "session_put", "image" => "service_image", 'filename' => $filename]);
    }

    public function store(Request $request)
    {
        $language = Language::find($request->language_id);
        $be = $language->basic_extended;

        $messages = [
            'language_id.required' => 'The language field is required',
        ];

        $slug = make_slug($request->title);

        $rules = [
            'language_id' => 'required',
            'service_image' => 'required',
            'title' => 'required|max:25000000000000005',
            'serial_number' => 'required',
            'content' => 'required',
            'details_page_status' => 'required',
            'summary' => 'required',
        ];

        // if 'theme version'contains service category
        if (hasCategory($be->theme_version)) {
            $rules["category"] = 'required';
        }

        // if 'theme version' doesn't contain service category
        if ($request->details_page_status == 0) {
            $rules["content"] = 'nullable';
        }

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            $errmsgs = $validator->getMessageBag()->add('error', 'true');
            return response()->json($validator->errors());
        }

        $service = new Service;
        $service->language_id = $request->language_id;
        $service->title = $request->title;
        $service->main_image = $request->service_image;
        $service->slug = $slug;
        // if 'theme version'contains service category
        if (hasCategory($be->theme_version)) {
            $service->scategory_id = $request->category;
        }
        $service->summary = $request->summary;
        $service->details_page_status = $request->details_page_status;
        $service->meta_description = $request->meta_description;
        $service->meta_keywords = $request->meta_keywords;
        $service->serial_number = $request->serial_number;
        $service->content = $request->content;
        $service->save();

        Session::flash('success', 'Service added successfully!');
        return "success";
    }

    public function update(Request $request)
    {
        $slug = make_slug($request->title);
        $service = Service::findOrFail($request->service_id);

        $language = Language::find($service->language_id);
        $be = $language->basic_extended;

        $rules = [
            'title' => 'required|max:25000000000000005',
            'content' => 'required',
            'serial_number' => 'required',
            'details_page_status' => 'required',
            'summary' => 'required',
        ];

        if (hasCategory($be->theme_version)) {
            $rules["category"] = 'required';
        }

        if ($request->details_page_status == 0) {
            $rules["content"] = 'nullable';
        }

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $errmsgs = $validator->getMessageBag()->add('error', 'true');
            return response()->json($validator->errors());
        }

        $service->title = $request->title;
        $service->slug = $slug;
        if (hasCategory($be->theme_version)) {
            $service->scategory_id = $request->category;
        }
        $service->summary = $request->summary;
        $service->details_page_status = $request->details_page_status;
        $service->serial_number = $request->serial_number;
        $service->meta_keywords = $request->meta_keywords;
        $service->meta_description = $request->meta_description;
        $service->content = $request->content;
        $service->save();
        Session::flash('success', 'Service updated successfully!');
        return "success";
    }

    public function update_sections (Request $request)
    {
        //     dd($request->all());
       // dd("الاضافة");

        if ($request->Type == "Logo") {
            if ($request->hasFile('File')) {
                $file = $request->File;
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . "_mrbean" . '.' . $extension;
                $file->move("assets/front/img/Logo/", $filename);
            } else {
                $filename = "";
            }
            DB::table('sections')->insert([
                'File' => $filename,
                'Type' => $request->input('Type'),
                'service' => $request->input('service'),
                'Title' => $request->input('Title'),
                'paragraph' => $request->input('paragraph'),
            ]);
            return redirect()->back()->with('alert-success', 'The file has been uploaded');

        } elseif ($request->Type == "Products") {
            if ($request->hasFile('File')) {
                $file = $request->File;
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . "_mrbean" . '.' . $extension;
                $file->move("assets/front/img/Productsss/", $filename);
            } else {
                $filename = "";
            }
            DB::table('sections')->insert([
                'File' => $filename,
                'Type' => $request->input('Type'),
                'service' => $request->input('service'),
                'Title' => $request->input('Title'),
                'paragraph' => $request->input('paragraph'),
            ]);
            return redirect()->back()->with('alert-success', 'The file has been uploaded');

        } elseif ($request->Type == "Projects") {
            if ($request->hasFile('File')) {
                $file = $request->File;
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . "_mrbean" . '.' . $extension;
                $file->move("assets/front/img/Projects/", $filename);
            } else {
                $filename = "";
            }
            DB::table('sections')->insert([
                'File' => $filename,
                'Type' => $request->input('Type'),
                'service' => $request->input('service'),
                'Title' => $request->input('Title'),
                'paragraph' => $request->input('paragraph'),
            ]);

           // Session::flash('success', 'Service updated successfully!');
           return redirect()->back()->with('alert-success', 'The file has been uploaded');

        }
    }

    public function upload_sec (Request $request)
    {

        //  dd($request->all());
       // dd("التحديث");
        if ($request->Type == "Logo") {
            if ($request->hasFile('File')) {
                $file = $request->File;
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . "_mrbean" . '.' . $extension;
                $file->move("assets/front/img/Logo/", $filename);
            } else {

                $filename = DB::table('sections')->where('id', $request->input('id'))->value('File');

            }

            DB::table('sections')
                ->where('id', $request->input('id'))
                ->update(['File' => $filename,
                    'Type' => $request->input('Type'),
                    'service' => $request->input('service'),
                    'Title' => $request->input('Title'),
                    'paragraph' => $request->input('paragraph')]);

        } elseif ($request->Type == "Products") {
            if ($request->hasFile('File')) {
                $file = $request->File;
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . "_mrbean" . '.' . $extension;
                $file->move("assets/front/img/Productsss/", $filename);
            } else {
                $filename = DB::table('sections')->where('id', $request->input('id'))->value('File');
            }
            DB::table('sections')
                ->where('id', $request->input('id'))
                ->update(['File' => $filename,
                    'Type' => $request->input('Type'),
                    'service' => $request->input('service'),
                    'Title' => $request->input('Title'),
                    'paragraph' => $request->input('paragraph')]);

        } elseif ($request->Type == "Projects") {
            if ($request->hasFile('File')) {
                $file = $request->File;
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . "_mrbean" . '.' . $extension;
                $file->move("assets/front/img/Projects/", $filename);
            } else {
                $filename = DB::table('sections')->where('id', $request->input('id'))->value('File');
            }
            DB::table('sections')
                ->where('id', $request->input('id'))
                ->update(['File' => $filename,
                    'Type' => $request->input('Type'),
                    'service' => $request->input('service'),
                    'Title' => $request->input('Title'),
                    'paragraph' => $request->input('paragraph')]);
        }

        return redirect()->back()->with('alert-success', 'The file has been updata');

    }

    public function uploadUpdate(Request $request, $id)
    {
        $img = $request->file('file');
        $allowedExts = array('jpg', 'png', 'jpeg');

        $rules = [
            'file' => [
                function ($attribute, $value, $fail) use ($img, $allowedExts) {
                    if (!empty($img)) {
                        $ext = $img->getClientOriginalExtension();
                        if (!in_array($ext, $allowedExts)) {
                            return $fail("Only png, jpg, jpeg image is allowed");
                        }
                    }
                },
            ],
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $validator->getMessageBag()->add('error', 'true');
            return response()->json(['errors' => $validator->errors(), 'id' => 'service_image']);
        }

        $service = Service::findOrFail($id);
        if ($request->hasFile('file')) {
            $filename = time() . '.' . $img->getClientOriginalExtension();
            $request->file('file')->move('assets/front/img/services/', $filename);
            @unlink('assets/front/img/services/' . $service->main_image);
            $service->main_image = $filename;
            $service->save();
        }

        return response()->json(['status' => "success", "image" => "Service image", 'service' => $service]);
    }

    public function delete(Request $request)
    {
        $service = Service::findOrFail($request->service_id);
        @unlink('assets/front/img/services/' . $service->main_image);
        $service->delete();

        Session::flash('success', 'Service deleted successfully!');
        return back();
    }

    public function delete_sections(Request $request)
    {
        //  dd("Catch errors for script and full tracking ( 4 )");
        DB::table('sections')->where('id', '=', $request->service_id)->delete();
        // @unlink('assets/front/img/services/' . $service->main_image);
        Session::flash('success', 'Service deleted successfully!');
        return back();
    }
    public function bulkDelete(Request $request)
    {
        $ids = $request->ids;

        foreach ($ids as $id) {
            $service = Service::findOrFail($id);
            @unlink('assets/front/img/services/' . $service->main_image);
            $service->delete();
        }

        Session::flash('success', 'Services deleted successfully!');
        return "success";
    }

    public function getcats($langid)
    {
        $scategories = Scategory::where('language_id', $langid)->get();

        return $scategories;
    }

    public function feature(Request $request)
    {
        $service = Service::find($request->service_id);
        $service->feature = $request->feature;
        $service->save();

        if ($request->feature == 1) {
            Session::flash('success', 'Featured successfully!');
        } else {
            Session::flash('success', 'Unfeatured successfully!');
        }

        return back();
    }
}
