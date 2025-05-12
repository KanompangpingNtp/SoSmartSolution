<?php

namespace App\Http\Controllers\admin\service_video;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceVideo;
use App\Models\ServiceVideoFile;
use Illuminate\Support\Facades\Storage;

class ServiceVideoController extends Controller
{
    public function AdminServiceVideoPage()
    {
        $serviceVideo = ServiceVideo::with('files')->orderBy('created_at', 'desc')->get();

        return view('dashboard.admin.service_video.page', compact('serviceVideo'));
    }

    public function AdminServiceVideoCreate(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string',
            'url_link' => 'nullable|string|url',
            'files_title' => 'file|mimes:jpg,jpeg,png|max:21200',
        ]);

        $service = ServiceVideo::create([
            'name' => $request->name ?? 'ไม่มีชื่อ',
            'url_link' => $request->url_link,
        ]);

        if ($request->hasFile('files_title')) {
            $file = $request->file('files_title');
            $path = $file->store('service_video_files', 'public');

            ServiceVideoFile::create([
                'service_video_id' => $service->id,
                'file_path' => $path,
                'file_type' => $file->getClientOriginalExtension(),
            ]);
        }

        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }

    public function AdminServiceVideoUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'url_link' => 'nullable|string|url',
            'files_title' => 'nullable|file|mimes:jpg,jpeg,png|max:21200',
        ]);

        $service = ServiceVideo::findOrFail($id);
        $service->update([
            'name' => $request->name,
            'url_link' => $request->url_link,
        ]);

        if ($request->hasFile('files_title')) {
            $file = $request->file('files_title');
            $path = $file->store('service_video_files', 'public');

            $existingMain = $service->files()->where('status', 1)->first();
            if ($existingMain) {
                $existingMain->update([
                    'file_path' => $path,
                    'file_type' => $file->getClientOriginalExtension(),
                ]);
            } else {
                ServiceVideoFile::create([
                    'service_video_id' => $service->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientOriginalExtension(),
                ]);
            }
        }

        return redirect()->back()->with('success', 'อัปเดตข้อมูลบริการเรียบร้อย');
    }

    public function AdminServiceVideoDelete($id)
    {
        $service = ServiceVideo::findOrFail($id);

        foreach ($service->files as $file) {
            Storage::delete($file->file_path);
            $file->delete();
        }

        $service->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลบริการเรียบร้อย');
    }

    public function AdminServiceVideoDetail($id)
    {
        $service = ServiceVideo::with('files')->findOrFail($id);

        return view('dashboard.admin.service_video.detail', compact('service'));
    }
}
