<?php

namespace App\Http\Controllers\admin\promotions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\PromotionFile;
use Illuminate\Support\Facades\Storage;

class PromotionsController extends Controller
{
    public function AdminPromotionsPage()
    {
        $promotions = Promotion::with('files')->orderBy('created_at', 'desc')->get();

        return view('dashboard.admin.promotions.page', compact('promotions'));
    }

    public function AdminPromotionsCreate(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'file' => 'required|file|mimes:jpg,jpeg,png|max:20480',
        ]);

        $promotion = Promotion::create([
            'name' => $request->name ?? 'ไม่มีชื่อ',
        ]);

        if ($request->hasFile('file')) {
            $mainFile = $request->file('file');
            $path = $mainFile->store('promotion_files', 'public');

            PromotionFile::create([
                'promotion_id' => $promotion->id,
                'file_path' => $path,
                'file_type' => $mainFile->getClientOriginalExtension(),
            ]);
        }

        return redirect()->back()->with('success', 'เพิ่มโปรโมชั่นสำเร็จ');
    }

    public function AdminPromotionsDetail($id)
    {
        $promotion = Promotion::with('files')->findOrFail($id);

        return view('dashboard.admin.promotions.detail', compact('promotion'));
    }

    public function AdminPromotionsDelete($id)
    {
        $promotion = Promotion::findOrFail($id);

        foreach ($promotion->files as $file) {
            Storage::disk('public')->delete($file->file_path);
            $file->delete();
        }

        $promotion->delete();

        return redirect()->back()->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }

    public function AdminPromotionsUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png|max:51200',
        ]);

        $promotion = Promotion::findOrFail($id);
        $promotion->name = $request->name;
        $promotion->save();

        if ($request->hasFile('file')) {
            foreach ($promotion->files as $file) {
                Storage::disk('public')->delete($file->file_path);
                $file->delete();
            }

            $uploaded = $request->file('file');
            $path = $uploaded->store('promotion_files', 'public');

            $promotion->files()->create([
                'file_path' => $path,
                'file_type' => $uploaded->getClientOriginalExtension(),
            ]);
        }

        return redirect()->back()->with('success', 'อัปเดตข้อมูลเรียบร้อยแล้ว');
    }
}
