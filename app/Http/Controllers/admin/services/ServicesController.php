<?php

namespace App\Http\Controllers\admin\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceFile;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function AdminServicesPage()
    {
        $services = Service::with('files')->orderBy('created_at', 'desc')->get();

        return view('dashboard.admin.services.page', compact('services'));
    }

    public function AdminServicesCreate(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string',
            'url_link' => 'nullable|string|url',
            'files_title' => 'file|mimes:jpg,jpeg,png|max:21200',
        ]);

        $service = Service::create([
            'name' => $request->name ?? 'ไม่มีชื่อ',
            'url_link' => $request->url_link,
        ]);

        if ($request->hasFile('files_title')) {
            $file = $request->file('files_title');
            $path = $file->store('services_files', 'public');

            ServiceFile::create([
                'service_id' => $service->id,
                'file_path' => $path,
                'file_type' => $file->getClientOriginalExtension(),
                'status' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }

    public function AdminServicesUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'url_link' => 'nullable|string|url',
            'files_title' => 'nullable|file|mimes:jpg,jpeg,png|max:21200',
        ]);

        $service = Service::findOrFail($id);
        $service->update([
            'name' => $request->name,
            'url_link' => $request->url_link,
        ]);

        if ($request->hasFile('files_title')) {
            $file = $request->file('files_title');
            $path = $file->store('services_files', 'public');

            $existingMain = $service->files()->where('status', 1)->first();
            if ($existingMain) {
                $existingMain->update([
                    'file_path' => $path,
                    'file_type' => $file->getClientOriginalExtension(),
                ]);
            } else {
                ServiceFile::create([
                    'service_id' => $service->id,
                    'file_path' => $path,
                    'file_type' => $file->getClientOriginalExtension(),
                    'status' => 1,
                ]);
            }
        }

        return redirect()->back()->with('success', 'อัปเดตข้อมูลบริการเรียบร้อย');
    }

    public function AdminServicesDelete($id)
    {
        $service = Service::findOrFail($id);

        // ลบไฟล์ที่เกี่ยวข้อง
        foreach ($service->files as $file) {
            Storage::delete($file->file_path); // ลบไฟล์จาก storage
            $file->delete(); // ลบข้อมูลจากฐานข้อมูล
        }

        // ลบบริการ
        $service->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลบริการเรียบร้อย');
    }

    public function AdminServicesDetail($id)
    {
        $service = Service::with('files')->findOrFail($id);

        return view('dashboard.admin.services.detail', compact('service'));
    }
}
