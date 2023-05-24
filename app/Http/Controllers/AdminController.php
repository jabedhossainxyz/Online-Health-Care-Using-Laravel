<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use function Symfony\Component\Console\Helper\resetIOCodepage;
use App\Models\News;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    //
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor = new doctor;
        $image = $request->file;

        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('doctorImage', $imageName);
        $doctor->image = $imageName;

        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor added successfully');
    }

    public function show_appointment()
    {
        $data = appointment::all();
        return view('admin.show_appointment', compact('data'));
    }

    public function approved($id)
    {
        $data = Appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }

    public function cancel($id)
    {
        $data = Appointment::find($id);
        $data->status = 'canceled';
        $data->save();
        return redirect()->back();
    }

    public function showDoctor()
    {
        $data = Doctor::all();
        return view('admin.show_doctor', compact('data'));
    }

    public function delete_doctor($id)
    {
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_doctor($id)
    {
        $data = Doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }

    public function edit_doctor(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        $image = $request->file;
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('doctorImage', $imageName);
            $doctor->image = $imageName;
        }


        $doctor->save();
        return redirect()->back()->with('message', 'Updated successfully');
    }

    public function showNews()
    {
        $data = News::all();
        return view('admin.show_news', compact('data'));
    }

    public function delete_news($id)
    {
        $news = News::find($id);
        $news->delete();

        return redirect()->back();
    }

    public function update_news($id)
    {
        $data = News::find($id);
        return view('admin.update_news', compact('data'));
    }

    public function edit_news(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'image' => 'nullable|image',
            'author_name' => 'required',
            'author_image' => 'nullable|image',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $news = News::find($id);
        $news->title = $request->title;
        $news->category = $request->category;
        $news->content = $request->content;
        $news->author_name = $request->author_name;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('newsImage', $imageName);
            $news->image = $imageName;
        }

        if ($request->hasFile('author_image')) {
            $authorImage = $request->file('author_image');
            $authorImageName = time() . '.' . $authorImage->getClientOriginalExtension();
            $authorImage->move('authorImage', $authorImageName);
            $news->author_image = $authorImageName;
        }

        $news->save();

        return redirect()->back()->with('message', 'News updated successfully');
    }

    public function storeNews(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'image' => 'required|image',
            'author_name' => 'required',
            'author_image' => 'required|image',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('newsImage', $imageName);

        $authorImage = $request->file('author_image');
        $authorImageName = time() . '.' . $authorImage->getClientOriginalExtension();
        $authorImage->move('authorImage', $authorImageName);

        $news = new News;
        $news->title = $request->title;
        $news->category = $request->category;
        $news->content = $request->content;
        $news->image = $imageName;
        $news->author_name = $request->author_name;
        $news->author_image = $authorImageName;
        $news->save();

        return redirect()->back()->with('message', 'News added successfully');
    }
}
