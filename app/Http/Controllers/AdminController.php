<?php

namespace App\Http\Controllers;

use App\Models\Text;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $texts = Text::with(['category', 'author'])->latest()->get();
        $users = User::with('role')->get();
        $roles = Role::all();

        return view('admin', compact('texts', 'users', 'roles'));
    }

    public function blockText(Text $text)
    {
        $text->update(['blocked' => !$text->blocked]);
        return redirect()->route('admin')->with('success', 'Статус статьи изменён');
    }

    public function deleteText(Text $text)
    {
        $text->delete();
        return redirect()->route('admin')->with('success', 'Статья удалена');
    }

    public function editText(Text $text)
    {
        return view('admin-edit', ['text' => $text]);
    }

    public function updateText(Request $request, Text $text)
    {
        $data = $request->validate([
            'heading' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        $text->update($data);
        return redirect()->route('admin')->with('success', 'Статья обновлена');
    }

    public function toggleBan(User $user)
    {
        $user->update(['banned' => !$user->banned]);
        return redirect()->route('admin')->with('success', 'Статус пользователя изменён');
    }

    public function changeRole(Request $request, User $user)
    {
        $request->validate([
            'role_id' => 'required|exists:roles,id',
        ]);

        $user->update(['role_id' => $request->role_id]);
        return redirect()->route('admin')->with('success', 'Роль изменена');
    }
}