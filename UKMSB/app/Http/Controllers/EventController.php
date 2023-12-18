<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\File;


class EventController extends Controller
{
    /**
     * Menampilkan halaman event.
     */
    public function index()
    {
        $events = Event::all();
        return view('pages.event', compact('events'));

    }

    public function indexadmin()
    {
        $events = Event::all();
        return view('pages.admin.eventadmin', compact('events'));
    }

    /**
     * Menampilkan formulir untuk menambahkan event.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Menyimpan event baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required|string|max:20|unique:events',
            'tgl_event' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|string',
        ]);

        $events = new Event();
        $events->nama_event = $request->input('nama_event');
        $events->tgl_event = $request->input('tgl_event');
        $events->harga = $request->input('harga');

        // ...

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');

            // Check if there are any errors during the upload
            if ($image->getError()) {
                return redirect('/admin/event')->with('error', 'Error uploading image: ' . $image->getErrorMessage());
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/events'), $imageName);
            $events->gambar = 'uploads/events/' . $imageName;
        }

        // ...


        $events->save();

        $events = Event::all(); // Retrieve events after saving the new event

        return redirect('/admin/event')->with('success', 'Event berhasil ditambahkan!')->with(compact('events'));
    }

    public function edit($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return redirect('/admin/event')->with('error', 'Event not found.');
        }

        return view('pages.editevent', compact('event'));
    }

    /**
     * Mengupdate event ke database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_event' => 'required|string|max:20|unique:events,nama_event,' . $id,
            'tgl_event' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required|string',
        ]);

        $event = Event::find($id);

        if (!$event) {
            return redirect('/admin/event')->with('error', 'Event not found.');
        }

        $event->nama_event = $request->input('nama_event');
        $event->tgl_event = $request->input('tgl_event');
        $event->harga = $request->input('harga');

        // ...

        // Update gambar jika ada
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');

            // Check if there are any errors during the upload
            if ($image->getError()) {
                return redirect('/admin/event')->with('error', 'Error uploading image: ' . $image->getErrorMessage());
            }

            // Hapus gambar lama jika ada
            if ($event->gambar && File::exists($event->gambar)) {
                File::delete($event->gambar);
            }

            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/events'), $imageName);
            $event->gambar = 'uploads/events/' . $imageName;
        }

        // ...

        $event->save();

        return redirect('/admin/event')->with('success', 'Event berhasil diupdate!');
    }

    /**
     * Menghapus event dari database.
     */
    public function delete($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return redirect('/admin/event')->with('error', 'Event not found.');
        }

        // Hapus gambar jika ada
        if ($event->gambar && File::exists($event->gambar)) {
            File::delete($event->gambar);
        }

        $event->delete();

        return redirect('/admin/event')->with('success', 'Event berhasil dihapus!');
    }
}


