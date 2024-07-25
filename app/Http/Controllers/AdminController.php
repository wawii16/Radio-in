<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Podcast;
use Illuminate\Http\Request;
use App\Models\Radio;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

use Str;
use Auth;

class AdminController extends Controller
{
    // Method untuk menampilkan halaman admin dengan tabel user dan tabel pesan
    public function indexUsersAndMessages()
    {
        $users = User::where('usertype', '!=', 'admin')->get();
        $messages = Message::all();

        return view('admin', compact('users', 'messages'));
    }

    // Method untuk menghapus pesan
    public function deleteMessage($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->back()->with('success', 'Message deleted successfully.');
    }

    // Method untuk menampilkan modals update dan delete user
    public function userModals($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit.user-modals', compact('user'));
    }

    // Method untuk update user
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }

        $user->save();

        return redirect()->route('admin')->with('success', 'User updated successfully.');
    }


    // Method untuk delete user
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin')->with('success', 'User deleted successfully.');
    }

    public function radio()
    {

        $radios = Radio::get();
        // echo $radios;


        return view('admin/radio', compact('radios'));
    }

    public function store_radio(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'artis' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'url' => 'required',
        ]);

        $radio = new Radio;
        $radio->name = $request->name;
        $radio->artis = $request->artis;
        $radio->url = $request->url;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file_path = $file->storeAs('uploads', $file_name, 'public');
            $radio->photo = $file_path;

            // Debugging: Check if file exists
            if (!Storage::disk('public')->exists($file_path)) {
                return back()->withErrors(['photo' => 'File upload failed.']);
            }
        }

        $radio->save();
        return redirect()->route('admin.radio')->with('success', 'Radio added successfully.');
    }

    public function formRadio($id)
    {
        $radio = Radio::findOrFail($id);
        return view('admin/edit/radio', compact('radio'));
    }

    public function updateRadio($id, Request $request)
    {
        $update = Radio::findOrFail($id);

        // Validasi data yang diterima dari request
        $validatedData = $request->validate([
            'name' => 'required',
            'artis' => 'required',
            'photo' => 'sometimes',
            'url' => 'required',
        ]);

        // Perbarui properti dari instance yang ditemukan
        $update->name = $validatedData['name'];
        $update->artis = $validatedData['artis'];
        $update->url = $validatedData['url'];

        if ($request->hasFile('photo')) {
            // Tangani file unggahan dan perbarui foto jika ada
            $filePath = public_path('uploads');
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();

            // Pindahkan file ke folder uploads
            $file->move($filePath, $file_name);

            // Hapus foto lama jika ada
            if (!is_null($update->photo)) {
                $oldImage = public_path('uploads/' . $update->photo);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }

            // Perbarui kolom foto
            $update->photo = $file_name;
        }

        // Simpan perubahan
        $update->save();

        // Redirect ke halaman partner
        return redirect('admin/radio');
    }

    public function deleteRadio($id)
    {
        $delete = Radio::findOrFail($id);
        File::delete(public_path('uploads/' . $delete->photo));
        $delete->delete();

        return redirect('admin/radio');
    }

    public function berita()
    {

        $beritas = Berita::get();
        // echo $radios;


        return view('admin/berita', compact('beritas'));
    }

    public function store_berita(Request $request)
    {
        // dd($request->all());

        $berita = request()->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'isi' => 'required',
            'referensi' => 'required',
            'photo' => 'required',
        ]);

        $filePath = public_path('uploads');
        $berita  = new Berita;
        $berita->judul = ($request->judul);
        $berita->deskripsi = ($request->deskripsi);
        $berita->isi = ($request->isi);
        $berita->referensi = ($request->referensi);
        $file = $request->file('photo');
        $file_name = time() . $file->getClientOriginalName();

        $file->move($filePath, $file_name);
        $berita->photo = $file_name;



        $berita->save();
        return redirect('admin/berita');
    }

    public function formBerita($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin/edit/berita', compact('berita'));
    }

    public function updateBerita($id, Request $request)
    {
        $update = Berita::findOrFail($id);

        // Validasi data yang diterima dari request
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'isi' => 'required',
            'referensi' => 'required',
            'photo' => 'sometimes',
        ]);

        // Perbarui properti dari instance yang ditemukan
        $update->judul = $validatedData['judul'];
        $update->deskripsi = $validatedData['deskripsi'];
        $update->isi = $validatedData['isi'];
        $update->referensi = $validatedData['referensi'];

        if ($request->hasFile('photo')) {
            // Tangani file unggahan dan perbarui foto jika ada
            $filePath = public_path('uploads');
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();

            // Pindahkan file ke folder uploads
            $file->move($filePath, $file_name);

            // Hapus foto lama jika ada
            if (!is_null($update->photo)) {
                $oldImage = public_path('uploads/' . $update->photo);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }

            // Perbarui kolom foto
            $update->photo = $file_name;
        }

        // Simpan perubahan
        $update->save();

        // Redirect ke halaman partner
        return redirect('admin/berita');
    }

    public function deleteBerita($id)
    {
        $delete = Berita::findOrFail($id);
        File::delete(public_path('uploads/' . $delete->photo));
        $delete->delete();

        return redirect('admin/berita');
    }

    public function podcast()
    {

        $podcasts = Podcast::get();
        // echo $radios;


        return view('admin/podcast', compact('podcasts'));
    }
    public function store_podcast(Request $request)
    {
        // dd($request->all());

        $podcast = request()->validate([
            'name' => 'required',
            'artis' => 'required',
            'photo' => 'required',
            'url' => 'required',
        ]);

        $filePath = public_path('uploads');
        $podcast  = new Podcast;
        $podcast->name = ($request->name);
        $podcast->artis = ($request->artis);
        $podcast->url = ($request->url);
        $file = $request->file('photo');
        $file_name = time() . $file->getClientOriginalName();

        $file->move($filePath, $file_name);
        $podcast->photo = $file_name;



        $podcast->save();
        return redirect('admin/podcast');
    }

    public function formpodcast($id)
    {
        $podcast = Podcast::findOrFail($id);
        return view('admin/edit/podcast', compact('podcast'));
    }

    public function updatepodcast($id, Request $request)
    {
        $update = Podcast::findOrFail($id);

        // Validasi data yang diterima dari request
        $validatedData = $request->validate([
            'name' => 'required',
            'artis' => 'required',
            'photo' => 'sometimes',
            'url' => 'required',
        ]);

        // Perbarui properti dari instance yang ditemukan
        $update->name = $validatedData['name'];
        $update->artis = $validatedData['artis'];
        $update->url = $validatedData['url'];

        if ($request->hasFile('photo')) {
            // Tangani file unggahan dan perbarui foto jika ada
            $filePath = public_path('uploads');
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();

            // Pindahkan file ke folder uploads
            $file->move($filePath, $file_name);

            // Hapus foto lama jika ada
            if (!is_null($update->photo)) {
                $oldImage = public_path('uploads/' . $update->photo);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }

            // Perbarui kolom foto
            $update->photo = $file_name;
        }

        // Simpan perubahan
        $update->save();

        // Redirect ke halaman partner
        return redirect('admin/podcast');
    }

    public function deletePodcast($id)
    {
        $delete = Podcast::findOrFail($id);
        File::delete(public_path('uploads/' . $delete->photo));
        $delete->delete();

        return redirect('admin/podcast');
    }
}
