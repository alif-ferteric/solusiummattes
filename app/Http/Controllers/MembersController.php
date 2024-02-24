<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    //
    public function index()
    {
        $members = Members::latest()->get();
        return view('members.index', compact('members'));
    }
    public function create()
    {
        return view('members.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'phone_number' => 'required|min:8|max:16',
            'photo' => 'required'
        ]);

        $members = Members::create([
            'branch_id' => $request->branch_id,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'photo' => $request->photo
        ]);

        if ($members) {
            return redirect()
                ->route('member.index')
                ->with([
                    'success' => 'New member has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }
    public function edit($id)
    {
        $members = Members::findOrFail($id);
        return view('members.edit', compact('members'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'phone_number' => 'required|min:8|max:16',
            'photo' => 'required'
        ]);

        $members = Members::findOrFail($id);

        $members->update([
            'branch_id' => $request->branch_id,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'photo' => $request->photo
        ]);

        if ($members) {
            return redirect()
                ->route('member.index')
                ->with([
                    'success' => 'Member has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }
    public function destroy($id)
    {
        $members = Members::findOrFail($id);
        $members->delete();

        if ($members) {
            return redirect()
                ->route('member.index')
                ->with([
                    'success' => 'Member has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('member.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
